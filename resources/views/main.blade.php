<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Sistem Informasi Komlek</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex flex-column justify-content-center align-items-center min-vh-100 text-center">
        <div class="d-flex justify-content-between align-items-start">
            <!-- Logo -->
            <div id="logoSisKomLek" class="mb-4">
                <img src="{{ asset('img/sisKomLekLogo.png') }}" alt="Logo SisKomLek">
            </div>

            <!-- Nav dan Icon Sosial Media dalam satu grup -->
            <div class="d-flex flex-column align-items-center">
                <!-- Navigation -->
                <div id="nav" class="mb-4 w-100 d-flex flex-column align-items-center">
                    <nav class="d-flex flex-column gap-2">
                        <a href="#" class="btn btn-outline-secondary w-100">Peminjaman Peralatan</a>
                        <a href="#" class="btn btn-outline-secondary w-100">Perbaikan Peralatan</a>
                        <a href="#" class="btn btn-outline-secondary w-100">Inventaris Gudang</a>
                        <a href="#" class="btn btn-outline-secondary w-100">Stok Hardware</a>
                        <a href="#" class="btn btn-outline-secondary w-100">Info Pelatihan</a>
                        <a href="#" class="btn btn-outline-secondary w-100">Tentang Komlek</a>
                    </nav>
                </div>

                <!-- Icon Sosial Media -->
                <div id="iconSocMed" class="d-flex gap-3">
                    <img src="{{ asset('img/iconFacebook.svg') }}" alt="Icon Facebook">
                    <img src="{{ asset('img/iconInstagram.svg') }}" alt="Icon Instagram">
                    <img src="{{ asset('img/iconTwitter.svg') }}" alt="Icon Twitter">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>