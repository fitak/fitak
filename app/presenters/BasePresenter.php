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
		$that = $this; // v PHP 5.4 nebude nutne pouzivat docasnu premennu a pojde do USE rovno dat $this
		$this->template->registerHelper('tagToUrl', function ($item) use ($that) {
	 	
		 	$flag = false;
	        $tags = Array( );
	        $tag = "";
	        for( $i = 0; $i < strlen( $item ); $i++ )
	        {
	            if( $flag && $item[$i] == ']' )
	            {
	                $tags[] = $tag;
	                $flag = false;
	                $tag = "";
	            }
	            if( $flag )
	                $tag .= $item[$i];
	            if( $item[$i] == '[' )
	                $flag = true;
	        }
	        
	        foreach ( $tags as $tag )
	        {
	            $cleanTag = Strings::webalize( Strings::trim( $tag ) );
	            $item = str_replace( "[$tag]", "[<a href=\"".$that->link('Search:default', 'tag: '.$cleanTag)."\">$cleanTag</a>]", $item );
	        }

		    return $item;

		});
	}
}
