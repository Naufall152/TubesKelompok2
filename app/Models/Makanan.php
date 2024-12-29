<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanan';

    protected $fillable = [
        'nama',
        'no_telp',
        'alamat',
        'nama_makanan',
        'jenis_makanan',
        'opsi_pengiriman',
        'pesan',
    ];
}
