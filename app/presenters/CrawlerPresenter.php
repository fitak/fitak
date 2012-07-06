<?php

/**
 * Description of CrawlerPresenter
 * Here is everything about getting data from Facebook...
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Diagnostics\Debugger,
    Nette\Utils\Strings;

class CrawlerPresenter extends BasePresenter
{

    private $gid, $token, $nextPage, $cnt_inserted = 0, $cnt_updated = 0, $cnt_downloaded = 0;

    // getting data (topics, comments and likes) from Facebook groups 
    public function actionDefault()
    {
	@set_time_limit(600);
	$this->token = $this->context->token->getToken();
	if( !$this->token )
	{
	    $this->redirect( 'Crawler:token' );
	}
	foreach( $this->context->groups->getList() as $group )
	{
	    $this->gid = $group->id;   
	    $this->nextPage = NULL;
	    echo "<h2>Checking group: $group->name </h2>";
	    $this->startGrabbing();
	    $this->cnt_inserted = $this->cnt_updated = $this->cnt_downloaded = 0;
	}
	$this->terminate();
    }

    // getting token from Facebook
    public function actionToken( $state )
    {
	// only poeple on the list should be generating new tokens
	if( !$this->context->token->checkAccess( $_SERVER['REMOTE_ADDR'] ) )
	{
	    echo "Oh sorry man, this is a private party!";
	    $this->terminate();
	}

	// facebook example code...
	$stoken = $this->session->getSection( 'token' );
	if( !isSet( $_GET['code'] ) )
	{
	    $stoken->state = md5( uniqid( rand(), TRUE ) ); //CSRF protection
	    $dialog_url = "https://www.facebook.com/dialog/oauth?client_id="
		    . $this->context->token->getAppId() . "&redirect_uri=" .
		    urlencode( $this->link( '//Crawler:token' ) ) . "&scope=" .
		    $this->context->token->getAppPermissions() . "&state="
		    . $stoken->state;

	    echo("<script> top.location.href='" . $dialog_url . "'</script>");
	    $this->terminate();
	}

	if( isSet( $stoken->state ) && ($stoken->state === $_GET['state']) )
	{
	    $token_url = "https://graph.facebook.com/oauth/access_token?"
		    . "client_id=" . $this->context->token->getAppId() . "&redirect_uri=" .
		    urlencode( $this->link( '//Crawler:token' ) )
		    . "&client_secret=" . $this->context->token->getAppSecret() . "&code=" . $_GET['code'];

	    $response = file_get_contents( $token_url );
	    $params = null;
	    parse_str( $response, $params );

	    $date = new DateTime();
	    $date->add( new DateInterval( 'PT' . $params["expires"] . 'S' ) );
	    $this->context->token->saveToken( $params['access_token'], $date );
	    echo "Thanks for your token :)";
	} else
	{
	    echo("The state does not match. You may be a victim of CSRF.");
	}
	$this->terminate();
    }

    private function startGrabbing()
    {
	while( $this->grabPage() )
	{
	    echo "Inserted: " . $this->cnt_inserted . " | Updated: " . $this->cnt_updated . "<br />";
	    @ob_flush();
	    @flush();
	}
    }

    // proccess one block of JSON code (25 messages from feed)
    private function grabPage()
    {
	$data = $this->getJson();
	if( !$this->nextPage )
	    return false;
	//echo "JSONS downloaded: " . $this->cnt_downloaded . "<br />";
	@ob_flush();
	@flush();
	foreach( $data->data as $message )
	{
	    $ids = explode( "_", $message->id );
	    $datetime = null;
	    $datetime = $this->context->data->getUpdatedTime( $ids[1] );

	    if( $datetime == str_replace( "+0000", "", str_replace( "T", " ", $message->updated_time ) ) )
	    {
		echo $this->cnt_inserted . ' messages was saved and ' . $this->cnt_updated . ' 
                    updated.<br />';
		return false;
	    }
	    $mess = "";
	    $likes_count = 0;
	    if( isSet( $message->likes ) )
		$likes_count = $message->likes->count;
	    if( isSet( $message->message ) )
		$mess = $message->message;

	    if( !$datetime )
	    {
		$this->context->data->insertTopic( $ids[1], $this->gid, 0, $mess, $message->created_time, $message->updated_time, $message->comments->count, $likes_count, $message->from->id, $message->from->name );
		$this->saveTags( $mess, $ids[1] );
		$this->cnt_inserted++;
	    } else
	    {
		$this->context->data->updateTopic( $ids[1], $mess, $message->updated_time, $message->comments->count, $likes_count );
		$this->cnt_updated++;
	    }

	    if( isSet( $message->likes->data ) && count( $message->likes->data ) )
	    {
		foreach( $message->likes->data as $like )
		{
		    $this->context->likes->refill( $ids[1], $like->id, $like->name );
		}
	    }


	    if( isSet( $message->comments->data ) && count( $message->comments->data ) )
	    {
		foreach( $message->comments->data as $comment )
		{
		    $ids = explode( "_", $comment->id );
		    $mess = "";
		    if( isSet( $comment->message ) )
			$mess = $comment->message;
		    $likes_count = 0;
		    if( isSet( $comment->likes ) )
			$likes_count = $comment->likes;

		    if( $this->context->data->existsComment( $ids[2], $ids[1] ) )
		    {
			$this->context->data->updateComment( $ids[2], $ids[1], $mess, $likes_count );
			$this->cnt_updated++;
		    } else
		    {


			$this->context->data->insertComment( $ids[2], $this->gid, $ids[1], $mess, $comment->created_time, $likes_count, $comment->from->id, $comment->from->name );
			$this->cnt_inserted++;
		    }
		}
	    }
	}
	return true;
    }

    // get another json with group feed
    private function getJson( $cnt_attempts = 0 )
    {
	if( !$this->nextPage || $this->nextPage == "" )
	{
	    $query = "https://graph.facebook.com/" . $this->gid . "/feed?access_token=" . $this->token;
	} else
	{
	    $query = $this->nextPage;
	}

	// trying download next json, it is possible to make 5 attempts per one query
	try
	{
	    $pageContent = file_get_contents( $query );
	} catch( Exception $e )
	{
	    echo "$cnt_attempts attempt per query ($query).";
	    if( $cnt_attempts > 5 )
	    {
		echo "5 attempts per query ($query) are exhausted. Stopping whole script.";
		Debugger::log( "$e on query: $query" );
		$this->terminate();
	    }
	    echo 'Caught exception: ', $e->getMessage(), " ... repeating query ($query)\n";
	    return getJson( ++$cnt_attempts );
	}
	$json = json_decode( $pageContent );
	if( isSet( $json->paging->next ) )
	{
	    $this->nextPage = $json->paging->next;
	} else
	{
	    $this->nextPage = NULL;
	}

	$this->cnt_downloaded++;
	return $json;
    }

    // there are tags in messages like [tag], we wanna save them apart
    private function saveTags( $message, $message_id )
    {
	$tags = $this->getTags( $message );
	if( !$tags )
	    return;
	foreach( $tags as $tag )
	{
	    $this->context->tags->saveTag( $tag, $message_id );
	}
    }

    // return array of tags from one message
    private function getTags( $message )
    {
	$flag = false;
	$tags = Array( );
	$tag = "";
	for( $i = 0; $i < strlen( $message ); $i++ )
	{
	    if( $flag && $message[$i] == ']' )
	    {
		$tags[] = Strings::webalize( Strings::trim( $tag ) );
		$flag = false;
		$tag = "";
	    }
	    if( $flag )
		$tag .= $message[$i];
	    if( $message[$i] == '[' )
		$flag = true;
	}
	return $tags;
    }

}