<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Resourceful route untuk kamar
Route::resource('rooms', RoomController::class);

// Resourceful route untuk reservasi
Route::resource('reservations', ReservationController::class);

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');
