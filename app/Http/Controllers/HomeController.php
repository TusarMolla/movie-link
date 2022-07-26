<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    function index(){
        if(Auth()->user()){
         return   redirect("dashboard");
        }else{
            
          return  redirect("login");
        }
    }
}
