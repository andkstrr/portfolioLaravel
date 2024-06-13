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
              This project uses object-oriented programming (OOP) principles. The form provides several gasoline type options, such as Shell Regular, Shell V-Power, and Shell Diesel, with different prices per liter. This project enhances PHP programming skills and provides a practical solution for fuel cost calculation.
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
              This PHP OOP project aims to create a motorcycle rental management system that manages renter data, both members and non-members, and provides motorcycle options and rental prices. This project enhances PHP skills and provides a practical solution for motorcycle rental management.
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
              This Student Data project has features to add, delete, edit, and print data that has been inputted. This project enhances Session PHP skills and provides a practical solution for data processing.
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
              This Cashier Receipt project has features to add, delete, edit, and print receipts for goods that have been inputted. This project enhances Session PHP skills and provides a practical solution for cashier data processing.
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
              This Book Loan project has features to add, delete, and print the inputted book data. This project enhances Session PHP skills and provides a practical solution for data processing.
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
  <script type="text/javascript" src="{{ asset('assets/swiper-bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/ptj.js') }}"></script>
</body>
</html>
@endsection



