<?php

/**
 * Description of SearchPresenter
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Diagnostics\Debugger;

class SearchPresenter extends BasePresenter
{

    /** @var SearchRequest */
    private $searchRequest;

    private $itemsCount = NULL;

    public function actionDefault( $s, $from = NULL, array $groups = NULL )
    {
        $parsed = $this->context->searchQueryParser->parseQuery( $s );

        $this->searchRequest = new SearchRequest();
        $this->searchRequest->query = $parsed['query'];
        $this->searchRequest->tags = $parsed['tags'];
        $this->searchRequest->from = $from;
        $this->searchRequest->groups = ( $groups ? array_map( 'strval', $groups ) : NULL );
    }

    public function renderDefault( $s, $from = NULL, array $groups = NULL )
    {
        $this->template->s = $s;
        $this->template->tags = $this->searchRequest->tags;
        $this->template->itemsCount = $this->getItemsCount();

        // paginator...
        $paginator = $this['vp']->getPaginator();
        $paginator->itemsPerPage = 20;
        $paginator->itemCount = $this->getItemsCount();

        if ( $this->searchRequest->query != "" )
        {
            $this->template->highlightKeywords = $this->context->data->getWordVariations( $this->searchRequest->query );
        }
        $this->template->data = $this->context->data->search( $this->searchRequest, $paginator->getLength(), $paginator->getOffset() );
    }


    public function renderStream()
    {
        $allCount = $this->context->data->getCount( TRUE );
        $this->template->itemsCount = $allCount;

        // paginator...
        $paginator = $this['vp']->getPaginator();
        $paginator->itemsPerPage = 20;
        $paginator->itemCount = $allCount;
        $this->template->data = $this->context->data->getAll( $paginator->getLength(), $paginator->getOffset() );

    }
    protected function createComponentSearchForm()
    {
        $form = new SearchForm($this->context->groups);
        $form->setDefaults( array(
            's' => $this->getParameter('s')
        ) );
        $form->onSuccess[] = callback( $form, 'submitted' );
        return $form;
    }

    /**
     * @return VisualPaginator
     */
    protected function createComponentVp()
    {
        return new VisualPaginator();
    }

    protected function getItemsCount()
    {
        if( $this->itemsCount == NULL )
        {
            $this->itemsCount = $this->context->data->searchCount( $this->searchRequest );
        }
        return $this->itemsCount;
    }

}
