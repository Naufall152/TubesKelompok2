<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunai extends Model
{
    use HasFactory;

    protected $table = 'tunai'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'pesan',
        'jumlah_donasi',
        'opsi_pembayaran',
    ];
}
