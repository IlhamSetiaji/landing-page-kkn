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
        <div class="row gy-4 potensi">
            @foreach ($contents as $c)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset($c->image) }}" alt="" class="img-fluid h-100">
                    </div>
                    <h3><a href="#" class="stretched-link">{{ $c->title }}</a></h3>
                    <p>{{ $c->desc }}</p>
                </div>
            </div><!-- End Card Item -->
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->
@endsection
