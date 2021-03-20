<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;
use App\Models\Likes;
class ArtworkController extends Controller
{
    public function index(Request $request){
        $user_id =  Auth::id();
        $artwork_id = $request->id; //URLのuserのid取得

        $artwork = ArtPost::find($artwork_id); //url のidぱらめーたがひつっよう
        $comment = Comment::where('artwork_id' , $artwork_id)->get();
        $already_liked = Likes::where('user_id', $user_id)->where('artwork_id', $artwork_id)->first();
        //閲覧数カウント増やし
        $artwork->view_count = $artwork->view_count+1;
        $artwork->save();
        $param = [
            'artwork' => $artwork,
            'comment' => $comment,
            'already_liked' => $already_liked,
        ];


        return view('artwork.artwork',$param);
    }
    //認証
    public function __construct() {
        $this->middleware( 'auth' );
    }
    public function commentPost(Request $request){
        $artwork_id = $request->id; //現在のアートワークIDを取得
        $this->validate($request,Comment::$rules);
        $comment = new Comment();
//        $form = $request->all();
//        unset($form['_token']);
//        $comment->fill($form)->save();
        $comment->artwork_id = $artwork_id;
        $comment->user_id = Auth::user()->id;
        $comment->text = $request->text;
        $comment->save();
        return redirect('artwork'.'?id='.$artwork_id);
    }
    public function likes(Request $request){
        $user_id =  Auth::id(); //1.ログインユーザーのid取得
        $artwork_id = $request->id; //2.投稿idの取得
        $already_liked = Likes::where('user_id', $user_id)->where('artwork_id', $artwork_id)->first();
        if (!$already_liked) {
            $like = new Likes; //4.Likeクラスのインスタンスを作成
            $like->artwork_id = $artwork_id; //Likeインスタンスにreview_id,user_idをセット
            $like->user_id = $user_id;
            $like->save();
        }else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Likes::where('artwork_id', $artwork_id)->where('user_id', $user_id)->delete();
        }
        }

        public function goodCount(Request $request){
            $user_id =  Auth::id(); //1.ログインユーザーのid取得
            $artwork_id = $request->id; //2.投稿idの取得
            $artwork = ArtPost::find($artwork_id);
            $artwork->good_count = $artwork->good_count+1;
            $artwork->save();
        }
}
