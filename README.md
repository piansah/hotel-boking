
# Sistem Reservasi Hotel

Proyek ini adalah sistem reservasi hotel yang dibangun dengan Laravel. Sistem ini mencakup fitur untuk mengelola kamar, reservasi, dan menampilkan berbagai halaman untuk situs web hotel.

## Model

### Reservation dan Room
Terdapat dua model utama:

- **Reservation**: Mewakili tabel reservasi dalam basis data.
- **Room**: Mewakili tabel kamar dalam basis data.

Kedua model ini menggunakan fitur-fitur Eloquent ORM dan mendefinisikan relasi antara reservasi dan kamar.

## Migrasi Basis Data

### Schema Builder
Schema Builder Laravel digunakan untuk membuat tabel basis data. Dua migrasi yang didefinisikan adalah:

- **CreateRoomsTable**: Membuat tabel kamar.
- **CreateReservationsTable**: Membuat tabel reservasi.

## Seeder

### RoomSeeder
Seeder RoomSeeder digunakan untuk mengisi tabel kamar dengan data awal, yang membantu dalam pengembangan dan pengujian dengan data dummy.

## View (Blade Templates)

### Template
Beberapa Blade template digunakan untuk merender halaman dalam aplikasi:

- **create.blade.php**: Formulir untuk membuat reservasi baru.
- **show.blade.php**: Menampilkan detail reservasi.
- **rooms.blade.php**: Menampilkan daftar kamar.
- **about.blade.php**: Halaman tentang kami.
- **home.blade.php**: Halaman beranda.

Blade template memungkinkan penggunaan struktur kendali dan sintaksis Blade untuk rendering konten dinamis.

## Rute

### Navigasi
Rute yang didefinisikan dalam file `web.php` mengarahkan navigasi pengguna dalam aplikasi. Rute-rute ini diatur untuk berbagai halaman seperti beranda, tentang kami, daftar kamar, dan reservasi.

## Library Eksternal

- **Bootstrap**: Digunakan untuk desain tata letak halaman dan komponen-komponen UI.
- **jQuery**: Digunakan untuk manajemen DOM dan interaksi dengan pengguna.
- **Font Awesome**: Digunakan untuk ikon-ikon di halaman web.

## Kontroler

### ReservationController.php

- **create()**: Menampilkan formulir pembuatan reservasi.
- **store(Request $request)**: Menyimpan data reservasi yang baru dibuat dan memvalidasi input pengguna.
- **show(Reservation $reservation)**: Menampilkan detail reservasi.

### RoomController.php

- **index()**: Menampilkan daftar semua kamar.

## Seeder

### RoomSeeder.php
Mengisi tabel kamar dengan data awal.

## Layout dan View

- **app.blade.php**: Layout utama aplikasi.
- **reservations.create.blade.php**: View untuk formulir pembuatan reservasi.
- **reservations.show.blade.php**: View untuk menampilkan detail reservasi.
- **rooms.booking.blade.php**: View untuk menampilkan daftar kamar.
- **about.blade.php**: View untuk halaman tentang kami.
- **charts.index.blade.php**: View untuk menampilkan chart.

## JavaScript

- **updateRoomPrice**: Memperbarui harga kamar saat kamar dipilih.
- **calculateTotal**: Menghitung jumlah total pembayaran.

## Basis Data

- **reservations**: Tabel untuk menyimpan data reservasi.
- **rooms**: Tabel untuk menyimpan data kamar.

## Relasi

Relasi antara `Reservation` dan `Room` adalah satu-ke-satu, di mana setiap reservasi terkait dengan satu kamar.

## Validasi

Validasi input memastikan bahwa input dari pengguna sesuai dengan format yang diharapkan.

## Routing

Routing mengarahkan pengguna ke halaman yang sesuai berdasarkan permintaan yang diterima.

## Seeder

Seeder digunakan untuk mengisi data awal ke dalam basis data.

## Deskripsi Detail Model dan Kontroler

### Model Reservation dan Room
Model `Reservation` dan `Room` mewakili tabel reservasi dan kamar dalam basis data. Mereka melakukan operasi CRUD pada tabel tersebut. Model `Reservation` memiliki relasi satu-ke-satu dengan model `Room` melalui metode `room()`.

### ReservationController dan RoomController

#### ReservationController

- **create()**: Menampilkan formulir pembuatan reservasi dan mengirimkan data kamar ke view.
- **store(Request $request)**: Menyimpan reservasi baru dan memvalidasi input.
- **show(Reservation $reservation)**: Menampilkan detail reservasi.

#### RoomController

- **index()**: Menampilkan daftar kamar.

### Migrasi Basis Data

#### CreateRoomsTable dan CreateReservationsTable
Migrasi ini membuat struktur tabel yang diperlukan untuk kamar dan reservasi dalam basis data.

### RoomSeeder
Kelas RoomSeeder memasukkan data awal ke dalam tabel kamar.

### View HTML
View HTML digunakan untuk menampilkan halaman web. Beberapa view yang digunakan adalah:

- **welcome.blade.php**: Halaman utama.
- **reservations.create.blade.php**: Formulir pembuatan reservasi.
- **reservations.show.blade.php**: Detail reservasi.
- **rooms.booking.blade.php**: Daftar kamar.

### Rute
Rute mengarahkan permintaan ke fungsi kontroler yang sesuai:

- `/`: Halaman utama.
- `/rooms`: Halaman daftar kamar.
- `/reservations/create`: Formulir pembuatan reservasi.
- `/reservations/{reservation}`: Detail reservasi.
- `/about`: Halaman tentang kami.
- `/charts`: Halaman chart.

## Kesimpulan
README ini memberikan gambaran umum tentang Sistem Reservasi Hotel yang dibangun dengan Laravel, mencakup model, kontroler, migrasi, seeder, view, rute, dan fitur tambahan lainnya. Sistem ini dirancang untuk mengelola kamar hotel dan reservasi secara efisien sambil menyediakan antarmuka yang ramah pengguna.
