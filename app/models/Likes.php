<?php

class Likes extends BaseModel
{

    // if exists the Like, it'll be updated... if not, it'll be created
    public function refill( $id, $from_id, $from_name )
    {
        $arr = array(
            'message_id' => $id,
            'from_id' => $from_id,
            'from_name' => $from_name
        );
        $result = $this->db->query( "SELECT message_id FROM likes
                                           WHERE message_id = %i AND from_id = %i LIMIT 1", $id, $from_id );
        if( !count( $result ) )
        {
            $this->db->query( 'INSERT INTO likes', $arr );
        }
    }

}

?>
