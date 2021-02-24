<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;

class AutnController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }
    public function userCreate(SignupRequest $request){
        $param =  [
          'email' =>$request->email,
          'password'=>$request->password,
        ];
        DB::insert('insert into user (email,password) values (:email,:password)',$param);
        $session_user_id = $request->session()->put('user_id','1');
        return redirect('/index');
    }
//    public function dataget(){
//        $items = DB::select('select * from user');
//        return view ('autn.signup',['items'=> $items]);
//    }
}
