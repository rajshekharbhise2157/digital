<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Digital Web | Digital Marketing & Web Development')</title>

    @yield('meta')

    <meta name="description"
        content="@yield('meta_description', 'Digital Web provides professional digital marketing, web development, SEO, creative design and technology solutions for modern businesses.')">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/images/favicons/site.webmanifest') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/growim-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-flipster-master/jquery.flipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/growim.css') }}">
</head>

<body class="custom-cursor">
    <div class="page-wrapper">
        <header class="main-header sticky-header sticky-header--normal">

            <div class="container-fluid">

                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ route('website.home') }}">
                            <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" alt="Digital Web"
                                width="160">
                            <img src="{{ asset('frontend/assets/images/logo-light.png') }}" alt="Digital Web"
                                width="160">
                        </a>
                    </div>

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li class="">
                                <a href="{{ route('website.home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about.index') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('our-services.index') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route('work-with-us.index') }}" class="growim-btn main-header__btn">
                                    <span class="growim-btn__text">Work With Us</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    
                </div>

            </div><!-- /.container-fluid -->

        </header><!-- /.main-header -->
        @yield('content')
        
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">

            <span class="scroll-to-top__text">back top</span>

            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>

        </a>
        <footer class="main-footer">
    <div class="main-footer__bg"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/footer-bg-1-1.png') }}');">
    </div>

    <div class="main-footer__shape"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/footer-1-shape-1.png') }}');">
    </div>

    <div class="main-footer__top">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--about">

                        <a href="{{ route('website.home') }}" class="footer-widget__logo">
                            <img src="{{ asset('frontend/assets/images/logo-light.png') }}"
                                width="160"
                                alt="Digital Web">
                        </a>

                        <p class="footer-widget__text">
                            We provide professional web development, web applications,
                            software development, UI/UX design and digital marketing
                            solutions to help businesses grow and succeed digitally.
                        </p>

                        <a class="growim-btn growim-btn--white" href="{{ route('contact.index') }}">
                            <span class="growim-btn__text">Contact Us</span>
                            <span class="growim-btn__icon">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>
                        </a>

                        <div class="footer-widget__social">
                            <p class="footer-widget__social__text">Follow on</p>

                            <a href="https://facebook.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://twitter.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="https://www.linkedin.com/"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="https://youtube.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget">
                        <h2 class="footer-widget__title">Quick Links</h2>

                        <ul class="list-unstyled footer-widget__links">
                            <li>
                                <a href="{{ route('website.home') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Services
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('contact.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Contact Us
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Blog & News
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Our Services</h2>

                        <ul class="list-unstyled footer-widget__links">
                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Web Development
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Web Applications
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Software Development
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    App Development
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('our-services.index') }}">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Digital Marketing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Contact Us</h2>

                        <ul class="list-unstyled footer-widget__info">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Pune, Maharashtra, India</span>
                            </li>

                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+919876543210">
                                    +91 98765 43210
                                </a>
                            </li>

                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:info@digitalwebt.com">
                                    info@digitalwebt.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">

                <p class="main-footer__copyright">
                    &copy; Copyright
                    <span class="dynamic-year"></span>
                    Digital Web. All Rights Reserved.
                </p>

                <ul class="main-footer__bottom__menu">
                    <li>
                        <a href="#">Terms &amp; Conditions</a>
                    </li>

                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
    </div>
    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-flipster-master/jquery.flipster.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/growim.js') }}"></script>
</body>

</html>