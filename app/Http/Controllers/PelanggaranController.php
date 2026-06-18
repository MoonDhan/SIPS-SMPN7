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
            'siswa_id' => 'required',
            'jenis_pelanggaran' => 'required',
            'poin' => 'required|numeric',
        ]);

        // Menggabungkan data dari form
        $data = $request->all();
        
        // Menambahkan data tambahan otomatis
        $data['user_id'] = auth()->id(); // User yang sedang login
        $data['status'] = 'Proses';      // Status default

        Pelanggaran::create($data);

        return redirect()->route('pelanggaran')->with('success', 'Data pelanggaran berhasil dicatat!');
    }
}