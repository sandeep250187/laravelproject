<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurStoreProductController extends Controller
{
    //
	public function products()
    {
        return view('product.product');
    }
}
