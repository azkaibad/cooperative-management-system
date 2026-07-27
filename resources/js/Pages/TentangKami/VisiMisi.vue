<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import WOW from 'wow.js';
import Footer from '../../Components/Footer.vue';
import Navbar from '../../Components/Navbar.vue';

defineProps({
    title: {
        type: String,
        default: 'Visi & Misi - Koperasi Kusuma Mulya',
    },
});

onMounted(() => {
    if (typeof window !== 'undefined') {
        new WOW({ boxClass: 'wow', animateClass: 'animate__animated', offset: 60, mobile: true, live: false }).init();
    }
});
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#F9F9FF] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= MAIN NAVBAR COMPONENT ================= -->
        <Navbar activeMenu="visi-misi" />

        <!-- ================= HERO BANNER ================= -->
        <section class="bg-gradient-to-r from-[#001945] via-[#00357F] to-[#004AAD] text-white py-16 lg:py-24 relative overflow-hidden">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10 text-center space-y-4 wow animate__animated animate__fadeInDown">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-blue-200 border border-white/20">
                    LANDASAN STRATEGIS
                </div>
                <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                    Visi dan Misi Koperasi
                </h1>
                <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                    Cita-cita luhur dan komitmen pelayanan berkelanjutan bagi seluruh anggota Koperasi Kusuma Mulya.
                </p>
            </div>
        </section>

        <!-- ================= CONTENT SECTION WITH VECTOR SVG ICONS ================= -->
        <section class="py-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi Card -->
                    <div class="corporate-card p-8 sm:p-10 space-y-6 flex flex-col items-center text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.1s">
                        <div class="w-16 h-16 rounded-2xl bg-[#004AAD] text-white flex items-center justify-center shadow-lg shadow-blue-500/20">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="font-heading text-2xl font-extrabold text-[#00357F]">Visi Koperasi</h2>
                        <p class="text-slate-700 text-base leading-relaxed max-w-md">
                            Menjadi koperasi simpan pinjam yang terpercaya dan terdepan dalam meningkatkan kesejahteraan anggota melalui tata kelola yang profesional, transparan, dan berkelanjutan.
                        </p>
                    </div>

                    <!-- Misi Card -->
                    <div class="corporate-card p-8 sm:p-10 space-y-6 wow animate__animated animate__fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-[#004AAD] text-white flex items-center justify-center shadow-lg shadow-blue-500/20 flex-shrink-0">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h2 class="font-heading text-2xl font-extrabold text-[#00357F]">Misi Strategis</h2>
                        </div>

                        <ul class="space-y-4 text-slate-800 text-sm font-medium pt-1">
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

        <!-- FOOTER -->
        <Footer />
    </div>
</template>
