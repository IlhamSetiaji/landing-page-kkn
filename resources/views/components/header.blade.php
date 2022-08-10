<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <img id="header-img" src="{{ asset('assets/img/logolumajang.png') }}" alt="">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>DESA DARUNGAN</h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('struktur') }}">Struktur</a></li>
                <li><a href="{{ url('potensi') }}">Potensi</a></li>
                <li><a href="{{ url('artikel') }}">Artikel</a></li>
                <li><a href="{{ url('galeri') }}">Galeri</a></li>
                <li><a href="{{ url('kontak') }}">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>