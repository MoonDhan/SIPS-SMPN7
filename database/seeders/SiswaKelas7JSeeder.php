<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7JSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7J')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7J']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7J')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10939', 'nisn' => '0129535494', 'nama_lengkap' => 'AERILYNER QURANIQUE QUEEN RIYADINAWA', 'jenis_kelamin' => 'P'],
            ['nis' => '10940', 'nisn' => '0129991030', 'nama_lengkap' => 'AFIKA NUR AINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10941', 'nisn' => '3122759729', 'nama_lengkap' => 'AFRYANDO YARDAN AL FAJRIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10942', 'nisn' => '3127467732', 'nama_lengkap' => 'AHMAD FATIR RISKIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10943', 'nisn' => '0126917366', 'nama_lengkap' => 'ALIFIYYAH SHAFA DI TRIYUNIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10944', 'nisn' => '3128045766', 'nama_lengkap' => 'ANDREAS JORDAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10945', 'nisn' => '3129493052', 'nama_lengkap' => 'CITRA AULIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10946', 'nisn' => '3132403982', 'nama_lengkap' => 'DARA DWI MAHARANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10947', 'nisn' => '0125559140', 'nama_lengkap' => 'DHERLEY PETRADA PASSANDARAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10948', 'nisn' => '3125393117', 'nama_lengkap' => 'DWI NOVI MUHARAMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10949', 'nisn' => '0122758337', 'nama_lengkap' => 'FEYRUZ KHALISA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10950', 'nisn' => '3122387959', 'nama_lengkap' => 'FIRMAN ADJI DAMAR RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10951', 'nisn' => '3129363085', 'nama_lengkap' => 'JAKA NURRAHMAD', 'jenis_kelamin' => 'L'],
            ['nis' => '10952', 'nisn' => '3123853691', 'nama_lengkap' => 'LAILY FITRIA RAHMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10953', 'nisn' => '3128873014', 'nama_lengkap' => 'MARIA PUTRI MAHARANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10954', 'nisn' => '3124807408', 'nama_lengkap' => 'MOCH. AKHDAN DWI FAIRUS', 'jenis_kelamin' => 'L'],
            ['nis' => '10955', 'nisn' => '0126030528', 'nama_lengkap' => 'MOH. ADIM', 'jenis_kelamin' => 'L'],
            ['nis' => '10956', 'nisn' => '0124725344', 'nama_lengkap' => 'MOH. AKBAR WIRAOKTAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10957', 'nisn' => '3124130811', 'nama_lengkap' => 'MUHAMMAD BARA QOTRUNADA', 'jenis_kelamin' => 'L'],
            ['nis' => '10958', 'nisn' => '0139549199', 'nama_lengkap' => 'MUHAMMAD ZAHKI ALVARO', 'jenis_kelamin' => 'L'],
            ['nis' => '10959', 'nisn' => '0127525971', 'nama_lengkap' => 'MUHAMMAT RAFLY BAGAS Z.', 'jenis_kelamin' => 'L'],
            ['nis' => '10960', 'nisn' => '0131383726', 'nama_lengkap' => 'NADA MAULIDIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10961', 'nisn' => '0129703984', 'nama_lengkap' => 'NAFIATUL AMIRA NUR LAYLI', 'jenis_kelamin' => 'P'],
            ['nis' => '10962', 'nisn' => '0124356578', 'nama_lengkap' => 'NAYLA ADZANA FIRZANY', 'jenis_kelamin' => 'P'],
            ['nis' => '10963', 'nisn' => '0123146527', 'nama_lengkap' => 'NOVAL AVIF VAUZI', 'jenis_kelamin' => 'L'],
            ['nis' => '10991', 'nisn' => '3124331598', 'nama_lengkap' => 'NOVIANI ISTIQOMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10964', 'nisn' => '0124672739', 'nama_lengkap' => 'NUR AFIFAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10965', 'nisn' => '0126273253', 'nama_lengkap' => 'RAMADHAN ARYA DINATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10966', 'nisn' => '3133181508', 'nama_lengkap' => 'ROSELLA AYU FERBIYANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10967', 'nisn' => '0121396022', 'nama_lengkap' => 'SYAHRINI LAILATUR ROHMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10968', 'nisn' => '0127839671', 'nama_lengkap' => 'TIO FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10969', 'nisn' => '3121651005', 'nama_lengkap' => 'YUDA DWI PRAYOGA', 'jenis_kelamin' => 'L'],
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
