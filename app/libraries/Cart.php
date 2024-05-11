<?php
namespace app\libraries;

use app\libraries\Product;
use app\exception\CartQuantityException;

class Cart
{
	private array $products = [];

	//
	public function add(Product $product) 
	{
		if(count($this->products) === 3) {
			throw new CartQuantityException("max product 3");
		}

		$this->products[] = $product;
	}

	//
	public function getCart()
	{
		return $this->products;
	}
}
