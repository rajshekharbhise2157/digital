@extends('Website.layout.app')

@section('title', 'Contact Us | Digital Web')

@section('content')
<div class="page-wrapper">
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <h2 class="page-header__title">Contact Us</h2>
            <ul class="growim-breadcrumb list-unstyled">
                <li><a href="{{ route('website.home') }}">Home</a></li>
                <li><span>Contact Us</span></li>
            </ul>
        </div>
    </section>

    <section class="contact-two">
        <div class="container">
            @if(session('success'))
                <div class="contact-alert contact-alert--success">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="contact-alert contact-alert--error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <strong>Please check the following:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two__image">
                        <img src="{{ asset('frontend/assets/images/shapes/contact-page-1.png') }}" alt="Digital Web">

                        <div class="contact-two__image__video">
                            <img src="{{ asset('frontend/assets/images/resources/contact-page-video.jpg') }}" alt="Digital Web">

                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                <span class="ripple"></span>
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-two__content">
                        <h3 class="contact-two__title">We'll respond to you in an hour.</h3>

                        <p class="contact-two__text">
                            Have a question or need help with your project?
                            Send us a message and our team will get back to you.
                        </p>

                        <form
                            class="contact-two__form contact-form-validated form-one wow fadeInUp"
                            data-wow-duration="1500ms"
                            action="{{ route('contact.store') }}"
                            method="POST"
                            id="contact-form"
                        >
                            @csrf

                            <h4 class="contact-two__form__title">Get In Touch</h4>

                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Name"
                                        required
                                    >
                                </div>

                                <div class="form-one__control">
                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email Address"
                                        required
                                    >
                                </div>

                                <div class="form-one__control">
                                    <input
                                        type="tel"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        placeholder="Phone Number"
                                        required
                                    >
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    @php
                                        $selectedServices = old('services', []);
                                    @endphp

                                    <label class="contact-service-label">
                                        Services
                                    </label>

                                    <div class="service-multiselect" id="service-multiselect">
                                        <button
                                            type="button"
                                            class="service-multiselect__button"
                                            id="service-multiselect-button"
                                        >
                                            <span id="service-multiselect-text">
                                                Select Services
                                            </span>
                                            <i class="fas fa-chevron-down"></i>
                                        </button>

                                        <div
                                            class="service-multiselect__dropdown"
                                            id="service-multiselect-dropdown"
                                        >
                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="website-development"
                                                    {{ in_array('website-development', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-code"></i>
                                                    Website Development
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="ecommerce-development"
                                                    {{ in_array('ecommerce-development', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-shopping-cart"></i>
                                                    E-commerce Development
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="web-application"
                                                    {{ in_array('web-application', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-laptop-code"></i>
                                                    Web Application
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="laravel-development"
                                                    {{ in_array('laravel-development', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fab fa-laravel"></i>
                                                    Laravel Development
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="react-development"
                                                    {{ in_array('react-development', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fab fa-react"></i>
                                                    React Development
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="seo"
                                                    {{ in_array('seo', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-search"></i>
                                                    SEO
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="digital-marketing"
                                                    {{ in_array('digital-marketing', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-bullhorn"></i>
                                                    Digital Marketing
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="social-media-marketing"
                                                    {{ in_array('social-media-marketing', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fab fa-facebook-f"></i>
                                                    Social Media Marketing
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="google-ads"
                                                    {{ in_array('google-ads', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fab fa-google"></i>
                                                    Google Ads
                                                </span>
                                            </label>

                                            <label class="service-option">
                                                <input
                                                    type="checkbox"
                                                    name="services[]"
                                                    value="ui-ux-design"
                                                    {{ in_array('ui-ux-design', $selectedServices) ? 'checked' : '' }}
                                                >
                                                <span>
                                                    <i class="fas fa-palette"></i>
                                                    UI/UX Design
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    @error('services')
                                        <span class="contact-error">{{ $message }}</span>
                                    @enderror

                                    @error('services.*')
                                        <span class="contact-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <textarea
                                        name="message"
                                        placeholder="Write Message . . ."
                                        required
                                    >{{ old('message') }}</textarea>
                                </div>

                                <div class="form-one__control form-one__control--full">
                                    <button
                                        class="growim-btn"
                                        type="submit"
                                        id="contact-submit-button"
                                    >
                                        <span class="growim-btn__text">
                                            Send Message
                                        </span>

                                        <span class="growim-btn__icon">
                                            <i class="flaticon-up-right-arrow"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="google-map">
        <div class="google-map__contact">
            <iframe
                title="Digital Web Location"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="map__contact"
                allowfullscreen
            ></iframe>
        </div>

        <div class="google-map__wrapper">
            <div class="container">
                <div class="google-map__info">
                    <h3 class="google-map__info__title">
                        Contact Info
                    </h3>

                    <ul class="list-unstyled google-map__info__list">
                        <li>
                            <i class="flaticon-pin"></i>
                            Gregory Cartwright, 4059 Carling Avenue, Ugglebarnby
                        </li>

                        <li>
                            <i class="flaticon-phone"></i>
                            <a href="tel:+61086660112">
                                +6108-666-0112
                            </a>
                        </li>

                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:info@gmail.com">
                                info@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.contact-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 16px 20px;
    margin-bottom: 30px;
    border-radius: 8px;
    font-size: 14px;
}

.contact-alert i {
    margin-top: 2px;
    font-size: 18px;
}

.contact-alert--success {
    background: #edf9f1;
    border: 1px solid #c9e8d2;
    color: #20743a;
}

.contact-alert--error {
    background: #fff1f1;
    border: 1px solid #f0caca;
    color: #b42318;
}

.contact-alert ul {
    margin: 5px 0 0;
    padding-left: 18px;
}

.contact-service-label {
    display: block;
    margin-bottom: 10px;
    font-size: 14px;
    font-weight: 600;
}

.service-multiselect {
    position: relative;
    width: 100%;
}

.service-multiselect__button {
    width: 100%;
    min-height: 54px;
    padding: 12px 17px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #ddd;
    border-radius: 7px;
    background: #fff;
    color: #777;
    cursor: pointer;
    text-align: left;
    font-family: inherit;
    font-size: 14px;
    transition: all .2s ease;
}

.service-multiselect__button:hover {
    border-color: var(--growim-base, #6a35ff);
}

.service-multiselect__button i {
    font-size: 12px;
    transition: transform .2s ease;
}

.service-multiselect.open .service-multiselect__button {
    border-color: var(--growim-base, #6a35ff);
    box-shadow: 0 0 0 3px rgba(106, 53, 255, .08);
}

.service-multiselect.open .service-multiselect__button i {
    transform: rotate(180deg);
}

.service-multiselect__dropdown {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    right: 0;
    z-index: 9999;
    display: none;
    max-height: 300px;
    overflow-y: auto;
    padding: 8px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 7px;
    box-shadow: 0 12px 35px rgba(0, 0, 0, .12);
}

.service-multiselect.open .service-multiselect__dropdown {
    display: block;
}

.service-option {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 11px 12px;
    margin: 0;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 400;
    transition: background .2s ease;
}

.service-option:hover {
    background: #f6f4ff;
}

.service-option input {
    width: 17px;
    height: 17px;
    margin: 0;
    accent-color: var(--growim-base, #6a35ff);
    cursor: pointer;
}

.service-option span {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.service-option span i {
    width: 18px;
    color: var(--growim-base, #6a35ff);
}

.contact-error {
    display: block;
    margin-top: 8px;
    color: #dc3545;
    font-size: 13px;
}

#contact-submit-button:disabled {
    opacity: .7;
    cursor: not-allowed;
}

@media (max-width: 575px) {
    .service-multiselect__dropdown {
        max-height: 250px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const multiselect = document.getElementById('service-multiselect');
    const button = document.getElementById('service-multiselect-button');
    const text = document.getElementById('service-multiselect-text');
    const checkboxes = multiselect.querySelectorAll('input[type="checkbox"]');
    const form = document.getElementById('contact-form');
    const submitButton = document.getElementById('contact-submit-button');

    function updateSelectedServices() {
        const selected = Array.from(checkboxes)
            .filter(function (checkbox) {
                return checkbox.checked;
            })
            .map(function (checkbox) {
                return checkbox.nextElementSibling.textContent.trim();
            });

        if (selected.length === 0) {
            text.textContent = 'Select Services';
            text.style.color = '#777';
        } else if (selected.length <= 2) {
            text.textContent = selected.join(', ');
            text.style.color = '#333';
        } else {
            text.textContent = selected.length + ' Services Selected';
            text.style.color = '#333';
        }
    }

    button.addEventListener('click', function (event) {
        event.stopPropagation();
        multiselect.classList.toggle('open');
    });

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            updateSelectedServices();
        });
    });

    document.addEventListener('click', function (event) {
        if (!multiselect.contains(event.target)) {
            multiselect.classList.remove('open');
        }
    });

    form.addEventListener('submit', function (event) {
        const selectedServices = Array.from(checkboxes).filter(function (checkbox) {
            return checkbox.checked;
        });

        if (selectedServices.length === 0) {
            event.preventDefault();
            multiselect.classList.add('open');
            text.textContent = 'Please select at least one service';
            text.style.color = '#dc3545';
            return;
        }

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.querySelector('.growim-btn__text').textContent = 'Sending...';
        }
    });

    updateSelectedServices();
});
</script>
@endsection