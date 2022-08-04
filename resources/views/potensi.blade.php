@extends('components.template')
@section('title','Desa Darungan Struktur')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Potensi Desa</h2>
                    <p>Desa Darungan merupakan desa yang mempunyai banyak kekayaan dan keberagaman, sehingga banyak
                        potensi yang dihasilkan dari desa ini membuat Desa Darungan semakin maju.</p>
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
<!-- ======= Services Section ======= -->
<section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <span>Our Services</span>
            <h2>Potensi Desa Darungan</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/img/ketanputih.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="service-details.html" class="stretched-link">Ketan</a></h3>
                    <p>Salah satu potensi terbesar yang ada di Desa Darungan, Kecamatan Yosowilangun, Kabupatan Lumajang
                        ialah Beras Ketan yang mana Desa Darungan menjadi salah satu produsen beras ketan terbesar
                        se-Jawa Timur karena hasil produksinya yang sangat melimpah yaitu sebanyak 4.092 Ton/Ha. </p>
                </div>
            </div><!-- End Card Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/img/sapi.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="service-details.html" class="stretched-link">Peternakan</a></h3>
                    <p>Mayoritas di tiap rumah Desa Darungan mempunyai peliharaan hewan ternak, seperti Sapi dan
                        Kambing.</p>
                </div>
            </div><!-- End Card Item -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/img/umkm.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="service-details.html" class="stretched-link">UMKM</a></h3>
                    <p>Banyak penduduk di Desa Darungan mempunyai Usaha Kecil Mikro Menengah (UMKM), yang mana sebagian
                        penduduk sudah mempunyai jiwa keinginan untuk menjadi pengusaha</p>
                </div>
            </div><!-- End Card Item -->
        </div>
    </div>
</section><!-- End Services Section -->
@endsection
