<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7KSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7K')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7K']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7K')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10970', 'nisn' => '3128948018', 'nama_lengkap' => 'ADHIMAS RAKHA RAMADAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10971', 'nisn' => '0131338497', 'nama_lengkap' => 'AISYAH MAULANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10972', 'nisn' => '0121518994', 'nama_lengkap' => 'ELSYAH KIANU PUTRI FIORELITA C.', 'jenis_kelamin' => 'P'],
            ['nis' => '10973', 'nisn' => '0124518324', 'nama_lengkap' => 'FAZILA RAIDAH ASHSHABIRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10974', 'nisn' => '3121557522', 'nama_lengkap' => 'HAIKAL ADITYA PUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10975', 'nisn' => '3122456778', 'nama_lengkap' => 'IZZATUL MUTAMIMMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10976', 'nisn' => '3129600618', 'nama_lengkap' => 'JAVIER ARKANANTA', 'jenis_kelamin' => 'L'],
            ['nis' => '10977', 'nisn' => '0125562794', 'nama_lengkap' => 'JENNY SEPTRIANI PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10978', 'nisn' => '129846662', 'nama_lengkap' => 'JUNIOR GILANG RAMADAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10979', 'nisn' => '0132866184', 'nama_lengkap' => 'MOCH. ZAKKI RAIHAN ABDILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10980', 'nisn' => '0127610815', 'nama_lengkap' => 'MOHAMAD RAMA SYAHPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10981', 'nisn' => '0123604111', 'nama_lengkap' => 'MOHAMMAD HAIKAL HABIBI AKBAR', 'jenis_kelamin' => 'L'],
            ['nis' => '10982', 'nisn' => '3128085660', 'nama_lengkap' => 'MUHAMMAD ASEP MAULANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10983', 'nisn' => '0111683728', 'nama_lengkap' => 'MUHAMMAD GHAIZAN EL BARADEI', 'jenis_kelamin' => 'L'],
            ['nis' => '10984', 'nisn' => '116737382', 'nama_lengkap' => 'MUHAMMAD HAFIZH AL FARIZY', 'jenis_kelamin' => 'L'],
            ['nis' => '10985', 'nisn' => '3121920969', 'nama_lengkap' => 'MUHAMMAD ZAIN AL-HAFIZH', 'jenis_kelamin' => 'L'],
            ['nis' => '10986', 'nisn' => '0124456666', 'nama_lengkap' => 'MUZDALIFAH KAMILA AZ-ZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10987', 'nisn' => '0125336739', 'nama_lengkap' => 'NABILA RISKIYANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10988', 'nisn' => '3127992541', 'nama_lengkap' => 'NAJWA AISYATUS SHOLEHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10989', 'nisn' => '3129364886', 'nama_lengkap' => 'NANCY VIRGINIA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10990', 'nisn' => '0127876059', 'nama_lengkap' => 'NEYLA CINTYA DEWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10991', 'nisn' => '3124331598', 'nama_lengkap' => 'NOVIANI ISTIQOMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10992', 'nisn' => '0126899724', 'nama_lengkap' => 'PASKAL WIMA ISWAHYUDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10993', 'nisn' => '124809819', 'nama_lengkap' => 'RAISYATAMA YOGI AYUNDA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10994', 'nisn' => '124191935', 'nama_lengkap' => 'RENO ROMIYANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10995', 'nisn' => '121335943', 'nama_lengkap' => 'REZA FARDIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10996', 'nisn' => '0127760620', 'nama_lengkap' => 'RICKI DAVID MAULANA RISKI', 'jenis_kelamin' => 'L'],
            ['nis' => '10997', 'nisn' => '0122487270', 'nama_lengkap' => 'YOGA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10998', 'nisn' => '3127694290', 'nama_lengkap' => 'ZASKYA AJENG DWI KURNIA', 'jenis_kelamin' => 'P'],
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
