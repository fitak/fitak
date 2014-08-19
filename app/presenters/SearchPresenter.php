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

    public function actionDefault( $s, $from = null, array $groups = null, $sortBy = null, $streamView = null )
    {
        $parsed = $this->context->searchQueryParser->parseQuery( $s );

        $this->searchRequest = new SearchRequest();
        $this->searchRequest->query = $parsed['query'];
        $this->searchRequest->tags = $parsed['tags'];
        $this->searchRequest->from = $from;
        $this->searchRequest->groups = ( $groups ? array_map( 'strval', $groups ) : null );
        $this->searchRequest->sortBy = ($sortBy === SearchRequest::SORT_RELEVANCE) ? $sortBy : SearchRequest::SORT_TIME;

        $dataModel = $this->context->data;
        $this['stream']->dataSource = new SearchDataSource( $dataModel, $this->searchRequest );
        $this['stream']->keywords = $dataModel->getWordVariations( $this->searchRequest->query );
    }

    public function renderDefault( $s, $from = null, array $groups = null, $sortBy = null, $streamView = null )
    {
        $this->template->advancedSearch = false;
        $this->template->advancedSearch = ( ($this->searchRequest->from || $this->searchRequest->groups) && !$streamView );
        $this->template->tags = $this->searchRequest->tags;
        $this->template->resultsCount = $this['stream']->dataSource->getTotalCount();
    }

    public function actionStream()
    {
        $this['stream']->dataSource = new CompleteStreamDataSource( $this->context->data );
    }

    protected function createComponentSearchForm()
    {
        if( $this->searchRequest->groups )
        {
            $groups = array_fill_keys( $this->searchRequest->groups, true );
        }
        else
        {
            $groups = array();
            foreach( $this->context->groups->getList() as $group )
            {
                $groups[$group->id] = true;
            }
        }

        $form = new SearchForm( $this->context->groups );
        $form->setDefaults(
            array(
                's' => $this->getParameter( 's' ),
                'from' => $this->searchRequest ? $this->searchRequest->from : null,
                'groups' => $groups,
            )
        );
        $form->onSuccess[] = callback( $form, 'submitted' );

        return $form;
    }

    protected function createComponentStream()
    {
        return new StreamControl($this->templateFactory);
    }

}
