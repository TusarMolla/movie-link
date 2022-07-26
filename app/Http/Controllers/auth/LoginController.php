<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    function index(){
        if(!Auth::user()){
            return view("auth.login");
        }else{
            return redirect("dashboard");
        }

    }

    function login(Request $req){
        $credentials = $req->only("email","password");
        if(Auth::attempt($credentials)){
            return redirect()->intended("dashboard");
        }else{
            echo"flase";
        }

    }


}
