<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
	{
		$data = [
		    'categories' => Categories::all()
		];
		foreach($data['categories'] as $key => $item){
			$image = asset('img/'.$item -> image);
			$data['categories'][$key]['imagePath']=$image;
		}
		return view ('categories.category', $data);
	}
}
