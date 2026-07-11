<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tingkat = [7, 8, 9];
        $abjad = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];

        foreach ($tingkat as $t) {
            foreach ($abjad as $a) {
                $namaKelas = $t . $a;
                Kelas::firstOrCreate(['nama' => $namaKelas]);
            }
        }
        
        // Mungkin ada kelas tambahan seperti 'Lulus' yang dipakai jika siswa lulus
        Kelas::firstOrCreate(['nama' => 'Lulus']);
    }
}
