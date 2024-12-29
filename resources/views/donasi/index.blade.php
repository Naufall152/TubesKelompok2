@extends('layouts.app')

@section('content')
<div class="container py-5">
    <p class="text-center mb-5">Pilih jenis donasi yang ingin Anda lakukan:</p>

    <div class="row justify-content-center">
        <!-- Donasi Makanan -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 h-100 fade-in">
                <img class="card-img-top" src="{{ Vite::asset('resources/images/gambarmakanan.jpg') }}" alt="gambar makanan">
                <div class="card-body text-center">
                    <h3 class="card-title">Donasi Makanan</h3>
                    <p class="card-text">Donasikan makanan untuk mereka yang membutuhkan.</p>
                    <a href="{{ route('donasi.makanan') }}" class="btn btn-primary btn-lg">Donasi Makanan</a>
                </div>
            </div>
        </div>

        <!-- Donasi Tunai -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 h-100 fade-in">
                <img class="card-img-top" src="{{ Vite::asset('resources/images/gambartunai.jpg') }}" alt="gambar tunai">
                <div class="card-body text-center">
                    <h3 class="card-title">Donasi Tunai</h3>
                    <p class="card-text">Donasikan uang tunai untuk membantu lebih banyak orang.</p>
                    <a href="{{ route('donasi.tunai') }}" class="btn btn-success btn-lg">Donasi Tunai</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
