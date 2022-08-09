@extends('components.template')
@section('title','Desa Darungan Artikel Detail')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/profil.png');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Profil Desa</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Profil</li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about pt-0">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first gambar">
                <img src="{{ asset($artikel->image) }}" class="img-fluid" alt="">
                {{-- <a href="{{ $content->video }}" class="glightbox play-btn"></a> --}}
            </div>
            <div class="col-lg-6 content order-last  order-lg-first">
                <h3>{{ $artikel->title }}</h3>
                <p style = "text-indent:2cm; text-align:justify;">
                    {{ $artikel->description }}
                </p>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->
@endsection
