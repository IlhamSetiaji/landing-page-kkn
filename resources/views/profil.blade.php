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
            <span>Our Team</span>
            <h2>Our Team</h2>

        </div>

        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col"></div>
            <div class="col d-flex">
                <div class="member mx-auto ">
                    <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-content">
                        <h4>Walter White</h4>
                        <span>Web Development</span>
                        <p>
                            Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat
                            qui aut aut aut
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            @foreach ($teams as $t)
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
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            @foreach ($teams as $t)
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
            @endforeach
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" data-aos="fade-up" data-aos-delay="100">
            @foreach ($teams as $t)
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
