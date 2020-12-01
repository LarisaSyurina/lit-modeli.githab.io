<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class GalleryController extends Controller
{
    public function index()
	{
		$data = [
		    'photos' => Photos::all()
		];
		foreach($data['photos'] as $key => $item){
			$image = asset('/images/'.$item -> image);
			$data['photos'][$key]['imagePath']=$image;
		}		
		return view('gallery.index', $data);
	}
}
