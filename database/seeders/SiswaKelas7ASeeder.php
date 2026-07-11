<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7ASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7A')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7A']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7A')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10651', 'nisn' => '0122743577', 'nama_lengkap' => 'ADITYA PRANATA', 'jenis_kelamin' => 'L'],
            ['nis' => '10652', 'nisn' => '0122856895', 'nama_lengkap' => 'AHMAD JAILANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10653', 'nisn' => '3128407738', 'nama_lengkap' => 'AISAFA NARULITA SA`BANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10654', 'nisn' => '3128927101', 'nama_lengkap' => 'AKHDAAN RABBANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10655', 'nisn' => '3122978814', 'nama_lengkap' => 'ANANDA ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10656', 'nisn' => '3122902426', 'nama_lengkap' => 'ANGGA BUDI SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10657', 'nisn' => '0126962143', 'nama_lengkap' => 'ANGGUN FASA PRADITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10658', 'nisn' => '3127475880', 'nama_lengkap' => 'APRILLIA AYU VITA ANGGRAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10659', 'nisn' => '0124630981', 'nama_lengkap' => 'ARIEKA VAYLA UZMALIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10660', 'nisn' => '0138484132', 'nama_lengkap' => 'BURHAN IBNU MAJAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10661', 'nisn' => '3127493598', 'nama_lengkap' => 'DEVIANA MAHARANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10662', 'nisn' => '3127886701', 'nama_lengkap' => 'DINDA AULIA PRATIWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10663', 'nisn' => '3123216512', 'nama_lengkap' => 'DINDA ZAHRA MAHALLY', 'jenis_kelamin' => 'P'],
            ['nis' => '10664', 'nisn' => '0131781557', 'nama_lengkap' => 'GHINA ALIFATUNNISA` PUTRI ASSEGAF', 'jenis_kelamin' => 'P'],
            ['nis' => '10665', 'nisn' => '3126810351', 'nama_lengkap' => 'IFTITAH NUR FADHILAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10666', 'nisn' => '3127475583', 'nama_lengkap' => 'M. RIFAL ALI QISHAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10667', 'nisn' => '0129621640', 'nama_lengkap' => 'MELISA ZAHRATUN NISA', 'jenis_kelamin' => 'P'],
            ['nis' => '10668', 'nisn' => '3127081897', 'nama_lengkap' => 'MIQAILA NACITA RIZKY YANUAR', 'jenis_kelamin' => 'P'],
            ['nis' => '10669', 'nisn' => '0125562563', 'nama_lengkap' => 'MOCH FIQRON WAHIDIN AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10670', 'nisn' => '3125000067', 'nama_lengkap' => 'MOCH. BARESKI RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10671', 'nisn' => '3121298771', 'nama_lengkap' => 'MOCHAMMAD DAFA SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10672', 'nisn' => '3127038070', 'nama_lengkap' => 'MUHAMMAD ALFARISI', 'jenis_kelamin' => 'L'],
            ['nis' => '10673', 'nisn' => '0127254676', 'nama_lengkap' => 'MUHAMMAD ALI IMRON', 'jenis_kelamin' => 'L'],
            ['nis' => '10982', 'nisn' => '3128085660', 'nama_lengkap' => 'MUHAMMAD ASEP MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10674', 'nisn' => '0138067707', 'nama_lengkap' => 'MUHAMMAD HISYAM BALWA EFANDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10675', 'nisn' => '0125566454', 'nama_lengkap' => 'MUHAMMAD NOVAL KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10676', 'nisn' => '0131306105', 'nama_lengkap' => 'MUHAMMAD NUR ANUGRAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10677', 'nisn' => '3125819832', 'nama_lengkap' => 'MUHAMMAD ROFIK AL HIDAYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10986', 'nisn' => '0124456666', 'nama_lengkap' => 'MUZDALIFAH KAMILA AZ-ZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10987', 'nisn' => '0125336739', 'nama_lengkap' => 'NABILA RISKIYANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10990', 'nisn' => '0127876059', 'nama_lengkap' => 'NEYLA CINTYA DEWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10678', 'nisn' => '0124732203', 'nama_lengkap' => 'OKTAVIA KURNIA SARI PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10679', 'nisn' => '0122572793', 'nama_lengkap' => 'PUTRI LAVIDATUL WASILA', 'jenis_kelamin' => 'P'],
            ['nis' => '10680', 'nisn' => '3128367736', 'nama_lengkap' => 'RIZKI NATHAN PASHA', 'jenis_kelamin' => 'L'],
            ['nis' => '10681', 'nisn' => '0127299602', 'nama_lengkap' => 'SYAHFINA AULIYAH ARIFIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10682', 'nisn' => '3121709365', 'nama_lengkap' => 'ZULFA AISAH RANI', 'jenis_kelamin' => 'P'],
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
