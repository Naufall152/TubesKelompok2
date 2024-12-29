<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
class DonasiMakananController extends Controller
{
    public function store(Request $request)
    {
        // Validasi Data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'foodName' => 'required|string|max:255',
            'foodType' => 'required|string|max:255',
            'deliveryOption' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Simpan Data ke Database
        Makanan::create([
            'nama' => $validated['name'],
            'no_telp' => $validated['phone'],
            'alamat' => $validated['address'],
            'nama_makanan' => $validated['foodName'],
            'jenis_makanan' => $validated['foodType'],
            'opsi_pengiriman' => $validated['deliveryOption'],
            'pesan' => $validated['message'] ?? null,
        ]);

        // Redirect dengan Pesan Sukses
        return redirect()->back()->with('success', 'Donasi makanan berhasil disimpan!');
    }
}
