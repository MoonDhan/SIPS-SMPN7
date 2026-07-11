<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7ISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7I')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7I']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7I')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10906', 'nisn' => '3125456240', 'nama_lengkap' => 'ABID AQILA PRANAJA', 'jenis_kelamin' => 'L'],
            ['nis' => '10907', 'nisn' => '0136484957', 'nama_lengkap' => 'AHMAD NAUFAL FABIO ATHAA', 'jenis_kelamin' => 'L'],
            ['nis' => '10908', 'nisn' => '3129629474', 'nama_lengkap' => 'ALDO WIRA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10910', 'nisn' => '3125164084', 'nama_lengkap' => 'ARYA DWI WICAKSONO', 'jenis_kelamin' => 'L'],
            ['nis' => '10911', 'nisn' => '0122888901', 'nama_lengkap' => 'AURELLIA FADILAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10912', 'nisn' => '0127791019', 'nama_lengkap' => 'CHARISA JULIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10913', 'nisn' => '0122867464', 'nama_lengkap' => 'CHERRY CINTA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10914', 'nisn' => '3137098767', 'nama_lengkap' => 'DINDA AYU SAFITRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10915', 'nisn' => '0118541009', 'nama_lengkap' => 'FATMAWATI', 'jenis_kelamin' => 'P'],
            ['nis' => '10916', 'nisn' => '3129284178', 'nama_lengkap' => 'FAZILA AMIRA HARYANTO', 'jenis_kelamin' => 'P'],
            ['nis' => '10917', 'nisn' => '0124719698', 'nama_lengkap' => 'HAFIZATUL MUHAROFIAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10918', 'nisn' => '3121524767', 'nama_lengkap' => 'HAPPY AYU MAHARANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10919', 'nisn' => '0134796552', 'nama_lengkap' => 'IRHAM MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10977', 'nisn' => '0125562794', 'nama_lengkap' => 'JENNY SEPTRIANI PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10920', 'nisn' => '3138398377', 'nama_lengkap' => 'JUNAINATUL JAMILAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10921', 'nisn' => '3138024111', 'nama_lengkap' => 'KUMALASARI PUTRI DARMAWATI', 'jenis_kelamin' => 'P'],
            ['nis' => '10922', 'nisn' => '0125602263', 'nama_lengkap' => 'MARENDRA DIRGANTARA PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10923', 'nisn' => '0128250374', 'nama_lengkap' => 'MAYCA KALISTA', 'jenis_kelamin' => 'P'],
            ['nis' => '10924', 'nisn' => '0122192239', 'nama_lengkap' => 'MEISHA PARAMITHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10925', 'nisn' => '3121874094', 'nama_lengkap' => 'MELINDA NURAINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10926', 'nisn' => '0122850151', 'nama_lengkap' => 'MOH. KEANU AZQA APRILIO', 'jenis_kelamin' => 'L'],
            ['nis' => '10927', 'nisn' => '3125886568', 'nama_lengkap' => 'MUH. BAGUS MUQORROBIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10928', 'nisn' => '0125659659', 'nama_lengkap' => 'MUHAMMAD ANGGA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10929', 'nisn' => '0124425550', 'nama_lengkap' => 'MUHAMMAD FIKRI ARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10931', 'nisn' => '3125666840', 'nama_lengkap' => 'NISCITA DEWATI', 'jenis_kelamin' => 'P'],
            ['nis' => '10992', 'nisn' => '0126899724', 'nama_lengkap' => 'PASKAL WIMA ISWAHYUDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10932', 'nisn' => '3126532160', 'nama_lengkap' => 'RAFI PUTRA RAMADHANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10933', 'nisn' => '3122639052', 'nama_lengkap' => 'RAFIF SAMANTA ARKANA ALAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10934', 'nisn' => '0122779438', 'nama_lengkap' => 'RAGIL ADI NUGRAHA', 'jenis_kelamin' => 'L'],
            ['nis' => '10935', 'nisn' => '0123342840', 'nama_lengkap' => 'SAFIRA DEWI NUR RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10936', 'nisn' => '0127404187', 'nama_lengkap' => 'SETYADI YUDIARTA', 'jenis_kelamin' => 'L'],
            ['nis' => '10937', 'nisn' => '3121656707', 'nama_lengkap' => 'SUYYIROT LUTHAN NUR AFNI', 'jenis_kelamin' => 'L'],
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
