@extends('layouts.layout2onepage')

@section('title', 'Syarat & Ketentuan | PT. Anugrah Solusi Digital')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/legal-pages.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Syarat & Ketentuan" subtitle="Terms and Conditions" />

    <main class="legal-page">
        <section class="legal-page__section">
            <div class="container">
                <div class="legal-page__intro">
                    <span class="legal-page__eyebrow">Terms and Conditions</span>
                    <h3>Ketentuan layanan PT. Anugrah Solusi Digital</h3>
                    <p>
                        Dengan menggunakan layanan kami, klien dianggap telah membaca dan memahami ketentuan berikut.
                        Kami menulisnya sesederhana mungkin agar ekspektasi, hak, dan tanggung jawab tiap pihak jelas
                        sejak awal kerja sama.
                    </p>
                </div>

                <div class="legal-page__grid">
                    <div class="legal-page__content">
                        <div class="legal-page__block">
                            <h4>1. Ruang lingkup layanan</h4>
                            <p>
                                PT. Anugrah Solusi Digital menyediakan layanan konsultasi IT, pengembangan website,
                                aplikasi web, aplikasi mobile, ERP, integrasi sistem, SEO, cloud, maintenance, dan
                                layanan digital lain sesuai penawaran atau perjanjian kerja yang disepakati.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>2. Penawaran dan persetujuan pekerjaan</h4>
                            <p>
                                Setiap pekerjaan dimulai setelah ruang lingkup, estimasi biaya, timeline, dan mekanisme
                                pembayaran disetujui oleh klien. Persetujuan dapat berbentuk tanda tangan dokumen,
                                balasan email, bukti pembayaran, atau bentuk persetujuan tertulis lain yang disepakati.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>3. Kewajiban klien</h4>
                            <ul>
                                <li>Memberikan informasi, materi, akses, dan approval yang dibutuhkan secara tepat waktu.</li>
                                <li>Memastikan materi yang diberikan tidak melanggar hak cipta atau aturan pihak lain.</li>
                                <li>Melakukan pembayaran sesuai invoice, milestone, atau jadwal yang disepakati.</li>
                                <li>Memberikan feedback secara jelas agar pekerjaan dapat berjalan efektif.</li>
                            </ul>
                        </div>

                        <div class="legal-page__block">
                            <h4>4. Kewajiban kami</h4>
                            <ul>
                                <li>Mengerjakan layanan sesuai ruang lingkup yang telah disepakati.</li>
                                <li>Menjaga komunikasi project secara profesional dan transparan.</li>
                                <li>Menjaga kerahasiaan data dan akses yang diberikan oleh klien.</li>
                                <li>Memberikan hasil pekerjaan sesuai standar teknis yang wajar untuk jenis layanan terkait.</li>
                            </ul>
                        </div>

                        <div class="legal-page__block">
                            <h4>5. Pembayaran</h4>
                            <p>
                                Pembayaran dilakukan sesuai invoice atau kesepakatan tertulis. Untuk project tertentu,
                                pembayaran dapat dibagi per milestone. Keterlambatan pembayaran dapat mempengaruhi
                                jadwal pengerjaan, support, atau serah terima pekerjaan.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>6. Perubahan ruang lingkup</h4>
                            <p>
                                Permintaan tambahan di luar ruang lingkup awal akan dibahas terlebih dahulu. Bila
                                berdampak pada waktu, biaya, atau prioritas, kami akan mengajukan estimasi tambahan
                                sebelum pekerjaan dilanjutkan.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>7. Hak kekayaan intelektual</h4>
                            <p>
                                Hak atas hasil pekerjaan custom mengikuti kesepakatan project. Komponen open-source,
                                template, library, plugin, API, dan layanan pihak ketiga tetap tunduk pada lisensi dan
                                ketentuan pemilik masing-masing.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>8. Revisi dan serah terima</h4>
                            <p>
                                Revisi dilakukan sesuai batas dan periode yang disepakati. Setelah hasil pekerjaan
                                disetujui atau digunakan secara aktif oleh klien, pekerjaan dianggap telah diterima,
                                kecuali ada catatan tertulis yang masih masuk dalam ruang lingkup awal.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>9. Batasan tanggung jawab</h4>
                            <p>
                                Kami berupaya memberikan layanan terbaik, namun tidak bertanggung jawab atas gangguan
                                yang disebabkan oleh layanan pihak ketiga, perubahan kebijakan platform eksternal,
                                kesalahan penggunaan oleh pengguna akhir, atau faktor di luar kendali wajar kami.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>10. Perubahan ketentuan</h4>
                            <p>
                                Ketentuan ini dapat diperbarui dari waktu ke waktu agar tetap relevan dengan layanan dan
                                operasional bisnis. Versi terbaru akan ditampilkan di halaman ini.
                            </p>
                        </div>
                    </div>

                    <aside class="legal-page__aside">
                        <h4>Ringkasan kontak</h4>
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
                            <a href="{{ route('faq') }}">FAQ</a>
                            <a href="{{ route('refund-policy') }}">Refund Policy</a>
                            <a href="{{ route('contact') }}">Kontak</a>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <x-footer2 />
@endsection
