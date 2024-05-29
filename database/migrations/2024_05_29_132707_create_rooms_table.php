<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Membuat tabel 'rooms'
        Schema::create('rooms', function (Blueprint $table) {

            $table->id(); // Kolom untuk ID unik setiap kamar
            $table->string('name'); // Kolom untuk nama kamar
            $table->string('type'); // Kolom untuk jenis kamar (contoh: single, double, suite, dll.)
            $table->integer('price'); // Kolom untuk harga kamar
            $table->text('description'); // Kolom untuk deskripsi kamar
            $table->string('image_url')->nullable(); // Kolom untuk URL gambar kamar (opsional)
            $table->timestamps(); // Kolom untuk menandai waktu pembuatan dan pembaruan
        });
    }
    public function down(): void
    {
        // Menghapus tabel 'rooms' jika sudah ada
        Schema::dropIfExists('rooms');
    }
};
