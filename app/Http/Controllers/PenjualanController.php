<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\User;
use App\Models\Produk;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;
use Session;
use PDF;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::orderBy('id_penjualan','desc')->paginate(10);
        return view('admin.penjualan.index', compact('penjualans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'id_user' => auth()->user()->id,
            'nama_kasir' => auth()->user()->nama_lengkap,
            'total_harga' => 0,
            // 'id_pelanggan' => null,
            // 'nama_pelanggan' => null,
            'bayar' => 0,
            'kembalian' => 0,
        ];
        $penjualans = Penjualan::create($data);
        return redirect('/admin/penjualan/'.$penjualans->id_penjualan.'/edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function search(Request $request)
    {
        $keyword = $request->input('cari');
        $penjualans = Penjualan::where('id_penjualan','like', "%".$keyword."%")->paginate(100);
        return view('admin.penjualan.index', compact('penjualans'));
    }
    public function store(Request $request)
    {
        $penjualans = Penjualan::create([
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'total_harga' => $request->total_harga,
            // 'id_pelanggan' => $request->id_pelanggan,
            // 'nama_pelanggan' => $request->nama_pelanggan,
            'id_user' => $request->id_user,
            'nama_kasir' => $request->nama_kasir,
        ]);
        Session::flash('message', 'Data Berhasil ditambahkan.');
        return redirect()->route('penjualans');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $penjualans = Penjualan::all();

        $pdf = PDF::loadView('admin.penjualan.cetaklaporan1', compact('penjualans'))->setPaper('a4', 'potrait');
        return $pdf->stream('laporan-penjualan.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penjualan)
    {
        $produk = Produk::get();
        $id = request('id');
        $p_detail = Produk::find($id);

        $id_pelanggan = request('id_pelanggan');
        $m_detail = Pelanggan::find($id_pelanggan);

        $detailpenjualan = DetailPenjualan::whereid_penjualan($id_penjualan)->get();

        $qty = request('qty');
        $act = request('act');
        if($act == 'min'){
            if($qty<=1){
                $qty = 1;
            }else{
                $qty = $qty - 1;
            }
        }else{
            $qty = $qty + 1;
        }
        $subtotal = 0;
        if($p_detail){
            $subtotal = $qty * $p_detail->harga;
        }
        $penjualan = Penjualan::find($id_penjualan);

        $bayar = request('bayar');
        $kembali = $bayar - $penjualan->total_harga;
        $print = request('print');

        $data = [
            'title' => 'Tambah transaksi',
            'produk' => $produk,
            'p_detail' => $p_detail,
            'm_detail' => $m_detail,
            'qty' => $qty,
            'subtotal' => $subtotal,
            'penjualan' => $penjualan,
            'bayar' => $bayar,
            'kembali' => $kembali,
            'detailpenjualan' => $detailpenjualan,
            'print' => $print,
            'content' => 'penjualan/create',
        ];

        if ($print == 'klik'){
            $customPaper = array(0,0,800.00,400.150);
            $pdf = PDF::loadView('admin.penjualan.print', $data)->setPaper($customPaper, 'landscape');
            return $pdf->stream();
        }else{
        return view('admin.penjualan.create', $data);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function cetak()
    {
        // $penjualans = Penjualan::all();

        // $pdf = PDF::loadView('admin/penjualan/cetaklaporan1', ['penjualan'=>$penjualans])->setPaper('a4', 'potrait');
        // return $pdf->stream('laporan-penjualan.pdf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penjualan::destroy($id);
        return redirect('/admin/penjualan')->with('Success','Produk has been deteled successfully');
    }
}
