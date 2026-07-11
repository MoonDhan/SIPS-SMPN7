<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8FSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8F')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8F']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8F')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10323', 'nisn' => '0114147323', 'nama_lengkap' => 'ABYAKTA BISMA RAJASWA', 'jenis_kelamin' => 'L'],
            ['nis' => '10355', 'nisn' => '3111453565', 'nama_lengkap' => 'ACHMAD ABDUL LATIEF FIRDAUSI', 'jenis_kelamin' => 'L'],
            ['nis' => '10580', 'nisn' => '0114894436', 'nama_lengkap' => 'ALICIA SABRIN ETHANIA ARIFIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10614', 'nisn' => '0113292469', 'nama_lengkap' => 'ALIKA TRI FATIA JASMINE', 'jenis_kelamin' => 'P'],
            ['nis' => '10615', 'nisn' => '0111578049', 'nama_lengkap' => 'ALIVAH QUROTAL AKYUN', 'jenis_kelamin' => 'P'],
            ['nis' => '10420', 'nisn' => '3113699215', 'nama_lengkap' => 'ANDINI YUNIARTA TRI ATIKA SARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10329', 'nisn' => '0124849584', 'nama_lengkap' => 'APRILIA RIZKA PUTRI ALVIANTO', 'jenis_kelamin' => 'P'],
            ['nis' => '10421', 'nisn' => '0118723009', 'nama_lengkap' => 'ARDIANSA RAMANDHA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10295', 'nisn' => '0116574940', 'nama_lengkap' => 'ARTIKA WIDYA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10550', 'nisn' => '0111753535', 'nama_lengkap' => 'AZZAMFATH EDNA ATHAILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10616', 'nisn' => '0115792501', 'nama_lengkap' => 'BISCHO ARYASATYA EKLOU', 'jenis_kelamin' => 'L'],
            ['nis' => '10619', 'nisn' => '0117027574', 'nama_lengkap' => 'CHEISYA REGINA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10552', 'nisn' => '0117208307', 'nama_lengkap' => 'DAFIETRA ALBIAN JUNIOR', 'jenis_kelamin' => 'L'],
            ['nis' => '10363', 'nisn' => '0116715559', 'nama_lengkap' => 'DWI ANANDA TAUFIQUROHMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10426', 'nisn' => '0112751266', 'nama_lengkap' => 'FARAH AISYAH DAMAYANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10461', 'nisn' => '0113352859', 'nama_lengkap' => 'FILLA ADITYA MADRIM', 'jenis_kelamin' => 'L'],
            ['nis' => '10589', 'nisn' => '0118151654', 'nama_lengkap' => 'GEONATHAN WICAKSONO', 'jenis_kelamin' => 'L'],
            ['nis' => '10429', 'nisn' => '0121313393', 'nama_lengkap' => 'JOVAN PUTRA HADIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10402', 'nisn' => '0119653100', 'nama_lengkap' => 'LILIS AZZA AULIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10305', 'nisn' => '0113154897', 'nama_lengkap' => 'MARCELLO NATANAEL SIAHAYA', 'jenis_kelamin' => 'L'],
            ['nis' => '10628', 'nisn' => '0115484033', 'nama_lengkap' => 'MOCH. RAIHAN ALFAEDO', 'jenis_kelamin' => 'L'],
            ['nis' => '10629', 'nisn' => '0112461313', 'nama_lengkap' => 'MOCH. YOGI KUSUMA WARDANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10373', 'nisn' => '0112681421', 'nama_lengkap' => 'MOH. WILDAN IRSYADUL ANAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10435', 'nisn' => '0123159468', 'nama_lengkap' => 'MOHAMAD DWI ANDIKA', 'jenis_kelamin' => 'L'],
            ['nis' => '10534', 'nisn' => '0111014240', 'nama_lengkap' => 'MUHAMMAD DAVIN PUTRA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10311', 'nisn' => '0112249499', 'nama_lengkap' => 'MUHAMMAD LIZAM HAFIFI', 'jenis_kelamin' => 'L'],
            ['nis' => '10411', 'nisn' => '0118750805', 'nama_lengkap' => 'NADYA WANDA SUKMA', 'jenis_kelamin' => 'P'],
            ['nis' => '10439', 'nisn' => '0112121110', 'nama_lengkap' => 'NAFIS SATUS SHOLEHAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10350', 'nisn' => '0125645750', 'nama_lengkap' => 'PUTRI BALQIS SULAIMANOVA', 'jenis_kelamin' => 'P'],
            ['nis' => '10509', 'nisn' => '3120612542', 'nama_lengkap' => 'QIREY TANTRI BACHTIAR', 'jenis_kelamin' => 'P'],
            ['nis' => '10318', 'nisn' => '0112616053', 'nama_lengkap' => 'REYVAND ANGGRA PRAHMONO', 'jenis_kelamin' => 'L'],
            ['nis' => '10319', 'nisn' => '0118358001', 'nama_lengkap' => 'RIAN ALFANDO', 'jenis_kelamin' => 'L'],
            ['nis' => '10320', 'nisn' => '0119632258', 'nama_lengkap' => 'SENDY PRISILIA DWI MARETA', 'jenis_kelamin' => 'P'],
            ['nis' => '10385', 'nisn' => '0113218905', 'nama_lengkap' => 'TALITHA ETIKATUS SHOLEHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10546', 'nisn' => '0109278036', 'nama_lengkap' => 'YONGKI DARMAWAN SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10354', 'nisn' => '0119820383', 'nama_lengkap' => 'ZAHIRA AULIA AYU', 'jenis_kelamin' => 'P'],
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
