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
        $this->template->trends = $this->context->tags->getTrends();     
    }

    protected function createComponentSearchForm()
    {
        $form = new SearchForm($this->context->groups);
        $form->onSuccess[] = callback( $form, 'submitted' );
        return $form;
    }

}
