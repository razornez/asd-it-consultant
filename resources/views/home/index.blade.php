@extends('layouts.layout2onepage')
@section('title', __('home.title'))
@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->
    <!--Main Slider Start-->
    <section class="main-slider" id="home">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">{{ __('home.subtitle') }}</p>
                                    </div>
                                    <h2 class="main-slider__title">
                                        {!! __('home.hero.title') !!}
                                    </h2>
                                    <p class="main-slider__text">{!! __('home.hero.tagline') !!}</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span class="odometer"
                                                            data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">{{ __('home.subtitle') }}</p>
                                    </div>
                                    <h2 class="main-slider__title">
                                        {!! __('home.hero.title2') !!}
                                    </h2>
                                    <p class="main-slider__text">{!! __('home.hero.tagline2') !!}</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                        <a href="{{ route('contact') }}" class="thm-btn">
                                            {{ __('home.get_started') }}
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span
                                                            class="odometer" data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider__shape-1 img-bounce">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-2"></div>
                    <div class="main-slider__shape-3">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-3.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-4">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-4.png') }}" alt="">
                    </div>
                    <div class="main-slider__shape-5">
                        <img src="{{ asset('assets/images/shapes/main-slider-shape-5.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                <div class="main-slider__sub-title-box">
                                        <div class="main-slider__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider__sub-title">{{ __('home.subtitle') }}</p>
                                    </div>
                                    <h2 class="main-slider__title">
                                        {!! __('home.hero.title2') !!}
                                    </h2>
                                    <p class="main-slider__text">{!! __('home.hero.tagline2') !!}</p>
                                    <div class="main-slider__btn-and-trustpilot-box">
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn">Get Started<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="main-slider__trustpilot-content-box">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">5.0 Excellent</p>
                                                    <p class="main-slider__trustpilot-review">Reviews <span
                                                            class="odometer" data-count="4170"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/main-slider-img-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                            <div class="main-slider__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="main-slider__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <!-- If we need navigation buttons -->

        </div>
    </section>
    <!--Main Slider End-->


    <!--Services Three Start -->
    <section class="services-three" id="services">
        <div class="services-three__shape-1"></div>
        <div class="services-three__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('home.our_service') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">{!! __('home.our_service_title') !!}
                </h2>
            </div>
            <div class="services-three__carousel owl-theme owl-carousel">
                
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-strategy"></span>
                            </div>
                            <h4 class="services-three__title">{!! __('home.our_service_1.title') !!}</h4>
                        </div>
                        <p class="services-three__text">{!! __('home.our_service_1.subtitle') !!}</p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_1.service_1') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_1.service_2') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_1.service_3') }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">{{ __('home.read_more') }} <span
                                class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-transparency"></span>
                            </div>
                            <h3 class="services-three__title">{!! __('home.our_service_2.title') !!}</h3>
                        </div>
                        <p class="services-three__text">{!! __('home.our_service_2.subtitle') !!}</p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_2.service_1') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_2.service_2') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_2.service_3') }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">{{ __('home.read_more') }} <span
                                class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-earning"></span>
                            </div>
                            <h3 class="services-three__title">{!! __('home.our_service_3.title') !!}</h3>
                        </div>
                        <p class="services-three__text">{!! __('home.our_service_3.subtitle') !!}</p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_3.service_1') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_3.service_2') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_3.service_3') }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">{{ __('home.read_more') }} <span
                                class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="services-three__title">{!! __('home.our_service_4.title') !!}</h3>
                        </div>
                        <p class="services-three__text">{!! __('home.our_service_4.subtitle') !!}</p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_4.service_1') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_4.service_2') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_4.service_3') }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">{{ __('home.read_more') }} <span
                                class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="item">
                    <div class="services-three__single">
                        <div class="services-three__icon-and-title">
                            <div class="services-three__icon">
                                <span class="icon-idea"></span>
                            </div>
                            <h3 class="services-three__title">{!! __('home.our_service_5.title') !!}</h3>
                        </div>
                        <p class="services-three__text">{!! __('home.our_service_5.subtitle') !!}</p>
                        <ul class="list-unstyled services-three__list">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_5.service_1') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_5.service_2') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick-inside-circle"></span>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.our_service_5.service_3') }}</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="services-three__btn">{{ __('home.read_more') }} <span
                                class="icon-right-arrow-1"></span>
                        </a>
                    </div>
                </div>
                <!--Services Three Single End -->
            </div>
        </div>
    </section>
    <!--Services Three End -->

    <!--Why Choose Two Start -->
    <section class="why-choose-three">
        <div class="why-choose-three__bg-shape float-bob-x"
            style="background-image: url({{ asset('assets/images/shapes/why-choose-three-bg-shape.png') }});"></div>
        <div class="why-choose-three__shape-1"></div>
        <div class="why-choose-three__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('home.why_choose_us') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">{!! __('home.why_choose_us_title') !!}</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="why-choose-three__single-left">
                        <div class="why-choose-three__single">
                            <div class="why-choose-three__icon">
                                <span class="icon-quality"></span>
                            </div>
                            <h3 class="why-choose-three__title"> {{ __('home.why_1.title') }}</h3>
                            <div class="why-choose-three__bdr"></div>
                            <p class="why-choose-three__text">{{ __('home.why_1.subtitle') }}</p>
                        </div>
                        <div class="why-choose-three__single">
                            <div class="why-choose-three__icon">
                                <span class="icon-team"></span>
                            </div>
                            <h3 class="why-choose-three__title"> {{ __('home.why_2.title') }}</h3>
                            <div class="why-choose-three__bdr"></div>
                            <p class="why-choose-three__text">{{ __('home.why_2.subtitle') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="why-choose-three__img">
                        <iframe 
                            src="https://razornez.net" 
                            width="100%" 
                            height="555" 
                            frameborder="0" 
                            style="border:0; border-radius:8px; overflow:hidden;" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInRight" data-wow-delay="100ms">
                    <div class="why-choose-three__single-left">
                        <div class="why-choose-three__single">
                            <div class="why-choose-three__icon">
                                <span class="icon-customer-centricity"></span>
                            </div>
                            <h3 class="why-choose-three__title"> {{ __('home.why_3.title') }}</h3>
                            <div class="why-choose-three__bdr"></div>
                            <p class="why-choose-three__text">{{ __('home.why_3.subtitle') }}</p>
                        </div>
                        <div class="why-choose-three__single">
                            <div class="why-choose-three__icon">
                                <span class="icon-support"></span>
                            </div>
                            <h3 class="why-choose-three__title"> {{ __('home.why_4.title') }}</h3>
                            <div class="why-choose-three__bdr"></div>
                            <p class="why-choose-three__text">{{ __('home.why_4.subtitle') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Two End -->

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="counter-two__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/counter-two-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-trophy"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="120">{{ __('home.award_total') }}</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">{{ __('home.award_title') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-user"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="300">{{ __('home.team_total') }}</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">{{ __('home.team_title') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-chat"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="20">{{ __('home.client_total') }}</h3>
                                <span>M</span>
                            </div>
                            <p class="counter-two__text">{{ __('home.client_title') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-folder"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="1.5">{{ __('home.project_total') }}</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-two__text">{{ __('home.project_title') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
            </div>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Process One Start -->
    <section class="process-one">
        <div class="process-one__shape-1">
            <img src="{{ asset('assets/images/shapes/process-one-shape-1.png') }}" alt="">
        </div>
        <div class="process-one__shape-2"></div>
        <div class="process-one__shape-3"></div>
        <div class="process-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/process-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
            <div class="col-xl-5">
                <div class="process-one__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape-1"></div>
                            <span class="section-title__tagline">{{ __('home.working_proses_title') }}</span>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>

                        {{-- Judul hero (mengandung <span> untuk styling) --}}
                        <h2 class="section-title__title title-animation">
                            {!! __('home.process.title') !!}
                        </h2>
                    </div>

                    {{-- Subtitle/deskripsi singkat --}}
                    <p class="process-one__text">
                        {{ __('home.process.subtitle') }}
                    </p>

                    <div class="process-one__btn-box">
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="thm-btn">
                            {{ __('home.process.cta') }} <span class="icon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="process-one__right">
                    <ul class="process-one__process-list list-unstyled">
                        <li>
                            <div class="process-one__process-count"></div>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.discovery_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.discovery_text') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.design_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.design_text') }}</p>
                            </div>
                            <div class="process-one__process-count"></div>
                        </li>

                        <li>
                            <div class="process-one__process-count"></div>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.development_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.development_text') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.quality_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.quality_text') }}</p>
                            </div>
                            <div class="process-one__process-count"></div>
                        </li>

                        <li>
                            <div class="process-one__process-count"></div>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.release_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.release_text') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="process-one__process-content">
                                <h3 class="process-one__process-title">{{ __('home.process.steps.maintenance_title') }}</h3>
                                <p class="process-one__process-text">{{ __('home.process.steps.maintenance_text') }}</p>
                            </div>
                            <div class="process-one__process-count"></div>
                        </li>
                    </ul>
                </div>
            </div>

            </div>
        </div>
    </section>
    <!-- Process One End -->

    <!-- Sliding Text Start -->
    <section class="sliding-text">
        <div class="sliding-text__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Front end Development" class="sliding-text__title">Front end Development</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="UI/UX Design" class="sliding-text__title">UI/UX Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Product Design" class="sliding-text__title">Product Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Digital Marketing" class="sliding-text__title">Digital Marketing</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="Website Design" class="sliding-text__title">Website Design</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="APP Development" class="sliding-text__title">APP Development</h2>
                    <span></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text End -->

    <!--About Four Start-->
    <section class="about-four">
        <div class="about-four__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/about-four-bg-shape.png') }});"></div>
        <div class="about-four__bg-shape-2"
            style="background-image: url({{ asset('assets/images/shapes/about-four-bg-shape-2.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{ asset('assets/images/resources/about-four-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-four__img-2">
                                <img src="{{ asset('assets/images/resources/about-four-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-four__experience">
                                <div class="about-four__experience-inner">
                                    <div class="about-four__experience-count-box">
                                        <h3 class="odometer" data-count="25">00</h3>
                                    </div>
                                    <p class="about-four__experience-count-text">Years of
                                        <br> Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-four__client-box">
                            <ul class="about-four__client-img-list list-unstyled">
                                <li>
                                    <div class="about-four__client-img">
                                        <img src="{{ asset('assets/images/resources/about-four-client-img-1-1.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-four__client-img">
                                        <img src="{{ asset('assets/images/resources/about-four-client-img-1-2.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="about-four__client-img">
                                        <img src="{{ asset('assets/images/resources/about-four-client-img-1-3.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><span class="icon-plus"></span></a>
                                </li>
                            </ul>
                            <p class="about-four__client-text"><span class="odometer"
                                    data-count="120">00</span><span>K</span> Satisfied Client</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">About Us</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Supercharge <span>Your
                                    Business</span><br><span>Growth with Our</span>
                                Cutting-Edge IT<br> Solutions</h2>
                        </div>
                        <p class="about-four__text">Transform your business with our innovative IT solutions,
                            tailored to address your unique challenges and drive growth in today’s digital
                            landscape.</p>
                        <div class="about-four__points-box">
                            <ul class="about-four__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Innovative IT Solutions Expert<br> Support & Consulting</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Cloud Solutions for Modern<br> Enterprises</p>
                                </li>
                            </ul>
                            <ul class="about-four__points-list about-four__points-list-2 list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick-inside-circle"></span>
                                    </div>
                                    <p>Seamless Digital<br> Transformation AI-Driven <br>Business Automation</p>
                                </li>
                                <li>
                                    <div class="about-four__points-list-img">
                                        <img src="{{ asset('assets/images/resources/about-four-points-list-img.jpg') }}" alt="">
                                    </div>
                                    <div class="about-four__points-list-content">
                                        <h5>Thomas Alison</h5>
                                        <p>Founder & SEO</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="about-four__points-2 list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-technical-support"></span>
                                </div>
                                <div class="content">
                                    <h5>Innovative IT Solutions</h5>
                                    <p>Stay ahead with cutting-edge technology tailored to <br>your business needs.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-real-estate-agency"></span>
                                </div>
                                <div class="content">
                                    <h5>Cloud Solutions </h5>
                                    <p>Secure, scalable, and efficient cloud services to power<br> your growth.
                                        Cloud Solutions for Modern Enterprises</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!-- Portfolio Two Start -->
    <section class="portfolio-two" id="portfolio">
        <div class="portfolio-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/portfolio-two-shape-1.png') }}" alt="">
        </div>
        <div class="portfolio-two__shape-2"></div>
        <div class="portfolio-two__shape-3"></div>
        <div class="portfolio-two__shape-4"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Portfolio</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">Explore Our Creative <span>Journey</span><br>
                    <span> Crafting Success Through</span>
                </h2>
            </div>
            <div class="portfolio-two__carousel-container">
                <div class="portfolio-two__carousel owl-carousel owl-theme">
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Innovative Solutions,<br> Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Transforming Ideas Into<br> Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Empowering Businesses with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Innovative Solutions,<br> Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Transforming Ideas Into<br> Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Empowering Businesses with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                    <!--Portfolio Two Single Start-->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-1.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Innovative Solutions,<br> Powerful
                                                    Results</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Innovative Solutions,<br>
                                                        Powerful
                                                        Results</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-2.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Transforming Ideas Into<br> Digital
                                                    Excellence</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-2.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Transforming Ideas Into
                                                        Digital Excellence</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-3.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Driving Success Through<br>
                                                    Technology</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-3.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Driving Success Through
                                                        Technology</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/portfolio-2-4.jpg') }});">
                                        </div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">Empowering Businesses<br> with
                                                    Cutting-Edge IT</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__icon">
                                                <a href="{{ asset('assets/images/project/portfolio-2-4.jpg') }}" class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                            </div>
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">Empowering Businesses with
                                                        Cutting-Edge IT</a></h3>
                                                <p class="portfolio-two__text">Explore How We've Empowered
                                                    Businesses with Innovative Tech Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Two End -->

    <!-- Contact One Start -->
    <section class="contact-one" id="contact">
        <div class="contact-one__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/contact-one-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="contact-one__left-shape-1"></div>
                        <div class="contact-one__left-shape-2"></div>
                        <h3 class="contact-one__from-title">How Can We Help You?</h3>
                        <form class="contact-form-validated contact-one__form" action="assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Full Name</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name" placeholder="Thomas Alison" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Email Address</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="email" name="email" placeholder="thomas@domain.com"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Phone Number</h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <input type="text" name="Phone" placeholder=" 12 (00) 123 4567 890"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">Subject</h4>
                                    <div class="contact-one__input-box">
                                        <div class="select-box">
                                            <select class="selectmenu wide">
                                                <option selected>Thomas Alison
                                                </option>
                                                <option>Type Of Service 01</option>
                                                <option>Type Of Service 02</option>
                                                <option>Type Of Service 03</option>
                                                <option>Type Of Service 04</option>
                                                <option>Type Of Service 05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">Inquiry about </h4>
                                <div class="contact-one__input-box text-message-box">
                                    <div class="contact-one__input-icon">
                                        <span class="icon-edit"></span>
                                    </div>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn"><span>Submit
                                            Now</span><i class="icon-right-arrow"></i></button>
                                </div>
                            </div>
                            <div class="result mt-2"></div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Get In Touch</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">Start the Conversation
                                <span>–</span><br><span>Reach Out Anytime</span>
                            </h2>
                        </div>
                        <p class="contact-one__text">We're here to listen! Whether you have questions,<br> feedback,
                            or
                            just want to say hello, feel free to reach out. </p>
                        <ul class="contact-one__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <h4>Location</h4>
                                    <p>D16 Pondok Sabilulungan, Banjaran St., Arjasari, Bandung, West Java
                                        <br> Indonesia, 40379
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                    <p><a href="mailto:support@domain.com">support@domain.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Contact</h4>
                                    <p>Tel: <a href="tel:1200456789000"> 12 (00) 456 7890 00</a></p>
                                    <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact One End -->

    <!-- Testimonial One Start -->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/testimonial-one-bg-1.jpg') }});"></div>
        <div class="testimonial-one__shape-1"></div>
        <div class="testimonial-one__shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-9">
                    <div class="testimonial-one__content-box">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">Client Testimonial</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">What Our Clients
                                <span>– Say<br></span><span> About Us</span>
                            </h2>
                        </div>
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="#">Sarah Collins</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="#">Collins Munro</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">!Great Agency It Agency</h4>
                                        <p class="testimonial-one__text">“From the initial consultation to the final
                                            product, every step was handled with professionalism and care. The final
                                            result exceeded our expectations and has significantly improved our
                                            operations"</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">Marketing Manager
                                                    </p>
                                                    <h3 class="testimonial-one__client-name"><a
                                                            href="#">Sarah James</a></h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent </p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="testimonial-one__trustpilot-star-icon">
                                                                <img src="{{ asset('assets/images/icon/star-icon.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand One Start -->
        <div class="brand-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="brand-one__left">
                            <ul class="list-unstyled brand-one__img-list">
                                <li>
                                    <div class="brand-one__img-box">
                                        <img src="{{ asset('assets/images/brand/brand-one-img-1-1.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="brand-one__img-box">
                                        <img src="{{ asset('assets/images/brand/brand-one-img-1-2.jpg') }}"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                            <p class="brand-one__text">12K Trusted by clients <br>
                                worldwide
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="brand-one__right">
                            <div class="brand-one__carousel owl-theme owl-carousel">
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="brand-one__single">
                                        <div class="brand-one__img">
                                            <img src="{{ asset('assets/images/brand/brand-1-5.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand One End -->
    </section>

    <x-footer2 />
@endsection
