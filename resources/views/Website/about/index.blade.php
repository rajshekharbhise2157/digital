@extends('Website.layout.app')

@section('content')
<div class="page-wrapper">
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">About Us</h2>
            <ul class="growim-breadcrumb list-unstyled">
                <li><a href="{{ route('website.home') }}">Home</a></li>
                <li><span>About Us</span></li>
            </ul>
        </div>
    </section>

    <section class="about-one about-one--page">
        <div class="about-one__shape-four"
            style="background-image: url('{{ asset('frontend/assets/images/shapes/about-1-shape-4.png') }}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline">About Us</h6>
                            <h3 class="sec-title__title">We’re Strategic Digital Marketing Agency</h3>
                        </div>
                        <p class="about-one__content__text">
                            In order to scale new customer acquisition and retention for e-commerce brands, we work
                            across
                            <br>
                            the entire customer journey. Our team has a successful track record of helping brands scale
                            <br>
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
                    <div class="about-one__image wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-one__image__bg"
                            style="background-image: url('{{ asset('frontend/assets/images/shapes/about-image-bg.png') }}');">
                        </div>
                        <img src="{{ asset('frontend/assets/images/resources/about-1-1.png') }}" alt="Digital Web">
                        <div class="about-one__image__clients wow fadeInUp" data-wow-delay="400ms">
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

    <section class="work-process-two" style="background-image: url('{{ asset('frontend/assets/images/shapes/work-process-two-bg-shape.png') }}');">
        <div class="container">
            <div class="work-process-two__top">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline">Work Process</h6>
                    <h3 class="sec-title__title">Our Working Process</h3>
                </div>
            </div>
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="work-process-two__item">
                        <div class="work-process-two__item__icon">
                            <i class="fa-solid fa-list-check"></i>
                            <div class="work-process-two__item__number"></div>
                        </div>
                        <h3 class="work-process-two__item__title">
                            Choose A Service
                        </h3>
                        <p class="work-process-two__item__text">
                            Select the digital service that matches your business goals and requirements.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="work-process-two__item work-process-two__item--reverse">
                        <h3 class="work-process-two__item__title">
                            Define Requirements
                        </h3>
                        <p class="work-process-two__item__text">
                            We understand your requirements, objectives and project expectations in detail.
                        </p>
                        <div class="work-process-two__item__icon">
                            <i class="fa-solid fa-clipboard-list"></i>
                            <div class="work-process-two__item__number"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="work-process-two__item">
                        <div class="work-process-two__item__icon">
                            <i class="fa-solid fa-users"></i>
                            <div class="work-process-two__item__number"></div>
                        </div>
                        <h3 class="work-process-two__item__title">
                            Request A Meeting
                        </h3>
                        <p class="work-process-two__item__text">
                            Connect with our team to discuss the project, timeline and implementation strategy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="work-process-two__item work-process-two__item--reverse">
                        <h3 class="work-process-two__item__title">
                            Final Solution
                        </h3>
                        <p class="work-process-two__item__text">
                            We deliver a reliable, scalable and professional digital solution for your business.
                        </p>
                        <div class="work-process-two__item__icon">
                            <i class="fa-solid fa-circle-check"></i>
                            <div class="work-process-two__item__number"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-process-two__border wow fadeInUp" data-wow-delay="400ms"
                style="background-image: url('{{ asset('frontend/assets/images/shapes/work-process-two-border.png') }}');">
            </div>
        </div>
    </section>
    <section class="why-choose-three why-choose-three--about-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 d-flex align-items-center wow fadeInLeft" data-wow-delay="100ms">
                    <div class="why-choose-three__content">

                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline">Why Choose Us</h6>
                            <h3 class="sec-title__title">Why Choose Digital Web</h3>
                        </div>

                        <p class="why-choose-three__content__text">
                            We combine creative design, modern technology and digital marketing
                            strategies to build reliable solutions that help businesses establish
                            a strong online presence and achieve sustainable growth.
                        </p>

                        <ul class="why-choose-three__list">
                            <li>
                                <div class="why-choose-three__list__icon">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                Business<br>Growth
                            </li>

                            <li>
                                <div class="why-choose-three__list__icon">
                                    <i class="fa-solid fa-microchip"></i>
                                </div>
                                Technology<br>Consultancy
                            </li>
                        </ul>

                        <div class="row gutter-y-30">

                            <div class="col-md-6">
                                <div class="why-choose-three__author">
                                    <img src="{{ asset('frontend/assets/images/resources/why-choose-three-author.jpg') }}"
                                        alt="Digital Web">

                                    <h3 class="why-choose-three__author__name">
                                        Digital Web
                                    </h3>

                                    <p class="why-choose-three__author__designation">
                                        Digital Solutions
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="why-choose-three__call">

                                    <div class="why-choose-three__call__icon">
                                        <i class="fas fa-phone"></i>
                                    </div>

                                    <div class="why-choose-three__call__title">
                                        Call Us Now
                                    </div>

                                    <a class="why-choose-three__call__text"
                                        href="tel:+919876543210">
                                        +91 98765 43210
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="why-choose-three__image wow fadeInUp" data-wow-delay="100ms">

                        <div class="why-choose-three__image__bg wow fadeInRight"
                            data-wow-delay="300ms"
                            style="background-image: url('{{ asset('frontend/assets/images/shapes/why-choose-3-bg.png') }}');">
                        </div>

                        <img src="{{ asset('frontend/assets/images/resources/why-choose-3-1.png') }}"
                            alt="Digital Web">

                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection