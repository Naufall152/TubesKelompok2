<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Always Bottom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        .horizontal-scroll-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            width: 100%;
            -webkit-overflow-scrolling: touch;
        }

        .scroll-content {
            display: flex;
            flex: 0 0 auto;
        }

        #map {
            width: 100vw;
            height: 100vh;
        }

        .map-container {
            flex: 0 0 auto;
            width: 100vw;
            height: 100vh;
            position: relative;
        }

        .attribution {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.7);
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
    <main class="horizontal-scroll-wrapper">
        <div class="scroll-content">
            <div class="map-container">
                <div id="map"></div>
                <div class="attribution">
                    <a href="https://www.maptiler.com" target="_blank">
                        <img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo">
                    </a>
                    <p>
                        <a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a>
                        <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap
                            contributors</a>
                    </p>
                </div>
            </div>
            <!-- Add more content here for horizontal scrolling -->
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        @include('layouts.footer')
    </footer>

    @php
        $greenIconUrl = Vite::asset('resources/images/leaf-green.png');
    @endphp

    <script>
        const key = 'mhkhgb1kkLqv9H9sr2Jt';

        // Passing PHP variables to JavaScript
        const greenIconUrl = @json($greenIconUrl);

        const map = L.map('map').setView([-7.3007321084187335, 112.75464562093983], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const greenIcon = L.icon({
            iconUrl: greenIconUrl,
            iconSize: [42, 48],
            iconAnchor: [22, 94],
            popupAnchor: [-3, -76]
        });

        const mGreen = L.marker([-7.3007321084187335, 112.75464562093983], {
                icon: greenIcon
            })
            .bindPopup('Titik Utama')
            .addTo(map);

        map.on('click', function(e) {
            var coordinates = e.latlng.toString(); // Get coordinates as a string
            alert("Stasiun makanan berada di :  " + coordinates); // Display in an alert
        });

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
</body>

</html>
