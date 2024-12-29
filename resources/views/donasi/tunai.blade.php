@extends('layouts.app')

@section('content')
<div class="container py-5 fade-in">
    <!-- Card Form -->
    <div class="card mx-auto shadow-lg fade-in" style="max-width: 500px;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Form Donasi</h4>
            <form action="{{ route('donasi.tunai.store') }}" method="POST">

                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <!-- Pesan Donasi -->
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan Donasi</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tulis pesan untuk penerima donasi" required></textarea>
                </div>

                <!-- Jumlah Donasi -->
                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah Donasi</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Masukkan jumlah donasi" required>
                </div>

                <!-- Opsi Pembayaran -->
                <div class="mb-3">
                    <label class="form-label">Opsi Pembayaran</label>
                    <div class="d-flex justify-content-around">
                        <!-- Gopay -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="gopay" value="Gopay" required>
                            <label class="form-check-label" for="gopay">
                                <img src="{{ asset('images/gopay-logo.png') }}" alt="Gopay" class="img-fluid" style="width: 80px;">
                            </label>
                        </div>
                        <!-- Ovo -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="ovo" value="Ovo" required>
                            <label class="form-check-label" for="ovo">
                                <img src="{{ asset('images/ovo-logo.png') }}" alt="Ovo" class="img-fluid" style="width: 80px;">
                            </label>
                        </div>
                        <!-- Dana -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="dana" value="Dana" required>
                            <label class="form-check-label" for="dana">
                                <img src="{{ asset('images/dana-logo.png') }}" alt="Dana" class="img-fluid" style="width: 80px;">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Donasi Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
