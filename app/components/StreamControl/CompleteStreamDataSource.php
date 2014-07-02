<?php

class CompleteStreamDataSource extends Nette\Object implements IStreamDataSource
{

    /** @var Data */
    private $dataModel;

    public function __construct( Data $dataModel )
    {
        $this->dataModel = $dataModel;
    }

    public function getTopics( $count, $offset )
    {
        return $this->dataModel->getAllTopics( $count, $offset );
    }

    public function getTotalCount()
    {
        return $this->dataModel->getCount( true );
    }

}
