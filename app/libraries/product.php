<?php
namespace app\libraries;

class Product
{
	public string $name;

	//
	public function setName( string $name) 
	{
		$this->name = $name;
	}

	public function getName() 
	{
		return $this->name;
	}
}
