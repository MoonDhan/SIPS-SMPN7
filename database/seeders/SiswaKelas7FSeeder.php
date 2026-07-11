<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7FSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7F')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7F']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7F')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10811', 'nisn' => '0121514935', 'nama_lengkap' => 'AHMAD ZAKKI AL KAHFI', 'jenis_kelamin' => 'L'],
            ['nis' => '10812', 'nisn' => '3122816759', 'nama_lengkap' => 'ALYA ISLAMADINAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10454', 'nisn' => '0102997773', 'nama_lengkap' => 'ANASTASYA NUR FERLINDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10813', 'nisn' => '0121133849', 'nama_lengkap' => 'APRILIA KHOIRUNNISA', 'jenis_kelamin' => 'P'],
            ['nis' => '10814', 'nisn' => '0122766006', 'nama_lengkap' => 'AVRILIA INKA AGUSTIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10815', 'nisn' => '3121022580', 'nama_lengkap' => 'BAGUS DWI FEBRIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10816', 'nisn' => '3133861600', 'nama_lengkap' => 'BAYU MAULANA PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10817', 'nisn' => '3129751895', 'nama_lengkap' => 'CANTIKA ANGGUN DIANITRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10818', 'nisn' => '0129644876', 'nama_lengkap' => 'DANI PRASETIO', 'jenis_kelamin' => 'L'],
            ['nis' => '10819', 'nisn' => '0123247846', 'nama_lengkap' => 'DINAR ELA PERMATASARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10820', 'nisn' => '0117498580', 'nama_lengkap' => 'DUWI AYU HASANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10821', 'nisn' => '3122485428', 'nama_lengkap' => 'EZA SYAHRUL ADLANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10822', 'nisn' => '3123507861', 'nama_lengkap' => 'FREDELLA QOTRUNADA FIRDAUSI', 'jenis_kelamin' => 'P'],
            ['nis' => '10823', 'nisn' => '0121240253', 'nama_lengkap' => 'FRITZIE NAYAKA SAKA PUTRA R.', 'jenis_kelamin' => 'L'],
            ['nis' => '10824', 'nisn' => '0134839096', 'nama_lengkap' => 'GYSEL FARZANA ZAHIRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10825', 'nisn' => '0128594379', 'nama_lengkap' => 'HAFA MAHAWIRA OZZIE SAGUNA', 'jenis_kelamin' => 'L'],
            ['nis' => '10975', 'nisn' => '3122456778', 'nama_lengkap' => 'IZZATUL MUTAMIMMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10826', 'nisn' => '3124212331', 'nama_lengkap' => 'JOWY ALEYNA NURI ALQIARA', 'jenis_kelamin' => 'P'],
            ['nis' => '10827', 'nisn' => '0129881069', 'nama_lengkap' => 'KENNY PRAWIRANEGARA', 'jenis_kelamin' => 'L'],
            ['nis' => '10828', 'nisn' => '0129874393', 'nama_lengkap' => 'KENZIE JAVAS PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10829', 'nisn' => '3121512636', 'nama_lengkap' => 'MARWAH AQILAH FARZANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10830', 'nisn' => '0125921037', 'nama_lengkap' => 'MEZZALUNA EL BARCA', 'jenis_kelamin' => 'L'],
            ['nis' => '10831', 'nisn' => '3125859441', 'nama_lengkap' => 'MOCH. HABSY HIDAYATULLOH', 'jenis_kelamin' => 'L'],
            ['nis' => '10981', 'nisn' => '0123604111', 'nama_lengkap' => 'MOHAMMAD HAIKAL HABIBI AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10832', 'nisn' => '0128460495', 'nama_lengkap' => 'MUHAMMAD SYAUQONY ROBY', 'jenis_kelamin' => 'L'],
            ['nis' => '10833', 'nisn' => '3124705274', 'nama_lengkap' => 'MUHAMMAD UBAIDILLAH HABIBI', 'jenis_kelamin' => 'L'],
            ['nis' => '10834', 'nisn' => '0138016496', 'nama_lengkap' => 'NANDA FEBRI TRI PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10835', 'nisn' => '0128558683', 'nama_lengkap' => 'NINDI AINUN NAWAL', 'jenis_kelamin' => 'P'],
            ['nis' => '10836', 'nisn' => '0122820919', 'nama_lengkap' => 'PRAMONO EDHI PAMUNGKAS', 'jenis_kelamin' => 'L'],
            ['nis' => '10837', 'nisn' => '0114261236', 'nama_lengkap' => 'RIZQI MAULANA AL AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10838', 'nisn' => '3137488661', 'nama_lengkap' => 'SAFITRI AGUSTIN RAMADANIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10839', 'nisn' => '0121903364', 'nama_lengkap' => 'SHELA NOVITA AFRIANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10840', 'nisn' => '0129518704', 'nama_lengkap' => 'TRISTAN KURNIAWAN PUTRA S.', 'jenis_kelamin' => 'L'],
            ['nis' => '10841', 'nisn' => '0124223475', 'nama_lengkap' => 'ZAHIRAH RAZITA ZULAIKHA LUBIS', 'jenis_kelamin' => 'P'],
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
