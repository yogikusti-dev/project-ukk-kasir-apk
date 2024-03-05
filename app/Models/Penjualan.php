<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penjualan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'penjualans';
    protected $primaryKey = 'id_penjualan';
    protected $fillable = [
        'id_pelanggan',
        'tanggal_penjualan',
        'total_harga',
        'nama_pelanggan',
        'id_user',
        'nama_kasir',
        'bayar',
        'kembalian',
        
    ];

    
}
