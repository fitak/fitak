<?php

/**
 * Base class for all application presenters.
 *
 * @author     Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Utils\Strings;

abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    protected function createTemplate( $class = null )
    {
        $templateHelpers = new TemplateHelpers( $this, $this->context->tags );
        $template = parent::createTemplate( $class );
        $template->registerHelperLoader( callback( $templateHelpers, "loader" ) );
        $template->groupList = $this->context->groups->getList();

        return $template;
    }

}
