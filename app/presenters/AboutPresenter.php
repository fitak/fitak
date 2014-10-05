<?php


/**
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class AboutPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->count = $this->orm->posts->findAll()->countStored();
		$this->template->groups = $this->orm->groups->findAllSorted();
	}

}
