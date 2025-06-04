<ul class="navbar-nav sidebar sidebar-dark accordion navbarbg" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="65" height="45">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">E-SISKOM</div> --}}
        <di class="sidebar-brand-text">
            <img src="{{ asset('landing-page/assets/img/judul.png') }}" alt="Logo" width="140">
        </di>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link fs-1" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="fs-4">Dashboard</sp>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->routeIs('kuis.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('datasiswa.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span class="sidebar-text">Data Siswa</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('kuis.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kuis.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span class="sidebar-text">Nilai Kuis Siswa</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->routeIs('evaluasi.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('evaluasi.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span class="sidebar-text">Nilai Evaluasi Siswa</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>