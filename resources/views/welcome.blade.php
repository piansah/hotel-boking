@extends('layouts.app')

@section('content')
<br>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Hotel Tirta Kencana!</h1>
        <p class="lead">Nikmati pengalaman menginap mewah di hotel dengan fasilitas dan layanan terbaik.</p>
        <hr class="my-4">
        <p>Jelajahi pilihan kamar Tirta Kencana dan pesan penginapan anda bersama kami hari ini.</p>
        <!-- Tombol untuk melihat kamar -->
        <a class="btn btn-primary btn-lg" href="{{ url('/rooms') }}" role="button">Lihat Kamar</a>
    </div>
</div>
@endsection
