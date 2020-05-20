<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wedding | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<main>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-8 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">{{ Carbon\Carbon::parse( $data->wedding_date)->format('d M Y') }}</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">{{ $data->groom }}<strong> & </strong> {{ $data->bride }}</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">will get married</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-8 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".3s">{{ Carbon\Carbon::parse( $data->wedding_date)->format('d M Y') }}</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" data-duration="2000ms">{{ $data->groom }}<strong> & </strong> {{ $data->bride }}</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">will get married</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!--? Our Story Start -->
    <div class="Our-story-area story-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-70">
                        <h2>Our Love Story​</h2>
                        <img src="{{ asset('img/gallery/tittle_img.png') }}" alt="">
                        <p>{{ $data->love_story }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="story-caption background-img mb-40" style="background-image: url({{ asset('img/gallery/story2.jpg') }});">
                        <div class="story-details">
                            <h4>The Proposal</h4>
                            <p>{{ $data->love_story }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="story-img">
                        <img  class="story2" src="{{ asset('/upload/users/wedding/'. $data->love_story_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Story End -->
    <!--? Services Start -->
    <section class="pricing-card-area section-padding30 section-bg" data-background="{{ asset('img/gallery/section_bg1.png') }}">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-70">
                        <h2>Wedding Info</h2>
                        <img src="{{ asset('img/gallery/tittle_img.png') }}" alt="">
                        <p>Quisque nec facilisis sem. In at commodo velit. Aliquam tempor volutpat laoreet. Quisque non tellus eleifend arcu gravida aliquam. Vivamus quis consequat nisl</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <h4>The Ceremony</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>{{ Carbon\Carbon::parse( $data->ceremony_date)->format('M, d Y') }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $data->ceremony_place }}</li>
                                <li>{{ $data->ceremony_address }}</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card active text-center mb-30">
                        <div class="card-top">
                            <h4>The Reception</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>{{ Carbon\Carbon::parse( $data->reception_date)->format('M, d Y') }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $data->reception_place }}</li>
                                <li>{{ $data->reception_address }}</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <h4>The Party</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li><i class="fas fa-calendar-alt"></i>{{ Carbon\Carbon::parse( $data->party_date)->format('M, d Y') }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $data->party_place }}</li>
                                <li>{{ $data->party_address }}</li>
                            </ul>
                        </div>
                        <div class="card-buttons mt-30">
                            <a href="#" class="btn card-btn1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Card End -->
    <!--? Count Down Start -->
    <div class="count-down-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" data-background="{{ asset('img/gallery/section_bg2.png') }}">
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">23</span>
                                    <p>days</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter active text-center">
                                    <span class="counter">15</span>
                                    <p>hours</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">46</span>
                                    <p>mins</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter">20</span>
                                    <p>secs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url({{ asset('/upload/users/wedding/'. $data->image_1) }});">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 01</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url({{ asset('/upload/users/wedding/'. $data->image_2) }});">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 02</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url({{ asset('/upload/users/wedding/'. $data->image_3) }});">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 03</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img" style="background-image: url({{ asset('/upload/users/wedding/'. $data->image_4) }});">
                        </div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>image 04</h3>
                                <a href="assets/img/gallery/gallery1.png" class="menorie-icon"> <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Gift Start -->
    <section class="gift-area gift-padding fix" data-background="{{ asset('img/gallery/section_bg3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gift-caption text-center">
                        <h2>The Best Gift From You</h2>
                        <p>Will be your presentation in our wedding</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/animated.headline.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint -->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
