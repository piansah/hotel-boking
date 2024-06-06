@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @php
        define('MAX_HEIGHT', 400);
        define('CAROUSEL_MARGIN_TOP', 20);
    @endphp

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
            @php
                $carouselItems = [
                    'hotel.jpg',
                    'hotel-dua.jpg',
                    'hotel-tiga.jpg'
                ];
            @endphp

            @foreach($carouselItems as $index => $item)
                <div class="carousel-item @if($index === 0) active @endif">
                    <img src="{{ asset('image/' . $item) }}" class="d-block w-100" alt="Hotel Atlantis Slide {{ $index + 1 }}" style="max-height: {{ MAX_HEIGHT }}px; object-fit: cover; border-radius: 20px; margin-top: {{ CAROUSEL_MARGIN_TOP }}px;">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Hotel Description -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Selamat Datang di Hotel Atlantis</h4>
                    <p class="card-text">Rasakan kemewahan dan kenyamanan terbaik di Hotel Atlantis, di mana setiap detail dirancang untuk melampaui harapan Anda. Hotel kami menawarkan tempat peristirahatan yang tenang dari hiruk pikuk kehidupan kota, dengan kamar-kamar yang ditata dengan indah, fasilitas kelas dunia, dan layanan yang luar biasa.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mb-5">
        @php
            $features = [
                ['title' => 'WiFi Gratis', 'description' => 'Nikmati akses internet cepat dan stabil selama menginap di hotel Atlantis.'],
                ['title' => 'Kolam Renang', 'description' => 'Rehatkan diri Anda dengan berenang di kolam renang hotel Atlantis yang luas.'],
                ['title' => 'Spa Mewah', 'description' => 'Rilekskan tubuh dan pikiran Anda dengan perawatan spa mewah yang tersedia.']
            ];
        @endphp

        @foreach($features as $feature)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $feature['title'] }}</h5>
                        <p class="card-text">{{ $feature['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Featured Rooms Section -->
    <h2 class="mb-4">Kamar Unggulan</h2>
    @php
        $featuredRooms = [
            ['title' => 'Kamar Atlantis Grand Chamber', 'description' => 'Nikmati kenyamanan tinggal dengan pemandangan indah.', 'image' => 'atlantis.jpg'],
            ['title' => 'Kamar Poseidon Retreat', 'description' => 'Rasakan pengalaman menginap mewah dengan fasilitas yang lengkap.', 'image' => 'atlantis.jpg'],
            ['title' => 'Kamar Neptune Suite', 'description' => 'Nikmati waktu berkualitas bersama keluarga dengan kamar yang luas.', 'image' => 'atlantis.jpg']
        ];
    @endphp

    <div class="row mb-5">
        @foreach($featuredRooms as $room)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('image/'. $room['image']) }}" class="card-img-top" alt="{{ $room['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room['title'] }}</h5>
                        <p class="card-text">{{ $room['description'] }}</p>
                        <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Testimonials Section -->
    <h2 class="mb-4">Ulasan dari Tamu Kami</h2>
    @php
        $testimonials = [
            ['text' => 'Sangat menyenangkan menginap di Hotel Tirta Kencana. Pelayanan ramah dan fasilitas lengkap!', 'author' => 'John Doe'],
            ['text' => 'Hotel ini sangat indah dengan dekorasi yang elegan. Sangat cocok untuk liburan romantis bersama pasangan.', 'author' => 'Jane Doe'],
            ['text' => 'Lokasi hotel yang strategis membuat saya mudah untuk menjelajahi daerah sekitarnya. Sangat direkomendasikan!', 'author' => 'Adam Smith']
        ];
    @endphp

    <div class="row mb-5">
        @foreach($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"{{ $testimonial['text'] }}"</p>
                        <footer class="blockquote-footer">{{ $testimonial['author'] }}</footer>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Special Offers Section -->
    <div class="jumbotron">
        <h2 class="display-4">Penawaran Khusus</h2>
        <p class="lead">Manfaatkan penawaran eksklusif kami untuk pengalaman menginap yang tak terlupakan.</p>
        <a class="btn btn-primary btn-lg" href="{{ url('/offers') }}" role="button">Lihat Penawaran</a>
    </div>
</div>
@endsection
