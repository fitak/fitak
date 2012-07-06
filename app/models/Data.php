<?php

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

    // is there same comment?
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
    // comments - true = search in the comments too, false = search only in the topics
    public function search( $query, $comments, $length, $offset )
    {
        $where = "";
        if( !$comments )
            $where = " AND main.parent_id = 0";

        $result = $this->db->query( "
            SELECT main.*, groups.name,
                   data.message as parentMessage,
                   data.created_time as parentCreated_time,
                   data.updated_time as parentUpdated_time,
                   data.comments as comments,
                   data.likes as parentLikes,
                   data.from_name as parentFrom_name,
                   data.from_id as parentFrom_id
            FROM data as main
            JOIN groups ON main.group_id = groups.id
            LEFT JOIN data ON main.parent_id = data.id
            WHERE MATCH(main.message) AGAINST (%s IN BOOLEAN MODE)
                  $where
            ORDER BY main.created_time DESC
            LIMIT %i, %i
            ", $query, $offset, $length
        );
        $result = $result->fetchAll();


        // there are two scenarios:
        // 1) we find our keyword in a topic -> now we get likes and comments
        // 2) we find our keyrowd in a comment -> now we get parent topic, likes and other comments
        foreach( $result as $item )
        {
            // add Likes details (from_name, from_id)
            $item->likesData = $this->getLikes( $item->id );
            // strip slashes, \n => <br>, short URL etc...
            $item->message = $this->cleanMessage( $item->message );
            $item->from_name = stripslashes( $item->from_name );
            // scenario 2)
            if( isSet( $item->parentMessage ) )
            {
                $item->commentsData = $this->getComments( $item->parent_id );
                // we'll mark comment, which is originally matched
                foreach( $item->commentsData as $comment )
                {
                    if( $comment->id == $item->id )
                    {
                        $comment->marked = 1;
                    } else
                    {
                        $comment->marked = 0;
                    }
                }
                $item->parentMessage = $this->cleanMessage( $item->parentMessage );
                $item->parentFrom_name = stripslashes( $item->parentFrom_name );
                // scenario 1)
            } else
            {
                $item->commentsData = $this->getComments( $item->id );
            }
        }
        return $result;
    }

    // number of results by search
    public function searchCount( $query, $comments )
    {
        $where = "";
        if( !$comments )
            $where = " AND parent_id = 0";

        $result = $this->db->query( "
            SELECT count(*)
            FROM data
            WHERE MATCH(message) AGAINST (%s IN BOOLEAN MODE)
                  $where
            ", $query
        );
        return $result->fetchSingle();
    }

    // sum of all topics and comments
    public function getCount()
    {
        $result = $this->db->query( "SELECT count(*) FROM data" );
        return $result->fetchSingle();
    }

    // get comments at topic by id
    public function getComments( $id )
    {
        $result = $this->db->query( "
            SELECT *
            FROM data
            WHERE parent_id = %i
            ORDER BY created_time
            ", $id
        );
        $result = $result->fetchAll();
        foreach( $result as $item )
        {
            $item->message = $this->cleanMessage( $item->message );
            $item->from_name = stripslashes( $item->from_name );
        }
        return $result;
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

    private function cleanMessage( $message )
    {
        return $this->urlChange( stripslashes( str_replace( '\n', '<br />', htmlspecialchars( $message ) ) ) );
    }

    private function urlChange( $inText )
    {
        // define an url regular exression pattern:
        $urlPattern = "/(https?:\/\/|www.)(www.)?([-a-z0-9]*[a-z0-9]\.)(\bcom\b|\bbiz\b|\bgov\b|\bmil\b|\bnet\b|\borg\  b|[a-z][a-z]|[a-z][a-z]\.[a-z][a-z])\/?([a-zA-Z0-9]*)?([a-zA-Z0-9_\-\.\?=\/&%#;]*)?/";
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

}

?>
