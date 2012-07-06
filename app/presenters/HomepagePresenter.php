<?php

/**
 * Homepage presenter.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Application\UI\Form,
    Nette\Diagnostics\Debugger;

class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
	
    }

    protected function createComponentSearchForm()
    {
	$form = new SearchForm();
	$form->onSuccess[] = callback( $form, 'submitted' );
	return $form;
    }

}
