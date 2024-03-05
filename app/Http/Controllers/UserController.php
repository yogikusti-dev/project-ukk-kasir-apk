<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
        return view('admin.user.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        $keyword = $request->input('cari');
        $users = User::where('id','like', "%".$keyword."%")->paginate(100);
        return view('admin.user.user', compact('users'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cetak()
    {
        $users = User::all();

        $pdf = PDF::loadView('admin.user.cetaklaporan', ['user'=>$users])->setPaper('a4', 'potrait');
        return $pdf->stream('laporan-user.pdf');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'role' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
        ]);

        $users = User::find($id);

        $users->nama_lengkap = $request->nama_lengkap;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->alamat = $request->alamat;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->update();

        return redirect()->route('user');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user')->with('succes','User Has Been Updated succesfully');
    }
}
