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
                        <a class="growim-btn" href="{{ route('our-services.index') }}">
                            <span class="growim-btn__text">View Services</span>
                            <span class="growim-btn__icon">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
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
                    <a class="growim-btn" href="{{ route('about.index') }}">
                        <span class="growim-btn__text">About Us</span>
                        <span class="growim-btn__icon">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
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
    <div class="container tabs-box">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Our Services</h6>
            <h3 class="sec-title__title">Our Services Solve Any Business Problem</h3>
        </div>
        <ul class="list-unstyled tab-buttons service-one__tabs" id="serviceTabs">
            <li data-tab="#tab-web" class="tab-btn active-btn">Web Development</li>
            <li data-tab="#tab-app" class="tab-btn">Applications</li>
            <li data-tab="#tab-design" class="tab-btn">Design</li>
            <li data-tab="#tab-marketing" class="tab-btn">Digital Marketing</li>
        </ul>
        <div class="tabs-content" id="serviceTabContent">
            @php
            $services = [
            'tab-web' => [
            ['Website Development', 'Professional, responsive and high-performance websites designed to grow your
            business.', 'fa-solid fa-globe'],
            ['Laravel Development', 'Secure and scalable Laravel applications tailored to your business requirements.',
            'fa-brands fa-laravel'],
            ['E-Commerce Development', 'Powerful online stores with secure payment gateways and inventory management.',
            'fa-solid fa-cart-shopping'],
            ['API Development', 'Reliable APIs and third-party integrations for seamless business connectivity.',
            'fa-solid fa-code']
            ],
            'tab-app' => [
            ['Web Applications', 'Custom web applications designed to automate and simplify business operations.',
            'fa-solid fa-laptop-code'],
            ['Software Development', 'Innovative software solutions built for efficiency and business growth.',
            'fa-solid fa-gears'],
            ['Mobile App Development', 'Modern Android, iOS and cross-platform mobile application solutions.', 'fa-solid
            fa-mobile-screen-button'],
            ['CRM Solutions', 'Customized CRM systems for managing customers, leads and sales.', 'fa-solid
            fa-users-gear']
            ],
            'tab-design' => [
            ['UI/UX Design', 'Beautiful and intuitive user interfaces for exceptional digital experiences.', 'fa-solid
            fa-pen-ruler'],
            ['Branding', 'Creative brand identities that establish a strong and memorable presence.', 'fa-solid
            fa-palette'],
            ['Graphic Design', 'Professional graphics and marketing materials for your business.', 'fa-solid
            fa-object-group'],
            ['Logo Design', 'Unique and creative logo designs that represent your brand identity.', 'fa-solid
            fa-bezier-curve']
            ],
            'tab-marketing' => [
            ['Search Engine Optimization', 'Improve your search rankings and increase organic website traffic.',
            'fa-solid fa-magnifying-glass-chart'],
            ['Social Media Marketing', 'Engaging social media campaigns that grow your audience and brand.', 'fa-solid
            fa-bullhorn'],
            ['Google Ads', 'Targeted advertising campaigns designed to generate quality leads.', 'fa-brands fa-google'],
            ['Content Marketing', 'Strategic content that builds trust and increases customer engagement.', 'fa-solid
            fa-file-lines']
            ]
            ];
            @endphp
            @foreach($services as $tabId => $items)
            <div class="tab {{ $loop->first ? 'active-tab' : '' }}" id="{{ $tabId }}">
                <div class="row gutter-y-30">
                    @foreach($items as $service)
                    <div class="col-xl-3 col-md-6">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__wrapper">
                                <div class="service-one__item__icon"
                                    style="background-image: url('{{ asset('frontend/images/shapes/service-icon-bg.png') }}');">
                                    <i class="{{ $service[2] }}" style="font-size: 45px;"></i>
                                </div>
                                <h3 class="service-one__item__title">
                                    <a href="#contact">{{ $service[0] }}</a>
                                </h3>
                                <p class="service-one__item__text">{{ $service[1] }}</p>
                                <a class="service-one__item__rm"
                                    href="{{ route('contact.index') }}"
                                    aria-label="Enquire about {{ $service[0] }}">

                                    <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z" />
                                    </svg>

                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
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
            <a class="growim-btn" href="{{ route('our-services.index') }}">
                <span class="growim-btn__text">View All Services</span>
                <span class="growim-btn__icon">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </span>
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
                            <i class="fa-solid fa-circle-check"></i>
                            Various analysis options.
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Page Load (time, size, number of requests).
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Advance Data analysis operation.
                        </li>
                    </ul>
                    <a class="growim-btn" href="{{ route('about.index') }}">
                        <span class="growim-btn__text">About Us</span>
                        <span class="growim-btn__icon">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </span>
                    </a>
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
    <div class="row gutter-y-30">
        <div class="col-lg-8 wow fadeInUp" data-wow-delay="00ms">
            <div class="service-two__item">
                <div class="service-two__item__content">
                    <h3 class="service-two__item__title">
                        <a href="{{ route('our-services.index') }}">
                            Web Development
                        </a>
                    </h3>
                    <p class="service-two__item__text">
                        We create modern, responsive and high-performance websites that help businesses build a
                        strong digital presence and generate more opportunities.
                    </p>
                    <a class="service-two__item__rm"
                       href="{{ route('our-services.index') }}"
                       aria-label="View Web Development services">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <div class="service-two__item__number"></div>
                </div>

                <div class="service-two__item__image">
                    <img src="{{ asset('frontend/assets/images/resources/service-2-1.jpg') }}"
                         alt="Web Development">
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
            <div class="service-two__item service-two__item--no-image">
                <div class="service-two__item__content">
                    <h3 class="service-two__item__title">
                        <a href="{{ route('our-services.index') }}">
                            Web Applications
                        </a>
                    </h3>
                    <p class="service-two__item__text">
                        Powerful custom web applications built around your business processes, requirements and
                        customer needs.
                    </p>
                    <a class="service-two__item__rm"
                       href="{{ route('our-services.index') }}"
                       aria-label="View Web Application services">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <div class="service-two__item__number"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
            <div class="service-two__item service-two__item--no-image">
                <div class="service-two__item__content">
                    <h3 class="service-two__item__title">
                        <a href="{{ route('our-services.index') }}">
                            Software Development
                        </a>
                    </h3>
                    <p class="service-two__item__text">
                        Scalable software solutions designed to automate business operations, improve productivity
                        and simplify complex workflows.
                    </p>
                    <a class="service-two__item__rm"
                       href="{{ route('our-services.index') }}"
                       aria-label="View Software Development services">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <div class="service-two__item__number"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 wow fadeInUp" data-wow-delay="300ms">
            <div class="service-two__item">
                <div class="service-two__item__content">
                    <h3 class="service-two__item__title">
                        <a href="{{ route('our-services.index') }}">
                            Digital Marketing
                        </a>
                    </h3>
                    <p class="service-two__item__text">
                        Grow your brand with SEO, social media, paid advertising and creative digital marketing
                        strategies focused on measurable business growth.
                    </p>
                    <a class="service-two__item__rm"
                       href="{{ route('our-services.index') }}"
                       aria-label="View Digital Marketing services">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                    <div class="service-two__item__number"></div>
                </div>
                <div class="service-two__item__image">
                    <img src="{{ asset('frontend/assets/images/resources/service-2-4.jpg') }}"
                         alt="Digital Marketing">
                </div>
            </div>
        </div>
    </div>
    <div class="service-two__bottom wow fadeInUp"
         data-wow-delay="200ms"
         style="background-image: url('{{ asset('frontend/assets/images/backgrounds/service-two-bottom-bg.jpg') }}');">
        <div class="service-two__bottom__clients">
            <img src="{{ asset('frontend/assets/images/resources/client-1-1.png') }}" alt="Client">
            <img src="{{ asset('frontend/assets/images/resources/client-1-2.png') }}" alt="Client">
            <img src="{{ asset('frontend/assets/images/resources/client-1-3.png') }}" alt="Client">
            <img src="{{ asset('frontend/assets/images/resources/client-1-4.png') }}" alt="Client">
            <span>500+ Happy Clients</span>
        </div>
        <a class="growim-btn" href="{{ route('our-services.index') }}">
            <span class="growim-btn__text">View All Services</span>
            <span class="growim-btn__icon">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </span>
        </a>
    </div>
</div>
</section>
<section class="dw-testimonials">
    <div class="dw-testimonials__shape dw-testimonials__shape--one"></div>
    <div class="dw-testimonials__shape dw-testimonials__shape--two"></div>

    <div class="container">
        <div class="dw-testimonials__header">
            <div class="dw-testimonials__heading">
                <span class="dw-testimonials__tag">
                    <i class="fas fa-comments"></i>
                    Client Testimonials
                </span>
                <h2>What Our Clients Say</h2>
                <p>
                    We help businesses build better digital experiences.
                    Here's what our clients have to say about working with us.
                </p>
            </div>

            <div class="dw-testimonials__navigation">
                <button type="button" class="dw-testimonials__prev" aria-label="Previous testimonial">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="dw-testimonials__next" aria-label="Next testimonial">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

        <div class="dw-testimonials__slider">
            <div class="dw-testimonial-card active">
                <div class="dw-testimonial-card__content">
                    <div class="dw-testimonial-card__quote">
                        <i class="fas fa-quote-right"></i>
                    </div>

                    <div class="dw-testimonial-card__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <p class="dw-testimonial-card__text">
                        Digital Web transformed our online presence with a modern,
                        professional website. Their team understood our requirements
                        and delivered exactly what we needed.
                    </p>

                    <div class="dw-testimonial-card__author">
                        <div class="dw-testimonial-card__author-image">
                            <img src="{{ asset('frontend/assets/images/resources/testi-3-1.jpg') }}" alt="Client">
                        </div>

                        <div class="dw-testimonial-card__author-info">
                            <h3>Albert Flores</h3>
                            <span>Business Owner</span>
                        </div>

                        <div class="dw-testimonial-card__verified">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>

                <div class="dw-testimonial-card__image">
                    <img src="{{ asset('frontend/assets/images/resources/testimonial-3-image.jpg') }}" alt="Client testimonial">
                </div>
            </div>

            <div class="dw-testimonial-card">
                <div class="dw-testimonial-card__content">
                    <div class="dw-testimonial-card__quote">
                        <i class="fas fa-quote-right"></i>
                    </div>

                    <div class="dw-testimonial-card__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <p class="dw-testimonial-card__text">
                        The development team was professional, responsive and creative.
                        They helped us turn our ideas into a powerful digital solution
                        that works beautifully across all devices.
                    </p>

                    <div class="dw-testimonial-card__author">
                        <div class="dw-testimonial-card__author-image">
                            <img src="{{ asset('frontend/assets/images/resources/testi-3-2.jpg') }}" alt="Client">
                        </div>

                        <div class="dw-testimonial-card__author-info">
                            <h3>Sarah Mitchell</h3>
                            <span>Marketing Manager</span>
                        </div>

                        <div class="dw-testimonial-card__verified">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>

                <div class="dw-testimonial-card__image">
                    <img src="{{ asset('frontend/assets/images/resources/testi-3-2.jpg') }}" alt="Client testimonial">
                </div>
            </div>

            <div class="dw-testimonial-card">
                <div class="dw-testimonial-card__content">
                    <div class="dw-testimonial-card__quote">
                        <i class="fas fa-quote-right"></i>
                    </div>

                    <div class="dw-testimonial-card__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <p class="dw-testimonial-card__text">
                        From UI design to web development and digital marketing,
                        Digital Web provided excellent service throughout the project.
                        We are extremely happy with the final result.
                    </p>

                    <div class="dw-testimonial-card__author">
                        <div class="dw-testimonial-card__author-image">
                            <img src="{{ asset('frontend/assets/images/resources/testi-3-3.jpg') }}" alt="Client">
                        </div>

                        <div class="dw-testimonial-card__author-info">
                            <h3>Michael Anderson</h3>
                            <span>Founder & CEO</span>
                        </div>

                        <div class="dw-testimonial-card__verified">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>

                <div class="dw-testimonial-card__image">
                    <img src="{{ asset('frontend/assets/images/resources/testi-3-3.jpg') }}" alt="Client testimonial">
                </div>
            </div>

            <div class="dw-testimonial-card">
                <div class="dw-testimonial-card__content">
                    <div class="dw-testimonial-card__quote">
                        <i class="fas fa-quote-right"></i>
                    </div>

                    <div class="dw-testimonial-card__rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <p class="dw-testimonial-card__text">
                        Their attention to detail and commitment to quality made the
                        entire process smooth. Our new website has given our business
                        a much stronger digital presence.
                    </p>

                    <div class="dw-testimonial-card__author">
                        <div class="dw-testimonial-card__author-image">
                            <img src="{{ asset('frontend/assets/images/resources/testi-3-4.jpg') }}" alt="Client">
                        </div>

                        <div class="dw-testimonial-card__author-info">
                            <h3>Emily Johnson</h3>
                            <span>Creative Director</span>
                        </div>

                        <div class="dw-testimonial-card__verified">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>

                <div class="dw-testimonial-card__image">
                    <img src="{{ asset('frontend/assets/images/resources/testi-3-4.jpg') }}" alt="Client testimonial">
                </div>
            </div>
        </div>

        <div class="dw-testimonials__bottom">
            <div class="dw-testimonials__dots">
                <button type="button" class="active" data-slide="0"></button>
                <button type="button" data-slide="1"></button>
                <button type="button" data-slide="2"></button>
                <button type="button" data-slide="3"></button>
            </div>

            <div class="dw-testimonials__counter">
                <span class="current">01</span>
                <span class="line"></span>
                <span class="total">04</span>
            </div>
        </div>
    </div>
</section>
<section class="blog-one blog-one--home-three">

    <div class="container">

        <div class="blog-one__top">

            <div class="sec-title text-left">



                <h6 class="sec-title__tagline">our NEWS</h6><!-- /.sec-title__tagline -->



                <h3 class="sec-title__title">Recent Blog Posts</h3><!-- /.sec-title__title -->

            </div><!-- /.sec-title -->

            <a class="growim-btn" href="">
                <span class="growim-btn__text">View All News</span>

                <span class="growim-btn__icon">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </span>
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


<style>
#serviceTabContent>.tab {
    display: none;
}

#serviceTabContent>.tab.active-tab {
    display: block;
    animation: serviceFadeIn 0.4s ease-in-out;
}

#serviceTabs .tab-btn {
    cursor: pointer;
}

@keyframes serviceFadeIn {
    from {
        opacity: 0;
        transform: translateY(12px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('#serviceTabs .tab-btn');
    const panels = document.querySelectorAll('#serviceTabContent > .tab');
    tabs.forEach(function(tab) {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            const target = document.querySelector(this.dataset.tab);
            if (!target) return;
            tabs.forEach(function(item) {
                item.classList.remove('active-btn');
            });
            panels.forEach(function(panel) {
                panel.classList.remove('active-tab');
            });
            this.classList.add('active-btn');
            target.classList.add('active-tab');
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.dw-testimonials');

    if (!slider) {
        return;
    }

    const cards = slider.querySelectorAll('.dw-testimonial-card');
    const dots = slider.querySelectorAll('.dw-testimonials__dots button');
    const prevButton = slider.querySelector('.dw-testimonials__prev');
    const nextButton = slider.querySelector('.dw-testimonials__next');
    const currentCounter = slider.querySelector('.dw-testimonials__counter .current');

    let currentSlide = 0;
    let autoPlay;

    function showSlide(index) {
        if (index >= cards.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = cards.length - 1;
        } else {
            currentSlide = index;
        }

        cards.forEach(function (card, i) {
            card.classList.toggle('active', i === currentSlide);
        });

        dots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === currentSlide);
        });

        if (currentCounter) {
            currentCounter.textContent = String(currentSlide + 1).padStart(2, '0');
        }
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function startAutoPlay() {
        clearInterval(autoPlay);

        autoPlay = setInterval(function () {
            nextSlide();
        }, 5000);
    }

    if (nextButton) {
        nextButton.addEventListener('click', function () {
            nextSlide();
            startAutoPlay();
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', function () {
            prevSlide();
            startAutoPlay();
        });
    }

    dots.forEach(function (dot) {
        dot.addEventListener('click', function () {
            showSlide(parseInt(dot.dataset.slide));
            startAutoPlay();
        });
    });

    slider.addEventListener('mouseenter', function () {
        clearInterval(autoPlay);
    });

    slider.addEventListener('mouseleave', function () {
        startAutoPlay();
    });

    showSlide(0);
    startAutoPlay();
});
</script>
@endsection