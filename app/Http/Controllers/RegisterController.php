<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('admin/register');
    }
}