# Laravel REST API — Product Management

RESTful API berbasis Laravel untuk mengelola data produk dan kategori, dilengkapi autentikasi token menggunakan Laravel Sanctum, validasi input, pencarian, filter, pagination, serta upload gambar produk.

## Fitur Utama

- **Autentikasi:** Register, login, logout, dan proteksi API menggunakan Laravel Sanctum.
- **Product Management:** Menampilkan, menambahkan, melihat detail, mengubah, dan menghapus produk.
- **Search:** Pencarian produk berdasarkan kata kunci.
- **Filtering:** Filter produk berdasarkan kategori dan rentang harga.
- **Pagination:** Membatasi jumlah data produk per halaman.
- **Validation:** Validasi input untuk menjaga konsistensi data.
- **Image Upload:** Upload dan pengelolaan gambar produk.

## Teknologi yang Digunakan

- PHP
- Laravel 9
- MySQL
- Laravel Sanctum
- Postman

## Dokumentasi Pengujian API

Seluruh endpoint diuji menggunakan Postman.

### 1. Autentikasi

**Register**
![Register](screenshots/register.png)

**Login**
![Login](screenshots/login.png)

**Pengujian Autentikasi API**
![Pengujian Autentikasi API](screenshots/Pengujian%20Autentikasi%20API.png)

**Logout Menggunakan Laravel Sanctum**
![Pengujian Logout](screenshots/Pengujian%20Logout%20Menggunakan%20Laravel%20Sanctum.png)

### 2. Pengambilan dan Pencarian Data

**Pengambilan Data Produk**
![Pengambilan Data Produk](screenshots/Pengujian%20Pengambilan%20Data%20Produk.png)

**Data Produk dan Informasi Kategori**
![Data Produk dan Kategori](screenshots/Pengujian%20Data%20Produk%20dan%20Informasi%20Kategori.png)

**Detail Produk Berdasarkan ID**
![Detail Produk](screenshots/Pengujian%20Detail%20Produk%20Berdasarkan%20ID.png)

**Pencarian Produk Berdasarkan Kata Kunci**
![Pencarian Produk](screenshots/Pengujian%20Pencarian%20Produk%20Berdasarkan%20Kata%20Kunci.png)

### 3. Pagination

**Pagination Halaman Pertama**
![Pagination Halaman Pertama](screenshots/Pengujian%20Pagination%20Halaman%20Pertama.png)

**Pagination Halaman Kedua**
![Pagination Halaman Kedua](screenshots/Pengujian%20Pagination%20Halaman%20Kedua.png)

### 4. CRUD Produk

**Create — Menambahkan Produk Baru**
![Create Produk](screenshots/Pengujian%20Create,%20Menambahkan%20Produk%20Baru.png)

**Update — Mengubah Data Produk**
![Update Produk](screenshots/Pengujian%20Update,%20Mengubah%20Data%20Produk.png)

**Delete — Menghapus Produk**
![Delete Produk](screenshots/Pengujian%20Delete,%20Menghapus%20Produk.png)

### 5. Validasi, Keamanan, dan Upload

**Keamanan API Tanpa Token**
![Keamanan API Tanpa Token](screenshots/Pengujian%20Keamanan%20API%20Tanpa%20Token.png)

**Token Tidak Valid Setelah Logout**
![Token Tidak Valid](screenshots/Pengujian%20Token%20Tidak%20Valid%20Setelah%20Logout.png)

**Validasi Input Produk**
![Validasi Input Produk](screenshots/Pengujian%20Validasi%20Input%20Produk.png)

**Upload Gambar Produk**
![Upload Gambar Produk](screenshots/Pengujian%20Upload%20Gambar%20Produk.png)

## Cara Menjalankan Project

1. Clone repository:

   ```bash
   git clone https://github.com/Nabillasp/latihan-laravel-rest-api.git
   ```

2. Masuk ke direktori project:

   ```bash
   cd latihan-laravel-rest-api
   ```

3. Install dependency:

   ```bash
   composer install
   ```

4. Salin file konfigurasi:

   ```bash
   copy .env.example .env
   ```

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Atur konfigurasi database pada file `.env`, lalu buat database MySQL yang sesuai.

7. Jalankan migration dan seeder:

   ```bash
   php artisan migrate --seed
   ```

8. Buat symbolic link untuk penyimpanan gambar:

   ```bash
   php artisan storage:link
   ```

9. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

   Server lokal secara default tersedia di `http://127.0.0.1:8000`.

## Catatan

- Gunakan token Bearer pada endpoint yang memerlukan autentikasi.
- Sesuaikan konfigurasi database pada file `.env` dengan lingkungan masing-masing.
- Jangan mengunggah file `.env` atau token autentikasi ke repository publik.

## Repository

[GitHub — latihan-laravel-rest-api](https://github.com/Nabillasp/latihan-laravel-rest-api)
