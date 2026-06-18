<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = Siswa::withSum('pelanggarans as total_poin', 'poin');

        if ($request->filled('kelas') && $request->kelas !== 'all') {
            $query->where('kelas', $request->kelas);
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('is_active', $request->status === 'aktif');
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%")
                    ->orWhere('nisn', 'like', "%{$search}%");
            });
        }

        $siswas = $query->orderBy('nama_lengkap')->get()->map(fn (Siswa $siswa) => $this->formatSiswa($siswa));

        return response()->json(['data' => $siswas]);
    }

    public function stats(): JsonResponse
    {
        $siswas = Siswa::all();

        return response()->json([
            'total' => $siswas->count(),
            'aktif' => $siswas->where('is_active', true)->count(),
            'nonaktif' => $siswas->where('is_active', false)->count(),
            'total_kelas' => $siswas->pluck('kelas')->unique()->count(),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nis' => ['required', 'string', 'max:20', 'unique:siswa,nis'],
            'nisn' => ['required', 'string', 'max:20', 'unique:siswa,nisn'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'kelas' => ['required', 'string', 'max:10'],
            'no_hp' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        $validated['tahun_ajaran'] = '2025/2026';
        $validated['is_active'] = $request->boolean('is_active', true);

        $siswa = Siswa::create($validated);

        return response()->json([
            'message' => 'Data siswa berhasil ditambahkan',
            'data' => $this->formatSiswa($siswa),
        ], 201);
    }

    public function update(Request $request, Siswa $siswa): JsonResponse
    {
        $validated = $request->validate([
            'nis' => ['required', 'string', 'max:20', 'unique:siswa,nis,'.$siswa->id],
            'nisn' => ['required', 'string', 'max:20', 'unique:siswa,nisn,'.$siswa->id],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'kelas' => ['required', 'string', 'max:10'],
            'no_hp' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'is_active' => ['boolean'],
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);
        $siswa->update($validated);

        return response()->json([
            'message' => 'Data siswa berhasil diperbarui',
            'data' => $this->formatSiswa($siswa->fresh()),
        ]);
    }

    public function destroy(Siswa $siswa): JsonResponse
    {
        $siswa->delete();

        return response()->json(['message' => 'Data siswa berhasil dihapus']);
    }

    private function formatSiswa(Siswa $siswa): array
    {
        return [
            'id' => $siswa->id,
            'nis' => $siswa->nis,
            'nisn' => $siswa->nisn,
            'nama' => $siswa->nama_lengkap,
            'kelas' => $siswa->kelas,
            'jk' => $siswa->jenis_kelamin,
            'noHp' => $siswa->no_hp,
            'alamat' => $siswa->alamat,
            'status' => $siswa->is_active ? 'aktif' : 'nonaktif',
            'poin' => (int) ($siswa->total_poin ?? $siswa->pelanggarans()->sum('poin')),
        ];
    }
}
