@extends('Website.layout.app')

@section('content')
<div class="page-wrapper">
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Our Service</h2>
            <ul class="growim-breadcrumb list-unstyled">
                <li><a href="{{ route('website.home') }}">Home</a></li>
                <li><span>Our Service</span></li>
            </ul>
        </div>
    </section>

    <section class="service-six">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-1.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-1.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Link Building Optimization</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-2.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-2.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Web Development</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-3.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-3.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Digital Strategy</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-4.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-4.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Brand Design Identity</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-5.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-5.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Email Marketing</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-six__item text-center">
                        <div class="service-six__item__wrapper">
                            <div class="service-six__item__image">
                                <img src="{{ asset('frontend/assets/images/resources/service-6-6.jpg') }}" alt="Digital Web">
                            </div>
                            <div class="service-six__item__icon" style="background-image: url('{{ asset('frontend/assets/images/shapes/service-6-icon-bg.png') }}');">
                                <img src="{{ asset('frontend/assets/images/shapes/service-6-6.png') }}" alt="Digital Web">
                            </div>
                            <h3 class="service-six__item__title">
                                <a href="{{ route('our-services.index') }}">Video Resches optimization</a>
                            </h3>
                            <p class="service-six__item__text">
                                We can help you &amp; routine audits to determine an SEO
                            </p>
                            <a class="service-six__item__rm" href="{{ route('our-services.index') }}">
                                <svg viewBox="0 0 58 66" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.46 1.07519C27.646 -0.206291 30.354 -0.206292 32.54 1.07519L54.54 13.9717C56.6833 15.2281 58 17.5263 58 20.0106V45.9894C58 48.4737 56.6833 50.7719 54.54 52.0283L32.54 64.9248C30.354 66.2063 27.646 66.2063 25.46 64.9248L3.45996 52.0283C1.31675 50.7719 0 48.4737 0 45.9894V20.0106C0 17.5263 1.31675 15.2281 3.45996 13.9717L25.46 1.07519Z"></path>
                                </svg>
                                <i class="flaticon-up-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection