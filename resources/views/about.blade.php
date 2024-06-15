@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-5 mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tentang Kami</div>

                <div class="card-body">
                    <p>Hotel Atlantis terletak di jantung kota Tirta Kencana, dekat dengan berbagai fasilitas umum dan tempat wisata populer. Tirta Kencana menawarkan kamar-kamar yang nyaman dan bersih, serta layanan pelanggan yang profesional dan ramah.</p>
                    <p>Untuk informasi lebih lanjut, hubungi kami:</p>
                    <!-- Daftar kontak -->
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Alamat: Jalan Ibu Kota Kerajaan Atlantis No. 1, Kota Tirta Kencana</li>
                        <li><i class="fas fa-phone-alt mr-2"></i>Telepon: (123) 456-7890</li>
                        <li><i class="fas fa-envelope mr-2"></i>Email: <a href="mailto:info@TirtaKencana.com">info@hotelTirtaKencana.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

