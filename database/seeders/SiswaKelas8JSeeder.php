<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8JSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8J')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8J']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8J')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10516', 'nisn' => '0111801726', 'nama_lengkap' => 'AHMAD ZUHRO', 'jenis_kelamin' => 'L'],
            ['nis' => '10220', 'nisn' => '0103774157', 'nama_lengkap' => 'AKTORITO AYUDHA ARDIANSYA PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10294', 'nisn' => '114818567', 'nama_lengkap' => 'AMMAR AULIA KHURNIAWAN PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10393', 'nisn' => '0128583829', 'nama_lengkap' => 'ARBY SAMTA OMRON LIL UMAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10555', 'nisn' => '0119154771', 'nama_lengkap' => 'FEBRIANSYAH ABDILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10525', 'nisn' => '0124858228', 'nama_lengkap' => 'FEBRINA HARUMI SASTRA KUSWOYO', 'jenis_kelamin' => 'P'],
            ['nis' => '10494', 'nisn' => '3125797703', 'nama_lengkap' => 'FINA MAULIDIANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10526', 'nisn' => '0113641573', 'nama_lengkap' => 'ILMI MUFIDAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10528', 'nisn' => '0113794050', 'nama_lengkap' => 'KAYLA SYAHWARANI AZ ZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10497', 'nisn' => '0118838293', 'nama_lengkap' => 'KHALIFAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10498', 'nisn' => '0119320890', 'nama_lengkap' => 'LINDA DWI OCTAVIANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10595', 'nisn' => '0126903289', 'nama_lengkap' => 'MOCH. RADITYA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10434', 'nisn' => '0113598726', 'nama_lengkap' => 'MOCHAMMAD NIZAM ALFIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10406', 'nisn' => '0116613241', 'nama_lengkap' => 'MOCHAMMAD RADIT PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10372', 'nisn' => '01198057735', 'nama_lengkap' => 'MOCHAMMAD RIZKI', 'jenis_kelamin' => 'L'],
            ['nis' => '10376', 'nisn' => '0114945758', 'nama_lengkap' => 'NADHIRA ILYINA DEWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10347', 'nisn' => '0117405215', 'nama_lengkap' => 'NAUFAL AFANDI BASTIAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10537', 'nisn' => '0119603185', 'nama_lengkap' => 'NAURA PUTRI SARAGI', 'jenis_kelamin' => 'P'],
            ['nis' => '10315', 'nisn' => '0118353795', 'nama_lengkap' => 'NURIL ANUGRAH EFENDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10442', 'nisn' => '0116410950', 'nama_lengkap' => 'PUTRI RAMADHANI MUSTIKASARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10317', 'nisn' => '0111327026', 'nama_lengkap' => 'REYVAN AULIYA MUSTAQIM', 'jenis_kelamin' => 'L'],
            ['nis' => '10999', 'nisn' => '0124271013', 'nama_lengkap' => 'ROBERT SYARIF MOBAROK', 'jenis_kelamin' => 'L'],
            ['nis' => '10444', 'nisn' => '112794517', 'nama_lengkap' => 'ROBY ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10575', 'nisn' => '3112676017', 'nama_lengkap' => 'SYFA NUR ABDILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10576', 'nisn' => '0111251199', 'nama_lengkap' => 'SYIFAUL HASANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10609', 'nisn' => '3125370233', 'nama_lengkap' => 'TRI PUTRA RAMADAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10610', 'nisn' => '0115425202', 'nama_lengkap' => 'UBAIDILLAH FAJRIL MEIGIYONO', 'jenis_kelamin' => 'L'],
            ['nis' => '10643', 'nisn' => '0113432433', 'nama_lengkap' => 'VIAN PRADANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10474', 'nisn' => '0113934731', 'nama_lengkap' => 'WINDI MARDIANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10418', 'nisn' => '0113507373', 'nama_lengkap' => 'YENI ARTA DIANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10322', 'nisn' => '0112360574', 'nama_lengkap' => 'ZAHIRA IDELIA SALSABILA', 'jenis_kelamin' => 'P'],
            ['nis' => '10644', 'nisn' => '0117304540', 'nama_lengkap' => 'ZAHRATUL AISYAH PUTRI PERMADI', 'jenis_kelamin' => 'P'],
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
