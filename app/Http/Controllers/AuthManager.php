<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function loginPost(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'))->with("Successful", "Login Successful");
        }
        return redirect(route('login'))->with("error", "Login Error");

    }

    function registration(){
        return view('registration');
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email'    => 'required',
            'password' => 'required'
        ]);

       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['password'] = Hash::make($request->password);
       $user = User::create($data);
       if(!$user){
        return redirect(route('registration'))->with("error","registration failed");
       }

       return redirect(route('login'))->with("success", "Registration Successful");
    }
    
}
