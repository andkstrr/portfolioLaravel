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
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
</head>
<body oncontextmenu="return false">

{{-- ===================== Section Contact ===================== --}}

    <section class="contact section" id="contact">
      <h2 class="section__title" style="margin-top: 50px" data-aos="fade-up"
      data-aos-duration="2500">Contact Me</h2>
      <span class="section__subtitle" style="margin-bottom: 70px" data-aos="fade-up"
      data-aos-duration="3000">Get in touch</span>

      <div class="contact__container container grid">
        <div>
          <div class="contact__information">
            <i class="uil uil-calling contact__icon" data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="700"></i>

            <div data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700">
              <h3 class="contact__title">Contact Me</h3>
              <span class="contact__subtitle"><a href="tel:6362243314"></a>+ 62 895 2294 4786</span>
            </div>
          </div>

          <div class="contact__information">
            <i class="uil uil-envelope-minus contact__icon" data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1100"></i>

            <div data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1100">
              <h3 class="contact__title">Email</h3>
              <span class="contact__subtitle">andikasatrionurcahyo@gmail.com</span>
            </div>
          </div>

          <div class="contact__information">
            <i class="uil uil-map-marker contact__icon" data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1500"></i>

            <div data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1500">
              <h3 class="contact__title">Location</h3>
              <span class="contact__subtitle">Bogor, Jawa Barat, Indonesia</span>
            </div>
          </div>
        </div>

        <!-- Use Formspree endpoint in the form action attribute -->
        <form action="https://formspree.io/f/mqkrrglv" method="POST" class="contact__form grid">
          <div class="contact__inputs grid">
            <div class="contact__content" data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1000">
              <label for="name" class="content__label">Name</label>
              <input type="text" name="name" class="contact__input" required />
            </div>

            <div class="contact__content" data-aos="fade-up"
            data-aos-duration="3000" data-aos-delay="1400">
              <label for="email" class="content__label">Email</label>
              <input type="email" name="email" class="contact__input" required />
            </div>
          </div>

          <div class="contact__content" data-aos="fade-up"
          data-aos-duration="3000" data-aos-delay="1800">
            <label for="message" class="content__label">Message</label>
            <textarea name="message" id="message" cols="0" rows="7" class="contact__input" required></textarea>
          </div>

          <div>
            <button type="submit" class="button button--flex" data-aos="fade-zoom-in"
            data-aos-duration="3000"
            data-aos-delay="3000"
            data-aos-offset="0">
              Send Message
              <i class="uil uil-message button__icon"></i>
            </button>
          </div>
        </form>
      </div>
    </section>

<script type="text/javascript" src="{{ asset('assets/swiper-bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/ptj.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/ptj.js') }}"></script>
<script>
  AOS.init();
</script>
</body>
</html>

@endsection
