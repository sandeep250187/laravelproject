<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResortController extends Controller
{
    //
	public function create()
    {
        return view('resort.resort');
    }
}
