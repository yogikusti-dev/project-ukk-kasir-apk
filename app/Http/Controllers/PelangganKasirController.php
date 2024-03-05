<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;
use Session;
class PelangganKasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::orderBy('id_pelanggan', 'asc')->paginate(5);
        return view('kasir.pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create([

            'id_pelanggan' => $request->id_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        Session::flash('message', 'Member Berhasil ditambahkan.');
        return redirect()->route('pelanggankasir');
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $keyword = $request->input('cari');
        $pelanggan = Pelanggan::where('id_pelanggan','like', "%".$keyword."%")->paginate(100);
        return view('kasir.pelanggan.index', compact('pelanggan'));
    }
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('kasir.pelanggan.edit', compact('pelanggan'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:255',
           ]); 
    
           $pelanggan = Pelanggan::find($id);
    
           $pelanggan->nama_pelanggan = $request->nama_pelanggan;
           $pelanggan->jenis_kelamin = $request->jenis_kelamin;
           $pelanggan->alamat = $request->alamat;
           $pelanggan->no_telp = $request->no_telp;
           $pelanggan->update();
    
        //    Alert::success('Selamat','Member Berhasil di Edit');
           return redirect()->route('pelanggan'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelanggan::destroy($id);
        return redirect('kasir/pelanggan')->with('Success','Member has been deteled successfully');

    }
}
