<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel 10')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            /* Mengisi ruang kosong */
        }

        footer {
            background-color: #343a40;
            color: rgb(71, 29, 29);
            text-align: center;
            padding: 1rem 0;
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            -webkit-animation: fadeIn 1s ease-in-out;
            animation: fadeIn 1s ease-in-out;
            opacity: 0;
            animation-fill-mode: forwards;
        }
    </style>
</head>

<body>
    {{-- Navigation --}}
    @include('layouts.header')

    {{-- Main Content --}}
    {{-- <main class="container my-4">
        @yield('content')
    </main> --}}

    {{-- Footer --}}
    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
