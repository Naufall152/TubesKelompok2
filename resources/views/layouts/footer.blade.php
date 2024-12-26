<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<footer class="footer bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <!-- Logo dan Deskripsi -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Nama Proyek</h5>
                <p>Proyek Laravel sederhana untuk menampilkan fitur modern dengan dukungan Bootstrap.</p>
            </div>

            <!-- Navigasi -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Navigasi</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ url('/') }}" class="text-white text-decoration-none footer-link">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-white text-decoration-none footer-link">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-white text-decoration-none footer-link">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Media Sosial -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Ikuti Kami</h5>
                <div class="social-icons">
                    <a href="https://facebook.com" class="text-white text-decoration-none me-3" aria-label="Facebook">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://twitter.com" class="text-white text-decoration-none me-3" aria-label="Twitter">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://instagram.com" class="text-white text-decoration-none" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="bg-secondary">
        <p class="mb-0">
            &copy; {{ date('Y') }} <strong>Nama Proyek</strong>. Semua Hak Dilindungi.
        </p>
    </div>

    <style>
        .footer {
            background-color: #343a40;
            color: #ffffff;
            font-size: 14px;
        }

        .footer-link:hover {
            color: #00bcd4;
            text-decoration: underline;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffc107;
        }

        .social-icons a {
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #00bcd4;
        }

        .footer p {
            font-size: 12px;
            color: #b0b0b0;
        }
    </style>
</footer>
