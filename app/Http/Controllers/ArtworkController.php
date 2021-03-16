<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtPost;

class ArtworkController extends Controller
{
    public function index(Request $request){
        $artwork_id = $request->id; //userのid取得

        $artwork = ArtPost::find($artwork_id); //url のidぱらめーたがひつっよう
        $comment = Comment::where('artwork_id' , $artwork_id)->get();
        $param = [
            'artwork' => $artwork,
            'comment' => $comment,
        ];


        return view('artwork.artwork',$param);
    }
    public function comment_post(Request $request){
        $this->validate($request,Comment::$rules);
        $comment = new Comment;
        $form = $request->all();
        unset($form['_token']);
        $comment->fill($form)->save();
        return redirect('artwork');
    }
}
