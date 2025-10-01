<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Dashboard | TG - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($small_logo) }}" />
    {{-- <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css')}}" /> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <!-- jsvectormap css -->
    <link href="{{ asset('admin1/assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Swiper slider css -->
    <link href="{{ asset('admin1/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('admin1/assets/js/layout.js') }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin1/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('admin1/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('admin1/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom Css-->
    <link href="{{ asset('admin1/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset($dashboard_logo) }}" alt="" height="88">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset($dashboard_logo) }}" alt="" height="88">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset($dashboard_logo) }}" alt="" height="88">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset($dashboard_logo) }}" alt="" height="18">
                                </span>
                            </a>

                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>


                    </div>

                    <div class="d-flex align-items-center">

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('admin1/assets/images/users/avatar-1.jpg') }}"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">User</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Admin !</h6>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>

                                {{-- <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a> --}}

                                <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset($dashboard_logo) }}" alt="" height="82">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset($dashboard_logo) }}" alt="" height="82">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset($dashboard_logo) }}" alt="" height="82">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset($dashboard_logo) }}" alt="Logo" width="82">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-lin" href="{{ route('admin.dashboard') }}">
                                <i class="mdi mdi-view-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>About</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link " href="{{ route('admin.about') }}">
                                <i class="mdi mdi-account-multiple"></i> <span>About us</span>
                            </a>
                        </li>


                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Services</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Services</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.service') }}" class="nav-link"
                                            data-key="t-one-page"> Add
                                            Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.all.service') }}" class="nav-link"
                                            data-key="t-multi-page">Service
                                            List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Portfolio</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLandingportfolio" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLandingportfolio">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Portfolio</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLandingportfolio">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.portfolio.heading') }}" class="nav-link"
                                            data-key="t-one-page"> Add
                                            Portfolio Heading</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ route('admin.portfolio.index') }}" class="nav-link"
                                            data-key="t-one-page"> Add
                                            Portfolio Post</a>
                                    </li> --}}
                                    {{--
                                    <li class="nav-item">
                                        <a href="{{ route('admin.all.portfolio') }}" class="nav-link"
                                            data-key="t-multi-page">Portfolio
                                            List</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Blog</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLandingblog" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLandingblog">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Blog</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLandingblog">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.blog') }}" class="nav-link" data-key="t-one-page">
                                            Add
                                            Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.all.blog') }}" class="nav-link"
                                            data-key="t-multi-page">Blog
                                            List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span
                                data-key="t-components">Request</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.all.contact') }}">
                                <i class="mdi mdi-account-circle-outline"></i> <span>Contact Form Request</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.logout') }}">
                                <i class="mdi mdi-logout"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <div class="main-content">
            @yield('super')
            @include('admin.layouts.footer')
