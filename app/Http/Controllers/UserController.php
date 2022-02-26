<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Login Function

    function login(Request $req){

        $user =  User::where(['email'=>$req->email])->first();

        //Validating the password
        if(!$user || !Hash::check($req->password, $user->password)){

            return "Username or Password does not match";

        }
        else{

            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}

