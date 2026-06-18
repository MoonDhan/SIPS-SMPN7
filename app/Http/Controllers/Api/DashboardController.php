<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function stats(): JsonResponse
    {
        $totalSiswa = Siswa::count();
        $totalPelanggaran = Pelanggaran::count();
        $totalSelesai = Pelanggaran::where('status', 'selesai')->count();
        $totalProses = Pelanggaran::where('status', 'proses')->count();

        return response()->json([
            'total_siswa' => $totalSiswa,
            'total_pelanggaran' => $totalPelanggaran,
            'total_selesai' => $totalSelesai,
            'total_proses' => $totalProses,
        ]);
    }

    public function recent(): JsonResponse
    {
        $pelanggarans = Pelanggaran::with('siswa')
            ->latest('tanggal_pelanggaran')
            ->latest('created_at')
            ->limit(10)
            ->get()
            ->map(fn (Pelanggaran $p) => [
                'siswa' => $p->siswa?->nama_lengkap ?? '-',
                'kelas' => $p->siswa?->kelas ?? '-',
                'pelanggaran' => $p->jenis_pelanggaran,
                'kategori' => ucfirst($p->kategori),
                'poin' => $p->poin,
                'tanggal' => $p->tanggal_pelanggaran->format('d/m/Y'),
                'status' => $p->status,
            ]);

        return response()->json(['data' => $pelanggarans]);
    }

    public function charts(): JsonResponse
    {
        $byJenis = Pelanggaran::select('jenis_pelanggaran', DB::raw('count(*) as frekuensi'))
            ->groupBy('jenis_pelanggaran')
            ->orderByDesc('frekuensi')
            ->limit(10)
            ->get()
            ->map(fn ($row) => [
                'nama' => $row->jenis_pelanggaran,
                'frekuensi' => (int) $row->frekuensi,
            ]);

        $byKategori = Pelanggaran::select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->get()
            ->mapWithKeys(fn ($row) => [$row->kategori => (int) $row->total]);

        return response()->json([
            'by_jenis' => $byJenis,
            'by_kategori' => [
                'ringan' => $byKategori->get('ringan', 0),
                'sedang' => $byKategori->get('sedang', 0),
                'berat' => $byKategori->get('berat', 0),
            ],
        ]);
    }
}
