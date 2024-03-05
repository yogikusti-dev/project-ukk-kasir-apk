<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DetailPenjualan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'detail_penjualan';
    protected $primaryKey = 'detailid';
    protected $fillable = [
        'id_penjualan',
        'id',
        'nama_produk',
        'jumlah_produk',
        'subtotal',
    ];

    
}
