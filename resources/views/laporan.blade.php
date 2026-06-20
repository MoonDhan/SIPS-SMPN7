<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laporan Pelanggaran | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @vite(['resources/css/dashboard.css', 'resources/js/laporan.js'])
    
    <style>
        .filter-section { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin: 20px; }
        .filter-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; align-items: flex-end; }
        .filter-group { display: flex; flex-direction: column; gap: 8px; }
        .filter-group label { font-weight: 500; font-size: 13px; color: #4b5563; }
        .filter-control { padding: 10px; border: 1px solid #d1d5db; border-radius: 6px; font-family: inherit; font-size: 14px; outline: none; transition: border-color 0.2s; }
        .filter-control:focus { border-color: #4e73df; }
        
        .btn-filter { background-color: #4e73df; color: white; padding: 10px 20px; border-radius: 6px; font-weight: 500; cursor: pointer; border: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-size: 14px; height: 38px; }
        .btn-filter:hover { background-color: #2e59d9; }
        .btn-reset { background-color: #f3f4f6; color: #4b5563; border: 1px solid #d1d5db; padding: 10px 20px; border-radius: 6px; font-weight: 500; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-size: 14px; height: 38px; box-sizing: border-box; }
        .btn-reset:hover { background-color: #e5e7eb; }
        .btn-print { background-color: #1cc88a; color: white; padding: 10px 20px; border-radius: 6px; font-weight: 500; cursor: pointer; border: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-size: 14px; height: 38px; }
        .btn-print:hover { background-color: #17a673; }

        /* Stats Cards */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px; margin: 20px; }
        .stat-card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border-left: 4px solid #858796; display: flex; align-items: center; justify-content: space-between; }
        .stat-card.total { border-left-color: #4e73df; }
        .stat-card.ringan { border-left-color: #1cc88a; }
        .stat-card.sedang { border-left-color: #f6c23e; }
        .stat-card.berat { border-left-color: #e74a3b; }
        .stat-card.poin { border-left-color: #36b9cc; }
        
        .stat-info h4 { margin: 0; font-size: 12px; font-weight: 700; text-transform: uppercase; color: #858796; letter-spacing: 0.5px; }
        .stat-info .value { font-size: 24px; font-weight: 700; margin-top: 5px; color: #5a5c69; }
        .stat-icon { font-size: 28px; color: #dddfeb; }

        .report-section { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin: 20px; }
        .report-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        
        .badge-kategori { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: capitalize; display: inline-block; }
        .badge-kategori-ringan { background-color: #d1e7dd; color: #0f5132; }
        .badge-kategori-sedang { background-color: #fff3cd; color: #664d03; }
        .badge-kategori-berat { background-color: #f8d7da; color: #842029; }

        /* Kop Surat untuk Print */
        .print-header { display: none; margin-bottom: 30px; border-bottom: 3px double #333; padding-bottom: 15px; text-align: center; }
        .print-header h1 { font-size: 22px; font-weight: 800; margin: 0; color: #000; text-transform: uppercase; }
        .print-header h2 { font-size: 16px; font-weight: 600; margin: 5px 0 0 0; color: #333; }
        .print-header p { font-size: 12px; margin: 5px 0 0 0; color: #666; }

        @media print {
            body { background: white; font-size: 12px; }
            .sidebar, .topbar, .filter-section, .btn-print, .btn-tambah, .sidebar-overlay, .main-content header, .report-header .btn-print { display: none !important; }
            .main-content { margin-left: 0 !important; padding: 0 !important; width: 100% !important; }
            .dashboard-wrapper { display: block !important; }
            .report-section, .stats-grid { box-shadow: none !important; padding: 0 !important; margin: 0 !important; }
            .stats-grid { margin-bottom: 20px !important; grid-template-columns: repeat(5, 1fr) !important; gap: 10px !important; }
            .stat-card { border: 1px solid #ddd !important; border-left-width: 4px !important; box-shadow: none !important; }
            .print-header { display: block !important; }
            .recent-table-wrapper { overflow: visible !important; }
            table { width: 100% !important; border-collapse: collapse !important; }
            th, td { border: 1px solid #ddd !important; padding: 8px !important; font-size: 11px !important; }
            th { background-color: #f3f4f6 !important; color: #000 !important; }
            .badge-kategori { border: 1px solid #ccc !important; padding: 2px 6px !important; }
        }
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
                    <h2>Laporan Pelanggaran</h2>
                </div>
                <div class="topbar-right">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">0</span>
                    </div>
                </div>
            </header>

            <!-- Kop Surat (Hanya Tampil saat Cetak) -->
            <div class="print-header">
                <h1>Sistem Informasi Pelanggaran Siswa (SIPS)</h1>
                <h2>SMP Negeri 7 Jember</h2>
                <p>Jl. PB Sudirman No. 24, Patrang, Jember, Jawa Timur | Telp: (0331) 487007</p>
                <h3 style="margin-top: 20px; font-size: 14px; text-decoration: underline; text-transform: uppercase;">Laporan Rekapitulasi Pelanggaran Siswa</h3>
                <p style="font-size: 11px;">
                    Periode: {{ \Carbon\Carbon::parse($tanggal_mulai)->format('d/m/Y') }} s/d {{ \Carbon\Carbon::parse($tanggal_selesai)->format('d/m/Y') }}
                    @if($kelas_selected) | Kelas: {{ $kelas_selected }} @endif
                    @if($kategori_selected) | Kategori: {{ ucfirst($kategori_selected) }} @endif
                </p>
            </div>

            <!-- Filter Panel -->
            <section class="filter-section">
                <form method="GET" action="{{ route('laporan') }}">
                    <div class="filter-grid">
                        <div class="filter-group">
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" class="filter-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $tanggal_mulai }}">
                        </div>
                        
                        <div class="filter-group">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <input type="date" class="filter-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $tanggal_selesai }}">
                        </div>

                        <div class="filter-group">
                            <label for="kelas">Kelas</label>
                            <select class="filter-control" id="kelas" name="kelas">
                                <option value="">Semua Kelas</option>
                                @foreach($list_kelas as $kelas)
                                    <option value="{{ $kelas }}" {{ $kelas_selected == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="filter-group">
                            <label for="kategori">Kategori</label>
                            <select class="filter-control" id="kategori" name="kategori">
                                <option value="">Semua Kategori</option>
                                <option value="ringan" {{ $kategori_selected == 'ringan' ? 'selected' : '' }}>Ringan</option>
                                <option value="sedang" {{ $kategori_selected == 'sedang' ? 'selected' : '' }}>Sedang</option>
                                <option value="berat" {{ $kategori_selected == 'berat' ? 'selected' : '' }}>Berat</option>
                            </select>
                        </div>

                        <div class="filter-group" style="flex-direction: row; gap: 10px;">
                            <button type="submit" class="btn-filter">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                            <a href="{{ route('laporan') }}" class="btn-reset">
                                <i class="fas fa-undo"></i> Reset
                            </a>
                        </div>
                    </div>
                </form>
            </section>

            <!-- Statistik Panel -->
            <section class="stats-grid">
                <div class="stat-card total">
                    <div class="stat-info">
                        <h4>Total Kasus</h4>
                        <div class="value">{{ $stats['total'] }}</div>
                    </div>
                    <div class="stat-icon"><i class="fas fa-folder-open"></i></div>
                </div>

                <div class="stat-card ringan">
                    <div class="stat-info">
                        <h4>Ringan</h4>
                        <div class="value" style="color: #1cc88a;">{{ $stats['ringan'] }}</div>
                    </div>
                    <div class="stat-icon"><i class="fas fa-check-circle" style="color: #d1e7dd;"></i></div>
                </div>

                <div class="stat-card sedang">
                    <div class="stat-info">
                        <h4>Sedang</h4>
                        <div class="value" style="color: #f6c23e;">{{ $stats['sedang'] }}</div>
                    </div>
                    <div class="stat-icon"><i class="fas fa-exclamation-circle" style="color: #fff3cd;"></i></div>
                </div>

                <div class="stat-card berat">
                    <div class="stat-info">
                        <h4>Berat</h4>
                        <div class="value" style="color: #e74a3b;">{{ $stats['berat'] }}</div>
                    </div>
                    <div class="stat-icon"><i class="fas fa-times-circle" style="color: #f8d7da;"></i></div>
                </div>

                <div class="stat-card poin">
                    <div class="stat-info">
                        <h4>Total Poin</h4>
                        <div class="value" style="color: #36b9cc;">{{ $stats['total_poin'] }}</div>
                    </div>
                    <div class="stat-icon"><i class="fas fa-exclamation-triangle" style="color: #cff4fc;"></i></div>
                </div>
            </section>

            <!-- Report Table Section -->
            <section class="report-section">
                <div class="report-header">
                    <h3 style="color: #4e73df; font-weight: 600;"><i class="fas fa-table"></i> Hasil Pencarian Laporan</h3>
                    <button onclick="window.print()" class="btn-print">
                        <i class="fas fa-print"></i> Cetak Laporan
                    </button>
                </div>

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
                                <th>Status</th>
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
                                <td style="color: #e74a3b; font-weight: bold;">+{{ $item->poin ?? 0 }}</td>
                                <td style="text-transform: capitalize; font-weight: 500;">
                                    <span style="color: {{ $item->status == 'selesai' ? '#1cc88a' : '#f6c23e' }}">
                                        {{ $item->status ?? '-' }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" style="text-align: center; padding: 20px;">Tidak ada data pelanggaran yang sesuai dengan filter pencarian.</td>
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
