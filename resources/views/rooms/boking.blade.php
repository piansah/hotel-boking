@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Kamar</h1>
    <div class="row">
        <!-- Looping untuk menampilkan setiap kamar -->
        @foreach ($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Menampilkan gambar kamar -->
                <img src="{{ asset($room->image_url) }}" class="card-img-top" alt="{{ $room->name }}">
                <div class="card-body">
                    <!-- Menampilkan nama kamar -->
                    <h5 class="card-title">{{ $room->name }}</h5>
                    <!-- Menampilkan deskripsi kamar -->
                    <p class="card-text">{{ $room->description }}</p>
                    <!-- Menampilkan harga kamar -->
                    <p class="card-text">Harga: Rp. {{ number_format($room->price) }}</p>
                </div>
                <div class="card-body">
                    <video controls class="card-img-top">
                        <source src="{{ asset('video/kamar.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Tombol untuk memesan kamar -->
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Pesan Kamar</a>
</div>
<br>
@endsection
