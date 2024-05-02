<?php
namespace	tests;

use app\libraries\Cart;
use app\libraries\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
	// 
	public function test_if_cart_empty(){
		$cart = new Cart;

		$this->assertEmpty( $cart->getCart() );
	}

	//
	public function test_if_cart_is_not_empty()
	{
		$cart = new Cart;
		$cart->add( new Product);

		$this->assertNotEmpty( $cart->getCart() );
	}


}
