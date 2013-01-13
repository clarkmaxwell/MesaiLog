<?php
require_once __DIR__."/../model/IElement.php";

abstract class Controller 
{
	public function show();
	public function add(IElement $element);
	public function edit(IElement $element);
	public function delete(IElement $element);
}