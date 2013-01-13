<?php

require_once "PHPUnit/Autoload.php";
require_once __DIR__."/../db/adapter.php";

class adapterTest extends PHPUnit_Framework_TestCase
{
	/**
	 * 
	 * @var Adapter
	 */
	private $adapter = null;
	
	/**
	 * 
	 * @var string
	 */
	private $tableName = "testTable";
	
	
	/**
	 * 
	 */
	function setUp()
	{
		$this->adapter = new Adapter();
	}
	/**
	 * @test 
	 */
	function addTest()
	{
		$tableName = $this->tableName;
		$data      = array("numara"=>'bir',"mesaj"=>'iki',"son"=>'uc');
		$expected  = "INSERT INTO ".$this->tableName."('numara','mesaj','son') VALUES('','bir','iki','uc')";
		$actual    = $this->adapter->add($tableName,$data);
		$this->assertEquals($expected,$actual);
	}
}