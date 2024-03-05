<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use PDF;
use Session;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produks = Produk::orderBy('id','asc')->paginate(10);
        return view('admin.produk.index', compact('produks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(string $id)
    {
        $produks = Produk::all();

        $pdf = PDF::loadView('admin.produk.cetaklaporan', ['produk'=>$produks])->setPaper('a4', 'potrait');
        return $pdf->stream('laporan-produk.pdf');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('cari');
        $produks = Produk::where('id','like', "%".$keyword."%")->paginate(100);
        return view('admin.produk.index', compact('produks'));
    }
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Produk $id)
    {
        $produks = Produk::create([
            'id' => $request->id,
            'nama_produk' => $request->nama_produk,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        Session::flash('message', 'Produk Berhasil ditambahkan.');
        return redirect()->route('produk');
    }

    /**
     * Display the specified resource.
     */
    public function cetak()
    {
        $produks = Produk::all();

        $pdf = PDF::loadView('admin.produk.cetaklaporan', ['produk'=>$produks])->setPaper('a4', 'potrait');
        return $pdf->stream('laporan-produk.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produks = Produk::find($id);
        return view('admin.produk.edit', compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
        'nama_produk' => 'required|max:255',
        'satuan' => 'required|max:255',
        'harga' => 'required|max:255',
        'stok' => 'required|max:255',
       ]); 

       $produks = Produk::find($id);

       $produks->nama_produk = $request->nama_produk;
       $produks->satuan = $request->satuan;
       $produks->harga = $request->harga;
       $produks->stok = $request->stok;
       $produks->update();

    //    Alert::success('Selamat','Produk Berhasil di Edit');
       return redirect()->route('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::destroy($id);
        return redirect()->route('produk')->with('Success','Produk has been deteled successfully');
    }
}
