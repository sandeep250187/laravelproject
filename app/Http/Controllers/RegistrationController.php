<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{
    //
	public function create()
    {
        return view('registration.create');
    }
	public function store(Request $request)
    {
	   
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
		  return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
		}
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}
