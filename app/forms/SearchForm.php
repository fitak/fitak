<?php

use Nette\Application\UI\Form,
    Nette\ComponentModel\IContainer;

class SearchForm extends Form
{

    public function __construct( IContainer $parent = NULL, $name = NULL )
    {
	parent::__construct( $parent, $name );

	$this->addText( 's', 'dotaz', 100, 500 )
		->setRequired( 'Nic jste nezadali.' )
		->addRule( Form::MIN_LENGTH, 'Vyhledávací dotaz musí mít alespoň %d znaky', 3 );
	$this->addCheckbox( 'includeComments', 'prohledávat i komentáře' )
		->setDefaultValue( TRUE );

	$this->addSubmit( 'send', '         Vyhledej         ' );
    }

    function submitted( $form )
    {
	$values = $form->getValues();
	$this->presenter->redirect( 'Search:', Array( $values['s'], $values['includeComments'] ) );
    }

}

?>
