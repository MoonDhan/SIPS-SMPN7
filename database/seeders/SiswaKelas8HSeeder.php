<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8HSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8H')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8H']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8H')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10292', 'nisn' => '3121977842', 'nama_lengkap' => 'ABDILLAH ZAINI MUHAMMAD', 'jenis_kelamin' => 'L'],
            ['nis' => '10451', 'nisn' => '0115707904', 'nama_lengkap' => 'ADEK REGHA DWI MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10515', 'nisn' => '0111833908', 'nama_lengkap' => 'ADITYA INDRA PERMANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10419', 'nisn' => '0127100827', 'nama_lengkap' => 'AFIKA WAHYUNI', 'jenis_kelamin' => 'P'],
            ['nis' => '10583', 'nisn' => '0124214016', 'nama_lengkap' => 'CAHYA MAHARANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10585', 'nisn' => '0116528879', 'nama_lengkap' => 'DANIAR ANUGRAH KHUMAIRAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10522', 'nisn' => '0115941472', 'nama_lengkap' => 'DESTANIA NABILA AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10396', 'nisn' => '0112777288', 'nama_lengkap' => 'DINAR SHANDY PERTIWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10459', 'nisn' => '0125522052', 'nama_lengkap' => 'FADIL YAKUB NASSRULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10428', 'nisn' => '0114655560', 'nama_lengkap' => 'IQFINI NUR KAMALIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10401', 'nisn' => '0102349719', 'nama_lengkap' => 'JESSICA PRISSILLA', 'jenis_kelamin' => 'P'],
            ['nis' => '10496', 'nisn' => '0116814240', 'nama_lengkap' => 'KEANDRA BAGAS PANGESTU SETIYOKO', 'jenis_kelamin' => 'L'],
            ['nis' => '10558', 'nisn' => '0127847506', 'nama_lengkap' => 'KEVIN KEANDRE DANADYAKSA', 'jenis_kelamin' => 'L'],
            ['nis' => '10560', 'nisn' => '3110642246', 'nama_lengkap' => 'LANTANG NUR ISLAMI IRSYAD', 'jenis_kelamin' => 'L'],
            ['nis' => '10561', 'nisn' => '3119357657', 'nama_lengkap' => 'LATISHA BELVA ZUHRA PRIHADI', 'jenis_kelamin' => 'P'],
            ['nis' => '11002', 'nisn' => '0111660587', 'nama_lengkap' => 'MALIKUL HASANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10564', 'nisn' => '0118374244', 'nama_lengkap' => 'MUHAMAD FATHUR ROHMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10631', 'nisn' => '0101898527', 'nama_lengkap' => 'MUHAMMAD ARIL', 'jenis_kelamin' => 'L'],
            ['nis' => '10374', 'nisn' => '0115001095', 'nama_lengkap' => 'MUHAMMAD IMRON RUSADI', 'jenis_kelamin' => 'L'],
            ['nis' => '10344', 'nisn' => '0125844323', 'nama_lengkap' => 'MUHAMMAD RAFEL', 'jenis_kelamin' => 'L'],
            ['nis' => '10565', 'nisn' => '0127895077', 'nama_lengkap' => 'MUHAMMAD RAFIF SYAUQI RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10632', 'nisn' => '0106932130', 'nama_lengkap' => 'MUHAMMAD RAYHAN RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10633', 'nisn' => '0111094653', 'nama_lengkap' => 'MUHAMMAD REFAN RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10566', 'nisn' => '3101547794', 'nama_lengkap' => 'MUHAMMAD RIZKI ARAFA R.', 'jenis_kelamin' => 'L'],
            ['nis' => '10473', 'nisn' => '0119880974', 'nama_lengkap' => 'NATASYA KEYLA AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10506', 'nisn' => '0127041341', 'nama_lengkap' => 'NATASYA PUTRI HELIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10507', 'nisn' => '0116092336', 'nama_lengkap' => 'NIKEN AYU RIZQIYA AFRIZA', 'jenis_kelamin' => 'P'],
            ['nis' => '10604', 'nisn' => '121137991', 'nama_lengkap' => 'RAIS ALDO SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10383', 'nisn' => '0118406192', 'nama_lengkap' => 'RIZKI DIRGA RAJASA', 'jenis_kelamin' => 'L'],
            ['nis' => '10445', 'nisn' => '0114947805', 'nama_lengkap' => 'SALWA MAULIDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10446', 'nisn' => '3110194777', 'nama_lengkap' => 'SITI AYU WULANDARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10574', 'nisn' => '0129843811', 'nama_lengkap' => 'SUJANNAH FEBRYANI GINTING', 'jenis_kelamin' => 'P'],
            ['nis' => '10578', 'nisn' => '0118464148', 'nama_lengkap' => 'ZAHRA AYU SAFIRA', 'jenis_kelamin' => 'P'],
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
