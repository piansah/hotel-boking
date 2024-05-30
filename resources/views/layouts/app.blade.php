<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metadata -->
    <meta charset="utf-8"> <!-- Set karakter encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mengatur viewport untuk responsif -->

    <!-- Title -->
    <title>Hotel Booking</title>

    <!-- External Dependencies -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        .navbar-brand,
        .nav-link {
            color: white; /* Ubah warna teks menjadi putih */
        }
    </style>
</head>
<body>
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
                <!-- About Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <!-- Statics Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('charts.index') }}">Charts</a>
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
