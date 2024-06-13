<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Andika Satrio N.</title>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/newcss.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
</head>
<body oncontextmenu="return false">

<!--========================= Header =====================-->

<header class="header" id="header">
    <nav class="nav container">
        <a href="/blog" class="nav__logo">ðk</a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="/blog" class="nav__link active-link">
                    <i class="uil uil-estate nav__icon"></i>Home
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/blog#about" class="nav__link">
                    <i class="uil uil-user nav__icon"></i>About
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/blog/projects" class="nav__link">
                    <i class="uil uil-scenery nav__icon"></i>Projects
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/blog/contact" class="nav__link">
                    <i class="uil uil-message nav__icon"></i>Contact-Me
                    </a>
                </li>
            </ul>
            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
        <!-- Theme change button -->
            <i class="uil uil-moon change-theme" id="theme-button"></i>
            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>
        </div>
    </nav>
</header>

    <!-- main-->

<main class="main">

    <!--========================= Content =====================-->

    @yield('content')

    <!--====================== End Content =====================-->

</main>

    <!--========================= Footer =======================-->

<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Anðkstrr</h1>
                <span class="footer__subtitle"
                    >Software Engineering Student</span
                >
            </div>

            <ul class="footer__links">
                <li>
                    <a href="/blog/projects" class="footer__link">Qualification</a>
                </li>
                <li>
                    <a href="/blog/projects" class="footer__link">Portfolio</a>
                </li>
                <li>
                    <a href="/blog/contact" class="footer__link">Contact-Me</a>
                </li>
            </ul>

            <div class="footer__socials">
                <a
                    href="https://www.instagram.com/andkstrr_/"
                    class="footer__social"
                    target="__blank"
                >
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a
                    href="https://twitter.com/"
                    target="__blank"
                    class="footer__social"
                >
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </div>
        </div>

        <p class="footer__copy">&#169; andkstrr. All right reserved</p>
    </div>
</footer>

    <!--================== SCROLL TOP ==================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

<script type="text/javascript" src="assets/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/ptj.js"></script>
<script>
    AOS.init();
</script>
<script>

/*==================== DARK LIGHT THEME ====================*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "uil-sun";

const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

if (selectedTheme) {
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](darkTheme);
  themeButton.classList[selectedIcon === "uil-moon" ? "add" : "remove"](iconTheme);
} else {
  document.body.classList.add(darkTheme);
  themeButton.classList.add(iconTheme);
}

themeButton.addEventListener("click", () => {
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});

</script>
</body>
</html>
