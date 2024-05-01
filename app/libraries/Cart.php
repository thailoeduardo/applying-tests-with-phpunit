<?php
namespace app\libraries;

class Cart
{
	private array $products = [];

	//
	public function add( Product $product) 
	{
		$this->products[] = Product;
	}

	//
	public function getCart()
	{
		return $this->products;
	}
}
