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

    public function actionDefault( $s, $from = NULL, array $groups = NULL )
    {
        $parsed = $this->context->searchQueryParser->parseQuery( $s );

        $this->searchRequest = new SearchRequest();
        $this->searchRequest->query = $parsed['query'];
        $this->searchRequest->tags = $parsed['tags'];
        $this->searchRequest->from = $from;
        $this->searchRequest->groups = ( $groups ? array_map( 'strval', $groups ) : NULL );

        $dataModel = $this->context->data;
        $this['stream']->dataSource = new SearchDataSource( $dataModel, $this->searchRequest );
        $this['stream']->keywords = $dataModel->getWordVariations( $this->searchRequest->query );
    }

    public function renderDefault( $s, $from = NULL, array $groups = NULL )
    {
        $this->template->tags = $this->searchRequest->tags;
        $this->template->itemsCount = $this['stream']->dataSource->getTotalCount();
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
        if ( $this->searchRequest->groups )
        {
            $groups = array_fill_keys( $this->searchRequest->groups, TRUE );
        }
        else
        {
            $groups = array();
            foreach( $this->context->groups->getList() as $group )
            {
                $groups[$group->id] = TRUE;
            }
        }

        $form = new SearchForm( $this->context->groups );
        $form->setDefaults( array(
            's' => $this->getParameter( 's' ),
            'from' => $this->searchRequest ? $this->searchRequest->from : NULL,
            'groups' => $groups,
        ) );
        $form->onSuccess[] = callback( $form, 'submitted' );
        return $form;
    }

    /**
     * @return StreamControl
     */
    protected function createComponentStream()
    {
        $control = new StreamControl();
        $control->templateHelpersLoaders = $this->template->getHelperLoaders();

        return $control;
    }

    /**
     * @return VisualPaginator
     */
    protected function createComponentVp()
    {
        return new VisualPaginator();
    }

}
