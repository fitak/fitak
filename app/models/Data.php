<?php

use Fitak\Orm;
use Nextras\Orm\Collection\ICollection;


class Data extends BaseModel
{

	/**
	 * @var ElasticSearch
	 */
	protected $elastic;

	/**
	 * @var Tags
	 */
	private $tagParser;

	public function __construct(DibiConnection $connection, Orm $orm, ElasticSearch $elastic, Tags $tagParser)
	{
		parent::__construct($connection, $orm);
		$this->elastic = $elastic;
		$this->tagParser = $tagParser;
	}

	protected function sortQaAnswers($answers)
	{
		$answerVotes = [];
		foreach ($answers as $answer) {
			$answerVotes[$answer->id] = $answer->votesCnt;
		}

		arsort($answerVotes);

		$sortedAnswersIds = array_keys($answerVotes);

		$sortedAnswers = [];
		foreach ($sortedAnswersIds as $answerId) {
			array_push($sortedAnswers, $this->orm->posts->getById($answerId));
		}
		return $sortedAnswers;
	}

	public function searchFulltext(SearchRequest $request, $length, $offset)
	{
		$response = $this->elastic->fulltextSearch($request, $length, $offset);
		$map = [];
		foreach ($response['hits']['hits'] as $hit)
		{
			$map[ $hit['_id'] ] = isset($hit['highlight']['message'][0]) ? $hit['highlight']['message'][0] : NULL;
		}

		if (!$map)
		{
			return new SearchResponse([], [], 0, $this->tagParser);
		}

		$result = [];
		foreach (array_keys($map) as $id) {
			array_push($result, $this->orm->posts->getById($id));
		}

		foreach ($result as $topic) {
			if ($topic->isTypeQa && $topic->children) {
				$answers = $topic->children->get()->fetchAll();
				$topic->sortedAnswers = $this->sortQaAnswers($answers);
			}
		}

		return new SearchResponse($result, $map, $response['hits']['total'], $this->tagParser);
	}

}
