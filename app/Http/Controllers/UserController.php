<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    //

    public function profile(){
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function update_avatar(Request $request){
        	// Handle the user upload of avatar
        	if($request->hasFile('avatar')){
        		$avatar = $request->file('avatar');
        		$filename = time() . '.' . $avatar->getClientOriginalExtension();
        		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
        		$user = Auth::user();
        		$user->avatar = $filename;
        		$user->save();
        	}
          $user = Auth::user();
          return view('profile.index', ['user' => $user]);
    }

}
