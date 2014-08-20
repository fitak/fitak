<?php


interface IStreamDataSource
{

	/**
	 * Returns list of topic with their comments.
	 *
	 * @param  int number of topics to return
	 * @param  int offset for pagination
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
