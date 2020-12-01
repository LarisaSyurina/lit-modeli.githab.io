<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsPageController extends Controller
{
    public function index()
	{
		return view ('contacts1.index');
	}
}