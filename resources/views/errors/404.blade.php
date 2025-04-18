<!DOCTYPE html>
<html lang="en">

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
    <!-- Section-404 -->
    <section class="flat-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wg-404">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/banner/404.png') }}"
                                data-src="./{{ asset('frontend/assets/images/banner/404.png') }}" alt="404"
                                class="lazyload">
                        </div>
                        <h1 class="title display-xl-2">
                            Whoops!
                        </h1>
                        <p class="text-md sub text-main">We couldn’t find the page you were looking for.</p>
                        <div class="bot">
                            <a href="{{ route('index.index') }}" class="tf-btn btn-md animate-btn font-4">
                                Return to Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Section-404 -->

</body>

</html>
