<?php

// Membuat seeder untuk tabel Room
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room; // Import model Room

class RoomSeeder extends Seeder
{
    public function run()
    {
        // Data yang akan di-seed ke tabel Room
        $rooms = [
            [   // Data kamar standar
                'name' => 'Kamar Standar',
                'type' => 'Standar',
                'price' => 500000, // Rp 500.000
                'description' => 'Kamar standar dengan fasilitas dasar.',
                'image_url' => 'https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?t=st=1716876620~exp=1716880220~hmac=b0b2b93ada8613c81308d48119c1a242775837466345072a95d7fa36748e6dde&w=900',
            ],

            [   // Data kamar deluxe
                'name' => 'Kamar Deluxe',
                'type' => 'Deluxe',
                'price' => 900000, // Rp 900.000
                'description' => 'Kamar deluxe dengan fasilitas lengkap.',
                'image_url' => 'https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?t=st=1716876620~exp=1716880220~hmac=b0b2b93ada8613c81308d48119c1a242775837466345072a95d7fa36748e6dde&w=900',
            ],

            [   // Data kamar eksekutif
                'name' => 'Kamar Eksekutif',
                'type' => 'Eksekutif',
                'price' => 1500000, // Rp 1.500.000
                'description' => 'Kamar eksekutif dengan fasilitas terbaik.',
                'image_url' => 'https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?t=st=1716876620~exp=1716880220~hmac=b0b2b93ada8613c81308d48119c1a242775837466345072a95d7fa36748e6dde&w=900',
            ],
        ];

        // Melakukan looping pada data $rooms dan memanggil method create pada model Room
        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}

// Jalankan perintah berikut pada terminal untuk mengeksekusi seeder ini
// php artisan db:seed --class=RoomSeeder
