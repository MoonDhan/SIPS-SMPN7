<?php

namespace Database\Seeders;

use App\Models\KategoriPelanggaran;
use Illuminate\Database\Seeder;

class KategoriPelanggaranSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            ['nama_pelanggaran' => 'Terlambat masuk sekolah', 'kategori' => 'ringan', 'poin' => 5, 'sanksi' => 'Teguran lisan'],
            ['nama_pelanggaran' => 'Seragam tidak rapi', 'kategori' => 'ringan', 'poin' => 5, 'sanksi' => 'Teguran lisan'],
            ['nama_pelanggaran' => 'Membuang sampah sembarangan', 'kategori' => 'ringan', 'poin' => 5, 'sanksi' => 'Teguran lisan'],
            ['nama_pelanggaran' => 'Keluar kelas tanpa izin', 'kategori' => 'sedang', 'poin' => 10, 'sanksi' => 'Panggilan orang tua'],
            ['nama_pelanggaran' => 'Berbicara tidak sopan', 'kategori' => 'sedang', 'poin' => 15, 'sanksi' => 'Panggilan orang tua'],
            ['nama_pelanggaran' => 'Menggunakan HP tanpa izin', 'kategori' => 'sedang', 'poin' => 10, 'sanksi' => 'Penyitaan HP sementara'],
            ['nama_pelanggaran' => 'Bolos tanpa keterangan', 'kategori' => 'berat', 'poin' => 25, 'sanksi' => 'Skorsing 3 hari'],
            ['nama_pelanggaran' => 'Berkelahi', 'kategori' => 'berat', 'poin' => 30, 'sanksi' => 'Skorsing 5 hari'],
            ['nama_pelanggaran' => 'Vandalisme', 'kategori' => 'berat', 'poin' => 35, 'sanksi' => 'Ganti rugi + skorsing'],
            ['nama_pelanggaran' => 'Bullying', 'kategori' => 'berat', 'poin' => 40, 'sanksi' => 'Skorsing + konseling intensif'],
        ];

        foreach ($kategoris as $kategori) {
            KategoriPelanggaran::create($kategori);
        }
    }
}
