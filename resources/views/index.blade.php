<nav>@extends('layouts.header')
</nav>
@section('title', 'ppp')
    {{-- TAMPILAN HOME --}}
    @section('content')
    {{-- AWAL SLIDE GAMBAR --}}
    <main class="flex-grow-1">
    <div id="carouselExampleControls" class="carousel slide fade-in" data-bs-ride="carousel">
        <div class="carousel-caption d-none d-md-block">
            <div class="header text-center">
                <h1 class="text-black">Mereka Membutuhkan Kita.</h1>
                <p class="text-black">Bersama kita bisa membuat perubahan</p>
            </div>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/index/header-1.png" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/index/header-2.png" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/index/header-3.png" alt="Gambar 3">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</main>
    {{-- AKHIR SLIDE GAMBAR --}}
@endsection

@push('scripts')
<script>
    function redirectDonasi() {
        window.location.href = "/donasi";
    }
</script>
@endpush

<footer>
    @extends('layouts.footer')
</footer>

@push('styles')
<style>
    /* Agar footer berada di bawah */
    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    #app {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }

    footer {
        margin-top: auto;
    }
</style>
@endpush
