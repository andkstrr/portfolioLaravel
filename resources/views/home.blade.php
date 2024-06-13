@extends('master')
@section('content')
    
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Andika Satrio N.</title>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/newcss.css" />
    <link
        rel="stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
</head>
  <!-- main-->
  <body oncontextmenu="return false">
  <main class="main">

    <!--========================= Home =====================-->

    <section class="home section" id="home">
      <div class="home__container container grid">
        <div class="home__content grid">
          <div class="home__social">
            <a
              href="https://www.linkedin.com/in/andika-satrio-nurcahyo/"
              target="_blank"
              class="home__social-icon"
            >
              <i class="uil uil-linkedin-alt home__icon"></i>
            </a>

            <a
              href="https://github.com/andkstrr"
              target="_blank"
              class="home__social-icon"
            >
              <i class="uil uil-github-alt home__icon"></i>
            </a>
          </div>
          <div class="home__img">
            <svg
              class="home__blob"
              viewBox="0 0 200 187"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <mask id="mask0" mask-type="alpha">
                <path
                  d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                />
              </mask>
              <g mask="url(#mask0)">
                <path
                  d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                />
                <image
                  class="home__blob-img"
                  x="-79"
                  y="-46"
                  xlink:href="assets/img/Pro.jpg"
                />
              </g>
            </svg>
          </div>
          <div class="home__data">
            <h1 class="home__title">Hi, I'm Andika Satrio N.</h1>
            <h3 class="home__subtitle">
              Software Engineering Student
            </h3>
            <p class="home__description">
              An informatics student at
              <strong>Wiyata Krida Manggala</strong>, Bogor.
            </p>
            <a href="contact.html" class="button button--flex">
              Contact me<i class="uil uil-message button__icon"></i>
            </a>
          </div>
        </div>

        <div class="home__scroll">
          <a href="#about" class="home__scroll-button button--flex">
            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
            <span class="home__scroll-name">Scroll down</span>
            <i class="uil uil-arrow-down home__scroll-arrow"></i>
          </a>
        </div>
      </div>
    </section>

    <!--======================= About========================-->

    <section class="about section" id="about">
      <h2 class="section__title">About Me</h2>
      <span class="section__subtitle">My introduction</span>

      <div class="about__container container grid">
        <img src="assets\img\about.jpg" alt="" class="about__img" />

        <div class="about__data">
          <p class="about__description">
            I'm an <strong>informatics student at Wikrama</strong>, passionate about technology and an avid reader. I have a self-motivated and can-do attitude, thriving in challenging and dynamic environments. Seeking a competitive position to enhance my skills and contribute to a professional organization. I'm very much passionate to learn new stuff that interests me and can help me to get better.
          </p>

          <div class="about__info">
            <div>
              <span class="about__info-title">08.30+</span>
              <span class="about__info-name">Aggregate <br />CGPA</span>
            </div>

            <div>
              <span class="about__info-title">06+</span>
              <span class="about__info-name"
                >
                Projects</span
              >
            </div>

            <div>
              <span class="about__info-title">11+</span>
              <span class="about__info-name">Months <br />experience</span>
            </div>
          </div>

          <div class="about__buttons">
            <a download="" href="assets\" class="button button--flex">
              Download CV<i class="fas fa-download button__icon"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  </body>
  </html>
  @endsection
    