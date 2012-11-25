<?php
use Nette\Utils\Strings;

class SearchQueryParser extends Nette\Object
{

    /**
     * Parse search query.
     *
     * @param  string
     * @return array associative array with keys 'query' and 'tags'
     */
    public function parseQuery( $input )
    {
        // normalize input
        $input = Strings::lower( Strings::trim( $input ) );
        $input = Strings::replace( $input, '/\s+/', ' ' );

        // extract tags
        $matches = Strings::matchAll( $input, '/(?<=^|\s)tag:\s*(?<tag_list>[\pL\d_-]+(?:\s*,\s*(?&tag_list))?)/u' );

        $tags = array();
        $query = $input;
        foreach( $matches as $m )
        {
            $tmp = Strings::split( $m['tag_list'], '/\s*,\s*/' );
            $tmp = array_map( 'Nette\Utils\Strings::webalize', $tmp );
            $tmp = array_unique( $tmp );
            $tags = array_merge( $tags, $tmp );
            $query = str_replace( $m[0], '', $query );
        }

        return array(
            'query' => $query,
            'tags' => $tags,
        );
    }

}
