<?php


/**
 * Base model
 */
abstract class BaseModel extends Nette\Object
{

	/** @var DibiConnection */
	protected $db;

	/** @var \Fitak\Orm */
	protected $orm;

	public function __construct(DibiConnection $connection, Fitak\Orm $orm)
	{
		$this->db = $connection;
		$this->orm = $orm;
	}

}
