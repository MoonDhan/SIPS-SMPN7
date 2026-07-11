<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8GSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8G')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8G']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8G')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10325', 'nisn' => '0117894075', 'nama_lengkap' => 'ACHMAD FAHRIZZI KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10483', 'nisn' => '0105228844', 'nama_lengkap' => 'ADITIA AMINURROHMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10547', 'nisn' => '0118811988', 'nama_lengkap' => 'ADLI IRFAN DENTASPINOSA', 'jenis_kelamin' => 'L'],
            ['nis' => '10613', 'nisn' => '0119915832', 'nama_lengkap' => 'AHMAD RAMADLANI HASBI', 'jenis_kelamin' => 'L'],
            ['nis' => '10390', 'nisn' => '3119800558', 'nama_lengkap' => 'AHMAD SYUBAKIR', 'jenis_kelamin' => 'L'],
            ['nis' => '10293', 'nisn' => '0111400448', 'nama_lengkap' => 'AMAR FARIEZ FAQIH', 'jenis_kelamin' => 'L'],
            ['nis' => '10549', 'nisn' => '0119970376', 'nama_lengkap' => 'AMELIA BILQIS DEWI ROMADHONI', 'jenis_kelamin' => 'P'],
            ['nis' => '10328', 'nisn' => '0118329246', 'nama_lengkap' => 'ANDHIKA NANDA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10330', 'nisn' => '0112018542', 'nama_lengkap' => 'ATHALIA ANINDITA YASMIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10425', 'nisn' => '3115576889', 'nama_lengkap' => 'FABIAN IRSYAD RIZQULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10365', 'nisn' => '0116573376', 'nama_lengkap' => 'GILANG RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10336', 'nisn' => '0115306490', 'nama_lengkap' => 'HILAL MAULANA IBRAHIM', 'jenis_kelamin' => 'L'],
            ['nis' => '10400', 'nisn' => '0115490195', 'nama_lengkap' => 'IYAN MUWAFIQUL HASANY', 'jenis_kelamin' => 'L'],
            ['nis' => '10591', 'nisn' => '0118034804', 'nama_lengkap' => 'KEVIN ZEIN AGATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10465', 'nisn' => '0119849916', 'nama_lengkap' => 'LINTANG FEMA ALLTITAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10403', 'nisn' => '3111144170', 'nama_lengkap' => 'M. RAFEL', 'jenis_kelamin' => 'L'],
            ['nis' => '10369', 'nisn' => '0123025642', 'nama_lengkap' => 'M. RIDHO HIDAYATULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10308', 'nisn' => '0118997204', 'nama_lengkap' => 'MEILINDA NUR MUHSYAKINA', 'jenis_kelamin' => 'P'],
            ['nis' => '10310', 'nisn' => '117544968', 'nama_lengkap' => 'MOH. ANDIKA FAHMI', 'jenis_kelamin' => 'L'],
            ['nis' => '10343', 'nisn' => '3118695881', 'nama_lengkap' => 'MOH. TAUFIQUL HIKAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10630', 'nisn' => '0117389145', 'nama_lengkap' => 'MUHAMMAD AGIL FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10339', 'nisn' => '0116452170', 'nama_lengkap' => 'MUHAMMAD SOIMMUL HASAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10538', 'nisn' => '0119200379', 'nama_lengkap' => 'NAZWA KHAIRANI ALSYAFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10440', 'nisn' => '0114687630', 'nama_lengkap' => 'NINDITA ELSANIYYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10349', 'nisn' => '0124329154', 'nama_lengkap' => 'NURAINI DWI ATIFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10316', 'nisn' => '0117916111', 'nama_lengkap' => 'PRAMITA ADELIA ZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10414', 'nisn' => '0112657540', 'nama_lengkap' => 'PUTRI RAHMAWATI', 'jenis_kelamin' => 'P'],
            ['nis' => '10605', 'nisn' => '0111620693', 'nama_lengkap' => 'RAISSA ZIVANA ZORYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10479', 'nisn' => '0112229028', 'nama_lengkap' => 'SALSABILA MUTIARA ARIFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10640', 'nisn' => '0117728539', 'nama_lengkap' => 'SYAFIATUL HAJJAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10641', 'nisn' => '0117877414', 'nama_lengkap' => 'SYANAS HUSNA ANDRIYANTIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10384', 'nisn' => '0114674278', 'nama_lengkap' => 'SYIFA DWI FARADILLA', 'jenis_kelamin' => 'P'],
            ['nis' => '10386', 'nisn' => '3111387962', 'nama_lengkap' => 'YURISKA DWI APRILIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10611', 'nisn' => '0116657712', 'nama_lengkap' => 'ZASKIA AULIA MAHARANI', 'jenis_kelamin' => 'P'],
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
