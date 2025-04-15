<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Vineta - Multipurpose eCommerce</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Themesflat Vineta - A modern and versatile eCommerce template designed for various online stores, including fashion, furniture, electronics, and more. SEO-friendly, fast-loading, and highly customizable.">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-icons.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/styles.css') }}">

    
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/images/logo/favicon.png') }}">

</head>

<body>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right"></span>
    </button>

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-dark-5 topbar-bg">
            <div class="container">
                <div class="topbar-wraper">
                    <div class="d-none d-xl-block flex-shrink-0">
                        <ul class="tf-social-icon topbar-left">
                            <li><a href="https://www.facebook.com/" class="social-item social-facebook"><i
                                        class="icon icon-fb"></i></a></li>
                            <li><a href="https://www.instagram.com/" class="social-item social-instagram"><i
                                        class="icon icon-instagram"></i></a>
                            </li>
                            <li><a href="https://x.com/" class="social-item social-x"><i class="icon icon-x"></i></a>
                            </li>
                            <li><a href="https://www.snapchat.com/" class="social-item social-snapchat"><i
                                        class="icon icon-snapchat"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="overflow-hidden">
                        <div class="topbar-center marquee-wrapper">
                            <div class="initial-child-container">
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 2 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 3 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 4 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <!-- 5 -->
                                <div class="marquee-child-item">
                                    <p>Return extended to 60 days</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Life-time Guarantes</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                                <div class="marquee-child-item">
                                    <p>Limited-Time Offer</p>
                                </div>
                                <div class="marquee-child-item"><span class="dot"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-block flex-shrink-0">
                        <div class="topbar-right">
                            <div class="tf-languages">
                                <select class="image-select center style-default type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </div>
                            <div class="tf-currencies">
                                <select class="image-select center style-default type-currencies">
                                    <option selected data-thumbnail="{{ asset('backend/assets/images/country/us.png') }}">United States (USD $)
                                    </option>
                                    <option data-thumbnail="{{ asset('backend/assets/images/country/fr.png') }}">France (EUR €)</option>
                                    <option data-thumbnail="{{ asset('backend/assets/images/country/ger.png') }}">Germany (EUR €)</option>
                                    <option data-thumbnail="{{ asset('backend/assets/images/country/vn.png') }}">Vietnam (VND ₫)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header id="header" class="header-default">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="index.html#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories1"></i>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6">
                        <a href="index.html" class="logo-header">
                            <img src="{{ asset('frontend/assets/images/logo/logo.svg') }}" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-8 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-menu">
                                <li class="menu-item">
                                    <a href="index.html#" class="item-link">Home</a>
                                    
                                </li>
                                <li class="menu-item">
                                    <a href="index.html#" class="item-link">Shop<i class="icon icon-arr-down"></i></a>
                                    <div class="sub-menu mega-menu mega-shop">
                                        <div class="wrapper-sub-menu">
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">SHOP LAYOUT</div>
                                                <ul class="menu-list">
                                                    <li><a href="shop-default.html"
                                                            class="menu-link-text link">Default</a></li>
                                                    <li><a href="shop-left-sidebar.html"
                                                            class="menu-link-text link">Filter Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html"
                                                            class="menu-link-text link">Filter Right Sidebar</a></li>
                                                    <li><a href="shop-horizontal-filter.html"
                                                            class="menu-link-text link">Horizontal Filter</a></li>
                                                    <li><a href="shop-default.html" class="menu-link-text link">Filter
                                                            Drawer</a></li>
                                                    <li><a href="shop-collection-list.html"
                                                            class="menu-link-text link">Collection List</a></li>
                                                    <li><a href="shop-sub-collection.html"
                                                            class="menu-link-text link">Sub Collection 1</a></li>
                                                    <li><a href="shop-sub-collection-02.html"
                                                            class="menu-link-text link">Sub Collection 2</a></li>
                                                    <li><a href="shop-grid-3-columns.html"
                                                            class="menu-link-text link">Grid 3 Columns </a></li>
                                                    <li><a href="shop-default.html" class="menu-link-text link">Grid 4
                                                            Columns</a></li>
                                                    <li><a href="shop-fullwidth.html" class="menu-link-text link">Full
                                                            Width</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">SHOP LISTS</div>
                                                <ul class="menu-list">
                                                    <li><a href="shop-default.html"
                                                            class="menu-link-text link">Pagination Links</a></li>
                                                    <li><a href="shop-load-more-button.html"
                                                            class="menu-link-text link">Load More Button</a></li>
                                                    <li><a href="shop-infinity-scroll.html"
                                                            class="menu-link-text link">Infinity Scroll <span
                                                                class="demo-label">Hot</span></a></li>
                                                    <li><a href="shop-filter-sidebar.html"
                                                            class="menu-link-text link">Filter Sidebar</a></li>
                                                    <li><a href="shop-filter-hidden.html"
                                                            class="menu-link-text link">Filter Hidden</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-item">
                                                <div class="menu-heading">PRODUCT STYLES</div>
                                                <ul class="menu-list">
                                                    <li><a href="product-style-01.html"
                                                            class="menu-link-text link">Product Style 1</a></li>
                                                    <li><a href="product-style-02.html"
                                                            class="menu-link-text link">Product Style 2</a></li>
                                                    <li><a href="product-style-03.html"
                                                            class="menu-link-text link">Product Style 3</a></li>
                                                    <li><a href="home-fashion-02.html"
                                                            class="menu-link-text link">Product Popup</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrapper-sub-collection">
                                            <div dir="ltr" class="swiper tf-swiper hover-sw-nav wow fadeInUp"
                                                data-swiper='{
                                                    "slidesPerView": 2,
                                                    "spaceBetween": 24,
                                                    "speed": 800,
                                                    "observer": true,
                                                    "observeParents": true,
                                                    "slidesPerGroup": 2,
                                                    "navigation": {
                                                        "clickable": true,
                                                        "nextEl": ".nav-next-cls-header",
                                                        "prevEl": ".nav-prev-cls-header"
                                                    },
                                                    "pagination": { "el": ".sw-pagination-cls-header", "clickable": true }
                                                }'>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="wg-cls style-abs asp-1 hover-img">
                                                            <a href="shop-default.html" class="image img-style d-block">
                                                                <img src="{{ asset('frontend/assets/images/cls-categories/fashion/men-2.jpg') }}"
                                                                    data-src="{{ asset('frontend/assets/images/cls-categories/fashion/men-2.jpg') }}"
                                                                    alt="" class="lazyload">
                                                            </a>
                                                            <div class="cls-btn text-center">
                                                                <a href="shop-default.html"
                                                                    class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                                                    Men
                                                                    <i class="icon icon-arrow-top-left"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- item 2 -->
                                                    <div class="swiper-slide">
                                                        <div class="wg-cls style-abs asp-1 hover-img">
                                                            <a href="shop-default.html" class="image img-style d-block">
                                                                <img src="{{ asset('frontend/assets/images/cls-categories/fashion/women.jpg') }}"
                                                                    data-src="{{ asset('frontend/assets/images/cls-categories/fashion/women.jpg') }}"
                                                                    alt="" class="lazyload">
                                                            </a>
                                                            <div class="cls-btn text-center">
                                                                <a href="shop-default.html"
                                                                    class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                                                    Women
                                                                    <i class="icon icon-arrow-top-left"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- item 3 -->
                                                    <div class="swiper-slide">
                                                        <div class="wg-cls style-abs asp-1 hover-img">
                                                            <a href="shop-default.html" class="image img-style d-block">
                                                                <img src="{{ asset('frontend/assets/images/cls-categories/fashion/accessories.jpg') }}"
                                                                    data-src="{{ asset('frontend/assets/images/cls-categories/fashion/accessories.jpg') }}"
                                                                    alt="" class="lazyload">
                                                            </a>
                                                            <div class="cls-btn text-center">
                                                                <a href="shop-default.html"
                                                                    class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                                                    Accessories
                                                                    <i class="icon icon-arrow-top-left"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- item 4 -->
                                                    <div class="swiper-slide">
                                                        <div class="wg-cls style-abs asp-1 hover-img">
                                                            <a href="shop-default.html" class="image img-style d-block">
                                                                <img src="{{ asset('frontend/assets/images/cls-categories/fashion/sportwear.jpg') }}"
                                                                    data-src="{{ asset('frontend/assets/images/cls-categories/fashion/sportwear.jpg') }}"
                                                                    alt="" class="lazyload">
                                                            </a>
                                                            <div class="cls-btn text-center">
                                                                <a href="shop-default.html"
                                                                    class="tf-btn btn-cls btn-white hover-dark hover-icon-2">
                                                                    Sportwear
                                                                    <i class="icon icon-arrow-top-left"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex d-xl-none sw-dot-default sw-pagination-cls-header justify-content-center">
                                                </div>
                                                <div
                                                    class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-cls-header">
                                                </div>
                                                <div
                                                    class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-cls-header">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="index.html#" class="item-link">Products</a>

                                </li>
                                <li class="menu-item position-relative">
                                    <a href="index.html#" class="item-link">Pages</a>
                                    
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="index.html#" class="item-link">Blog</a>
                                 
                                </li>
                                <li class="menu-item"><a
                                        href="https://themeforest.net/item/vince-multipurpose-ecommerce-html5-template/57202368?s_rank=5"
                                        target="_blank" class="item-link">Buy Theme!</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center">
                            <li class="nav-search">
                                <a href="index.html#search" data-bs-toggle="modal" class="nav-icon-item">
                                    <i class="icon icon-search"></i>
                                </a>
                            </li>
                            <li class="nav-account">
                                <a href="index.html#login" data-bs-toggle="offcanvas" aria-controls="login" class="nav-icon-item">
                                    <i class="icon icon-user"></i>
                                </a>
                            </li>
                            <li class="nav-wishlist">
                                <a href="wish-list.html" class="nav-icon-item">
                                    <i class="icon icon-heart"></i>
                                    <span class="count-box">0</span>
                                </a>
                            </li>
                            <li class="nav-cart">
                                <a href="index.html#shoppingCart" data-bs-toggle="offcanvas" class="nav-icon-item">
                                    <i class="icon icon-cart"></i>
                                    <span class="count-box">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Slider -->
        <section class="tf-slideshow slider-fashion-1 slider-default">
            <div class="swiper tf-sw-slideshow slider-effect-fade" data-effect="fade" data-preview="1" data-tablet="1"
                data-mobile="1" data-centered="false" data-space="0" data-space-mb="0" data-loop="true"
                data-auto-play="true" data-speed="800">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-wrap bg-type-1">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-1.png') }}"
                                    data-src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-1.png') }}" alt="slider" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 col-sm-6">
                                            <div class="content-slider">
                                                <div class="box-title-slider">
                                                    <h2 class="heading fw-medium fade-item fade-item-1 text-dark-5">
                                                        Style <br> Redefined
                                                    </h2>
                                                    <p class="sub text-md fade-item fade-item-2 text-dark-5">
                                                        Discover the latest trends in fashion that speak your style.
                                                    </p>
                                                </div>
                                                <div class="box-btn-slider fade-item fade-item-3">
                                                    <a href="shop-default.html" class="tf-btn btn-dark2 animate-btn">
                                                        Shop Collection
                                                        <i class="icon icon-arr-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-wrap bg-type-2">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-2.png' )}}"
                                    data-src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-2.png' )}}" alt="slider" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 col-sm-6">
                                            <div class="content-slider">
                                                <div class="box-title-slider">
                                                    <h2 class="heading  fw-medium fade-item fade-item-1 text-dark-5">
                                                        Elegance <br> Redefined
                                                    </h2>
                                                    <p class="sub text-md fade-item fade-item-2 text-dark-5">
                                                        Discover timeless styles for every occasion.
                                                    </p>
                                                </div>
                                                <div class="box-btn-slider fade-item fade-item-3">
                                                    <a href="shop-default.html" class="tf-btn animate-btn btn-dark2">
                                                        Shop Collection
                                                        <i class="icon icon-arr-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-wrap bg-type-3">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-3.png') }}"
                                    data-src="{{ asset('frontend/assets/images/slider/fashion/slider-fashion-3.png') }}" alt="slider" class="lazyload">
                            </div>
                            <div class="box-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-7 col-sm-6 offset-sm-6 col-12">
                                            <div class="content-slider">
                                                <div class="box-title-slider">
                                                    <h2 class="heading  fw-medium fade-item fade-item-1 text-dark-5">
                                                        Elevate Your <br> Wardrobe
                                                    </h2>
                                                    <p class="sub text-md fade-item fade-item-2 text-dark-5">
                                                        Timeless pieces to refresh your look for every season.
                                                    </p>
                                                </div>
                                                <div class="box-btn-slider fade-item fade-item-3">
                                                    <a href="shop-default.html" class="tf-btn animate-btn btn-dark2">
                                                        Shop Collection
                                                        <i class="icon icon-arr-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination">
                    <div class="container">
                        <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Slider -->


        @yield('front_end_contains')

        
        <!-- Footer -->
        <footer id="footer" class="footer-default xl-pb-70">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-top-wrap">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/assets/images/logo/logo.svg') }}" class="logo" alt="logo">
                            </a>
                        </div>
                        <ul class="tf-social-icon style-large">
                            <li>
                                <a href="https://www.facebook.com/" class="social-item social-facebook">
                                    <i class="icon icon-fb"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" class="social-item social-instagram">
                                    <i class="icon icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.snapchat.com/" class="social-item social-linkedin"><i
                                        class="icon icon-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://x.com/" class="social-item social-x">
                                    <i class="icon icon-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-body">
                <div class="container">
                    <div class="row-footer">
                        <div class="footer-col-block s1">
                            <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                                Business Contact
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-contact">
                                    <ul class="footer-info">
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.1869 1.73431C9.06854 0.61592 7.58155 0 5.99993 0C4.4183 0 2.93129 0.61592 1.81292 1.73431C0.694534 2.85273 0.0786133 4.33969 0.0786133 5.92129C0.0786133 9.12084 3.10388 11.7821 4.72917 13.2118C4.95504 13.4105 5.15008 13.582 5.30547 13.7272C5.50016 13.9091 5.75006 14 5.9999 14C6.24979 14 6.49964 13.9091 6.69435 13.7272C6.84975 13.582 7.04479 13.4105 7.27065 13.2118C8.89594 11.7821 11.9212 9.12084 11.9212 5.92129C11.9212 4.33969 11.3053 2.85273 10.1869 1.73431ZM6.72897 12.5961C6.49816 12.7991 6.29885 12.9744 6.13451 13.1279C6.05902 13.1984 5.94078 13.1984 5.86526 13.1279C5.70095 12.9744 5.50161 12.7991 5.2708 12.596C3.74283 11.2519 0.898656 8.75001 0.898656 5.92131C0.898656 3.1085 3.18704 0.820124 5.99987 0.820124C8.81268 0.820124 11.1011 3.1085 11.1011 5.92131C11.1011 8.75001 8.25694 11.2519 6.72897 12.5961Z"
                                                        fill="#0D0D0D" />
                                                    <path
                                                        d="M6.00008 3.08887C4.56122 3.08887 3.39062 4.25943 3.39062 5.69829C3.39062 7.13715 4.56122 8.30772 6.00008 8.30772C7.43894 8.30772 8.6095 7.13715 8.6095 5.69829C8.6095 4.25943 7.43894 3.08887 6.00008 3.08887ZM6.00008 7.48759C5.01343 7.48759 4.21072 6.68489 4.21072 5.69826C4.21072 4.71164 5.01343 3.90894 6.00008 3.90894C6.98673 3.90894 7.7894 4.71164 7.7894 5.69826C7.7894 6.68489 6.98673 7.48759 6.00008 7.48759Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a target="_blank"
                                                href="https://www.google.com/maps?q=123Yarranst,Punchbowl,NSW2196,Australia">
                                                123 Yarran st, Punchbowl, NSW 2196, Australia
                                            </a>
                                        </li>
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.6666 9.4091L10.9841 8.4641C10.7324 8.12417 10.3574 7.89649 9.93972 7.82996C9.522 7.76343 9.09484 7.86335 8.74998 8.10827L8.09081 8.59243C7.13399 7.73698 6.36526 6.69214 5.83331 5.5241L6.49248 5.04577C6.837 4.79478 7.06794 4.41741 7.13464 3.99641C7.20135 3.5754 7.09838 3.14513 6.84831 2.79993L6.18331 1.86077C5.93339 1.51663 5.55703 1.28582 5.13698 1.21909C4.71693 1.15236 4.28757 1.25518 3.94331 1.50493L2.91664 2.23993C2.58681 2.47798 2.33009 2.80349 2.17547 3.17972C2.02086 3.55595 1.9745 3.96792 2.04164 4.3691C2.33803 6.09644 3.02915 7.73206 4.06118 9.14856C5.0932 10.5651 6.43827 11.7242 7.99164 12.5358C8.30603 12.696 8.65376 12.78 9.00664 12.7808C9.46814 12.7804 9.91756 12.6333 10.29 12.3608L11.3108 11.6666C11.4837 11.5428 11.6302 11.3858 11.7419 11.2048C11.8535 11.0238 11.9281 10.8224 11.9612 10.6123C11.9943 10.4023 11.9853 10.1877 11.9347 9.98113C11.8842 9.77457 11.793 9.58012 11.6666 9.4091ZM10.7975 10.9433L9.78248 11.6666C9.58631 11.8098 9.35413 11.8954 9.11199 11.914C8.86984 11.9325 8.62732 11.8832 8.41164 11.7716C6.97557 11.0225 5.73227 9.95129 4.779 8.6418C3.82572 7.33231 3.18832 5.82004 2.91664 4.22327C2.87745 3.98261 2.90577 3.73579 2.99846 3.51026C3.09114 3.28473 3.24455 3.08933 3.44164 2.94577L4.45664 2.21077C4.6131 2.09841 4.80765 2.05252 4.99783 2.08312C5.188 2.11373 5.35834 2.21833 5.47164 2.3741L6.15998 3.3191C6.27119 3.47659 6.31717 3.67098 6.28831 3.8616C6.27352 3.95579 6.24012 4.04608 6.19004 4.12721C6.13996 4.20834 6.07421 4.27867 5.99664 4.3341L5.05164 5.02243C4.97248 5.07857 4.91486 5.16007 4.88834 5.25342C4.86182 5.34678 4.86798 5.44639 4.90581 5.53577C5.52168 7.06896 6.5077 8.42575 7.77581 9.48493C7.85256 9.54453 7.94697 9.57689 8.04414 9.57689C8.14132 9.57689 8.23573 9.54453 8.31248 9.48493L9.25748 8.80243C9.41322 8.68947 9.60729 8.64263 9.79741 8.67214C9.98754 8.70164 10.1583 8.80508 10.2725 8.95993L10.9608 9.9166C11.072 10.0741 11.118 10.2685 11.0891 10.4591C11.0752 10.5552 11.0422 10.6475 10.9921 10.7306C10.942 10.8137 10.8759 10.886 10.7975 10.9433Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a href="tel:18888383022">(64) 8342 1245</a>
                                        </li>
                                        <li class="item">
                                            <span class="box-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.8125 2.625H2.1875C1.8394 2.625 1.50556 2.76328 1.25942 3.00942C1.01328 3.25556 0.875 3.5894 0.875 3.9375V10.0625C0.875 10.4106 1.01328 10.7444 1.25942 10.9906C1.50556 11.2367 1.8394 11.375 2.1875 11.375H11.8125C12.1606 11.375 12.4944 11.2367 12.7406 10.9906C12.9867 10.7444 13.125 10.4106 13.125 10.0625V3.9375C13.125 3.5894 12.9867 3.25556 12.7406 3.00942C12.4944 2.76328 12.1606 2.625 11.8125 2.625ZM11.5675 3.5L7.28 7.07438C7.20139 7.13985 7.10231 7.17571 7 7.17571C6.89769 7.17571 6.79861 7.13985 6.72 7.07438L2.4325 3.5H11.5675ZM11.8125 10.5H2.1875C2.07147 10.5 1.96019 10.4539 1.87814 10.3719C1.79609 10.2898 1.75 10.1785 1.75 10.0625V4.06875L6.16 7.74375C6.39584 7.94019 6.69307 8.04776 7 8.04776C7.30693 8.04776 7.60416 7.94019 7.84 7.74375L12.25 4.06875V10.0625C12.25 10.1785 12.2039 10.2898 12.1219 10.3719C12.0398 10.4539 11.9285 10.5 11.8125 10.5Z"
                                                        fill="#0D0D0D" />
                                                </svg>
                                            </span>
                                            <a href="mailto:support@example.com">support@example.com</a>
                                        </li>
                                    </ul>
                                    <a href="https://www.google.com/maps?q=15Yarranst,Punchbowl,NSW,Australia"
                                        class="tf-btn btn-line-dark fw-normal">
                                        <span class="text-sm text-transform-none">
                                            Get direction
                                        </span>
                                        <i class="icon-arrow-top-left fs-8"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner-wrap footer-col-block s2">
                            <div class="footer-heading footer-heading-mobile text-xl fw-medium">
                                Subscribe Newsletter
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-newsletter">
                                    <p>
                                        We invite you to register to read the latest news, offers and events about
                                        our company. We promise not spam your inbox.
                                    </p>
                                    <form action="index.html#" class="form-newsletter" method="post" accept-charset="utf-8"
                                        data-mailchimp="true">
                                        <div class="subscribe-content">
                                            <fieldset class="email">
                                                <input type="email" name="email-form" class="subscribe-email"
                                                    placeholder="Email address" tabindex="0" aria-required="true"
                                                    required>
                                            </fieldset>
                                            <div class="button-submit">
                                                <button class="subscribe-button animate-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5296_3345)">
                                                            <path
                                                                d="M17.7938 8.50229L17.7931 8.50162L14.1192 4.84537C13.8439 4.57147 13.3988 4.57249 13.1248 4.84776C12.8508 5.123 12.8519 5.56818 13.1271 5.84212L15.5938 8.29687H0.703125C0.314789 8.29687 0 8.61166 0 9C0 9.38833 0.314789 9.70312 0.703125 9.70312H15.5938L13.1272 12.1579C12.8519 12.4318 12.8509 12.877 13.1248 13.1522C13.3988 13.4275 13.844 13.4285 14.1192 13.1546L17.7932 9.49837L17.7938 9.4977C18.0692 9.22285 18.0683 8.77623 17.7938 8.50229Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_5296_3345">
                                                                <rect width="18" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner-wrap s3">
                            <div class="footer-col-block inner-col">
                                <div class="footer-heading footer-heading-mobile text-xl fw-medium">About Us</div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="store-location.html">Our Store</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html">Our Story</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col-block inner-col">
                                <div class="footer-heading footer-heading-mobile text-xl fw-medium">Resource</div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="privacy-policy.html">Privacy Policies</a>
                                        </li>
                                        <li>
                                            <a href="term-and-condition.html">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="return-and-refund.html">Returns & Refunds</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">FAQ’s</a>
                                        </li>
                                        <li>
                                            <a href="shipping.html">Shipping</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <p class="text-dark">Copyright © 2025 by <span class="fw-medium">Vineta.</span> All Rights
                            Reserved.</p>
                        <ul class="tf-payment">
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/EximBank.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/ApplePay.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/DinersClub.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/Discover.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/GooglePay.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/Mastercard-2.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/Mastercard.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/Shop.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/UnionPay.png') }}" alt="payment"></li>
                            <li class="item"><img src="{{ asset('frontend/assets/images/payment/Visa.png') }}" alt="payment"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </div>

    <!-- modal demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-1.jpg"
                                    src="images/demo/fashion-1.jpg" alt="home-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="index.html" class="demo-name link">Fashion Style 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-02.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/fashion-1.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/fashion-1.jpg') }}" alt="home-fashion">
                            </a>
                            <a href="home-fashion-02.html" class="demo-name link">Fashion Style
                                2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/electronic.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/electronic.jpg') }}" alt="home-electronic">
                            </a>
                            <a href="home-electronic.html" class="demo-name link">Electronic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html" class="demo-image">
                                <img class="lazyload" data-src="{{asset('backend/assets/images/demo/furniture.jpg') }}"
                                    src="{{asset('backend/assets/images/demo/furniture.jpg') }}" alt="home-furniture">
                            </a>
                            <a href="home-furniture.html" class="demo-name link">Furniture</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-women.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/women-fashion.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/women-fashion.jpg') }}" alt="home-women-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-fashion-women.html" class="demo-name link">Women
                                Fashion</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/comestic.jpg') }}" src="{{ asset('frontend/assets/images/demo/comestic.jpg') }}"
                                    alt="home-comestic">
                            </a>
                            <a href="home-skincare.html" class="demo-name link">Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-bicycle.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/bicycle.jpg" src="images/demo/bicycle.jpg"
                                    alt="home-bicycle">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-bicycle.html" class="demo-name link">Bicycle</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/phonecase.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/phonecase.jpg') }}" alt="home-phonecase">
                            </a>
                            <a href="home-phonecase.html" class="demo-name link">Phone Case</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/pet-accessories.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/pet-accessories.jpg') }}" alt="home-pet">
                            </a>
                            <a href="home-pet-accessories.html" class="demo-name link">Pet
                                Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sportwear.html" class="demo-image">
                                <img class="lazyload" data-src="{{ asset('frontend/assets/images/demo/sportwear.jpg') }}"
                                    src="{{ asset('frontend/assets/images/demo/sportwear.jpg') }}" alt="home-bicycle">
                            </a>
                            <a href="home-sportwear.html" class="demo-name link">Sportwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry.jpg" src="images/demo/jewelry.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry.html" class="demo-name link">Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electric-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/eletric-accessories.jpg"
                                    src="images/demo/eletric-accessories.jpg" alt="home-electric-accessories">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-electric-accessories.html" class="demo-name link">Electric Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-mega-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/mega-shop.jpg"
                                    src="images/demo/mega-shop.jpg" alt="home-mega-electronic">
                            </a>
                            <a href="home-mega-electronic.html" class="demo-name link">Mega Shop</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-vegetable.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supermarket.jpg"
                                    src="images/demo/supermarket.jpg" alt="home-supermarket">
                            </a>
                            <a href="home-vegetable.html" class="demo-name link">Supermarket</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pod.jpg" src="images/demo/pod.jpg"
                                    alt="home-pod">
                            </a>
                            <a href="home-pod.html" class="demo-name link">Print On Demand</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/baby.jpg" src="images/demo/baby.jpg"
                                    alt="home-baby">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-baby.html" class="demo-name link">Baby</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-plant.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/plant.jpg" src="images/demo/plant.jpg"
                                    alt="home-plant">
                            </a>
                            <a href="home-plant.html" class="demo-name link">Plant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal demo -->

    <!-- newsletter -->
    <div class="modal modalCentered fade auto-popup modal-newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-top">
                    <img class="lazyload" data-src="images/section/newsletter-1.jpg"
                        src="images/section/newsletter-1.jpg" alt="images">
                    <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="modal-bottom text-center">
                    <h5 class="title">Sign up to our Newsletter</h5>
                    <p class="text text-sm text-main">Be the first to get the latest news about trends, <br> promotions,
                        and much more!</p>

                    <form action="index.html#" class="form-newsletter">
                        <div class="mb_20">
                            <fieldset class="email position-relative">
                                <i class="icon icon-mail"></i>
                                <input type="email" name="email" class="" placeholder="Your email address" tabindex="0"
                                    aria-required="true" required="">
                            </fieldset>
                        </div>
                        <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                            type="submit">Send</button>
                    </form>

                    <ul class="tf-social-icon style-default justify-content-center">
                        <li><a href="https://x.com/" class="social-x"><i class="icon icon-x"></i></a></li>
                        <li><a href="https://www.facebook.com/" class="social-facebook"><i
                                    class="icon icon-fb2"></i></a></li>
                        <li><a href="https://www.instagram.com/" class="social-instagram"><i
                                    class="icon icon-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/" class="social-youtube"><i
                                    class="icon icon-youtube"></i></a></li>
                    </ul>
                    <p class="text text-sm mb-0 text-main">Will be used in accordance with our <a
                            href="privacy-policy.html" class="fw-medium">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /newsletter  -->


    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">

                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                        <li class="nav-mb-item">
                            <a href="index.html#dropdown-menu-home" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-home">
                                <span>Home</span>
                                <span class="btn-open-sub"></span>
                            </a>

                        </li>
                        <li class="nav-mb-item">
                            <a href="index.html#dropdown-menu-shop" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-shop">
                                <span>Shop</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-shop" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="index.html#sub-shop-layout" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-layout">
                                            <span>Shop Layout</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-layout" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-default.html" class="sub-nav-link">Default</a></li>
                                                <li><a href="shop-left-sidebar.html" class="sub-nav-link">Filter
                                                        Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html" class="sub-nav-link">Filter
                                                        Right Sidebar</a></li>
                                                <li><a href="shop-horizontal-filter.html"
                                                        class="menu-link-text link">Horizontal Filter</a></li>
                                                <li><a href="shop-default.html" class="sub-nav-link">Filter
                                                        Drawer</a></li>
                                                <li><a href="shop-collection-list.html"
                                                        class="menu-link-text link">Collection List</a></li>
                                                <li><a href="shop-sub-collection.html" class="sub-nav-link">Sub
                                                        Collection 1</a></li>
                                                <li><a href="shop-sub-collection-02.html" class="sub-nav-link">Sub
                                                        Collection 2</a></li>
                                                <li><a href="shop-grid-3-columns.html" class="sub-nav-link">Grid
                                                        3 Columns </a></li>
                                                <li><a href="shop-default.html" class="sub-nav-link">Grid 4
                                                        Columns</a></li>
                                                <li><a href="shop-fullwidth.html" class="sub-nav-link">Full
                                                        Width</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="index.html#sub-shop-list" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-list">
                                            <span>Shop List</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-list" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-default.html" class="sub-nav-link">Pagination
                                                        Links</a></li>
                                                <li><a href="shop-load-more-button.html" class="sub-nav-link">Load More
                                                        Button</a></li>
                                                <li><a href="shop-infinity-scroll.html" class="sub-nav-link">Infinity
                                                        Scroll <span class="demo-label">Hot</span></a></li>
                                                <li><a href="shop-filter-sidebar.html" class="sub-nav-link">Filter
                                                        Sidebar</a></li>
                                                <li><a href="shop-filter-hidden.html" class="sub-nav-link">Filter
                                                        Hidden</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="index.html#sub-shop-styles" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-styles">
                                            <span>Product Styles</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-styles" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-style-01.html" class="sub-nav-link">Product
                                                        Style 1</a></li>
                                                <li><a href="product-style-02.html" class="sub-nav-link">Product
                                                        Style 2</a></li>
                                                <li><a href="product-style-03.html" class="sub-nav-link">Product
                                                        Style 3</a></li>
                                                <li><a href="home-fashion-02.html" class="sub-nav-link">Product
                                                        Popup</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="index.html#dropdown-menu-product" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-product">
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="nav-mb-item">
                            <a href="index.html#dropdown-menu-pages" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-pages">
                                <span>Pages</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-pages" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="about-us.html" class="sub-nav-link">About</a></li>
                                    <li><a href="contact-us.html" class="sub-nav-link">Contact</a></li>
                                    <li><a href="store-location.html" class="sub-nav-link">Store
                                            location</a></li>
                                    <li><a href="account-page.html" class="sub-nav-link">My account</a></li>
                                    <li><a href="faq.html" class="sub-nav-link">FAQ</a></li>
                                    <li><a href="cart-empty.html" class="sub-nav-link">Cart drawer empty</a>
                                    </li>
                                    <li><a href="cart-drawer-v2.html" class="sub-nav-link">Cart drawer
                                            v2</a></li>
                                    <li><a href="view-cart.html" class="sub-nav-link">View cart</a></li>
                                    <li><a href="before-you-leave.html" class="sub-nav-link">Before you
                                            leave</a></li>
                                    <li><a href="cookies.html" class="sub-nav-link">Cookies</a></li>
                                    <li><a href="home-fashion-02.html" class="sub-nav-link">Sub navtab
                                            products</a></li>
                                    <li><a href="404.html" class="sub-nav-link">404</a></li>
                                    <li><a href="coming-soon.html" class="sub-nav-link">Coming Soon!</a>
                                    </li>
                                    <li><a href="index.html" class="sub-nav-link">Newsletter
                                            Popup 1</a></li>
                                    <li><a href="newsletter-popup-02.html" class="sub-nav-link">Newsletter
                                            Popup 2</a></li>
                                    <li><a href="newsletter-popup-03.html" class="sub-nav-link">Newsletter
                                            Popup 3</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item">
                            <a href="index.html#dropdown-menu-blog" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-blog">
                                <span>Blog</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-blog" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="blog-list-01.html" class="sub-nav-link">Blog List 1</a>
                                    </li>
                                    <li><a href="blog-list-02.html" class="sub-nav-link">Blog List 2</a>
                                    </li>
                                    <li><a href="blog-grid-01.html" class="sub-nav-link">Blog Grid 1</a>
                                    </li>
                                    <li><a href="blog-grid-02.html" class="sub-nav-link">Blog Grid 2</a>
                                    </li>
                                    <li><a href="blog-single.html" class="sub-nav-link">Single Blog </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="https://themeforest.net/item/vince-multipurpose-ecommerce-html5-template/57202368?s_rank=5"
                                target="_blank" class="mb-menu-link">Buy Theme</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-other-content">
                    <div class="group-icon">
                        <a href="wish-list.html" class="site-nav-icon">
                            <i class="icon icon-heart"></i>
                            Wishlist
                        </a>
                        <a href="index.html#login" data-bs-toggle="offcanvas" class="site-nav-icon">
                            <i class="icon icon-user"></i>
                            Login
                        </a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-us.html" class="text-need">Need Help?</a>
                    </div>
                    <div class="mb-contact">
                        <p>Address: 123 Yarran st, Punchbowl, NSW 2196, Australia</p>
                    </div>
                    <ul class="mb-info">
                        <li>
                            Email:
                            <b class="fw-medium">clientcare@ecom.com</b>
                        </li>
                        <li>
                            Phone:
                            <b class="fw-medium">1.888.838.3022</b>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="{{ asset('backend/assets/images/country/us.png') }}">USD</option>
                            <option data-thumbnail="{{ asset('backend/assets/images/country/fr.png') }}">EUR</option>
                            <option data-thumbnail="{{ asset('backend/assets/images/country/ger.png') }}">EUR</option>
                            <option data-thumbnail="{{ asset('backend/assets/images/country/vn.png') }}">VND</option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->

    <!-- toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="index.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.21534 1H3.08153C1.93379 1 1 1.93379 1 3.08153V7.21534C1 8.36309 1.93379 9.29688 3.08153 9.29688H7.21534C8.36309 9.29688 9.29688 8.36309 9.29688 7.21534V3.08153C9.29688 1.93379 8.36309 1 7.21534 1ZM7.89062 7.21534C7.89062 7.58768 7.58768 7.89062 7.21534 7.89062H3.08153C2.70919 7.89062 2.40625 7.58768 2.40625 7.21534V3.08153C2.40625 2.70919 2.70919 2.40625 3.08153 2.40625H7.21534C7.58768 2.40625 7.89062 2.70919 7.89062 3.08153V7.21534Z"
                            fill="black" />
                        <path
                            d="M16.8906 1H12.8125C11.6494 1 10.7031 1.94627 10.7031 3.10938V7.1875C10.7031 8.35061 11.6494 9.29688 12.8125 9.29688H16.8906C18.0537 9.29688 19 8.35061 19 7.1875V3.10938C19 1.94627 18.0537 1 16.8906 1ZM17.5938 7.1875C17.5938 7.5752 17.2783 7.89062 16.8906 7.89062H12.8125C12.4248 7.89062 12.1094 7.5752 12.1094 7.1875V3.10938C12.1094 2.72167 12.4248 2.40625 12.8125 2.40625H16.8906C17.2783 2.40625 17.5938 2.72167 17.5938 3.10938V7.1875Z"
                            fill="black" />
                        <path
                            d="M7.21534 10.7031H3.08153C1.93379 10.7031 1 11.6369 1 12.7847V16.9185C1 18.0662 1.93379 19 3.08153 19H7.21534C8.36309 19 9.29688 18.0662 9.29688 16.9185V12.7847C9.29688 11.6369 8.36309 10.7031 7.21534 10.7031ZM7.89062 16.9185C7.89062 17.2908 7.58768 17.5938 7.21534 17.5938H3.08153C2.70919 17.5938 2.40625 17.2908 2.40625 16.9185V12.7847C2.40625 12.4123 2.70919 12.1094 3.08153 12.1094H7.21534C7.58768 12.1094 7.89062 12.4123 7.89062 12.7847V16.9185Z"
                            fill="black" />
                        <path
                            d="M16.8906 10.7031H12.8125C11.6494 10.7031 10.7031 11.6494 10.7031 12.8125V16.8906C10.7031 18.0537 11.6494 19 12.8125 19H16.8906C18.0537 19 19 18.0537 19 16.8906V12.8125C19 11.6494 18.0537 10.7031 16.8906 10.7031ZM17.5938 16.8906C17.5938 17.2783 17.2783 17.5938 16.8906 17.5938H12.8125C12.4248 17.5938 12.1094 17.2783 12.1094 16.8906V12.8125C12.1094 12.4248 12.4248 12.1094 12.8125 12.1094H16.8906C17.2783 12.1094 17.5938 12.4248 17.5938 12.8125V16.8906Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Home</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="index.html#login" data-bs-toggle="offcanvas">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.6849 6.28659C12.6849 7.00267 12.4004 7.68943 11.8941 8.19578C11.3877 8.70212 10.701 8.98659 9.98488 8.98659C9.2688 8.98659 8.58204 8.70212 8.07569 8.19578C7.56934 7.68943 7.28488 7.00267 7.28488 6.28659C7.28488 5.5705 7.56934 4.88375 8.07569 4.3774C8.58204 3.87105 9.2688 3.58659 9.98488 3.58659C10.701 3.58659 11.3877 3.87105 11.8941 4.3774C12.4004 4.88375 12.6849 5.5705 12.6849 6.28659ZM14.3515 6.28659C14.3515 6.86003 14.2386 7.42785 14.0192 7.95764C13.7997 8.48743 13.4781 8.96881 13.0726 9.37429C12.6671 9.77977 12.1857 10.1014 11.6559 10.3209C11.1261 10.5403 10.5583 10.6533 9.98488 10.6533C9.41144 10.6533 8.84362 10.5403 8.31383 10.3209C7.78404 10.1014 7.30266 9.77977 6.89718 9.37429C6.4917 8.96881 6.17005 8.48743 5.95061 7.95764C5.73116 7.42785 5.61821 6.86003 5.61821 6.28659C5.61821 5.12848 6.07827 4.0178 6.89718 3.19889C7.71609 2.37998 8.82677 1.91992 9.98488 1.91992C11.143 1.91992 12.2537 2.37998 13.0726 3.19889C13.8915 4.0178 14.3515 5.12848 14.3515 6.28659ZM3.83488 17.7049C3.83488 16.2183 4.48488 15.0616 5.55571 14.2524C6.64738 13.4283 8.20571 12.9491 9.98738 12.9491C11.7699 12.9491 13.3282 13.4283 14.419 14.2524C15.4907 15.0608 16.1407 16.2191 16.1407 17.7049C16.1407 17.9259 16.2285 18.1379 16.3848 18.2942C16.5411 18.4505 16.753 18.5383 16.974 18.5383C17.1951 18.5383 17.407 18.4505 17.5633 18.2942C17.7196 18.1379 17.8074 17.9259 17.8074 17.7049C17.8074 15.6633 16.8849 14.0258 15.424 12.9224C13.9824 11.8341 12.0474 11.2824 9.98738 11.2824C7.92738 11.2824 5.99238 11.8341 4.55155 12.9224C3.08988 14.0258 2.16821 15.6641 2.16821 17.7049C2.16821 17.9259 2.25601 18.1379 2.41229 18.2942C2.56857 18.4505 2.78053 18.5383 3.00155 18.5383C3.22256 18.5383 3.43452 18.4505 3.5908 18.2942C3.74708 18.1379 3.83488 17.9259 3.83488 17.7049Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Account</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="shop-default.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.875 8.479C1.875 8.134 2.155 7.854 2.5 7.854C2.845 7.854 3.125 8.134 3.125 8.479V15.5623C3.125 16.5982 3.96417 17.4373 5 17.4373H15C16.0358 17.4373 16.875 16.5982 16.875 15.5623V8.479C16.875 8.134 17.155 7.854 17.5 7.854C17.845 7.854 18.125 8.134 18.125 8.479V15.5623C18.125 17.2882 16.7258 18.6873 15 18.6873H5C3.27417 18.6873 1.875 17.2882 1.875 15.5623V8.479Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 11.1875C10.8292 11.1875 11.6233 11.5167 12.21 12.1025C12.7958 12.6892 13.125 13.4833 13.125 14.3125V18.0625C13.125 18.4075 12.845 18.6875 12.5 18.6875C12.155 18.6875 11.875 18.4075 11.875 18.0625V14.3125C11.875 13.815 11.6775 13.3383 11.3258 12.9867C10.9742 12.635 10.4975 12.4375 10 12.4375C9.5025 12.4375 9.02583 12.635 8.67417 12.9867C8.3225 13.3383 8.125 13.815 8.125 14.3125V18.0625C8.125 18.4075 7.845 18.6875 7.5 18.6875C7.155 18.6875 6.875 18.4075 6.875 18.0625V14.3125C6.875 13.4833 7.20417 12.6892 7.79 12.1025C8.37667 11.5167 9.17083 11.1875 10 11.1875Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.45325 1.9375V6.625C7.45325 8.385 6.02492 9.8125 4.26492 9.8125C3.27242 9.8125 2.33492 9.355 1.72408 8.57333C1.11325 7.79083 0.897416 6.77167 1.13742 5.80833L1.79992 3.15917C2.07158 2.07333 3.04658 1.3125 4.16492 1.3125H6.82825C7.17325 1.3125 7.45325 1.5925 7.45325 1.9375ZM6.20325 2.5625H4.16492C3.61992 2.5625 3.14492 2.93333 3.01325 3.46167L2.35075 6.11167C2.20325 6.70083 2.33575 7.325 2.70908 7.80417C3.08325 8.2825 3.65742 8.5625 4.26492 8.5625C5.33492 8.5625 6.20325 7.695 6.20325 6.625V2.5625Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.1716 1.3125H15.835C16.9533 1.3125 17.9283 2.07333 18.2 3.15917L18.8625 5.80833C19.1025 6.77167 18.8866 7.79083 18.2758 8.57333C17.665 9.355 16.7275 9.8125 15.735 9.8125C13.975 9.8125 12.5466 8.385 12.5466 6.625V1.9375C12.5466 1.5925 12.8266 1.3125 13.1716 1.3125ZM13.7966 2.5625V6.625C13.7966 7.695 14.665 8.5625 15.735 8.5625C16.3425 8.5625 16.9166 8.2825 17.2908 7.80417C17.6641 7.325 17.7966 6.70083 17.6491 6.11167L16.9866 3.46167C16.855 2.93333 16.38 2.5625 15.835 2.5625H13.7966Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.82153 1.3125H13.1715C13.3374 1.3125 13.4965 1.37833 13.614 1.49583C13.7315 1.61333 13.7965 1.7725 13.7965 1.93833L13.7924 6.47167C13.7907 8.3175 12.294 9.8125 10.449 9.8125H9.5407C7.69403 9.8125 6.19653 8.31583 6.19653 6.46917V1.9375C6.19653 1.5925 6.47653 1.3125 6.82153 1.3125ZM7.44653 2.5625V6.46917C7.44653 7.625 8.38403 8.5625 9.5407 8.5625H10.449C11.6049 8.5625 12.5415 7.62667 12.5424 6.47083L12.5465 2.5625H7.44653Z"
                            fill="black" />
                    </svg>
                </div>
                <div class="toolbar-label">Shop</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wish-list.html">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4013_1872)">
                            <path
                                d="M18.3932 3.30791C16.218 1.13334 12.6795 1.13334 10.5049 3.30791L9.99983 3.8127L9.49504 3.30791C7.32046 1.13304 3.78163 1.13304 1.60706 3.30791C-0.523361 5.43833 -0.537195 8.81527 1.57498 11.1632C3.50142 13.3039 9.18304 17.9289 9.4241 18.1246C9.58775 18.2576 9.78467 18.3224 9.9804 18.3224C9.98688 18.3224 9.99335 18.3224 9.99953 18.3221C10.202 18.3315 10.406 18.2621 10.575 18.1246C10.816 17.9289 16.4982 13.3039 18.4253 11.1629C20.5371 8.81527 20.5233 5.43833 18.3932 3.30791ZM17.1125 9.98174C15.6105 11.6503 11.4818 15.0917 9.99953 16.313C8.51724 15.092 4.38944 11.6509 2.88773 9.98203C1.41427 8.34433 1.40044 6.01199 2.85564 4.55679C3.59885 3.81388 4.57488 3.44213 5.5509 3.44213C6.52693 3.44213 7.50295 3.81358 8.24616 4.55679L9.3564 5.66703C9.48856 5.79919 9.65516 5.87807 9.82999 5.90574C10.1137 5.96667 10.4216 5.88749 10.6424 5.66732L11.7532 4.55679C13.2399 3.07067 15.6582 3.07097 17.144 4.55679C18.5992 6.01199 18.5854 8.34433 17.1125 9.98174Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4013_1872">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Wishlist</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="index.html#shoppingCart" data-bs-toggle="offcanvas">
                <div class="toolbar-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4.70906 7.42985L4.0424 16.699H15.8641L15.1974 7.42985H4.70906ZM16.7491 5.76318H3.15823L2.38073 16.5798C2.36436 16.8082 2.39521 17.0374 2.47134 17.2533C2.54748 17.4692 2.66727 17.6671 2.82325 17.8347C2.97923 18.0022 3.16805 18.1358 3.37795 18.2272C3.58785 18.3186 3.81431 18.3657 4.04323 18.3657H15.8641C16.0931 18.3657 16.3196 18.3185 16.5296 18.2271C16.7395 18.1357 16.9284 18.002 17.0844 17.8344C17.2404 17.6667 17.3601 17.4687 17.4362 17.2527C17.5123 17.0368 17.5431 16.8074 17.5266 16.579L16.7491 5.76318Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.38996 3.86652C9.17153 3.86641 8.95523 3.90936 8.75342 3.99292C8.55162 4.07649 8.36826 4.19901 8.21385 4.3535C8.05944 4.50799 7.93701 4.6914 7.85355 4.89325C7.77009 5.0951 7.72724 5.31143 7.72746 5.52985V6.10068C7.72746 6.3217 7.63966 6.53366 7.48338 6.68994C7.3271 6.84622 7.11514 6.93402 6.89412 6.93402C6.67311 6.93402 6.46115 6.84622 6.30487 6.68994C6.14859 6.53366 6.06079 6.3217 6.06079 6.10068V5.52985C6.06068 5.09263 6.14672 4.65967 6.31399 4.2557C6.48125 3.85174 6.72647 3.48469 7.03564 3.17553C7.3448 2.86637 7.71185 2.62115 8.11581 2.45388C8.51977 2.28661 8.95273 2.20057 9.38996 2.20068H10.5275C11.412 2.2009 12.2603 2.55246 12.8857 3.17802C13.5111 3.80359 13.8625 4.65194 13.8625 5.53652V6.10068C13.8625 6.3217 13.7747 6.53366 13.6184 6.68994C13.4621 6.84622 13.2501 6.93402 13.0291 6.93402C12.8081 6.93402 12.5961 6.84622 12.4399 6.68994C12.2836 6.53366 12.1958 6.3217 12.1958 6.10068V5.53652C12.1958 5.09397 12.02 4.66954 11.7072 4.35653C11.3943 4.04353 10.97 3.86757 10.5275 3.86735"
                            fill="black" />
                    </svg>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Cart</div>
            </a>
        </div>
    </div>
    <!-- /toolbar  -->

    <!-- login -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-login" id="login">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Log in</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="account-page.html" accept-charset="utf-8" class="form-login">
                    <div>
                        <fieldset class="email mb_12">
                            <input type="email" class="" placeholder="Email*" required>
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" class="" placeholder="Password*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <a href="index.html#resetPass" data-bs-toggle="offcanvas" class="text text-sm text-main-2">Forgot your
                            password?</a>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                type="submit">Sign in</button>
                            <button type="button" data-bs-target="#register" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Create an account</button>
                        </div>
                    </div>
                </form>
                <div class="other-login">
                    <p class="text-sm text-center text-main-2">Or sign in with:</p>
                    <a href="account-page.html" class="w-100 text-md mb_8">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#3B5998" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.155 10.656L18.649 10.657C17.468 10.657 17.239 11.218 17.239 12.041V13.857H20.056L19.689 16.702H17.239V24H14.302V16.702H11.846V13.857H14.302V11.76C14.302 9.325 15.789 8 17.96 8C19 8 19.894 8.077 20.155 8.112V10.656ZM16 0C7.164 0 0 7.163 0 16C0 24.836 7.164 32 16 32C24.837 32 32 24.836 32 16C32 7.163 24.837 0 16 0Z"
                                fill="white" />
                        </svg>
                        FACEBOOK
                    </a>
                    <a href="account-page.html" class="w-100 text-md bg-dark">
                        <svg class="icon" width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_235_18876)">
                                <path
                                    d="M30.7919 13.218L17.7394 13.2174C17.163 13.2174 16.6958 13.6845 16.6958 14.2609V18.4306C16.6958 19.0068 17.163 19.4741 17.7393 19.4741H25.0897C24.2848 21.5629 22.7825 23.3122 20.8659 24.4237L24.0001 29.8493C29.0277 26.9416 32.0001 21.8398 32.0001 16.1287C32.0001 15.3155 31.9402 14.7342 31.8203 14.0796C31.7292 13.5823 31.2974 13.218 30.7919 13.218Z"
                                    fill="#167EE6" />
                                <path
                                    d="M16.0002 25.7392C12.4031 25.7392 9.26282 23.7738 7.57625 20.8655L2.15088 23.9926C4.91182 28.7777 10.0839 32 16.0002 32C18.9025 32 21.6411 31.2186 24.0002 29.8568V29.8494L20.866 24.4237C19.4324 25.2552 17.7734 25.7392 16.0002 25.7392Z"
                                    fill="#12B347" />
                                <path
                                    d="M24 29.8568V29.8493L20.8658 24.4237C19.4322 25.2551 17.7733 25.7391 16 25.7391V32C18.9023 32 21.641 31.2186 24 29.8568Z"
                                    fill="#0F993E" />
                                <path
                                    d="M6.26088 16C6.26088 14.2269 6.74475 12.5681 7.57606 11.1346L2.15069 8.00745C0.781375 10.3591 0 13.0903 0 16C0 18.9098 0.781375 21.6409 2.15069 23.9926L7.57606 20.8654C6.74475 19.4319 6.26088 17.7731 6.26088 16Z"
                                    fill="#FFD500" />
                                <path
                                    d="M16.0002 6.26088C18.3459 6.26088 20.5005 7.09437 22.1834 8.48081C22.5986 8.82281 23.2021 8.79813 23.5824 8.41781L26.5368 5.46344C26.9683 5.03194 26.9375 4.32562 26.4766 3.92575C23.6569 1.47956 19.9881 0 16.0002 0C10.0839 0 4.91182 3.22231 2.15088 8.00744L7.57625 11.1346C9.26282 8.22625 12.4031 6.26088 16.0002 6.26088Z"
                                    fill="#FF4B26" />
                                <path
                                    d="M22.1833 8.48081C22.5984 8.82281 23.2019 8.79813 23.5822 8.41781L26.5366 5.46344C26.968 5.03194 26.9373 4.32562 26.4764 3.92575C23.6567 1.4795 19.9879 0 16 0V6.26088C18.3456 6.26088 20.5003 7.09437 22.1833 8.48081Z"
                                    fill="#D93F21" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        GOOGLE
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /login -->

    <!-- register -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-register" id="register">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Create account</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="account-page.html" class="form-login">
                    <div class="">
                        <fieldset class="text mb_12">
                            <input type="text" placeholder="First name">
                        </fieldset>
                        <fieldset class="text mb_12">
                            <input type="text" placeholder="Last name">
                        </fieldset>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Email*">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password*">
                        </fieldset>
                    </div>
                    <div class="bot">
                        <p class="text text-sm text-main-2">Sign up for early Sale access plus tailored new
                            arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Sign
                                up</button>
                            <button type="button" data-bs-target="#login" data-bs-toggle="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /register -->

    <!-- Reset pass -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Reset Your Password</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="index.html#" class="form-login">
                    <div class="">
                        <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                            email to receive a link and securely reset it in just a few steps.</p>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Enter Your Email*">
                        </fieldset>
                    </div>
                    <div class="bot">
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                Password</button>
                            <button type="button" data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Reset pass -->

    <!-- search -->
    <div class="modal fade popup-search" id="search">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="header">
                    <button class="icon-close icon-close-popup" data-bs-dismiss="modal"></button>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="looking-for-wrap">
                                <div class="heading">What are you looking for?</div>
                                <form class="form-search">
                                    <fieldset class="text">
                                        <input type="text" placeholder="Search" class="" name="text" tabindex="0"
                                            value="" aria-required="true" required="">
                                    </fieldset>
                                    <button type="submit">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </form>
                                <div class="popular-searches justify-content-md-center">
                                    <div class="text fw-medium">Popular searches:</div>
                                    <ul>
                                        <li><a class="link" href="index.html#">Featured</a></li>
                                        <li><a class="link" href="index.html#">Trendy</a></li>
                                        <li><a class="link" href="index.html#">New</a></li>
                                        <li><a class="link" href="index.html#">Sale</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search -->

    <!-- shoppingCart -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-shopping-cart" id="shoppingCart">
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <h4>order list</h4>
            </div>
        </div>
    </div>
    <!-- /shoppingCart -->

    <!-- modal quickView -->
    <div class="modal fade modalCentered modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div class="tf-product-media-wrap">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-color="orange">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-40.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-40.jpg" alt=""') }}>
                                </div>
                            </div>
                            <div class="swiper-slide" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-41.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-41.jpg" alt=""') }}>
                                </div>
                            </div>
                            <div class="swiper-slide" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-42.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-42.jpg" alt=""') }}>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev nav-swiper arrow-1 nav-prev-cls single-slide-prev"></div>
                        <div class="swiper-button-next nav-swiper arrow-1 nav-next-cls single-slide-next"></div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner">
                        <div class="tf-product-info-heading">
                            <h6 class="product-info-name"><a class="link" href="product-detail.html">Striped T-Shirt</a>
                            </h6>
                            <div class="product-info-price">
                                <h6 class="price-new price-on-sale">$100.00</h6>
                                <h6 class="price-old">$130.00</h6>
                                <span class="badge-sale">20% Off</span>
                            </div>
                            <p class="text">Pants in an airy weave made from a linen and viscose blend. Featuring a high
                                waist and a zip fly with button. Shaping at the front and back and wide legs.</p>
                        </div>
                        <div class="tf-product-info-variant">
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    Color:<span class="variant-picker-label-value value-currentColor">Orange</span>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip color-btn active" data-color="orange">
                                        <span class="check-color bg-light-orange-2"></span>
                                        <span class="tooltip">Orange</span>
                                    </div>
                                    <div class="hover-tooltip color-btn" data-color="green">
                                        <span class="check-color bg-light-green"></span>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip color-btn" data-color="pink">
                                        <span class="check-color bg-pink"></span>
                                        <span class="tooltip">Pink</span>
                                    </div>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-size">
                                <div class="variant-picker-label">
                                    <div>Size:<span class="variant-picker-label-value value-currentSize">Small</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn active" data-size="small">S</span>
                                    <span class="size-btn" data-size="medium">M</span>
                                    <span class="size-btn" data-size="large">L</span>
                                    <span class="size-btn" data-size="extra large">XL</span>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-total-quantity">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity minus-btn">-</button>
                                    <input class="quantity-product font-4" type="text" name="number" value="1">
                                    <button class="btn-quantity plus-btn">+</button>
                                </div>
                                <a href="index.html#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn hover-primary">Add to
                                    cart</a>
                            </div>
                            <a href="checkout.html" class="tf-btn w-100 animate-btn paypal btn-primary">Buy It Now</a>
                            <a href="checkout.html" class="more-choose-payment link">More payment options</a>
                        </div>
                        <a href="product-detail.html" class="view-details link">View full details <i
                                class="icon icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quickView -->

    <!-- compare  -->
    <div class="modal modalCentered fade modal-compare" id="compare">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                <div class="modal-compare-wrap list-file-delete">
                    <h6 class="title text-center">Compare Products</h6>
                    <div class="tf-compare-inner">
                        <div class="tf-compare-list">
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-8.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-8.jpg" alt=""') }}>
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Striped T-Shirt</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$130.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$150.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-6.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-6.jpg" alt=""') }}>
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Loose Fit Tee</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$115.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$130.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <span class="icon-close remove"></span>
                                <a href="product-detail.html" class="image">
                                    <img class="lazyload" data-src="{{ asset('backend/assets/images/products/fashion/product-15.jpg') }}"
                                        src="{{ asset('backend/assets/images/products/fashion/product-15.jpg" alt=""') }}>
                                </a>
                                <div class="content">
                                    <div class="text-title">
                                        <a class="link text-line-clamp-2" href="product-detail.html">Oversized Fit
                                            Tee</a>
                                    </div>
                                    <p class="price-wrap">
                                        <span class="new-price text-primary">$80.00</span>
                                        <span class="old-price text-decoration-line-through text-dark-1">$100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-compare-buttons justify-content-center">
                        <a href="compare.html" class="tf-btn animate-btn justify-content-center">Compare</a>
                        <div class="tf-btn btn-out-line-dark justify-content-center clear-file-delete"><span>Clear
                                All</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /compare  -->


    <!-- Javascript -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lazysize.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/multiple-modal.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/infinityslide.js') }}"></script>
    @stack('frontend_js')
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>