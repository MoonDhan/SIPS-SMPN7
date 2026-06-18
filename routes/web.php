<?php

use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// Tambahkan use model Siswa agar lebih rapi (Opsional, tapi best practice)
use App\Models\Siswa;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua rute di dalam grup ini WAJIB LOGIN (Aman dari akses luar)
Route::middleware('auth')->group(function () {

    // ------------------------------------------
    // RUTE DATA SISWA
    // ------------------------------------------
    Route::get('/data-siswa', function () {
        return view('data-siswa');
    })->name('data-siswa');

    // ------------------------------------------
    // RUTE PELANGGARAN
    // ------------------------------------------
    
    // 1. Menampilkan daftar pelanggaran
    Route::get('/pelanggaran', function () {
        return view('pelanggaran', ['data_pelanggaran' => []]); 
    })->name('pelanggaran');

    // 2. Menampilkan form tambah pelanggaran baru (INI YANG DIPERBAIKI)
    Route::get('/pelanggaran/create', function () {
        // Mengambil semua data siswa dari tabel untuk dropdown pencarian
        // Asumsi nama model adalah 'Siswa' dan nama kolomnya 'nama_lengkap'
        $data_siswa = \App\Models\Siswa::orderBy('nama_lengkap', 'asc')->get(); 
        
        return view('pelanggaran-create', compact('data_siswa'));
    })->name('pelanggaran.create');

    // 3. Menampilkan form edit pelanggaran
    Route::get('/pelanggaran/{id}/edit', function ($id) {
        return "Ini halaman untuk edit pelanggaran ID: " . $id;
    })->name('pelanggaran.edit');

    // 4. Proses hapus pelanggaran
    Route::delete('/pelanggaran/{id}', function ($id) {
        // Nantinya diisi logika hapus data
    })->name('pelanggaran.destroy');

    // 5. Proses menyimpan data pelanggaran baru (Pintu Penerima POST)
    Route::post('/pelanggaran', function (\Illuminate\Http\Request $request) {
        // Nanti di sini kita tulis logika untuk menyimpan data ke database (Controller).
        // Untuk sementara, kita buat pura-pura berhasil dan langsung kembali ke halaman daftar.
        return redirect()->route('pelanggaran')->with('success', 'Data pelanggaran berhasil dicatat!');
    })->name('pelanggaran.store');

    // ------------------------------------------
    // RUTE PROFILE (Bawaan Laravel Breeze)
    // ------------------------------------------
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ------------------------------------------
    // RUTE API
    // ------------------------------------------
    Route::prefix('api')->group(function () {
        Route::get('/dashboard/stats', [DashboardController::class, 'stats']);
        Route::get('/dashboard/recent', [DashboardController::class, 'recent']);
        Route::get('/dashboard/charts', [DashboardController::class, 'charts']);
        
        Route::get('/siswa/stats', [SiswaController::class, 'stats']);
        Route::get('/siswa', [SiswaController::class, 'index']);
        Route::post('/siswa', [SiswaController::class, 'store']);
        Route::put('/siswa/{siswa}', [SiswaController::class, 'update']);
        Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';