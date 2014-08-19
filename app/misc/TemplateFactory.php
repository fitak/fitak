<?php

class TemplateFactory extends Nette\Object
{

    /** @var \Nette\Bridges\ApplicationLatte\TemplateFactory */
    private $templateFactory;

    /** @var TemplateHelpers */
    private $templateHelpers;

    /**
     * @param \Nette\Bridges\ApplicationLatte\TemplateFactory $templateFactory
     * @param TemplateHelpers $templateHelpers
     */
    public function __construct( Nette\Bridges\ApplicationLatte\TemplateFactory $templateFactory, TemplateHelpers $templateHelpers )
    {
        $this->templateFactory = $templateFactory;
        $this->templateHelpers = $templateHelpers;
    }


    public function createTemplate( Nette\Application\UI\Control $control )
    {
        $template = $this->templateFactory->createTemplate( $control );
        $latte = $template->getLatte();
        $latte->addFilter( null, [ $this->templateHelpers, 'loader' ] );

        return $template;
    }
}
