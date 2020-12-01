<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Product;

class CatalogueController extends Controller
{
    public function index()
	{
		/*$data = [
		    'products' => Products::all()
		];
		foreach($data['products'] as $key => $item){
			$image = asset('/images/'.$item -> image);
			$data['products'][$key]['imagePath']=$image;
		}*/
		
		$data = [
		    'categories' => Categories::all()
		];
		foreach($data['categories'] as $key => $cat){
			$image = asset('/images/'.$cat -> image);
			$data['categories'][$key]['imagePath']=$image;
		}
		
		
		return view('products.index', $data);
	}
	
	public function category($id) 
	{
		$category = Categories::where('category_id', $id)->first();
		
		return view('categories.category', [
			'category' => $category,
			'products' => Products::where('category_id', $id)->paginate(12)
		]);
	}
	
	
	public function product($slug) 
	{
		return view ('category.product', [
		    'product' => Product::where('slug', $slug)->first()
		]);
	}
	
}
