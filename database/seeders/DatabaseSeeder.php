<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'Editor',
            'role' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('editor123'),
        ]);

        User::create([
            'name' => 'Viewer',
            'role' => 'viewer',
            'email' => 'viewer@gmail.com',
            'password' => bcrypt('viewer123'),
        ]);

        $daftarBuku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'deskripsi' => 'Novel yang menceritakan kisah sekelompok anak-anak di Belitung yang berjuang untuk mendapatkan pendidikan di tengah keterbatasan.'
            ],
            [
                'judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'tahun_terbit' => 2004,
                'deskripsi' => 'Kisah cinta yang penuh dengan nilai-nilai keagamaan, di tengah perjalanan hidup seorang pemuda bernama Fahri.'
            ],
            [
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'tahun_terbit' => 1980,
                'deskripsi' => 'Kisah perjuangan seorang pribumi bernama Minke yang melawan ketidakadilan di zaman kolonial Belanda.'
            ],
            [
                'judul' => 'Sang Pemimpi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2006,
                'deskripsi' => 'Lanjutan dari Laskar Pelangi yang mengisahkan perjuangan dua sahabat, Ikal dan Arai, dalam mengejar mimpi mereka.'
            ],
            [
                'judul' => ' Negeri 5 Menara',
                'penulis' => 'A. Fuadi',
                'tahun_terbit' => 2009,
                'deskripsi' => 'Buku yang bercerita tentang perjuangan sekelompok anak muda di pesantren untuk mencapai impian mereka.'
            ],
            [
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2017,
                'deskripsi' => 'Kisah perjalanan hidup seorang perempuan muda bernama Raib, yang memiliki kemampuan luar biasa untuk mengubah dunia.'
            ],
            [
                'judul' => 'Pulang',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2016,
                'deskripsi' => 'Novel yang mengisahkan perjalanan seorang pria yang mencari jalan pulang setelah bertahun-tahun berada di luar negeri.'
            ],
            [
                'judul' => 'Aroma Karsa',
                'penulis' => 'Dee Lestari',
                'tahun_terbit' => 2018,
                'deskripsi' => 'Cerita tentang seorang perempuan yang mampu mencium aroma dengan kemampuan yang luar biasa, dan pencariannya terhadap masa lalu.'
            ],
            [
                'judul' => 'Bulan',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2015,
                'deskripsi' => 'Novel yang bercerita tentang kehidupan di luar angkasa, tentang sebuah planet yang penuh misteri dan petualangan.'
            ],
            [
                'judul' => 'Perahu Kertas',
                'penulis' => 'Dewi Lestari',
                'tahun_terbit' => 2009,
                'deskripsi' => 'Kisah romantis tentang perjuangan seorang wanita dalam mempertahankan impian dan cintanya.'
            ]
        ];

        foreach($daftarBuku as $buku) {
            Book::create($buku);
        }
    }
}
