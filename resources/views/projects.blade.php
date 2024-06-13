@extends('master')
@section('content')

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Andika Satrio N.</title>
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/newcss.css') }}" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
</head>
<body oncontextmenu="return false">
  <!--=================== Portfolio ===================-->
  <section class="portfolio section" id="portfolio">
    <h2 class="section__title">Projects</h2>
    <span class="section__subtitle">Most recent work</span>

    <div class="portfolio__container container swiper-container">
      <div class="swiper-wrapper">
        <!-- ------------------------portfolio 1-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio1.png') }}" class="portfolio__img" />

          <div class="portfolio__data">
            <h3 class="portfolio__title">Pom Shell</h3>
            <p class="portfolio__description">
              Proyek ini menggunakan prinsip pemrograman berorientasi objek (OOP). Formulir menyediakan beberapa opsi tipe bensin, seperti Shell Regular, Shell V-Power, dan Shell Diesel, dengan harga per liter yang berbeda. Proyek ini meningkatkan keterampilan pemrograman PHP dan memberikan solusi praktis untuk perhitungan biaya bahan bakar.
            </p>
            <a href="https://github.com/andkstrr/pomShell" class="button button--flex button--small portfolio__button">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/pomShell" target="__blank" class="button button--flex button--small portfolio__button">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
        <!-- ------------------------portfolio 2-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio2.png') }}" class="portfolio__img" />

          <div class="portfolio__data">
            <h3 class="portfolio__title">Rental Motor</h3>
            <p class="portfolio__description">
              Proyek OOP PHP ini bertujuan untuk membuat sistem manajemen rental motor yang mengelola data penyewa, baik member maupun non-member, serta menyediakan opsi motor dan harga sewanya. Proyek ini meningkatkan keterampilan PHP dan menyediakan solusi praktis untuk manajemen rental motor.
            </p>
            <a href="https://github.com/andkstrr/rentalMotor" class="button button--flex button--small portfolio__button">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/rentalMotor/" target="__blank" class="button button--flex button--small portfolio__button">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
        <!-- ------------------------portfolio 3-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio3.png') }}" class="portfolio__img" />

          <div class="portfolio__data">
            <h3 class="portfolio__title">Data Siswa</h3>
            <p class="portfolio__description">
              Spotify Clone is a web app developed using HTML, CSS, and JavaScript. It recreates Spotify's interface and features, allowing users to browse, search, and play songs, create playlists, and discover new music. Responsive design ensures a seamless experience on any device. Contributions are welcome!
            </p>
            <a href="https://github.com/andkstrr/dataSiswa" class="button button--flex button--small portfolio__button">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/dataSiswa/" target="__blank" class="button button--flex button--small portfolio__button">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
        <!-- ------------------------portfolio 4-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio4.png') }}" class="portfolio__img" />

          <div class="portfolio__data">
            <h3 class="portfolio__title">Struk Kasir</h3>
            <p class="portfolio__description">
              This language translator web app is a user-friendly tool built with HTML, CSS, and JavaScript. It leverages Google Translate API to seamlessly translate text between multiple languages. The app features a simple interface, ensuring smooth performance across devices.
            </p>
            <a href="https://github.com/andkstrr/strukKasir" class="button button--flex button--small portfolio__button">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/strukKasir/" target="__blank" class="button button--flex button--small portfolio__button">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
        <!-- ------------------------portfolio 5-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio5.png') }}" class="portfolio__img" />

          <div class="portfolio__data">
            <h3 class="portfolio__title">Peminjaman Buku</h3>
            <p class="portfolio__description">
              Sorting Visualizer is a Java-based project that allows users to visualize various sorting algorithms in action using a Graphical User Interface (GUI). It provides an interactive and educational way to understand how different sorting algorithms work by visually demonstrating their step-by-step sorting process.
            </p>
            <a href="https://github.com/andkstrr/perpusOnline" class="button button--flex button--small portfolio__button">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/perpusOnline/" target="__blank" class="button button--flex button--small portfolio__button">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- add arrows -->
      <div class="swiper-button-next">
        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
      </div>
      <!-- add pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
@endsection

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/ptj.js') }}"></script>

