<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Welcome to Creative Tech Studio')</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="@yield('meta_description', 'Creative Tech Studio offers web development, design, and digital marketing solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'seo, creative tech studio, web development')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="canonical" href="{{ url()->current() }}">
    <style>
        ..marquee-four {
            padding-bottom: 370px !important;
        }
    </style>
</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <header class="site-header header-style-4 pbmit-bg-color-secondary">
            <div class="pbmit-main-header-area">
                <div class="container-fluid">
                    <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                        <div class="pbmit-logo-menuarea d-flex align-items-center">
                            <div class="site-branding">
                                <h1 class="site-title">
                                    <a href="{{ route('home') }}">
                                        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                            alt="Logo">
                                    </a>
                                </h1>
                            </div>
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <i class="pbmit-base-icon-close-circular-button-symbol"></i>
                                            </span>
                                            <ul class="navigation clearfix">
                                                <li>
                                                    <a href="{{ route('home') }}">Home</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about') }}">About</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ route('services') }}">Services</a>
                                                    <ul>
                                                        @foreach ($services as $service)
                                                            <li>
                                                                <a href="{{ route('service.detail', $service->id) }}">
                                                                    {{ $service->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    {{-- <a href="{{ route('portfolio') }}">Portfolio</a> --}}
                                                    <a href="#">Portfolio</a>
                                                    <ul>
                                                        @foreach ($portfolioheading as $heading)
                                                            <li><a
                                                                    href="{{ route('portfolio', $heading->id) }}">{{ $heading->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}">Blog</a>
                                                </li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>

                            </div>
                        </div>
                        <div class="pbmit-right-box d-flex align-items-center">
                            {{-- <div class="pbmit-header-search-btn">
                                <a href="{{ route('contact') }}"><i class=" pbmit-base-icon-search-1"></i></a>
                            </div> --}}
                            <a href="{{ route('contact') }}" class="pbmit-btn pbmit-btn-white">
                                <span class="pbmit-header-button-text">
                                    Get In Touch
                                    <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                        height="19" viewBox="0 0 19 19" xml:space="preserve">
                                        <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                        <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                        <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        @yield('content')
        @include('layouts.footer')
