<?php

use Nette\Utils\Strings;

class Tags extends BaseModel
{

    public function saveTag( $tag, $message_id )
    {
        $result = $this->db->query( "SELECT id FROM tags WHERE name = %s LIMIT 1", $tag );
        $id = $result->fetchSingle();
        if( !$id )
        {
            $args = Array(
                'name' => $tag,
                'count' => 1
            );
            $this->db->query( "INSERT INTO tags", $args );
            $id = $this->db->insertId();
        }
        $args = Array(
            'tags_id' => $id,
            'data_id' => $message_id
        );
        $this->db->query( "INSERT INTO data_tags", $args );
        $this->db->query( "UPDATE tags SET count = count + 1 WHERE id = %i LIMIT 1", $id );
    }

}
