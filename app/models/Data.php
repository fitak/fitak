<?php
use Nette\Utils\Strings;

class Data extends BaseModel
{

    // get updated time at topic/comment by id
    public function getUpdatedTime( $id )
    {
        $result = $this->db->query( "SELECT updated_time FROM data
                                   WHERE id = %i LIMIT 1", $id );
        if( !count( $result ) )
            return false;
        return $result->fetchSingle();
    }

    // insert new topic
    public function insertTopic( $id, $gid, $pid, $message, $ctime, $utime, $comments, $likes, $from_id, $from_name )
    {
        $arr = array(
            'id' => $id,
            'group_id' => $gid,
            'parent_id' => $pid,
            'message' => $message,
            'created_time' => $ctime,
            'updated_time' => $utime,
            'comments' => $comments,
            'likes' => $likes,
            'from_id' => $from_id,
            'from_name' => $from_name
        );
        $this->db->query( 'INSERT INTO data', $arr );
    }

    // update old topic
    public function updateTopic( $id, $message, $utime, $comments, $likes )
    {
        $arr = array(
            'message' => $message,
            'updated_time' => $utime,
            'comments' => $comments,
            'likes' => $likes,
        );
        $this->db->query( 'UPDATE data SET', $arr, 'WHERE id = %i LIMIT 1', $id );
    }

    // update old comment
    public function updateComment( $id, $pid, $message, $likes )
    {
        $arr = array(
            'message' => $message,
            'likes' => $likes
        );
        $this->db->query( 'UPDATE data SET', $arr, '
                                     WHERE id = %i AND parent_id = %i LIMIT 1', $id, $pid );
    }

    // insert new comment
    public function insertComment( $id, $gid, $pid, $message, $ctime, $likes, $from_id, $from_name )
    {
        $arr = array(
            'id' => $id,
            'group_id' => $gid,
            'parent_id' => $pid,
            'message' => $message,
            'created_time' => $ctime,
            'likes' => $likes,
            'from_id' => $from_id,
            'from_name' => $from_name
        );
        $this->db->query( 'INSERT INTO data', $arr );
    }

    // is there same comment (topic id, parent id) ?
    public function existsComment( $id, $pid )
    {
        $result = $this->db->query( "SELECT id FROM data
                                   WHERE id = %i AND parent_id = %i LIMIT 1", $id, $pid );
        if( count( $result ) )
            return true;
        return false;
    }

    // main search function
    // topics and comments are in the same data table, specific by parent_id column
    public function search( SearchRequest $request, $length, $offset )
    {
        $sql = $this->db->select( "data.id, data.parent_id" )
            ->from( "data" )
            ->join( "groups" )
            ->on( "data.group_id = groups.id" )
            ->orderBy( "data.created_time DESC" );

        // use of filters on query
        $this->addSearchCondition( $sql, $request );
        $result = $sql->fetchAll( $offset, $length );

        $topicsIds = array();
        $commentsIds = array();
        foreach( $result as $item)
        {
            if( $item->parent_id )
            {
                $topicsIds[] = $item->parent_id;
                $commentsIds[] = $item->id;
            } else
            {
                $topicsIds[] = $item->id;
            }
        }

        $topicsResult = $this->db->select( "data.*, groups.name AS group_name, groups.closed AS group_closed" )
            ->from( "data" )
            ->join( "groups" )
            ->on( "data.group_id = groups.id" )
            ->where( "data.id IN %in", $topicsIds )
            ->fetchAssoc( "id" );

        // sort topics the same way as original result was sorted
        $topics = array();
        foreach( $topicsIds as $topicId )
        {
            $topics[$topicId] = $topicsResult[$topicId];
        }

        $comments = $this->getComments( $topicsIds );
        $topics = $this->combineTopicsWithComments( $topics, $comments, $commentsIds );

        return $topics;
    }

    private function getComments( array $topicsIds )
    {
        $comments = $this->db->select( "*" )
            ->from( "data" )
            ->where( "parent_id IN %in", $topicsIds )
            ->fetchAssoc( "parent_id|id" );

        return $comments;
    }

    private function combineTopicsWithComments( array $topics, array $comments, array $markedCommentsIds = array() )
    {
        foreach( $topics as $topic )
        {
            // $topic->likesData = $this->getLikes( $topic->id );
            $topic->message = $this->cleanMessage( $topic->message );
            $topic->from_name = stripslashes( $topic->from_name );

            if( isset( $comments[$topic->id] ) )
            {
                $topic->comments = $comments[$topic->id];
                foreach( $topic->comments as $comment )
                {
                    $comment->topic = $topic;
                    $comment->marked = in_array( $comment->id, $markedCommentsIds );
                    $comment->message = $this->cleanMessage( $comment->message );
                    $comment->from_name = stripslashes( $comment->from_name );
                }
            }
            else
            {
                $topic->comments = array();
            }
        }

        return $topics;
    }

    // get all topics and their comments
    public function getAll( $length, $offset )
    {
        $sql = $this->db->select( "data.*, groups.name AS group_name, groups.closed AS group_closed" )
        ->from( "data" )
        ->join( "groups" )
        ->on( "data.group_id = groups.id" )
        ->where( "data.parent_id = 0" )
        ->orderBy( "data.created_time DESC" )
        ->limit( $length )
        ->offset( $offset );

        $topics = $sql->fetchAssoc( "id" );

        $comments = $this->getComments( array_keys( $topics ) );
        $topics = $this->combineTopicsWithComments( $topics, $comments );

        return $topics;
    }

    // get array of ids topics, which are labeled by input tags (string array = tag names)
    public function getMatchedIdByTags( $tags )
    {
        return $this->db->select( "DISTINCT data_id" )
                ->from( "data_tags" )
                ->innerJoin( "tags" )
                ->on( "data_tags.tags_id = tags.id" )
                ->where( "tags.name IN (%s)", $tags )
                ->fetchPairs();
    }

    // number of results
    public function searchCount( SearchRequest $request )
    {
        $result = $this->db->select("count(*)")
                ->from( "data" )
                ->join( "groups" )
                ->on( "data.group_id = groups.id" );

        $this->buildSearchCondition( $result, $request );

        return $result->fetchSingle();
    }

    // use filters on query (tags specified, searching by author, searching by query, groups selected)
    private function buildSearchCondition( DibiFluent $sql, SearchRequest $request )
    {
        if ( $request->query != "" )
        {
            $sql->where( "MATCH(data.message) AGAINST (%s IN BOOLEAN MODE)", $request->query );
        }

        if ( $request->query == "" && $request->from == "" )
        {
            $sql->where( "data.parent_id = 0" );
        }

        if ( $request->from != "" )
        {
            $sql = $sql->where( "data.from_name LIKE %~like~", $request->from );
            // protection of hidden names in closed/secret groups
            $sql = $sql->where( "groups.closed = 0" );
        }

        if ( count( $request->tags ) )
        {
            $tagedPostsId = $this->getMatchedIdByTags( $request->tags );
            if ( !count( $tagedPostsId ) )
            {
                $sql = $sql->where( "data.id = 0" );
            }
            else
            {
                $sql = $sql->where( "data.id IN %in", $tagedPostsId );
            }

        }

        if ( count( $request->groups ) )
        {
            $sql->where( "data.group_id IN %in", $request->groups );
        }
    }

    // sum of all topics and comments
    public function getCount($justTopics = FALSE)
    {
        $result = $this->db->select( "count(*)" )
                           ->from( "data" );
        if ($justTopics)
        {
            $result = $result->where( "parent_id = 0" );
        }
        return $result->fetchSingle();
    }

    // get likes at topic by id
    public function getLikes( $id )
    {
        $result = $this->db->query( "
            SELECT from_name, from_id
            FROM likes
            WHERE message_id = %i
            ORDER BY id
            ", $id
        );
        $result = $result->fetchAll();
        foreach( $result as $item )
        {
            $item->from_name = stripslashes( $item->from_name );
        }
        return $result;
    }

    // change links, strip slashes and HTML
    private function cleanMessage( $message )
    {
        return $this->urlChange( stripslashes( str_replace( '\n', '<br />', htmlspecialchars( $message ) ) ) );
    }

    // find and replace all links in text, links will be shorter (clever cut), titled and active
    private function urlChange( $inText )
    {
        // define an url regular exression pattern:
        $urlPattern = "/(https?:\/\/|www.)(www.)?([-a-z0-9]*[a-z0-9]\.)(\bcom\b|\bbiz\b|\bgov\b|\bmil\b|\bnet\b|\borg\  b|[a-z][a-z]|[a-z][a-z]\.[a-z][a-z])\/?([a-zA-Z0-9]*)?([a-zA-Z0-9_\-\.\?=\/&%#;~\+]*)?/";
        // get all matches
        preg_match_all( $urlPattern, $inText, $temp );
        $temp = $temp[0]; // an array of all urls

        $urlTag = array( );
        foreach( $temp as &$url )
        {
            $urlShort = str_replace( "http://", "", $url );
            while( strlen( $urlShort ) > 35 )
            { // limit is set to 35
                if( is_bool( strpos( $urlShort, "/" ) ) )
                { // are there any natural places to cut the link?
                    $urlShort = substr( $urlShort, 0, 30 );
                } else
                { // find a good place to cut the link
                    $newLength = max( strrpos( $urlShort, "/" ), strrpos( $urlShort, "?" ), strrpos( $urlShort, "#" ) );
                    $urlShort = substr( $urlShort, 0, $newLength );
                }
                $urlShort = $urlShort . "...";
            }
            $urlTag[] = "<a href=\"$url\" title=\"$url\">$urlShort</a>";
        }
        if( 0 < sizeof( $temp ) )
        {
            // if there are any urls in the text, replace them with the new code
            return strtr( $inText, array_combine( $temp, $urlTag ) );
        } else
        {
            return $inText;
        }
    }

    // return array of variations for input word
    public function getWordVariations( $word )
    {
        $sNoBrackets = Strings::replace( $word, "/[\\[\\](){}]/", "" );

        $keywords = array_merge(
            array( $word, $sNoBrackets ),
            explode( "-", $sNoBrackets ),
            explode( "_", $sNoBrackets ),
            explode( " ", $sNoBrackets ),
            Strings::split( $sNoBrackets, "[ _-]" )
        );

        foreach( $keywords as $index => $kw )
        {
            $keywords[$index] = Strings::trim( $kw );
            if( Strings::length( $keywords[$index] ) < 3 )
            {
                unset( $keywords[$index] );
            }
            else
            {
                $keywords[] = Strings::toAscii( $keywords[$index] );
            }
        }

        $keywords = array_unique( $keywords );
        $keywords = array_values( $keywords );

        return $keywords;
    }

}
