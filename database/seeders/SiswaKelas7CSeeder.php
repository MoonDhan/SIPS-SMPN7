<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas7CSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '7C')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '7C']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '7C')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10715', 'nisn' => '3114063248', 'nama_lengkap' => 'ACHMAD AMINUDIN FAJRIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10970', 'nisn' => '3128948018', 'nama_lengkap' => 'ADHIMAS RAKHA RAMADAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10716', 'nisn' => '0119077069', 'nama_lengkap' => 'ADITYA PUTRA AGUSTA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10717', 'nisn' => '0127039003', 'nama_lengkap' => 'BONDRA DEVINO PUTRA PRADANA', 'jenis_kelamin' => 'L'],
            ['nis' => '10718', 'nisn' => '3129863301', 'nama_lengkap' => 'CANTIKA FAIDA ADILAROSE', 'jenis_kelamin' => 'P'],
            ['nis' => '10719', 'nisn' => '3126389146', 'nama_lengkap' => 'DENIS RADITYA ALAM', 'jenis_kelamin' => 'L'],
            ['nis' => '10720', 'nisn' => '0123676512', 'nama_lengkap' => 'DINDA ANASTASYA ANDINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10721', 'nisn' => '3129028587', 'nama_lengkap' => 'ELANG BAYU PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10973', 'nisn' => '0124518324', 'nama_lengkap' => 'FAZILA RAIDAH ASHSHABIRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10722', 'nisn' => '3128238279', 'nama_lengkap' => 'JERICHO MARVELL AZKATYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10723', 'nisn' => '3128966624', 'nama_lengkap' => 'JIHAN ZAHRA NASYIFA', 'jenis_kelamin' => 'P'],
            ['nis' => '10724', 'nisn' => '0123348869', 'nama_lengkap' => 'JULIA FARDATUS NAJZUA', 'jenis_kelamin' => 'P'],
            ['nis' => '10725', 'nisn' => '0127482233', 'nama_lengkap' => 'MOCHAMMAT EZAR RADITYA', 'jenis_kelamin' => 'L'],
            ['nis' => '10726', 'nisn' => '0129816181', 'nama_lengkap' => 'MUHAMAD NAIZAR DZAKA PRATAMA', 'jenis_kelamin' => 'L'],
            ['nis' => '10727', 'nisn' => '3136755774', 'nama_lengkap' => 'MUHAMMAD AKBAR IKHSAN N.', 'jenis_kelamin' => 'L'],
            ['nis' => '10728', 'nisn' => '0124004513', 'nama_lengkap' => 'MUHAMMAD ALI HUSNI', 'jenis_kelamin' => 'L'],
            ['nis' => '10729', 'nisn' => '0126834158', 'nama_lengkap' => 'MUHAMMAD AZRIAN BINTANG B.S.', 'jenis_kelamin' => 'L'],
            ['nis' => '10730', 'nisn' => '0138962472', 'nama_lengkap' => 'MUHAMMAD DAFID ARJUNA', 'jenis_kelamin' => 'L'],
            ['nis' => '10984', 'nisn' => '0116737382', 'nama_lengkap' => 'MUHAMMAD HAFIZH AL FARIZY', 'jenis_kelamin' => 'L'],
            ['nis' => '10731', 'nisn' => '3126688843', 'nama_lengkap' => 'MURNI HASYA', 'jenis_kelamin' => 'P'],
            ['nis' => '10732', 'nisn' => '0127262672', 'nama_lengkap' => 'NAYLA ALTAFUN NISA', 'jenis_kelamin' => 'P'],
            ['nis' => '10733', 'nisn' => '0122542094', 'nama_lengkap' => 'NOVELIAN THALITA AZZAHRA', 'jenis_kelamin' => 'P'],
            ['nis' => '10734', 'nisn' => '0124843587', 'nama_lengkap' => 'NOVITA NAILIL MADRUBAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10735', 'nisn' => '0127002391', 'nama_lengkap' => 'NURIL HIDAYAT', 'jenis_kelamin' => 'L'],
            ['nis' => '10736', 'nisn' => '0122967178', 'nama_lengkap' => 'RAKAN ALFI SYAHRIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10737', 'nisn' => '3120270483', 'nama_lengkap' => 'RANA AFIFA FITIYA PUTRI', 'jenis_kelamin' => 'P'],
            ['nis' => '10994', 'nisn' => '0124191935', 'nama_lengkap' => 'RENO ROMIYANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10738', 'nisn' => '3121487212', 'nama_lengkap' => 'RISKY HIBATULLAH BAGASKARA', 'jenis_kelamin' => 'L'],
            ['nis' => '10739', 'nisn' => '0128882676', 'nama_lengkap' => 'SAFA AMIRA NISA', 'jenis_kelamin' => 'P'],
            ['nis' => '10740', 'nisn' => '0126852891', 'nama_lengkap' => 'SAFIRA NURKHUMAIROH', 'jenis_kelamin' => 'P'],
            ['nis' => '10741', 'nisn' => '3126834171', 'nama_lengkap' => 'SALSABILLA NADIA LESMANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10742', 'nisn' => '3128749174', 'nama_lengkap' => 'SYAFA NUR AZILAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10743', 'nisn' => '0136708120', 'nama_lengkap' => 'TITO WIMAR BASTIAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10744', 'nisn' => '0133930637', 'nama_lengkap' => 'UBAYDILLAH PUTRA DARMAWAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10745', 'nisn' => '3120094496', 'nama_lengkap' => 'ULFA RIZQIAH SETIANA AZIZAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10746', 'nisn' => '0111262767', 'nama_lengkap' => 'VINDY CALLYSTA AZALIYYAH', 'jenis_kelamin' => 'P'],
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
