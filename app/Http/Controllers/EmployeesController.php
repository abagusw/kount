<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function login()
    {
        return view('frontend/login');
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
