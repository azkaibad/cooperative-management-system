<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import WOW from 'wow.js';
import Footer from '../../Components/Footer.vue';
import Navbar from '../../Components/Navbar.vue';
import CountUp from '../../Components/CountUp.vue';
import Preloader from '../../Components/Preloader.vue';
import ScrollToTop from '../../Components/ScrollToTop.vue';

defineProps({
    title: {
        type: String,
        default: 'Informasi Umum - Koperasi Kusuma Mulya',
    },
});

const initWow = () => {
    if (typeof window !== 'undefined') {
        const wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 40,
            mobile: true,
            live: true,
        });
        wow.init();
    }
};

onMounted(() => {
    if (typeof window !== 'undefined') {
        window.addEventListener('preloaderFinished', initWow);
        setTimeout(initWow, 800);
    }
});
</script>

<template>
    <Head :title="title" />

    <!-- Corporate Brand Preloader Intro -->
    <Preloader />

    <div class="min-h-screen bg-[#F9F9FF] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= MAIN NAVBAR COMPONENT ================= -->
        <Navbar activeMenu="informasi-umum" />

        <!-- ================= HERO BANNER ================= -->
        <section class="bg-gradient-to-r from-[#001945] via-[#00357F] to-[#004AAD] text-white py-16 lg:py-24 relative overflow-hidden">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10 text-center space-y-4 wow animate__animated animate__fadeInDown">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-blue-200 border border-white/20">
                    SEJARAH & LEGALITAS HUKUM
                </div>
                <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                    Informasi Umum Koperasi
                </h1>
                <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                    Landasan hukum, asas pendirian, serta komitmen transparansi pengabdian Koperasi Kusuma Mulya.
                </p>
            </div>
        </section>

        <!-- ================= CONTENT SECTION ================= -->
        <section class="py-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-16">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left Image -->
                    <div class="lg:col-span-5 relative wow animate__animated animate__fadeInLeft">
                        <div class="relative rounded-3xl overflow-hidden shadow-xl border border-slate-200 bg-slate-100">
                            <img src="/images/building_koperasi.png" alt="Gedung Koperasi" class="w-full h-[400px] object-cover" />
                        </div>
                    </div>

                    <!-- Right Text Info -->
                    <div class="lg:col-span-7 space-y-6 wow animate__animated animate__fadeInRight">
                        <div class="space-y-2">
                            <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">LEGALITAS & REPUTASI</div>
                            <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#111C2C]">
                                Menjaga Kepercayaan Anggota Sejak Berdiri Tahun 2012
                            </h2>
                        </div>
                        <div class="space-y-4 text-slate-700 text-sm sm:text-base leading-relaxed">
                            <p>
                                <strong class="text-[#00357F]">Koperasi Kusuma Mulya</strong> didirikan atas dasar kebersamaan dan asas kekeluargaan untuk memberikan pelayanan keuangan terbaik bagi seluruh anggota di wilayah Semarang dan sekitarnya.
                            </p>
                            <p>
                                Berdiri secara resmi dengan Pengesahan Badan Hukum dari <strong>Kementerian Hukum dan Hak Asasi Manusia RI (AHU)</strong> serta berada di bawah pengawasan aktif <strong>Kementerian Koperasi dan UKM Republik Indonesia</strong>.
                            </p>
                        </div>

                        <!-- 3 Legal Pillars -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                            <div class="corporate-card p-5 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Badan Hukum Resmi</div>
                                <div class="text-[11px] text-slate-500">AHU Kemenkumham RI</div>
                            </div>
                            <div class="corporate-card p-5 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Izin Operasional</div>
                                <div class="text-[11px] text-slate-500">KSP Kemenkop UKM</div>
                            </div>
                            <div class="corporate-card p-5 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Asas Kekeluargaan</div>
                                <div class="text-[11px] text-slate-500">Prinsip Gotong Royong</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ReactBits CountUp Stats Grid for Informasi Umum -->
                <div class="pt-8 border-t border-slate-100 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="corporate-card p-6 text-center space-y-2">
                        <div class="font-heading text-3xl font-extrabold text-[#004AAD]">
                            <CountUp :to="2012" />
                        </div>
                        <div class="text-xs font-bold text-slate-800">Tahun Berdiri Resmi</div>
                        <div class="text-[11px] text-slate-500">Awal Pengabdian</div>
                    </div>
                    <div class="corporate-card p-6 text-center space-y-2">
                        <div class="font-heading text-3xl font-extrabold text-[#004AAD]">
                            <CountUp :to="2350" suffix="+" />
                        </div>
                        <div class="text-xs font-bold text-slate-800">Anggota Terdaftar</div>
                        <div class="text-[11px] text-slate-500">Anggota Aktif</div>
                    </div>
                    <div class="corporate-card p-6 text-center space-y-2">
                        <div class="font-heading text-3xl font-extrabold text-[#004AAD]">
                            <CountUp :to="15.8" :decimals="1" prefix="Rp " suffix=" M" />
                        </div>
                        <div class="text-xs font-bold text-slate-800">Total Modal Terkelola</div>
                        <div class="text-[11px] text-slate-500">Simpan Pinjam</div>
                    </div>
                    <div class="corporate-card p-6 text-center space-y-2">
                        <div class="font-heading text-3xl font-extrabold text-[#004AAD]">
                            <CountUp :to="100" suffix="%" />
                        </div>
                        <div class="text-xs font-bold text-slate-800">Tingkat Kepatuhan</div>
                        <div class="text-[11px] text-slate-500">Laporan RAT Tahun 2024</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <Footer />

        <!-- Scroll To Top Floating Button -->
        <ScrollToTop />
    </div>
</template>
