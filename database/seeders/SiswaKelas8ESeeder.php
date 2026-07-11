<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8ESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8E')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8E']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8E')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10324', 'nisn' => '0112474233', 'nama_lengkap' => 'ABZARENA DEASIFA MAGDALENA P.', 'jenis_kelamin' => 'P'],
            ['nis' => '10452', 'nisn' => '0103722326', 'nama_lengkap' => 'AFRA JANETA NADZIFAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10453', 'nisn' => '0115097600', 'nama_lengkap' => 'ALDY REZKY EKA ARYADI', 'jenis_kelamin' => 'L'],
            ['nis' => '10548', 'nisn' => '0124538266', 'nama_lengkap' => 'ALECIA GABRIELLA AZ ZAHRA IRAWAN', 'jenis_kelamin' => 'P'],
            ['nis' => '10357', 'nisn' => '0128644612', 'nama_lengkap' => 'ALIF ANSYARO NURSIANTONO', 'jenis_kelamin' => 'L'],
            ['nis' => '10360', 'nisn' => '0123094281', 'nama_lengkap' => 'AURORA GHONIYU MARTIN SARAGI S.', 'jenis_kelamin' => 'P'],
            ['nis' => '10394', 'nisn' => '0116021421', 'nama_lengkap' => 'AVIVATUL HASANAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10519', 'nisn' => '0111886867', 'nama_lengkap' => 'AZZA RIZKY LUSTANTA', 'jenis_kelamin' => 'L'],
            ['nis' => '10488', 'nisn' => '0116003431', 'nama_lengkap' => 'BUNGA INDAH OKTAVIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10618', 'nisn' => '0124653306', 'nama_lengkap' => 'CHARLIE DWI CAHYA VALIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10424', 'nisn' => '0124059108', 'nama_lengkap' => 'DIAN APRILLIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10334', 'nisn' => '0124763722', 'nama_lengkap' => 'DYANA MARGARETA CLARYSA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10523', 'nisn' => '0118591190', 'nama_lengkap' => 'FARDAN APRILA', 'jenis_kelamin' => 'L'],
            ['nis' => '10588', 'nisn' => '0115965698', 'nama_lengkap' => 'FERLIZKA ADIFIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10367', 'nisn' => '0126622297', 'nama_lengkap' => 'JUWITA REALDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10624', 'nisn' => '0119767844', 'nama_lengkap' => 'KEYZHA RIZAM SYAFI SYU\'A', 'jenis_kelamin' => 'L'],
            ['nis' => '10625', 'nisn' => '0115736067', 'nama_lengkap' => 'KHAFI SYAHLUN YASIR', 'jenis_kelamin' => 'L'],
            ['nis' => '10529', 'nisn' => '0125499258', 'nama_lengkap' => 'KHALISYAH FEBRIANA ALFANDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10499', 'nisn' => '3111782935', 'nama_lengkap' => 'M. ALFAN NURIL QULUBY', 'jenis_kelamin' => 'L'],
            ['nis' => '10432', 'nisn' => '0119903174', 'nama_lengkap' => 'M. FAKHRI UBAIDILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10404', 'nisn' => '0111749197', 'nama_lengkap' => 'MARCELLA NATALY SIAHAYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10341', 'nisn' => '0112654006', 'nama_lengkap' => 'MAULANA ADZAN FAUZHENDY', 'jenis_kelamin' => 'L'],
            ['nis' => '10342', 'nisn' => '3119816829', 'nama_lengkap' => 'MOCHAMMAD SYAHRUL ISLAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10407', 'nisn' => '0109899002', 'nama_lengkap' => 'MOHAMAD BADRIAS', 'jenis_kelamin' => 'L'],
            ['nis' => '10597', 'nisn' => '0115080983', 'nama_lengkap' => 'MUCHAMAD RIZKI KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10503', 'nisn' => '0113660319', 'nama_lengkap' => 'MUHAMMAD ERBY FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10312', 'nisn' => '0112790085', 'nama_lengkap' => 'MUHAMMAD NAZRUL ALAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10505', 'nisn' => '0113839323', 'nama_lengkap' => 'MUHAMMAD SALMAN ALFARIZY', 'jenis_kelamin' => 'L'],
            ['nis' => '10438', 'nisn' => '0112434177', 'nama_lengkap' => 'MUHAMMAD ZIBRAN RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10410', 'nisn' => '3110149541', 'nama_lengkap' => 'MUHAMMAD ZIDAN ZAKY', 'jenis_kelamin' => 'L'],
            ['nis' => '10567', 'nisn' => '0127795159', 'nama_lengkap' => 'NAURAH KEYZHA RAHMADANIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10378', 'nisn' => '0114116411', 'nama_lengkap' => 'NOVELINO IGO SETIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10380', 'nisn' => '3111419388', 'nama_lengkap' => 'PUTRI MELISA DIAH HAERANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10382', 'nisn' => '0112448630', 'nama_lengkap' => 'RIFKI SEPDIAN MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10417', 'nisn' => '0113706833', 'nama_lengkap' => 'SITI ALIVIA MALIKA PUTRI AGATHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10447', 'nisn' => '0118984057', 'nama_lengkap' => 'WENI ANGGRAINI', 'jenis_kelamin' => 'P'],
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
