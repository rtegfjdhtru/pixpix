<?php

namespace App\Http\Controllers;

use App\Models\ArtPost;
use Illuminate\Http\Request;
use App\Http\Requests\ArtRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArtpostController extends Controller {
    public function index() {
        return view( 'artpost.artpost' );
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ImagePost( ArtRequest $request ) {
        $post = new ArtPost();

        if(request('image')){
            $filename=request()->file('image')->getClientOriginalName();
            $inputs['image']=request('image')->storeAs('public/images', $filename);
        }
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->my_comment = $request->my_comment;
        $post->image = $filename;
        $post->save();
//        $post->create($inputs);




        return redirect( '/index' );
    }

}

