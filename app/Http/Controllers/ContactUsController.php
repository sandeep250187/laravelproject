<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
class ContactUsController extends Controller
{
    //
	public function create()
    {
        return view('contactus.contactus');
    }
	
	public function store(Request $request)
    {
	   
        $validator = Validator::make($request->all(), [
            'name' => 'required',
			'phone' => 'required',
            'email' => 'required|email',
            'location' => 'required',
			'area' => 'required',
			'subject' => 'required'
        ]);
        if ($validator->fails()) {
		  return redirect('contactus')
                        ->withErrors($validator)
                        ->withInput();
		}
		$data = [
            'no-reply' => 'contact-from-web@nomail.com',
            'admin'    => 'sandeeptwr04@gmail.com',
            'name'    => $request->get('name'),
            'phone'    => $request->get('phone'),
            'email'    => $request->get('email'),
            'location'    => $request->get('location'),
            'area'    => $request->get('area'),
			'subject'    => $request->get('subject'),
        ];
        \Mail::send('contactus.contactus', ['data' => $data],
            function ($message) use ($data)
            {
                $message
                    ->from($data['no-reply'])
                    ->to($data['admin'])->subject('Some body wrote to you online')
                    ->to($data['email'])->subject('Your submitted information')
                    ->to('tsandeep167@gmail.com', 'elbiheiry')->subject('Feedback');
            });
        
        return redirect()->to('/');
    }
}
