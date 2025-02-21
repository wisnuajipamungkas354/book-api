# Selamat Datang di Book API!

## Tentang Book API

Book API adalah aplikasi back-end yang memungkinkan user untuk melakukan registrasi, login, dan melakukan CRUD terhadap database buku. Aplikasi ini memiliki fitur role & permission yang mana masing-masing role memiliki akses yang berbeda-beda terhadap database buku.

Aplikasi ini dibuat menggunakan Laravel. Untuk fitur autentikasi menggunakan Sanctum, sedangkan untuk fitur role & permission hanya menggunakan Policy (fitur bawaan dalam Laravel) untuk melindungi hak akses terhadap resource buku.

## Cara Menggunakan Book API

Untuk menggunakan aplikasi ini, anda dapat melihat dokumentasi lengkap menggunakan [link berikut](https://kbi-intern-fullstack.postman.co/workspace/Team-Workspace~c4f952ee-843b-475a-897e-ba55f834b350/collection/42391783-a5fdd5b5-32a0-4075-ba0d-c441dca5f34d?action=share&creator=42391783&active-environment=42391783-bd8e973e-fdce-4a18-a7e6-628536f93335).

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
email : admin@gmail.com
password : admin123 

2. Akun Editor
email : editor@gmail.com 
password : editor123 

3. Akun Viewer
email : viewer@gmail.com 
password : viewer123


