<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GuruKelas extends Model
{
    protected $table = 'guru_kelas';

    protected $fillable = [
        'nuptk',
        'nama_lengkap',
        'mata_pelajaran',
        'kelas_wali',
        'no_hp',
        'alamat',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class, 'wali_kelas_id');
    }

    public function pelanggarans(): HasMany
    {
        return $this->hasMany(Pelanggaran::class, 'guru_kelas_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
