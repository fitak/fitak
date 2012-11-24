<?php

/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Utils\Strings;

abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    function beforeRender(){
		$that = $this;
		// helper - makes active link from tag
		$this->template->registerHelper('tagToUrl', function ($item) use ($that) {
	 	
		 	$tags = $this->context->tags->extractTags( $item );
	        
	        if ($tags)
	        {
		        foreach ( $tags[0] as $index => $tag )
		        {
		            $item = str_replace( '['.$tags[1][$index].']', "[<a href=\"".$that->link('Search:default', 'tag:'.$tag)."\">$tag</a>]", $item );
		        }
	        }

		    return $item;
		});
	}
}
