<?php
namespace app\libraries;

use app\libraries\Product;

class Cart
{
	private array $products = [];

	//
	public function add( Product $product) 
	{
		$this->products[] = $product;
	}

	//
	public function getCart()
	{
		return $this->products;
	}
}
