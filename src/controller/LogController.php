<?php
require_once __DIR__."/../db/LogAdapter.php";
require_once __DIR__."/../model/Log.php";
require_once "./Controller.php";

class LogController extends Controller
{
	/**
	 * 
	 * @var Loglar
	 */
	private $log;
	
	function __construct()
	{
		$this->log = new LogAdapter();
		
	}
	/**
	 * 
	 * @param Log $logCols
	 */
	public function add(Log $loglar)
	{
		$this->log->id = $loglar->id;
		$this->log->baslik = $loglar->baslik;
		$this->log->zaman = $loglar->zaman;
		$this->log->govde = $loglar->govde;
		$this->log->kullanici_id = $loglar->kullanici_id;
		$this->log->durum = $loglar->durum;
		$this->log->gun = $loglar->gun;
		
		$this->log->save();
	}
}