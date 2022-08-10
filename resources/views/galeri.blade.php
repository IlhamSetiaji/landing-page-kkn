@extends('components.template')
@section('title','Desa Darungan Galeri')
@section('main-content')
<!-- ======= Call To Action Section ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Galeri</h2>
                    {{-- <p>Desa Darungan merupakan desa yang mempunyai banyak kekayaan dan keberagaman, sehingga banyak
                        potensi yang dihasilkan dari desa ini membuat Desa Darungan semakin maju.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Potensi</li>
            </ol>
        </div>
    </nav>
</div>
<section id="article" class="article">
    <!-- Gallery -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/img/balai_desa.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="assets/img/farmroad.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/masjid.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="assets/img/sawah1.jpg"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/sekolah.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="assets/img/perempatan.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
            {{-- next section  --}}
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/img/tugu.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="assets/img/profil.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/IMG_1088.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="assets/img/IMG_1091.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/IMG_1104.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="assets/img/IMG_1108.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
            {{-- next section  --}}
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="assets/img/IMG_1115.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="assets/img/IMG_1119.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/IMG_1125.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="assets/img/IMG_1139.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="assets/img/IMG_1143.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="assets/img/IMG_1142.HEIC.png"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
        </div>
    </div>
    <!-- Gallery -->
</section>
@endsection
