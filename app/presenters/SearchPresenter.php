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

    public function renderDefault( $s )
    {
        $this->allQuery = $s;
        $this->template->s = $s;
        
        $parsed = $this->context->data->parseQuery( $s );
        if (count($parsed) == 1)
        {
            $this->searchQuery = $parsed[0];
            $this->tags = Array();
        } 
        else 
        {
            $this->searchQuery = $parsed[1];
            $this->tags = $parsed[0];
        }
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
        $this->template->data = $this->context->data->search( $this->searchQuery, $this->tags, $paginator->getLength(), $paginator->getOffset() );
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
