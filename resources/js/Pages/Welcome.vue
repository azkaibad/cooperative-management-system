<script setup>
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import WOW from 'wow.js';
import Footer from '../Components/Footer.vue';
import Navbar from '../Components/Navbar.vue';
import CountUp from '../Components/CountUp.vue';

defineProps({
    title: {
        type: String,
        default: 'Koperasi Kusuma Mulya - Bersama Membangun Kesejahteraan',
    },
});

onMounted(() => {
    if (typeof window !== 'undefined') {
        new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 80,
            mobile: true,
            live: false,
        }).init();
    }
});

// Lightbox Modal State for Gallery
const isLightboxOpen = ref(false);
const activeGalleryImage = ref(null);

const openLightbox = (img) => {
    activeGalleryImage.value = img;
    isLightboxOpen.value = true;
};

const closeLightbox = () => {
    isLightboxOpen.value = false;
    activeGalleryImage.value = null;
};

// Gallery Items (6 thumbnails matching mockup)
const galleryItems = [
    { src: '/images/gallery_award.png', title: 'Penghargaan Koperasi Terbaik 2024' },
    { src: '/images/news_rat.png', title: 'Rapat Anggota Tahunan (RAT) 2024' },
    { src: '/images/hands_cooperative.png', title: 'Komitmen & Penandatanganan Anggota' },
    { src: '/images/news_education.png', title: 'Edukasi Keuangan Anggota' },
    { src: '/images/news_partnership.png', title: 'Penandatanganan Kemitraan Strategis' },
    { src: '/images/news_social.png', title: 'Program Sosial Koperasi' },
];

// News Items Data (4 news matching mockup)
const newsItems = [
    {
        date: '20 Mei 2024',
        title: 'Rapat Anggota Tahunan Koperasi Kusuma Mulya 2024',
        image: '/images/news_rat.png',
    },
    {
        date: '10 Mei 2024',
        title: 'Edukasi Keuangan untuk Anggota Koperasi',
        image: '/images/news_education.png',
    },
    {
        date: '02 Mei 2024',
        title: 'Koperasi Kusuma Mulya Jalin Kemitraan Strategis',
        image: '/images/news_partnership.png',
    },
    {
        date: '28 April 2024',
        title: 'Program Sosial Koperasi untuk Masyarakat Sekitar',
        image: '/images/news_social.png',
    }
];
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#F4F8FC] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= MAIN NAVBAR COMPONENT ================= -->
        <Navbar activeMenu="beranda" />

        <!-- ================= SECTION 1: HERO SECTION ================= -->
        <section class="relative pt-10 pb-16 md:pt-16 md:pb-28 bg-gradient-to-b from-[#F4F8FC] to-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                    <!-- Left Column Text -->
                    <div class="lg:col-span-6 space-y-6 wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
                        <!-- Pill Badge -->
                        <div class="inline-flex items-center gap-2 bg-[#E7EEFF] text-[#004AAD] px-3.5 py-1.5 rounded-full text-xs font-extrabold uppercase tracking-wide">
                            <span class="w-2 h-2 rounded-full bg-[#004AAD]"></span>
                            KOPERASI SIMPAN PINJAM
                        </div>

                        <!-- Main Headline -->
                        <h1 class="font-heading text-3xl sm:text-4xl lg:text-[46px] font-extrabold text-[#111C2C] leading-[1.25] tracking-tight">
                            Bersama Membangun<br />
                            Kesejahteraan,<br />
                            Bersama <span class="text-[#004AAD]">Kusuma Mulya</span>
                        </h1>

                        <!-- Subtitle Paragraph -->
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed max-w-lg">
                            Kami hadir untuk memberikan layanan yang aman, terpercaya, dan bermanfaat bagi seluruh anggota sesuai prinsip koperasi demi masa depan yang lebih baik.
                        </p>

                        <!-- CTA Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a 
                                href="https://wa.me/6281234567890" 
                                target="_blank"
                                class="inline-flex items-center gap-2 bg-[#004AAD] hover:bg-[#00357F] text-white px-6 py-3 rounded-full font-bold text-sm shadow-md transition-colors duration-200"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                Gabung Menjadi Anggota
                            </a>
                            <Link 
                                href="/tentang-kami/informasi-umum" 
                                class="inline-flex items-center gap-2 bg-[#E7EEFF] hover:bg-blue-100 text-[#004AAD] px-6 py-3 rounded-full font-bold text-sm transition-colors duration-200"
                            >
                                Pelajari Selengkapnya
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </Link>
                        </div>
                    </div>

                    <!-- Right Building Image -->
                    <div class="lg:col-span-6 relative wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="relative rounded-2xl overflow-hidden shadow-md border border-slate-200/80 bg-white">
                            <img 
                                src="/images/building_koperasi.png" 
                                alt="Gedung Koperasi Kusuma Mulya" 
                                class="w-full h-[360px] sm:h-[420px] object-cover"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Stat Bar (4 Columns Box) -->
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 mt-10 lg:-mb-24 relative z-20 wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-slate-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-0 lg:divide-x lg:divide-slate-200">
                        <!-- Stat 1 -->
                        <div class="flex items-center gap-4 lg:px-8 first:lg:pl-0">
                            <div class="w-12 h-12 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-heading text-2xl font-extrabold text-[#004AAD]">
                                    <CountUp :to="2350" suffix="+" />
                                </div>
                                <div class="text-xs font-bold text-slate-800">Anggota Aktif</div>
                                <div class="text-[11px] text-slate-500">Bergabung bersama kami</div>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="flex items-center gap-4 lg:px-8">
                            <div class="w-12 h-12 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-heading text-2xl font-extrabold text-[#004AAD]">
                                    <CountUp :to="25" suffix="+" />
                                </div>
                                <div class="text-xs font-bold text-slate-800">Kemitraan Strategis</div>
                                <div class="text-[11px] text-slate-500">Bersinergi untuk tumbuh</div>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="flex items-center gap-4 lg:px-8">
                            <div class="w-12 h-12 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-heading text-2xl font-extrabold text-[#004AAD]">
                                    <CountUp :to="100" suffix="%" />
                                </div>
                                <div class="text-xs font-bold text-slate-800">Komitmen Pelayanan</div>
                                <div class="text-[11px] text-slate-500">Amanah dan profesional</div>
                            </div>
                        </div>

                        <!-- Stat 4 -->
                        <div class="flex items-center gap-4 lg:px-8 last:lg:pr-0">
                            <div class="w-12 h-12 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-heading text-2xl font-extrabold text-[#004AAD]">
                                    <CountUp :to="12" suffix="+" />
                                </div>
                                <div class="text-xs font-bold text-slate-800">Tahun Pengalaman</div>
                                <div class="text-[11px] text-slate-500">Melayani dengan dedikasi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 2: PROFIL KOPERASI ================= -->
        <section class="py-16 lg:pt-36 lg:pb-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    <!-- Left Image -->
                    <div class="lg:col-span-5 wow animate__animated animate__fadeInLeft">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
                            <img src="/images/hands_cooperative.png" alt="Profil Koperasi Kusuma Mulya" class="w-full h-[320px] object-cover" />
                        </div>
                    </div>

                    <!-- Right Content Info -->
                    <div class="lg:col-span-7 space-y-4 wow animate__animated animate__fadeInRight">
                        <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">PROFIL KOPERASI</div>
                        <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#001945]">
                            Koperasi Untuk Anggota, Oleh Anggota
                        </h2>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Koperasi Kusuma Mulya adalah koperasi simpan pinjam yang berkomitmen untuk meningkatkan kesejahteraan anggota melalui layanan yang profesional, transparan, dan berkelanjutan.
                        </p>
                        <div class="pt-2">
                            <Link 
                                href="/tentang-kami/informasi-umum" 
                                class="inline-flex items-center gap-2 bg-[#004AAD] hover:bg-[#00357F] text-white px-6 py-2.5 rounded-lg font-bold text-sm shadow-sm transition-colors"
                            >
                                Selengkapnya &rarr;
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 3: VISI & MISI ================= -->
        <section class="py-16 bg-[#F4F8FC] border-t border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-10">
                <div class="text-center space-y-2 wow animate__animated animate__fadeInDown">
                    <div class="inline-flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-[#004AAD]"></span>
                        <span class="text-[#004AAD] font-extrabold text-sm tracking-wider uppercase">VISI & MISI</span>
                        <span class="w-8 h-[2px] bg-[#004AAD]"></span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi Card -->
                    <div class="bg-white p-8 sm:p-10 rounded-2xl border border-slate-100 shadow-sm space-y-4 flex flex-col items-center text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-xl font-extrabold text-[#001945]">Visi</h3>
                        <p class="text-slate-600 text-sm leading-relaxed max-w-sm">
                            Menjadi koperasi yang terpercaya dan terdepan dalam meningkatkan kesejahteraan anggota.
                        </p>
                    </div>

                    <!-- Misi Card -->
                    <div class="bg-white p-8 sm:p-10 rounded-2xl border border-slate-100 shadow-sm space-y-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center shadow-sm flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="font-heading text-xl font-extrabold text-[#001945]">Misi</h3>
                        </div>
                        <ul class="space-y-2.5 text-slate-700 text-xs sm:text-sm font-medium">
                            <li class="flex items-start gap-2.5">
                                <span class="text-[#004AAD] font-bold">✓</span>
                                <span>Memberikan layanan terbaik bagi anggota</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-[#004AAD] font-bold">✓</span>
                                <span>Mengelola usaha secara profesional dan transparan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-[#004AAD] font-bold">✓</span>
                                <span>Membangun kinerja sama yang bermanfaat dan berkelanjutan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-[#004AAD] font-bold">✓</span>
                                <span>Meningkatkan nilai ekonomi anggota dan masyarakat</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 4: LAYANAN KAMI ================= -->
        <section id="layanan" class="py-16 bg-white border-t border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-10">
                <div class="text-center space-y-2 wow animate__animated animate__fadeInDown">
                    <div class="inline-flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-[#004AAD]"></span>
                        <span class="text-[#004AAD] font-extrabold text-sm tracking-wider uppercase">LAYANAN KAMI</span>
                        <span class="w-8 h-[2px] bg-[#004AAD]"></span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Feature 1: Simpanan -->
                    <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm space-y-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center mx-auto shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading font-extrabold text-base text-[#001945]">Simpanan</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            Berbagai jenis simpanan dengan keuntungan menarik dan aman.
                        </p>
                    </div>

                    <!-- Feature 2: Pinjaman -->
                    <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm space-y-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center mx-auto shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <h3 class="font-heading font-extrabold text-base text-[#001945]">Pinjaman</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            Pinjaman mudah dengan proses cepat, bunga ringan, dan transparan.
                        </p>
                    </div>

                    <!-- Feature 3: Layanan Anggota -->
                    <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm space-y-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center mx-auto shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading font-extrabold text-base text-[#001945]">Layanan Anggota</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            Berbagai layanan untuk memenuhi kebutuhan dan kemudahan anggota.
                        </p>
                    </div>

                    <!-- Feature 4: Kemitraan -->
                    <div class="bg-white rounded-2xl p-7 border border-slate-100 shadow-sm space-y-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="w-14 h-14 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center mx-auto shadow-sm">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-heading font-extrabold text-base text-[#001945]">Kemitraan</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            Bekerja sama dengan berbagai pihak untuk manfaat yang lebih luas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 5: BERITA TERBARU ================= -->
        <section id="berita" class="py-16 bg-[#F4F8FC] border-t border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-8">
                <div class="flex justify-between items-center wow animate__animated animate__fadeIn">
                    <h2 class="font-heading text-xl sm:text-2xl font-extrabold text-[#004AAD] uppercase tracking-wide">BERITA TERBARU</h2>
                    <a href="#" class="text-[#004AAD] hover:underline font-bold text-xs sm:text-sm flex items-center gap-1">
                        Lihat Semua &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="(item, index) in newsItems" 
                        :key="index"
                        :data-wow-delay="`${(index + 1) * 0.15}s`"
                        class="bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col justify-between wow animate__animated animate__fadeInUp group"
                    >
                        <div>
                            <div class="relative overflow-hidden h-44 bg-slate-100">
                                <img 
                                    :src="item.image" 
                                    :alt="item.title" 
                                    class="w-full h-full object-cover"
                                />
                            </div>
                            <div class="p-5 space-y-2">
                                <div class="text-[11px] font-bold text-slate-400">
                                    {{ item.date }}
                                </div>
                                <h3 class="font-heading font-extrabold text-sm text-slate-900 leading-snug group-hover:text-[#004AAD] transition-colors">
                                    {{ item.title }}
                                </h3>
                            </div>
                        </div>
                        <div class="px-5 pb-5">
                            <a href="#" class="text-xs font-bold text-[#004AAD] hover:underline flex items-center gap-1">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 6: GALERI KEGIATAN ================= -->
        <section id="galeri" class="py-16 bg-white border-t border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-8">
                <div class="flex justify-between items-center wow animate__animated animate__fadeIn">
                    <h2 class="font-heading text-xl sm:text-2xl font-extrabold text-[#004AAD] uppercase tracking-wide">GALERI KEGIATAN</h2>
                    <Link href="/galeri" class="text-[#004AAD] hover:underline font-bold text-xs sm:text-sm flex items-center gap-1">
                        Lihat Semua &rarr;
                    </Link>
                </div>

                <!-- 6 Photo Row Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    <div 
                        v-for="(g, idx) in galleryItems" 
                        :key="idx"
                        @click="openLightbox(g)"
                        :data-wow-delay="`${(idx + 1) * 0.1}s`"
                        class="relative rounded-xl overflow-hidden h-36 sm:h-40 border border-slate-200 shadow-sm cursor-pointer group wow animate__animated animate__fadeIn"
                    >
                        <img 
                            :src="g.src" 
                            :alt="g.title" 
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex flex-col items-center justify-center text-white text-xs font-bold px-2 text-center space-y-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            <span>Perbesar</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= LIGHTBOX MODAL ================= -->
        <div 
            v-if="isLightboxOpen && activeGalleryImage" 
            class="fixed inset-0 z-50 bg-black/85 flex items-center justify-center p-4 animate-fadeIn"
            @click.self="closeLightbox"
        >
            <div class="bg-white rounded-2xl overflow-hidden max-w-3xl w-full shadow-2xl relative">
                <button 
                    @click="closeLightbox" 
                    class="absolute top-4 right-4 bg-slate-900/70 text-white rounded-full w-9 h-9 flex items-center justify-center hover:bg-slate-900 transition-colors z-10"
                >
                    ✕
                </button>
                <img :src="activeGalleryImage.src" :alt="activeGalleryImage.title" class="w-full max-h-[500px] object-cover" />
                <div class="p-6 bg-white text-center">
                    <h3 class="font-heading text-lg font-bold text-slate-900">{{ activeGalleryImage.title }}</h3>
                </div>
            </div>
        </div>

        <!-- ================= SECTION 7: KONTAK KAMI & MAP ================= -->
        <section id="kontak" class="py-16 bg-[#F4F8FC] border-t border-slate-200/60">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-8">
                <div class="wow animate__animated animate__fadeIn">
                    <h2 class="font-heading text-xl sm:text-2xl font-extrabold text-[#004AAD] uppercase tracking-wide">KONTAK KAMI</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <!-- Left Info List -->
                    <div class="lg:col-span-5 space-y-5 wow animate__animated animate__fadeInLeft">
                        <!-- Address -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm">
                                <div class="font-bold text-slate-900">Jl. Melati No. 10</div>
                                <div class="text-slate-600">Semarang, Jawa Tengah</div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900">
                                (024) 1234 5678
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm font-bold text-slate-900">
                                info@koperasikusumamulya.co.id
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-[#E7EEFF] text-[#004AAD] flex items-center justify-center flex-shrink-0 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="text-xs sm:text-sm">
                                <div class="font-bold text-slate-900">Senin - Jumat</div>
                                <div class="text-slate-600">08.00 - 16.00 WIB</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Real Google Maps Embed -->
                    <div class="lg:col-span-7 bg-white rounded-2xl overflow-hidden border border-slate-200 min-h-[360px] relative shadow-sm wow animate__animated animate__fadeInRight">
                        <!-- Real Interactive Google Maps Embed -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.84306769917!2d110.3470242273063!3d-6.993062325324687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x5027a76e356e4c0!2sSemarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                            class="w-full h-full min-h-[360px] border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Peta Lokasi Kantor Koperasi Kusuma Mulya Semarang"
                        ></iframe>

                        <!-- Overlay Floating Location Badge -->
                        <div class="absolute bottom-4 left-4 sm:left-6 bg-white p-3.5 rounded-xl shadow-md border border-slate-200 flex items-center gap-3 max-w-xs pointer-events-auto">
                            <div class="w-8 h-8 rounded-lg bg-[#004AAD] text-white flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="space-y-0.5 text-xs">
                                <div class="font-extrabold text-slate-900">Koperasi Kusuma Mulya</div>
                                <div class="text-[11px] text-slate-500 font-medium">Jl. Melati No. 10 Semarang, Jawa Tengah</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 8: FOOTER ================= -->
        <Footer />
    </div>
</template>

<style scoped>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-6px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 0.25s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>
