@extends('layouts.app')

@section('content')
<section class="pt-4 mt-5">
    <div class="container">
        <h1 class="mb-4">Detail Pemesanan</h1>
        <div class="card">
            <div class="card-body">
                <p class="mb-3"><strong>Nama Pemesan:</strong> {{ $reservation->name }}</p>
                <p class="mb-3"><strong>Nomor Identitas:</strong> {{ $reservation->identity_number }}</p>
                <p class="mb-3"><strong>Jenis Kelamin:</strong> {{ $reservation->gender }}</p>
                <p class="mb-3"><strong>Kamar:</strong> {{ $reservation->room->name }}</p>
                <p class="mb-3"><strong>Durasi Menginap:</strong> {{ $reservation->duration }} Hari</p>
                <p class="mb-3"><strong>Total Bayar:</strong> Rp {{ number_format($reservation->total_price) }}</p>
    
                <!-- Menampilkan diskon jika durasi menginap lebih dari 3 hari -->
                @if($reservation->duration > 3)
                    <p class="mb-3"><strong>Diskon:</strong> 10%</p>
                @endif
    
                <p class="mb-3"><strong>Status:</strong> {{ $reservation->status }}</p>
    
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
