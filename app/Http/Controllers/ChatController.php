<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    public function index(){
        if(!Auth::check()){
            exit("您尚未登录！");
        }
        $user = Auth::user();
        return view('chat',['user'=>$user['name']]);
    }
    
    
}

