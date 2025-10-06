@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> {{ $heading->title }}</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> {{ $heading->title }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <div class="page-content">

        <!-- Portfolio Grid Col 3 -->
        <section class="section-lg portfolio-grid-col-3">
            <div class="container">
                <div class="row">
                    @foreach ($portfolios as $portfolio)
                        <article class="pbmit-ele pbmit-portfolio-style-2 col-md-4">
                            <div class="pbminfotech-post-content">
                                <div class="pbmit-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('uploads/' . $portfolio->image) }}"
                                                class="img-fluid" alt="image" style="height: 400px; object-fit: cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-port-cat">
                                        <a href="#" rel="tag">Advice</a>
                                    </div>
                                    <h3 class="pbmit-title">{{ $heading->title }}</h3>
                                </div>
                                {{-- <a href="single-detail-style-1.html" class="pbmit-link"></a> --}}
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Portfolio Grid Col 3 End -->

    </div>

    <!-- footer -->
@endsection
