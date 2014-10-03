<?php
use Nette\Utils\Strings;

class Data extends BaseModel
{

	// topics with these tags are not displayed (+ comments with such parents)
	private $mutedTags = ['mute'];

	/**
	 * @var ElasticSearch
	 */
	protected $elastic;

	public function __construct(DibiConnection $connection, ElasticSearch $elastic)
	{
		parent::__construct($connection);
		$this->elastic = $elastic;
	}

	/**
	 * @param  int $id
	 * @return DateTime|NULL|FALSE
	 */
	public function getUpdatedTime($id)
	{
		return $this->db->fetchSingle('
			SELECT updated_time
			FROM data
			WHERE id = %i', $id, '
			LIMIT 1
		');
	}

	// get all topics + comments
	public function getAllTopics($length, $offset)
	{
		$sql = $this->db->select("data.*, groups.name AS group_name, groups.closed AS group_closed")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id")
			->where("data.parent_id = 0")
			->where("data.id NOT IN %in", $this->getMatchedIdByTags($this->mutedTags))
			->orderBy("data.created_time DESC")
			->limit($length)
			->offset($offset);

		$topics = $sql->fetchAssoc("id");
		$this->addComments($topics);

		return $topics;
	}

	// sum of all topics and comments
	public function getCount($justTopics = FALSE)
	{
		$sql = $this->db->select("count(*)")->from("data");
		if ($justTopics) $sql->where("parent_id = 0");

		return $sql->fetchSingle();
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

		$topicsResult = $this->db->select("data.*, groups.name AS group_name, groups.closed AS group_closed")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id")
			->where("data.id IN %in", $topicsIds)
			->fetchAssoc("id");

		// sort topics the same way as original result was sorted
		$topics = [];
		foreach ($topicsIds as $topicId)
		{
			$topics[$topicId] = $topicsResult[$topicId];
		}

		$this->addComments($topics, $commentsIds);

		return $topics;
	}

	// main search function
	// topics and comments are in the same data table, specific by parent_id column
	public function search(SearchRequest $request, $length, $offset)
	{
		$sql = $this->db->select("data.id, data.parent_id")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id");

		$muted = $this->getMatchedIdByTags($this->mutedTags);
		if ($muted)
		{
			$sql->where("data.id NOT IN %in", $muted)
				->where("data.parent_id NOT IN %in", $muted);
		}

		// use of filters on query
		$this->addSearchCondition($sql, $request);

		// sort by time or relevance
		if ($request->sortBy === SearchRequest::SORT_RELEVANCE && $request->query != "")
		{
			$sql->orderBy("MATCH(data.message) AGAINST (%s) DESC", $request->query);
		}
		else
		{
			$sql->orderBy("data.created_time DESC");
		}

		$result = $sql->fetchAll($offset, $length);

		return $this->processRawResult($result);
	}

	public function searchFulltext(SearchRequest $request, $length, $offset)
	{
		$response = $this->elastic->fulltextSearch($request, $length, $offset);
		$map = [];
		foreach ($response['hits']['hits'] as $hit)
		{
			$map[$hit['_id']] = isset($hit['highlight']['message'][0]) ? $hit['highlight']['message'][0] : NULL;
		}

		if (!$map)
		{
			return new SearchResponse([], [], 0);
		}

		$topics = $this->db->query('SELECT * FROM data WHERE id IN %in ORDER BY Field([id], ?)', array_keys($map), array_keys($map));
		$result = $this->processRawResult($topics);
		return new SearchResponse($result, $map, $response['hits']['total']);
	}

	// number of results by search
	public function searchCount(SearchRequest $request)
	{
		$sql = $this->db->select("count(*)")
			->from("data")
			->leftJoin("groups")
			->on("data.group_id = groups.id")
			->where("data.id NOT IN %in", $this->getMatchedIdByTags($this->mutedTags))
			->where("data.parent_id NOT IN %in", $this->getMatchedIdByTags($this->mutedTags));

		$this->addSearchCondition($sql, $request);

		return $sql->fetchSingle();
	}

	// get likes at topic by id
	public function getLikes($id)
	{
		$result = $this->db->query("
            SELECT from_name, from_id
            FROM likes
            WHERE message_id = %i
            ORDER BY id
            ", $id
		);
		$result = $result->fetchAll();
		foreach ($result as $item)
		{
			$item->from_name = stripslashes($item->from_name);
		}

		return $result;
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

	// add search condition corresponding with given search request
	private function addSearchCondition(DibiFluent $sql, SearchRequest $request)
	{
		if ($request->query == "" && $request->from == "")
		{
			// limit results to topics
			$sql->where("data.parent_id = 0");
		}
		else
		{
			if ($request->query != "")
			{
				$sql->where("MATCH(data.message) AGAINST (%s IN BOOLEAN MODE)", $request->query);
			}

			if ($request->from != "")
			{
				$sql = $sql->where("data.from_name LIKE %~like~", $request->from);
				// protection of hidden names in closed/secret groups
				$sql = $sql->where("groups.closed = 0");
			}
		}

		if (count($request->tags))
		{
			$taggedPostsId = $this->getMatchedIdByTags($request->tags);
			$sql = $sql->where("data.id IN %in", $taggedPostsId);
		}

		if (count($request->groups))
		{
			$sql->where("data.group_id IN %in", $request->groups);
		}
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

	// add comments to given topics
	private function addComments(array $topics, array $marked = [])
	{
		$comments = $this->getComments(array_keys($topics));

		foreach ($topics as $topic)
		{
			// $topic->likesData = $this->getLikes( $topic->id );

			if (isset($comments[$topic->id]))
			{
				$topic->comments = $comments[$topic->id];
				foreach ($topic->comments as $comment)
				{
					$comment->topic = $topic;
					$comment->marked = in_array($comment->id, $marked);
				}
			}
			else
			{
				$topic->comments = [];
			}
		}

		return $topics;
	}

}
