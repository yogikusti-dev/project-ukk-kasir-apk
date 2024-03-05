<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (Auth:: user()->role == 'Admin') {
                return redirect()->route('home');
            }
            else if (Auth::user()->role == 'Kasir'){
            return redirect('kasir/penjualan');
            }
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|max:199',
            'password' => 'required|max:255',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::Attempt($data)) {
            if (Auth::user()->role = 'Admin'){
                return redirect()->route('home');
            } else if (Auth::user()->role = 'Kasir'){
                return redirect('kasir/penjualan');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->route('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        session :: flash('success', 'Anda Telah Berhasil Logout');
        return redirect()->route('login');
    }
}