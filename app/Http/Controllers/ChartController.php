<?php

namespace App\Http\Controllers;

// Menggunakan Request dan Facades DB
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Menggunakan model Reservation
use App\Models\Reservation;

// Definisisi class ChartController
class ChartController extends Controller
{
    // Fungsi index untuk menampilkan chart
    public function index()
    {
        // Mendapatkan tipe kamar yang unik
        $roomTypes = DB::table('rooms')->select('type')->distinct()->get();

        // Membuat array untuk menampung jumlah booking per tipe kamar
        $bookingsByRoomType = [];

        // Melakukan perulangan untuk setiap tipe kamar
        foreach ($roomTypes as $roomType) {
            // Menghitung jumlah booking per tipe kamar
            $bookingsByRoomType[$roomType->type] = Reservation::where('room_id', function ($query) use ($roomType) {
                // Mencari id kamar berdasarkan tipe kamar
                $query->select('id')->from('rooms')->where('type', $roomType->type);
            })->count();
        }

        // Mengembalikan view charts.index dengan variabel bookingsByRoomType
        return view('charts.index', compact('bookingsByRoomType'));
    }
}
