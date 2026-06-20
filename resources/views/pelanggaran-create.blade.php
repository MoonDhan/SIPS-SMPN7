<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tambah Pelanggaran | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    @vite(['resources/css/dashboard.css', 'resources/js/pelanggaran.js'])
    
    <style>
        .form-section { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin: 20px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 500; color: #333; }
        .form-control { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit; font-size: 14px; box-sizing: border-box; }
        .form-control:focus { border-color: #4e73df; outline: none; box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25); }
        .row { display: flex; gap: 20px; flex-wrap: wrap; }
        .col-md-6 { flex: 1; min-width: 300px; }
        .text-danger { color: #e74a3b; }
        .form-actions { display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; }
        .btn { padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: 500; border: none; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; }
        .btn-secondary { background-color: #858796; color: white; }
        .btn-secondary:hover { background-color: #717384; }
        .btn-primary { background-color: #4e73df; color: white; }
        .btn-primary:hover { background-color: #2e59d9; }
        .select2-container .select2-selection--single { height: 44px; border: 1px solid #ddd; border-radius: 5px; outline: none; }
        .select2-container--default .select2-selection--single .select2-selection__rendered { line-height: 44px; padding-left: 12px; font-size: 14px; color: #333; }
        .select2-container--default .select2-selection--single .select2-selection__arrow { height: 42px; }
        .select2-container--default .select2-selection--single:focus, .select2-container--focus .select2-selection--single { border-color: #4e73df; box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25); }
    </style>
</head>
<body>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="dashboard-wrapper">
        <x-admin-sidebar />

        <main class="main-content">
            <header class="topbar">
                <div class="topbar-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2>Catat Pelanggaran Baru</h2>
                </div>
                <div class="topbar-right">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">0</span>
                    </div>
                </div>
            </header>

            <div class="form-section">
                <div style="margin-bottom: 25px;">
                    <h3 style="color: #4e73df; margin-bottom: 5px;"><i class="fas fa-clipboard-list"></i> Formulir Input Data</h3>
                    <p style="color: #666; font-size: 14px;">Silakan lengkapi data pelanggaran siswa di bawah ini.</p>
                </div>

                <form action="{{ route('pelanggaran.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pelanggaran <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="siswa_id">Nama Siswa <span class="text-danger">*</span></label>
                                <select class="form-control" id="siswa_id" name="siswa_id" required>
                                    <option value=""></option>
                                    @if(isset($data_siswa) && count($data_siswa) > 0)
                                        @foreach ($data_siswa as $siswa)
                                            <option value="{{ $siswa->id }}">
                                                {{ $siswa->nisn ?? $siswa->nis ?? '-' }} - {{ $siswa->nama_lengkap ?? $siswa->nama_siswa ?? 'Nama Tidak Diketahui' }} ({{ $siswa->kelas ?? '-' }})
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="" disabled>Data siswa kosong di database</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jenis_pelanggaran">Bentuk Pelanggaran <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="jenis_pelanggaran" name="jenis_pelanggaran" placeholder="Contoh: Terlambat masuk sekolah, atribut tidak lengkap..." required>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Pelanggaran <span class="text-danger">*</span></label>
                        <select class="form-control" id="kategori" name="kategori" required>
                            <option value="ringan">Ringan</option>
                            <option value="sedang">Sedang</option>
                            <option value="berat">Berat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="poin">Poin Pelanggaran <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="poin" name="poin" placeholder="Contoh: 10" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="catatan">Catatan Tambahan / Keterangan (Opsional)</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="4" placeholder="Tambahkan kronologi atau keterangan spesifik jika ada..."></textarea>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('pelanggaran') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Pelanggaran
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#siswa_id').select2({
                placeholder: "-- Ketik NISN atau Nama Siswa --",
                allowClear: true,
                width: '100%' 
            });
        });
    </script>
</body>
</html>