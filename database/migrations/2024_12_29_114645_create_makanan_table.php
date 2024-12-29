<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('makanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama donatur
            $table->string('no_telp'); // Nomor telepon donatur
            $table->text('alamat'); // Alamat donatur
            $table->string('nama_makanan'); // Nama makanan
            $table->string('jenis_makanan'); // Jenis makanan
            $table->string('opsi_pengiriman'); // Opsi pengiriman
            $table->text('pesan')->nullable(); // Pesan opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};
