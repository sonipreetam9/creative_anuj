@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper" style="background-image: url('{{ asset('uploads/' . $service->image) }}')">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> {{ $service->title }}</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>

                            <span><span class="post-root post post-post current-item"> {{ $service->title }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <!-- Service Details -->
        <section class="service_details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 service-left-col order-2 order-lg-1 sidebar">
                        <aside class="service-sidebar">
                            <aside class="widget post-list">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="all-post-list">
                                    <ul>
                                        @foreach ($services as $data)
                                            <li
                                                class="{{ request()->routeIs('service.detail') && request()->route('id') == $data->id ? 'post-active' : '' }}">
                                                <a href="{{ route('service.detail', $data->id) }}">
                                                    {{ $data->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>


                                </div>
                            </aside>
                            <aside class="widget pbmit-service-ad">
                                <div class="textwidget">
                                    <div class="pbmit-service-ads">
                                        <div class="pbmit-logo-img">
                                            <img src="images/service-logo.svg" alt="">
                                        </div>
                                        <div class="pbmit-ads-title">
                                            <h3 class="pbmit-title-one">Contact Now</h3>
                                        </div>
                                        <div class="pbmit-ads-contact">
                                            <div class="pbmit-ads-number">+91 {{ $comp_phone }}</div>
                                        </div>
                                        <div class="pbmit-svg-btn">
                                            <a class="pbmit-btn pbmit-btn-white" href="tel:+91{{ $comp_phone }}">
                                                Get In Touch
                                                <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
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
                                </div>
                            </aside>
                        </aside>
                    </div>
                    <div class="col-lg-9 service-right-col order-1">
                        <div class="pbmit-service-single">
                            <div class="pbmit-service-feature-image">
                                <img src="images/service/service-01b.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-heading-subheading animation-style2">
                                    <h3 class="pbmit-title">{{ $service->title }}</h3>
                                </div>
                                <p>{{ $service->long_description }}</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Details End -->

    </div>
    <!-- Page Content End -->

    <!-- footer -->
@endsection
