<?php

use Nette\Application\UI\Form,
    Nette\ComponentModel\IContainer;

class SearchForm extends Form
{

    public function __construct( Groups $groups )
    {
        parent::__construct();

        $this->addText( 's', 'dotaz')
            ->setHtmlId( 's' )
            ->setAttribute( 'autofocus', true );

        $this->addSelect( 'sortBy', 'Seřadit podle:', array(
                SearchRequest::SORT_TIME => 'času',
                SearchRequest::SORT_RELEVANCE => 'relevance',
        ) );

        $this->addText( 'from', 'Autor:' );

        $this->addContainer( 'groups' );
        foreach( $groups->getList() as $group )
        {
            $this['groups']->addCheckbox( $group->id, $group->name );
        }


        $this->addSubmit( 'send', 'Vyhledat' )
            ->setHtmlId( 'send' );
    }

    public function submitted( self $form )
    {
        $values = $form->getValues( true );
        $params = array( 's' => $values['s'] );

        if( $values['sortBy'] === SearchRequest::SORT_RELEVANCE )
        {
            $params['sortBy'] = $values['sortBy'];
        }

        if( $values['groups'] !== array_filter( $values['groups'] ) )
        {
            $params['groups'] = array_keys( array_filter( $values['groups'] ) );
        }

        if( !empty( $values['from'] ) )
        {
            $params['from'] = $values['from'];
        }

        $this->presenter->redirect( 'Search:', $params );
    }

}
