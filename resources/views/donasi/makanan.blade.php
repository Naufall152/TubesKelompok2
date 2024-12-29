@extends('layouts.app')

@section('content')
<div class="container py-5 fade-in">
    <!-- Card Form -->
    <div class="card mx-auto shadow-lg fade-in" style="max-width: 500px;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Form Donasi Makanan</h4>
            <form action="{{ route('donasi.makanan.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <!-- No Telp -->
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat Anda" required></textarea>
                </div>

                <!-- Nama Makanan -->
                <div class="mb-3">
                    <label for="foodName" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="foodName" name="foodName" placeholder="Masukkan nama makanan" required>
                </div>

                <!-- Jenis Makanan -->
                <div class="mb-3">
                    <label for="foodType" class="form-label">Jenis Makanan</label>
                    <select class="form-select" id="foodType" name="foodType" required>
                        <option value="" disabled selected>Pilih jenis makanan</option>
                        <option value="Sembako">Sembako</option>
                        <option value="Makanan Siap Saji">Makanan Siap Saji</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <!-- Opsi Pengiriman -->
                <div class="mb-3">
                    <label class="form-label">Opsi Pengiriman</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="selfDelivery" value="Self Delivery" required>
                        <label class="form-check-label" for="selfDelivery">
                            Saya akan mengantar sendiri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="pickupRequest" value="Pickup Request" required>
                        <label class="form-check-label" for="pickupRequest">
                            Silakan jemput di lokasi saya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="goSend" value="Go Send" required>
                        <label class="form-check-label" for="goSend">
                            Go Send
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOption" id="cod" value="COD" required>
                        <label class="form-check-label" for="cod">
                            COD (Cash On Delivery)
                        </label>
                    </div>
                </div>

                <!-- Pesan Donatur -->
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan Donatur</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tulis pesan untuk penerima donasi (opsional)"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Donasi Makanan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
