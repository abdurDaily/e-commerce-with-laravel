@extends('frontend_layout')
@section('front_end_contains')
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
<section class="flat-spacing-11">
    <div class="container">
        <div class="flat-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4 class="title">Categories</h4>
        </div>
        <div dir="ltr"
            class="wow fadeInUp swiper tf-swiper xl-px-26 swiper-initialized swiper-horizontal swiper-backface-hidden"
            data-swiper="{
            &quot;slidesPerView&quot;: 2,
            &quot;spaceBetween&quot;: 12,
            &quot;speed&quot;: 800,
            &quot;observer&quot;: true,
            &quot;observeParents&quot;: true,
            &quot;slidesPerGroup&quot;: 2,
            &quot;navigation&quot;: {
                &quot;clickable&quot;: true,
                &quot;nextEl&quot;: &quot;.nav-next-cate&quot;,
                &quot;prevEl&quot;: &quot;.nav-prev-cate&quot;
            },
            &quot;pagination&quot;: { &quot;el&quot;: &quot;.sw-pagination-cate&quot;, &quot;clickable&quot;: true },
            &quot;breakpoints&quot;: {
            &quot;575&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 12 ,&quot;slidesPerGroup&quot;: 2 },    
            &quot;768&quot;: { &quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 24, &quot;slidesPerGroup&quot;: 3 },
            &quot;1200&quot;: { &quot;slidesPerView&quot;: 6, &quot;spaceBetween&quot;: 64, &quot;slidesPerGroup&quot;: 3}
            }
        }" style="visibility: visible; animation-name: fadeInUp;">
            <div class="swiper-wrapper" id="swiper-wrapper-4211110d109b98d1b5" aria-live="polite">

                @forelse ($categories as $category)
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6"
                    style="width: 178px; margin-right: 64px;">
                    <div class="wg-cls style-circle hover-img">
                        <a href="{{ route('index.sub.category', $category->category_slug) }}"
                            class="image img-style d-block">
                            <img src="{{ $category->category_img }}" data-src="{{ $category->category_img }}"
                                alt="categories" class=" ls-is-cached lazyloaded">
                        </a>
                        <div class="cls-content text-center">
                            <a href="{{ route('index.sub.category', $category->category_slug) }}"
                                class="link text-xl fw-medium">
                                {{ Str::limit($category->category_title, 20, '...') }}
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p>No category data found!</p>
                @endforelse


            </div>
            <span
                class="d-flex d-xl-none sw-dot-default sw-pagination-cate justify-content-center swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 1" aria-current="true"></span></span>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>
@endsection