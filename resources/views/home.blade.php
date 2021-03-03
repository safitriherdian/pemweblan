@extends('layout/template')

@section('title', 'Home')

@section('home')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Halo, <span>Safitri</span></h2>
                <p class="animate__animated fanimate__adeInUp">Selamat datang di website pemweblan ini, website ini saya buat
                    untuk memenuhi tugas pemweblan. Pada tugas ini saya membuat sebuah website dengan framework laravel.
                    Untuk melihat penggunaan blade @.for silahkan klik read more. </p>
                <a href="/about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Project Laravel</h2>
                <p class="animate__animated animate__fadeInUp">Buat project laravel di gitlab.com  yang menghasilkan tiga 
                halaman menggunakan fitur blade @.extends, @.section, dan  @.for atau @.foreach. Untuk melihat penggunaan 
                blade @.foreach silahkan klik read more.</p>
                <a href="/mahasiswa" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="100" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="100" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="100" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="#about" class="about">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>Home</h2>
            <p>Ini adalah tugas PEMWEBLAN</p>
        </div>

        <div class="row content" data-aos="fade-up">
            <div class="col-lg-6">
                <p>
                    Website ini saya buat untuk memenuhi tugas pemweblan. Pada tugas ini saya membuat sebuah
                    website dengan framework laravel dengan memanfaatkan :
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Fitur blade @.extends</li>
                    <li><i class="ri-check-double-line"></i> Fitur blade @.section</li>
                    <li><i class="ri-check-double-line"></i> Fitur blade @.for atau @.foreach</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    Bagaimana denganmu? Apakah kamu tertarik untuk belajar tentang framework laravel?
                    Yuk belajar laravel bersama saya!
                </p>
                <a href="/mahasiswa" class="btn-learn-more">Yuk! Let's Go!</a>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->
@endsection