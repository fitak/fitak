<?php

use Fitak\RepositoryContainer;


/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/** @var TemplateFactory */
	protected $templateFactory;

	/** @var RepositoryContainer */
	protected $orm;

	public function __construct(TemplateFactory $templateFactory, RepositoryContainer $orm)
	{
		parent::__construct();
		$this->templateFactory = $templateFactory;
		$this->orm = $orm;
	}

	protected function createTemplate($class = NULL)
	{
		$template = $this->templateFactory->createTemplate($this);
		$template->groupList = $this->orm->groups->findAllSorted();

		return $template;
	}

}
