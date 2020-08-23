<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;
class LoginController extends Controller
{
    //
	public function store(Request $request)
	{
	
	   $validator = Validator::make($request->all(), [
        'uname' => 'required|email',
        'psw' => 'required',
    ]);
	if ($validator->fails()) {
		  return redirect('admin')
                        ->withErrors($validator)
                        ->withInput();
		}
		//dd(auth()->attempt(array('email' =>$request['uname'], 'password' => $request['psw'])));
	if(auth()->attempt(array('email' =>$request['uname'], 'password' => $request['psw'])))
    {
	  
        if (auth()->user()) {
            return redirect('dashboard');
        }else{
            return redirect('admin');
        }
    }else{
        return redirect('admin')->with('error','Email-Address And Password Are Wrong.');
            
    }
	}
	public function logout() {
       Auth::logout();
      return redirect('/admin');
   }
}
