<?php

//require_once dirname(__FILE__) . "/../fitak.cz/index.php";

class TokenTest extends PHPUnit_Framework_TestCase
{
    /** @var Guestbook */
    private $model;

    public function setUp()
    {
        //$this->model = new Token;
        //dibi::query("TRUNCATE TABLE %n", $this->model->table);
    }
    
    public function testSimple(){
	$this->assertEquals(1, 1);
    }
    
}

