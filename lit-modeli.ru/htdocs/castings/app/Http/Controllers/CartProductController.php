<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartProduct;

class CartProductController extends Controller
{
    public function index()
	{
		$cart_products = CartProduct::all();
		return view('cart_products.index',['cart_products' => $cart_products]);
	}
	
	public function cart()
	{
		return view('cart_products.cart');
	}
	
	public function addToCart($id)
	{
		
	}
}
