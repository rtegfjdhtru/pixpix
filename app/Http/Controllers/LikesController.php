<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;
use App\Models\Likes;

class LikesController extends Controller
{
    public function index(Request $request){
        $user_id =  Auth::id();
//        $likes = likes::where('user_id' , $user_id)->get();
        $sort = $request->sort;
//        $likes = likes::where('user_id' , $user_id)->orderBy($sort,'asc')->simplePaginate(4);
        $likes = likes::where('user_id' , $user_id)->paginate(4);
        $param = [
            'likes'=>$likes,
            'sort' => $sort
        ];
        return view('likes.likes',$param);
    }
    //認証
    public function __construct() {
        $this->middleware( 'auth' );
    }
}
