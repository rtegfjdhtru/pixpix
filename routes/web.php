<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('main/{msg}', function ($msg = 'no message') {
//   $html = <<< EOF
//
//    <html><body><h1>はろー</h1><p>{$msg}</p></body></html>
//    EOF;
//    return $html;
////        view('welcome');
//});


Route::get('hello','HelloController@main');

Route::post('hello','HelloController@post');



Route::get('index',function (){
    return view('main.index');
});


Route::get('artpost',function (){
    return view('artpost.artpost');
});


Route::get('artwork',function (){
    return view('artwork.artwork');
});


Route::get('login',function (){
    return view('auth.login');
});

Route::get('signup',function (){
    return view('auth.signup');
});

Route::get('history',function (){
    return view('history.history');
});

Route::get('likes',function (){
    return view('likes.likes');
});

Route::get('mycontrol',function (){
    return view('mycontrol.mycontrol');
});


Route::get('passchange',function (){
    return view('pass.passchange');
});

Route::get('passreissue',function (){
    return view('pass.passreissue');
});

Route::get('passreturn',function (){
    return view('pass.passreturn');
});

Route::get('profile',function (){
    return view('profile.profile');
});

Route::get('send',function (){
    return view('send.send');
});

Route::get('user',function (){
    return view('user.user');
});

Route::get('passautn',function (){
    return view('pass.passautn');
});
