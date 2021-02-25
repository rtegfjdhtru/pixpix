<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {
    public function index() {
//        認証確認
        if (Auth::check() ) {
            return view( 'main.index' );
        } else {
            return view( 'auth/login' );
        }
    }
}
