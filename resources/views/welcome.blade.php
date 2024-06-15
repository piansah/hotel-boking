@extends('layouts.app')

@section('content')
    <!-- Header -->
    <section class="bg-light text-dark text-center text-sm-start pt-5 pb-5 pb-lg-0 mt-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <h1>
                        <span class="text-primary">Mari</span>
                        Jalan-jalan, 
                        <span class="text-primary">Mari</span>
                        Travel</h1>
                    <p class="lead">
                        Yuk kita melepas penat, mengisi hari bersama teman-teman. jadi, Mari Travel
                    </p>

                    <button
                    class="btn btn-lg btn-primary btn-lg">

                    Yuk Berangkat!</button>
                </div>

                <img 
                class="img-fluid w-50 d-none d-sm-block"
                src="image/header.svg" 
                alt="header">
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <img src="image/aircraft.svg" class="p-2 card-img-top" alt="..." style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title">Tiket</h5>
                          <p class="card-text">Kami dapat membantu anda untuk mendapatkan tiket perjalanan termurah dan ternyaman.</p>
                          <a href="#" class="btn btn-primary">Pesan Ticket</a>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <img src="image/hotel.svg" class="p-2 card-img-top" alt="..." style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title">Booking</h5>
                          <p class="card-text">Menginap di hotel Atlantis dengan nyaman dan akses yang mudah ke tempat wisata.</p>
                          <a href="#rooms" class="btn btn-primary">Book Hotel</a>
                        </div>
                      </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <img src="image/adventure.svg" class="p-2 card-img-top" alt="..." style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title">Wisata</h5>
                          <p class="card-text">Kunjungi tempat wisata terbaik di lokasi liburan anda dengan harga terjangkau</p>
                          <a href="#" class="btn btn-primary">Jalan-jalan</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Penawaran Khusus -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card bg-light text-dark border">
                        <div class="card-body">
                            <h2 class="card-title">Penawaran Khusus</h2>
                            <p class="card-text">Manfaatkan penawaran eksklusif kami untuk pengalaman menginap yang tak terlupakan.</p>
                            <a class="btn btn-primary btn-lg" href="#promo" role="button">Lihat Penawaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kamar Unggulan -->
    <section id="rooms" class="bg-light text-dark p-5">
        <div class="container"> 
            <h2 class="text-center mb-4">Kamar Unggulan</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/atlantis.jpg') }}" class="card-img-top" alt="Kamar Atlantis Grand Chamber">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Atlantis Grand Chamber</h5>
                            <p class="card-text">Nikmati kenyamanan tinggal dengan pemandangan indah.</p>
                            <p class="card-text">. . .</p>
                            {{-- <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/atlantis.jpg') }}" class="card-img-top" alt="Kamar Poseidon Retreat">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Poseidon Retreat</h5>
                            <p class="card-text">Rasakan pengalaman menginap mewah dengan fasilitas yang lengkap.</p>
                            <p class="card-text">. . .</p>
                            {{-- <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('image/atlantis.jpg') }}" class="card-img-top" alt="Kamar Neptune Suite">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Neptune Suite</h5>
                            <p class="card-text">Nikmati waktu berkualitas bersama keluarga dengan kamar yang luas.</p>
                            <p class="card-text">. . .</p>
                            {{-- <a href="{{ url('/rooms') }}" class="btn btn-primary">Lihat Detail</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section class="bg-light text-light pb-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card text-dark border">
                        <div class="card-body">
                            <h5 class="card-title">WiFi Gratis</h5>
                            <p class="card-text">Nikmati akses internet cepat dan stabil selama menginap di hotel Atlantis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark border">
                        <div class="card-body">
                            <h5 class="card-title">Kolam Renang</h5>
                            <p class="card-text">Rehatkan diri Anda dengan berenang di kolam renang hotel Atlantis yang luas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark border">
                        <div class="card-body">
                            <h5 class="card-title">Spa Mewah</h5>
                            <p class="card-text">Rilekskan tubuh dan pikiran Anda dengan perawatan spa mewah yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo -->
    <section id="promo" class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3>Dapatkan Promo Menarik!</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukan kode promo anda">
                    <button class="btn btn-dark btn-lg" type="button">Submit</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="p-5">
        <div class="container">
            <!-- Testimonials Section -->
            <h2 class="text-center mb-4">Ulasan dari Tamu Kami</h2>
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark border">
                        <div class="card-body">
                            <p class="card-text">"Sangat menyenangkan menginap di Hotel Tirta Kencana. Makanan Mewah, Pelayanan ramah dan fasilitas lengkap!"</p>
                            <footer class="blockquote-footer">Ucup Surucup</footer>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light text-dark border">
                        <div class="card-body">
                            <p class="card-text">"Hotel ini sangat indah dengan dekorasi yang elegan. Sangat cocok untuk liburan romantis bersama pasangan."</p>
                            <footer class="blockquote-footer">Udin Nurjaman</footer>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light text-dark border">
                        <div class="card-body">
                            <p class="card-text">"Lokasi hotel yang strategis membuat saya mudah untuk menjelajahi daerah sekitarnya. Sangat direkomendasikan!"</p>
                            <footer class="blockquote-footer">Adam Gor</footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

     <!-- Contact Us -->
     <section id="contact" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row g-4 align-items-center">
                <div class="col-md">
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <i class="bi bi-geo-alt"></i>
                            <span class="fw-bold">Location:</span>
                            Jalan Ibu Kota Kerajaan Atlantis No. 1, Kota Tirta Kencana
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-telephone"></i>
                            <span class="fw-bold">Mobile Phone:</span>
                            (+62) 123 456 789
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-envelope"></i>
                            <span class="fw-bold">Email:</span>
                            Maritravel@gmail.com
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-instagram"></i>
                            <span class="fw-bold">Instagram:</span>
                            @Maritravel
                        </li>
                    </ul>
                </div>
            </div>
    </section>

@endsection
