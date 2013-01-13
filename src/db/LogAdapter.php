<?php
require_once __DIR__.'/../vendor/autoload.php';

class LogAdapter extends Doctrine_Record 
{
	public function setTableDefinition() 
	{
		$this->hasColumn('id', 'integer', 11, array('unique' => 'true'));
		$this->hasColumn('baslik', 'string',70);
		$this->hasColumn('zaman', 'timestamp');
		$this->hasColumn('govde', 'string', 255);
		$this->hasColumn('kullanici_id', 'integer');
		$this->hasColumn('durum', 'integer');
		$this->hasColumn('gun', 'date');
	}
	
	public function setUp() {
		$this->setTableName('loglar');
		$this->actAs('Timestampable');
	}
	
}