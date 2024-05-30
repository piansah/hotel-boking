<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ChartController extends Controller
{
    public function index()
    {
        // Get the data for the chart
        $standarBookings = Reservation::where('room_id', 1)->count(); // assume room_id 1 is standar
        $deluxeBookings = Reservation::where('room_id', 2)->count(); // assume room_id 2 is deluxe
        $eksekutifBookings = Reservation::where('room_id', 3)->count(); // assume room_id 3 is eksekutif

        // Pass the data to the view
        return view('charts.index', compact('standarBookings', 'deluxeBookings', 'eksekutifBookings'));
    }
}
