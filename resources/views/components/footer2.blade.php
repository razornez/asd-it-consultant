<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-1.png') }}" alt="">
    </div>
    <div class="site-footer__shape-2">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-2.png') }}" alt="">
    </div>
    <div class="site-footer__shape-3"></div>
    <div class="site-footer__shape-4"></div>
    <div class="site-footer__shape-5"></div>
    <div class="site-footer__top">
        <div class="site-footer__top-bg"
            style="background-image: url({{ asset('assets/images/backgrounds/site-footer-top-bg.jpg') }});"></div>
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/footer-logo.png') }}"
                            alt=""></a>
                </div>
                <div class="site-footer__top-text-box">
                    <p class="site-footer__top-text">{{ __('home.tagline') }}</p>
                </div>
                <div class="site-footer__btn-box">
                <a href="https://wa.me/6285889963822?text={{ urlencode(__('home.whatsapp_message')) }}" 
                    target="_blank" 
                    class="site-footer__btn">
                        {{ __('home.get_in_touch') }}
                        <span class="icon-right-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__main-content-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__contact">
                        <ul class="footer-widget__contact-list list-unstyled">
                            <li>
                                <div class="icon-box">
                                    <span class="icon-pin"></span>
                                    <p>{{ __('home.location_title') }}</p>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.location_address') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-clock"></span>
                                    <p>{{ __('home.working_time_title') }}</p>
                                </div>
                                <div class="text">
                                    <p>{!! __('home.working_time') !!}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-contact"></span>
                                    <p>{{ __('home.contact_title') }}</p>
                                </div>
                                <div class="text">
                                    <p>
                                        <a href="mailto:{{ __('home.contact.email_value') }}" class="mail-box">{{ __('home.contact.email_value') }}</a>
                                        <a href="tel:{{ __('home.contact.phone_value') }}" class="call-number">{{ __('home.contact.phone_value') }}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__quick-links">
                        <h4 class="footer-widget__title">{{ __('home.pages_title') }}</h4>
                        <ul class="footer-widget__quick-links-list list-unstyled">
                            <li><a href="#home">{{ __('home.pages.home') }}</a></li>
                            <li><a href="#about">{{ __('home.pages.about') }}</a></li>
                            <li><a href="#services">{{ __('home.pages.pricing') }}</a></li>
                            <li><a href="#portfolio">{{ __('home.pages.portfolio') }}</a></li>
                            <!-- <li><a href="#">{{ __('home.pages.blogs') }}</a></li> -->
                            <li><a href="#">{{ __('home.pages.careers') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__support">
                        <h4 class="footer-widget__title">{{ __('home.support_title') }}</h4>
                        <ul class="footer-widget__quick-links-list list-unstyled">
                            <li><a href="#">{{ __('home.support.terms') }}</a></li>
                            <li><a href="#">{{ __('home.support.faqs') }}</a></li>
                            <li><a href="#">{{ __('home.support.contact') }}</a></li>
                            <li><a href="{{ route('404') }}">{{ __('home.support.not_found') }}</a></li>
                            <li><a href="#">{{ __('home.support.live_chat') }}</a></li>
                            <li><a href="#services">{{ __('home.support.services') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__newsletter">
                        <h4 class="footer-widget__title">{{ __('home.newsletter_title') }}</h4>
                        <div class="footer-widget__newsletter-box">
                            <p class="footer-widget__newsletter-text">{{ __('home.newsletter_text') }}</p>
                            <form class="site-footer__newsletter-form contact-form-validated" action="assets/inc/sendemail.php" method="post" novalidate="novalidate">
                                <div class="site-footer__newsletter-input">
                                    <input type="email" placeholder="{{ __('home.newsletter_placeholder') }}">
                                </div>
                                <button type="submit" class="site-footer__newsletter-btn"> <span
                                        class="icon-right-arrow"></span>
                                </button>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper1" id="skipper" checked="">
                                    <label for="skipper"><span></span>{{ __('home.newsletter_privacy') }}</label>
                                </div>
                                <div class="result mt-2"></div>
                            </form>
                            <div class="site-footer__social-box">
                                <h4 class="site-footer__social-title">{{ __('home.follow_us') }}</h4>
                                <div class="site-footer__social-box-inner">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-dribble"></span></a>

                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text">
                                ⓒ Copyright 2023 <a href="#">Anugrahdigital.co.id</a> {{ __('home.copyright') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->
