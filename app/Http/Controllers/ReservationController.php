<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Fungsi untuk menampilkan form pembuatan reservasi
    public function create()
    {
        // Mengambil semua data kamar yang tersedia dari model Room
        $rooms = Room::all();
        // Mengirimkan data kamar ke view 'reservations.create'
        return view('reservations.create', compact('rooms'));
    }

    // Fungsi untuk menyimpan data reservasi yang dibuat
    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'name' => 'required',
            'identity_number' => 'required',
            'gender' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'duration' => 'required|numeric',
            'breakfast' => 'nullable',
        ]);


        $duration = $request->input('duration'); // Mengambil nilai durasi dari request
        $roomPrice = Room::find($request->input('room_id'))->price; // Mengambil harga kamar dari database berdasarkan room_id
        $roomTotalPrice = $duration * $roomPrice; // Menghitung total harga kamar berdasarkan durasi

        $breakfastCost = $request->input('breakfast') ? $duration * 50000 : 0; // Menambahkan biaya sarapan jika diminta
        $discount = $duration > 3 ? 0.1 : 0; // Menentukan diskon jika durasi reservasi lebih dari 3 hari
        $totalPrice = ($roomTotalPrice + $breakfastCost) * (1 - $discount); // Menghitung total harga dengan memperhitungkan diskon jika ada

        // Membuat record baru untuk reservasi dalam database
        $reservation = Reservation::create([
            'name' => $request->input('name'),
            'identity_number' => $request->input('identity_number'),
            'gender' => $request->input('gender'),
            'room_id' => $request->input('room_id'),
            'duration' => $duration,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Mengarahkan pengguna ke halaman detail reservasi dengan pesan sukses
        return redirect()->route('reservations.show', $reservation->id)
            ->with('success', 'Reservation created successfully.');
    }

    // Fungsi untuk menampilkan detail reservasi
    public function show(Reservation $reservation)
    {
        // Mengirimkan data reservasi ke view 'reservations.show'
        return view('reservations.show', compact('reservation'));
    }
}
