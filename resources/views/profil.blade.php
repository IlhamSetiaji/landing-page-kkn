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
                    <img src="{{ asset('assets/img/tugu.png') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=qqvP3yZJVi8&ab_channel=MeycoDanuPradana"
                        class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>PROFIL</h3>
                    <p>
                        Darungan adalah desa yang berada di kecamatan Yosowilangun, Kabupaten Lumajang, Jawa Timur,
                        Indonesia.
                        Pada tahun 2010, desa ini berpenduduk 3.993 jiwa.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1781" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dusun Krajan</p>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1973" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dusun Rekesan</p>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="572" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Dusun Igir-igir</p>
                    </div>
                </div><!-- End Stats Item -->
            </div><!-- End Stats Item -->
        </div>
        </div>
    </section><!-- End Stats Counter Section -->
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Our Team</span>
                <h2>Our Team</h2>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                rerum temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                toro des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
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
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
@endsection
