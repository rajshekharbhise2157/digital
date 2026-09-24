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
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css') }}">
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
        <footer class="main-footer">

            <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>

            <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-1-shape-1.png);">
            </div>

            <!-- /.main-footer__bg -->

            <div class="main-footer__top">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-xl-4">

                            <div class="footer-widget footer-widget--about">

                                <a href="index.html" class="footer-widget__logo">

                                    <img src="assets/images/logo-light.png" width="160" alt="Growim HTML Template">

                                </a>

                                <p class="footer-widget__text">

                                    Nullam interdum libero vitae pretium aliquam donec nibh purus laoreet in ullamcorper
                                    vel malesuada sit amet enim.

                                </p>

                                <a class="growim-btn growim-btn--white" href="contact.html">

                                    <span class="growim-btn__text">Contact Us</span>

                                    <span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span>

                                </a>

                                <div class="footer-widget__social">

                                    <p class="footer-widget__social__text">Follow on</p>

                                    <a href="https://facebook.com">

                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>

                                        <span class="sr-only">Facebook</span>

                                    </a>

                                    <a href="https://twitter.com">

                                        <i class="fab fa-twitter" aria-hidden="true"></i>

                                        <span class="sr-only">Twitter</span>

                                    </a>

                                    <a href="https://www.linkedin.com/">

                                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>

                                        <span class="sr-only">Linkedin</span>

                                    </a>

                                    <a href="https://youtube.com">

                                        <i class="fab fa-youtube" aria-hidden="true"></i>

                                        <span class="sr-only">Youtube</span>

                                    </a>

                                </div><!-- /.footer-widget__social -->

                            </div><!-- /.footer-widget -->

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-2">

                            <div class="footer-widget">

                                <h2 class="footer-widget__title">Quick Link</h2><!-- /.footer-widget__title -->

                                <ul class="list-unstyled footer-widget__links">

                                    <li><a href="about.html">Growim About</a></li>

                                    <li><a href="contact.html">Contact Us</a></li>

                                    <li><a href="blog-list-right.html">Blog & News</a></li>

                                    <li><a href="faq.html">FAQ’S</a></li>

                                    <li><a href="login.html">Login / Register</a></li>

                                </ul><!-- /.list-unstyled footer-widget__links -->

                            </div><!-- /.footer-widget -->

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-2">

                            <div class="footer-widget footer-widget--links">

                                <h2 class="footer-widget__title">our services</h2><!-- /.footer-widget__title -->

                                <ul class="list-unstyled footer-widget__links">

                                    <li><a href="about.html">digital marketing</a></li>

                                    <li><a href="contact.html">web development</a></li>

                                    <li><a href="blog-list-right.html">SEO optimized</a></li>

                                    <li><a href="faq.html">App Development</a></li>

                                    <li><a href="login.html">Email Marketing</a></li>

                                </ul><!-- /.list-unstyled footer-widget__links -->

                            </div><!-- /.footer-widget -->

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-4">

                            <div class="footer-widget footer-widget--contact">

                                <h2 class="footer-widget__title">contact us</h2><!-- /.footer-widget__title -->

                                <ul class="list-unstyled footer-widget__info">

                                    <li><i class="flaticon-pin"></i>Gregory Cartwright, 4059 Carling Avenue, Ugglebarnby
                                        YO22 3NJ</li>

                                    <li><i class="flaticon-phone"></i><a href="tel:+61086660112">+6108-666-0112</a></li>

                                    <li><i class="flaticon-email"></i><a href="mailto:info@gmail.com">info@gmail.com</a>
                                    </li>

                                </ul><!-- /.list-unstyled -->

                            </div><!-- /.footer-widget -->

                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->

                </div><!-- /.container -->

            </div><!-- /.main-footer__top -->

            <div class="main-footer__bottom">

                <div class="container">

                    <div class="main-footer__bottom__inner">

                        <p class="main-footer__copyright">

                            &copy; Copyright <span class="dynamic-year"></span> by Growim HTML Template.

                        </p>

                        <ul class="main-footer__bottom__menu">

                            <li><a href="checkout.html">Terms & Conditions</a></li>

                            <li><a href="contact.html">Privacy Policy</a></li>

                        </ul>

                    </div><!-- /.main-footer__inner -->

                </div><!-- /.container -->

            </div><!-- /.main-footer__bottom -->

        </footer><!-- /.main-footer -->
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