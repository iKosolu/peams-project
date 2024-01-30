<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>SplashDash</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!--Page Specific -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">
    <!--Custom Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
</head>


<body>
<div class="loader">
    <div class="spinner">
        <img src="{{ asset('assets/images/loader.gif') }}" alt=""/>
    </div>
</div>
<!-- Main Body -->
<div class="page-wrapper">
    <!-- Header Start -->
    <header class="header-wrapper main-header">
        <div class="header-inner-wrapper">
            <div class="header-right">
                <div class="serch-wrapper">
                    <form>
                        <input type="text" placeholder="Search Here...">
                    </form>
                    <a class="search-close" href="javascript:void(0);"><span class="icofont-close-line"></span></a>
                </div>
                <div class="header-left">
                    <div class="header-links">
                        <a href="javascript:void(0);" class="toggle-btn">
                            <span></span>
                        </a>
                    </div>
                    <div class="header-links search-link">
                        <a class="search-toggle" href="javascript:void(0);">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
                                    s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
                                    c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
                                    s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                        </a>
                    </div>
                </div>
{{--                <div class="header-controls">--}}

{{--                    <div class="user-info-wrapper header-links">--}}
{{--                        <a href="javascript:void(0);" class="user-info">--}}
{{--                            <img src="assets/images/user.jpg" alt="" class="user-img">--}}
{{--                            <div class="blink-animation">--}}
{{--                                <span class="blink-circle"></span>--}}
{{--                                <span class="main-circle"></span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="user-info-box">--}}
{{--                            <div class="drop-down-header">--}}
{{--                                <h4>John Brown</h4>--}}
{{--                                <p>UI | UX Designer</p>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="profile.html">--}}
{{--                                        <i class="far fa-edit"></i> Edit Profile--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="setting.html">--}}
{{--                                        <i class="fas fa-cog"></i> Settings--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="login.html">--}}
{{--                                        <i class="fas fa-sign-out-alt"></i> logout--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </header>
    <!-- Sidebar Start -->
    <aside class="sidebar-wrapper">
        <div class="logo-wrapper">
            <a href="{{ route('dashboard') }}" class="admin-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="sp_logo">
                <img src="{{ asset('assets/images/mini_logo.png') }}" alt="" class="sp_mini_logo">
            </a>
        </div>
        <div class="side-menu-wrap">
            <ul class="main-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="active">
                            <span class="icon-menu feather-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </span>
                        <span class="menu-text">
                                Dashboard
                            </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                            <span class="icon-menu feather-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>                            </span>
                        <span class="menu-text">
                                Products
                            </span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('products')}}">
                                    <span class="icon-dash">
                                    </span>
                                <span class="menu-text">
                                        Lists
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('products_create')}}">
                                    <span class="icon-dash">
                                    </span>
                                <span class="menu-text">
                                        Add
                                    </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('purchases')}}">
                            <span class="icon-menu feather-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>                            </span>
                        <span class="menu-text">
                                Purchases
                            </span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Container Start -->
    <div class="page-wrapper">
        <div class="main-content">
            @yield('content')
            <div class="ad-footer-btm">
                <p>Copyright 2022 © SplashDash All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<!-- Script Start -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!-- Page Specific -->
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<!-- Custom Script -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
