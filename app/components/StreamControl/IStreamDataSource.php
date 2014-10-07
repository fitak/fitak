<?php


interface IStreamDataSource
{

	/**
	 * Returns list of topic with their comments.
	 *
	 * @param  int $count number of topics to return
	 * @param  int $offset offset for pagination
	 * @return array (topicId => topic)
	 */
	public function getTopics($count, $offset);

	/**
	 * Returns total count of topics (in this data source).
	 *
	 * @return int
	 */
	public function getTotalCount();

}
