@extends('components.template')
@section('title','Desa Darungan Home')
@section('hero')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up"><br>Profil Desa Darungan Yosowilangun Lumajang</h2>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hero->krajan }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dusun Krajan</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hero->rekesan }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dusun Rekesan</p>
                        </div>
                    </div><!-- End Stats Item -->
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $hero->igir }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dusun Igir-igir </p>
                        </div>
                    </div><!-- End Stats Item -->
                </div><!-- End Stats Item -->
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>
    </div>
</section><!-- End Hero Section -->
@endsection
@section('main-content')
<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-users"></i></div>
                <div>
                    <h4 class="title">Kepadatan Penduduk</h4>
                    <p class="description">{{ $feature->jiwa }} Jiwa/km</p>
                    {{-- <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a> --}}
                </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-earth-asia"></i></div>
                <div>
                    <h4 class="title">Luas Desa</h4>
                    <p class="description">{{ $feature->luas }} kilometer Persegi</p>
                    {{-- <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a> --}}
                </div>
            </div>
            <!-- End Service Item -->
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="fa-solid fa-envelopes-bulk"></i></div>
                <div>
                    <h4 class="title">Kode Pos</h4>
                    <p class="description">{{ $feature->pos }} (Darungan, Yosowilangun)</p>
                    {{-- <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                            class="bi bi-arrow-right"></i></a> --}}
                </div>
            </div>
            <!-- End Service Item -->
        </div>
    </div>
</section><!-- End Featured Services Section -->
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">
                <div class="accordion accordion-flush" id="faqlist">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                <i class="bi bi-question-circle question-icon"></i>
                                Apakah akses ke desa ini mudah?
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Akses perjalanan ke desa ini cukup mudah, karena hanya sekitar 30 menit dari
                                wilayah Kota Lumajang.
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                <i class="bi bi-question-circle question-icon"></i>
                                Apakah penduduk di desa ini cukup banyak?
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Iya, karena jumlah penduduk di desa ini sebanyak 4326 jiwa.
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                <i class="bi bi-question-circle question-icon"></i>
                                Apakah desa ini mempunyai lahan pertanian yang luas?
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Iya, luas lahan yang tersedia di desa inii yaitu 4.092 Ton/Ha.
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                </div>
            </div>
        </div>
    </div>
</section><!-- End Frequently Asked Questions Section -->
@endsection
