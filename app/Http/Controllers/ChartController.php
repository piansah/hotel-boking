<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $roomTypes = DB::table('rooms')->select('type')->distinct()->get();
        $bookingsByRoomType = [];

        foreach ($roomTypes as $roomType) {
            $bookingsByRoomType[$roomType->type] = Reservation::where('room_id', function ($query) use ($roomType) {
                $query->select('id')->from('rooms')->where('type', $roomType->type);
            })->count();
        }

        return view('charts.index', compact('bookingsByRoomType'));
    }
}
