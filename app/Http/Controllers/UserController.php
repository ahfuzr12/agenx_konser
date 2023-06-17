<?php

namespace App\Http\Controllers;

use App\Models\Modelakses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        $data['title']  =   'Login';
        return view('admin.login', $data);
    }

    public function login_action(Request $request)
    {

        $email = $request->email;
        $request->validate(
            [
                'email'                 =>  'required',
                'password'              =>  'required',
            ],
            [
                'email.required'        =>  'Email Tidak Boleh Kosong',
                'password.required'     =>  'Password Tidak Boleh Kosong',
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
        }
        return back()->withErrors('password')->with('failed', 'Email atau Password Salah !!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
