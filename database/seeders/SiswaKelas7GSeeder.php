<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7GSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7G')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7G']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7G')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10842', 'nisn' => '0122293436', 'nama_lengkap' => 'ABDULLAH MUBADIUZZAMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10843', 'nisn' => '3124246856', 'nama_lengkap' => 'AHMAD IMDAD ROBBANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10844', 'nisn' => '3136202110', 'nama_lengkap' => 'AISY FINAA QOTRUNNADA', 'jenis_kelamin' => 'P'],
            ['nis' => '10845', 'nisn' => '0124705316', 'nama_lengkap' => 'AL MIRA KEYSHA MAULIDINA', 'jenis_kelamin' => 'P'],
            ['nis' => '10846', 'nisn' => '0125811209', 'nama_lengkap' => 'ANA TASYA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10847', 'nisn' => '0122925614', 'nama_lengkap' => 'AVIF MEYLINDA WINATA', 'jenis_kelamin' => 'P'],
            ['nis' => '10848', 'nisn' => '0127535277', 'nama_lengkap' => 'AYNUN NASYWAA HERMANTO', 'jenis_kelamin' => 'P'],
            ['nis' => '10972', 'nisn' => '0121518994', 'nama_lengkap' => 'ELSYAH KIANU PUTRI FIORELITA C.', 'jenis_kelamin' => 'P'],
            ['nis' => '10849', 'nisn' => '0124916949', 'nama_lengkap' => 'FAHRI ZAFRAN SETIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10850', 'nisn' => '3137692142', 'nama_lengkap' => 'GISELLA PUTRI SULISTYA FERDIAN', 'jenis_kelamin' => 'P'],
            ['nis' => '10851', 'nisn' => '3124090194', 'nama_lengkap' => 'HISYAM ALI DJAIBAKAL', 'jenis_kelamin' => 'L'],
            ['nis' => '10852', 'nisn' => '0125575140', 'nama_lengkap' => 'KEISHA PUTRI WICAKSANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10853', 'nisn' => '3123734394', 'nama_lengkap' => 'KEVIN ARDYANSYAH BAGUS PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10854', 'nisn' => '3127843877', 'nama_lengkap' => 'KEVIN JULIAN PRIHANDOKO', 'jenis_kelamin' => 'L'],
            ['nis' => '10855', 'nisn' => '0123625064', 'nama_lengkap' => 'M. FAHRIZAL FAHMI', 'jenis_kelamin' => 'L'],
            ['nis' => '10856', 'nisn' => '3127510582', 'nama_lengkap' => 'MAGHFIRAH EMIRZA AFLAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10857', 'nisn' => '0126537057', 'nama_lengkap' => 'MEGA LESTARI WINARSIH', 'jenis_kelamin' => 'P'],
            ['nis' => '10858', 'nisn' => '3126995643', 'nama_lengkap' => 'MOH. ROBIT RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10859', 'nisn' => '0127001332', 'nama_lengkap' => 'MOHAMMAD FIKI PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10860', 'nisn' => '3129770548', 'nama_lengkap' => 'MUCH. REHAN ANANDA', 'jenis_kelamin' => 'L'],
            ['nis' => '10861', 'nisn' => '3124372673', 'nama_lengkap' => 'MUHAMMAD ALI MURTADO', 'jenis_kelamin' => 'L'],
            ['nis' => '10862', 'nisn' => '3117203967', 'nama_lengkap' => 'MUHAMMAD DAFI AFRIYANTO', 'jenis_kelamin' => 'L'],
            ['nis' => '10863', 'nisn' => '0121426453', 'nama_lengkap' => 'MUHAMMAD VALENTINO PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10864', 'nisn' => '0124282829', 'nama_lengkap' => 'NAFISA MIFTAHUL ZULFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10865', 'nisn' => '0123344023', 'nama_lengkap' => 'NUR ALIFATUL JANNAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10866', 'nisn' => '3123537915', 'nama_lengkap' => 'RAFIANDRA DWI SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10867', 'nisn' => '0117329977', 'nama_lengkap' => 'RENDI FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10868', 'nisn' => '3124214001', 'nama_lengkap' => 'RIFKIAN AVICK MADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10869', 'nisn' => '3125556134', 'nama_lengkap' => 'SALSABILA NESTA ANGGRAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10870', 'nisn' => '0137558370', 'nama_lengkap' => 'SITI MULIANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10871', 'nisn' => '3130031675', 'nama_lengkap' => 'SITI NUR AISYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10872', 'nisn' => '0126184478', 'nama_lengkap' => 'TALITHA KAFFA YUSRIAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10873', 'nisn' => '3138816910', 'nama_lengkap' => 'YANUAR MAULANA ISHAQ', 'jenis_kelamin' => 'L'],
            ['nis' => '10997', 'nisn' => '0122487270', 'nama_lengkap' => 'YOGA PRATAMA', 'jenis_kelamin' => 'L'],
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
