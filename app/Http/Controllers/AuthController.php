<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // register user
    public function register(Request $request){
       // dd($request);
        //validate
       $fields= $request->validate([
            'name'=>['required','string','max:255','unique:users'],
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed'

        ]);



        //registeer
      $User =  User::create($fields);
     

        //login
        Auth::login($User);

        //redirect
        return redirect()->route('home');
    }
}
