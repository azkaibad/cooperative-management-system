<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import WOW from 'wow.js';

defineProps({
    title: {
        type: String,
        default: 'Tentang Kami - Koperasi Kusuma Mulya',
    },
});

onMounted(() => {
    if (typeof window !== 'undefined') {
        new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 60,
            mobile: true,
            live: false,
        }).init();
    }
});

const mobileMenuOpen = ref(false);

const dewanPengawas = [
    { name: 'H. Ahmad Subagyo, S.E., M.M.', role: 'Ketua Pengawas', desc: 'Pengawasan tata kelola keuangan & audit kepatuhan' },
    { name: 'Dra. Hj. Ratna Sari', role: 'Anggota Pengawas', desc: 'Pengawasan operasional & manajemen risiko' }
];

const dewanPengurus = [
    { name: 'Drs. H. Bambang Setiawan, M.Si.', role: 'Ketua Umum', desc: 'Penanggung jawab utama kebijakan & arah strategis koperasi' },
    { name: 'Ir. Budi Santoso', role: 'Sekretaris', desc: 'Administrasi keanggotaan, legalitas & kehumasan' },
    { name: 'Hj. Endang Rahayu, S.E.', role: 'Bendahara', desc: 'Pengelolaan kas, likuiditas & laporan keuangan' }
];

const timOperasional = [
    { name: 'Hendra Wijaya, S.E.', role: 'Manajer Operasional & Unit Simpan Pinjam', desc: 'Pelayanan anggota, analisis pembiayaan & operasional harian' }
];
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#F9F9FF] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= TOP HEADER BAR ================= -->
        <div class="bg-[#1D2B4F] text-slate-200 text-xs py-2.5 px-4 sm:px-8 lg:px-12 border-b border-slate-700/50">
            <div class="max-w-[1380px] mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 sm:gap-6">
                    <span class="flex items-center gap-1.5 hover:text-white transition-colors">
                        <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Jl. Melati No. 10, Semarang, Jawa Tengah
                    </span>
                    <span class="flex items-center gap-1.5 hover:text-white transition-colors">
                        <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        (024) 1234 5678
                    </span>
                </div>
                <div class="flex items-center gap-4 text-slate-300">
                    <span>info@koperasikusumamulya.co.id</span>
                </div>
            </div>
        </div>

        <!-- ================= MAIN NAVBAR ================= -->
        <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-100 transition-all duration-300">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 py-3.5 flex items-center justify-between">
                <!-- Logo & Brand Name -->
                <Link href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14.5h-2v-4.5H8.5V10H11V7.5h2V10h2.5v2H13v4.5z"/>
                            <path d="M12 4a8 8 0 100 16 8 8 0 000-16zm-1 5a1 1 0 012 0v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H8a1 1 0 110-2h3V9z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-heading text-lg sm:text-xl font-extrabold tracking-tight text-[#00357F] leading-tight group-hover:text-[#004AAD] transition-colors">
                            KOPERASI KUSUMA MULYA
                        </div>
                        <div class="text-[11px] text-slate-500 font-medium tracking-wide">
                            Bersama Membangun Kesejahteraan
                        </div>
                    </div>
                </Link>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-slate-700">
                    <Link href="/" class="hover:text-[#004AAD] transition-colors py-1">
                        Beranda
                    </Link>

                    <Link href="/tentang-kami" class="text-[#004AAD] relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#004AAD] after:rounded-full">
                        Tentang Kami
                    </Link>

                    <Link href="/#layanan" class="hover:text-[#004AAD] transition-colors py-1">Layanan</Link>
                    <Link href="/#berita" class="hover:text-[#004AAD] transition-colors py-1">Berita</Link>
                    <Link href="/#galeri" class="hover:text-[#004AAD] transition-colors py-1">Galeri</Link>
                    <Link href="/#kontak" class="hover:text-[#004AAD] transition-colors py-1">Kontak</Link>
                </nav>

                <!-- Login Button -->
                <div class="hidden lg:flex items-center">
                    <a 
                        href="#" 
                        class="inline-flex items-center gap-2 bg-[#004AAD] hover:bg-[#00357F] text-white px-6 py-2.5 rounded-full font-semibold text-sm shadow-md shadow-blue-600/20 hover:shadow-xl hover:scale-[1.02] transition-all duration-300"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Login
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="lg:hidden p-2 text-slate-700 hover:text-[#004AAD] focus:outline-none"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Drawer Menu -->
            <div v-if="mobileMenuOpen" class="lg:hidden bg-white border-b border-slate-200 px-6 py-4 space-y-3 font-semibold text-sm">
                <Link href="/" class="block text-slate-700 py-1">Beranda</Link>
                <Link href="/tentang-kami" class="block text-[#004AAD] py-1">Tentang Kami</Link>
                <Link href="/#layanan" class="block text-slate-700 py-1">Layanan Kami</Link>
                <Link href="/#berita" class="block text-slate-700 py-1">Berita Terbaru</Link>
                <Link href="/#galeri" class="block text-slate-700 py-1">Galeri Kegiatan</Link>
                <Link href="/#kontak" class="block text-slate-700 py-1">Kontak Kami</Link>
            </div>
        </header>

        <!-- ================= PAGE HERO HEADER ================= -->
        <section class="bg-gradient-to-r from-[#001945] via-[#00357F] to-[#004AAD] text-white py-16 lg:py-20 relative overflow-hidden">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10 text-center space-y-4 wow animate__animated animate__fadeInDown" data-wow-duration="1s">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-blue-200 border border-white/20">
                    <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    PROFIL LENGKAP KOPERASI
                </div>
                <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                    Tentang Koperasi Kusuma Mulya
                </h1>
                <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                    Mengenal lebih dekat asas, struktur manajemen, serta visi dan misi kami dalam membangun kesejahteraan anggota secara amanah & transparan.
                </p>
            </div>
        </section>

        <!-- ================= 1. INFORMASI UMUM SECTION ================= -->
        <section id="informasi-umum" class="py-20 bg-white border-b border-slate-100">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-3 wow animate__animated animate__fadeInDown" data-wow-duration="0.8s">
                    <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">SEJARAH & LEGALITAS</div>
                    <h2 class="font-heading text-3xl font-extrabold text-[#111C2C]">
                        1. Informasi Umum Koperasi
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base">
                        Landasan hukum, asas pendirian, serta komitmen transparansi pengoperasian Koperasi Kusuma Mulya.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left Photo -->
                    <div class="lg:col-span-5 relative wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
                        <div class="relative rounded-3xl overflow-hidden shadow-xl border-4 border-white bg-slate-100">
                            <img 
                                src="/images/building_koperasi.png" 
                                alt="Gedung Koperasi Kusuma Mulya" 
                                class="w-full h-[380px] object-cover"
                            />
                        </div>
                    </div>

                    <!-- Right Text Content -->
                    <div class="lg:col-span-7 space-y-6 wow animate__animated animate__fadeInRight" data-wow-duration="1s">
                        <div class="space-y-4 text-slate-700 text-sm sm:text-base leading-relaxed">
                            <p>
                                <strong class="text-[#00357F]">Koperasi Kusuma Mulya</strong> didirikan atas dasar kebersamaan dan asas kekeluargaan untuk memberikan pelayanan keuangan terbaik bagi seluruh anggota di wilayah Semarang dan sekitarnya.
                            </p>
                            <p>
                                Berdiri secara resmi dengan Pengesahan Badan Hukum dari **Kementerian Hukum dan Hak Asasi Manusia RI** serta berada di bawah pengawasan aktif **Kementerian Koperasi dan UKM Republik Indonesia**.
                            </p>
                        </div>

                        <!-- 3 Legal Highlights with SVG Icons -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                            <div class="p-4 rounded-2xl bg-[#F0F3FF] border border-blue-100 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Badan Hukum Resmi</div>
                                <div class="text-[11px] text-slate-500">AHU Kemenkumham RI</div>
                            </div>

                            <div class="p-4 rounded-2xl bg-[#F0F3FF] border border-blue-100 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Izin Operasional</div>
                                <div class="text-[11px] text-slate-500">KSP Kemenkop UKM</div>
                            </div>

                            <div class="p-4 rounded-2xl bg-[#F0F3FF] border border-blue-100 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <div class="font-bold text-xs text-slate-900">Asas Kekeluargaan</div>
                                <div class="text-[11px] text-slate-500">Prinsip Gotong Royong</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= 2. STRUKTUR MANAJEMEN SECTION ================= -->
        <section id="struktur-manajemen" class="py-20 bg-[#F9F9FF] border-b border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-3 wow animate__animated animate__fadeInDown" data-wow-duration="0.8s">
                    <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">PENGURUS & PENGAWAS</div>
                    <h2 class="font-heading text-3xl font-extrabold text-[#111C2C]">
                        2. Struktur Manajemen Koperasi
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base">
                        Susunan dewan pengawas, dewan pengurus, dan pengelola operasional yang profesional.
                    </p>
                </div>

                <!-- Dewan Pengawas -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                        <div class="w-8 h-8 rounded-lg bg-[#004AAD] text-white flex items-center justify-center font-bold text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl font-extrabold text-[#00357F]">Dewan Pengawas</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div 
                            v-for="(p, i) in dewanPengawas" 
                            :key="i"
                            class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm spotlight-card flex items-start gap-4 wow animate__animated animate__fadeInUp"
                            :data-wow-delay="`${i * 0.15}s`"
                        >
                            <div class="w-14 h-14 rounded-2xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading font-extrabold text-base text-slate-900">{{ p.name }}</h4>
                                <div class="text-xs font-bold text-[#004AAD] mt-0.5">{{ p.role }}</div>
                                <p class="text-slate-500 text-xs mt-2 leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dewan Pengurus -->
                <div class="space-y-6 pt-4">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                        <div class="w-8 h-8 rounded-lg bg-[#004AAD] text-white flex items-center justify-center font-bold text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl font-extrabold text-[#00357F]">Dewan Pengurus</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div 
                            v-for="(p, i) in dewanPengurus" 
                            :key="i"
                            class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm spotlight-card flex items-start gap-4 wow animate__animated animate__fadeInUp"
                            :data-wow-delay="`${i * 0.15}s`"
                        >
                            <div class="w-14 h-14 rounded-2xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading font-extrabold text-base text-slate-900">{{ p.name }}</h4>
                                <div class="text-xs font-bold text-[#004AAD] mt-0.5">{{ p.role }}</div>
                                <p class="text-slate-500 text-xs mt-2 leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tim Operasional -->
                <div class="space-y-6 pt-4">
                    <div class="flex items-center gap-3 border-b border-slate-200 pb-3">
                        <div class="w-8 h-8 rounded-lg bg-[#004AAD] text-white flex items-center justify-center font-bold text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl font-extrabold text-[#00357F]">Manajemen Operasional</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div 
                            v-for="(p, i) in timOperasional" 
                            :key="i"
                            class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm spotlight-card flex items-start gap-4 wow animate__animated animate__fadeInUp"
                        >
                            <div class="w-14 h-14 rounded-2xl bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h2a2 2 0 012 2v1m-6 0h6"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading font-extrabold text-base text-slate-900">{{ p.name }}</h4>
                                <div class="text-xs font-bold text-[#004AAD] mt-0.5">{{ p.role }}</div>
                                <p class="text-slate-500 text-xs mt-2 leading-relaxed">{{ p.desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= 3. VISI & MISI SECTION ================= -->
        <section id="visi-misi" class="py-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-12">
                <div class="text-center max-w-2xl mx-auto space-y-3 wow animate__animated animate__fadeInDown" data-wow-duration="0.8s">
                    <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">LANDASAN TUJUAN</div>
                    <h2 class="font-heading text-3xl font-extrabold text-[#111C2C]">
                        3. Visi dan Misi Koperasi
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base">
                        Komitmen jangka panjang Koperasi Kusuma Mulya bagi keanggotaan dan kemajuan ekonomi bersama.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi Card with Vector SVG Icon -->
                    <div class="bg-gradient-to-br from-[#F9F9FF] to-[#E7EEFF]/70 p-8 sm:p-10 rounded-3xl border border-blue-100 shadow-md spotlight-card space-y-5 flex flex-col items-center text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.1s">
                        <div class="w-16 h-16 rounded-2xl bg-[#004AAD] text-white flex items-center justify-center shadow-lg shadow-blue-500/20">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-2xl font-extrabold text-[#00357F]">Visi Koperasi</h3>
                        <p class="text-slate-700 text-base leading-relaxed max-w-md">
                            Menjadi koperasi yang terpercaya dan terdepan dalam meningkatkan kesejahteraan anggota melalui tata kelola yang profesional, inovatif, dan berkelanjutan.
                        </p>
                    </div>

                    <!-- Misi Card with Vector SVG Icon -->
                    <div class="bg-gradient-to-br from-[#F9F9FF] to-[#E7EEFF]/70 p-8 sm:p-10 rounded-3xl border border-blue-100 shadow-md spotlight-card space-y-5 wow animate__animated animate__fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#004AAD] text-white flex items-center justify-center shadow-lg shadow-blue-500/20 flex-shrink-0">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl font-extrabold text-[#00357F]">Misi Strategis</h3>
                        </div>

                        <ul class="space-y-3.5 text-slate-800 text-sm font-medium pt-1">
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 font-bold text-xs mt-0.5">✓</div>
                                <span>Memberikan pelayanan simpan pinjam terbaik dan responsif bagi seluruh anggota.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 font-bold text-xs mt-0.5">✓</div>
                                <span>Mengelola usaha dan aset koperasi secara profesional, efisien, dan transparan.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 font-bold text-xs mt-0.5">✓</div>
                                <span>Membangun jaringan kemitraan strategis yang bermanfaat dan berkelanjutan.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 font-bold text-xs mt-0.5">✓</div>
                                <span>Meningkatkan nilai ekonomi dan kesejahteraan nyata bagi anggota dan masyarakat.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= FOOTER ================= -->
        <footer class="bg-[#001945] text-slate-300 pt-16 pb-8 border-t border-slate-800">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-700/60">
                    <div class="lg:col-span-2 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center font-bold">
                                K
                            </div>
                            <span class="font-heading text-lg font-bold text-white tracking-wide">
                                KOPERASI KUSUMA MULYA
                            </span>
                        </div>
                        <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                            Koperasi Kusuma Mulya berkomitmen untuk memberikan layanan terbaik bagi anggota demi kesejahteraan bersama.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <div class="text-sm font-bold text-white tracking-wide">Menu</div>
                        <ul class="space-y-2 text-xs">
                            <li><Link href="/" class="hover:text-white transition-colors">Beranda</Link></li>
                            <li><Link href="/tentang-kami" class="hover:text-white transition-colors">Tentang Kami</Link></li>
                            <li><Link href="/#layanan" class="hover:text-white transition-colors">Layanan</Link></li>
                            <li><Link href="/#berita" class="hover:text-white transition-colors">Berita</Link></li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <div class="text-sm font-bold text-white tracking-wide">Legalitas</div>
                        <ul class="space-y-2 text-xs text-slate-400">
                            <li>AHU Kemenkumham RI</li>
                            <li>Izin KSP Kemenkop UKM</li>
                            <li>Prinsip Transparansi RAT</li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <div class="text-sm font-bold text-white tracking-wide">Hubungi Kami</div>
                        <div class="space-y-2 text-xs text-slate-400">
                            <p>📍 Jl. Melati No. 10 Semarang</p>
                            <p>📞 (024) 1234 5678</p>
                            <p>✉️ info@koperasikusumamulya.co.id</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div>© 2024 Koperasi Kusuma Mulya. All Rights Reserved.</div>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-slate-300">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-slate-300">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
