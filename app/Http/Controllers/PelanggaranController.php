<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    // Menampilkan daftar pelanggaran ke tabel
    public function index() 
    {
        // Menggunakan 'with' untuk mempercepat pemanggilan data siswa (eager loading)
        $data_pelanggaran = Pelanggaran::with('siswa')->latest()->get();
        return view('pelanggaran', compact('data_pelanggaran'));
    }

    // Menampilkan form create
    public function create() 
    {
        $data_siswa = Siswa::all();
        return view('pelanggaran-create', compact('data_siswa'));
    }

    // Menyimpan data ke database
    public function store(Request $request) 
    {
        // Validasi dasar
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pelanggaran' => 'required|string',
            'kategori' => 'required|in:ringan,sedang,berat',
            'poin' => 'required|numeric|min:1',
            'tanggal' => 'required|date',
            'catatan' => 'nullable|string',
        ]);

        // Menggabungkan data dari form ke kolom database
        $data = [
            'siswa_id' => $request->siswa_id,
            'jenis_pelanggaran' => $request->jenis_pelanggaran,
            'kategori' => $request->kategori,
            'poin' => $request->poin,
            'tanggal_pelanggaran' => $request->tanggal,
            'deskripsi' => $request->catatan,
            'user_id' => auth()->id() ?? 1, // Menggunakan user yang sedang login, fallback ke 1 jika null
            'status' => 'proses', // lowercase sesuai enum database
        ];

        Pelanggaran::create($data);

        return redirect()->route('pelanggaran')->with('success', 'Data pelanggaran berhasil dicatat!');
    }
}