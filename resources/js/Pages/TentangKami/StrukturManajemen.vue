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
        default: 'Struktur Manajemen - Koperasi Kusuma Mulya',
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

const dewanPengawas = [
    { 
        name: 'H. Ahmad Subagyo, S.E., M.M.', 
        role: 'Ketua Pengawas', 
        desc: 'Pengawasan tata kelola keuangan, audit kepatuhan & efisiensi operasional',
        photo: '/images/team/pengawas_1.png'
    },
    { 
        name: 'Dra. Hj. Ratna Sari', 
        role: 'Anggota Pengawas', 
        desc: 'Pengawasan operasional keanggotaan & penerapan manajemen risiko',
        photo: '/images/team/pengawas_2.png'
    }
];

const dewanPengurus = [
    { 
        name: 'Drs. H. Bambang Setiawan, M.Si.', 
        role: 'Ketua Umum', 
        desc: 'Penanggung jawab utama arah strategis & pengambil keputusan tertinggi eksekutif',
        photo: '/images/team/pengurus_1.png'
    },
    { 
        name: 'Ir. Budi Santoso', 
        role: 'Sekretaris', 
        desc: 'Pengelolaan administrasi keanggotaan, legalitas organisasi & kehumasan',
        photo: '/images/team/pengurus_2.png'
    },
    { 
        name: 'Hj. Endang Rahayu, S.E.', 
        role: 'Bendahara', 
        desc: 'Pengelolaan kas likuiditas, manajemen portofolio simpanan & laporan keuangan',
        photo: '/images/team/pengurus_3.png'
    }
];

const timOperasional = [
    { 
        name: 'Hendra Wijaya, S.E.', 
        role: 'Manajer Operasional & KSP', 
        desc: 'Pelayanan harian anggota, analisis kelayakan pembiayaan & unit simpan pinjam',
        photo: '/images/team/manajer_1.png'
    }
];
</script>

<template>
    <Head :title="title" />

    <!-- Corporate Brand Preloader Intro -->
    <Preloader />

    <div class="min-h-screen bg-[#F9F9FF] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= MAIN NAVBAR COMPONENT ================= -->
        <Navbar activeMenu="struktur-manajemen" />

        <!-- ================= HERO BANNER ================= -->
        <section class="bg-gradient-to-r from-[#001945] via-[#00357F] to-[#004AAD] text-white py-16 lg:py-24 relative overflow-hidden">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10 text-center space-y-4 wow animate__animated animate__fadeInDown">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-blue-200 border border-white/20">
                    SUSUNAN ORGANISASI EXEKUTIF
                </div>
                <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                    Struktur Manajemen Koperasi
                </h1>
                <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                    Mengenal jajaran dewan pengawas, dewan pengurus, dan pengelola operasional Koperasi Kusuma Mulya.
                </p>
            </div>
        </section>

        <!-- ================= CONTENT SECTION WITH REAL MANAGEMENT PHOTOS ================= -->
        <section class="py-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-16">
                <!-- 1. DEWAN PENGAWAS -->
                <div class="space-y-8">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center font-bold shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-heading text-2xl font-extrabold text-[#00357F]">Dewan Pengawas</h2>
                            <p class="text-xs text-slate-500">Menjamin kepatuhan, akuntabilitas keuangan & tata kelola risiko</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div 
                            v-for="(p, i) in dewanPengawas" 
                            :key="i"
                            class="corporate-card overflow-hidden flex flex-col sm:flex-row items-center gap-6 p-6 wow animate__animated animate__fadeInUp"
                            :data-wow-delay="`${i * 0.15}s`"
                        >
                            <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-2xl overflow-hidden flex-shrink-0 border border-slate-200 shadow-sm">
                                <img :src="p.photo" :alt="p.name" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                            </div>
                            <div class="space-y-2 text-center sm:text-left">
                                <span class="inline-block bg-[#E7EEFF] text-[#004AAD] text-[11px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider">
                                    {{ p.role }}
                                </span>
                                <h3 class="font-heading font-extrabold text-lg text-slate-900 leading-snug">{{ p.name }}</h3>
                                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. DEWAN PENGURUS -->
                <div class="space-y-8 pt-4">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center font-bold shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-heading text-2xl font-extrabold text-[#00357F]">Dewan Pengurus Utama</h2>
                            <p class="text-xs text-slate-500">Penanggung jawab eksekutif, arah kebijakan & operasional organisasi</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div 
                            v-for="(p, i) in dewanPengurus" 
                            :key="i"
                            class="corporate-card overflow-hidden flex flex-col items-center p-6 text-center space-y-4 wow animate__animated animate__fadeInUp"
                            :data-wow-delay="`${i * 0.15}s`"
                        >
                            <div class="w-36 h-36 rounded-2xl overflow-hidden border border-slate-200 shadow-sm flex-shrink-0">
                                <img :src="p.photo" :alt="p.name" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                            </div>
                            <div class="space-y-2">
                                <span class="inline-block bg-[#E7EEFF] text-[#004AAD] text-[11px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider">
                                    {{ p.role }}
                                </span>
                                <h3 class="font-heading font-extrabold text-base text-slate-900 leading-snug">{{ p.name }}</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. MANAJEMEN OPERASIONAL -->
                <div class="space-y-8 pt-4">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center font-bold shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-heading text-2xl font-extrabold text-[#00357F]">Manajemen Operasional & KSP</h2>
                            <p class="text-xs text-slate-500">Pengelola pelayanan harian simpan pinjam & keanggotaan</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div 
                            v-for="(p, i) in timOperasional" 
                            :key="i"
                            class="corporate-card overflow-hidden flex flex-col sm:flex-row items-center gap-6 p-6 wow animate__animated animate__fadeInUp"
                        >
                            <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-2xl overflow-hidden flex-shrink-0 border border-slate-200 shadow-sm">
                                <img :src="p.photo" :alt="p.name" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                            </div>
                            <div class="space-y-2 text-center sm:text-left">
                                <span class="inline-block bg-[#E7EEFF] text-[#004AAD] text-[11px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider">
                                    {{ p.role }}
                                </span>
                                <h3 class="font-heading font-extrabold text-lg text-slate-900 leading-snug">{{ p.name }}</h3>
                                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
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
