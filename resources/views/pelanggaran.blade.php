<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pelanggaran | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
    
    <style>
        /* Sedikit tambahan CSS agar tombolnya rapi */
        .btn-action { padding: 5px 10px; border-radius: 4px; text-decoration: none; font-size: 14px; margin-right: 5px; display: inline-block; }
        .btn-tambah { background-color: #4e73df; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-weight: 500; }
        .btn-tambah:hover { background-color: #2e59d9; color: white; }
        .btn-edit { background-color: #f6c23e; color: #fff; }
        .btn-delete { background-color: #e74a3b; color: #fff; border: none; cursor: pointer; }
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
                    <h2>Data Pelanggaran</h2>
                </div>
                <div class="topbar-right">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Cari...">
                    </div>
                </div>
            </header>

            <section class="recent-section" style="margin: 20px;">
                <div class="recent-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3><i class="fas fa-exclamation-triangle"></i> Daftar Pelanggaran Siswa</h3>
                    <a href="{{ route('pelanggaran.create') }}" class="btn-tambah">
                        <i class="fas fa-plus"></i> Catat Pelanggaran
                    </a>
                </div>

                @if(session('success'))
                    <div style="background-color: #1cc88a; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="recent-table-wrapper">
                    <table class="recent-table">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th>Tanggal</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Bentuk Pelanggaran</th>
                                <th>Poin</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_pelanggaran as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->tanggal ?? '-' }}</td>
                                <td>{{ $item->siswa->nama_lengkap ?? 'Data Tidak Ditemukan' }}</td>
                                <td>{{ $item->siswa->kelas ?? '-' }}</td>
                                <td>{{ $item->jenis_pelanggaran ?? '-' }}</td>
                                <td style="color: #e74a3b; font-weight: bold;">+{{ $item->poin ?? 0 }}</td>
                                <td style="text-align: center;">
                                    <a href="{{ route('pelanggaran.edit', $item->id ?? 1) }}" class="btn-action btn-edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('pelanggaran.destroy', $item->id ?? 1) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus catatan pelanggaran ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" style="text-align: center; padding: 20px;">Belum ada data pelanggaran yang tercatat.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>