<?php

use Fitak\TemplateFilters;

class TemplateFactory extends Nette\Object
{

	/** @var \Nette\Bridges\ApplicationLatte\TemplateFactory */
	private $baseFactory;

	/** @var TemplateFilters */
	private $filters;

	/**
	 * @param \Nette\Bridges\ApplicationLatte\TemplateFactory $baseFactory
	 * @param TemplateFilters $filters
	 */
	public function __construct(
		Nette\Bridges\ApplicationLatte\TemplateFactory $baseFactory,
		TemplateFilters $filters
	) {
		$this->baseFactory = $baseFactory;
		$this->filters = $filters;
	}


	public function createTemplate(Nette\Application\UI\Control $control)
	{
		$template = $this->baseFactory->createTemplate($control);
		$latte = $template->getLatte();
		$latte->addFilter(NULL, [$this->filters, 'loader']);

		return $template;
	}
}
