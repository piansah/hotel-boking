<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel reservasi
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap reservasi
            $table->string('name'); // Nama pemesan
            $table->string('identity_number'); // Nomor identitas pemesan
            $table->string('gender'); // Jenis kelamin pemesan
            $table->unsignedBigInteger('room_id'); // ID kamar yang dipesan
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade'); // Kunci asing ke tabel rooms
            $table->integer('duration'); // Durasi menginap dalam jumlah hari
            $table->boolean('breakfast')->default(false); // Menyertakan sarapan atau tidak, defaultnya tidak
            $table->integer('total_price'); // Total harga pembayaran
            $table->string('status')->default('pending'); // Status pemesanan, defaultnya 'pending'
            $table->timestamps(); // Timestamps untuk penanda waktu pembuatan dan pembaruan
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        // Hapus tabel reservasi jika migrasi dibatalkan
        Schema::dropIfExists('reservations');
    }
}
