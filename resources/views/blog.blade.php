@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> Blog</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item"> Blog</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <div class="page-content">

        <!-- Blog Grid Col 3 -->
        <section class="section-lg">
            <div class="container">
                <div class="row pbmit-element-posts-wrapper">
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-01b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Determine and get in touch with prospects.</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-02b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Measure These 8 Crucial Brand Awareness Metrics</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-03b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Keep aware of new current trends and competitors</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-04b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Speak with salespeople and development managers.</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-05b.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Motivate your employees to advance their skills.</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-06b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">Create sales content based on achievements.</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-07b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">How should a corporation conduct a SWOT analysis?</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-08b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">A Startup’s Guide to MVP Development</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                    <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('assets/images/blog/blog-09b.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                    <div class="pbmit-meta-date">
                                        <span class="pbmit-date-wrap">14 Jul, 2023</span>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-details') }}">The Complete Guide to Product Branding Strategy</a>
                                </h3>
                                <div class="pbmit-svg-btn">
                                    <a class="btn-arrow" href="{{ route('blog-details') }}">
                                        Read More
                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10"
                                            height="19" viewBox="0 0 19 19" xml:space="preserve">
                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('blog-details') }}" class="pbmit-link"></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- Blog Grid Col 3 End -->

    </div>

    <!-- footer -->
@endsection

