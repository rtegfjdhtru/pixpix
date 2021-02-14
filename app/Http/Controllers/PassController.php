<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassController extends Controller
{
    public function passchange(){
        return view('pass.passchange');
    }

    public function passreturn(){
        return view('pass.passreurn');
    }

    public function passreissue(){
        return view('pass.passreissue');
    }
}
