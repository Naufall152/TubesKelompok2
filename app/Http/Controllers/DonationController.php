<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donasi.index'); // Pastikan file Blade di folder resources/views/donasi/index.blade.php
    }

    public function submit(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric|min:1',
    ]);

    // Simpan donasi ke database atau proses lainnya
    // Contoh: Donasi::create($request->all());

    return redirect()->route('donasi')->with('success', 'Terima kasih atas donasi Anda!');
}
}
