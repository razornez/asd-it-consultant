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
                                            <a href="https://wa.me/{{ __('home.contact.wa_value') }}?text={{ urlencode(__('home.whatsapp_message')) }}" target="_blank" class="thm-btn">{{ __('home.get_started') }}<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider__trustpilot-box">
                                            <ul class="list-unstyled main-slider__trustpilot-img-list">
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.png') }}"
                                                            alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main-slider__trustpilot-img">
                                                        <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.png') }}"
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
                                                            data-count="100"></span>+ </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider__img">
                                        <img src="{{ asset('assets/images/resources/webp/main-slider-img-1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://razornez.net/" class="video-popup">
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
                                        <img src="{{ asset('assets/images/resources/webp/main-slider-img-1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://hutri.vercel.app/" class="video-popup">
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
                                        <img src="{{ asset('assets/images/resources/webp/main-slider-img-1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="main-slider__video-link">
                                        <a href="https://razornez.net/" class="video-popup">
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
                        <img src="{{ asset('assets/images/resources/why-choose-three-img.png') }}" alt="">
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
                        <a href="https://wa.me/{{ __('home.contact.wa_value') }}?text={{ urlencode(__('home.whatsapp_message')) }}" target="_blank" class="thm-btn">
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
                    <h2 data-hover="{{ __('home.services.frontend') }}" class="sliding-text__title">{{ __('home.services.frontend') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.uiux') }}" class="sliding-text__title">{{ __('home.services.uiux') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.mobile') }}" class="sliding-text__title">{{ __('home.services.mobile') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.web3d') }}" class="sliding-text__title">{{ __('home.services.web3d') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.erp') }}" class="sliding-text__title">{{ __('home.services.erp') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.strategy') }}" class="sliding-text__title">{{ __('home.services.strategy') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.seo') }}" class="sliding-text__title">{{ __('home.services.seo') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.simrs') }}" class="sliding-text__title">{{ __('home.services.simrs') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.simschool') }}" class="sliding-text__title">{{ __('home.services.simschool') }}</h2>
                    <span></span>
                </li>
                <li>
                    <h2 data-hover="{{ __('home.services.digital') }}" class="sliding-text__title">{{ __('home.services.digital') }}</h2>
                    <span></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text End -->

    <!--About Four Start-->
    <section class="about-four" id="about">
        <div class="about-four__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/about-four-bg-shape.png') }});"></div>
        <div class="about-four__bg-shape-2"
            style="background-image: url({{ asset('assets/images/shapes/about-four-bg-shape-2.png') }});"></div>
        <div class="container">
            <div class="row">
                <!-- Left -->
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
                                        <h3 class="odometer" data-count="10">00</h3>+
                                    </div>
                                    <p class="about-four__experience-count-text">{{ __('home.about_experience_years') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">{{ __('home.about_us_title') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">
                                {{ __('home.about_us_heading') }}
                            </h2>
                        </div>

                        <!-- Founder Story -->
                        <p class="about-four__text">
                            {{ __('home.about_us_text1') }}
                        </p>
                        <p class="about-four__text">
                            {{ __('home.about_us_text2') }}
                        </p>
                        <br>
                        <!-- Highlights -->
                        <ul class="about-four__points-2 list-unstyled">
                            <li>
                                <div class="icon"><span class="icon-technical-support"></span></div>
                                <div class="content">
                                    <h5>{{ __('home.about_highlight1_title') }}</h5>
                                    <p>{{ __('home.about_highlight1_text') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-real-estate-agency"></span></div>
                                <div class="content">
                                    <h5>{{ __('home.about_highlight2_title') }}</h5>
                                    <p>{{ __('home.about_highlight2_text') }}</p>
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
                    <span class="section-title__tagline">{{ __('home.portfolio_title') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">
                    {{ __('home.portfolio_subtitle_line1') }} <span>{{ __('home.portfolio_subtitle_line2') }}</span><br>
                    <span>{{ __('home.portfolio_subtitle_line3') }}</span>
                </h2>
            </div>

            <div class="portfolio-two__carousel-container">
                <div class="portfolio-two__carousel owl-carousel owl-theme">

                    <!-- Portfolio 1 -->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/sim-rs.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="https://www.razornez.net/" target="_blank">{{ __('home.portfolio_3d_portfolio') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="https://www.razornez.net/" target="_blank">{{ __('home.portfolio_3d_portfolio') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_3d_portfolio_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/sim-rs.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="https://hutri.vercel.app/" target="_blank">{{ __('home.portfolio_hutri') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="https://hutri.vercel.app/" target="_blank">{{ __('home.portfolio_hutri') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_hutri_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/sim-rs.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="https://tree-house-3d.vercel.app/" target="_blank">{{ __('home.portfolio_treehouse') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="https://tree-house-3d.vercel.app/" target="_blank">{{ __('home.portfolio_treehouse') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_treehouse_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/sim-rs.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">{{ __('home.portfolio_simrs') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">{{ __('home.portfolio_simrs') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_simrs_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Portfolio 2 -->
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/sim-school.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">{{ __('home.portfolio_school') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">{{ __('home.portfolio_school') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_school_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="active">
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/inventory-system.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">{{ __('home.portfolio_inventory') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">{{ __('home.portfolio_inventory') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_inventory_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/mobile-app.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">{{ __('home.portfolio_mobileapp') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">{{ __('home.portfolio_mobileapp') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_mobileapp_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="portfolio-two__box-content">
                                        <div class="single-portfolio-two__bg" style="background-image: url({{ asset('assets/images/project/erp.jpg') }});" loading="lazy"></div>
                                        <div class="portfolio-two__title">
                                            <h3><a href="#">{{ __('home.portfolio_erp') }}</a></h3>
                                        </div>
                                        <div class="portfolio-two__content-box">
                                            <div class="portfolio-two__title-box">
                                                <h3 class="portfolio-two__title-2"><a href="#">{{ __('home.portfolio_erp') }}</a></h3>
                                                <p class="portfolio-two__text">{{ __('home.portfolio_erp_desc') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Two End -->
    <!-- Contact One Start -->
    <section class="contact-one" id="contact">
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left">
                        <h3 class="contact-one__from-title">{{ __('home.contact.form_title') }}</h3>
                        <form onsubmit="sendToWhatsApp(event)" class="contact-form-validated contact-one__form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <h4 class="contact-one__input-title">{{ __('home.contact.name') }}</h4>
                                    <div class="contact-one__input-box">
                                        <input type="text" id="name" name="name" placeholder="{{ __('home.contact.placeholder_name') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="contact-one__input-title">{{ __('home.contact.email') }}</h4>
                                    <div class="contact-one__input-box">
                                        <input type="email" id="email" name="email" placeholder="{{ __('home.contact.placeholder_email') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="contact-one__input-title">{{ __('home.contact.phone') }}</h4>
                                    <div class="contact-one__input-box">
                                        <input type="text" id="phone" name="phone" placeholder="{{ __('home.contact.placeholder_phone') }}">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="contact-one__input-title">{{ __('home.contact.subject') }}</h4>
                                    <div class="contact-one__input-box">
                                        <input type="text" id="subject" name="subject" placeholder="{{ __('home.contact.placeholder_subject') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">{{ __('home.contact.message') }}</h4>
                                <div class="contact-one__input-box text-message-box">
                                    <textarea id="message" name="message" placeholder="{{ __('home.contact.placeholder_message') }}"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn">
                                        <span>{{ __('home.contact.submit') }}</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Info -->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">{{ __('home.contact.tagline') }}</span>
                            <h2 class="section-title__title">{{ __('home.contact.title') }}</h2>
                        </div>
                        <p class="contact-one__text">{{ __('home.contact.description') }}</p>
                        <ul class="contact-one__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <h4>{{ __('home.contact.address_title') }}</h4>
                                    <p>{{ __('home.contact.address_value') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <h4>{{ __('home.contact.email_title') }}</h4>
                                    <p><a href="mailto:cs@anugrahdigital.co.i.id">{{ __('home.contact.email_value') }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h4>{{ __('home.contact.phone_title') }}</h4>
                                    <p>{{ __('home.contact.phone_value') }}</p>
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
    <section class="testimonial-one" id="testimonial">
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
                                <span class="section-title__tagline">{{ __('home.testimonial.section_tagline') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">
                                {{ __('home.testimonial.title') }}
                            </h2>
                        </div>
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            
                            <!-- Testimoni 1 -->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">{{ __('home.testimonial.testi1.title') }}</h4>
                                        <p class="testimonial-one__text">{{ __('home.testimonial.testi1.text') }}</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">{{ __('home.testimonial.testi1.role') }}</p>
                                                    <h3 class="testimonial-one__client-name">
                                                        <a href="#">{{ __('home.testimonial.testi1.name') }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}" alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent</p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimoni 2 -->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">{{ __('home.testimonial.testi2.title') }}</h4>
                                        <p class="testimonial-one__text">{{ __('home.testimonial.testi2.text') }}</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">{{ __('home.testimonial.testi2.role') }}</p>
                                                    <h3 class="testimonial-one__client-name">
                                                        <a href="#">{{ __('home.testimonial.testi2.name') }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}" alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent</p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimoni 3 -->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__img-box">
                                        <div class="testimonial-one__img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__content">
                                        <h4 class="testimonial-one__title">{{ __('home.testimonial.testi3.title') }}</h4>
                                        <p class="testimonial-one__text">{{ __('home.testimonial.testi3.text') }}</p>
                                        <div class="testimonial-one__bottom">
                                            <div class="testimonial-one__quote-and-client-info">
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-left"></span>
                                                </div>
                                                <div class="testimonial-one__client-info">
                                                    <p class="testimonial-one__client-sub-title">{{ __('home.testimonial.testi3.role') }}</p>
                                                    <h3 class="testimonial-one__client-name">
                                                        <a href="#">{{ __('home.testimonial.testi3.name') }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__trustpilot-box">
                                                <div class="testimonial-one__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/trustpilot-logo.png') }}" alt="">
                                                </div>
                                                <div class="testimonial-one__trustpilot-text-and-star">
                                                    <p class="testimonial-one__trustpilot-text">5.0 Excellent</p>
                                                    <ul class="list-unstyled testimonial-one__trustpilot-star-list">
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                        <li><div class="testimonial-one__trustpilot-star-icon"><img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- carousel -->
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
                            <p class="brand-one__text">{{ __('home.brand.trusted') }}</p>
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
