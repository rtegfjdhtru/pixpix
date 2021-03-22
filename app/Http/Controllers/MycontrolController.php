<?php

namespace App\Http\Controllers;

use App\Models\ArtPost;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MycontrolController extends Controller
{
    public function index(){
        $user_id = Auth::id();
        $user_data =  User::find($user_id);

        $my_artwork = ArtPost::where('user_id',$user_id)->paginate(4);
        $patram = [
            'user_data' => $user_data,
            'my_artwork' => $my_artwork,
        ];

        return view('mycontrol.mycontrol',$patram);
    }
    //認証
    public function __construct() {
        $this->middleware( 'auth');
    }
    public function artworkDel(Request $request){
        $user_id = Auth::id();
        $artwork = ArtPost::find('user_id',$user_id)->delete();
        return redirect('mycontrol');
    }
}
