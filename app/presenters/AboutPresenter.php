<?php


/**
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class AboutPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->count = $this->context->data->getCount();
		$this->template->groups = $this->context->groups->getList();
	}

}
