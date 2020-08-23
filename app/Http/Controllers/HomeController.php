<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    //
	public function index()
	{
	$records = DB::table('client_images')->get();
	
     //return view ('Path to your blade template')->with('records',$records); 
	   return view('home.welcome')->with('records',$records);
	}
}
