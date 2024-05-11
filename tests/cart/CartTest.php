<?php
namespace tests;

use app\libraries\Cart;
use app\libraries\Product;
use app\exception\CartQuantityException;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
	private readonly Cart $cart;
	
	//
	public function setup():void
	{
		$this->cart = new Cart;
	}

	//
	public function test_if_cart_empty()
	{
		$this->assertEmpty($this->cart->getCart());
	}

	//
	public function test_if_cart_is_not_empty()
	{
		$this->cart->add(new Product);
		$this->assertNotEmpty($this->cart->getCart());
	}

	//
	public function test_catch_exception_if_cart_have_more_3_products()
	{
		$this->expectException(CartQuantityException::class);

		$product1 = new Product;
		$product2 = new Product;
		$product3 = new Product;
		$product4 = new Product;

		$this->cart->add($product1);
		$this->cart->add($product2);
		$this->cart->add($product3);
		$this->cart->add($product4);
	}

	//
	public function test_if_cart_have_1_product()
	{
		$this->cart->add(new Product);

		$this->assertGreaterThanOrEqual(1, count($this->cart->getCart()));
	}
}
