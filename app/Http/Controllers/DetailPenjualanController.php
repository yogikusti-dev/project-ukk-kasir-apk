<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use Carbon\Carbon;
use PDF;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::orderBy('id','desc')->paginate(5);
        return view('admin.penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id_penjualan = $request->$id_penjualan;

        $penjualan = Penjualan::find($id_penjualan);

        $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->nama_pelanggan = $request->nama_pelanggan;
        $penjualan->save();

        return redirect('/admin/penjualan/'.$id_penjualan.'/edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $id_penjualan = $request->id_penjualan;

        $dp = DetailPenjualan::whereid($id)->whereid_penjualan($id_penjualan)->first();

        $penjualan = Penjualan::find($id_penjualan);

        if($dp == null){
            $data =[
            'id_penjualan' => $request->id_penjualan,
            'id' => $id,
            'nama_produk' => $request->nama_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal,
            ];
            DetailPenjualan::create($data);

            $dt = [
                'total_harga' => $request->subtotal + $penjualan->total_harga,
            ];
            $penjualan->update($dt);
        }else{
            $data =[
                'jumlah_produk' => $dp -> jumlah_produk + $request -> jumlah_produk,
                'subtotal' => $dp->subtotal + $request->subtotal,

            ];
            $dp->update($data);

            $dt = [
                'total_harga' => $request->subtotal + $penjualan->total_harga,
            ];
            $penjualan->update($dt);
        }
        return redirect('/admin/penjualan/'.$id_penjualan.'/edit');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id_penjualan = $request->id_penjualan;
        $penjualan = Penjualan::find($id_penjualan);

        $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->nama_pelanggan = $request->nama_pelanggan;
        $penjualan->save();

        return redirect('/admin/penjualan/'.$id_penjualan.'/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id_detail = $request->id_detail;
        $penjualan = Penjualan::find($id_detail);

        $penjualan->bayar = $request->bayar;
        $penjualan->kembalian = $request->kembalian;
        $penjualan->save();

        return redirect('/admin/penjualan/'.$id_detail.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $id = request('id');
        $td = DetailPenjualan::find($id);


        $penjualan = Penjualan::find($td->id_penjualan);

        $data = [
            'total_harga' => $penjualan->total_harga - $td->subtotal,
        ];
        $penjualan->update($data);

        $td->delete();
        return redirect()->back();
    }
}
