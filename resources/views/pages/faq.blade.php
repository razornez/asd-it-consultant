@extends('layouts.layout2onepage')

@section('title', 'FAQ | PT. Anugrah Solusi Digital')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/legal-pages.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="FAQ" subtitle="Pertanyaan yang Sering Ditanyakan" />

    <main class="legal-page">
        <section class="legal-page__section">
            <div class="container">
                <div class="legal-page__intro">
                    <span class="legal-page__eyebrow">FAQ</span>
                    <h3>Pertanyaan yang biasanya muncul sebelum mulai kerja sama</h3>
                    <p>
                        Kami merangkum jawaban yang paling sering ditanyakan calon klien sebelum memulai project software,
                        website, aplikasi, SEO, maupun konsultasi IT bersama PT. Anugrah Solusi Digital.
                    </p>
                </div>

                <div class="legal-page__grid">
                    <div>
                        <div class="legal-page__faq-item">
                            <h4>Layanan apa saja yang tersedia?</h4>
                            <p>
                                Kami membantu pengembangan website, aplikasi web, aplikasi mobile, integrasi API,
                                ERP, sistem informasi rumah sakit atau sekolah, SEO, digital visibility, cloud,
                                infrastruktur, dan konsultasi strategi IT. Bila kebutuhan Anda belum masuk daftar,
                                kami tetap bisa diskusi untuk melihat pendekatan terbaik.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Bagaimana proses kerja sama dimulai?</h4>
                            <p>
                                Biasanya kami mulai dari sesi discovery singkat untuk memahami tujuan bisnis, masalah
                                yang ingin diselesaikan, target pengguna, dan batasan teknis. Setelah itu kami susun
                                ruang lingkup pekerjaan, estimasi waktu, biaya, dan tahapan pengerjaan yang realistis.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Apakah bisa mengerjakan project custom?</h4>
                            <p>
                                Bisa. Sebagian besar pekerjaan kami memang bersifat custom, karena setiap bisnis punya
                                alur kerja dan prioritas yang berbeda. Kami tidak memaksakan satu template solusi untuk
                                semua klien.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Berapa lama estimasi pengerjaan project?</h4>
                            <p>
                                Estimasi tergantung kompleksitas. Website company profile sederhana biasanya lebih
                                cepat dibanding aplikasi internal, ERP, atau sistem dengan banyak integrasi. Setelah
                                kebutuhan dipetakan, kami akan memberi timeline yang lebih jelas sebelum pekerjaan
                                dimulai.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Apakah ada pembayaran bertahap?</h4>
                            <p>
                                Ya. Untuk project tertentu, pembayaran dapat dibuat bertahap sesuai milestone, misalnya
                                setelah kesepakatan awal, setelah desain atau modul utama selesai, dan setelah serah
                                terima. Detailnya akan dicantumkan dalam penawaran atau perjanjian kerja.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Metode pembayaran apa yang diterima?</h4>
                            <p>
                                Kami menerima pembayaran melalui transfer bank dan kanal pembayaran resmi yang tersedia
                                di website. Setiap pembayaran akan dicatat berdasarkan invoice atau kesepakatan yang
                                sudah disetujui.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Apakah klien mendapat source code?</h4>
                            <p>
                                Untuk project pengembangan software custom, ketentuan source code mengikuti ruang
                                lingkup dan perjanjian project. Kami akan menjelaskan bagian mana yang menjadi hak
                                klien, komponen pihak ketiga yang digunakan, serta batasan lisensi bila ada.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Apakah tersedia maintenance setelah project selesai?</h4>
                            <p>
                                Tersedia. Kami dapat membantu perawatan sistem, perbaikan bug, monitoring, backup,
                                peningkatan fitur, dan support operasional sesuai paket maintenance yang disepakati.
                            </p>
                        </div>

                        <div class="legal-page__faq-item">
                            <h4>Bagaimana jika ingin membatalkan project?</h4>
                            <p>
                                Pembatalan akan mengacu pada progres pekerjaan dan ketentuan refund yang berlaku.
                                Penjelasan lengkapnya dapat dibaca pada halaman Refund Policy.
                            </p>
                        </div>
                    </div>

                    <aside class="legal-page__aside">
                        <h4>Butuh jawaban yang lebih spesifik?</h4>
                        <ul class="legal-page__aside-list">
                            <li>
                                <span class="legal-page__aside-label">Email</span>
                                <a href="mailto:{{ __('home.contact.email_value') }}">{{ __('home.contact.email_value') }}</a>
                            </li>
                            <li>
                                <span class="legal-page__aside-label">Telepon / WhatsApp</span>
                                <a href="https://wa.me/{{ __('home.contact.wa_value') }}" target="_blank">{{ __('home.contact.phone_value') }}</a>
                            </li>
                            <li>
                                <span class="legal-page__aside-label">Alamat Usaha</span>
                                <strong>{{ __('home.location_address') }}</strong>
                            </li>
                        </ul>
                        <div class="legal-page__quick-links">
                            <a href="{{ route('refund-policy') }}">Refund Policy</a>
                            <a href="{{ route('terms-and-conditions') }}">Syarat & Ketentuan</a>
                            <a href="{{ route('contact') }}">Kontak</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <x-footer2 />
@endsection
