@extends('layouts.layout2onepage')

@section('title', 'Refund Policy | PT. Anugrah Solusi Digital')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/legal-pages.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Refund Policy" subtitle="Kebijakan Pengembalian Dana" />

    <main class="legal-page">
        <section class="legal-page__section">
            <div class="container">
                <div class="legal-page__intro">
                    <span class="legal-page__eyebrow">Refund Policy</span>
                    <h3>Kebijakan pengembalian dana yang jelas dan adil</h3>
                    <p>
                        Kami ingin setiap kerja sama berjalan terbuka sejak awal. Halaman ini menjelaskan bagaimana
                        pengajuan refund ditangani untuk layanan konsultasi, pengembangan software, website, SEO,
                        maintenance, dan layanan digital lain dari PT. Anugrah Solusi Digital.
                    </p>
                </div>

                <div class="legal-page__grid">
                    <div class="legal-page__content">
                        <div class="legal-page__block">
                            <h4>1. Prinsip umum</h4>
                            <p>
                                Pengembalian dana dapat dipertimbangkan bila layanan belum berjalan, terjadi pembayaran
                                ganda, ada kesalahan nominal pembayaran, atau terdapat kondisi khusus yang disepakati
                                secara tertulis oleh kedua belah pihak.
                            </p>
                            <p>
                                Karena sebagian besar layanan kami berbasis waktu, keahlian, analisis, dan pengerjaan
                                custom, dana yang sudah digunakan untuk pekerjaan yang telah berjalan tidak selalu dapat
                                dikembalikan penuh.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>2. Kondisi yang dapat diajukan refund</h4>
                            <ul>
                                <li>Pembayaran terkonfirmasi dua kali untuk invoice yang sama.</li>
                                <li>Nominal pembayaran lebih besar dari tagihan yang disepakati.</li>
                                <li>Klien membatalkan sebelum pekerjaan dimulai dan belum ada alokasi tim atau biaya pihak ketiga.</li>
                                <li>Layanan tidak dapat kami jalankan karena alasan operasional dari pihak kami.</li>
                            </ul>
                        </div>

                        <div class="legal-page__block">
                            <h4>3. Kondisi yang tidak termasuk refund penuh</h4>
                            <ul>
                                <li>Pekerjaan sudah dimulai, termasuk discovery, analisis, desain, development, setup, riset, atau konsultasi.</li>
                                <li>Biaya telah digunakan untuk domain, hosting, lisensi, API, plugin, tools, atau layanan pihak ketiga.</li>
                                <li>Klien mengubah kebutuhan utama setelah pekerjaan berjalan dan perubahan tersebut berada di luar ruang lingkup awal.</li>
                                <li>Keterlambatan terjadi karena materi, akses, approval, atau informasi yang dibutuhkan belum diberikan oleh klien.</li>
                            </ul>
                        </div>

                        <div class="legal-page__block">
                            <h4>4. Pembatalan project</h4>
                            <p>
                                Bila project dibatalkan setelah pekerjaan berjalan, kami akan menghitung progres yang
                                sudah dikerjakan, biaya pihak ketiga yang sudah dibayarkan, serta waktu tim yang sudah
                                dialokasikan. Sisa dana, bila ada, dapat dikembalikan atau dialihkan menjadi kredit
                                layanan sesuai kesepakatan.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>5. Cara mengajukan refund</h4>
                            <p>
                                Pengajuan refund dapat dikirim melalui email ke
                                <a href="mailto:{{ __('home.contact.email_value') }}">{{ __('home.contact.email_value') }}</a>
                                dengan menyertakan nama pemesan, nomor invoice atau bukti pembayaran, alasan pengajuan,
                                dan nomor rekening tujuan bila refund disetujui.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>6. Waktu proses</h4>
                            <p>
                                Kami akan meninjau pengajuan refund dalam waktu 3 sampai 7 hari kerja setelah data
                                diterima lengkap. Jika disetujui, pengembalian dana diproses ke rekening atau metode
                                pembayaran yang disepakati dalam waktu yang wajar, mengikuti jam operasional bank atau
                                penyedia pembayaran terkait.
                            </p>
                        </div>

                        <div class="legal-page__block">
                            <h4>7. Komunikasi</h4>
                            <p>
                                Kami akan menghubungi klien bila ada informasi tambahan yang dibutuhkan. Keputusan refund
                                selalu dibuat berdasarkan bukti pembayaran, status pekerjaan, dan kesepakatan project.
                            </p>
                        </div>
                    </div>

                    <aside class="legal-page__aside">
                        <h4>Informasi refund</h4>
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
