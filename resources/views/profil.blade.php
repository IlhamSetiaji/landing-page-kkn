@extends('components.template')
@section('title','Desa Darungan Profil')
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
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                <img src="{{ $content->image }}" class="img-fluid" alt="">
                <a href="{{ $content->video }}" class="glightbox play-btn"></a>
            </div>
            <div class="col-lg-6 content order-last  order-lg-first">
                <h3>{{ $content->title }}</h3>
                <p>
                    {{ $content->desc }}
                </p>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->
<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter pt-0">
    <div class="container" data-aos="fade-up">
        <div class="row row-cols-md-3 row-cols-2 gy-4">
            <div class="col">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $hero->krajan }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dusun Krajan</p>
                </div>
            </div><!-- End Stats Item -->
            <div class="col">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $hero->rekesan }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dusun Rekesan</p>
                </div>
            </div><!-- End Stats Item -->
            <div class="col">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $hero->igir }}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p>Dusun Igir-igir</p>
                </div>
            </div><!-- End Stats Item -->
        </div><!-- End Stats Item -->
    </div>
</section><!-- End Stats Counter Section -->
<!-- ======= Our Team Section ======= -->
{{-- <section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <span>Our Team</span>
            <h2>Our Team</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            @foreach ($teams as $t)
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="member">
                    <img src="{{ asset($t->image) }}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $t->name }}</h4>
                        <span>{{ $t->job }}</span>
                        <p>
                            {{ $t->desc }}
                        </p>
                        <div class="social">
                            <a href="{{ $t->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="{{ $t->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="{{ $t->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="{{ $t->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach
        </div>
    </div>
</section><!-- End Our Team Section --> --}}
<section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <span>KKN 473 Darungan</span>
            <h2>KKN 473 Darungan</h2>

        </div>

        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col"></div>
            <div class="col d-flex">
                <div class="member mx-auto ">
                    <img src="assets/img/teams/rella.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Rella Desinta Kustri</h4>
                        <span>Koordinator Desa</span>
                        <p>
                            "Don’t gain the world and lose your soul, wisdom is better than silver or gold."
                        </p>
                        {{-- <div class="social">
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            {{-- @foreach ($teams as $t)
            <div class="col d-flex">
                <div class="member">
                    <img src="{{ asset($t->image) }}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $t->name }}</h4>
                        <span>{{ $t->job }}</span>
                        <p>
                            {{ $t->desc }}
                        </p>
                        <div class="social">
                            <a href="{{ $t->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach --}}
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/siti_second.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Siti Murdiyati Mukarromah</h4>
                        <span>Sekretaris</span>
                        <p>
                            Everything has beauty, but not everyone sees it.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/hamid.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Hamid Baidhowi Warda</h4>
                        <span>Wakil Koordinator Desa</span>
                        <p>
                            Life is what happens when you’re busy making other plans.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/muffidah.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Siti Lailatul Mufidah</h4>
                        <span>Bendahara</span>
                        <p>
                            Life is short, and truth works far and lives long: let us then speak the truth.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            {{-- @foreach ($teams as $t)
            <div class="col d-flex">
                <div class="member">
                    <img src="{{ asset($t->image) }}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $t->name }}</h4>
                        <span>{{ $t->job }}</span>
                        <p>
                            {{ $t->desc }}
                        </p>
                        <div class="social">
                            <a href="{{ $t->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach --}}
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/sapeg.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Fadhlissyafiq AB</h4>
                        <span>Media dan Informasi</span>
                        <p>
                            Believe that life is worth living and your belief will help create the fact.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/delsa.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Delsa Alfannia</h4>
                        <span>Media dan Informasi</span>
                        <p>
                            Life must be lived and curiosity kept alive. One must never, for whatever reason, turn its back on life.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/abdullah.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Abdullah Faza Al Fafa</h4>
                        <span>Media dan Informasi</span>
                        <p>
                            Change your thoughts and you change your world.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            {{-- @foreach ($teams as $t)
            <div class="col d-flex">
                <div class="member">
                    <img src="{{ asset($t->image) }}" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>{{ $t->name }}</h4>
                        <span>{{ $t->job }}</span>
                        <p>
                            {{ $t->desc }}
                        </p>
                        <div class="social">
                            <a href="{{ $t->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach --}}
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/musyaffa.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Musyaffa Fajar Pratama</h4>
                        <span>Divisi Logistik</span>
                        <p>
                            It’s better to be a lion for a day than a sheep all your life.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/diana.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Dhiana Mayangshinta</h4>
                        <span>Divisi Logistik</span>
                        <p>
                            Life is a journey to be experienced, not a problem to be solved.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
            <div class="col d-flex">
                <div class="member">
                    <img src="assets/img/teams/ghifary.HEIC.png" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Ghifary Achmad Azhar</h4>
                        <span>Divisi Logistik</span>
                        <p>
                            If you're brave enough to say goodbye, life will reward you with a new hello.
                        </p>
                        {{-- <div class="social">
                            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div><!-- End Team Member -->
        </div>
    </div>
</section><!-- End Our Team Section -->
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="slides-1 swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach ($testi as $t)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset($t->image) }}" class="testimonial-img" alt="">
                        <h3>{{ $t->name }}</h3>
                        <h4>{{ $t->job }}</h4>
                        <div class="stars">
                            @for ($i=0; $i<$t->star; $i++)
                                <i class="bi bi-star-fill"></i>
                                @endfor
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            {{ $t->desc }}
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
@endsection
