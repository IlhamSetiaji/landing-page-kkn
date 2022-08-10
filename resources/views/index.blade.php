@extends('components.template')
@section('title','Desa Darungan Home')
@section('hero')
<section id="hero" class="hero d-flex align-items-center">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/front.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/back.png" class="d-block w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                    <img src="assets/img/farmroad.png" class="d-block w-100" alt="...">
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- End Hero Section -->
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
