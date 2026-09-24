@extends('Website.layout.app')

@section('title', 'Work With Us | Digital Web')

@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}');"></div>
    <div class="container">
        <div class="page-header__content">
            <h2 class="page-header__title">Work With Us</h2>
            <ul class="growim-breadcrumb list-unstyled">
                <li><a href="{{ route('website.home') }}">Home</a></li>
                <li><span>Work With Us</span></li>
            </ul>
        </div>
    </div>
</section>

<section class="work-with-us section-space">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Let's Build Something Great</h6>
            <h3 class="sec-title__title">Tell Us About Your Project</h3>
            <p class="work-with-us__intro">
                Choose a service below and share a few details about your requirements.
                Our team will review your enquiry and get back to you.
            </p>
        </div>

        @if(session('success'))
            <div class="work-alert work-alert--success">
                <div class="work-alert__icon">
                    <i class="fas fa-check"></i>
                </div>
                <div>
                    <strong>Thank You!</strong>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="work-alert work-alert--error">
                <div class="work-alert__icon">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div>
                    <strong>Please check the form</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="work-steps">
            <div class="work-step active">
                <span>01</span>
                <div>
                    <strong>Choose Service</strong>
                    <small>Select what you need</small>
                </div>
            </div>
            <div class="work-step">
                <span>02</span>
                <div>
                    <strong>Project Details</strong>
                    <small>Tell us about your project</small>
                </div>
            </div>
            <div class="work-step">
                <span>03</span>
                <div>
                    <strong>Submit Enquiry</strong>
                    <small>We'll contact you</small>
                </div>
            </div>
        </div>

        <div class="row justify-content-center work-service-options">
            <div class="col-lg-5 col-md-6">
                <div class="work-service-card" data-target="digital-marketing">
                    <div class="work-service-card__top">
                        <div class="work-service-card__icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <span class="work-service-card__check">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>
                        Increase your visibility, generate quality leads and grow your
                        business through effective digital marketing strategies.
                    </p>
                    <div class="work-service-card__services">
                        <span><i class="fas fa-check"></i> SEO</span>
                        <span><i class="fas fa-check"></i> Social Media</span>
                        <span><i class="fas fa-check"></i> Google Ads</span>
                        <span><i class="fas fa-check"></i> Content Marketing</span>
                    </div>
                    <div class="work-service-card__button">
                        Choose Digital Marketing
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="work-service-card" data-target="website-development">
                    <div class="work-service-card__top">
                        <div class="work-service-card__icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <span class="work-service-card__check">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <h3>Website Development</h3>
                    <p>
                        Build a modern, responsive and high-performing website or web
                        application designed around your business.
                    </p>
                    <div class="work-service-card__services">
                        <span><i class="fas fa-check"></i> Business Website</span>
                        <span><i class="fas fa-check"></i> E-commerce</span>
                        <span><i class="fas fa-check"></i> Laravel</span>
                        <span><i class="fas fa-check"></i> Web Applications</span>
                    </div>
                    <div class="work-service-card__button">
                        Choose Website Development
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="work-form-wrapper" id="work-form-wrapper">
            <div class="work-form-header">
                <div class="work-form-header__icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div>
                    <span>Project Enquiry</span>
                    <h3 id="selected-service">Select a service to continue</h3>
                    <p>Complete the details below so we can understand your requirements.</p>
                </div>
            </div>

            <form action="{{ route('work-with-us.store') }}" method="POST" id="work-with-us-form">
                @csrf

                <input type="hidden" name="service_type" id="service_type" value="{{ old('service_type') }}">

                <div class="work-form-section">
                    <div class="work-form-section__title">
                        <span>01</span>
                        <div>
                            <h4>Contact Information</h4>
                            <p>Tell us how we can contact you.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Full Name <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Company / Business Name</label>
                                <div class="work-input">
                                    <i class="fas fa-building"></i>
                                    <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Enter company or business name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Email Address <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Phone Number <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Current Website</label>
                                <div class="work-input">
                                    <i class="fas fa-globe"></i>
                                    <input type="url" name="website" value="{{ old('website') }}" placeholder="https://yourwebsite.com">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Preferred Contact Method <span>*</span></label>
                                <div class="work-radio-group">
                                    <label>
                                        <input type="radio" name="contact_method" value="phone" {{ old('contact_method', 'phone') == 'phone' ? 'checked' : '' }} required>
                                        <span><i class="fas fa-phone"></i> Phone</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="contact_method" value="email" {{ old('contact_method') == 'email' ? 'checked' : '' }}>
                                        <span><i class="fas fa-envelope"></i> Email</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="contact_method" value="whatsapp" {{ old('contact_method') == 'whatsapp' ? 'checked' : '' }}>
                                        <span><i class="fab fa-whatsapp"></i> WhatsApp</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-form-section service-fields" id="digital-marketing-fields">
                    <div class="work-form-section__title">
                        <span>02</span>
                        <div>
                            <h4>Digital Marketing Requirements</h4>
                            <p>Help us understand your marketing goals.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Marketing Services <span>*</span></label>
                                <select name="marketing_service">
                                    <option value="">Select Marketing Service</option>
                                    <option value="seo" {{ old('marketing_service') == 'seo' ? 'selected' : '' }}>SEO</option>
                                    <option value="social-media" {{ old('marketing_service') == 'social-media' ? 'selected' : '' }}>Social Media Marketing</option>
                                    <option value="google-ads" {{ old('marketing_service') == 'google-ads' ? 'selected' : '' }}>Google Ads / PPC</option>
                                    <option value="content-marketing" {{ old('marketing_service') == 'content-marketing' ? 'selected' : '' }}>Content Marketing</option>
                                    <option value="email-marketing" {{ old('marketing_service') == 'email-marketing' ? 'selected' : '' }}>Email Marketing</option>
                                    <option value="full-digital-marketing" {{ old('marketing_service') == 'full-digital-marketing' ? 'selected' : '' }}>Full Digital Marketing</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Target Location <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="target_location" value="{{ old('target_location') }}" placeholder="India, Pune, USA, Global">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Target Audience <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-users"></i>
                                    <input type="text" name="target_audience" value="{{ old('target_audience') }}" placeholder="Describe your target audience">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Monthly Marketing Budget <span>*</span></label>
                                <select name="monthly_marketing_budget">
                                    <option value="">Select Monthly Budget</option>
                                    <option value="under-10000" {{ old('monthly_marketing_budget') == 'under-10000' ? 'selected' : '' }}>Under ₹10,000</option>
                                    <option value="10000-25000" {{ old('monthly_marketing_budget') == '10000-25000' ? 'selected' : '' }}>₹10,000 - ₹25,000</option>
                                    <option value="25000-50000" {{ old('monthly_marketing_budget') == '25000-50000' ? 'selected' : '' }}>₹25,000 - ₹50,000</option>
                                    <option value="50000-plus" {{ old('monthly_marketing_budget') == '50000-plus' ? 'selected' : '' }}>₹50,000+</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Primary Marketing Goal <span>*</span></label>
                                <select name="marketing_goal">
                                    <option value="">Select Your Goal</option>
                                    <option value="generate-leads" {{ old('marketing_goal') == 'generate-leads' ? 'selected' : '' }}>Generate More Leads</option>
                                    <option value="increase-sales" {{ old('marketing_goal') == 'increase-sales' ? 'selected' : '' }}>Increase Sales</option>
                                    <option value="brand-awareness" {{ old('marketing_goal') == 'brand-awareness' ? 'selected' : '' }}>Brand Awareness</option>
                                    <option value="website-traffic" {{ old('marketing_goal') == 'website-traffic' ? 'selected' : '' }}>Increase Website Traffic</option>
                                    <option value="online-presence" {{ old('marketing_goal') == 'online-presence' ? 'selected' : '' }}>Improve Online Presence</option>
                                    <option value="local-business" {{ old('marketing_goal') == 'local-business' ? 'selected' : '' }}>Local Business Growth</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Business Industry <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-industry"></i>
                                    <input type="text" name="business_industry" value="{{ old('business_industry') }}" placeholder="e.g. Real Estate, Healthcare, IT">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="work-field">
                                <label>Business Goals <span>*</span></label>
                                <textarea name="business_goals" rows="5" placeholder="Tell us about your business, current marketing activities and what you want to achieve...">{{ old('business_goals') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-form-section service-fields" id="website-development-fields">
                    <div class="work-form-section__title">
                        <span>02</span>
                        <div>
                            <h4>Website Development Requirements</h4>
                            <p>Tell us about your website or application.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Website Type <span>*</span></label>
                                <select name="website_type">
                                    <option value="">Select Website Type</option>
                                    <option value="business" {{ old('website_type') == 'business' ? 'selected' : '' }}>Business Website</option>
                                    <option value="ecommerce" {{ old('website_type') == 'ecommerce' ? 'selected' : '' }}>E-commerce Website</option>
                                    <option value="portfolio" {{ old('website_type') == 'portfolio' ? 'selected' : '' }}>Portfolio Website</option>
                                    <option value="blog" {{ old('website_type') == 'blog' ? 'selected' : '' }}>Blog / News Website</option>
                                    <option value="web-application" {{ old('website_type') == 'web-application' ? 'selected' : '' }}>Web Application</option>
                                    <option value="custom" {{ old('website_type') == 'custom' ? 'selected' : '' }}>Custom Website</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Preferred Technology <span>*</span></label>
                                <select name="technology">
                                    <option value="">Select Technology</option>
                                    <option value="laravel" {{ old('technology') == 'laravel' ? 'selected' : '' }}>Laravel / PHP</option>
                                    <option value="react" {{ old('technology') == 'react' ? 'selected' : '' }}>React JS</option>
                                    <option value="wordpress" {{ old('technology') == 'wordpress' ? 'selected' : '' }}>WordPress</option>
                                    <option value="html-css" {{ old('technology') == 'html-css' ? 'selected' : '' }}>HTML / CSS / JavaScript</option>
                                    <option value="other" {{ old('technology') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Number of Pages <span>*</span></label>
                                <div class="work-input">
                                    <i class="fas fa-file-alt"></i>
                                    <input type="number" name="number_of_pages" value="{{ old('number_of_pages') }}" min="1" max="1000" placeholder="e.g. 10">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Project Timeline <span>*</span></label>
                                <select name="project_timeline">
                                    <option value="">Select Timeline</option>
                                    <option value="urgent" {{ old('project_timeline') == 'urgent' ? 'selected' : '' }}>Urgent / ASAP</option>
                                    <option value="2-4-weeks" {{ old('project_timeline') == '2-4-weeks' ? 'selected' : '' }}>2 - 4 Weeks</option>
                                    <option value="1-2-months" {{ old('project_timeline') == '1-2-months' ? 'selected' : '' }}>1 - 2 Months</option>
                                    <option value="2-3-months" {{ old('project_timeline') == '2-3-months' ? 'selected' : '' }}>2 - 3 Months</option>
                                    <option value="flexible" {{ old('project_timeline') == 'flexible' ? 'selected' : '' }}>Flexible</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Domain & Hosting <span>*</span></label>
                                <select name="domain_hosting">
                                    <option value="">Select Option</option>
                                    <option value="required" {{ old('domain_hosting') == 'required' ? 'selected' : '' }}>Need Domain & Hosting</option>
                                    <option value="available" {{ old('domain_hosting') == 'available' ? 'selected' : '' }}>Already Available</option>
                                    <option value="not-sure" {{ old('domain_hosting') == 'not-sure' ? 'selected' : '' }}>Not Sure</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Design Requirement <span>*</span></label>
                                <select name="design_preference">
                                    <option value="">Select Option</option>
                                    <option value="new-design" {{ old('design_preference') == 'new-design' ? 'selected' : '' }}>Need New Design</option>
                                    <option value="existing-design" {{ old('design_preference') == 'existing-design' ? 'selected' : '' }}>Have Existing Design</option>
                                    <option value="reference" {{ old('design_preference') == 'reference' ? 'selected' : '' }}>Have Reference Website</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Required Features</label>
                                <div class="work-input">
                                    <i class="fas fa-cogs"></i>
                                    <input type="text" name="required_features" value="{{ old('required_features') }}" placeholder="Login, Payment, Admin Panel, API">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Website Reference</label>
                                <div class="work-input">
                                    <i class="fas fa-link"></i>
                                    <input type="url" name="reference_website" value="{{ old('reference_website') }}" placeholder="https://example.com">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="work-field">
                                <label>Project Description <span>*</span></label>
                                <textarea name="project_description" rows="5" placeholder="Describe your project, required features, target users and any special requirements...">{{ old('project_description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-form-section">
                    <div class="work-form-section__title">
                        <span>03</span>
                        <div>
                            <h4>Project Budget & Additional Information</h4>
                            <p>Help us prepare the right proposal for you.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="work-field">
                                <label>Estimated Project Budget</label>
                                <select name="budget">
                                    <option value="">Select Budget</option>
                                    <option value="under-25000" {{ old('budget') == 'under-25000' ? 'selected' : '' }}>Under ₹25,000</option>
                                    <option value="25000-50000" {{ old('budget') == '25000-50000' ? 'selected' : '' }}>₹25,000 - ₹50,000</option>
                                    <option value="50000-100000" {{ old('budget') == '50000-100000' ? 'selected' : '' }}>₹50,000 - ₹1,00,000</option>
                                    <option value="100000-250000" {{ old('budget') == '100000-250000' ? 'selected' : '' }}>₹1,00,000 - ₹2,50,000</option>
                                    <option value="250000-plus" {{ old('budget') == '250000-plus' ? 'selected' : '' }}>₹2,50,000+</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="work-field">
                                <label>How Did You Hear About Us?</label>
                                <select name="lead_source">
                                    <option value="">Select Option</option>
                                    <option value="google" {{ old('lead_source') == 'google' ? 'selected' : '' }}>Google Search</option>
                                    <option value="social-media" {{ old('lead_source') == 'social-media' ? 'selected' : '' }}>Social Media</option>
                                    <option value="referral" {{ old('lead_source') == 'referral' ? 'selected' : '' }}>Referral</option>
                                    <option value="linkedin" {{ old('lead_source') == 'linkedin' ? 'selected' : '' }}>LinkedIn</option>
                                    <option value="other" {{ old('lead_source') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="work-field">
                                <label>Additional Message</label>
                                <textarea name="additional_message" rows="4" placeholder="Anything else you would like us to know?">{{ old('additional_message') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-form-footer">
                    <div class="work-form-footer__privacy">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <strong>Your information is safe with us.</strong>
                            <span>We will only use your details to contact you regarding your enquiry.</span>
                        </div>
                    </div>

                    <button type="submit" class="growim-btn work-submit-btn">
                        <span class="growim-btn__text">Submit Project Enquiry</span>
                        <span class="growim-btn__icon"><i class="fas fa-arrow-right"></i></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
.work-with-us {
    padding: 100px 0;
    background: #fafafa;
}
.work-with-us__intro {
    max-width: 720px;
    margin: 20px auto 0;
}
.work-alert {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin: 30px auto;
    padding: 20px 25px;
    max-width: 1000px;
    border-radius: 12px;
}
.work-alert__icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}
.work-alert strong {
    display: block;
    margin-bottom: 4px;
}
.work-alert p,
.work-alert ul {
    margin: 0;
}
.work-alert ul {
    padding-left: 18px;
}
.work-alert--success {
    background: #eefaf3;
    border: 1px solid #ccebd8;
}
.work-alert--success .work-alert__icon {
    background: #28a745;
    color: #fff;
}
.work-alert--error {
    background: #fff4f4;
    border: 1px solid #f0cccc;
}
.work-alert--error .work-alert__icon {
    background: #dc3545;
    color: #fff;
}
.work-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 900px;
    margin: 45px auto;
}
.work-step {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 12px;
}
.work-step:not(:last-child)::after {
    content: "";
    height: 1px;
    flex: 1;
    margin: 0 20px;
    background: #ddd;
}
.work-step span {
    width: 45px;
    height: 45px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #eee;
    font-size: 13px;
    font-weight: 700;
}
.work-step.active span {
    background: var(--growim-base, #6a35ff);
    color: #fff;
}
.work-step strong,
.work-step small {
    display: block;
}
.work-step small {
    margin-top: 3px;
    color: #777;
}
.work-service-options {
    margin-bottom: 40px;
}
.work-service-card {
    position: relative;
    height: 100%;
    padding: 35px;
    background: #fff;
    border: 1px solid #e7e7e7;
    border-radius: 18px;
    cursor: pointer;
    transition: all .3s ease;
    box-shadow: 0 5px 25px rgba(0,0,0,.03);
}
.work-service-card:hover,
.work-service-card.active {
    border-color: var(--growim-base, #6a35ff);
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0,0,0,.09);
}
.work-service-card__top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}
.work-service-card__icon {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: #f3f0ff;
    color: var(--growim-base, #6a35ff);
    font-size: 28px;
}
.work-service-card__check {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ddd;
    border-radius: 50%;
    color: transparent;
}
.work-service-card.active .work-service-card__check {
    background: var(--growim-base, #6a35ff);
    border-color: var(--growim-base, #6a35ff);
    color: #fff;
}
.work-service-card h3 {
    margin-bottom: 12px;
}
.work-service-card p {
    margin-bottom: 20px;
}
.work-service-card__services {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 25px;
}
.work-service-card__services span {
    padding: 7px 10px;
    border-radius: 5px;
    background: #f7f7f7;
    font-size: 12px;
}
.work-service-card__services i {
    color: var(--growim-base, #6a35ff);
    margin-right: 3px;
}
.work-service-card__button {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 700;
    color: var(--growim-base, #6a35ff);
}
.work-form-wrapper {
    display: none;
    max-width: 1100px;
    margin: 0 auto;
    background: #fff;
    border: 1px solid #e7e7e7;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 15px 50px rgba(0,0,0,.06);
}
.work-form-header {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 35px 40px;
    background: #f7f5ff;
    border-bottom: 1px solid #e8e4ff;
}
.work-form-header__icon {
    width: 60px;
    height: 60px;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: var(--growim-base, #6a35ff);
    color: #fff;
    font-size: 22px;
}
.work-form-header span {
    display: block;
    font-size: 13px;
    color: var(--growim-base, #6a35ff);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
}
.work-form-header h3 {
    margin: 4px 0;
}
.work-form-header p {
    margin: 0;
}
.work-form-section {
    padding: 40px;
    border-bottom: 1px solid #eee;
}
.work-form-section__title {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
}
.work-form-section__title > span {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: #f3f0ff;
    color: var(--growim-base, #6a35ff);
    font-weight: 700;
}
.work-form-section__title h4 {
    margin: 0 0 4px;
}
.work-form-section__title p {
    margin: 0;
    color: #777;
    font-size: 14px;
}
.work-field {
    margin-bottom: 24px;
}
.work-field label {
    display: block;
    margin-bottom: 9px;
    font-size: 14px;
    font-weight: 600;
}
.work-field label span {
    color: #e3342f;
}
.work-input {
    position: relative;
}
.work-input > i {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    z-index: 1;
}
.work-input input {
    padding-left: 48px !important;
}
.work-field input,
.work-field select,
.work-field textarea {
    width: 100%;
    min-height: 54px;
    padding: 12px 17px;
    border: 1px solid #ddd;
    border-radius: 7px;
    background: #fff;
    outline: none;
    transition: all .2s ease;
}
.work-field textarea {
    min-height: 130px;
    resize: vertical;
}
.work-field input:focus,
.work-field select:focus,
.work-field textarea:focus {
    border-color: var(--growim-base, #6a35ff);
    box-shadow: 0 0 0 3px rgba(106,53,255,.08);
}
.work-radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}
.work-radio-group label {
    margin: 0;
}
.work-radio-group input {
    display: none;
}
.work-radio-group span {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    min-height: 44px;
    padding: 10px 14px;
    border: 1px solid #ddd;
    border-radius: 7px;
    cursor: pointer;
    font-size: 13px;
}
.work-radio-group input:checked + span {
    border-color: var(--growim-base, #6a35ff);
    background: #f3f0ff;
    color: var(--growim-base, #6a35ff);
}
.work-form-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    padding: 30px 40px;
    background: #fafafa;
}
.work-form-footer__privacy {
    display: flex;
    align-items: center;
    gap: 12px;
}
.work-form-footer__privacy > i {
    font-size: 22px;
    color: #28a745;
}
.work-form-footer__privacy strong,
.work-form-footer__privacy span {
    display: block;
}
.work-form-footer__privacy span {
    margin-top: 3px;
    color: #777;
    font-size: 12px;
}
.work-submit-btn {
    border: 0;
    white-space: nowrap;
}
.service-fields {
    display: none;
}
@media (max-width: 991px) {
    .work-steps {
        display: none;
    }
}
@media (max-width: 767px) {
    .work-with-us {
        padding: 70px 0;
    }
    .work-service-card {
        margin-bottom: 20px;
    }
    .work-form-header,
    .work-form-section,
    .work-form-footer {
        padding: 25px 20px;
    }
    .work-form-footer {
        align-items: flex-start;
        flex-direction: column;
    }
    .work-submit-btn {
        width: 100%;
        justify-content: center;
    }
    .work-radio-group span {
        width: 100%;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.work-service-card');
    const formWrapper = document.getElementById('work-form-wrapper');
    const selectedService = document.getElementById('selected-service');
    const serviceType = document.getElementById('service_type');
    const digitalMarketingFields = document.getElementById('digital-marketing-fields');
    const websiteDevelopmentFields = document.getElementById('website-development-fields');
    const form = document.getElementById('work-with-us-form');

    function updateRequiredFields(target) {
        const marketingFields = [
            'marketing_service',
            'target_location',
            'target_audience',
            'monthly_marketing_budget',
            'marketing_goal',
            'business_industry',
            'business_goals'
        ];

        const websiteFields = [
            'website_type',
            'technology',
            'number_of_pages',
            'project_timeline',
            'domain_hosting',
            'design_preference',
            'project_description'
        ];

        marketingFields.forEach(function (name) {
            const field = document.querySelector('[name="' + name + '"]');

            if (field) {
                field.required = target === 'digital-marketing';
            }
        });

        websiteFields.forEach(function (name) {
            const field = document.querySelector('[name="' + name + '"]');

            if (field) {
                field.required = target === 'website-development';
            }
        });
    }

    function selectService(target, scroll = true) {
        cards.forEach(function (card) {
            card.classList.remove('active');
        });

        const selectedCard = document.querySelector('[data-target="' + target + '"]');

        if (selectedCard) {
            selectedCard.classList.add('active');
        }

        formWrapper.style.display = 'block';

        if (target === 'digital-marketing') {
            selectedService.textContent = 'Digital Marketing';
            serviceType.value = 'digital_marketing';
            digitalMarketingFields.style.display = 'block';
            websiteDevelopmentFields.style.display = 'none';
            updateRequiredFields(target);
        }

        if (target === 'website-development') {
            selectedService.textContent = 'Website Development';
            serviceType.value = 'website_development';
            digitalMarketingFields.style.display = 'none';
            websiteDevelopmentFields.style.display = 'block';
            updateRequiredFields(target);
        }

        if (scroll) {
            setTimeout(function () {
                formWrapper.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        }
    }

    cards.forEach(function (card) {
        card.addEventListener('click', function () {
            selectService(this.getAttribute('data-target'));
        });
    });

    if (serviceType.value === 'digital_marketing') {
        selectService('digital-marketing', false);
    }

    if (serviceType.value === 'website_development') {
        selectService('website-development', false);
    }

    form.addEventListener('submit', function () {
        const submitButton = form.querySelector('.work-submit-btn');

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.querySelector('.growim-btn__text').textContent = 'Submitting...';
        }
    });
});
</script>
@endsection