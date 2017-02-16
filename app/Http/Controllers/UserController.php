<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile',array('user'=>Auth::user()));
    }

    public function updatephoto(Request $request){
    	if($request->hasFile('photo')){
    		$photo = $request->file('photo');
    		$filename = time().'.'.$photo->getClientOriginalExtension();
    		Image::make('public/uploads/files/'.$filename);
    		// Image::make($photo)->resize(300,300)->save(public_path('/uploads/files/'.$filename));
    		$user = Auth::user();
    		$user->photo  = $filename;

    	}
    	return view('profile',array('user'=>Auth::user()));
    }
}
