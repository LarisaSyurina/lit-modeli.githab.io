<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class ProductController extends Controller
{
    public function index($id)
	{
		$result = Products::find($id);
		$result->imagePath = asset('/images/'.$result->image);
		
		$category = Categories::find($result->category_id);
		
		return view('product.index', ['oneProduct' => $result, 'category' => $category]); 
		
	}
}