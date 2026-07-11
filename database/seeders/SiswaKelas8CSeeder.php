<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8CSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8C')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8C']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8C')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10387', 'nisn' => '0114812839', 'nama_lengkap' => 'ACHMAD DWI FEBIAN VALENTINO AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10356', 'nisn' => '0123059844', 'nama_lengkap' => 'ADELIA KALISTYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10388', 'nisn' => '0117768617', 'nama_lengkap' => 'ADELYA ANANDA WIJAYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10484', 'nisn' => '0117971691', 'nama_lengkap' => 'AGUSTINA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10358', 'nisn' => '0128189317', 'nama_lengkap' => 'ANDIKA SOFYAN PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10584', 'nisn' => '0111810335', 'nama_lengkap' => 'CHIKO ALVARO DAVIEN', 'jenis_kelamin' => 'L'],
            ['nis' => '10489', 'nisn' => '0111856753', 'nama_lengkap' => 'DANIEL PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10553', 'nisn' => '0119925099', 'nama_lengkap' => 'DESITA NUR SAFIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10361', 'nisn' => '0122393000', 'nama_lengkap' => 'DEVARA PUTRA NUGRAHA', 'jenis_kelamin' => 'L'],
            ['nis' => '10331', 'nisn' => '3121499315', 'nama_lengkap' => 'DEWA GEDE ANGGARA SATRIA YUDISTIRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10364', 'nisn' => '0117173646', 'nama_lengkap' => 'ELOK FAIQOTUL HIMMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10554', 'nisn' => '0118206469', 'nama_lengkap' => 'FAREL KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10492', 'nisn' => '0129736929', 'nama_lengkap' => 'FAZA MAULIDIAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10524', 'nisn' => '0114996868', 'nama_lengkap' => 'FEBRIANSYAH YUDHI KAISARULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10493', 'nisn' => '0115556271', 'nama_lengkap' => 'FIKRI IBNU MUTAKHIRUL M.', 'jenis_kelamin' => 'L'],
            ['nis' => '10301', 'nisn' => '0123779573', 'nama_lengkap' => 'GIVON THORIQ ROFIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10593', 'nisn' => '3115074708', 'nama_lengkap' => 'KIKY BAYHAQI MUHAMAD', 'jenis_kelamin' => 'L'],
            ['nis' => '10370', 'nisn' => '3114690045', 'nama_lengkap' => 'MARETHA MARSYA DWI AINUN NISA\'', 'jenis_kelamin' => 'P'],
            ['nis' => '10340', 'nisn' => '0127675431', 'nama_lengkap' => 'MARSYA NAZEEHA WARDINA', 'jenis_kelamin' => 'P'],
            ['nis' => '10532', 'nisn' => '0114836926', 'nama_lengkap' => 'MOCHAMMAD ANDRO ARRASYID', 'jenis_kelamin' => 'L'],
            ['nis' => '10469', 'nisn' => '0118445729', 'nama_lengkap' => 'MOHAMMAD FAREL ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10601', 'nisn' => '0118165782', 'nama_lengkap' => 'MUHAMMAD RIZAL MAULANA AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10313', 'nisn' => '0114499384', 'nama_lengkap' => 'NAVAN SEPTIYAN SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10634', 'nisn' => '3118941346', 'nama_lengkap' => 'NAYLA RIFA NURAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10635', 'nisn' => '0101406485', 'nama_lengkap' => 'NAYRA KAYLIN AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10569', 'nisn' => '0114000047', 'nama_lengkap' => 'NAZIRA NUR HIDAYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10348', 'nisn' => '0119736836', 'nama_lengkap' => 'NOVANDRA DWIKI SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10413', 'nisn' => '0119619998', 'nama_lengkap' => 'NURUL FATAN APRILIANTO', 'jenis_kelamin' => 'L'],
            ['nis' => '10570', 'nisn' => '115761710', 'nama_lengkap' => 'RAFA RADITYA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10603', 'nisn' => '0116195013', 'nama_lengkap' => 'RAFAEL AZHIMI APRILIO', 'jenis_kelamin' => 'L'],
            ['nis' => '10571', 'nisn' => '0119342356', 'nama_lengkap' => 'RAISHA SHIVA AULIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10573', 'nisn' => '0125459713', 'nama_lengkap' => 'RININTA DWI AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10416', 'nisn' => '3120270610', 'nama_lengkap' => 'SALWA NILAM QONITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10353', 'nisn' => '0111813934', 'nama_lengkap' => 'SHEFIA AURA NURYULIASARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10514', 'nisn' => '0125784775', 'nama_lengkap' => 'ZIVENT AL FARIZ UDIYANTO PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10450', 'nisn' => '0114276538', 'nama_lengkap' => 'ZYLVIA NUR ROHMAH', 'jenis_kelamin' => 'P'],
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
