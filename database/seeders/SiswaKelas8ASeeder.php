<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\WaliKelas;

class SiswaKelas8ASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::where('nama', '8A')->first();
        if (!$kelas) {
            $kelas = Kelas::create(['nama' => '8A']);
        }
        
        $waliKelas = WaliKelas::where('kelas_wali', '8A')->first();
        
        $tahunAjaran = '2025/2026'; // Assuming typical school year based on date. 

        $data = [
            ['nis' => '10389', 'nisn' => '3110527687', 'nama_lengkap' => 'ADZAM PUTRA RAMADHAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10579', 'nisn' => '0112307376', 'nama_lengkap' => 'AHMAD ZAIN FENDI', 'jenis_kelamin' => 'L'],
            ['nis' => '10517', 'nisn' => '0117569506', 'nama_lengkap' => 'AISYATUS SYIFAA', 'jenis_kelamin' => 'P'],
            ['nis' => '10581', 'nisn' => '0115602442', 'nama_lengkap' => 'ALMIRA RAMADHANI', 'jenis_kelamin' => 'P'],
            ['nis' => '10518', 'nisn' => '0126558522', 'nama_lengkap' => 'AMELIA LILIANA', 'jenis_kelamin' => 'P'],
            ['nis' => '10455', 'nisn' => '0108768255', 'nama_lengkap' => 'ARYA GIBRAN SYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10582', 'nisn' => '0112856719', 'nama_lengkap' => 'BIMA DWI PRASETYO', 'jenis_kelamin' => 'L'],
            ['nis' => '10617', 'nisn' => '0115236949', 'nama_lengkap' => 'CAROLINA DESTIN WIDHYHAPSARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10423', 'nisn' => '0117482566', 'nama_lengkap' => 'DENIS FITRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10458', 'nisn' => '0111255080', 'nama_lengkap' => 'DEWI PUTRI PRATIWI', 'jenis_kelamin' => 'P'],
            ['nis' => '10297', 'nisn' => '0118573047', 'nama_lengkap' => 'DHIKA ENGGRA SAPUTRA', 'jenis_kelamin' => 'L'],
            ['nis' => '10362', 'nisn' => '0113527985', 'nama_lengkap' => 'DINDA CANTIKA WULANDARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10491', 'nisn' => '3115657479', 'nama_lengkap' => 'FAKHRIZAL WILDAN ZULKARNAIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10620', 'nisn' => '3116742235', 'nama_lengkap' => 'FARIZI FATAHILLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10460', 'nisn' => '3107001458', 'nama_lengkap' => 'FATIA NUR AINI', 'jenis_kelamin' => 'P'],
            ['nis' => '10622', 'nisn' => '0124823362', 'nama_lengkap' => 'FIDELA GRISELDA FUJIANTO', 'jenis_kelamin' => 'P'],
            ['nis' => '10623', 'nisn' => '0111145035', 'nama_lengkap' => 'FITRIYATUS SA\'DIYAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10590', 'nisn' => '0116200679', 'nama_lengkap' => 'HAFIZAH ULIL AHILLAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10262', 'nisn' => '0109748453', 'nama_lengkap' => 'JULIENDIKA JASCKA BILMONDA', 'jenis_kelamin' => 'L'],
            ['nis' => '10463', 'nisn' => '0119843486', 'nama_lengkap' => 'KADEK PUTRA ANUGRAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10527', 'nisn' => '0129082220', 'nama_lengkap' => 'KEVIN FABIAN KLEIN', 'jenis_kelamin' => 'L'],
            ['nis' => '10592', 'nisn' => '0112545605', 'nama_lengkap' => 'KHUSNUL KHOTIMAH', 'jenis_kelamin' => 'P'],
            ['nis' => '10431', 'nisn' => '0119528114', 'nama_lengkap' => 'LINTANG PURNAMA SARI', 'jenis_kelamin' => 'P'],
            ['nis' => '10466', 'nisn' => '0111237246', 'nama_lengkap' => 'M. DANIYAL FAKIH', 'jenis_kelamin' => 'L'],
            ['nis' => '10467', 'nisn' => '3124364962', 'nama_lengkap' => 'MOCH. FRANS IGO ISHERIANSYAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10309', 'nisn' => '3119683195', 'nama_lengkap' => 'MOH ROFI URROTAB', 'jenis_kelamin' => 'L'],
            ['nis' => '10502', 'nisn' => '0121624400', 'nama_lengkap' => 'MOHAMMAD LUTFI ZAINULLAH', 'jenis_kelamin' => 'L'],
            ['nis' => '10535', 'nisn' => '0113994702', 'nama_lengkap' => 'MUHAMMAD KAFIN ROBBANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10600', 'nisn' => '0124933613', 'nama_lengkap' => 'MUHAMMAD RAYHAN HAQIQI', 'jenis_kelamin' => 'L'],
            ['nis' => '10412', 'nisn' => '0116957513', 'nama_lengkap' => 'NOVIA LARASATI RATUYUDHA', 'jenis_kelamin' => 'P'],
            ['nis' => '10539', 'nisn' => '3111456925', 'nama_lengkap' => 'QUENSHE CARMELIA YURIKO', 'jenis_kelamin' => 'P'],
            ['nis' => '10572', 'nisn' => '0119085772', 'nama_lengkap' => 'RAMADANI', 'jenis_kelamin' => 'L'],
            ['nis' => '10510', 'nisn' => '0116370810', 'nama_lengkap' => 'RAYYAN IMTIYAZ IMAN', 'jenis_kelamin' => 'L'],
            ['nis' => '10511', 'nisn' => '0117838333', 'nama_lengkap' => 'SABRINA SALSABILA', 'jenis_kelamin' => 'P'],
            ['nis' => '10480', 'nisn' => '0112129167', 'nama_lengkap' => 'SITI KARMILA', 'jenis_kelamin' => 'P'],
            ['nis' => '10577', 'nisn' => '0119258175', 'nama_lengkap' => 'YOGA HARDIAMSYAH KURNIAWAN', 'jenis_kelamin' => 'L'],
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
