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

	public function __construct(NetteTemplateFactory $baseFactory, TemplateFilters $filters)
	{
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
