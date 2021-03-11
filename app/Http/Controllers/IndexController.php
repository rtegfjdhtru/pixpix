<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;

class IndexController extends Controller {
    public function index() {
//        認証確認
        if (Auth::check() ) {
            return view( 'main.index' );
        } else {
            return view( 'auth/login' );
        }
    }

    public function getNewArt(Request $request){
        $items = ArtPost::get();
        return view('main.index', ['items' => $items]);
    }
}
