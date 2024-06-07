<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metadata -->
    <meta charset="utf-8"> <!-- Set karakter encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mengatur viewport untuk responsif -->

    <!-- Title -->
    <title>Hotel Atlantis</title>

    <!-- External Dependencies -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        .navbar-brand,
        .nav-link {
            color: white; /* Ubah warna teks menjadi putih */
        }

        /* Gaya untuk gambar latar belakang */
        body {
            background-image: url('{{ asset('image/background.jpg') }}'); /* Ganti dengan URL gambar Anda. */
            background-size: cover; /* Mengatur ukuran gambar agar menutupi seluruh area */
            background-position: center; /* Mengatur posisi gambar di tengah */
            background-repeat: no-repeat; /* Mengatur agar gambar tidak berulang */
            background-attachment: fixed; /* Mengatur agar gambar tetap di tempat saat di-scroll */
            margin: 0; /* Nolkan margin */
            padding: 0; /* Nolkan padding */
            display: flex; /* Gunakan Flexbox */
            flex-direction: column; /* Susun konten secara vertikal */
            min-height: 100vh; /* Set ketinggian minimum */
        }

        /* Opsional: menambahkan lapisan warna dengan transparansi */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1); /* Warna hitam dengan transparansi 10% */
            z-index: -1; /* Mengatur lapisan di belakang konten */
        }

        .card-index {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .card-charts {
            width: 75%;
            background-color: #fff;
            border-radius: 10px;
        }

        /* Footer styles */
        .footer {
            width: 100%;
            height: 50px; /* Sesuaikan tinggi dengan keinginan Anda */
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: auto; /* Geser footer ke bagian bawah */
        }
    </style>
</head>
<body>
    <!-- Tambahkan div untuk overlay -->
    <div class="background-overlay"></div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand text-white" href="{{ url('/') }}">Atlantis</a>
            <!-- Toggler Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Link -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- Room List Link -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('rooms') ? 'active' : '' }}" href="{{ url('/rooms') }}">Room List</a>
                    </li>
                    <!-- Booking Link -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('reservations/create') ? 'active' : '' }}" href="{{ route('reservations.create') }}">Booking</a>
                    </li>
                    <!-- Statics Link -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('charts/index') ? 'active' : '' }}" href="{{ route('charts.index') }}">Statics</a>
                    </li>
                    <!-- About Link -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br>

    <!-- Main Content -->
    <div class="container">
        @yield('content') <!-- Placeholder for dynamic content -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Hotel Atlantis. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
