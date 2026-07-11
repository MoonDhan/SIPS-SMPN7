<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8BSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8B')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8B']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8B')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10485', 'nisn' => '0112571572', 'nama_lengkap' => 'AKSYA PUTRA FIRNANDA', 'jenis_kelamin' => 'L'],
            ['nis' => '10327', 'nisn' => '0115195101', 'nama_lengkap' => 'ALVINO FERDY SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10486', 'nisn' => '3118210352', 'nama_lengkap' => 'ANANTA TRI FELLY CAHYALITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10587', 'nisn' => '3124130917', 'nama_lengkap' => 'FAZA SYIBRA ILAHI', 'jenis_kelamin' => 'L'],
            ['nis' => '10556', 'nisn' => '0127167047', 'nama_lengkap' => 'FEBY FAIZAH ULYA SYAFIKNY', 'jenis_kelamin' => 'P'],
            ['nis' => '10427', 'nisn' => '0117070867', 'nama_lengkap' => 'GALANG EZA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10557', 'nisn' => '0117975497', 'nama_lengkap' => 'HUMAIROH ZAYYINATUS SHOLEHAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10462', 'nisn' => '0111350922', 'nama_lengkap' => 'INEISYA NARAYA PRIHANDINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10303', 'nisn' => '0115927322', 'nama_lengkap' => 'KARINA AFLIANI ALFARROBY', 'jenis_kelamin' => 'P'],
            ['nis' => '10368', 'nisn' => '0115913079', 'nama_lengkap' => 'KAYLA JULIAN ARDINA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10430', 'nisn' => '3122576933', 'nama_lengkap' => 'KAYRA MAULIDA AYU PUTRI NAILI', 'jenis_kelamin' => 'P'],
            ['nis' => '10559', 'nisn' => '3119435725', 'nama_lengkap' => 'KHARISMA PUTRI NUR\'ANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10626', 'nisn' => '3129044607', 'nama_lengkap' => 'KIRANA AZZAHRA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10627', 'nisn' => '0118621777', 'nama_lengkap' => 'LAILATUL JANNAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10594', 'nisn' => '0116775620', 'nama_lengkap' => 'LATIFATUL JANNAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10530', 'nisn' => '0114501354', 'nama_lengkap' => 'LUTFY ANDRIANTO', 'jenis_kelamin' => 'L'],
            ['nis' => '10306', 'nisn' => '0128545225', 'nama_lengkap' => 'MARVEL APRILIO', 'jenis_kelamin' => 'L'],
            ['nis' => '10500', 'nisn' => '0119295338', 'nama_lengkap' => 'MOCH. KEVIN FAHRIZY', 'jenis_kelamin' => 'L'],
            ['nis' => '10501', 'nisn' => '0124717265', 'nama_lengkap' => 'MOCHAMMAD EKA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10468', 'nisn' => '0112457821', 'nama_lengkap' => 'MOCHAMMAD FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10533', 'nisn' => '112765713', 'nama_lengkap' => 'MOHAMMAD RADITYA AGUNG CAHYA S.S.', 'jenis_kelamin' => 'L'],
            ['nis' => '10598', 'nisn' => '0126020893', 'nama_lengkap' => 'MUHAMMAD ARYA KENZIE PUTRA A.', 'jenis_kelamin' => 'L'],
            ['nis' => '10345', 'nisn' => '3116108123', 'nama_lengkap' => 'MUHAMMAD NIRWAN WAHID', 'jenis_kelamin' => 'L'],
            ['nis' => '10471', 'nisn' => '0114778941', 'nama_lengkap' => 'MUHAMMAD RAFA ALI AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10504', 'nisn' => '0113841014', 'nama_lengkap' => 'MUHAMMAD RAFA FAUZAN KAMIL', 'jenis_kelamin' => 'L'],
            ['nis' => '10377', 'nisn' => '0102818616', 'nama_lengkap' => 'NATHANAEL PRANADIHAN P.', 'jenis_kelamin' => 'L'],
            ['nis' => '10602', 'nisn' => '0121080330', 'nama_lengkap' => 'NAYLA PUTRI AISYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10475', 'nisn' => '0116770230', 'nama_lengkap' => 'PUTRA DESPA FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10508', 'nisn' => '3113731381', 'nama_lengkap' => 'PUTRA PRATAMA SISWOYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10476', 'nisn' => '0114650885', 'nama_lengkap' => 'QANITA NAJIAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10540', 'nisn' => '0111025350', 'nama_lengkap' => 'RADITIYA HISYAM WIDODO', 'jenis_kelamin' => 'L'],
            ['nis' => '10542', 'nisn' => '0117598439', 'nama_lengkap' => 'RISKA NURUL HAKIKI', 'jenis_kelamin' => 'P'],
            ['nis' => '10478', 'nisn' => '0112882864', 'nama_lengkap' => 'SADIRA HASBINALLAH RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10545', 'nisn' => '3112485218', 'nama_lengkap' => 'SELFIA ASHARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10449', 'nisn' => '0119461526', 'nama_lengkap' => 'ZIANOVA SALSABILLA N. Y. PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10482', 'nisn' => '0113490056', 'nama_lengkap' => 'ZULFIQAR SUKMA', 'jenis_kelamin' => 'L'],
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
