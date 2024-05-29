<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'identity_number',
        'gender',
        'room_id',
        'duration',
        'breakfast',
        'total_price',
        'status',
    ];

    // Relasi antara Reservation dan Room, dimana satu reservasi dimiliki oleh satu kamar
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
