@extends('Website.layout.app')

@section('title', 'Digital Web | Digital Marketing & Web Development')

@section(
'meta_description',
'Digital Web provides professional digital marketing, web development, SEO, creative design and technology solutions for
modern businesses.'
)

@section('content')
<section class="main-banner-one">
    <div class="main-banner-one__bg"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/main-banner-bg-1.png') }}');"></div>

    <div class="main-banner-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-1.png') }}');"></div>

    <div class="main-banner-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-2.png') }}');"></div>

    <div class="main-banner-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-3.png') }}');"></div>

    <div class="main-banner-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-4.png') }}');"></div>

    <div class="main-banner-one__shape-five"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-5.png') }}');"></div>

    <div class="main-banner-one__shape-six"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-6.png') }}');"></div>

    <div class="main-banner-one__shape-seven"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-7.png') }}');"></div>

    <div class="main-banner-one__shape-eight"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-8.png') }}');"></div>

    <div class="main-banner-one__shape-nine"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-1-shape-9.png') }}');"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 d-flex align-items-center">
                <div class="main-banner-one__content">
                    <h5 class="main-banner-one__sub-title wow fadeInUp animated" data-wow-delay="50ms">
                        DIGITAL MARKETING AGENCY
                    </h5>

                    <h2 class="main-banner-one__title wow fadeInUp animated" data-wow-delay="100ms">
                        we’re the top <br>agency in <br>town
                    </h2>

                    <div class="main-banner-one__btn wow fadeInUp animated" data-wow-delay="150ms">
                        <a class="growim-btn" href="">
                            <span class="growim-btn__text">View Services</span>
                            <span class="growim-btn__icon">
                                <i class="flaticon-up-right-arrow"></i>
                            </span>
                        </a>

                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            play reel
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="main-banner-one__image wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="main-banner-one__image__bg"
                        style="background-image: url('{{ asset('frontend/assets/images/shapes/banner-image-bg.png') }}');">
                    </div>

                    <img src="{{ asset('frontend/assets/images/resources/banner-image-1.png') }}" alt="Digital Web">

                    <div class="main-banner-one__image__clients wow fadeInUp animated" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-1.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-2.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-3.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-4.png') }}" alt="Digital Web">
                        <span>1.5k Happy Clients</span>
                    </div>

                    <div class="main-banner-one__image__customer wow fadeInUp animated" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/shapes/check.png') }}" alt="Digital Web">

                        <span>90%</span> Happy Client

                        <div class="main-banner-one__image__customer__angle">
                            <img src="{{ asset('frontend/assets/images/shapes/angle.png') }}" alt="Digital Web">
                        </div>
                    </div>

                    <div class="main-banner-one__image__report wow fadeInUp animated" data-wow-delay="400ms">
                        <p class="main-banner-one__image__report__text">monthly traffic</p>

                        <h5 class="main-banner-one__image__report__number">
                            220,342.76<span>+3.4%</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="client-carousel ">

    <div class="container">

        <h5 class="client-carousel__title">Trusted Partners</h5>

        <div class="client-carousel__one growim-owl__carousel owl-theme owl-carousel owl-loaded owl-drag"
            data-owl-options="{

            &quot;items&quot;: 5,

            &quot;margin&quot;: 65,

            &quot;smartSpeed&quot;: 700,

            &quot;loop&quot;:true,

            &quot;autoplay&quot;: 6000,

            &quot;nav&quot;:false,

            &quot;dots&quot;:false,

            &quot;navText&quot;: [&quot;&lt;span class=\&quot;fa fa-angle-left\&quot;&gt;&lt;/span&gt;&quot;,&quot;&lt;span class=\&quot;fa fa-angle-right\&quot;&gt;&lt;/span&gt;&quot;],

            &quot;responsive&quot;:{

                &quot;0&quot;:{

                    &quot;items&quot;:3,

                    &quot;margin&quot;: 0

                },

                &quot;500&quot;:{

                    &quot;items&quot;:4,

                    &quot;margin&quot;: 30

                },

                &quot;768&quot;:{

                    &quot;items&quot;:5,

                    &quot;margin&quot;: 40

                },

                &quot;992&quot;:{

                    &quot;items&quot;: 6,

                    &quot;margin&quot;: 40

                },

                &quot;1200&quot;:{

                    &quot;items&quot;: 8,

                    &quot;margin&quot;: 45

                }

            }

            }">

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <!-- /.owl-slide-item-->

            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-2278px, 0px, 0px); transition: 0.7s; width: 3645px;">
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-1.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-2.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-3.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-4.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-5.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-6.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-7.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-8.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-1.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-2.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-3.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-4.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-5.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-6.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-7.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-8.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-1.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-2.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-3.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-4.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-5.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-6.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-7.png') }}" alt="growim">

                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 106.875px; margin-right: 45px;">
                        <div class="client-carousel__one__item">

                            <img src="{{ asset('frontend/assets/images/resources/brand-1-8.png') }}" alt="growim">

                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"
                    aria-label="carousel button"><span class="fa fa-angle-left"></span></button><button type="button"
                    role="presentation" class="owl-next" aria-label="carousel button"><span
                        class="fa fa-angle-right"></span></button></div>
            <div class="owl-dots disabled"></div>
        </div><!-- /.thm-owl__slider -->

    </div><!-- /.container -->

</div>

<section class="feature-one">
    <div class="container">
        <ul class="feature-one__list">
            <li class="feature-one__item">
                <div class="feature-one__item__img">
                    <img src="{{ asset('frontend/assets/images/shapes/feature-1-1.png') }}" alt="Digital Web">
                </div>

                <p class="feature-one__item__text">
                    <span>Trusted By</span> 250,000 Business
                </p>
            </li>

            <li class="feature-one__item">
                <div class="feature-one__item__img">
                    <img src="{{ asset('frontend/assets/images/shapes/feature-1-2.png') }}" alt="Digital Web">
                </div>

                <p class="feature-one__item__text">
                    <span>Rated 4.9/5</span> From Over 600 Reviews
                </p>
            </li>
        </ul>
    </div>
</section>

<!-- Feature Start -->

<section class="about-one">
    <div class="about-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-1.png') }}');"></div>
    <div class="about-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-2.png') }}');"></div>
    <div class="about-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-3.png') }}');"></div>
    <div class="about-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-4.png') }}');"></div>
    <div class="about-one__shape-five"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-5.png') }}');"></div>
    <div class="about-one__shape-six"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-6.png') }}');"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft animated" data-wow-delay="100ms">
                <div class="about-one__content">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline">About Us</h6>
                        <h3 class="sec-title__title">We’re Strategic Digital Marketing Agency</h3>
                    </div>

                    <p class="about-one__content__text">
                        In order to scale new customer acquisition and retention for e-commerce brands, we work across
                        the entire customer journey. Our team has a successful track record of helping brands scale
                    </p>

                    <ul class="about-one__list">
                        <li>
                            <div class="about-one__list__icon">
                                <img src="{{ asset('frontend/assets/images/shapes/about-1-icon-1.png') }}"
                                    alt="Digital Web">
                            </div>

                            <div class="about-one__list__content">
                                <h3 class="about-one__list__number">94%</h3>
                                <p class="about-one__list__text">Sms Marketing</p>
                            </div>
                        </li>

                        <li>
                            <div class="about-one__list__icon">
                                <img src="{{ asset('frontend/assets/images/shapes/about-1-icon-2.png') }}"
                                    alt="Digital Web">
                            </div>

                            <div class="about-one__list__content">
                                <h3 class="about-one__list__number">65%</h3>
                                <p class="about-one__list__text">Cover Marketing</p>
                            </div>
                        </li>
                    </ul>

                    <a class="growim-btn" href="">
                        <span class="growim-btn__text">About Us</span>
                        <span class="growim-btn__icon">
                            <i class="flaticon-up-right-arrow"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-one__image wow fadeInRight animated" data-wow-delay="200ms">
                    <div class="about-one__image__bg"
                        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-image-bg.png') }}');">
                    </div>

                    <img src="{{ asset('frontend/assets/images/resources/about-1-1.png') }}" alt="Digital Web">

                    <div class="about-one__image__clients wow fadeInUp animated" data-wow-delay="400ms">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-1.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-2.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-3.png') }}" alt="Digital Web">
                        <img src="{{ asset('frontend/assets/images/resources/client-1-4.png') }}" alt="Digital Web">
                        <span>1.5k Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature End -->

<section class="service-three">
    <div class="service-three__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-1.png') }}');"></div>
    <div class="service-three__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-2.png') }}');"></div>
    <div class="service-three__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-3-bg.png') }}');"></div>

    <div class="sec-title text-center">
        <h6 class="sec-title__tagline">our services</h6>
        <h3 class="sec-title__title">Explore All Our Presentation<br> Digital Services</h3>
    </div>

    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="service-three__item">
                    <div class="service-three__item__image">
                        <img src="{{ asset('frontend/assets/images/shapes/service-3-1.png') }}" alt="Digital Web">
                    </div>
                    <h3 class="service-three__item__title">
                        <a href="">Brand Design <br>Identity</a>
                    </h3>
                    <p class="service-three__item__text">
                        In order to scale new customer
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="service-three__item">
                    <div class="service-three__item__image">
                        <img src="{{ asset('frontend/assets/images/shapes/service-3-2.png') }}" alt="Digital Web">
                    </div>
                    <h3 class="service-three__item__title">
                        <a href="">Video Search <br>Optimization</a>
                    </h3>
                    <p class="service-three__item__text">
                        In order to scale new customer
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="service-three__item">
                    <div class="service-three__item__image">
                        <img src="{{ asset('frontend/assets/images/shapes/service-3-3.png') }}" alt="Digital Web">
                    </div>
                    <h3 class="service-three__item__title">
                        <a href="">Keyword Research &amp; <br>Optimization</a>
                    </h3>
                    <p class="service-three__item__text">
                        In order to scale new customer
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Service Start -->

<section class="service-one">
    <div class="service-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-1-shape-1.png') }}');"></div>
    <div class="service-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-1-shape-2.png') }}');"></div>
    <div class="service-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-1-shape-3.png') }}');"></div>
    <div class="service-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-1-shape-4.png') }}');"></div>
    <div class="service-one__shape-five"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/service-1-shape-5.png') }}');"></div>

    <div class="container tabs-box">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Our Services</h6>
            <h3 class="sec-title__title">Our Services Solve Any<br>Business Problem</h3>
        </div>

        <ul class="list-unstyled tab-buttons service-one__tabs">
            <li data-tab="#building" class="tab-btn">Link Building</li>
            <li data-tab="#SEO" class="tab-btn active-btn">SEO</li>
            <li data-tab="#media" class="tab-btn">Paid Media</li>
            <li data-tab="#branding" class="tab-btn">Branding & Content</li>
            <li data-tab="#creative" class="tab-btn">Web Dev & Creative</li>
            <li data-tab="#ecommerce" class="tab-btn">Ecommerce</li>
        </ul>

        <div class="tabs-content">
            @foreach ([
            'building' => 'Link Building',
            'SEO' => 'SEO',
            'media' => 'Paid Media',
            'branding' => 'Branding & Content',
            'creative' => 'Web Dev & Creative',
            'ecommerce' => 'Ecommerce'
            ] as $tabId => $tabName)
            <div class="tab fadeInUp animated {{ $tabId === 'SEO' ? 'active-tab' : '' }}" id="{{ $tabId }}">
                <div class="row gutter-y-30">
                    @foreach ([
                    [
                    'image' => 'service-1-1.png',
                    'hover' => 'service-1-1-hover.png',
                    'title' => 'Keyword Research & Optimization'
                    ],
                    [
                    'image' => 'service-1-2.png',
                    'hover' => 'service-1-2-hover.png',
                    'title' => 'Video Search Optimization'
                    ],
                    [
                    'image' => 'service-1-3.png',
                    'hover' => 'service-1-3-hover.png',
                    'title' => 'E-commerce SEO Optimization'
                    ],
                    [
                    'image' => 'service-1-4.png',
                    'hover' => 'service-1-4-hover.png',
                    'title' => 'Link Building Optimization'
                    ]
                    ] as $service)
                    <div class="col-xl-3 col-md-6">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__wrapper">
                                <div class="service-one__item__hover"
                                    style="background-image: url('{{ asset('frontend/assets/images/resources/' . $service['hover']) }}');">
                                </div>

                                <div class="service-one__item__icon"
                                    style="background-image: url('{{ asset('frontend/assets/images/shapes/service-icon-bg.png') }}');">
                                    <img src="{{ asset('frontend/assets/images/shapes/' . $service['image']) }}"
                                        alt="Digital Web">
                                </div>

                                <h3 class="service-one__item__title">
                                    <a href="">service tittle</a>
                                </h3>

                                <p class="service-one__item__text">
                                    We can help you & routine audits to determine an SEO market
                                </p>

                                <a class="service-one__item__rm" href="">
                                    <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z" />
                                    </svg>
                                    <i class="flaticon-up-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Service End -->
<section class="work-process-one">
    <div class="container">
        <div class="work-process-one__top">
            <div class="sec-title text-left">
                <h6 class="sec-title__tagline">Work Process</h6>
                <h3 class="sec-title__title">Our Professional<br> Work Process</h3>
            </div>

            <div class="work-process-one__circle">
                <img src="{{ asset('frontend/assets/images/shapes/video-text.png') }}" alt="Digital Web">
                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>

        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                <div class="work-process-one__item">
                    <div class="work-process-one__item__number">25<span>%</span></div>
                    <h3 class="work-process-one__item__title">Make Some Research</h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="work-process-one__item">
                    <div class="work-process-one__item__number">75<span>%</span></div>
                    <h3 class="work-process-one__item__title">Wireframes &amp; User-flows</h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="work-process-one__item">
                    <div class="work-process-one__item__number">100<span>%</span></div>
                    <h3 class="work-process-one__item__title">Hi-Fidelity&amp; Visuals design</h3>
                </div>
            </div>
        </div>

        <div class="work-process-one__bottom wow fadeInUp" data-wow-delay="300ms"
            style="background-image: url('{{ asset('frontend/assets/images/backgrounds/work-process-one-bottom-bg.jpg') }}');">
            <div class="work-process-one__bottom__title">Digital <span>Solutions</span></div>
            <a class="growim-btn" href="">
                <span class="growim-btn__text">view all service</span>
                <span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span>
            </a>
        </div>
    </div>
</section>
<section class="about-three">
    <div class="about-three__bg"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-3-bg.png') }}');"></div>
    <div class="about-three__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-3-shape-1.png') }}');"></div>
    <div class="about-three__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/about-3-shape-2.png') }}');"></div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-three__image-wrapper wow fadeInLeft" data-wow-delay="100ms">
                    <div class="about-three__image">
                        <img src="{{ asset('frontend/assets/images/resources/about-3-1.png') }}" alt="Digital Web">
                    </div>

                    <div class="about-three__image-wrapper__shape-one">
                        <img src="{{ asset('frontend/assets/images/shapes/about-image-shape-1.png') }}"
                            alt="Digital Web">
                    </div>

                    <div class="about-three__image-wrapper__shape-two">
                        <img src="{{ asset('frontend/assets/images/resources/about-3-2.jpg') }}" alt="Digital Web">
                    </div>

                    <div class="about-three__image-wrapper__shape-three">
                        <img src="{{ asset('frontend/assets/images/shapes/about-image-shape-2.png') }}"
                            alt="Digital Web">
                    </div>

                    <div class="about-three__image-wrapper__rating">
                        <div class="about-three__image-wrapper__rating__star">
                            <i class="flaticon-star"></i>
                        </div>
                        <h5 class="about-three__image-wrapper__rating__title">5 Stars</h5>
                        <p class="about-three__image-wrapper__rating__text">
                            Read Our <a href="">Success Stories</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 d-flex align-items-center wow fadeInRight" data-wow-delay="200ms">
                <div class="about-three__content">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline">About Us</h6>
                        <h3 class="sec-title__title">We’re Strategic Digital Marketing Agency</h3>
                    </div>

                    <p class="about-three__content__text">
                        In order to scale new customer acquisition and retention for e-commerce brands, we work
                        across the entire customer journey. Our team has a successful track record of helping brands
                        scale
                    </p>

                    <ul class="about-three__list">
                        <li>
                            <i class="flaticon-check-two"></i>
                            Various analysis options.
                        </li>
                        <li>
                            <i class="flaticon-check-two"></i>
                            Page Load (time, size, number of requests).
                        </li>
                        <li>
                            <i class="flaticon-check-two"></i>
                            Advance Data analysis operation.
                        </li>
                    </ul>

                    <a class="growim-btn" href="">
                        <span class="growim-btn__text">About Us</span>
                        <span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-one">
    <div class="why-choose-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-1-shape-1.png') }}');"></div>

    <div class="why-choose-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-1-shape-2.png') }}');"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-one__image wow fadeInUp" data-wow-delay="100ms">
                    <div class="why-choose-one__image__bg"
                        style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-image-bg.png') }}');">
                    </div>

                    <img src="{{ asset('frontend/assets/images/resources/why-choose-image-1.png') }}" alt="Digital Web">
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center wow fadeInRight" data-wow-delay="200ms">
                <div class="why-choose-one__content">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline">Why Choose Us</h6>

                        <h3 class="sec-title__title">Why You Need Digital Marketing</h3>
                    </div>

                    <p class="why-choose-one__text">
                        Facilisis leo vel fringilla est ullamcorper. Posuere urna nec tincidunt praesent semper feugiat
                        nibh sed. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Ac turpis
                        egestas maecenas pharetra convallis posuere morbi.
                    </p>

                    <div class="why-choose-one__progress">
                        <h4 class="why-choose-one__progress__title">Traffic Increase</h4>

                        <div class="why-choose-one__progress__bar">
                            <div class="why-choose-one__progress__inner count-bar" data-percent="90%">
                                <div class="why-choose-one__progress__number count-text">90%</div>
                            </div>
                        </div>
                    </div>

                    <div class="why-choose-one__progress">
                        <h4 class="why-choose-one__progress__title">Business Growth</h4>

                        <div class="why-choose-one__progress__bar">
                            <div class="why-choose-one__progress__inner count-bar" data-percent="95%">
                                <div class="why-choose-one__progress__number count-text">95%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="portfolio-one">
    <div class="portfolio-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-1.png') }}');"></div>
    <div class="portfolio-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-2.png') }}');"></div>
    <div class="portfolio-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-3.png') }}');"></div>
    <div class="portfolio-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-4.png') }}');"></div>
    <div class="portfolio-one__shape-five"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-5.png') }}');"></div>
    <div class="portfolio-one__shape-six"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/portfolio-1-shape-6.png') }}');"></div>

    <h5 class="portfolio-one__title">Latest Work</h5>

    <div class="portfolio-one__slide-text wow fadeInUp animated" data-wow-delay="100ms">
        <ul class="portfolio-one__slide-text__list list-unstyled">
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>DEVELOPMENT</li>
            <li>Marketing Agency</li>
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>DEVELOPMENT</li>
            <li>Marketing Agency</li>
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>DEVELOPMENT</li>
            <li>Marketing Agency</li>
        </ul>
    </div>

    <div class="container">
        <div class="portfolio-one__item hover-item">
            <div class="portfolio-one__item__content">
                <h3 class="portfolio-one__item__title">Generation Of Wealth</h3>
                <h5 class="portfolio-one__item__cate">Marketing</h5>

                <p class="portfolio-one__item__text">
                    There are many variations of passages of Lorem Ipsum available, but the <br>
                    majority have suffered alteration in some form, by injected humor.
                </p>
            </div>

            <div class="portfolio-one__item__btn">
                <a class="growim-btn growim-btn--white" href="">
                    <span class="growim-btn__text">View Portfolio</span>
                    <span class="growim-btn__icon">
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </a>
            </div>

            <div class="hover-item__box">
                <img src="{{ asset('frontend/assets/images/portfolio/portfolio-1-1.jpg') }}" alt="Digital Web"
                    class="hover-item__box-img">
            </div>
        </div>

        <div class="portfolio-one__item hover-item">
            <div class="portfolio-one__item__content">
                <h3 class="portfolio-one__item__title">Creative Digital Campaign</h3>
                <h5 class="portfolio-one__item__cate">Branding</h5>

                <p class="portfolio-one__item__text">
                    There are many variations of passages of Lorem Ipsum available, but the <br>
                    majority have suffered alteration in some form, by injected humor.
                </p>
            </div>

            <div class="portfolio-one__item__btn">
                <a class="growim-btn growim-btn--white" href="">
                    <span class="growim-btn__text">View Portfolio</span>
                    <span class="growim-btn__icon">
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </a>
            </div>

            <div class="hover-item__box">
                <img src="{{ asset('frontend/assets/images/portfolio/portfolio-1-2.jpg') }}" alt="Digital Web"
                    class="hover-item__box-img">
            </div>
        </div>

        <div class="portfolio-one__item hover-item">
            <div class="portfolio-one__item__content">
                <h3 class="portfolio-one__item__title">Best Content Creation</h3>
                <h5 class="portfolio-one__item__cate">Agency</h5>

                <p class="portfolio-one__item__text">
                    There are many variations of passages of Lorem Ipsum available, but the <br>
                    majority have suffered alteration in some form, by injected humor.
                </p>
            </div>

            <div class="portfolio-one__item__btn">
                <a class="growim-btn growim-btn--white" href="">
                    <span class="growim-btn__text">View Portfolio</span>
                    <span class="growim-btn__icon">
                        <i class="flaticon-up-right-arrow"></i>
                    </span>
                </a>
            </div>

            <div class="hover-item__box">
                <img src="{{ asset('frontend/assets/images/portfolio/portfolio-1-3.jpg') }}" alt="Digital Web"
                    class="hover-item__box-img">
            </div>
        </div>
    </div>
</section>



<section class="package-one">
    <div class="package-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/package-1-shape-1.png') }}');"></div>
    <div class="package-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/package-1-shape-2.png') }}');"></div>
    <div class="package-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/package-1-shape-3.png') }}');"></div>
    <div class="package-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/package-1-shape-4.png') }}');"></div>

    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">OUR PRICING PLAN</h6>
            <h3 class="sec-title__title">Choose Your Pricing Plan</h3>
        </div>

        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                <div class="package-one__item">
                    <div class="package-one__item__inner">
                        <div class="package-one__item__price">$49 <span>Par month</span></div>
                        <h5 class="package-one__item__title">Business</h5>
                        <p class="package-one__item__text">
                            Integer sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                        </p>
                        <ul class="package-one__item__list">
                            <li><i class="flaticon-check"></i>Branding and design Identity</li>
                            <li><i class="flaticon-check"></i>Web site Marketing Solutions</li>
                            <li><i class="flaticon-check"></i>Setup & Onboarding</li>
                            <li><i class="flaticon-check"></i>24/7 system Monitoring</li>
                            <li><i class="flaticon-check"></i>Awesome Consulting</li>
                        </ul>
                        <a class="growim-btn" href="">
                            <span class="growim-btn__text">Get The Plan Nows</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="package-one__item">
                    <div class="package-one__item__inner">
                        <div class="package-one__item__price">$99 <span>Par month</span></div>
                        <h5 class="package-one__item__title">Company</h5>
                        <p class="package-one__item__text">
                            Integer sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                        </p>
                        <ul class="package-one__item__list">
                            <li><i class="flaticon-check"></i>Branding and design Identity</li>
                            <li><i class="flaticon-check"></i>Web site Marketing Solutions</li>
                            <li><i class="flaticon-check"></i>Setup & Onboarding</li>
                            <li><i class="flaticon-check"></i>24/7 system Monitoring</li>
                            <li><i class="flaticon-check"></i>Awesome Consulting</li>
                        </ul>
                        <a class="growim-btn" href="">
                            <span class="growim-btn__text">Get The Plan Nows</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="package-one__item">
                    <div class="package-one__item__inner">
                        <div class="package-one__item__price">$149 <span>Par month</span></div>
                        <h5 class="package-one__item__title">Agency</h5>
                        <p class="package-one__item__text">
                            Integer sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                        </p>
                        <ul class="package-one__item__list">
                            <li><i class="flaticon-check"></i>Branding and design Identity</li>
                            <li><i class="flaticon-check"></i>Web site Marketing Solutions</li>
                            <li><i class="flaticon-check"></i>Setup & Onboarding</li>
                            <li><i class="flaticon-check"></i>24/7 system Monitoring</li>
                            <li><i class="flaticon-check"></i>Awesome Consulting</li>
                        </ul>
                        <a class="growim-btn" href="">
                            <span class="growim-btn__text">Get The Plan Nows</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team-one">
    <div class="team-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/team-1-shape-1.png') }}');"></div>
    <div class="team-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/blog-1-shape-1.png') }}');"></div>
    <div class="team-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/team-1-shape-3.png') }}');"></div>
    <div class="team-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/team-1-shape-4.png') }}');"></div>
    <div class="team-one__shape-five"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/team-1-shape-5.png') }}');"></div>
    <div class="team-one__shape-six"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/team-1-shape-6.png') }}');"></div>

    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Our Team</h6>
            <h3 class="sec-title__title">Make Brand Identities From<br> Scratch And Help</h3>
        </div>

        <div class="team-one__carousel growim-owl__carousel growim-owl__carousel--with-shadow growim-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
                "items": 1,
                "margin": 30,
                "loop": false,
                "smartSpeed": 700,
                "nav": true,
                "navText": ["<span class=\"flaticon-long-arrow-left\"></span>","<span class=\"flaticon-long-arrow-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "500": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    },
                    "1200": {
                        "items": 4
                    }
                }
            }'>
            <div class="item">
                <div class="team-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                    <div class="team-card__image">
                        <img src="{{ asset('frontend/assets/images/team/team-1-1.jpg') }}" alt="Digital Web">
                    </div>
                    <div class="team-card__content">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="flaticon-share"></i>
                                <div class="team-card__social__list">
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
                                </div>
                            </div>
                        </div>
                        <h3 class="team-card__title">
                            <a href="#">Wade Warren</a>
                        </h3>
                        <p class="team-card__designation">Marketing</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="team-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="team-card__image">
                        <img src="{{ asset('frontend/assets/images/team/team-1-2.jpg') }}" alt="Digital Web">
                    </div>
                    <div class="team-card__content">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="flaticon-share"></i>
                                <div class="team-card__social__list">
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
                                </div>
                            </div>
                        </div>
                        <h3 class="team-card__title">
                            <a href="#">Robert Fox</a>
                        </h3>
                        <p class="team-card__designation">Web Developer</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="team-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="team-card__image">
                        <img src="{{ asset('frontend/assets/images/team/team-1-3.jpg') }}" alt="Digital Web">
                    </div>
                    <div class="team-card__content">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="flaticon-share"></i>
                                <div class="team-card__social__list">
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
                                </div>
                            </div>
                        </div>
                        <h3 class="team-card__title">
                            <a href="#">Jenny Wilson</a>
                        </h3>
                        <p class="team-card__designation">Branding</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="team-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="team-card__image">
                        <img src="{{ asset('frontend/assets/images/team/team-1-4.jpg') }}" alt="Digital Web">
                    </div>
                    <div class="team-card__content">
                        <div class="team-card__hover">
                            <div class="team-card__social">
                                <i class="flaticon-share"></i>
                                <div class="team-card__social__list">
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
                                </div>
                            </div>
                        </div>
                        <h3 class="team-card__title">
                            <a href="#">Jacob Jones</a>
                        </h3>
                        <p class="team-card__designation">Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="testimonials-one">
    <div class="testimonials-one__shape-one"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/testimonials-1-shape-1.png') }}');"></div>
    <div class="testimonials-one__shape-two"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/testimonials-1-shape-2.png') }}');"></div>
    <div class="testimonials-one__shape-three"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/testimonials-1-shape-3.png') }}');"></div>
    <div class="testimonials-one__shape-four"
        style="background-image: url('{{ asset('frontend/assets/images/shapes/testimonials-1-shape-4.png') }}');"></div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="testimonials-one__image">
                    <div class="testimonials-one__image__bg"
                        style="background-image: url('{{ asset('frontend/assets/images/shapes/testimonial-1-image-bg.png') }}');">
                    </div>
                    <img src="{{ asset('frontend/assets/images/resources/testimonial-1-image.png') }}"
                        alt="Digital Web">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonials-one__area">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline">Testimonials</h6>
                        <h3 class="sec-title__title">Our Services Solve Any</h3>
                    </div>

                    <div class="testimonials-one__carousel growim-owl__carousel owl-carousel" data-owl-options='{
                            "items": 1,
                            "margin": 0,
                            "loop": false,
                            "smartSpeed": 700,
                            "nav": false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "dots": false,
                            "autoplay": true
                        }'>
                        <div class="item">
                            <div class="testimonials-one__item">
                                <div class="testimonials-one__item__rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>

                                <div class="testimonials-one__item__content">
                                    Sed ante elit, fringilla vitae laoreet sit amet, tempus et libero. Lorem ipsum dolor
                                    sit amet,
                                    consectetur adipiscing elit. Fusce eget quam quis turpis lacinia euismod cursus in
                                    arcu.
                                    Integer a purus dolor. Pellentesque finibus ut erat in sagittis. Sed semper
                                    dignissim
                                </div>

                                <div class="testimonials-one__item__author">
                                    <img src="{{ asset('frontend/assets/images/resources/testi-1-1.jpg') }}"
                                        alt="Digital Web">
                                    <h3 class="testimonials-one__item__name">Ronald Richards</h3>
                                    <p class="testimonials-one__item__designation">Co, Founder</p>
                                </div>

                                <div class="testimonials-one__item__quote">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonials-one__item">
                                <div class="testimonials-one__item__rating">
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                </div>

                                <div class="testimonials-one__item__content">
                                    Sed ante elit, fringilla vitae laoreet sit amet, tempus et libero. Lorem ipsum dolor
                                    sit amet,
                                    consectetur adipiscing elit. Fusce eget quam quis turpis lacinia euismod cursus in
                                    arcu.
                                    Integer a purus dolor. Pellentesque finibus ut erat in sagittis. Sed semper
                                    dignissim
                                </div>

                                <div class="testimonials-one__item__author">
                                    <img src="{{ asset('frontend/assets/images/resources/testi-1-1.jpg') }}"
                                        alt="Digital Web">
                                    <h3 class="testimonials-one__item__name">Ronald Richards</h3>
                                    <p class="testimonials-one__item__designation">Co, Founder</p>
                                </div>

                                <div class="testimonials-one__item__quote">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slide-text">
    <div class="slide-text__wrap wow fadeInUp" data-wow-delay="100ms">
        <ul class="slide-text__list list-unstyled">
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>CLIENT FEEDBACK</li>
            <li>Marketing Agency</li>
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>CLIENT FEEDBACK</li>
            <li>Marketing Agency</li>
            <li>BRANDING</li>
            <li>MARKETING</li>
            <li>CLIENT FEEDBACK</li>
            <li>Marketing Agency</li>
        </ul>
    </div>
</section>
<section class="blog-one blog-one--home-three">

    <div class="container">

        <div class="blog-one__top">

            <div class="sec-title text-left">



                <h6 class="sec-title__tagline">our NEWS</h6><!-- /.sec-title__tagline -->



                <h3 class="sec-title__title">Recent Blog Posts</h3><!-- /.sec-title__title -->

            </div><!-- /.sec-title -->

            <a class="growim-btn" href="blog-list-right.html">

                <span class="growim-btn__text">View All News</span>

                <span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span>

            </a>

        </div>

        <div class="blog-one__carousel growim-owl__carousel growim-owl__carousel--with-shadow growim-owl__carousel--basic-nav owl-carousel owl-theme owl-loaded owl-drag"
            data-owl-options="{

				&quot;items&quot;: 1,

				&quot;margin&quot;: 30,

				&quot;loop&quot;: false,

				&quot;smartSpeed&quot;: 700,

				&quot;nav&quot;: true,

				&quot;navText&quot;: [&quot;&lt;span class=\&quot;flaticon-long-arrow-left\&quot;&gt;&lt;/span&gt;&quot;,&quot;&lt;span class=\&quot;flaticon-long-arrow-right\&quot;&gt;&lt;/span&gt;&quot;],

				&quot;dots&quot;: false,

				&quot;autoplay&quot;: false,

				&quot;responsive&quot;: {

					&quot;0&quot;: {

						&quot;items&quot;: 1

					},

					&quot;768&quot;: {

						&quot;items&quot;: 2

					},

					&quot;992&quot;: {

						&quot;items&quot;: 3

					}

				}

			}">

            <!-- /.item -->

            <!-- /.item -->

            <!-- /.item -->

            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1200px;">
                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                        <div class="item">

                            <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms"
                                data-wow-delay="00ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">

                                <div class="blog-card__image">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-1.png') }}"
                                        alt="Business strategy for marketing system">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-1.png') }}"
                                        alt="Business strategy for marketing system">

                                    <a href="blog-details-right.html" class="blog-card__image__link"><span
                                            class="sr-only">Business strategy for marketing system</span>

                                        <!-- /.sr-only --></a>

                                </div><!-- /.blog-card__image -->

                                <div class="blog-card__content">

                                    <div class="blog-card__meta">

                                        <a class="blog-card__meta__cat" href="blog-details-right.html">Business</a>

                                        <div class="blog-card__meta__date">March 24, 2024</div>
                                        <!-- /.blog-card__date -->

                                    </div>

                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Business
                                            strategy for marketing system</a></h3><!-- /.blog-card__title -->

                                    <div class="blog-card__bottom">

                                        <div class="blog-card__author">

                                            <img src="{{ asset('frontend/assets/images/blog/blog-author-1-1.jpg') }}"
                                                alt="growim">

                                            <div class="blog-card__author__content">

                                                <span><a href="blog-list-right.html">Admin</a></span>Cody Fisher

                                            </div>

                                        </div>

                                        <a href="blog-details-right.html" class="blog-card__link">

                                            <i class="fas fa-arrow-right"></i>

                                        </a><!-- /.blog-card__link -->

                                    </div>

                                </div><!-- /.blog-card__content -->

                            </div><!-- /.blog-card -->

                        </div>
                    </div>
                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                        <div class="item">

                            <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">

                                <div class="blog-card__image">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-2.png') }}"
                                        alt="Why is Supply Chain Visibility So Important?">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-2.png') }}"
                                        alt="Why is Supply Chain Visibility So Important?">

                                    <a href="blog-details-right.html" class="blog-card__image__link"><span
                                            class="sr-only">Why is Supply Chain Visibility So Important?</span>

                                        <!-- /.sr-only --></a>

                                </div><!-- /.blog-card__image -->

                                <div class="blog-card__content">

                                    <div class="blog-card__meta">

                                        <a class="blog-card__meta__cat" href="blog-details-right.html">Corporate</a>

                                        <div class="blog-card__meta__date">April 16, 2024</div>
                                        <!-- /.blog-card__date -->

                                    </div>

                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Why is Supply
                                            Chain Visibility So Important?</a></h3><!-- /.blog-card__title -->

                                    <div class="blog-card__bottom">

                                        <div class="blog-card__author">

                                            <img src="{{ asset('frontend/assets/images/blog/blog-author-1-1.jpg') }}"
                                                alt="growim">

                                            <div class="blog-card__author__content">

                                                <span><a href="blog-list-right.html">Admin</a></span>Cody Fisher

                                            </div>

                                        </div>

                                        <a href="blog-details-right.html" class="blog-card__link">

                                            <i class="fas fa-arrow-right"></i>

                                        </a><!-- /.blog-card__link -->

                                    </div>

                                </div><!-- /.blog-card__content -->

                            </div><!-- /.blog-card -->

                        </div>
                    </div>
                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                        <div class="item">

                            <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms"
                                data-wow-delay="200ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

                                <div class="blog-card__image">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-3.png') }}"
                                        alt="Discover a better way of redefining company goals">

                                    <img src="{{ asset('frontend/assets/images/blog/blog-1-3.png') }}"
                                        alt="Discover a better way of redefining company goals">

                                    <a href="blog-details-right.html" class="blog-card__image__link"><span
                                            class="sr-only">Discover a better way of redefining company
                                            goals</span>

                                        <!-- /.sr-only --></a>

                                </div><!-- /.blog-card__image -->

                                <div class="blog-card__content">

                                    <div class="blog-card__meta">

                                        <a class="blog-card__meta__cat" href="blog-details-right.html">Marketing</a>

                                        <div class="blog-card__meta__date">March 24, 2024</div>
                                        <!-- /.blog-card__date -->

                                    </div>

                                    <h3 class="blog-card__title"><a href="blog-details-right.html">Discover a
                                            better way of redefining company goals</a></h3>
                                    <!-- /.blog-card__title -->

                                    <div class="blog-card__bottom">

                                        <div class="blog-card__author">

                                            <img src="{{ asset('frontend/assets/images/blog/blog-author-1-1.jpg') }}"
                                                alt="growim">

                                            <div class="blog-card__author__content">

                                                <span><a href="blog-list-right.html">Admin</a></span>Cody Fisher

                                            </div>

                                        </div>

                                        <a href="blog-details-right.html" class="blog-card__link">

                                            <i class="fas fa-arrow-right"></i>

                                        </a><!-- /.blog-card__link -->

                                    </div>

                                </div><!-- /.blog-card__content -->

                            </div><!-- /.blog-card -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"
                    aria-label="carousel button"><span class="flaticon-long-arrow-left"></span></button><button
                    type="button" role="presentation" class="owl-next disabled" aria-label="carousel button"><span
                        class="flaticon-long-arrow-right"></span></button></div>
            <div class="owl-dots disabled"></div>
        </div><!-- /.row -->

    </div><!-- /.container -->

</section><!-- /.blog-one -->
<section class="mail-section">
    <div class="container">
        <div class="mail-section__inner wow fadeInUp">
            <div class="mail-section__shape-one"
                style="background-image: url('{{ asset('frontend/assets/images/shapes/mail-shape-1.png') }}');"></div>
            <div class="mail-section__shape-two"
                style="background-image: url('{{ asset('frontend/assets/images/shapes/mail-shape-2.png') }}');"></div>
            <div class="mail-section__shape-three"
                style="background-image: url('{{ asset('frontend/assets/images/shapes/mail-shape-3.png') }}');"></div>
            <div class="mail-section__shape-four"
                style="background-image: url('{{ asset('frontend/assets/images/shapes/mail-shape-4.png') }}');"></div>

            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="mail-section__image">
                        <img src="{{ asset('frontend/assets/images/resources/mail-1-1.png') }}" alt="Digital Web">
                    </div>
                </div>

                <div class="col-lg-7 col-xl-6">
                    <div class="mail-section__form">
                        <h3 class="mail-section__form__title">Subscribe To Our Newsletter!</h3>
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="mc-form">
                            <input type="text" name="EMAIL" placeholder="Enter Email Address">
                            <button type="submit" class="flaticon-paper-plan">
                                <span class="sr-only">submit</span>
                            </button>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">

    <span class="scroll-to-top__text">back top</span>

    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>

</a>

@endsection