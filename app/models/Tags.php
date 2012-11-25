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

    // get cloud of tags
    public function getTrends()
    {
        $result = $this->db->query( "SELECT tags.name, count(tags.id) as count FROM data
                                     INNER JOIN data_tags ON data.id = data_tags.data_id
                                     INNER JOIN tags ON data_tags.tags_id = tags.id
                                     WHERE data.created_time > DATE_SUB(now(), INTERVAL 1 MONTH)
                                     GROUP BY tags.id
                                     ORDER BY count(tags.id) DESC
                                     LIMIT 25" )->fetchAll();

        if( !count( $result ) )
        {
            return null;
        }

        $maximum = $result[0]["count"];
        $tagCloud = Array();
        foreach( $result as $key => $tag )
        {
            if( $tag->name == "" ) continue;
            $tagCloud[$key]["name"] = $tag->name;
            $tagCloud[$key]["size"] = round( 1 + ( $tag->count * 100 ) / $maximum * 0.015, 1 );
        }

        usort( $tagCloud, function ( $elem1, $elem2 )
        {
             return strcmp( $elem1['name'], $elem2['name'] );
        });

        return $tagCloud;
    }

    // extract tags ([tag1][tag2]....) from the start of input
    // return array(cleanTags, originalTags)
    public function extractTags( $input )
    {
        $matches = Strings::match( $input, '/^\s*(?<tag_list>\[\s*[\pL\d._-]+\s*\](?:\s*(?&tag_list))?)/u' );

        if( $matches )
        {
            $tags = Strings::trim( $matches['tag_list'], '[] ' );
            $tags = Strings::split( $tags, '/\]\s*\[/' );
            $tags = array( array_map( 'Nette\Utils\Strings::webalize', $tags ), $tags );
        }
        else
        {
            $tags = array();
        }

        return $tags;
    }

}
