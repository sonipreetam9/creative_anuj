@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> {{ $blogs->title }}</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> {{ $blogs->title }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <!-- Blog Single Details -->
        <section class="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 blog-right-col">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="blog-details">
                                    <div class="post blog-classic">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('uploads/' . $blogs->image) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-blog-classic-inner">
                                            <div class="pbmit-blog-meta pbmit-blog-meta-top">
                                                <span class="pbmit-meta pbmit-meta-date">
                                                    <a href="blog-single-detail.html" rel="bookmark">
                                                        <time class="entry-date published"
                                                            datetime="{{ $blogs->created_at->toIso8601String() }}">
                                                            {{ $blogs->created_at->format('d-M-Y') }}
                                                        </time>

                                                    </a>
                                                </span>
                                            </div>
                                            <div class="pbmit-entry_content">

                                                <h3 class="mb-3">{{ $blogs->title }}</h3>
                                                <p>{{ $blogs->long_description }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 blog-left-col">
                        <aside class="sidebar">
                            <aside class="widget widget-recent-post">
                                <h2 class="widget-title">Recent Post</h2>
                                <ul class="recent-post-list">
                                    @foreach ($Anotherblog as $data)
                                        <li class="recent-post-list-li">
                                            <a class="recent-post-thum" href="{{ route('blog.details', $data->id) }}">
                                                <img src="{{ asset('uploads/' . $data->image) }}" class="img-fluid"
                                                    alt="">
                                            </a>
                                            <div class="pbmit-rpw-content">
                                                <span class="pbmit-rpw-title">
                                                    <a
                                                        href="{{ route('blog.details', $data->id) }}">{{ $data->title }}</a>
                                                </span>
                                                <span class="pbmit-rpw-date">
                                                    <a href="{{ route('blog.details', $data->id) }}">
                                                        {{ $data->created_at->format('d-M-Y') }}
                                                    </a>

                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
                            <aside class="widget pbmit-service-ad">
                                <div class="textwidget">
                                    <div class="pbmit-service-ads">
                                        <div class="pbmit-logo-img">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="">
                                        </div>
                                        <div class="pbmit-ads-title">
                                            {{-- <h3 class="pbmit-title-one">First-Class Finance</h3> --}}
                                            <h3 class="pbmit-title-second">Consulting Experts</h3>
                                        </div>
                                        <div class="pbmit-ads-contact">
                                            <div class="pbmit-ads-number">+91 {{ $comp_phone }}</div>
                                        </div>
                                        <div class="pbmit-svg-btn">
                                            <a class="pbmit-btn pbmit-btn-white" href="tel:+{{ $comp_phone }}">
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
                </div>
            </div>
        </section>
        <!-- Blog Single Details End -->

    </div>
    <!-- Page Content End -->

    <!-- footer -->
@endsection
