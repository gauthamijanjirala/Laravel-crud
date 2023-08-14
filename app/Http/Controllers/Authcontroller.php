<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function register_view()
    {
        return view('auth.register');
    }
} 
