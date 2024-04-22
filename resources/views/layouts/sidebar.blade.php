<nav class="sb-sidenav accordion sb-sidenav-light shadow" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Home</div>
            <a class="nav-link" href="{{ route('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Data</div>
            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="bi bi-person-fill"></i></div>
                User
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('akunuser') }}">Akun User</a>
                    <a class="nav-link" href="#">Data Anak</a>
                </nav>
            </div>
            <a class="nav-link" href="/gizianak">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Gizi Anak
            </a>
            
            <div class="sb-sidenav-menu-heading">Blog</div>
            <a class="nav-link" href="{{ route('informasiberita') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Informasi Berita
            </a>
            <a class="nav-link" href="{{ route('jadwalposyandu.store') }}">
                <div class="sb-nav-link-icon"><i class="bi bi-calendar-week"></i></div>
                Jadwal Posyandu
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <span class="text-black">{{ auth()->user()->name }}</span>
    </div>
</nav>