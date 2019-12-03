@extends('layouts.layoutama')
@section('konten')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="mb-5 text-center">
                    <h1 class="text-white font-weight-bold">About Us</h1>
                    <p>Temukan pekerjaan yang anda cari di sini.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                    <span class="play-icon"><span class="icon-play"></span></span>
                    <img src="images/about_1.jpg" alt="Image" class="img-fluid img-shadow">
                </a>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="section-title mb-3">GOGA </h2>
                <p class="lead">Eveniet voluptatibus voluptates suscipit minima, cum voluptatum ut dolor, sed facere corporis qui, ea quisquam quis odit minus nulla vitae. Sit, voluptatem.</p>
                <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex asperiores quisquam optio nostrum sit!</p>
            </div>
        </div>
    </div>
</section>
<section class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Our Team</h2>
            </div>
        </div>
        <div class="row align-items-center block__69944">
            <div class="col-md-4">
                <img src="images/genta.jpeg" alt="Image" class="img-fluid mb-4 rounded">
                <h3>Bramantya Raka Genta R</h3>
                <p class="text-muted"> GOGA's Back End Developer</p>
                <p>Kunci dari suatu hubungan adalah rasa percaya dan loyalitas.</p>
                <div class="social mt-4">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                </div>
            </div>
            <div class="col-md-4 order-md-2">
                <img src="images/rudis.jpg" alt="Image" class="img-fluid mb-4 rounded">
                <h3>Ruditya Candra Pradana</h3>
                <p class="text-muted">GOGS's UI Designer and Front End Developer</p>
                <p>Berpikir positif adalah salah satu cara menikmati setiap hari yang berlalu .</p>
                <div class="social mt-4">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                </div>
            </div>
            <div class="col-md-4 order-md-2">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
                <h3>Royandi Nicolas Naibaho</h3>
                <p class="text-muted">Front End Designer</p>
                <p>Jalani hidup dengan santai, tapi jangan pernah melupakan apa itu serius.</p>
                <div class="social mt-4">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                </div>
            </div>
        </div>
</section>
<section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/gedungsv.jpg');">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2 text-white">Job Board Site Stats</h2>
                <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
            </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="1930">0</strong>
                </div>
                <span class="caption">Pelamar</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="54">0</strong>
                </div>
                <span class="caption">Lowongan</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="120">0</strong>
                </div>
                <span class="caption">Lowongan Terisi</span>
            </div>
            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="550">0</strong>
                </div>
                <span class="caption">Perusahaan</span>
            </div>
        </div>
    </div>
    @endsection