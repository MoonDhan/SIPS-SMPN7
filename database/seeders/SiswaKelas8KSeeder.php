<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8KSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8K')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8K']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8K')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10620', 'nisn' => '3116742235', 'nama_lengkap' => 'FARIZI FATAHILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10621', 'nisn' => '0126814016', 'nama_lengkap' => 'FATHUR ROUHID', 'jenis_kelamin' => 'L'],
            ['nis' => '10622', 'nisn' => '0124823362', 'nama_lengkap' => 'FIDELA GRISELDA FUJIANTO', 'jenis_kelamin' => 'P'],
            ['nis' => '10623', 'nisn' => '0111145035', 'nama_lengkap' => 'FITRIYATUS SA\'DIYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10624', 'nisn' => '0119767844', 'nama_lengkap' => 'KEYZHA RIZAM SYAFI SYU\'A', 'jenis_kelamin' => 'L'],
            ['nis' => '10625', 'nisn' => '0115736067', 'nama_lengkap' => 'KHAFI SYAHLUN YASIR', 'jenis_kelamin' => 'L'],
            ['nis' => '10626', 'nisn' => '3129044607', 'nama_lengkap' => 'KIRANA AZZAHRA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10627', 'nisn' => '0118621777', 'nama_lengkap' => 'LAILATUL JANNAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10628', 'nisn' => '0115484033', 'nama_lengkap' => 'MOCH. RAIHAN ALFAEDO', 'jenis_kelamin' => 'L'],
            ['nis' => '10629', 'nisn' => '0112461313', 'nama_lengkap' => 'MOCH. YOGI KUSUMA WARDANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10630', 'nisn' => '0117389145', 'nama_lengkap' => 'MUHAMMAD AGIL FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10631', 'nisn' => '0101898527', 'nama_lengkap' => 'MUHAMMAD ARIL', 'jenis_kelamin' => 'L'],
            ['nis' => '10632', 'nisn' => '0106932130', 'nama_lengkap' => 'MUHAMMAD RAYHAN RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10633', 'nisn' => '0111094653', 'nama_lengkap' => 'MUHAMMAD REFAN RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10634', 'nisn' => '3118941346', 'nama_lengkap' => 'NAYLA RIFA NURAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10635', 'nisn' => '0101406485', 'nama_lengkap' => 'NAYRA KAYLIN AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10636', 'nisn' => '3118163733', 'nama_lengkap' => 'RAFIUL ANAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10638', 'nisn' => '0112158847', 'nama_lengkap' => 'RASYA ADELIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10639', 'nisn' => '0116813094', 'nama_lengkap' => 'RESTI AISASKIA PRASASTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10640', 'nisn' => '0117728539', 'nama_lengkap' => 'SYAFIATUL HAJJAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10641', 'nisn' => '0117877414', 'nama_lengkap' => 'SYANAS HUSNA ANDRIYANTIKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10642', 'nisn' => '0111153713', 'nama_lengkap' => 'UBAY DILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10643', 'nisn' => '0113432433', 'nama_lengkap' => 'VIAN PRADANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10644', 'nisn' => '0117304540', 'nama_lengkap' => 'ZAHRATUL AISYAH PUTRI PERMADI', 'jenis_kelamin' => 'P'],
            ['nis' => '11002', 'nisn' => '0111660587', 'nama_lengkap' => 'MALIKUL HASANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10999', 'nisn' => '0124271013', 'nama_lengkap' => 'ROBERT SYARIF MOBAROK', 'jenis_kelamin' => 'L'],
            ['nis' => '11003', 'nisn' => '0112919207', 'nama_lengkap' => 'TAVIA OTYLIA VELOXA', 'jenis_kelamin' => 'P'],
            ['nis' => '11006', 'nisn' => '0119941463', 'nama_lengkap' => 'HASYIFATUS SAKDIAH', 'jenis_kelamin' => 'P'],
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
