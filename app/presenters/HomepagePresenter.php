<?php

use Fitak\TagCloudControl;


/**
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
class HomepagePresenter extends BasePresenter
{
    protected function startup()
    {
        parent::startup();
        $this->requireLogin('Pro přístup k obsahu je nutné se přihlásit.');
    }

	public function renderDefault()
	{
		$this->template->news = $this->orm->news->findRecent();
	}

	protected function createComponentSearchForm()
	{
		$form = new SearchForm($this->orm, $advanced = FALSE);
		$form->onSuccess[] = callback($form, 'submitted');

		return $form;
	}

	protected function createComponentTagCloud()
	{
		$trending = $this->orm->tags->findTrending();
		return new TagCloudControl($trending);
	}

}
