<header class="main-header">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <div class="main-menu__top-social">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-dribble"></span></a>

                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-pin"></i>
                                </div>
                                <div class="text">
                                    <p>{{ __('home.address') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-search-mail"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:cs@anugrahdigital.co.id">cs@anugrahdigital.co.id</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:1212345678900">+12 (123) 456 78900</a></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled main-menu__top-menu">
                            <li><a href="#">{{ __('home.menu.help') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('home.menu.support') }}</a></li>
                            <li><a href="#">{{ __('home.menu.faqs') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="scrollToLink">
                                        <a href="#home">{{ __('home.menu.home') }}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#services">{{ __('home.menu.services') }}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#about-four">{{ __('home.menu.about') }}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#portfolio">{{ __('home.menu.portfolio') }}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#contact">{{ __('home.menu.contact') }}</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a href="#team">{{ __('home.menu.testimoni') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <!-- <div class="main-menu__search-box">
                                    <a href="#"
                                        class="main-menu__search searcher-toggler-box icon-search-interface-symbol"></a>
                                </div> -->
                                <div class="main-menu__btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn">{{ __('home.menu.contact_title') }}<span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>