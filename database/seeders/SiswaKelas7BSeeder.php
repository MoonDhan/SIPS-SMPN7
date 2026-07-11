<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7BSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7B')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7B']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7B')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10683', 'nisn' => '0129399628', 'nama_lengkap' => 'AISYAH PUTRI SAFFANA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10684', 'nisn' => '0129158783', 'nama_lengkap' => 'ALIF AL FITRAH DEWANTARA', 'jenis_kelamin' => 'L'],
            ['nis' => '10685', 'nisn' => '3124313758', 'nama_lengkap' => 'ALIFAN SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10686', 'nisn' => '0122706261', 'nama_lengkap' => 'ALVINO DWIKI RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10687', 'nisn' => '3133130719', 'nama_lengkap' => 'ALVINO SYAHROMY PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10688', 'nisn' => '0132825130', 'nama_lengkap' => 'BIMA PUTRA DINARTA', 'jenis_kelamin' => 'L'],
            ['nis' => '10689', 'nisn' => '3122162747', 'nama_lengkap' => 'CITRA KARISMANIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10690', 'nisn' => '3121643327', 'nama_lengkap' => 'FADLI EKA WARDANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10691', 'nisn' => '3127648714', 'nama_lengkap' => 'FAHREZA KHALIFAH MASYAWIR', 'jenis_kelamin' => 'L'],
            ['nis' => '10692', 'nisn' => '0122762789', 'nama_lengkap' => 'KIAN ARYA PUTRA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10693', 'nisn' => '3122921235', 'nama_lengkap' => 'MARIYA RAIDAH AZZAHRAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10694', 'nisn' => '3125341463', 'nama_lengkap' => 'MAYA ADINDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10979', 'nisn' => '0132866184', 'nama_lengkap' => 'MOCH. ZAKKI RAIHAN ABDILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10695', 'nisn' => '3136819390', 'nama_lengkap' => 'MOHAMMAD AFGHAN MALIKUL HAQ', 'jenis_kelamin' => 'L'],
            ['nis' => '10696', 'nisn' => '0131172077', 'nama_lengkap' => 'MOHAMMAD DIFKI MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10697', 'nisn' => '3121894195', 'nama_lengkap' => 'MOHAMMAD REGAR AL MALIKI', 'jenis_kelamin' => 'L'],
            ['nis' => '10698', 'nisn' => '0133098214', 'nama_lengkap' => 'MUHAMMAD ALIF MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10699', 'nisn' => '3125532069', 'nama_lengkap' => 'MUHAMMAD AUFAR ZIDANE PUTRA P.', 'jenis_kelamin' => 'L'],
            ['nis' => '10700', 'nisn' => '3133024047', 'nama_lengkap' => 'MUHAMMAD DELY', 'jenis_kelamin' => 'L'],
            ['nis' => '10701', 'nisn' => '0127805665', 'nama_lengkap' => 'MUHAMMAD FARHAN RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10702', 'nisn' => '0127670325', 'nama_lengkap' => 'MUHAMMAD NUR RIZKI', 'jenis_kelamin' => 'L'],
            ['nis' => '10703', 'nisn' => '3125705076', 'nama_lengkap' => 'MUHAMMAD SAIFUL', 'jenis_kelamin' => 'L'],
            ['nis' => '10985', 'nisn' => '3121920969', 'nama_lengkap' => 'MUHAMMAD ZAIN AL-HAFIZH', 'jenis_kelamin' => 'L'],
            ['nis' => '10705', 'nisn' => '0135746041', 'nama_lengkap' => 'NABILA NAZWATUL ULYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10988', 'nisn' => '3127992541', 'nama_lengkap' => 'NAJWA AISYATUS SHOLEHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10706', 'nisn' => '3127591835', 'nama_lengkap' => 'NAURA SALSABILA FARAHDIBA', 'jenis_kelamin' => 'P'],
            ['nis' => '10707', 'nisn' => '3121617309', 'nama_lengkap' => 'NOVA DWI MAYRANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10708', 'nisn' => '0123247172', 'nama_lengkap' => 'PUTRI DIRA ULINUHAA', 'jenis_kelamin' => 'P'],
            ['nis' => '10709', 'nisn' => '3138251865', 'nama_lengkap' => 'RAFANIA RINDA AULYA TSAQIB', 'jenis_kelamin' => 'P'],
            ['nis' => '10710', 'nisn' => '3123675903', 'nama_lengkap' => 'SAFA ISCHA RAMADINA', 'jenis_kelamin' => 'P'],
            ['nis' => '10711', 'nisn' => '3121814976', 'nama_lengkap' => 'SOFILIA NAFISA SUWANDI', 'jenis_kelamin' => 'P'],
            ['nis' => '10712', 'nisn' => '3129049082', 'nama_lengkap' => 'VALENSIA OCTA ANGGRAENI', 'jenis_kelamin' => 'P'],
            ['nis' => '10713', 'nisn' => '3124768788', 'nama_lengkap' => 'VANIA PUTRI YANDITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10998', 'nisn' => '3127694290', 'nama_lengkap' => 'ZASKYA AJENG DWI KURNIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10714', 'nisn' => '3123167963', 'nama_lengkap' => 'ZENNORA HOFSYAH KASIH AYU P.', 'jenis_kelamin' => 'P'],
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
