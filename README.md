1. *Model*:
   - Terdapat dua model utama: Reservation dan Room, yang mewakili tabel-tabel dalam basis data.
   - Kedua model tersebut menggunakan fitur-fitur dari Eloquent ORM Laravel dan menyediakan relasi antara reservasi dan kamar.

2. *Migrasi Basis Data*:
   - Dalam migrasi, digunakan Schema Builder Laravel untuk membuat tabel-tabel basis data.
   - Terdapat dua migrasi: CreateRoomsTable untuk tabel kamar dan CreateReservationsTable untuk tabel reservasi.

3. *Seeder*:
   - Seeder RoomSeeder digunakan untuk mengisi data awal ke tabel kamar.
   - Ini membantu dalam pengembangan dan uji coba aplikasi dengan menyediakan data dummy.

4. *View (Blade Templates)*:
   - Terdapat beberapa file Blade template untuk menampilkan halaman-halaman dalam aplikasi, seperti:
     - create.blade.php untuk membuat reservasi baru.
     - show.blade.php untuk menampilkan detail reservasi.
     - rooms.blade.php untuk menampilkan daftar kamar.
     - about.blade.php untuk halaman tentang kami.
     - home.blade.php untuk halaman beranda.
   - Blade template memungkinkan penggunaan struktur kendali dan sintaksis Blade Laravel.

5. *Rute (Routes)*:
   - Rute-rute di dalam file web.php menentukan alur navigasi pengguna dalam aplikasi.
   - Terdapat rute-rute untuk berbagai halaman seperti beranda, tentang kami, daftar kamar, dan pemesanan.

6. *Library Eksternal*:
   - Bootstrap: Digunakan untuk desain tata letak halaman dan komponen-komponen UI.
   - jQuery: Digunakan untuk manajemen DOM dan interaksi dengan pengguna.
   - Font Awesome: Digunakan untuk ikon-ikon di halaman web.


1. *ReservationController.php*
   - Fungsi create digunakan untuk menampilkan form pembuatan reservasi.
   - Fungsi store digunakan untuk menyimpan data reservasi yang dibuat.
   - Fungsi show digunakan untuk menampilkan detail reservasi.

2. *RoomController.php*
   - Fungsi index digunakan untuk menampilkan semua kamar.

3. *RoomSeeder.php*
   - Seeder ini digunakan untuk mengisi data kamar ke dalam database.

4. *Layouts dan Views*
   - app.blade.php adalah layout utama aplikasi.
   - reservations.create.blade.php adalah view untuk form pembuatan reservasi.
   - reservations.show.blade.php adalah view untuk menampilkan detail reservasi.
   - rooms.boking.blade.php adalah view untuk menampilkan daftar kamar.
   - about.blade.php adalah view untuk menampilkan tentang hotel.
   - charts.index.blade.php adalah view untuk menampilkan chart.

5. *JavaScript*
   - Fungsi updateRoomPrice digunakan untuk memperbarui harga kamar saat memilih kamar.
   - Fungsi calculateTotal digunakan untuk menghitung total pembayaran.

6. *Database*
   - Tabel reservations digunakan untuk menyimpan data reservasi.
   - Tabel rooms digunakan untuk menyimpan data kamar.

7. *Relationship*
   - Relasi antara Reservation dan Room adalah one-to-one, dimana satu reservasi dimiliki oleh satu kamar.

8. *Validation*
   - Validasi digunakan untuk memastikan bahwa input dari user sesuai dengan format yang diharapkan.

9. *Routing*
   - Routing digunakan untuk mengarahkan pengguna ke halaman yang sesuai berdasarkan request yang diterima.

10. *Seeder*
    - Seeder digunakan untuk mengisi data awal ke dalam database.


### Model Reservation dan Room
Model Reservation dan Room adalah kelas yang mewakili tabel reservations dan rooms di database. Model ini digunakan untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada tabel tersebut.

Model Reservation memiliki relasi dengan model Room menggunakan method room(). Hal ini menunjukkan bahwa setiap reservasi dimiliki oleh satu kamar.

### Kontroler ReservationController dan RoomController
Kontroler ReservationController dan RoomController adalah kelas yang digunakan untuk melakukan logika bisnis dan mengatur tindakan yang diambil saat pengguna melakukan permintaan ke aplikasi.

Kontroler ReservationController memiliki beberapa fungsi, yaitu:

1. create(): Menampilkan formulir pembuatan reservasi dan mengirimkan data kamar ke view.
2. store(Request $request): Menyimpan data reservasi yang dibuat dan melakukan validasi input.
3. show(Reservation $reservation): Menampilkan detail reservasi.

Kontroler RoomController memiliki fungsi:

1. index(): Digunakan untuk menampilkan daftar kamar.

### Migrasi tabel rooms dan reservations
Migrasi adalah kelas yang digunakan untuk membuat atau mengubah tabel di database. Migrasi tabel rooms dan reservations digunakan untuk membuat struktur tabel yang diperlukan.

### Seeder untuk tabel rooms
Seeder adalah kelas yang digunakan untuk memasukkan data ke tabel di database. Seeder untuk tabel rooms digunakan untuk memasukkan data kamar yang diperlukan.

### Tampilan HTML
Tampilan HTML digunakan untuk menampilkan halaman web. Terdapat beberapa tampilan HTML yang digunakan, yaitu:

1. welcome.blade.php: Halaman utama.
2. reservations.create.blade.php: Formulir pembuatan reservasi.
3. reservations.show.blade.php: Halaman detail reservasi.
4. rooms.boking.blade.php: Halaman daftar kamar.

### Rute-rute
Rute-rute digunakan untuk mengatur bagaimana permintaan akan diarahkan ke kontroler dan fungsi yang diperlukan. Terdapat beberapa rute yang digunakan, yaitu:

1. /: Halaman utama.
2. /rooms: Halaman daftar kamar.
3. /reservations/create: Halaman formulir pembuatan reservasi.
4. /reservations/{reservation}: Halaman detail reservasi.
5. /about: Halaman tentang kami.
6. /charts: Halaman chart.
