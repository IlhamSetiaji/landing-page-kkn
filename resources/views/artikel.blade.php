@extends('components.template')
@section('title','Desa Darungan Struktur')
@section('main-content')
<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3>Artikel</h3>
                <p></p>
                <a class="cta-btn" href="#">Lihat Berita</a>
                </dic>
            </div>

        </div>
</section><!-- End Call To Action Section -->
<section id="article" class="article">
    <div class="col-lg-12 text-center">
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <h2 class="text" style="color: #79df5a;">Artikel Desa</h2>
        <hr class="divider divider-light" />
        <div id="carouselExampleControls" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--Card-->
                    <div class="row" style="margin-left: 9%; margin-right: 9%;">
                        @foreach ($latest as $l)
                        <div class="col-md-4 col-sm-12 col-lg-4 mt-3">
                            <div class="card" style="border-radius: 15px; width: 100%;">
                                <a href="{{ url('artikel/'.$l->id.'/detail') }}"><img src="{{ asset($l->image) }}" class="card-img-top" alt=""
                                    style="background-color: #ECE8E8; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;"></a>
                                <div class="card-body"
                                    style="background-color: #ECE8E8; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; max-height: 170px;">
                                    <h5 class="card-title" style="text-align: left;">{{ $l->title }}</h5>
                                    <p class="card-text"
                                        style="background-color: #ECE8E8; text-align: left; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;  white-space: nowrap; 
                                        width: 80%; 
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        {{ $l->description }}</p>
                                        <h6>{{ $l->date }}</h6>
                                    <a href="{{ url('artikel/'.$l->id.'/detail') }}" class="btn btn-primary"
                                        style="color: white; font-size: 13px;">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Card-->
                    <div class="row" style="margin-left: 9%; margin-right: 9%;">
                        @foreach ($oldest as $o)
                        <div class="col-md-4 col-sm-12 col-lg-4 mt-3">
                            <div class="card" style="border-radius: 15px; width: 100%;">
                                <a href="{{ url('artikel/'.$o->id.'/detail') }}"><img src="{{ asset($o->image) }}" class="card-img-top" alt=""
                                    style="background-color: #ECE8E8; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;"></a>
                                <div class="card-body"
                                    style="background-color: #ECE8E8; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; max-height: 170px;">
                                    <h5 class="card-title" style="text-align: left;">{{ $o->title }}</h5>
                                    <p class="card-text"
                                        style="background-color: #ECE8E8; text-align: left; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;  white-space: nowrap; 
                                        width: 80%; 
                                        overflow: hidden;
                                        text-overflow: ellipsis;">
                                        {{ $o->description }}</p>
                                        <h6>{{ $o->date }}</h6>
                                    <a href{{ url('artikel/'.$o->id.'/detail') }}" class="btn btn-primary"
                                        style="color: white; font-size: 13px;">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
