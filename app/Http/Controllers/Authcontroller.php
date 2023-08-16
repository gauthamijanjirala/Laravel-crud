<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\Models\User;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        // validate data
        $request->validate([
            'email'=>'required',
            'password'=>'requried',
        ]);
    }
    public function register_view()
    {
        return view('auth.register');
    }
    public function register(Request $request){
        // validate 
        $request->validate([
            'name '=>'required',
            'email'=> 'required|unique:users|email',
            'password' => 'required|confirmed',
        ]);
        // save in users table
        User:: create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
        ]);

        // login user here
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('register')->withError('Error');
    }
    public function home(){
        return view('home');
    }


} 
