<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pelanggaran | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @vite(['resources/css/dashboard.css', 'resources/js/pelanggaran.js'])
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
                        <span class="badge">0</span>
                    </div>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" placeholder="Cari...">
                    </div>
                </div>
            </header>

            <section class="recent-section page-section-margin">
                <div class="report-header">
                    <h3><i class="fas fa-exclamation-triangle"></i> Daftar Pelanggaran Siswa</h3>
                    @if(auth()->user()->isAdminBK() || auth()->user()->isGuruBK())
                    <a href="{{ route('pelanggaran.create') }}" class="btn-tambah">
                        <i class="fas fa-plus"></i> Catat Pelanggaran
                    </a>
                    @endif
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
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
                                <th>Kategori</th>
                                <th>Poin</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_pelanggaran as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->tanggal_pelanggaran ? $item->tanggal_pelanggaran->format('d/m/Y') : '-' }}</td>
                                <td>{{ $item->siswa->nama_lengkap ?? 'Data Tidak Ditemukan' }}</td>
                                <td>{{ $item->siswa->kelas ?? '-' }}</td>
                                <td>{{ $item->jenis_pelanggaran ?? '-' }}</td>
                                <td>
                                    <span class="badge-kategori badge-kategori-{{ $item->kategori ?? 'ringan' }}">
                                        {{ $item->kategori ?? '-' }}
                                    </span>
                                </td>
                                <td style="color: #ef4444; font-weight: 700;">+{{ $item->poin ?? 0 }}</td>
                                @if(auth()->user()->isAdminBK() || auth()->user()->isGuruBK())
                                <td class="text-center">
                                    <a href="{{ route('pelanggaran.edit', $item->id ?? 1) }}" class="btn-action btn-edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('pelanggaran.destroy', $item->id ?? 1) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn-action btn-delete" onclick="confirmDelete(this.closest('form'))">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                @else
                                <td class="text-center">
                                    <span style="color:#94a3b8;font-size:0.75rem;">Read Only</span>
                                </td>
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center" style="padding: 20px;">Belum ada data pelanggaran yang tercatat.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- Modal Hapus -->
    <div class="modal" id="modalHapus">
        <div class="modal-content" style="max-width: 400px; text-align: center;">
            <div class="modal-header" style="justify-content: center; border-bottom: none; padding-bottom: 0;">
                <div style="background-color: #fee2e2; color: #ef4444; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; margin: 0 auto;">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
            </div>
            <div class="modal-body" style="padding-top: 15px;">
                <h3 style="margin-bottom: 10px; color: #1e293b;">Hapus Catatan Pelanggaran</h3>
                <p style="font-size: 14px; color: #64748b; margin-bottom: 5px;">Apakah Anda yakin ingin menghapus catatan pelanggaran ini?</p>
                <p style="font-size: 13px; color: #ef4444;">Tindakan ini tidak dapat dibatalkan!</p>
            </div>
            <div class="modal-footer" style="justify-content: center; border-top: none;">
                <button class="btn-cancel" id="modalHapusCancel">Batal</button>
                <button class="btn-save" id="modalHapusConfirm" style="background-color: #ef4444;">Ya, Hapus</button>
            </div>
        </div>
    </div>

    <script>
        let formToDelete = null;
        
        function confirmDelete(form) {
            formToDelete = form;
            document.getElementById('modalHapus').classList.add('show');
        }
        
        document.getElementById('modalHapusCancel').addEventListener('click', () => {
            document.getElementById('modalHapus').classList.remove('show');
            formToDelete = null;
        });
        
        document.getElementById('modalHapusConfirm').addEventListener('click', () => {
            if (formToDelete) {
                formToDelete.submit();
            }
        });
        
        document.getElementById('modalHapus').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                document.getElementById('modalHapus').classList.remove('show');
                formToDelete = null;
            }
        });
    </script>
</body>
</html>