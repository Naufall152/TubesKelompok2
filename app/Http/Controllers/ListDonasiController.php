<?php

namespace App\Http\Controllers;
use App\Models\Tunai;
use App\Models\Makanan;
use Illuminate\Http\Request;

class ListDonasiController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel tunai dan makanan
        $donasiTunai = Tunai::all();
        $donasiMakanan = Makanan::all();

        // Kirim data ke view
        return view('list-donasi', compact('donasiTunai', 'donasiMakanan'));
    }
}
