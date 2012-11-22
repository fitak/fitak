<?php

/**
 * Description of SearchPresenter
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Diagnostics\Debugger;

class SearchPresenter extends BasePresenter
{

    private $searchQuery, $allQuery, $includeComments, $vp, $tags;
    private $itemsCount = NULL;

    public function renderDefault( $s, $from = NULL, array $groups = NULL)
    {
        $parsed = $this->context->searchQueryParser->parseQuery( $s );
        $request = new SearchRequest();
        $request->query = $parsed['query'];
        $request->tags = $parsed['tags'];
        $request->from = $from;
        $request->groups = ( $groups ? array_map( 'strval', $groups ) : NULL );

        $this->allQuery = $s;
        $this->searchQuery = $request->query;
        $this->tags = $request->tags;

        $this->template->s = $s;
        $this->template->tags = $this->tags;
        $this->template->itemsCount = $this->getItemsCount();

        // paginator...
        $this->vp = new VisualPaginator( $this, 'vp' );
        $paginator = $this->vp->getPaginator();
        $paginator->itemsPerPage = 20;
        $paginator->itemCount = $this->getItemsCount();

        if ( $this->searchQuery != "" )
        {
            $this->template->highlightKeywords = $this->context->data->getWordVariations( $this->searchQuery );
        }
        $this->template->data = $this->context->data->search( $request, $paginator->getLength(), $paginator->getOffset() );
    }


    public function renderStream()
    {
        $allCount = $this->context->data->getCount( TRUE );
        $this->template->itemsCount = $allCount;

        // paginator...
        $this->vp = new VisualPaginator( $this, 'vp' );
        $paginator = $this->vp->getPaginator();
        $paginator->itemsPerPage = 20;
        $paginator->itemCount = $allCount;
        $this->template->data = $this->context->data->getAll( $paginator->getLength(), $paginator->getOffset() );

    }
    protected function createComponentSearchForm()
    {
        $form = new SearchForm($this->context->groups);
        $form->setDefaults( array(
            's' => $this->allQuery,
            'includeComments' => $this->includeComments
        ) );
        $form->onSuccess[] = callback( $form, 'submitted' );
        return $form;
    }

    protected function getItemsCount()
    {
        if( $this->itemsCount == NULL )
        {
            $this->itemsCount = $this->context->data->searchCount( $this->searchQuery, $this->tags );
        }
        return $this->itemsCount;
    }

}
