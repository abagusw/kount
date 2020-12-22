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
                session(['username_login' => $username, 'employee_id_login' => $employee->id, 'employee_fullname' => $employee->fullname, 'employee_image_profile' => $employee->image_profile, 'employee_position_id' => $employee->position_id]);
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

    public function logout()
    {
        $value = session('username_login');
        if($value == null){
            return redirect()->route('login');
        }else{
            session()->forget('name');
            session()->flush();
            return redirect()->route('dash.home');
        }
    }
}
