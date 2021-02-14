<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller {
    public function index() {
        $data = [
            'msg' => 'メッセージをいれて',
        ];
        return view( 'main.main', $data );
    }
    public function post(Request $request){
        $msg = $request->msg;

        $data = [
            'msg' => 'こんにちは'.$msg. 'さん',
        ];
        return view('main.main',$data);
    }
}
