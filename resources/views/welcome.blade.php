@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/hotel.jpg" class="d-block w-100" alt="..." style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>


    <!-- Features Section -->
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">WiFi Gratis</h5>
                    <p class="card-text">Nikmati akses internet cepat dan stabil selama menginap di hotel.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kolam Renang</h5>
                    <p class="card-text">Rehatkan diri Anda dengan berenang di kolam renang hotel yang luas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Spa Mewah</h5>
                    <p class="card-text">Rilekskan tubuh dan pikiran Anda dengan perawatan spa mewah yang tersedia.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Rooms Section -->
    <h2 class="mb-4">Kamar Unggulan</h2>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <img src="image/atlantis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kamar Atlantis Grand Chamber</h5>
                    <p class="card-text">Nikmati kenyamanan tinggal dengan pemandangan indah.</p>
                    <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="image/atlantis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kamar Poseidon Retreat</h5>
                    <p class="card-text">Rasakan pengalaman menginap mewah dengan fasilitas yang lengkap.</p>
                    <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="image/atlantis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kamar Neptune Suite</h5>
                    <p class="card-text">Nikmati waktu berkualitas bersama keluarga dengan kamar yang luas.</p>
                    <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <h2 class="mb-4">Ulasan dari Tamu Kami</h2>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Sangat menyenangkan menginap di Hotel Tirta Kencana. Pelayanan ramah dan fasilitas lengkap!"</p>
                    <footer class="blockquote-footer">John Doe</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Hotel ini sangat indah dengan dekorasi yang elegan. Sangat cocok untuk liburan romantis bersama pasangan."</p>
                    <footer class="blockquote-footer">Jane Doe</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Lokasi hotel yang strategis membuat saya mudah untuk menjelajahi daerah sekitarnya. Sangat direkomendasikan!"</p>
                    <footer class="blockquote-footer">Adam Smith</footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Offers Section -->
    <div class="jumbotron">
        <h2 class="display-4">Penawaran Khusus</h2>
        <p class="lead">Manfaatkan penawaran eksklusif kami untuk pengalaman menginap yang tak terlupakan.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Lihat Penawaran</a>
    </div>
</div>
@endsection
