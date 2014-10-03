<?php


/**
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->trends = $this->context->tags->getTrends();
		$this->template->news = $this->orm->news->findRecent();
	}

	protected function createComponentSearchForm()
	{
		$form = new SearchForm($this->orm, $advanced = FALSE);
		$form->onSuccess[] = callback($form, 'submitted');

		return $form;
	}

}
