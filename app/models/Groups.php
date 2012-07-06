<?php

class Groups extends BaseModel
{

    public function getList()
    {
        return $this->db->query( "SELECT id, name FROM groups " )->fetchAll();
    }

}
