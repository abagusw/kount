<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{
            return view('home');
        }
    }
}
