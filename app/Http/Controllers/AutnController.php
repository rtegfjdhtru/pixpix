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

    public function signup(Request $request){
        $items = DB::select('select * from user');
        return view('auth.signup');
    }
    public function signPost(SignupRequest $request){
        return view('auth.signup',['msg'=>'正しく入力']);
    }

    public function userCreate(Request $request){
        $param =  [
          'email' =>$request->email,
          'password'=>$request->password,
        ];
        DB::insert('insert into user (email,password) values (:email,:password)',$param);
        return redirect('/index');
    }
//    public function dataget(){
//        $items = DB::select('select * from user');
//        return view ('autn.signup',['items'=> $items]);
//    }
}
