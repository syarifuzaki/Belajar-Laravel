<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirement
The servers requirement of this repo is same as Laravel [see here](https://laravel.com/docs/5.8/installation#server-requirements)

## Installation
1. Buat clone pada repo ini
2. Jalankan `composer install`. Jika belum install composer. Bisa Install [disini](https://getcomposer.org/)
3. Salin .env.example ke file bernama .env atau jalankan perintah `cp .env.example .env` untuk melakukannya
4. Atur konfigurasi di file .env, ganti bagian DB_DATABASE, DB_USERNAME, DB_PASSWORD dengan local server kamu
5. Jalankan command `php artisan key:generate` untuk membuat enkripsi pada aplikasi
6. Buat database sesuai dengan database di .env
7. Migrasi database dengan jalankan command `php artisan migrate` atau `php artisan migrate --seed` untuk menjalankan seeder juga
8. Jalankan server dengan perintah `php artisan serve`