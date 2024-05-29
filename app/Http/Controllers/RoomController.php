<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Fungsi untuk menampilkan semua kamar
    public function index()
    {
        // Mengambil semua data kamar dari model Room
        $rooms = Room::all();

        // Mengirimkan data kamar ke view 'rooms.boking'
        return view('rooms.boking', compact('rooms'));
    }
}
