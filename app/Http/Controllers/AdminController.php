<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        $pengguna = User::count();
        $produk = Produk::count();
        $penjualan = Penjualan::count();
        $pelanggan = Pelanggan::count();
        $penghasilan = DB::table('penjualans')->sum('total_harga');
        $produkterjual = DB::table('detail_penjualan')->sum('jumlah_produk');

        $data = [
            'users' => $users,
            'pengguna' => $pengguna,
            'produk' => $produk,
            'penjualan' => $penjualan,
            'pelanggan' => $pelanggan,
            'penghasilan' => $penghasilan,
            'produkterjual' => $produkterjual,
        ];
       
        return view('admin.home', $data);
    }
}