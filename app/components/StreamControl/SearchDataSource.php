<?php


class SearchDataSource extends Nette\Object implements IStreamDataSource
{

	/** @var Data */
	private $dataModel;

	/** @var SearchRequest */
	private $request;

	/** @var NULL|int */
	private $total;

	public function __construct(Data $dataModel, SearchRequest $request)
	{
		$this->dataModel = $dataModel;
		$this->request = $request;
	}

	public function getTopics($count, $offset)
	{
		$topics = $this->dataModel->searchFulltext($this->request, $count, $offset);
		$this->total = $topics->getTotal();
		return $topics;
	}

	public function getTotalCount()
	{
		if (!$this->total)
		{
			$this->getTopics(1, 0);
		}
		return $this->total;
	}

}
