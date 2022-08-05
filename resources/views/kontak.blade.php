@extends('components.template')
@section('title','Desa Darungan Kontak')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/farmroad.png');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Kontak Kami</h2>
                    <p>Terlampir alamat google maps dan kontak kami, silahkan berikan feedback atau pesan kami di kotak
                        form dibawah ini
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Kontak</li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div>
            <iframe style="border:0; width: 100%; height: 340px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15793.922903996236!2d113.24412633654498!3d-8.25485316952736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd664f7389853d9%3A0xf6901de81bb6d453!2sDarungan%2C%20Kec.%20Yosowilangun%2C%20Kabupaten%20Lumajang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1659237520902!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->
        <div class="row gy-4 mt-4">
            <div class="col-lg-4">
                <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h4>Location:</h4>
                        <p>P7X4+R33, Darungan, Yosowilangun, Krajan, Darungan, Lumajang, Kabupaten Lumajang, Jawa Timur
                            67382</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h4>Email:</h4>
                        <p>kkn473.darungan@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                        <h4>Call:</h4>
                        <p>+6285655882155</p>
                    </div>
                </div><!-- End Info Item -->
            </div>
            <div class="col-lg-8">
                <form action="{{ url('send-message') }}" method="post" role="form" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    {{-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection
