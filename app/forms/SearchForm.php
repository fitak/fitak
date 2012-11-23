<?php

use Nette\Application\UI\Form,
    Nette\ComponentModel\IContainer;

class SearchForm extends Form
{

    public function __construct( Groups $groups )
    {
        parent::__construct();

        $this->addText( 's', 'dotaz', 100, 500 );
            //->setRequired( 'Nic jste nezadali.' );
            //->addRule(Form::MIN_LENGTH, 'Vyhledávací dotaz musí mít alespoň %d znaky', 3);

        $this->addText( 'from', 'Autor:' );

        $this->addContainer( 'groups' );
        foreach( $groups->getList() as $group )
        {
            $this['groups']->addCheckbox( $group->id, $group->name );
        }


        $this->addSubmit( 'send', 'Vyhledej' );
    }

    public function submitted( self $form )
    {
        $values = $form->getValues( true );
        $params = array( 's' => $values['s'] );

        if ( $values['groups'] !== array_filter( $values['groups'] ) )
        {
            $params['groups'] = array_keys( array_filter( $values['groups'] ) );
        }

        if ( !empty( $values['from'] ) )
        {
            $params['from'] = $values['from'];
        }

        $this->presenter->redirect( 'Search:', $params );
    }

}
