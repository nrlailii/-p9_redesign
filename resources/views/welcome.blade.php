<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HerbalCare Store</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                🌿 HerbalCare Store
            </a>

            <div class="d-flex gap-2">
                <a href="#" class="btn btn-light btn-sm">Beranda</a>
                <a href="#" class="btn btn-outline-light btn-sm">Produk</a>
                <a href="#" class="btn btn-outline-light btn-sm">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="flex-shrink-0">

        <section class="py-5 text-center bg-light">
            <div class="container">

                <h1 class="display-4 fw-bold text-success">
                    Sistem Informasi Penjualan Herbal
                </h1>

                <p class="lead mt-3">
                    Menyediakan berbagai produk herbal berkualitas untuk menjaga kesehatan keluarga Indonesia.
                </p>

                <div class="mt-4">
                    <a href="#" class="btn btn-success btn-lg me-2">
                        Lihat Produk
                    </a>

                    <a href="#" class="btn btn-outline-success btn-lg">
                        Hubungi Kami
                    </a>
                </div>

            </div>
        </section>

        <!-- Keunggulan -->
        <section class="container py-5">

            <div class="row text-center">

                <div class="col-md-4">
                    <h3>🌱 Produk Berkualitas</h3>
                    <p class="text-muted">
                        Produk herbal pilihan dengan bahan alami terbaik.
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>🚚 Pengiriman Cepat</h3>
                    <p class="text-muted">
                        Pengiriman ke seluruh Indonesia dengan aman.
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>💰 Harga Terjangkau</h3>
                    <p class="text-muted">
                        Harga bersahabat dengan kualitas terbaik.
                    </p>
                </div>

            </div>

        </section>

        <!-- Produk Unggulan -->
        <section class="container py-5">

            <h2 class="text-center fw-bold text-success mb-5">
                Produk Unggulan
            </h2>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="https://picsum.photos/400/250?1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Madu Herbal</h5>
                            <p class="card-text">
                                Membantu menjaga daya tahan tubuh dan meningkatkan energi.
                            </p>
                            <button class="btn btn-success">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="https://picsum.photos/400/250?2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Jahe Instan</h5>
                            <p class="card-text">
                                Minuman herbal hangat yang menyehatkan tubuh.
                            </p>
                            <button class="btn btn-success">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="https://picsum.photos/400/250?3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Teh Rosella</h5>
                            <p class="card-text">
                                Kaya antioksidan dan baik untuk kesehatan.
                            </p>
                            <button class="btn btn-success">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-success text-white text-center py-4 mt-auto">
        <div class="container">
            <h5>HerbalCare Store</h5>
            <p class="mb-0">
                © 2026 Sistem Informasi Penjualan Herbal
            </p>
        </div>
    </footer>

</body>

</html>
