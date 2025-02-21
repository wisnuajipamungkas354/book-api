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

3. Duplikat file .env.example dan ganti namanya menjadi .env

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

7. Melihat Endpoint yang tersedia
```
php artisan route:list
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

## Role

Terdapat beberapa role yang dapat mengakses ke resource ini, adapun akses yang dapat digunakan oleh masing-masing role yaitu :

1. Admin : Dapat melakukan Create, Read, Update, dan Delete (CRUD) terhadap data buku.
2. Editor : Hanya dapat melakukan Create dan Update terhadap data buku.
3. Viewer : Hanya dapat melakukan Read terhadap data buku.

Untuk dapat mengakses api buku ini, masing-masing role harus melakukan login terlebih dahulu untuk mendapatkan token autentikasi.

## Routes 
Berikut adalah beberapa endpoint yang dapat digunakan untuk mengakses data buku.

### Autentikasi
1. **POST /api/login** : Melakukan Login.
2. **POST /api/register** : Melakukan Register User.
3. **POST /api/logout** : Melakukan Logout.

### Database Buku
1. **GET /api/books** : Mendapatkan semua data buku.
2. **POST /api/books** : Menambahkan data buku baru.
3. **PUT /api/books/{id}** : Melakukan update data buku.
4. **DELETE /api/books/{id}** : Menghapus data buku.

## Struktur Data Buku
Berikut adalah struktur data buku yang digunakan dalam aplikasi ini.
```
{
  "id": Unique Identifier,
  "judul": string,
  "penulis": string,
  "tahun_terbit": integer,
  "deskripsi": text
}
```