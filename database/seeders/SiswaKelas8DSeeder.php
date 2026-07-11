<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8DSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8D')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8D']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8D')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10612', 'nisn' => '0117692550', 'nama_lengkap' => 'AHMAD MAULANA REFANDY', 'jenis_kelamin' => 'L'],
            ['nis' => '10391', 'nisn' => '0111576629', 'nama_lengkap' => 'ALI WAFI AKBAR BAIQUNI', 'jenis_kelamin' => 'L'],
            ['nis' => '10392', 'nisn' => '0116451343', 'nama_lengkap' => 'ANGGUN FIRDAYANI WARDATUS SOLEHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10422', 'nisn' => '3119438032', 'nama_lengkap' => 'AYU LINTANG PUSPITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10456', 'nisn' => '0114194354', 'nama_lengkap' => 'AZALIA CAHYA NIKEN NEHANDA COLIN', 'jenis_kelamin' => 'P'],
            ['nis' => '10551', 'nisn' => '0118994176', 'nama_lengkap' => 'CAHROLINA JAHWA KHUMAYRAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10521', 'nisn' => '0114581388', 'nama_lengkap' => 'DANDY WAHYU PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10490', 'nisn' => '0113502241', 'nama_lengkap' => 'DEVITA PUTRI WULANDARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10298', 'nisn' => '0111135836', 'nama_lengkap' => 'DIMAS PUTRA AL FIRDAUSY', 'jenis_kelamin' => 'L'],
            ['nis' => '10332', 'nisn' => '0126181626', 'nama_lengkap' => 'DIOKA FEBIAN ALVARRO', 'jenis_kelamin' => 'L'],
            ['nis' => '10299', 'nisn' => '3112266986', 'nama_lengkap' => 'DUWI NATALIA', 'jenis_kelamin' => 'P'],
            ['nis' => '10397', 'nisn' => '0127823551', 'nama_lengkap' => 'EMILLUL ALVITO FAIZ FALAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10586', 'nisn' => '3125267086', 'nama_lengkap' => 'FANI MAULIDIANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10621', 'nisn' => '0126814016', 'nama_lengkap' => 'FATHUR ROUHID', 'jenis_kelamin' => 'L'],
            ['nis' => '10399', 'nisn' => '0119066512', 'nama_lengkap' => 'GALANG PUTRA RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10335', 'nisn' => '0111038710', 'nama_lengkap' => 'GIOVANA SETYA KURNIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10366', 'nisn' => '0116390917', 'nama_lengkap' => 'ISAD FAIZ SARIYOWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10304', 'nisn' => '0112885415', 'nama_lengkap' => 'KARINA RIZKY AULIA', 'jenis_kelamin' => 'P'],
            ['nis' => '9941', 'nisn' => '0107027239', 'nama_lengkap' => 'KYANU DICKY de WOLFF', 'jenis_kelamin' => 'L'],
            ['nis' => '10371', 'nisn' => '0122223355', 'nama_lengkap' => 'MAULANA FIQRI AL-HABSY', 'jenis_kelamin' => 'L'],
            ['nis' => '10405', 'nisn' => '0117643396', 'nama_lengkap' => 'MISBAHUL ARIFIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10433', 'nisn' => '0121306487', 'nama_lengkap' => 'MUCH. FELAN ANDIKA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10470', 'nisn' => '0117110428', 'nama_lengkap' => 'MUHAMMAD FARIS MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10436', 'nisn' => '0125991966', 'nama_lengkap' => 'MUHAMMAD IFXA FAIRUZ', 'jenis_kelamin' => 'L'],
            ['nis' => '10409', 'nisn' => '0103274618', 'nama_lengkap' => 'MUHAMMAD PUTRA AULIYA\'', 'jenis_kelamin' => 'L'],
            ['nis' => '10536', 'nisn' => '0118874467', 'nama_lengkap' => 'MUHAMMAD RYAN RAMADHANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10346', 'nisn' => '0115152299', 'nama_lengkap' => 'NACITA RULIA ANGGRAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10314', 'nisn' => '0117648224', 'nama_lengkap' => 'NAUVAL MI\'RATUL DAVA', 'jenis_kelamin' => 'L'],
            ['nis' => '10638', 'nisn' => '0112158847', 'nama_lengkap' => 'RASYA ADELIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10639', 'nisn' => '0116813094', 'nama_lengkap' => 'RESTI AISASKIA PRASASTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10606', 'nisn' => '0111586092', 'nama_lengkap' => 'RINDI ANNISA', 'jenis_kelamin' => 'P'],
            ['nis' => '10607', 'nisn' => '0107604630', 'nama_lengkap' => 'SITI MAHALIAN YULI RAHADIAN', 'jenis_kelamin' => 'P'],
            ['nis' => '10544', 'nisn' => '0122403690', 'nama_lengkap' => 'SOFIA NURUL MAULIDA', 'jenis_kelamin' => 'P'],
            ['nis' => '10608', 'nisn' => '3120340518', 'nama_lengkap' => 'SULWIYAH EKA PUTRI MAULIDA J.', 'jenis_kelamin' => 'P'],
            ['nis' => '10513', 'nisn' => '3111143187', 'nama_lengkap' => 'TIARA OKTAVIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10448', 'nisn' => '0124760558', 'nama_lengkap' => 'WENAS HUJAN SOLIHIN', 'jenis_kelamin' => 'L'],
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
