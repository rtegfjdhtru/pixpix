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

    public function post( ArtRequest $request ) {
        if($request->hasfile('img')) {
            foreach ( $request->file( 'img' ) as $file ) {
                $name = $file->getClientOriginalName();
                $file->move( public_path() . '/uploads/', $name );
                $imgData[] = $name;

            $fileModal = new ArtPost();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);
        }
        }

        $ArtPost = new ArtPost();
        $ArtPost->img = $request->img;
        $ArtPost->title = $request->title;
        $ArtPost->my_comment = $request->my_comment;



        $ArtPost->save();

        return redirect( '/index' );

    }
}
