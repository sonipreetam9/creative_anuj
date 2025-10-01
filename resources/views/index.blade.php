@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->
    <div class="pbmit-slider-area pbmit-slider-four">
        <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="1"
            data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                <!-- Slide1 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: url({{ asset('assets/images/banner-slider-img/slide-1.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-6">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-left transform-delay-1">Website Development
                                        </h5>
                                        <h2 class="pbmit-title transform-left transform-delay-2">
                                            <strong>BUILDING</strong> <br> <span>DIGITAL HOME.</span>
                                        </h2>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4 col-xl-3">
                                                <div class="transform-bottom transform-delay-3">
                                                    <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-white">
                                                        <span class="pbmit-header-button-text">
                                                            Contact Us
                                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="10" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xl-9">
                                                <div class="pbmit-desc transform-bottom transform-delay-4">
                                                    Crafting websites that inspire trust and deliver results.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide2 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: url({{ asset('assets/images/banner-slider-img/slide-2.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-lg-6">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-left transform-delay-1">App Development</h5>
                                        <h2 class="pbmit-title transform-left transform-delay-2">
                                            <strong>APPS THAT</strong> <br> <span>YOUR EMPOWER.</span>
                                        </h2>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4 col-xl-3">
                                                <div class="transform-bottom transform-delay-3">
                                                    <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-white">
                                                        <span class="pbmit-header-button-text">
                                                            Contact Us
                                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="10" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xl-9">
                                                <div class="pbmit-desc transform-bottom transform-delay-4">
                                                    Seamless, smart, and scalable mobile solutions for your business.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide3 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: url({{ asset('assets/images/banner-slider-img/slide-3.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-8">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-left transform-delay-1">A
                                            Digital Marketing</h5>
                                        <h2 class="pbmit-title transform-left transform-delay-2">
                                            <strong>GROW YOUR</strong> <br><span>BRAND <br> ONLINE.</span>
                                        </h2>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4 col-xl-3">
                                                <div class="transform-bottom transform-delay-3">
                                                    <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-white">
                                                        <span class="pbmit-header-button-text">
                                                            Contact Us
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="10" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xl-9">
                                                <div class="pbmit-desc transform-bottom transform-delay-4">
                                                    Turning clicks into customers with strategies that work.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide4 -->
                <div class="swiper-slide">
                    <div class="pbmit-slider-item">
                        <div class="pbmit-slider-bg"
                            style="background-image: url({{ asset('assets/images/banner-slider-img/slide-4.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-8">
                                    <div class="pbmit-slider-content">
                                        <h5 class="pbmit-sub-title transform-left transform-delay-1">Photography</h5>
                                        <h2 class="pbmit-title transform-left transform-delay-2">
                                            <strong>CAPTURING </strong><br><span>EVERY MOMENT.</span>
                                        </h2>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4 col-xl-3">
                                                <div class="transform-bottom transform-delay-3">
                                                    <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-white">
                                                        <span class="pbmit-header-button-text">
                                                            Contact Us
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="10" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xl-9">
                                                <div class="pbmit-desc transform-bottom transform-delay-4">
                                                    Creative visuals that tell your story with impact.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="page-content">

        <!-- About -->
        <section class="section-lgx pbmit-bg-color-secondary">
            <div class="container">
                @foreach ($abouts as $about)
                    <div class="row">
                        <div class="col-md-12 col-xl-4">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">About us</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-three_img1">
                                            <div class="pbmit-animation-style4">
                                                @if ($about->image)
                                                    <img src="{{ asset('uploads/' . $about->image) }}" class="img-fluid"
                                                        alt="{{ $about->title }}">
                                                @else
                                                    <span>No Image Available</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-three_img2">
                                            <div class="pbmit-animation-style3">
                                                @if ($about->image)
                                                    <img src="{{ asset('uploads/' . $about->image2) }}" class="img-fluid"
                                                        alt="{{ $about->title }}">
                                                @else
                                                    <span>No Image Available</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-8">
                            <div class="about-four-rightbox">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-title text-white">{{ $about->title }}</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-white pbmit-desc">
                                        <p>{{ $about->short_description }}</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6 col-xl-3">
                                        <div class="pbmit-ihbox-style-5">
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    <a href="#">
                                                        <span>
                                                            Website Development
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </h2>
                                                <div class="pbmit-ihbox-btn">
                                                    <a href="#">
                                                        <span>
                                                            Website Development
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-wapper"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="pbmit-ihbox-style-5">
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    <a href="#">
                                                        <span>
                                                            Application Development
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </h2>
                                                <div class="pbmit-ihbox-btn">
                                                    <a href="#">
                                                        <span>
                                                            Application Development
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-wapper"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="pbmit-ihbox-style-5">
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    <a href="#">
                                                        <span>
                                                            Digital Marketing
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </h2>
                                                <div class="pbmit-ihbox-btn">
                                                    <a href="#">
                                                        <span>
                                                            Digital Marketing
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-wapper"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <div class="pbmit-ihbox-style-5">
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    <a href="#">
                                                        <span>
                                                            Photography
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </h2>
                                                <div class="pbmit-ihbox-btn">
                                                    <a href="#">
                                                        <span>
                                                            Photography
                                                            <svg class="pbmit-svg-arrow"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="19" height="19" viewBox="0 0 19 19"
                                                                xml:space="preserve">
                                                                <line x1="1" y1="18" x2="17.8"
                                                                    y2="1.2"></line>
                                                                <line x1="1.2" y1="1" x2="18"
                                                                    y2="1"></line>
                                                                <line x1="18" y1="17.8" x2="18"
                                                                    y2="1"></line>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-wapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- About End -->

        <!-- Service Start -->
        <section class="pbmit-element-service-style-4 pbmit-bg-color-blackish">
            <div class="container-fluid">
                <div class="row">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($services as $service)
                        @php
                            $i++;
                        @endphp
                        <article class="pbmit-service-style-4 col-md-12">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-service-img-wrapper"
                                    style="background-image:url('{{ asset('uploads/' . $service->image) }}')">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('uploads/' . $service->image) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-content-inner">
                                        <div class="pbminfotech-box-number">{{ $i }}</div>
                                        <div class="pbmit-cat-wrap">
                                            <div class="pbmit-serv-cat">
                                                <a href="services.html" rel="tag">Service</a>
                                            </div>
                                            <h3 class="pbmit-service-title">
                                                <a
                                                    href="{{ route('service.detail', $service->id) }}">{{ $service->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="pbmit-svg-btn">
                                        <a class="btn-arrow" href="{{ route('service.detail', $service->id) }}"
                                            title="Qualify leads">
                                            <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                                height="19" viewBox="0 0 19 19" xml:space="preserve">
                                                <line x1="1" y1="18" x2="17.8" y2="1.2">
                                                </line>
                                                <line x1="1.2" y1="1" x2="18" y2="1">
                                                </line>
                                                <line x1="18" y1="17.8" x2="18" y2="1">
                                                </line>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="pbminfotech-icon-box">
                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                </div>
                            </div>
                            <a href="{{ route('service.detail', $service->id) }}" class="pbmit-link"></a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Service End -->

        <!--Ihbox Start -->
        <section class="section-lgx">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-7">
                        <div class="pbmit-mask-image-style-1">
                            <div class="pbmit-mask-image-box">
                                <div class="pbmit-mask-image-title-image"
                                    style="background-image:url('{{ asset('assets/images/homepage-04/mask-image.jpg') }}')">
                                    <h2 class="pbmit-element-title">How we work</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-5"></div>
                </div>
                <div class="ihbox-section-four">
                    <div class="row g-0">
                        <div class="col-md-6 col-xl-3">
                            <div class="ihbox-style-7-box">
                                <div class="pbmit-ihbox-style-7">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-investment"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Website Development
                                        </h2>
                                        <h4 class="pbmit-element-subtitle">
                                            Our mission is to create websites that combine functionality, aesthetics, and
                                            performance.
                                        </h4>
                                        <div class="pbmit-heading-desc">
                                            <ul>
                                                <li>Understand your business goals</li>
                                                <li>Design user-friendly & responsive layouts</li>
                                                <li>Develop with modern technologies</li>
                                                <li>Optimize for speed & SEO</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="ihbox-style-7-box">
                                <div class="pbmit-ihbox-style-7">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-call-center"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Application Development
                                        </h2>
                                        <h4 class="pbmit-element-subtitle">
                                            We build applications that deliver seamless <br> digital experiences.
                                        </h4>
                                        <div class="pbmit-heading-desc">
                                            <ul>
                                                <li>Analyze your requirements</li>
                                                <li>Design intuitive user interfaces</li>
                                                <li>Develop secure & scalable apps</li>
                                                <li>Test & deploy for smooth performance</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="ihbox-style-7-box">
                                <div class="pbmit-ihbox-style-7">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-setting-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Digital Marketing
                                        </h2>
                                        <h4 class="pbmit-element-subtitle">
                                            We help you grow your brand with data-driven strategies.
                                        </h4>
                                        <div class="pbmit-heading-desc">
                                            <ul>
                                                <li>Conduct in-depth market research</li>
                                                <li>Plan and execute marketing campaigns</li>
                                                <li>Optimize SEO & social media presence</li>
                                                <li>Track analytics to maximize ROI</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="ihbox-style-7-box">
                                <div class="pbmit-ihbox-style-7">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-capigo-icon pbmit-capigo-icon-setting-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Photography
                                        </h2>
                                        <h4 class="pbmit-element-subtitle">
                                            We capture visuals that tell your brand’s story.
                                        </h4>
                                        <div class="pbmit-heading-desc">
                                            <ul>
                                                <li>Plan creative concepts</li>
                                                <li>Professional product & brand shoots</li>
                                                <li>Edit & enhance high-quality visuals</li>
                                                <li>Deliver media that connects with your audience</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Ihbox End -->

        <!-- About Us Start -->
        <section class="pbmit-bg-color-blackish pbmit-sticky-special ">
            <div class="container pbmit-col-stretched-yes pbmit-col-left">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6">
                        <div class="pbmit-col-stretched-left">
                            <img src="{{ asset('assets/images/homepage-04/sticky-section-side-img.jpg') }}"
                                class="img-fluid w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6 pbmit-sticky-col2-special">
                        <div class="about-us-four-content" style="margin-bottom: 110px">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">Why Choose Us?</h4>
                                <h2 class="pbmit-title">Building bridges for sustainable and growth</h2>
                                <div class="pbmit-heading-desc text-white">
                                    At Creative Tech Studio, we don’t just deliver services—we build solutions that inspire
                                    growth, innovation, and success. Whether it’s a website, application, marketing
                                    campaign, or photography project, we ensure quality and creativity at every step.

                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="pbminfotech-ele-fid-style-6">
                                        <div class="pbmit-fld-contents">
                                            <div class="pbmit-circle-outer" data-digit="75" data-fill="#00b30f"
                                                data-emptyfill="#052e26" data-before="" data-after="<span>%</span>"
                                                data-thickness="2" data-size="130">
                                                <div class="pbmit-circle">
                                                    <div class="pbmit-fid-inner">
                                                        <span class="pbmit-fid-number"></span>
                                                        <span class="pbmit-number-rotate numinate"
                                                            data-appear-animation="animateDigits" data-from="0"
                                                            data-to="95" data-interval="5" data-before=""
                                                            data-before-style="" data-after=""
                                                            data-after-style="">95</span>
                                                        <span>%</span>
                                                    </div>
                                                </div>
                                                <div class="pbmit-fid-sub">
                                                    <h3 class="pbmit-fid-title">Client Satisfaction
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pbminfotech-ele-fid-style-6">
                                        <div class="pbmit-fld-contents">
                                            <div class="pbmit-circle-outer" data-digit="89" data-fill="#00b30f"
                                                data-emptyfill="#052e26" data-before="" data-after="<span>%</span>"
                                                data-thickness="2" data-size="130">
                                                <div class="pbmit-circle">
                                                    <div class="pbmit-fid-inner">
                                                        <span class="pbmit-fid-number"></span>
                                                        <span class="pbmit-number-rotate numinate"
                                                            data-appear-animation="animateDigits" data-from="0"
                                                            data-to="85" data-interval="5" data-before=""
                                                            data-before-style="" data-after=""
                                                            data-after-style="">85</span>
                                                        <span>%</span>
                                                    </div>
                                                </div>
                                                <div class="pbmit-fid-sub">
                                                    <h3 class="pbmit-fid-title">Business Growth Boost
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="pbmit-heading">Expertise That Matters</h5>
                            {{-- <div class="pbmit-text-color-white">We understand the importance of financial planning
                                for individuals and businesses alike. Our team of expert financial planners is
                                committed to helping you achieve your financial goals and secure your financial
                                future.</div> --}}
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Skilled team in Website & Application
                                        Development</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Proven track record in Digital Marketing
                                        success</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Creative professionals for high-quality
                                        Photography</span>
                                </li>
                            </ul>

                            <h5 class="pbmit-heading">Our Promise</h5>
                            {{-- <div class="pbmit-text-color-white">We understand the importance of financial planning
                                for individuals and businesses alike. Our team of expert financial planners is
                                committed to helping you achieve your financial goals and secure your financial
                                future.</div> --}}
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Tailor-made solutions aligned with your goals</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Transparent communication & timely delivery</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <i aria-hidden="true" class="ti-check"></i>
                                    </span>
                                    <span class="pbmit-icon-list-text">Innovative, future-ready digital strategies</span>
                                </li>
                            </ul>
                            <h5 class="pbmit-heading">Research & Innovation</h5>
                            {{-- <div class="sticky-img">
                                <img src="images/homepage-04/sticky-img.jpg" class="img-fluid" alt="">
                            </div> --}}
                            <div class="mb-5 pbmit-text-color-white">
                                We continuously study trends, markets, and technologies to bring you cutting-edge solutions
                                that keep your brand ahead of the competition.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->

        <!-- Our Process Start -->
        <section class="pbmit-element-miconheading-style-8 section-lgx overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-xl-6">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Our process</h4>
                            <h2 class="pbmit-title">Celebrating excellence in extraordinary achievements</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6">
                        <div class="process-slider-arrow swiper-btn-custom d-flex flex-row-reverse"></div>
                    </div>
                </div>
                <div class="pbmit-elemnt-line">
                    <div class="swiper-slider" data-arrows-class="process-slider-arrow" data-loop="true"
                        data-autoplay="false" data-dots="false" data-arrows="true" data-columns="4" data-margin="0"
                        data-effect="slide">
                        <div class="swiper-wrapper">
                            <!-- Slide1 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2018
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Foundation of Creative Tech Studio
                                            </h2>
                                            <div class="pbmit-heading-desc">Started with a vision to deliver innovative
                                                digital solutions in Website Development and set the base for long-term
                                                growth.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide2 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2019
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Expansion in Website Development
                                            </h2>
                                            <div class="pbmit-heading-desc">Delivered our first 100+ websites with modern
                                                UI/UX designs, focusing on client satisfaction and digital presence.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide3 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2020
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Introduction of Application Development
                                            </h2>
                                            <div class="pbmit-heading-desc">Launched custom mobile & web apps for
                                                businesses to scale their operations digitally.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide4 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2021
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Digital Marketing Excellence
                                            </h2>
                                            <div class="pbmit-heading-desc">Became a one-stop solution with SEO, social
                                                media, and paid campaigns that boosted client visibility and revenue.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide5 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2022
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Photography & Creative Media
                                            </h2>
                                            <div class="pbmit-heading-desc">Introduced professional photography & branding
                                                services to give clients a strong visual identity.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide6 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2023
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Strategic Partnerships & Growth
                                            </h2>
                                            <div class="pbmit-heading-desc">Collaborated with top tech providers and
                                                expanded services for businesses across industries.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide7 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2024
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Innovation & Client-Centric Solutions
                                            </h2>
                                            <div class="pbmit-heading-desc">Focused on automation, AI-driven strategies,
                                                and custom apps to simplify business workflows.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide6 -->
                            <article class="pbmit-miconheading-style-8 swiper-slide">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-headingicon">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">2025
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title">
                                                Creative Tech Studio – A Global Vision
                                            </h2>
                                            <div class="pbmit-heading-desc">On a mission to provide complete digital
                                                transformation solutions worldwide – combining Website Development, App
                                                Development, Digital Marketing, and Photography.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Process End -->

        <!-- Marquee Start -->
        <section class="pbminfotech-element-marquee-effect marquee-four">
            <div class="container-fluid p-0">
                <div class="swiper-slider marquee">
                    <div class="swiper-wrapper">
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title">
                                    BUILDING WEBSITES
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title">
                                    CREATING APPS
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title">
                                    GROWING BRANDS
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title">
                                    CAPTURING MOMENTS
                                </h2>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Marquee End -->

        <!-- Testimonial Start -->
        <section class="pbmit-bg-color-light testimonial-four">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-3 position-relative">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">Testimonials</h4>
                            <h2 class="pbmit-title">What our clients say</h2>
                        </div>
                        <div class="testimonial-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
                    </div>
                    <div class="col-md-12 col-lg-9 pbmit-testimonialbox-right">
                        <div class="swiper-slider" data-arrows-class="testimonial-arrow" data-loop="false"
                            data-autoplay="false" data-dots="true" data-arrows="true" data-columns="1" data-margin="30"
                            data-effect="slide">
                            <div class="swiper-wrapper">
                                <!-- Slide1 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-01.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Stephen Welch</h3>
                                                    <div class="pbminfotech-testimonial-detail">Satisfied Client
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide2 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-02.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Martin Bailey</h3>
                                                    <div class="pbminfotech-testimonial-detail">Chief Finance</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide3 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star"></i>
                                                <i class="pbmit-base-icon-star"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-03.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Emma Greed</h3>
                                                    <div class="pbminfotech-testimonial-detail">Legal Advisor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide4 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-04.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Daniel Craig</h3>
                                                    <div class="pbminfotech-testimonial-detail">Tax Manager</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide5 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-05.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Amelia Dyer</h3>
                                                    <div class="pbminfotech-testimonial-detail">Stockbroker</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide6 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbminfotech-box-content">
                                            <blockquote class="pbminfotech-testimonial-text">
                                                <p>I express my deep gratitude to the team for the impeccable and
                                                    productive service to the company activities based on the
                                                    results of seven years of joint work I recommend the services
                                                </p>
                                            </blockquote>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                                <i class="pbmit-base-icon-star pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-content-inner">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="{{ asset('assets/images/homepage-02/testimonial/testimonial-06.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="pbminfotech-box-author">
                                                    <h3 class="pbminfotech-box-title">Henry Cavil</h3>
                                                    <div class="pbminfotech-testimonial-detail">Cost Marketing
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Client Start -->
        <section class="section-lgb pbmit-bg-color-light overflow-hidden">
            <div class="container-fluid pbmit-col-stretched-yes pbmit-col-right">
                <div class="pbmit-col-stretched-right">
                    <div class="swiper-slider" data-loop="true" data-autoplay="false" data-dots="false"
                        data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            <!-- Slide1 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-01.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-01.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide2 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-02.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-02.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide3 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-03.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-03.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide4 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-04.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-04.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide5 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-05.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-05.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Slide6 -->
                            <article class="pbmit-client-style-1 swiper-slide">
                                <div class="pbmit-client-content">
                                    <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                        <h4 class="pbmit-hide">Client 06</h4>
                                        <div class="pbmit-client-hover-img">
                                            <img src="{{ asset('assets/images/client/client-global-06.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/client/client-dark-06.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client End -->

        <!-- Blog Start -->
        <section class="section-lgx">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">Latest Blog</h4>
                    <h2 class="pbmit-title">Latest Blogs Coming</h2>
                </div>
                <div class="swiper-slider" data-loop="false" data-autoplay="false" data-dots="false"
                    data-arrows="false" data-columns="3" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">

                        <!-- Slide1 -->
                        @foreach ($blogs as $blog)
                            <article class="pbmit-blog-style-1 swiper-slide">
                                <div class="post-item">
                                    <div class="pbmit-featured-container">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('uploads/' . $blog->image) }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                            <div class="pbmit-meta-category">
                                                <a href="{{ route('blog' )}}" rel="category tag">Blog</a>
                                            </div>
                                            <div class="pbmit-meta-date">
                                                <span class="pbmit-date-wrap">{{ $blog->created_at->format('d M, Y') }}</span>
                                            </div>
                                        </div>
                                        <h3 class="pbmit-post-title">
                                            <a href="{{ route('blog.details', $blog->id)}}">{{ $blog->title }}</a>
                                        </h3>
                                        <div class="pbmit-svg-btn">
                                            <a class="btn-arrow" href="{{ route('blog.details', $blog->id)}}">
                                                Read More
                                                <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="10" height="19" viewBox="0 0 19 19"
                                                    xml:space="preserve">
                                                    <line x1="1" y1="18" x2="17.8" y2="1.2">
                                                    </line>
                                                    <line x1="1.2" y1="1" x2="18" y2="1">
                                                    </line>
                                                    <line x1="18" y1="17.8" x2="18" y2="1">
                                                    </line>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog.details', $blog->id)}}" class="pbmit-link"></a>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

    </div>
    <!-- Page Content End -->

    <!-- footer -->
@endsection
