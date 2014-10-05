<?php

use Fitak\RepositoryContainer;


/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/** @var TemplateFactory @inject */
	public $templateFactory;

	/** @var RepositoryContainer @inject */
	public $orm;

	protected function createTemplate($class = NULL)
	{
		$template = $this->templateFactory->createTemplate($this);
		$template->groupList = $this->orm->groups->findAllSorted();

		return $template;
	}

}
