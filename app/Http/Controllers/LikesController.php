<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function __invoke(){
        return view('likes.likes');
    }
}
