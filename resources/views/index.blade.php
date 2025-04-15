@extends('frontend_layout')
@section('front_end_contains')
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