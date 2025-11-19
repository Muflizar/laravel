## 📁 Laravel Portfolio Website

Website portofolio sederhana yang dibuat menggunakan Laravel 10, dilengkapi halaman:

Home

About

Portfolio

Contact

Semua konten halaman diatur melalui Controller (MVC Laravel) agar lebih terstruktur dan mudah dipelihara.

## 🎯 Tujuan Project

Menerapkan konsep MVC (Model–View–Controller) pada Laravel.

Memisahkan struktur tampilan menggunakan Blade Layouting.

Mengelola data halaman melalui Controller, bukan hardcode di Blade.

Membangun website statis modern dengan desain responsif.

🧩 Analisis & Penjelasan
1. Struktur Folder
laravel_app/
│── app/
│   └── Http/
│       └── Controllers/
│           └── PortofolioController.php
│
│── resources/
│   └── views/
│       ├── layouts/
│       │   ├── header.blade.php
│       │   ├── footer.blade.php
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── portofolio.blade.php
│       └── contact.blade.php
│
│── routes/
│   └── web.php

2. Penjelasan MVC
Model

Project ini belum menggunakan model database, karena semua data masih statis dari controller.

View

Semua halaman menggunakan Blade:

Halaman	File
Home	home.blade.php
About	about.blade.php
Portfolio	portofolio.blade.php
Contact	contact.blade.php
Controller

Semua data halaman dikirim melalui:

app/Http/Controllers/PortofolioController.php


Di dalamnya terdapat method:

Method	Fungsi
home()	Mengirim data hero & features ke halaman home
about()	Mengirim data biodata & skills
portfolio()	Mengirim data daftar project
contact()	Menampilkan form kontak
3. Routing

File: routes/web.php

use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'home'])->name('home');
Route::get('/about', [PortofolioController::class, 'about'])->name('about');
Route::get('/portfolio', [PortofolioController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PortofolioController::class, 'contact'])->name('contact');