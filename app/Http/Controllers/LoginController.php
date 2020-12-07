<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $employee = Employees::where('username',$username)->first();
        if($employee){
            if(password_verify($password, $employee->password)){
                session(['username_login' => $username]);
                return redirect()->route('dash.home');
            }else{
                $desc = 'password salah';
                return redirect()->route('login')->with('message', ['status'=>'danger','desc'=>$desc]);
            }
        }else{
            $desc = 'username tidak ditemukan';
            return redirect()->route('login')->with('message', ['status'=>'danger','desc'=>$desc]);
        }
    }
}
