<?php

use Nette\Application\UI;

class StreamControl extends UI\Control
{

    /** @var IStreamDataSource */
    public $dataSource;

    /** @var array list of words which will be highlighted */
    public $keywords = array();

    /** @var int maximum number of topics on a single page */
    public $topicsPerPage = 20;

    /** @var Nette\Callback[] */
    public $templateHelpersLoaders;

    public function render()
    {
        /** @var $paginator Nette\Utils\Paginator */
        $paginator = $this['paginator']->paginator;

        $this->template->topics = $this->dataSource->getTopics( $paginator->itemsPerPage, $paginator->offset );
        $this->template->highlightKeywords = $this->keywords;
        $this->template->render();
    }

    protected function createComponentPaginator()
    {
        $vp = new VisualPaginator();
        $vp->paginator->itemsPerPage = $this->topicsPerPage;
        $vp->paginator->itemCount = $this->dataSource->getTotalCount();

        return $vp;
    }

    protected function createTemplate( $class = null )
    {
        $template = parent::createTemplate( $class );
        $template->setFile( __DIR__ . '/StreamControl.latte' );
        foreach( $this->templateHelpersLoaders as $loader )
        {
            $template->registerHelperLoader( $loader );
        }

        return $template;
    }

}
