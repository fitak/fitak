<?php

/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var TemplateFactory */
    protected $templateFactory;

    public function __construct(TemplateFactory $templateFactory)
    {
        parent::__construct();
        $this->templateFactory = $templateFactory;
    }

    protected function createTemplate( $class = null )
    {
        $template = $this->templateFactory->createTemplate($this);
        $template->groupList = $this->context->groups->getList();

        return $template;
    }

}
