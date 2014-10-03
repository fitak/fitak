<?php


/**
 * Base model
 */
abstract class BaseModel extends Nette\Object
{

	/** @var DibiConnection */
	protected $db;

	/** @var \Fitak\RepositoryContainer */
	protected $orm;

	public function __construct(DibiConnection $connection, Fitak\RepositoryContainer $orm)
	{
		$this->db = $connection;
		$this->orm = $orm;
	}

}
