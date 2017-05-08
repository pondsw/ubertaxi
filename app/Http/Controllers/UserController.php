<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use DB;

class UserController extends Controller
{
    //

    public function profile(){
        $user = Auth::user();
        $redeemed_vouchers = \App\Redeemed_voucher::with('voucher')->get();
        $owned_vouchers = \App\Owned_voucher::with('voucher')->get();
        return view('profile.index', ['user' => $user,
                                      'redeemed_vouchers' => $redeemed_vouchers,
                                      'owned_vouchers' => $owned_vouchers]);
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
          $redeemed_vouchers = \App\Redeemed_voucher::with('voucher')->get();
          $owned_vouchers = \App\Owned_voucher::with('voucher')->get();
          return view('profile.index', ['user' => $user,
                                        'redeemed_vouchers' => $redeemed_vouchers,
                                        'owned_vouchers' => $owned_vouchers]);
    }

}
