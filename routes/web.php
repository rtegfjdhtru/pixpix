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



Route::get('index',[App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('artpost',[App\Http\Controllers\ArtpostController::class, 'index']);
Route::post('artpost',[App\Http\Controllers\ArtpostController::class, 'ImagePost']);


Route::get('artwork',[App\Http\Controllers\ArtworkController::class, 'index']);
Route::post('artwork',[App\Http\Controllers\ArtworkController::class, 'commentPost']);
Route::post('artwork/likes',[App\Http\Controllers\ArtworkController::class, 'likes']);
Route::post('artwork/good',[App\Http\Controllers\ArtworkController::class, 'goodCount']);
Route::post('artwork/del',[App\Http\Controllers\ArtworkController::class, 'del']);

Route::get('history',function (){
    return view('history.history');
});

Route::get('/likes',[App\Http\Controllers\LikesController::class, 'index']);


Route::get('/mycontrol',[App\Http\Controllers\MycontrolController::class, 'index']);
Route::post('/mycontrol',[App\Http\Controllers\MycontrolController::class, 'artworkDel']);

Route::get('passchange',function (){
    return view('pass.passchange');
});

Route::get('passreissue',function (){
    return view('pass.passreissue');
});

Route::get('passreturn',function (){
    return view('pass.passreturn');
});


Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);

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
