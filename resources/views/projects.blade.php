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
  <link rel="website icon" href="{{ asset('assets/img/icon.png') }}">
  <link href="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.css') }}" rel="stylesheet"> 
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"/>
</head>
<body oncontextmenu="return false">

{{--=================== Section Services ====================--}}

  <section class="services section" id="services">
    <h2 class="section__title" style="margin-top: 50px;" data-aos="fade-up"
    data-aos-duration="2000">Services</h2>
    <span class="section__subtitle" style="margin-bottom: 70px;" data-aos="fade-up"
    data-aos-duration="2500" data-aos-delay="50">What I offer</span>

    <div class="services__container container grid">
        <!-- ----------------- services 1 ---------------- -->
        <div class="services__content" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">
            <div>
                <i class="uil uil-web-grid services__icon"></i>
                <h3 class="services__title">Ui/Ux <br> Designer</h3>
                <span class="button button--flex button--small button--link services__button">
                    View More
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="service__modal-title" style="margin-bottom: 10px;">Ui/Ux <br> Designer</h4>
                        <i class="uil uil-times services__modal-close"></i>
                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I develop user interface</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I create UX element interactions</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I position your company brand</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I develop user interface</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>I design and develop web pages</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="services__content" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="750">
          <div>
              <i class="uil uil-arrow services__icon"></i>
              <h3 class="services__title">Frontend <br> Developer</h3>
              <span class="button button--flex button--small button--link services__button">
                  View More
                  <i class="uil uil-arrow-right button__icon"></i>
              </span>
              <div class="services__modal">
                  <div class="services__modal-content">
                      <h4 class="service__modal-title" style="margin-bottom: 10px;">Frontend <br> Developer</h4>
                      <i class="uil uil-times services__modal-close"></i>
                      <ul class="services__modal-services grid">
                          <li class="services__modal-service">
                              <i class="uil uil-check-circle services__modal-icon"></i>
                              <p>I develop interactive user interfaces</p>
                          </li>
                          <li class="services__modal-service">
                              <i class="uil uil-check-circle services__modal-icon"></i>
                              <p>I create responsive web designs</p>
                          </li>
                          <li class="services__modal-service">
                              <i class="uil uil-check-circle services__modal-icon"></i>
                              <p>I optimize web performance</p>
                          </li>
                          <li class="services__modal-service">
                              <i class="uil uil-check-circle services__modal-icon"></i>
                              <p>I integrate front-end with backend services</p>
                          </li>
                          <li class="services__modal-service">
                              <i class="uil uil-check-circle services__modal-icon"></i>
                              <p>I ensure cross-browser compatibility</p>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>



      <div class="services__content" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="1000">
        <div>
            <i class="uil uil-edit-alt services__icon"></i>
            <h3 class="services__title">Data <br> Science</h3>
            <span class="button button--flex button--small button--link services__button">
                View More
                <i class="uil uil-arrow-right button__icon"></i>
            </span>
            <div class="services__modal">
                <div class="services__modal-content">
                    <h4 class="service__modal-title" style="margin-bottom: 10px;">Data <br> Science</h4>
                    <i class="uil uil-times services__modal-close"></i>
                    <ul class="services__modal-services grid">
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I analyze and interpret complex data</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I develop machine learning models</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I visualize data insights</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I optimize data-driven decision-making</p>
                        </li>
                        <li class="services__modal-service">
                            <i class="uil uil-check-circle services__modal-icon"></i>
                            <p>I ensure data integrity and quality</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
  </section>

{{--=================== Section Portfolio ===================--}}

  <section class="portfolio section" id="portfolio">
    <h2 class="section__title" data-aos="fade-up"
    data-aos-duration="2500">Projects</h2>
    <span class="section__subtitle" style="margin-bottom: 50px" data-aos="fade-up"
    data-aos-duration="3000">Most recent work</span>

    <div class="portfolio__container container swiper-container" >
      <div class="swiper-wrapper">
        <!-- ------------------------portfolio-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio.png') }}" class="portfolio__img" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="900" style="margin-bottom: 20px; height: 270px"/>

          <div class="portfolio__data">
            <h3 class="portfolio__title" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1200">Portfolio using Laravel</h3>
            <p class="portfolio__description" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1400">
              This portfolio website was created using the Laravel framework to display information about myself, my educational background and work experience, the projects I have worked on, and provide a way to contact me. The responsive and user-friendly design ensures that visitors can easily navigate and get the information they need.
            </p>
            <a href="https://github.com/andkstrr/portfolioLaravel" class="button button--flex button--small portfolio__button" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="3000"
            data-aos-delay="1950"
            data-aos-offset="0">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="https://andkstrr.000webhostapp.com/portfolioDk" target="__blank" class="button button--flex button--small portfolio__button" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="3000"
            data-aos-delay="1950"
            data-aos-offset="0">
              See Live
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
          </div>
        </div>
        <!-- ------------------------portfolio 1-------------------- -->
        <div class="portfolio__content grid swiper-slide">
          <img src="{{ asset('assets/img/portfolio1.png') }}" class="portfolio__img" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="900""/>

          <div class="portfolio__data">
            <h3 class="portfolio__title" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1200">Pom Shell</h3>
            <p class="portfolio__description" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1400">
              This project uses object-oriented programming (OOP) principles. The form provides several gasoline type options, such as Shell Regular, Shell V-Power, and Shell Diesel, with different prices per liter. This project enhances PHP programming skills and provides a practical solution for fuel cost calculation.
            </p>
            <a href="https://github.com/andkstrr/pomShell" class="button button--flex button--small portfolio__button" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="3000"
            data-aos-delay="1950"
            data-aos-offset="0">
              GitHub Repository
              <i class="uil uil-external-link-alt button__icon"></i>
            </a>
            <a href="http://atstrrandk.rf.gd/pomShell" target="__blank" class="button button--flex button--small portfolio__button" data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="3000"
            data-aos-delay="1950"
            data-aos-offset="0">
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
        <i class="uil uil-angle-right-b swiper-portfolio-icon" data-aos="fade-left"
        data-aos-duration="3000" data-aos-delay="500"></i>
      </div>
      <div class="swiper-button-prev">
        <i class="uil uil-angle-left-b swiper-portfolio-icon" data-aos="fade-right"
        data-aos-duration="3000" data-aos-delay="500"></i>
      </div>
      <!-- add pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

<script type="text/javascript" src="{{ asset('assets/swiper-bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/ptj.js') }}"></script>
<script src="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
<script>
  AOS.init();
</script>
</body>
</html>

@endsection



