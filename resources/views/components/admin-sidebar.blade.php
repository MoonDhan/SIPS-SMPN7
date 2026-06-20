<aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="brand-icon">
            <img src="{{ asset('images/logo-smp.svg') }}" alt="Logo SMP Negeri 7 Jember" class="brand-logo">
        </div>
        <div class="brand-text">
            <span>SMPN 7 Jember</span>
            <small>Sistem Pelanggaran</small>
        </div>
    </div>

    <nav class="sidebar-nav">
        <a href="{{ route('dashboard') }}" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="fas fa-chart-pie"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('data-siswa') }}" class="nav-item {{ request()->routeIs('data-siswa') ? 'active' : '' }}">
            <i class="fas fa-user-graduate"></i>
            <span>Data Siswa</span>
        </a>
        <a href="{{ route('pelanggaran') }}" class="nav-item {{ request()->routeIs('pelanggaran') ? 'active' : '' }}">
            <i class="fas fa-exclamation-triangle"></i>
            <span>Pelanggaran</span>
        </a>
        <a href="{{ route('laporan') }}" class="nav-item {{ request()->routeIs('laporan') ? 'active' : '' }}">
            <i class="fas fa-chart-line"></i>
            <span>Laporan</span>
        </a>
        <a href="{{ route('guru-bk.index') }}" class="nav-item {{ request()->routeIs('guru-bk.*') ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <span>Guru BK</span>
        </a>
        <a href="{{ route('pengaturan') }}" class="nav-item {{ request()->routeIs('pengaturan') ? 'active' : '' }}">
            <i class="fas fa-cog"></i>
            <span>Pengaturan</span>
        </a>
    </nav>

    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </form>
        <div class="user-info">
            <div class="user-avatar">
                @if(auth()->user()->foto && file_exists(public_path(auth()->user()->foto)))
                    <img src="{{ asset(auth()->user()->foto) }}" alt="Avatar" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                @else
                    {{ substr(auth()->user()->name, 0, 1) }}
                @endif
            </div>
            <div class="user-name">{{ auth()->user()->name }}</div>
            <small>{{ auth()->user()->jabatan ?? 'Guru BK' }}</small>
        </div>
    </div>
</aside>
