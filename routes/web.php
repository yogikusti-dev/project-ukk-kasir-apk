<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
//Admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DetailPenjualanController;

//Petugas
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProfileKasirController;
use App\Http\Controllers\ProdukKasirController;
use App\Http\Controllers\PenjualanKasirController;
use App\Http\Controllers\UserKasirController;
use App\Http\Controllers\PelangganKasirController;
use App\Http\Controllers\DetailPenjualanKasirController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Logout
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//Dashboard admin
Route::prefix('admin')->middleware('auth', 'access:Admin')->group(function(){
    //Dashboard
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        
    //REGISTER
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
    
    //Transaksi
    Route::get('penjualan', [PenjualanController::class, 'home'])->name('penjualan');
    Route::post('penjualan/action', [PenjualanController::class, 'penjualantransaksi'])->name('penjualantransaksi');
    
    //User
    Route::get('user/cari', [UserController::class, 'search'])->name('cariuser');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('edituser');
    Route::post('user/edit/{id}',[UserController::class,'update'])->name('updateuser');
    Route::get('user/hapus/{id}',[UserController::class,'destroy'])->name('hapususer');
    
    //produk
    Route::get('produk/cari', [ProdukController::class, 'search'])->name('cariproduk');
    Route::resource('produk', ProdukController::class);
    Route::post('produk/create', [ProdukController::class, 'create'])->name('createproduk');
    Route::post('produk/tambah/action', [ProdukController::class, 'store'])->name('actionproduk');
    Route::get('/produk', [ProdukController::class,'index'])->name('produk');

    //edit produk
    Route::get('produk/edit/{id}',[ProdukController::class,'edit'])->name('editproduk');
    Route::post('produk/edit/{id}',[ProdukController::class,'update'])->name('produkupdate');
    Route::get('produk/hapus/{id}',[ProdukController::class,'destroy'])->name('hapusproduk');
    
    //Pelanggan
    Route::get('pelanggan/cari', [PelangganController::class, 'search'])->name('caripelanggan');
    Route::post('pelanggan/tambah/action', [PelangganController::class, 'store'])->name('actionpelanggan');
    Route::resource('pelanggan', PelangganController::class);
    Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('createpelanggan');
    Route::get('pelanggan', [PelangganController::class,'index'])->name('pelanggan');
    
    //edit pelanggan
    Route::get('pelanggan/edit/{id}',[PelangganController::class,'edit'])->name('editpelanggan');
    Route::post('pelanggan/edit/{id}',[PelangganController::class,'update'])->name('pelangganupdate');
    Route::get('pelanggan/hapus/{id}',[PelangganController::class,'destroy'])->name('hapuspelanggan');
    
    //penjualan
    Route::get('penjualan/cari', [PenjualanController::class, 'search'])->name('caripenjualan');
    Route::resource('penjualan', PenjualanController::class);
    Route::get('penjualan/hapus/{id}',[PenjualanController::class,'destroy'])->name('hapuspenjualan');

    
    //detail penjualan
    Route::get('penjualan/detail/tambah', [DetailPenjualanController::class, 'store'])->name('detailpenjualan');
    //hapus detail
    Route::get('penjualan/detail/hapus', [DetailPenjualanController::class, 'destroy'])->name('hapusdetailpenjualan');
    //update
    Route::post('/update/penjualan', [DetailPenjualanController::class, 'update'])->name('updatebayar');
    //update pelanggan
    Route::post('penjualan/pelanggan', [DetailPenjualanController::class, 'edit'])->name('memberpenjualan');

    //Cetak Laporan
    Route::get('penjualan/print', [PenjualanController::class, 'show'])->name('printpenjualan');
    Route::get('user/cetaklaporan', [UserController::class, 'cetak'])->name('cetaklaporanuser');
    Route::get('produk/cetaklaporan', [ProdukController::class, 'show'])->name('cetaklaporanproduk');
    Route::get('pelanggan/cetaklaporan', [PelangganController::class, 'show'])->name('printpelanggan');
});

// Dashboard Kasir
Route::prefix('kasir')->middleware('auth', 'access:Kasir')->group(function(){
    //Dashboard
    Route::get('homekasir', [KasirController::class, 'index'])->name('homekasir');
    Route::get('profile', [ProfileKasirController::class, 'index'])->name('profilekasir');
            
// //     //Transaksi
//     Route::get('penjualan', [TransaksiKasirController::class, 'index'])->name('penjualankasir');
//     Route::post('penjualan/action', [TransaksiKasirController::class, 'penjualantransaksikasir'])->name('penjualantransaksi');
        
//     //produk
    Route::get('produk/cari', [ProdukKasirController::class, 'search'])->name('cariprodukkasir');
    Route::resource('produk', ProdukKasirController::class);
    Route::post('roduk/tambah/action', [ProdukKasirController::class, 'store'])->name('actionprodukkasir');
    Route::post('produk/create', [ProdukKasirController::class, 'create'])->name('createprodukkasir');
    Route::get('/produk', [ProdukKasirController::class,'index'])->name('produkkasir');
//     //edit produk
    Route::get('produk/edit/{id}',[ProdukKasirController::class,'edit'])->name('editprodukkasir');
    Route::post('produk/edit/{id}',[ProdukKasirController::class,'update'])->name('produkupdatekasir');
    Route::get('produk/hapus/{id}',[ProdukKasirController::class,'destroy'])->name('hapusprodukkasir');
    
//     //Pelanggan
    Route::get('pelanggan/cari', [PelangganKasirController::class, 'search'])->name('caripelanggankasir');
    Route::post('pelanggan/tambah/action', [PelangganKasirController::class, 'store'])->name('actionpelanggankasir');
    Route::resource('pelanggan', PelangganKasirController::class);
    Route::get('pelanggan/create', [PelangganKasirController::class, 'create'])->name('createpelanggankasir');
    Route::get('pelanggan', [PelangganKasirController::class,'index'])->name('pelanggankasir');
    //     //edit pelanggan
    Route::get('pelanggan/edit/{id}',[PelangganKasirController::class,'edit'])->name('editpelanggankasir');
    Route::post('pelanggan/edit/{id}',[PelangganKasirController::class,'update'])->name('pelangganupdatekasir');
    Route::get('pelanggan/hapus/{id}',[PelangganKasirController::class,'destroy'])->name('hapuspelanggankasir');
    
    //penjualan
    Route::resource('penjualan', PenjualanKasirController::class);
    Route::get('penjualan/hapus/{id}',[PenjualanKasirController::class,'destroy'])->name('hapuspenjualankasir');
    
//     //detail penjualan
    Route::get('penjualan/detail/tambah', [DetailPenjualanKasirController::class, 'store'])->name('detailpenjualankasir');
      //hapus detail
    Route::get('penjualan/detail/hapus', [DetailPenjualanKasirController::class, 'destroy'])->name('hapusdetailpenjualankasir');

    //pelanggan
    Route::post('/update/penjualan', [DetailPenjualanKasirController::class, 'update'])->name('updatebayarkasir');
    //update pelanggan
    Route::post('penjualan/pelanggan', [DetailPenjualanKasirController::class, 'edit'])->name('memberpenjualankasir');

 });
