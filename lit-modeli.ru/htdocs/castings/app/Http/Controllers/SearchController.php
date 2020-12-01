<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SearchController extends Controller
{
    public function index(Request $request)
	{
		$query = trim($request->q);
		if (strlen($query) > 0) {
		    $result = Products::where('name','like','%'.$query.'%')->orWhere('text','like','%'.$query.'%')->get();
    		foreach ($result as $key => $item) {
    		    $result[$key]->imagePath = '/images/'.$item->image;
    		}    
		} else {
		    $result = [];
		}
		return view('search.index',['search'=>$result]);
	}
}