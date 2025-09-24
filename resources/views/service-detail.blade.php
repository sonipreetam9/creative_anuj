@extends('layouts.header')
@section('content')
    <!-- Header Main Area End Here -->

    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <h1 class="pbmit-tbar-title"> Qualify leads</h1>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            
                            <span><span class="post-root post post-post current-item"> Service details</span></span>
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
                                        <li class="post-active"><a href="service-detail.html"> Qualify leads </a></li>
                                        <li><a href="service-detail.html"> Business Planning </a></li>
                                        <li><a href="service-detail.html"> Market Research </a></li>
                                        <li><a href="service-detail.html"> Financial Management </a></li>
                                        <li><a href="service-detail.html"> Finance Instruments </a></li>
                                        <li><a href="service-detail.html"> Expert Consultation </a></li>
                                        <li><a href="service-detail.html"> Qualify Leads </a></li>
                                        <li><a href="service-detail.html"> Tax/Audit Consulting </a></li>
                                        <li><a href="service-detail.html"> Technology Growth </a></li>
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
                                            <h3 class="pbmit-title-one">First-Class Finance</h3>
                                            <h3 class="pbmit-title-second">Consulting Experts</h3>
                                        </div>
                                        <div class="pbmit-ads-contact">
                                            <div class="pbmit-ads-number">+(123) 1234-567-8901</div>
                                        </div>
                                        <div class="pbmit-svg-btn">
                                            <a class="pbmit-btn pbmit-btn-white" href="tel:+(123)12345678901">
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
                                    <h3 class="pbmit-title">Future Management Consulting</h3>
                                </div>
                                <P>What are the top consulting firms in India for Finance services? The top Finance
                                    consulting firms in India list presents the country’s leading consultancy firms
                                    <strong>specialised in Finance</strong> , based on our unique database of more than 1
                                    million data points spanning insights from clients and consultants. Both consultants and
                                    advisors may have studied economics, accounting or finance in college. It isn’t uncommon
                                    for them to earn MBAs, and many hold advanced certifications. One of the most highly
                                    regarded certifications is the certified financial planner (CFP) designation, but there
                                    are many others of value. Capabilities are assessed on the breadth of depth of Finance
                                    offerings, advisory and implementation expertise in Finance, the track record of
                                    consulting projects delivered in the area of Finance and the quality of thought
                                    leadership.</P>
                                <div class="pbmit-service_imgbox">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pbmit-animation-style1">
                                                <img src="images/service/service-det-01.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pbmit-animation-style2">
                                                <img src="images/service/service-det-02.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-heading-subheading animation-style2">
                                    <h3 class="pbmit-title">Finance Planning & Strategy</h3>
                                </div>
                                <p>In some cases, a financial consultant may have more financial plan experience than the
                                    typical financial advisor. Financial consultants usually provide investment services as
                                    well, though. our clients are often surprised by the possibilities we present to them;
                                    by thinking outside the box we present exciting new ventures:</p>
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true" class="ti-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">A plan for how you will save up for retirement
                                            and sustain yourself once retired.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true" class="ti-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">A financial strategy to help you grow your
                                            investments quickly, money into a savings account increase much in value over
                                            time.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true" class="ti-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">A plan to pay off your high-interest debt, like
                                            credit cards and loans, save more of your money in interest payments.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true" class="ti-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">A plan for how much you need to set aside
                                            monthly in order to have enough money for emergencies, like car repairs or
                                            medical bills.</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <i aria-hidden="true" class="ti-check"></i>
                                        </span>
                                        <span class="pbmit-icon-list-text">A plan that will ensure you are financially
                                            secure if something were to happen to you or your family, long-term care
                                            insurance.</span>
                                    </li>
                                </ul>
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
