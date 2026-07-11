<?php

namespace Database\Seeders;

use App\Models\WaliKelas;
use App\Models\Kelas;
use Illuminate\Database\Seeder;

class WaliKelasSeeder extends Seeder
{
    public function run(): void
    {
        $waliKelas = [
            ['kelas_wali' => '7A', 'nama_lengkap' => 'Sri Widodo, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7B', 'nama_lengkap' => 'Ika Febriyanti, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7C', 'nama_lengkap' => 'Mahrofah, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7D', 'nama_lengkap' => 'Nurul Malika, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7E', 'nama_lengkap' => 'Fathul Gani, M.Pd.', 'is_active' => true],
            ['kelas_wali' => '7F', 'nama_lengkap' => 'Dwi Andriyani, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7G', 'nama_lengkap' => 'Hervina Nurasih Syahputri, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7H', 'nama_lengkap' => 'Amalia Purbandari, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7I', 'nama_lengkap' => 'Very Dwi Churniawati, S.Si.', 'is_active' => true],
            ['kelas_wali' => '7J', 'nama_lengkap' => 'Petty Lestiasari, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '7K', 'nama_lengkap' => 'Haris Adi Winata, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8A', 'nama_lengkap' => 'Prayogie Imas Ardito, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8B', 'nama_lengkap' => 'Siti Nurhayati, S.P.', 'is_active' => true],
            ['kelas_wali' => '8C', 'nama_lengkap' => 'Siti Maria Ulfa, S.Sos.I, M.Pd.I', 'is_active' => true],
            ['kelas_wali' => '8D', 'nama_lengkap' => 'Eny Widyaningsih, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8E', 'nama_lengkap' => 'Rumiyati, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8F', 'nama_lengkap' => 'Achmad Zaeni Mukhlis, S.Si.', 'is_active' => true],
            ['kelas_wali' => '8G', 'nama_lengkap' => 'Dewi Puspitasari, S.ST.', 'is_active' => true],
            ['kelas_wali' => '8H', 'nama_lengkap' => 'Siti Hairani, S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8I', 'nama_lengkap' => 'Nunik Prastiwi,S.Pd.', 'is_active' => true],
            ['kelas_wali' => '8J', 'nama_lengkap' => 'Yulianna Damayanti, S.E.', 'is_active' => true],
            ['kelas_wali' => '8K', 'nama_lengkap' => 'Wahyu Budi Sulistyorini, S.S.', 'is_active' => true],
        ];

        foreach ($waliKelas as $wali) {
            // Ensure Kelas exists first
            Kelas::firstOrCreate(['nama' => $wali['kelas_wali']]);
            
            WaliKelas::updateOrCreate(
                ['kelas_wali' => $wali['kelas_wali']],
                [
                    'nama_lengkap' => $wali['nama_lengkap'],
                    'is_active' => $wali['is_active'],
                ]
            );
        }
    }
}
