<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7ESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7E')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7E']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7E')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10779', 'nisn' => '3124764827', 'nama_lengkap' => 'ACHMAD ZAKYYUL FUAD', 'jenis_kelamin' => 'L'],
            ['nis' => '10780', 'nisn' => '0123300394', 'nama_lengkap' => 'AFLA RAFFI NUR AZRIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10781', 'nisn' => '0125614182', 'nama_lengkap' => 'AHMAD MAULANA ALFARIZI', 'jenis_kelamin' => 'L'],
            ['nis' => '10782', 'nisn' => '0131279449', 'nama_lengkap' => 'AHMAD RIDHO AKBAR ILHAMI', 'jenis_kelamin' => 'L'],
            ['nis' => '10783', 'nisn' => '0127906477', 'nama_lengkap' => 'AIRA AYUNINDYA INARA', 'jenis_kelamin' => 'P'],
            ['nis' => '10784', 'nisn' => '0129292924', 'nama_lengkap' => 'ALFARIZI YUDIAVI PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10785', 'nisn' => '0124144733', 'nama_lengkap' => 'AWANGGA PUTRA SETIAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10786', 'nisn' => '0124597126', 'nama_lengkap' => 'DWI CAHYA MEYLANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10787', 'nisn' => '0129469003', 'nama_lengkap' => 'ERIS WIDIYANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10788', 'nisn' => '3124299130', 'nama_lengkap' => 'FAHREZA MAULANA DAFA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10789', 'nisn' => '3129823068', 'nama_lengkap' => 'FATIMAH AZ ZAHRA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10790', 'nisn' => '0124684368', 'nama_lengkap' => 'FINA SALSABILA DAYANTI', 'jenis_kelamin' => 'P'],
            ['nis' => '10791', 'nisn' => '3123262338', 'nama_lengkap' => 'GALIH NUR RAMDANI PUTRA W.', 'jenis_kelamin' => 'L'],
            ['nis' => '10792', 'nisn' => '0126582370', 'nama_lengkap' => 'ILHAM SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10976', 'nisn' => '3129600618', 'nama_lengkap' => 'JAVIER ARKANANTA', 'jenis_kelamin' => 'L'],
            ['nis' => '10793', 'nisn' => '0126434024', 'nama_lengkap' => 'KANITA AMIERA WIJAYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10794', 'nisn' => '3121636006', 'nama_lengkap' => 'KEYZHIA AULYA SEPTIANDITA', 'jenis_kelamin' => 'P'],
            ['nis' => '10795', 'nisn' => '0129426159', 'nama_lengkap' => 'MAULANA HASBY UBEIDULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10796', 'nisn' => '3136587186', 'nama_lengkap' => 'MOHAMAD FARDIANSAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10980', 'nisn' => '0127610815', 'nama_lengkap' => 'MOHAMAD RAMA SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10797', 'nisn' => '0129988670', 'nama_lengkap' => 'MOHAMMAD NIZAM FIRMANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10798', 'nisn' => '0122887912', 'nama_lengkap' => 'MUHAMMAD ARBI FAJRIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10799', 'nisn' => '0128137987', 'nama_lengkap' => 'MUHAMMAD ARIF AKBAR H.', 'jenis_kelamin' => 'L'],
            ['nis' => '10800', 'nisn' => '0125879774', 'nama_lengkap' => 'MUHAMMAD FATHIR ADIRGA R.', 'jenis_kelamin' => 'L'],
            ['nis' => '10801', 'nisn' => '0122716976', 'nama_lengkap' => 'MUHAMMAD GUSTIAN PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10802', 'nisn' => '0125874399', 'nama_lengkap' => 'MUHAMMAD LIO ARDIANZAH SHOLEH', 'jenis_kelamin' => 'L'],
            ['nis' => '10803', 'nisn' => '3122849810', 'nama_lengkap' => 'NAJWA RANIA ISLAMI', 'jenis_kelamin' => 'P'],
            ['nis' => '10989', 'nisn' => '3129364886', 'nama_lengkap' => 'NANCY VIRGINIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10804', 'nisn' => '0133010005', 'nama_lengkap' => 'RAISYA BUNGA MIQAILLA', 'jenis_kelamin' => 'P'],
            ['nis' => '10805', 'nisn' => '0123350603', 'nama_lengkap' => 'REVALINA AULIA NURUL IZZAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10996', 'nisn' => '0127760620', 'nama_lengkap' => 'RICKI DAVID MAULANA RISKI', 'jenis_kelamin' => 'L'],
            ['nis' => '10806', 'nisn' => '0128386775', 'nama_lengkap' => 'SITI ZAHRA MAWADDAH AZKA', 'jenis_kelamin' => 'P'],
            ['nis' => '10807', 'nisn' => '0126003327', 'nama_lengkap' => 'TARTILA TARTUSSY', 'jenis_kelamin' => 'P'],
            ['nis' => '10808', 'nisn' => '0123272180', 'nama_lengkap' => 'THALITA AULIA HASNA', 'jenis_kelamin' => 'P'],
            ['nis' => '10809', 'nisn' => '0126104065', 'nama_lengkap' => 'VARISHA ALIAH ZOYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10810', 'nisn' => '0124262768', 'nama_lengkap' => 'ZHAFIRA GUSTI LOVELY', 'jenis_kelamin' => 'P'],
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
