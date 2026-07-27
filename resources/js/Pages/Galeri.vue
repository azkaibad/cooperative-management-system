<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import WOW from 'wow.js';
import Navbar from '../Components/Navbar.vue';
import Footer from '../Components/Footer.vue';

defineProps({
    title: {
        type: String,
        default: 'Galeri Kegiatan - Koperasi Kusuma Mulya',
    },
});

// Category Filter State
const selectedCategory = ref('all');
const searchQuery = ref('');

// Lightbox Modal State
const isLightboxOpen = ref(false);
const currentIndex = ref(0);

// Video Modal State
const isVideoModalOpen = ref(false);
const activeVideo = ref(null);

const categories = [
    { id: 'all', label: 'Semua Kegiatan' },
    { id: 'rat', label: 'RAT & Kebijakan' },
    { id: 'edukasi', label: 'Edukasi & Pelatihan' },
    { id: 'kemitraan', label: 'Kemitraan & UMKM' },
    { id: 'sosial', label: 'Bakti Sosial' },
];

const galleryItems = [
    {
        id: 1,
        title: 'Penghargaan Koperasi Simpan Pinjam Terbaik 2024',
        category: 'rat',
        categoryLabel: 'RAT & Kebijakan',
        date: '15 Juli 2024',
        src: '/images/gallery_award.png',
        desc: 'Penyerahan piagam penghargaan emas atas pencapaian tata kelola keuangan terbaik dan transparansi laporan RAT 2024.'
    },
    {
        id: 2,
        title: 'Pelaksanaan Rapat Anggota Tahunan (RAT) 2024',
        category: 'rat',
        categoryLabel: 'RAT & Kebijakan',
        date: '20 Mei 2024',
        src: '/images/news_rat.png',
        desc: 'Sidang pleno tahunan pertanggungjawaban pengurus dan pembagian Sisa Hasil Usaha (SHU) kepada seluruh anggota koperasi.'
    },
    {
        id: 3,
        title: 'Edukasi & Workshop Pengelolaan Keuangan Anggota',
        category: 'edukasi',
        categoryLabel: 'Edukasi & Pelatihan',
        date: '10 Mei 2024',
        src: '/images/news_education.png',
        desc: 'Pelatihan literasi finansial, perencanaan modal usaha, dan pengelolaan investasi syariah bagi anggota pelaku UMKM.'
    },
    {
        id: 4,
        title: 'Penandatanganan Kemitraan Perbankan Strategis',
        category: 'kemitraan',
        categoryLabel: 'Kemitraan & UMKM',
        date: '02 Mei 2024',
        src: '/images/news_partnership.png',
        desc: 'Kerjasama resmi bersama bank BUMN untuk memfasilitasi transaksi digital, QRIS, dan pembiayaan produktif anggota.'
    },
    {
        id: 5,
        title: 'Bakti Sosial & Penyaluran Sembako Masyarakat',
        category: 'sosial',
        categoryLabel: 'Bakti Sosial',
        date: '28 April 2024',
        src: '/images/news_social.png',
        desc: 'Penyaluran bantuan 500 paket sembako dan santunan pendidikan anak yatim dalam rangka ulang tahun koperasi.'
    },
    {
        id: 6,
        title: 'Komitmen & Penandatanganan Anggota Baru Koperasi',
        category: 'rat',
        categoryLabel: 'RAT & Kebijakan',
        date: '18 April 2024',
        src: '/images/hands_cooperative.png',
        desc: 'Prosesi penerimaan dan penandatanganan akad keanggotaan baru Koperasi Kusuma Mulya secara simbolis.'
    },
    {
        id: 7,
        title: 'Gedung Kantor Pusat & Unit SIMPAN PINJAM Semarang',
        category: 'kemitraan',
        categoryLabel: 'Kemitraan & UMKM',
        date: '05 April 2024',
        src: '/images/building_koperasi.png',
        desc: 'Fasilitas pelayanan modern gedung kantor pusat Koperasi Kusuma Mulya yang melayani lebih dari 2.350+ anggota.'
    },
    {
        id: 8,
        title: 'Rapat Kerja Pengurus & Pengawas Koperasi 2024',
        category: 'rat',
        categoryLabel: 'RAT & Kebijakan',
        date: '12 Maret 2024',
        src: '/images/team/pengurus_1.png',
        desc: 'Rapat koordinasi strategi ekspansi layanan simpan pinjam dan penjaminan risiko kredit bagi anggota produktif.'
    }
];

const videos = [
    {
        id: 1,
        title: 'Video Kilas Balik RAT Koperasi Kusuma Mulya 2024',
        category: 'Video Highlights',
        image: '/images/news_rat.png',
        desc: 'Tayangan dokumentasi jalannya Rapat Anggota Tahunan 2024 dan laporan pertanggungjawaban pengurus.'
    },
    {
        id: 2,
        title: 'Profil & Layanan Unggulan Koperasi Kusuma Mulya',
        category: 'Profil Video',
        image: '/images/news_education.png',
        desc: 'Pengenalan fasilitas simpan pinjam, kemudahan keanggotaan, dan komitmen pelayanan transparan.'
    }
];

const filteredItems = computed(() => {
    return galleryItems.filter(item => {
        const matchesCategory = selectedCategory.value === 'all' || item.category === selectedCategory.value;
        const matchesSearch = item.title.toLowerCase().includes(searchQuery.value.toLowerCase()) || 
                              item.desc.toLowerCase().includes(searchQuery.value.toLowerCase());
        return matchesCategory && matchesSearch;
    });
});

const currentItem = computed(() => {
    if (!filteredItems.value || filteredItems.value.length === 0) return null;
    const safeIdx = Math.max(0, Math.min(currentIndex.value, filteredItems.value.length - 1));
    return filteredItems.value[safeIdx] || null;
});

const openLightbox = (index) => {
    currentIndex.value = index;
    isLightboxOpen.value = true;
};

const closeLightbox = () => {
    isLightboxOpen.value = false;
};

const nextPhoto = () => {
    if (filteredItems.value.length === 0) return;
    if (currentIndex.value < filteredItems.value.length - 1) {
        currentIndex.value++;
    } else {
        currentIndex.value = 0;
    }
};

const prevPhoto = () => {
    if (filteredItems.value.length === 0) return;
    if (currentIndex.value > 0) {
        currentIndex.value--;
    } else {
        currentIndex.value = filteredItems.value.length - 1;
    }
};

const openVideoModal = (video) => {
    activeVideo.value = video;
    isVideoModalOpen.value = true;
};

const closeVideoModal = () => {
    isVideoModalOpen.value = false;
    activeVideo.value = null;
};

const handleKeyDown = (e) => {
    if (!isLightboxOpen.value && !isVideoModalOpen.value) return;
    if (e.key === 'Escape') {
        closeLightbox();
        closeVideoModal();
    } else if (e.key === 'ArrowRight' && isLightboxOpen.value) {
        nextPhoto();
    } else if (e.key === 'ArrowLeft' && isLightboxOpen.value) {
        prevPhoto();
    }
};

onMounted(() => {
    if (typeof window !== 'undefined') {
        new WOW({ boxClass: 'wow', animateClass: 'animate__animated', offset: 60, mobile: true, live: false }).init();
        window.addEventListener('keydown', handleKeyDown);
    }
});

onUnmounted(() => {
    if (typeof window !== 'undefined') {
        window.removeEventListener('keydown', handleKeyDown);
    }
});
</script>

<template>
    <Head :title="title" />

    <div class="min-h-screen bg-[#F9F9FF] font-body text-[#111C2C] selection:bg-[#004AAD] selection:text-white">
        <!-- ================= NAVBAR ================= -->
        <Navbar activeMenu="galeri" />

        <!-- ================= HERO BANNER ================= -->
        <section class="bg-gradient-to-r from-[#001945] via-[#00357F] to-[#004AAD] text-white py-16 lg:py-24 relative overflow-hidden">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 relative z-10 text-center space-y-6 wow animate__animated animate__fadeInDown">
                <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-1.5 rounded-md text-xs font-bold text-blue-200 border border-white/20">
                    <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    DOKUMENTASI KOPERASI
                </div>
                <h1 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                    Galeri & Momen Kegiatan Koperasi
                </h1>
                <p class="text-slate-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                    Arsip foto dokumentasi resmi perjalanan Koperasi Kusuma Mulya dalam melayani anggota, menyelenggarakan RAT, kemitraan, serta pengabdian sosial.
                </p>

                <!-- Search Input Bar -->
                <div class="max-w-md mx-auto pt-2">
                    <div class="relative flex items-center">
                        <svg class="w-5 h-5 text-slate-400 absolute left-4 pointer-events-none z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input 
                            v-model="searchQuery" 
                            type="text" 
                            placeholder="Cari kegiatan, RAT, atau workshop..." 
                            class="w-full bg-white text-slate-800 placeholder-slate-400 text-xs sm:text-sm rounded-lg py-3.5 pl-12 pr-5 focus:outline-none focus:ring-2 focus:ring-[#004AAD] shadow-md transition-all"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= GALLERY SECTION WITH CATEGORY FILTERS ================= -->
        <section class="py-16 lg:py-20 bg-white">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-10">
                <!-- Category Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-3 wow animate__animated animate__fadeIn">
                    <button 
                        v-for="cat in categories" 
                        :key="cat.id"
                        @click="selectedCategory = cat.id; currentIndex = 0;"
                        class="px-5 py-2.5 rounded-md text-xs sm:text-sm font-extrabold transition-colors duration-200"
                        :class="selectedCategory === cat.id ? 'bg-[#004AAD] text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200 hover:text-slate-900'"
                    >
                        {{ cat.label }}
                    </button>
                </div>

                <!-- Empty Search Result State -->
                <div v-if="filteredItems.length === 0" class="py-16 text-center space-y-3">
                    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <h3 class="font-heading font-extrabold text-lg text-slate-800">Tidak Ada Momen Ditemukan</h3>
                    <p class="text-slate-500 text-xs sm:text-sm">Coba gunakan kata kunci pencarian yang lain.</p>
                </div>

                <!-- Photo Grid -->
                <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="(item, idx) in filteredItems" 
                        :key="item.id"
                        @click="openLightbox(idx)"
                        class="corporate-card overflow-hidden group cursor-pointer flex flex-col justify-between wow animate__animated animate__fadeInUp"
                        :data-wow-delay="`${(idx % 4) * 0.1}s`"
                    >
                        <div>
                            <!-- Photo Image Container -->
                            <div class="relative overflow-hidden h-52 bg-slate-100">
                                <img 
                                    :src="item.src" 
                                    :alt="item.title" 
                                    class="w-full h-full object-cover"
                                />
                                <div class="absolute inset-0 bg-slate-950/60 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex items-end p-4">
                                    <span class="text-white text-xs font-bold flex items-center gap-1.5 bg-[#004AAD] px-3 py-1.5 rounded-md shadow-sm">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                        Perbesar Foto
                                    </span>
                                </div>
                                <div class="absolute top-3 left-3 bg-[#004AAD] text-white text-[10px] font-extrabold px-3 py-1 rounded-md shadow-sm">
                                    {{ item.categoryLabel }}
                                </div>
                            </div>

                            <!-- Photo Text Info -->
                            <div class="p-5 space-y-2.5">
                                <div class="text-[11px] font-bold text-slate-400 flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    {{ item.date }}
                                </div>
                                <h3 class="font-heading font-extrabold text-sm sm:text-base text-slate-900 leading-snug group-hover:text-[#004AAD] transition-colors">
                                    {{ item.title }}
                                </h3>
                                <p class="text-slate-500 text-xs leading-relaxed h-10 overflow-hidden">
                                    {{ item.desc }}
                                </p>
                            </div>
                        </div>

                        <!-- Prominent "Lihat Rincian Foto" Button -->
                        <div class="px-5 py-3.5 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-xs sm:text-sm font-extrabold text-[#004AAD] group-hover:bg-[#004AAD] group-hover:text-white transition-colors duration-200">
                            <span>Lihat Rincian Foto</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= VIDEO SHOWCASE SECTION ================= -->
        <section class="py-16 bg-[#F9F9FF] border-t border-slate-200">
            <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12 space-y-10">
                <div class="text-center max-w-2xl mx-auto space-y-2 wow animate__animated animate__fadeInDown">
                    <div class="text-[#004AAD] font-extrabold text-xs tracking-wider uppercase">LIPUTAN VIDEO</div>
                    <h2 class="font-heading text-2xl sm:text-3xl font-extrabold text-[#111C2C]">
                        Dokumentasi Video Kegiatan
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm">
                        Liputan singkat seputar kegiatan tahunan dan kiprah Koperasi Kusuma Mulya.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Video Card 1 -->
                    <div 
                        v-for="v in videos" 
                        :key="v.id"
                        @click="openVideoModal(v)"
                        class="corporate-card overflow-hidden group cursor-pointer wow animate__animated animate__fadeInUp"
                    >
                        <div class="relative h-64 bg-slate-900 overflow-hidden">
                            <img :src="v.image" :alt="v.title" class="w-full h-full object-cover opacity-80" />
                            <div class="absolute inset-0 bg-slate-950/40 flex items-center justify-center">
                                <div class="w-16 h-16 rounded-full bg-[#004AAD] text-white flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-2">
                            <span class="bg-[#E7EEFF] text-[#004AAD] text-[10px] font-extrabold px-3 py-1 rounded-md uppercase">{{ v.category }}</span>
                            <h3 class="font-heading font-extrabold text-base text-slate-900 group-hover:text-[#004AAD] transition-colors">{{ v.title }}</h3>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ v.desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= LIGHTBOX MODAL WITH PREV/NEXT NAVIGATION ================= -->
        <div 
            v-if="isLightboxOpen && currentItem" 
            class="fixed inset-0 z-50 bg-black/85 flex items-center justify-center p-4 sm:p-8 animate-fadeIn"
            @click.self="closeLightbox"
        >
            <div class="bg-white rounded-2xl overflow-hidden max-w-4xl w-full shadow-2xl relative flex flex-col max-h-[90vh]">
                <!-- Close Button -->
                <button 
                    @click="closeLightbox" 
                    class="absolute top-4 right-4 bg-slate-900/70 hover:bg-slate-900 text-white rounded-full w-9 h-9 flex items-center justify-center transition-colors z-20"
                >
                    ✕
                </button>

                <!-- Previous Photo Button -->
                <button 
                    @click="prevPhoto" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-slate-900/70 hover:bg-slate-900 text-white rounded-full w-10 h-10 flex items-center justify-center transition-colors z-20"
                    title="Foto Sebelumnya (Kiri)"
                >
                    &larr;
                </button>

                <!-- Next Photo Button -->
                <button 
                    @click="nextPhoto" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-slate-900/70 hover:bg-slate-900 text-white rounded-full w-10 h-10 flex items-center justify-center transition-colors z-20"
                    title="Foto Berikutnya (Kanan)"
                >
                    &rarr;
                </button>

                <!-- Modal Image Container -->
                <div class="bg-slate-950 flex items-center justify-center overflow-hidden h-[400px] sm:h-[480px]">
                    <img 
                        :src="currentItem.src" 
                        :alt="currentItem.title" 
                        class="max-w-full max-h-full object-contain" 
                    />
                </div>

                <!-- Modal Image Description -->
                <div class="p-6 bg-white space-y-2 border-t border-slate-100">
                    <div class="flex items-center justify-between text-xs">
                        <span class="bg-[#E7EEFF] text-[#004AAD] font-extrabold px-3 py-1 rounded-md uppercase">
                            {{ currentItem.categoryLabel }}
                        </span>
                        <span class="text-slate-400 font-bold">
                            Foto {{ currentIndex + 1 }} dari {{ filteredItems.length }}
                        </span>
                    </div>
                    <h3 class="font-heading text-lg font-extrabold text-slate-900">
                        {{ currentItem.title }}
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        {{ currentItem.desc }}
                    </p>
                </div>
            </div>
        </div>

        <!-- ================= VIDEO MODAL ================= -->
        <div 
            v-if="isVideoModalOpen && activeVideo" 
            class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4 sm:p-8 animate-fadeIn"
            @click.self="closeVideoModal"
        >
            <div class="bg-slate-900 rounded-2xl overflow-hidden max-w-3xl w-full shadow-2xl relative border border-slate-800">
                <button 
                    @click="closeVideoModal" 
                    class="absolute top-4 right-4 bg-white/20 hover:bg-white/40 text-white rounded-full w-9 h-9 flex items-center justify-center transition-colors z-20"
                >
                    ✕
                </button>
                <div class="relative h-80 sm:h-[420px] bg-slate-950 flex items-center justify-center">
                    <img :src="activeVideo.image" :alt="activeVideo.title" class="w-full h-full object-cover opacity-50" />
                    <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center space-y-4">
                        <div class="w-20 h-20 rounded-full bg-[#004AAD] text-white flex items-center justify-center shadow-2xl">
                            <svg class="w-10 h-10 ml-1.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <h3 class="font-heading text-lg font-extrabold text-white max-w-md">{{ activeVideo.title }}</h3>
                        <p class="text-slate-300 text-xs max-w-sm">{{ activeVideo.desc }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= FOOTER ================= -->
        <Footer />
    </div>
</template>
