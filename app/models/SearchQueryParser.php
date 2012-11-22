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
        $matches = Strings::match( $input, '
            /
                (?<=^|\s)tag:\s*
                (?<tag_list> [\pL_-]+ (?:\s*,\s*(?&tag_list))? )
            /xu
        ' );

        if( $matches )
        {
            $tags = Strings::split( $matches['tag_list'], '/\s*,\s*/' );
            $tags = array_map( 'Nette\Utils\Strings::webalize', $tags );
            $query = str_replace( $matches[0], '', $input );
        }
        else
        {
            $tags = array();
            $query = $input;
        }

        return array(
            'query' => $query,
            'tags' => $tags,
        );
    }

}
