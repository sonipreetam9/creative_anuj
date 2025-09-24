@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title">Contact Us</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">Contact Us</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Contact Us Content -->
    <div class="page-content">

        <!-- Ihbox -->
        <section class="ihbox-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-capigo-icon pbmit-capigo-icon-email-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">
                                    Mail us 24/7
                                </h2>
                                <div class="pbmit-heading-desc"><a
                                        href="mailto:{{ $comp_email }}"
                                        class="__cf_email__">{{ $comp_email }}</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-capigo-icon pbmit-capigo-icon-location-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">
                                    Our Location
                                </h2>
                                <div class="pbmit-heading-desc">{{ $comp_address }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-capigo-icon pbmit-capigo-icon-phone-call"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">
                                    Call us 24/7
                                </h2>
                                <div class="pbmit-heading-desc">Phone: +91 {{ $comp_phone }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 pbmit-col-wrapper">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-capigo-icon pbmit-capigo-icon-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">
                                    Working Days
                                </h2>
                                <div class="pbmit-heading-desc">Mon to Fri - 09:00am To 06:00pm </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ihbox End -->

        <!-- Contact Form -->
        <section class="section-lgx">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-4 contact-us-col1">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Contact Us</h4>
                            <h2 class="pbmit-title">Happy to Answer all Your Questions</h2>
                        </div>
                        <div class="contact-form-leftbox">
                            <div class="contact-us-left-inner">
                                <div class="contact-form-left-title">
                                    <div class="pbmit-heading-subheading mb-0">
                                        <h2 class="pbmit-title">Feel Free to Our Contact & Hire us for Your Finance !!</h2>
                                    </div>
                                </div>
                                <div class="pbmit-social-link">
                                    <h3>Follow us :</h3>
                                    <ul class="pbmit-social-links">
                                        <li class="pbmit-social-li pbmit-social-facebook">
                                            <a href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-twitter">
                                            <a href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-twitter"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-instagram">
                                            <a href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-instagram"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 contact-us-col2">
                        <div class="contact-form-main">
                            <div class="contact-form">
                                <form method="post" class="contact-form" id="contact-form"
                                    action="">
                                    <h2>Get in Touch with us!</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Your Name"
                                                name="name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email Address"
                                                name="email" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Phone Number"
                                                name="number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Subject"
                                                name="subject" required>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Comment" required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="pbmit-btn pbmit-btn-shape-round">
                                                <i
                                                    class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                                <span class="pbmit-button-content-wrapper">
                                                    <span class="pbmit-button-icon pbmit-align-icon-right">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            class="pbmit-svg-arrow" x="0px" y="0px" width="10"
                                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                            <line x1="1" y1="18" x2="17.8"
                                                                y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18"
                                                                y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18"
                                                                y2="1"></line>
                                                        </svg>
                                                    </span>
                                                    <span class="pbmit-button-text">Submit Now</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-lg-12 message-status"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form -->

        <!-- Iframe -->
        <section class="iframe-section">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55540.674915983436!2d75.03006357724611!3d29.53698425000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114db0893d723d%3A0xc51125be998c4f95!2sSirsa%2C%20Haryana!5e0!3m2!1sen!2sin!4v1758522393379!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Iframe End-->

    </div>
    <!-- Contact Us Content End -->

    <!-- footer -->
@endsection
