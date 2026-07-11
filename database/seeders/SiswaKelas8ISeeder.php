<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8ISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8I')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8I']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8I')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10291', 'nisn' => '0117253662', 'nama_lengkap' => 'AAFIYAH AMBAR ISWARA', 'jenis_kelamin' => 'P'],
            ['nis' => '10326', 'nisn' => '0118577814', 'nama_lengkap' => 'ALDYTH AL ANBIYAA', 'jenis_kelamin' => 'L'],
            ['nis' => '10296', 'nisn' => '0125580538', 'nama_lengkap' => 'ASIFA RAISA SAPUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10520', 'nisn' => '0112610922', 'nama_lengkap' => 'BUNGA MAULIDINA ZAQIH', 'jenis_kelamin' => 'P'],
            ['nis' => '10395', 'nisn' => '0114338994', 'nama_lengkap' => 'DEVANDRA RIZKY AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10333', 'nisn' => '0112418050', 'nama_lengkap' => 'DITA ANGGRAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10300', 'nisn' => '0118214299', 'nama_lengkap' => 'DWI DINAR RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10302', 'nisn' => '0111451243', 'nama_lengkap' => 'GUFRON AMIR FIRDAUS', 'jenis_kelamin' => 'L'],
            ['nis' => '11006', 'nisn' => '0119941463', 'nama_lengkap' => 'HASYIFATUS SAKDIAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10495', 'nisn' => '0115319673', 'nama_lengkap' => 'IMELDA AULIA PUTRI RAMADANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10337', 'nisn' => '0112348323', 'nama_lengkap' => 'KALILA ZAHRA AULIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10338', 'nisn' => '0111987214', 'nama_lengkap' => 'KAYANA DEWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10464', 'nisn' => '0115592095', 'nama_lengkap' => 'KEYLA MAHARANI PURWANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10307', 'nisn' => '3113214846', 'nama_lengkap' => 'MEGA ANGGI RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10531', 'nisn' => '0112373503', 'nama_lengkap' => 'MOCH. KRISTIAN FEBRIANSAH PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10562', 'nisn' => '3112799545', 'nama_lengkap' => 'MOCH. OKTA ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10599', 'nisn' => '0121112123', 'nama_lengkap' => 'MUHAMMAD AUFA RAMADHANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10408', 'nisn' => '0116395698', 'nama_lengkap' => 'MUHAMMAD ILMAN ALFARIZI', 'jenis_kelamin' => 'L'],
            ['nis' => '10375', 'nisn' => '0112602402', 'nama_lengkap' => 'MUHAMMAD NUR ZAKARIA', 'jenis_kelamin' => 'L'],
            ['nis' => '10437', 'nisn' => '0115580856', 'nama_lengkap' => 'MUHAMMAD RADESTA DWI MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10472', 'nisn' => '0117143234', 'nama_lengkap' => 'MUHAMMAD SATRIO ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10568', 'nisn' => '0111959948', 'nama_lengkap' => 'NAYRA MAHADIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10379', 'nisn' => '0106170161', 'nama_lengkap' => 'NUR SINTIYA REGINA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10441', 'nisn' => '0116224072', 'nama_lengkap' => 'OZILIO SAVA KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10636', 'nisn' => '3118163733', 'nama_lengkap' => 'RAFIUL ANAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10541', 'nisn' => '112004052', 'nama_lengkap' => 'RAYHAN AR RAFFI HASTAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10477', 'nisn' => '0113908858', 'nama_lengkap' => 'REBY HADI IRDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10443', 'nisn' => '0117895165', 'nama_lengkap' => 'REFFI SAKH EFFENDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10381', 'nisn' => '0119092488', 'nama_lengkap' => 'RENALDO PUTRA ARAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10512', 'nisn' => '3116724065', 'nama_lengkap' => 'SATRIA JULI MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10352', 'nisn' => '0116498864', 'nama_lengkap' => 'SELVINA ADELIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10321', 'nisn' => '0111968162', 'nama_lengkap' => 'SERLINA PRATAMA SARI', 'jenis_kelamin' => 'P'],
            ['nis' => '11003', 'nisn' => '0112919207', 'nama_lengkap' => 'TAVIA OTYLIA VELOXA', 'jenis_kelamin' => 'P'],
            ['nis' => '10642', 'nisn' => '0111153713', 'nama_lengkap' => 'UBAY DILLAH', 'jenis_kelamin' => 'L'],
        ];

        foreach ($data as $item) {
            Siswa::updateOrCreate(
                ['nis' => $item['nis']],
                [
                    'nisn' => $item['nisn'],
                    'nama_lengkap' => $item['nama_lengkap'],
                    'jenis_kelamin' => $item['jenis_kelamin'],

                    'class_id' => $kelas->id,
                    'tahun_ajaran' => $tahunAjaran,
                    'wali_kelas_id' => $waliKelas ? $waliKelas->id : null,
                    'is_active' => true,
                ]
            );
        }
    }
}
