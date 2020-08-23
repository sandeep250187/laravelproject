<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamBuildingController extends Controller
{
    //
	public function create()
    {
        return view('team.team');
    }
	public function products()
    {
        return view('product.product');
    }
}
