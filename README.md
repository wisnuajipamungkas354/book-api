# Selamat Datang di Book API!

## Tentang Book API

Book API adalah aplikasi back-end yang memungkinkan user untuk melakukan registrasi, login, dan melakukan CRUD terhadap database buku. Aplikasi ini memiliki fitur role & permission yang mana masing-masing role memiliki akses yang berbeda-beda terhadap database buku.

Aplikasi ini dibuat menggunakan Laravel. Untuk fitur autentikasi menggunakan Sanctum, sedangkan untuk fitur role & permission hanya menggunakan Policy (fitur bawaan dalam Laravel) untuk melindungi hak akses terhadap resource buku.

## Cara Menggunakan Book API

Untuk menggunakan aplikasi ini, anda dapat melihat dokumentasi lengkap menggunakan [link berikut](https://wisnuajipamungkas.postman.co/workspace/Fullstack-Developer-Intern-Noxi~43b4c617-3aba-427f-9ab4-3c5b03e54ae4/collection/42391783-1dfa25b6-babd-44a2-9f54-d1cb5cda8f19?action=share&creator=42391783&active-environment=42391783-ec2a2cae-75bf-434d-a3fa-7497f5939ae4).

Atau anda juga bisa mengikuti langkah-langkah berikut untuk menginstall aplikasi ini:

1. Clone repository github ini.
2. Jalankan perintah diibawah ini

```
composer install
```

3. Install sanctum

```
php artisan install:api
```

4. Lakukan migrasi database

```
php artisan migrate
```

5. Jalankan seeder untuk mengisi data dummy

```
php artisan db:seed
```

6. Jalankan aplikasi laravel
```
php artisan serve
```

Adapun untuk awalan akun yang bisa anda gunakan untuk login adalah sebagai berikut :
1. Akun Admin
- email : admin@gmail.com
- password : admin123 

2. Akun Editor
- email : editor@gmail.com 
- password : editor123 

3. Akun Viewer
- email : viewer@gmail.com 
- password : viewer123


