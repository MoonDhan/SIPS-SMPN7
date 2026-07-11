<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7DSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7D')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7D']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7D')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10747', 'nisn' => '0133367515', 'nama_lengkap' => 'ACHMAD FAKHRI ZAFRANO KHAIRY', 'jenis_kelamin' => 'L'],
            ['nis' => '10748', 'nisn' => '3125482007', 'nama_lengkap' => 'ADINDA SAFANA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10749', 'nisn' => '0136426531', 'nama_lengkap' => 'AKHMARUL HIDAYATI', 'jenis_kelamin' => 'P'],
            ['nis' => '10750', 'nisn' => '0125712234', 'nama_lengkap' => 'AMIN SULAIMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10751', 'nisn' => '3126293567', 'nama_lengkap' => 'ANDIKA PRATAMA PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10752', 'nisn' => '0131774995', 'nama_lengkap' => 'ASYIF FARIZ HARIYANTO', 'jenis_kelamin' => 'L'],
            ['nis' => '10753', 'nisn' => '0129185932', 'nama_lengkap' => 'BAGUS OCKTA WIBOWO', 'jenis_kelamin' => 'L'],
            ['nis' => '10754', 'nisn' => '0124173451', 'nama_lengkap' => 'CHERYL MEYSHA PRADANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10755', 'nisn' => '0126900525', 'nama_lengkap' => 'CINTA AYUNDA BERLIANA SUSANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10756', 'nisn' => '0129868932', 'nama_lengkap' => 'DESYAFIRA PUTRI FAHRENDI', 'jenis_kelamin' => 'P'],
            ['nis' => '10757', 'nisn' => '3124303020', 'nama_lengkap' => 'DEYLA FITRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10758', 'nisn' => '3125155754', 'nama_lengkap' => 'DINDA PUTRI ALIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10974', 'nisn' => '3121557522', 'nama_lengkap' => 'HAIKAL ADITYA PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10759', 'nisn' => '3122144620', 'nama_lengkap' => 'HAURA AINUN MAHYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10760', 'nisn' => '0121019943', 'nama_lengkap' => 'IKA ADHELIA RAHAYU', 'jenis_kelamin' => 'P'],
            ['nis' => '10761', 'nisn' => '0127163217', 'nama_lengkap' => 'INITA SALSABILA', 'jenis_kelamin' => 'P'],
            ['nis' => '10978', 'nisn' => '0129846662', 'nama_lengkap' => 'JUNIOR GILANG RAMADAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10762', 'nisn' => '3125742610', 'nama_lengkap' => 'KAIRA ANGELIE NATHASYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10763', 'nisn' => '0121040053', 'nama_lengkap' => 'KENZIE ARYASATYA MASKA TAMAMI', 'jenis_kelamin' => 'L'],
            ['nis' => '10764', 'nisn' => '0125853109', 'nama_lengkap' => 'KEVIN FICO KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10765', 'nisn' => '3131286804', 'nama_lengkap' => 'M. AFGAN ANDREANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '11007', 'nisn' => '3120912647', 'nama_lengkap' => 'M. AGIL FATHONI', 'jenis_kelamin' => 'L'],
            ['nis' => '10766', 'nisn' => '3125243364', 'nama_lengkap' => 'M. ANNABILKHOYRIL ANAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10767', 'nisn' => '0122316698', 'nama_lengkap' => 'MEILANI DEA ANGGARA', 'jenis_kelamin' => 'P'],
            ['nis' => '10768', 'nisn' => '0128198366', 'nama_lengkap' => 'MOH. RIZKY AGIL RHOMADHON', 'jenis_kelamin' => 'L'],
            ['nis' => '10769', 'nisn' => '3126494149', 'nama_lengkap' => 'MOH. YUSUF RAFIKAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10770', 'nisn' => '0121716705', 'nama_lengkap' => 'MUHAMMAD BILHAM AFRIANSYAH BAHRI', 'jenis_kelamin' => 'L'],
            ['nis' => '10771', 'nisn' => '3120386553', 'nama_lengkap' => 'MUHAMMAD NOVAL REVANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10772', 'nisn' => '0126043014', 'nama_lengkap' => 'NADIRA KHARISMA PERTIWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10773', 'nisn' => '3125443057', 'nama_lengkap' => 'RAFAEL RAGA PRANATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10774', 'nisn' => '0123057170', 'nama_lengkap' => 'RAFI HADINATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10993', 'nisn' => '0124809819', 'nama_lengkap' => 'RAISYATAMA YOGI AYUNDA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10995', 'nisn' => '0121335943', 'nama_lengkap' => 'REZA FARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10775', 'nisn' => '3129390318', 'nama_lengkap' => 'SATRIO PRAYOGA BRAMANTYA', 'jenis_kelamin' => 'L'],
            ['nis' => '10776', 'nisn' => '3127455111', 'nama_lengkap' => 'SITI FATIMATUS ZAHRO', 'jenis_kelamin' => 'P'],
            ['nis' => '10778', 'nisn' => '3139045753', 'nama_lengkap' => 'ZACHWA JUNIASTA ALMAHERA ARISTA', 'jenis_kelamin' => 'P'],
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
