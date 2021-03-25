<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;

class IndexController extends Controller {
    public function index(Request $request) {
//        $items = ArtPost::get();
//
//        $user  = Auth::user();
//        $param = ['items'=>$items, 'user'=>$user];

        //sql ランキング
//      SELECT * FROM artpost WHERE created_at >= '2021-03-24 00:00:00' order by view_count desc LIMIT 3


        $user  = Auth::user();
//        $items = ArtPost::all();
        $items = ArtPost::orderBy('id','desc')->limit(6)->get();
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
