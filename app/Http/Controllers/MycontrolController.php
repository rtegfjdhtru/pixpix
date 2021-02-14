<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MycontrolController extends Controller
{
    public function __invoke(){
        return view('mycontrol.mycontrol');
    }
}
