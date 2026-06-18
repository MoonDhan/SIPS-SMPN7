<?php

namespace Database\Seeders;

use App\Models\GuruKelas;
use Illuminate\Database\Seeder;

class GuruKelasSeeder extends Seeder
{
    public function run(): void
    {
        $gurus = [
            ['nuptk' => '1234567890123456', 'nama_lengkap' => 'Budi Santoso, S.Pd.', 'mata_pelajaran' => 'Matematika', 'kelas_wali' => '7A', 'no_hp' => '081234567001'],
            ['nuptk' => '1234567890123457', 'nama_lengkap' => 'Siti Aminah, S.Pd.', 'mata_pelajaran' => 'Bahasa Indonesia', 'kelas_wali' => '7B', 'no_hp' => '081234567002'],
            ['nuptk' => '1234567890123458', 'nama_lengkap' => 'Ahmad Fauzi, S.Pd.', 'mata_pelajaran' => 'IPA', 'kelas_wali' => '8A', 'no_hp' => '081234567003'],
            ['nuptk' => '1234567890123459', 'nama_lengkap' => 'Dewi Lestari, S.Pd.', 'mata_pelajaran' => 'IPS', 'kelas_wali' => '9A', 'no_hp' => '081234567004'],
        ];

        foreach ($gurus as $guru) {
            GuruKelas::create($guru);
        }
    }
}
