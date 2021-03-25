<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;
use Illuminate\Support\Facades\DB;

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
        $nowTime = date('Y-m-d');
//        $rank = ArtPost::where('created_at','>=',date('Y-m-d').'00:00:00')->limit(3);
//        $rank = DB::table('artpost')->where('created_at','<',date('Y-m-d H:i:s'))->limit(3)->get();
        $rank = DB::table('artpost')->where('created_at','>=',DB::raw('DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)'))->orderby('view_count','desc')->limit(3)->get();
        $param = ['items'=>$items, 'user'=>$user,'rank'=>$rank];
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
