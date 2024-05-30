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
                'name' => 'Kamar Keluarga',
                'type' => 'Keluarga',
                'price' => 500000, // Rp 500.000
                'description' => 'Kamar standar dengan fasilitas dasar.',
                'image_url' => 'https://img.freepik.com/premium-photo/coastal-hotel-room-with-ocean-view-generative-ai-aig30_31965-179163.jpg?w=1060',
                'video_url' => 'https://media.istockphoto.com/id/1082349950/id/video/interior-kamar-tidur-hotel-modern.mp4?s=mp4-640x640-is&k=20&c=rzWUXbSweEIl-Iy4bfnF-jnOBYg7UTTEUSTm8pRlmbU=',
            ],

            [   // Data kamar deluxe
                'name' => 'Suite Mewah',
                'type' => 'Mewah',
                'price' => 900000, // Rp 900.000
                'description' => 'Kamar deluxe dengan fasilitas lengkap.',
                'image_url' => 'https://img.freepik.com/premium-photo/coastal-hotel-room-with-ocean-view-generative-ai-aig30_31965-179163.jpg?w=1060',
                'video_url' => 'https://media.istockphoto.com/id/1082349950/id/video/interior-kamar-tidur-hotel-modern.mp4?s=mp4-640x640-is&k=20&c=rzWUXbSweEIl-Iy4bfnF-jnOBYg7UTTEUSTm8pRlmbU=',
            ],

            [   // Data kamar eksekutif
                'name' => 'Kamar Superior',
                'type' => 'Superior',
                'price' => 1500000, // Rp 1.500.000
                'description' => 'Kamar eksekutif dengan fasilitas terbaik.',
                'image_url' => 'https://img.freepik.com/premium-photo/coastal-hotel-room-with-ocean-view-generative-ai-aig30_31965-179163.jpg?w=1060',
                'video_url' => 'https://media.istockphoto.com/id/1082349950/id/video/interior-kamar-tidur-hotel-modern.mp4?s=mp4-640x640-is&k=20&c=rzWUXbSweEIl-Iy4bfnF-jnOBYg7UTTEUSTm8pRlmbU=',
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
