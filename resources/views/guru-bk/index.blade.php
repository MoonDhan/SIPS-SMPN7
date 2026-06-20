<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Guru BK | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @vite(['resources/css/dashboard.css', 'resources/js/guru-bk.js'])
    
    <style>
        .btn-action { padding: 5px 10px; border-radius: 4px; text-decoration: none; font-size: 14px; margin-right: 5px; display: inline-block; }
        .btn-tambah { background-color: #4e73df; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-weight: 500; display: inline-flex; align-items: center; gap: 8px; }
        .btn-tambah:hover { background-color: #2e59d9; color: white; }
        .btn-edit { background-color: #f6c23e; color: #fff; }
        .btn-delete { background-color: #e74a3b; color: #fff; border: none; cursor: pointer; }
        .badge-status { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 600; display: inline-block; }
        .badge-status-aktif { background-color: #d1e7dd; color: #0f5132; }
        .badge-status-nonaktif { background-color: #f8d7da; color: #842029; }
        .section-card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin: 20px; }
        .card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .alert { padding: 15px; border-radius: 5px; margin-bottom: 20px; color: white; }
        .alert-success { background-color: #1cc88a; }
        .alert-error { background-color: #e74a3b; }
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
                    <h2>Manajemen Guru BK</h2>
                </div>
                <div class="topbar-right">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">0</span>
                    </div>
                </div>
            </header>

            <section class="section-card">
                <div class="card-header">
                    <h3 style="color: #4e73df; font-weight: 600;"><i class="fas fa-users-cog"></i> Daftar Akun Guru BK / Admin</h3>
                    <a href="{{ route('guru-bk.create') }}" class="btn-tambah">
                        <i class="fas fa-user-plus"></i> Tambah Guru BK
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                    </div>
                @endif

                <div class="recent-table-wrapper">
                    <table class="recent-table">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th>NUPTK</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>No. HP</th>
                                <th>Status</th>
                                <th style="text-align: center; width: 15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($guru_bk as $index => $guru)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $guru->nuptk ?? '-' }}</td>
                                <td style="font-weight: 600; color: #4e73df;">{{ $guru->name }}</td>
                                <td>{{ $guru->email }}</td>
                                <td>{{ $guru->jabatan ?? '-' }}</td>
                                <td>{{ $guru->no_hp ?? '-' }}</td>
                                <td>
                                    <span class="badge-status {{ $guru->is_active ? 'badge-status-aktif' : 'badge-status-nonaktif' }}">
                                        {{ $guru->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('guru-bk.edit', $guru->id) }}" class="btn-action btn-edit" title="Edit Guru BK">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    
                                    @if(auth()->id() !== $guru->id)
                                    <form action="{{ route('guru-bk.destroy', $guru->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-action btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus akun Guru BK ini? Tindakan ini tidak dapat dibatalkan.')" title="Hapus Guru BK">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    @else
                                    <button class="btn-action" style="background-color: #dddfeb; color: #858796; cursor: not-allowed; border: none;" title="Akun sedang digunakan" disabled>
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" style="text-align: center; padding: 20px;">Belum ada data Guru BK yang terdaftar.</td>
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
