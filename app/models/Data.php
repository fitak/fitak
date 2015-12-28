<?php

use Fitak\Orm;


class Data extends BaseModel
{

	// topics with these tags are not displayed (+ comments with such parents)
	private $mutedTags = ['mute'];

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

	// get all topics + comments
	public function getAllTopics($length, $offset)
	{
		/** @var DibiFluent $sql */
		$sql = $this->db->select("data.*, groups.name AS group_name, groups.closed AS group_closed")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id")
			->where("data.parent_id IS NULL")
			->where("data.id NOT IN %in", $this->getMatchedIdByTags($this->mutedTags))
			->orderBy("data.created_time DESC")
			->limit($length)
			->offset($offset);

		$topics = $sql->fetchAssoc("id");
		$this->addComments($topics);
		$this->addUsers($topics);
		return $topics;
	}

	// sum of all topics and comments
	public function getCount($justTopics = FALSE)
	{
		$sql = $this->db->select("count(*)")->from("data");
		if ($justTopics) $sql->where("parent_id IS NULL");

		return $sql->fetchSingle();
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

		$topics = $this->db->query('SELECT * FROM data WHERE id IN %in ORDER BY Field([id], ?)', array_keys($map), array_keys($map));
		$result = $this->processRawResult($topics);

		return new SearchResponse($result, $map, $response['hits']['total'], $this->tagParser);
	}

	protected function processRawResult($result)
	{
		$topicsIds = [];
		$commentsIds = [];
		foreach ($result as $item)
		{
			if ($item->parent_id)
			{
				$topicsIds[] = $item->parent_id;
				$commentsIds[] = $item->id;
			}
			else
			{
				$topicsIds[] = $item->id;
			}
		}

		$topicsResult = $this->db->select("data.*, Group_concat(DISTINCT tags.name SEPARATOR ' ') AS tags, groups.name AS group_name, groups.closed AS group_closed")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id")
			->leftJoin("data_tags")
			->on("data_tags.data_id = data.id")
			->leftJoin("tags")
			->on("data_tags.tags_id = tags.id")
			->groupBy('data.id')
			->where("data.id IN %in", $topicsIds)
			->fetchAssoc("id");

		foreach ($topicsResult as &$row)
		{
			$row['tags'] = explode(' ', $row['tags']);
		}

		// sort topics the same way as original result was sorted
		$topics = [];
		foreach ($topicsIds as $topicId)
		{
			$topics[ $topicId ] = $topicsResult[ $topicId ];
		}

		$this->addComments($topics, $commentsIds);
		$this->addUsers($topics);

		return $topics;
	}

	// get array of ids topics, which are labeled by string array of input tags
	public function getMatchedIdByTags($tags)
	{
		return $this->db->select("DISTINCT data_id")
			->from("data_tags")
			->innerJoin("tags")
			->on("data_tags.tags_id = tags.id")
			->where("tags.name IN %in", $tags)
			->fetchPairs();
	}

	// returns comments for given list of topics
	private function getComments(array $topicsIds)
	{
		$comments = $this->db->select("*")
			->from("data")
			->where("parent_id IN %in", $topicsIds)
			->orderBy("data.created_time")
			->fetchAssoc("parent_id|id");

		return $comments;
	}

	private function addUsers(array $topics)
	{
		foreach ($topics as $topic)
		{
			$topic->user = $this->orm->users->getById($topic->user);
		}

	}

	// add comments to given topics
	private function addComments(array $topics, array $marked = [])
	{
		$comments = $this->getComments(array_keys($topics));

		foreach ($topics as $topic)
		{
			// $topic->likesData = $this->getLikes( $topic->id );
			$topic->marked = in_array($topic->id, $marked);
			// If this topic has comments
			if (isset($comments[ $topic->id ]))
			{
				$topic->children = $comments[ $topic->id ];
				$replies = $this->getComments(array_keys($topic->children));
				$this->addUsers($topic->children);

				foreach ($topic->children as $comment)
				{
					$comment->parent = $topic;
					$comment->marked = in_array($comment->id, $marked);

					if (isset($replies[ $comment->id ]))
					{
						$comment->children = $replies[ $comment->id ];
						$this->addUsers($comment->children);
						foreach ($comment->children as $reply)
						{
							$reply->parent = $comment;
							$reply->marked = in_array($reply->id, $marked);
						}

					}
					else
					{
						$comment->children = [];
					}


				}
			}
			else
			{
				$topic->children = [];
			}
		}

		return $topics;
	}

}
