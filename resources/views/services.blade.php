@extends('layouts.header')
@section('content')
@section('title', 'Services - Creative Tech Studio')
@section('meta_description', 'Discover our professional web development, design, and digital marketing services at Creative Tech Studio to grow your business online.')
@section('meta_keywords', 'web development, web design, digital marketing, laravel services, creative tech studio')
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
                @foreach ($services as $service)
                    <div class="col-md-6">
                        <article class="pbmit-ele pbmit-service-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-service-content">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('uploads/' . $service->image) }}" class="img-fluid"
                                                alt="" style="height: 450px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-capigo-icon pbmit-capigo-icon-global"></i>
                                        </div>
                                        <div class="pbmit-serv-cat">
                                            <a href="{{ route('services') }}" rel="tag">Services</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a
                                                href="{{ route('service.detail', $service->id) }}">{{ $service->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services End -->

</div>

<!-- footer -->
@endsection
