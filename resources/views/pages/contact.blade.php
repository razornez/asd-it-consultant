@extends('layouts.layout2onepage')

@section('title', 'Kontak | PT. Anugrah Solusi Digital')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/legal-pages.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Kontak" subtitle="Hubungi Kami" />

    <main class="legal-page">
        <section class="legal-page__section">
            <div class="container">
                <div class="legal-page__intro">
                    <span class="legal-page__eyebrow">Kontak</span>
                    <h3>Mari ngobrol tentang kebutuhan digital Anda</h3>
                    <p>
                        Ceritakan kebutuhan Anda secara singkat. Kami akan membantu memetakan solusi yang masuk akal,
                        mulai dari website company profile, aplikasi bisnis, integrasi sistem, SEO, sampai konsultasi IT
                        yang lebih strategis.
                    </p>
                </div>

                <div class="legal-page__contact-list">
                    <div class="legal-page__card">
                        <span class="icon-mail"></span>
                        <h4>Email</h4>
                        <p><a href="mailto:{{ __('home.contact.email_value') }}">{{ __('home.contact.email_value') }}</a></p>
                    </div>
                    <div class="legal-page__card">
                        <span class="icon-phone-call"></span>
                        <h4>Telepon / WhatsApp</h4>
                        <p><a href="https://wa.me/{{ __('home.contact.wa_value') }}" target="_blank">{{ __('home.contact.phone_value') }}</a></p>
                    </div>
                    <div class="legal-page__card">
                        <span class="icon-pin"></span>
                        <h4>Alamat Usaha</h4>
                        <p>{{ __('home.location_address') }}</p>
                    </div>
                </div>

                <div class="row" style="margin-top: 36px;">
                    <div class="col-xl-7 col-lg-7">
                        <div class="legal-page__form-card">
                            <h4 class="contact-one__from-title">{{ __('home.contact.form_title') }}</h4>
                            <form class="contact-one__form" onsubmit="sendToWhatsApp(event)">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">{{ __('home.contact.name') }}</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-user-1"></span>
                                            </div>
                                            <input id="name" type="text" name="name" placeholder="{{ __('home.contact.placeholder_name') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">{{ __('home.contact.email') }}</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-email"></span>
                                            </div>
                                            <input id="email" type="email" name="email" placeholder="{{ __('home.contact.placeholder_email') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">{{ __('home.contact.phone') }}</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <input id="phone" type="text" name="phone" placeholder="{{ __('home.contact.placeholder_phone') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-one__input-title">{{ __('home.contact.subject') }}</h4>
                                        <div class="contact-one__input-box">
                                            <div class="contact-one__input-icon">
                                                <span class="icon-edit"></span>
                                            </div>
                                            <input id="subject" type="text" name="subject" placeholder="{{ __('home.contact.placeholder_subject') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-one__input-title">{{ __('home.contact.message') }}</h4>
                                    <div class="contact-one__input-box text-message-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-edit"></span>
                                        </div>
                                        <textarea id="message" name="message" placeholder="{{ __('home.contact.placeholder_message') }}" required></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn">
                                            <span>{{ __('home.contact.submit') }}</span>
                                            <i class="icon-right-arrow"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5">
                        <aside class="legal-page__aside" style="position: static;">
                            <h4>Informasi perusahaan</h4>
                            <ul class="legal-page__aside-list">
                                <li>
                                    <span class="legal-page__aside-label">Nama Usaha</span>
                                    <strong>PT. Anugrah Solusi Digital</strong>
                                </li>
                                <li>
                                    <span class="legal-page__aside-label">Email</span>
                                    <a href="mailto:{{ __('home.contact.email_value') }}">{{ __('home.contact.email_value') }}</a>
                                </li>
                                <li>
                                    <span class="legal-page__aside-label">Nomor Telepon</span>
                                    <a href="tel:{{ __('home.contact.phone_value') }}">{{ __('home.contact.phone_value') }}</a>
                                </li>
                                <li>
                                    <span class="legal-page__aside-label">Alamat Usaha</span>
                                    <strong>{{ __('home.location_address') }}</strong>
                                </li>
                                <li>
                                    <span class="legal-page__aside-label">Jam Kerja</span>
                                    <strong>{!! __('home.working_time') !!}</strong>
                                </li>
                            </ul>
                            <div class="legal-page__quick-links">
                                <a href="{{ route('faq') }}">FAQ</a>
                                <a href="{{ route('refund-policy') }}">Refund Policy</a>
                                <a href="{{ route('terms-and-conditions') }}">Syarat & Ketentuan</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer2 />
@endsection
