<?php

namespace Database\Seeders;

use App\Models\GuruKelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $waliKelas = GuruKelas::pluck('id', 'kelas_wali');

        $siswas = [
            ['nis' => '202407001', 'nisn' => '0091234501', 'nama_lengkap' => 'Ahmad Rizki', 'jenis_kelamin' => 'L', 'kelas' => '7A', 'no_hp' => '081234567890', 'alamat' => 'Jl. Merdeka No.1'],
            ['nis' => '202407002', 'nisn' => '0091234502', 'nama_lengkap' => 'Bunga Citra', 'jenis_kelamin' => 'P', 'kelas' => '7A', 'no_hp' => '081234567891', 'alamat' => 'Jl. Diponegoro No.2'],
            ['nis' => '202407003', 'nisn' => '0091234503', 'nama_lengkap' => 'Citra Dewi', 'jenis_kelamin' => 'P', 'kelas' => '7B', 'no_hp' => '081234567892', 'alamat' => 'Jl. Sudirman No.3'],
            ['nis' => '202407004', 'nisn' => '0091234504', 'nama_lengkap' => 'Danu Pratama', 'jenis_kelamin' => 'L', 'kelas' => '7B', 'no_hp' => '081234567893', 'alamat' => 'Jl. Ahmad Yani No.4', 'is_active' => false],
            ['nis' => '202407005', 'nisn' => '0091234505', 'nama_lengkap' => 'Eka Fitriani', 'jenis_kelamin' => 'P', 'kelas' => '7C', 'no_hp' => '081234567894', 'alamat' => 'Jl. Kartini No.5'],
            ['nis' => '202308001', 'nisn' => '0081234501', 'nama_lengkap' => 'Fajar Nugroho', 'jenis_kelamin' => 'L', 'kelas' => '8A', 'no_hp' => '081234567895', 'alamat' => 'Jl. Pahlawan No.6'],
            ['nis' => '202308002', 'nisn' => '0081234502', 'nama_lengkap' => 'Gita Puspita', 'jenis_kelamin' => 'P', 'kelas' => '8A', 'no_hp' => '081234567896', 'alamat' => 'Jl. Veteran No.7'],
            ['nis' => '202308003', 'nisn' => '0081234503', 'nama_lengkap' => 'Hendra Wijaya', 'jenis_kelamin' => 'L', 'kelas' => '8B', 'no_hp' => '081234567897', 'alamat' => 'Jl. Siliwangi No.8'],
            ['nis' => '202308004', 'nisn' => '0081234504', 'nama_lengkap' => 'Indah Lestari', 'jenis_kelamin' => 'P', 'kelas' => '8B', 'no_hp' => '081234567898', 'alamat' => 'Jl. Gatot Subroto No.9', 'is_active' => false],
            ['nis' => '202209001', 'nisn' => '0071234501', 'nama_lengkap' => 'Joko Susilo', 'jenis_kelamin' => 'L', 'kelas' => '9A', 'no_hp' => '081234567899', 'alamat' => 'Jl. Raya No.10'],
            ['nis' => '202209002', 'nisn' => '0071234502', 'nama_lengkap' => 'Kartika Sari', 'jenis_kelamin' => 'P', 'kelas' => '9A', 'no_hp' => '081234567800', 'alamat' => 'Jl. Mawar No.11'],
            ['nis' => '202209003', 'nisn' => '0071234503', 'nama_lengkap' => 'Lukman Hakim', 'jenis_kelamin' => 'L', 'kelas' => '9B', 'no_hp' => '081234567801', 'alamat' => 'Jl. Melati No.12'],
        ];

        foreach ($siswas as $siswa) {
            Siswa::create([
                ...$siswa,
                'tahun_ajaran' => '2025/2026',
                'wali_kelas_id' => $waliKelas->get($siswa['kelas']),
                'is_active' => $siswa['is_active'] ?? true,
            ]);
        }
    }
}
