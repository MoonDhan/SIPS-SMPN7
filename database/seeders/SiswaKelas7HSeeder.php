<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7HSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7H')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7H']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7H')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10874', 'nisn' => '0123107712', 'nama_lengkap' => 'ACH. FARREL RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10875', 'nisn' => '0127273864', 'nama_lengkap' => 'ADINDA FISIANA PUTRI SALSABILAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10876', 'nisn' => '3127919700', 'nama_lengkap' => 'AHMAD CATUR ALFARIZI', 'jenis_kelamin' => 'L'],
            ['nis' => '10877', 'nisn' => '0124440568', 'nama_lengkap' => 'AHMAD TORIQUL AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10971', 'nisn' => '0131338497', 'nama_lengkap' => 'AISYAH MAULANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10878', 'nisn' => '0124808617', 'nama_lengkap' => 'AISYAH RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10879', 'nisn' => '0124955644', 'nama_lengkap' => 'ALENA EDITA DAMAYANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10880', 'nisn' => '0129784506', 'nama_lengkap' => 'ALMIRA PURI AINUN NI\'MAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10881', 'nisn' => '0122948155', 'nama_lengkap' => 'AULIYA NURIL AZIZA', 'jenis_kelamin' => 'P'],
            ['nis' => '10882', 'nisn' => '0123740260', 'nama_lengkap' => 'DAMITA AXELIA ARACELI', 'jenis_kelamin' => 'P'],
            ['nis' => '10883', 'nisn' => '3128660953', 'nama_lengkap' => 'DAVI RAMADHAN ZAKARIA', 'jenis_kelamin' => 'L'],
            ['nis' => '10884', 'nisn' => '3122948808', 'nama_lengkap' => 'DAVIND TANOBEL NAYOTTAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10885', 'nisn' => '0126307886', 'nama_lengkap' => 'DEVICA DAFANIA FALIANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10886', 'nisn' => '0129967043', 'nama_lengkap' => 'DWI INDAH CHAHYA PRIBADI', 'jenis_kelamin' => 'P'],
            ['nis' => '10887', 'nisn' => '0121369232', 'nama_lengkap' => 'FANNO NAGA JULIO', 'jenis_kelamin' => 'L'],
            ['nis' => '10888', 'nisn' => '3122517283', 'nama_lengkap' => 'FATHUR ROHMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10889', 'nisn' => '3128301410', 'nama_lengkap' => 'FEBRIANA ANGGRAINI VALESTIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10890', 'nisn' => '3121499642', 'nama_lengkap' => 'IVANA PUTRI ANGGRAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10891', 'nisn' => '0128999684', 'nama_lengkap' => 'KARAISSA DINARA MARGARIFTA', 'jenis_kelamin' => 'P'],
            ['nis' => '10892', 'nisn' => '0125504319', 'nama_lengkap' => 'MOCH. ALFANDI HARI HERMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10893', 'nisn' => '0123425407', 'nama_lengkap' => 'MOHAMMAD AFGAN DANU SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10894', 'nisn' => '0135791293', 'nama_lengkap' => 'MUCHAMMAD SAPUTRA FAISAL', 'jenis_kelamin' => 'L'],
            ['nis' => '10895', 'nisn' => '3127380843', 'nama_lengkap' => 'MUHAMMAD AFFAN DJAILANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10896', 'nisn' => '0123866132', 'nama_lengkap' => 'MUHAMMAD FIKRYANSAH AL F.', 'jenis_kelamin' => 'L'],
            ['nis' => '10983', 'nisn' => '0111683728', 'nama_lengkap' => 'MUHAMMAD GHAIZAN EL BARADEI', 'jenis_kelamin' => 'L'],
            ['nis' => '10897', 'nisn' => '3115717818', 'nama_lengkap' => 'MUHAMMAD NAZRIEL AFIYATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10898', 'nisn' => '0123975841', 'nama_lengkap' => 'MUHAMMAD RENDY BAHTIAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10899', 'nisn' => '0123148790', 'nama_lengkap' => 'NAILA ZAHRA OKTAVIANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10900', 'nisn' => '0128658120', 'nama_lengkap' => 'PUTRI AYU SHAFIRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10901', 'nisn' => '0121686667', 'nama_lengkap' => 'SABRINA NADA MUTIARA LAUTIFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10902', 'nisn' => '3113286000', 'nama_lengkap' => 'SHAHREZHA AJJI PANGESTU', 'jenis_kelamin' => 'L'],
            ['nis' => '10903', 'nisn' => '3124055562', 'nama_lengkap' => 'TIRTA MAULANA IBRAHIM', 'jenis_kelamin' => 'L'],
            ['nis' => '10904', 'nisn' => '3121461987', 'nama_lengkap' => 'WULAN NUR AYNI', 'jenis_kelamin' => 'P'],
            ['nis' => '10905', 'nisn' => '0128248447', 'nama_lengkap' => 'YOGA ADI BAGASKARA', 'jenis_kelamin' => 'L'],
        ];

        foreach ($data as $item) {
            Siswa::updateOrCreate(
                ['nisn' => $item['nisn']],
                [
                    'nis' => $item['nis'],
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
