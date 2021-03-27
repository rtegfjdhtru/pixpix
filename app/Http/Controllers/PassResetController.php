<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PassResetController extends Controller
{
    public function index(){

        return view('pass.passreissue');
    }
    public function send(Request $request){
        $user = User::All();
    }
}
