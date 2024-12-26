<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Always Bottom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Bootstrap & Asset --}}
</head>
<body>
    <div id="app">
        <header>
            @include('layouts.header') {{-- Header --}}
        </header>
        <main class="flex-grow-1">
            @yield('content')
            <div id="carouselExampleControls" class="carousel slide fade-in" data-bs-ride="carousel">
                <div class="carousel-caption d-none d-md-block">
                    <div class="header text-center" style="margin-bottom: 350px;">
                        <h1 class="text-black">Mereka Membutuhkan Kita.</h1>
                        <p class="text-black">Bersama kita bisa membuat perubahan</p>
                    </div>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ Vite::asset('resources/images/gambar1.jpg') }}" alt="gambar1">
                    </div>
                </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/index/header-2.png') }}" alt="Gambar 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/index/header-3.png') }}" alt="Gambar 3">
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
        <footer class="bg-dark text-white text-center py-4 mt-auto">
            @include('layouts.footer') {{-- Footer --}}
        </footer>
    </div>
</body>
</html>