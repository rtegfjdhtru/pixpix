<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller {
    //認証
    public function __construct() {
        $this->middleware( 'auth' );
    }


    public function index() {
//        $username= Auth::user()->name;
//        $userSeltText = Auth::user()->selftext;
//        $userImg =  Auth::user()->img;
        $user  = Auth::user();
        $param = [ 'user' => $user ];

        return view( 'profile.profile', $param );
    }

    public function update( Request $request ) {
//        $user           = new User();
        //        $form = $request->all();
//        unset($form['_token']);
//        $user->fill($form)->save();

        $userId         = Auth::user()->id;
        $user           = User::find( $userId );
        $user->name     = $request->name;
        $user->selfText = $request->selfText;
        if ( $request->image ) {
            $filename=request()->file('image')->getClientOriginalName();
            $inputs['image']=request('image')->storeAs('public/images', $filename);
            $user->image = $filename;
        } else {
            $user->image = Auth::user()->image;
        }
        $user->save();


        return redirect( 'index' );
    }
}
