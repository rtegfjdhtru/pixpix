<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Route::get('hello','HelloController@main');

Route::post('hello','HelloController@post');



//Route::get('index',function (){
//    return view('main.index');
//});

//Route::get('index','IndexController@index');
//Route::get('index','IndexController@getNewArt');

Route::get('index',[App\Http\Controllers\IndexController::class, 'index']);
Route::get('index',[App\Http\Controllers\IndexController::class, 'getNewArt']);

Route::get('artpost',[App\Http\Controllers\ArtpostController::class, 'index']);
Route::post('artpost',[App\Http\Controllers\ArtpostController::class, 'ImagePost']);


Route::get('artwork',function (){
    return view('artwork.artwork');
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
