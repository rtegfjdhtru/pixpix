<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtpostController extends Controller
{
    public function __invoke(){
        return view('artpost.artpost');
    }
}
