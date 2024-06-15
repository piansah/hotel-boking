@extends('layouts.app')

@section('content')
<section class="pt-4 mt-5">
    <div class="container">

        <h1 class="mb-4">Pemesanan Kamar</h1>
    
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Pemesan:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="identity_number">Nomor Identitas:</label>
                <!-- Penamaan Variabel dan Konstanta -->
                <input type="text" class="form-control" id="identity_number" name="identity_number" value="{{ old('identity_number') }}" required pattern="[0-9]{16}">
                <small id="identity_number_help" class="form-text text-muted">Data harus 16 digit.</small>
            </div>
    
            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
    
            <!-- Pilihan Kamar -->
            <div class="form-group">
                <label for="room_id">Pilih Kamar:</label>
                <select class="form-control" id="room_id" name="room_id" required onchange="updateRoomPrice()">
                    @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" data-price="{{ $room->price }}" {{ old('room_id') == $room->id ? 'selected' : '' }}>{{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <!-- Harga Kamar -->
            <div class="form-group">
                <label for="room_price">Harga Kamar:</label>
                <input type="text" class="form-control" id="room_price" name="room_price" readonly>
            </div>
    
            <!-- Tanggal Check-in -->
            <div class="mb-3">
                <label for="check_in_date" class="form-label">Tanggal Check-in</label>
                <input type="date" class="form-control" id="check_in_date" name="check_in_date" required>
            </div>
    
            <!-- Durasi Menginap -->
            <div class="form-group">
                <label for="duration">Durasi Menginap (Hari):</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" required>
            </div>
    
            <!-- Pilihan Sarapan -->
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="breakfast" name="breakfast">
                <label class="form-check-label" for="breakfast">Sarapan</label>
            </div>
    
            <!-- Tombol Hitung Total Bayar -->
            <!-- Penggunaan Konstanta dan Fungsi -->
            <button type="button" class="btn btn-warning" onclick="calculateTotal()">Hitung Total Bayar</button>
    
            <!-- Total Bayar -->
            <div class="form-group mt-3">
                <label for="total_payment">Total Bayar:</label>
                <input type="text" class="form-control" id="total_payment" name="total_payment" readonly>
            </div><br>
    
            <!-- Tombol Pesan dan Batalkan -->
    
            <button type="submit" class="btn btn-primary mb-4">Pesan</button>
            <a href="{{ url('/') }}" class="btn btn-danger mb-4">Gak Jadi</a>
        </form>
    </div>
</section>

<script>
    // Fungsi untuk menghitung total pembayaran
    function calculateTotal() {
        const roomSelect = document.getElementById('room_id');
        const selectedRoom = roomSelect.options[roomSelect.selectedIndex];
        const roomPrice = parseFloat(selectedRoom.getAttribute('data-price'));
        const duration = parseInt(document.getElementById('duration').value);
        const breakfast = document.getElementById('breakfast').checked;

        if (isNaN(roomPrice) || isNaN(duration)) {
            alert("Please ensure all required fields are filled out correctly.");
            return;
        }

        let total = (roomPrice * duration) + (breakfast ? (duration * 50000) : 0); // Menambahkan biaya sarapan

        if (duration > 3) {
            total *= 0.9;  // Menerapkan diskon 10%
        }

        document.getElementById('total_payment').value = `Rp ${total.toLocaleString('id-ID')}`;
    }

    // Fungsi untuk memperbarui harga kamar saat memilih kamar
    function updateRoomPrice() {
        const roomSelect = document.getElementById('room_id');
        const priceInput = document.getElementById('room_price');
        const selectedRoom = roomSelect.options[roomSelect.selectedIndex];
        const roomPrice = selectedRoom.getAttribute('data-price');
        priceInput.value = roomPrice ? `Rp ${parseFloat(roomPrice).toLocaleString('id-ID')}` : '';
    }

    // Memanggil fungsi untuk memperbarui harga kamar saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        updateRoomPrice();
    });
</script>
@endsection
