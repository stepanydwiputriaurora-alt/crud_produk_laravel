# CRUD Produk Laravel

Project ini adalah aplikasi sederhana CRUD (Create, Read, Update, Delete) menggunakan Laravel untuk mengelola data produk.

## 📌 Fitur

* Menampilkan data produk
* Menambahkan produk
* Mengedit produk
* Menghapus produk
* Melihat detail produk

## Struktur Data Produk

Field yang digunakan:

* Produk
* Nama Produk
* Ukuran
* Harga
* Stok
* Deskripsi

## Teknologi yang Digunakan

* Laravel 12
* PHP 8.2
* MySQL / SQLite
* Blade Template

##  Cara Menjalankan Project

# 1. Clone Repository

```bash
git clone https://github.com/username/crud_produk_laravel.git
cd crud_produk_laravel
```

# 2. Install Dependency

```bash
composer install
```

# 3. Copy File Environment

```bash
cp .env.example .env
```

# 4. Generate Key

```bash
php artisan key:generate
```

# 5. Setting Database

Edit file `.env`:

```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

# 6. Jalankan Migration

```bash
php artisan migrate
```

# 7. Jalankan Server

```bash
php artisan serve
```

Buka di browser:

```
http://127.0.0.1:8000
```

# Struktur Folder Penting

* `app/Models/Produk.php`
* `app/Http/Controllers/ProdukController.php`
* `resources/views/produk/`
* `routes/web.php`

# Catatan

* Project ini menggunakan tampilan sederhana tanpa CSS framework
* Cocok untuk belajar dasar Laravel CRUD

# Author

* Nama: [stepany]
* GitHub: https://github.com/stepanydwiputriaurora-alt

# License

Project ini bebas digunakan untuk pembelajaran.
