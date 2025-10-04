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
                    @foreach ($dataq as $blog)
                        <article class="pbmit-ele pbmit-blog-style-1 col-md-4">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="{{ asset('uploads/' . $blog->image) }}" class="img-fluid"
                                                alt="" style="height: 350px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                        <div class="pbmit-meta-date">
                                            <span class="pbmit-date-wrap">{{ $blog->created_at->format('d-M-Y') }}</span>

                                        </div>
                                    </div>
                                    <h3 class="pbmit-post-title">
                                        <a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="pbmit-svg-btn">
                                        <a class="btn-arrow" href="{{ route('blog.details', $blog->id) }}">
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
                                <a href="{{ route('blog.details', $blog->id) }}" class="pbmit-link"></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Grid Col 3 End -->

    </div>

    <!-- footer -->
@endsection
