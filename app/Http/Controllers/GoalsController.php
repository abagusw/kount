<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{
            return view('home');
        }
    }
}
