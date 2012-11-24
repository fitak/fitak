<?php
use Nette\Utils\Strings;

class TemplateHelpers extends Nette\Object
{

    /** @var Nette\Application\UI\Presenter */
    private $presenter;

    /** @var Tags */
    private $tagsModel;

    public function __construct( Nette\Application\UI\Presenter $presenter, Tags $tagsModel )
    {
        $this->presenter = $presenter;
        $this->tagsModel = $tagsModel;
    }

    public function loader( $name )
    {
        if( method_exists( $this, $name ) )
        {
            return callback( $this, $name );
        }
    }

    public function tagToUrl( $item )
    {
        $tags = $this->tagsModel->extractTags( $item );

        if ($tags)
        {
            foreach ( $tags[0] as $index => $tag )
            {
                $url = $this->presenter->link( 'Search:default', 'tag:' . $tag );
                $item = str_replace( '['.$tags[1][$index].']', "[<a href=\"$url\">$tag</a>]", $item );
            }
        }

        return $item;
    }

}
