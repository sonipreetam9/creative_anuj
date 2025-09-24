@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> Services</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Services</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <div class="page-content">

        <!-- Services -->
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-01.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Advisory</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Qualify leads</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-02.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Consulting</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Business Planning</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-03.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Inventory</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Market Research</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-04.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Management</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Financial Management</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-05.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Marketing</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Finance Instruments</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-06.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Strtegy</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Expert Consultation</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-07.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Consulting</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Qualify Leads</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-08.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Management</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Tax/Audit Consulting</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('assets/images/service/service-09.jpg') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Strtegy</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="{{ route('service-detail') }}">Technology Growth</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

    </div>

    <!-- footer -->
@endsection
