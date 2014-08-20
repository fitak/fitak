<?php


class News extends BaseModel
{

	public function getAllNews()
	{
		$sql = $this->db->select("message")
			->from("news")
			->where("now() < created + INTERVAL 2 WEEK")
			->orderBy("id DESC");

		return $sql->fetchAll();
	}

}
