<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //
    function index()
    {
        return view("auth.registration");
    }

    function store(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if ($user) {
            echo("User already exist");
        } else {
            $newUser =new User();

            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->password);
            $newUser->save();
        }
      return  redirect("registration");
    }
}
