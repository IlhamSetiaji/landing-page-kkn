<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        $validator = Validator::make(request()->all(),[
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if($validator->fails())
        {
            return redirect('login')->withInput()->withErrors($validator);
        }
        $user = User::where('email',request('email'))->first();
        if($user)
        {
            if(Hash::check(request('password'),$user->password))
            {
                Auth::login($user);
                return redirect('admin')->with('status','Login berhasil');
            }
            return redirect('login')->with('status','Password Salah');
        }
        return redirect('login')->with('status','Email tidak ditemukan');
    }

    public function logout()
    {
        $user = request()->user();
        Auth::logout($user);
        return redirect('login')->with('status','Berhasil logout');
    }
}
