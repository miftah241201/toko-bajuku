# Toko Bajuku

Project UAS Web Ecommerce menggunakan Laravel.

## Deskripsi
Toko Bajuku adalah aplikasi web ecommerce sederhana dengan sistem login dan
pemisahan role antara Admin dan User.

## Fitur
### Admin
- Login Admin
- Kelola Kategori Produk
- Kelola Produk (CRUD)
- Kelola Stok Barang
- Melihat Laporan Penjualan

### User
- Register & Login User
- Melihat Produk
- Melakukan Pembelian
- Validasi stok (pembelian ditolak jika melebihi stok)

## Teknologi
- PHP (Laravel)
- MySQL
- HTML, CSS, Bootstrap

## Cara Menjalankan Project
1. Clone repository
2. Jalankan `composer install`
3. Copy file `.env.example` menjadi `.env`
4. Atur koneksi database di file `.env`
5. Jalankan `php artisan key:generate`
6. Jalankan `php artisan migrate`
7. Jalankan `php artisan serve`

## Catatan
Project ini dibuat untuk memenuhi tugas UAS mata kuliah Web Programming.
