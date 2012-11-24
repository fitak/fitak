<?php

class SearchDataSource extends Nette\Object implements IStreamDataSource
{

    /** @var Data */
    private $dataModel;

    /** @var SearchRequest */
    private $request;

    public function __construct( Data $dataModel, SearchRequest $request )
    {
        $this->dataModel = $dataModel;
        $this->request = $request;
    }

    public function getTopics( $count, $offset )
    {
        return $this->dataModel->search( $this->request, $count, $offset );
    }

    public function getTotalCount()
    {
        return $this->dataModel->searchCount( $this->request );
    }

}
