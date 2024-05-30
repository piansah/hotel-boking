<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metadata -->
    <meta charset="utf-8"> <!-- Set karakter encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mengatur viewport untuk responsif -->

    <!-- Title -->
    <title>{{ config('app.name', 'Hotel Booking') }}</title>

    <!-- External Dependencies -->
    <!-- Bootstrap CSS -->
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
            background-image: url('{{ asset('image/background.jpg') }}'); /* Ganti dengan URL gambar Anda */
            background-size: cover; /* Mengatur ukuran gambar agar menutupi seluruh area */
            background-position: center; /* Mengatur posisi gambar di tengah */
            background-repeat: no-repeat; /* Mengatur agar gambar tidak berulang */
            background-attachment: fixed; /* Mengatur agar gambar tetap di tempat saat di-scroll */
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

    </style>
</head>
<body>
    <!-- Tambahkan div untuk overlay -->
    <div class="background-overlay"></div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">Hotel Booking</a>
        <!-- Toggler Button for Mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <!-- Booking Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rooms') }}">Booking</a>
                </li>
                <!-- Statics Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('charts.index') }}">Statics</a>
                </li>
                <!-- About Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
    <!-- Main Content -->
    <div class="container">
        @yield('content') <!-- Placeholder for dynamic content -->
    </div>
</body>
</html>
