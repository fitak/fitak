<?php

namespace Fitak;

use Nette;
use Nette\Bridges\ApplicationLatte\TemplateFactory as NetteTemplateFactory;


class TemplateFactory extends Nette\Object
{

	/** @var NetteTemplateFactory */
	private $baseFactory;

	/** @var TemplateFilters */
	private $filters;

	/** @var ITemplateMacrosFactory */
	private $macrosFactory;

	public function __construct(NetteTemplateFactory $baseFactory, TemplateFilters $filters, ITemplateMacrosFactory $macrosFactory)
	{
		$this->baseFactory = $baseFactory;
		$this->filters = $filters;
		$this->macrosFactory = $macrosFactory;
	}

	public function createTemplate(Nette\Application\UI\Control $control)
	{
		$template = $this->baseFactory->createTemplate($control);
		$latte = $template->getLatte();
		$compiler = $latte->getCompiler();

		$this->filters->register($latte);
		$this->macrosFactory->create($compiler)->register();

		return $template;
	}

}
