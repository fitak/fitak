<?php

/**
 * Base model
 */
abstract class BaseModel extends Nette\Object
{

    /** @var DibiConnection */
    protected $db;

    public function __construct( DibiConnection $connection )
    {
	$this->db = $connection;
    }

}