<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\ClientImage;
use Auth;
use DB;

class AdminController extends Controller
{
    //
	public function create()
	{
	  return view('admin.admin');
	}
	
	public function dashboard()
	{
	  if(Auth::check()){
	  return view('admin.dashboard');
	  }else{
      return redirect('admin');
	  }
	}
	public function addclient()
	{
	  return view('admin.clientadd');
	}
	public function fileUpload(Request $req){
        $req->validate([
        'client_image_logo' => 'required|mimes:jpeg,gif,png|max:2048'
        ]);

        $fileModel = new ClientImage;

        if($req->file()) {
            $fileName = time().'_'.$req->file('client_image_logo')->getClientOriginalName();
            $filePath = $req->file('client_image_logo')->storeAs('uploads', $fileName, 'public');

            $fileModel->client_name = $req['client_name'];
            $fileModel->client_image_logo =  $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
		}
	public function clientlist()
	{
	  $records = DB::table('client_images')->orderBy('id','DESC')->get();
	  return view('admin.clientlist')->with('records',$records);
	}
	public function clientedit(Request $request)
	{
	  $records = DB::table('client_images')->orderBy('id','DESC')->get();
	  return view('admin.clientlist')->with('records',$records);
	}
}
