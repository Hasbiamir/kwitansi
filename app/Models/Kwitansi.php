<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_kwitansi',
        'tanggal',
        'sudah_terima_dari',
        'nama_peminjam',
        'untuk_pembayaran',
        'jumlah_uang',
    ];
}

