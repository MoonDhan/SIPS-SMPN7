<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Guru BK | Sistem Informasi Pelanggaran Siswa</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    @vite(['resources/css/dashboard.css', 'resources/js/guru-bk.js'])
    
    <style>
        .form-section { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin: 20px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 500; color: #333; }
        .form-control { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit; font-size: 14px; box-sizing: border-box; }
        .form-control:focus { border-color: #4e73df; outline: none; box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25); }
        .row { display: flex; gap: 20px; flex-wrap: wrap; }
        .col-md-6 { flex: 1; min-width: 300px; }
        .text-danger { color: #e74a3b; font-size: 13px; margin-top: 5px; display: block; }
        .form-actions { display: flex; justify-content: flex-end; gap: 15px; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; }
        .btn { padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: 500; border: none; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; }
        .btn-secondary { background-color: #858796; color: white; }
        .btn-secondary:hover { background-color: #717384; }
        .btn-primary { background-color: #4e73df; color: white; }
        .btn-primary:hover { background-color: #2e59d9; }
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
                    <h2>Edit Guru BK</h2>
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
                    <h3 style="color: #4e73df; margin-bottom: 5px;"><i class="fas fa-user-edit"></i> Formulir Edit Akun Guru BK</h3>
                    <p style="color: #666; font-size: 14px;">Silakan perbarui data akun Guru BK atau administrator di bawah ini.</p>
                </div>

                <form action="{{ route('guru-bk.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span class="text-danger" style="display:inline;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $guru->name) }}" required>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Alamat Email <span class="text-danger" style="display:inline;">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $guru->email) }}" required>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nuptk">NUPTK <small style="color: #858796;">(16 Digit - Opsional)</small></label>
                                <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{ old('nuptk', $guru->nuptk) }}" placeholder="Masukkan 16 digit NUPTK" maxlength="16">
                                @error('nuptk') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jabatan">Jabatan <span class="text-danger" style="display:inline;">*</span></label>
                                <select class="form-control" id="jabatan" name="jabatan" required>
                                    <option value="Guru BK" {{ old('jabatan', $guru->jabatan) == 'Guru BK' ? 'selected' : '' }}>Guru BK / Konselor</option>
                                    <option value="Kepala Sekolah" {{ old('jabatan', $guru->jabatan) == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                                    <option value="Waka Kesiswaan" {{ old('jabatan', $guru->jabatan) == 'Waka Kesiswaan' ? 'selected' : '' }}>Waka Kesiswaan</option>
                                    <option value="Staf BK" {{ old('jabatan', $guru->jabatan) == 'Staf BK' ? 'selected' : '' }}>Staf BK / Admin</option>
                                </select>
                                @error('jabatan') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div style="background-color: #f8f9fc; border: 1px solid #eaecf4; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        <h4 style="margin: 0 0 10px 0; color: #4e73df; font-size: 14px;"><i class="fas fa-key"></i> Ubah Password <small style="color: #858796; font-weight: normal;">(Kosongkan jika tidak ingin diubah)</small></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-bottom: 0;">
                                    <label for="password">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 8 karakter">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-bottom: 0;">
                                    <label for="password_confirmation">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">No. Handphone</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $guru->no_hp) }}">
                                @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="is_active">Status Akun <span class="text-danger" style="display:inline;">*</span></label>
                                <select class="form-control" id="is_active" name="is_active" required>
                                    <option value="1" {{ old('is_active', $guru->is_active) == '1' ? 'selected' : '' }}>Aktif (Dapat Login)</option>
                                    <option value="0" {{ old('is_active', $guru->is_active) == '0' ? 'selected' : '' }}>Nonaktif (Ditangguhkan)</option>
                                </select>
                                @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat', $guru->alamat) }}</textarea>
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('guru-bk.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
