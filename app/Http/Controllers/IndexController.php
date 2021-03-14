<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;

class IndexController extends Controller {
    public function index(Request $request) {
        $items = ArtPost::get();
//        $username= Auth::user()->name;
//        $userimage= Auth::user()->image;
        $user  = Auth::user();
        $param = ['items'=>$items, 'user'=>$user];
        return view( 'main.index',$param );
    }

    //認証
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function getNewArt() {
        $items = ArtPost::get();

        return view( 'main.index', [ 'items' => $items ] );
    }

    public function getuser(){
//        $userData = Auth::user();
        $data = 'あいうえお';
        return view( 'main.index', [ 'data' => $data ] );
    }

}
