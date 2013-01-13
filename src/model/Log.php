<?php
require_once __DIR__."IElement.php";

class Log implements IElement
{
	public $id;
	public $baslik;
	public $zaman;
	public $govde;
	public $kullanici_id;
	public $durum;
	public $gun;
	
	function __construct($element)
	{
		$this->set($element);
	}
	public function set(IElement $element)
	{
		$this = $element;
	}
	
	public function get()
	{
		return $this;
	}
}