<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    activeMenu: {
        type: String,
        default: 'beranda',
    },
});

const mobileMenuOpen = ref(false);
const isTentangKamiOpen = ref(false);
</script>

<template>
    <!-- Top Header Bar -->
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
                <span class="flex items-center gap-1.5 hover:text-white transition-colors hidden md:inline-flex">
                    <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    info@koperasikusumamulya.co.id
                </span>
            </div>
            <div class="flex items-center gap-4 text-slate-300">
                <a href="#" class="hover:text-white transition-colors" title="Facebook">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition-colors" title="Instagram">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition-colors" title="YouTube">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Sticky Navbar -->
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
                <Link 
                    href="/" 
                    class="transition-colors py-1 relative"
                    :class="activeMenu === 'beranda' ? 'text-[#004AAD] font-bold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#004AAD] after:rounded-full' : 'hover:text-[#004AAD]'"
                >
                    Beranda
                </Link>

                <!-- Tentang Kami Dropdown Menu -->
                <div class="relative">
                    <button 
                        @click="isTentangKamiOpen = !isTentangKamiOpen" 
                        class="flex items-center gap-1 transition-colors py-1 focus:outline-none"
                        :class="['informasi-umum', 'struktur-manajemen', 'visi-misi'].includes(activeMenu) ? 'text-[#004AAD] font-bold' : 'hover:text-[#004AAD]'"
                    >
                        Tentang Kami
                        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': isTentangKamiOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div 
                        v-if="isTentangKamiOpen" 
                        class="absolute left-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2.5 z-50 animate-fadeIn"
                    >
                        <Link 
                            href="/tentang-kami/informasi-umum" 
                            @click="isTentangKamiOpen = false" 
                            class="block px-4 py-2.5 text-xs transition-colors"
                            :class="activeMenu === 'informasi-umum' ? 'font-bold text-[#004AAD] bg-blue-50' : 'font-medium text-slate-700 hover:bg-blue-50 hover:text-[#004AAD]'"
                        >
                            Informasi Umum
                        </Link>
                        <Link 
                            href="/tentang-kami/struktur-manajemen" 
                            @click="isTentangKamiOpen = false" 
                            class="block px-4 py-2.5 text-xs transition-colors"
                            :class="activeMenu === 'struktur-manajemen' ? 'font-bold text-[#004AAD] bg-blue-50' : 'font-medium text-slate-700 hover:bg-blue-50 hover:text-[#004AAD]'"
                        >
                            Struktur Manajemen
                        </Link>
                        <Link 
                            href="/tentang-kami/visi-misi" 
                            @click="isTentangKamiOpen = false" 
                            class="block px-4 py-2.5 text-xs transition-colors"
                            :class="activeMenu === 'visi-misi' ? 'font-bold text-[#004AAD] bg-blue-50' : 'font-medium text-slate-700 hover:bg-blue-50 hover:text-[#004AAD]'"
                        >
                            Visi & Misi
                        </Link>
                    </div>
                </div>

                <Link href="/#layanan" class="hover:text-[#004AAD] transition-colors py-1">Layanan</Link>
                <Link href="/#berita" class="hover:text-[#004AAD] transition-colors py-1">Berita</Link>
                <Link 
                    href="/galeri" 
                    class="transition-colors py-1 relative"
                    :class="activeMenu === 'galeri' ? 'text-[#004AAD] font-bold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-[#004AAD] after:rounded-full' : 'hover:text-[#004AAD]'"
                >
                    Galeri
                </Link>
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
        <div v-if="mobileMenuOpen" class="lg:hidden bg-white border-b border-slate-200 px-6 py-4 space-y-3 font-semibold text-sm animate-fadeIn">
            <Link href="/" class="block py-1" :class="activeMenu === 'beranda' ? 'text-[#004AAD] font-bold' : 'text-slate-700'">Beranda</Link>
            <div class="pl-2 border-l-2 border-slate-200 space-y-2 pt-1">
                <div class="text-xs font-bold text-slate-400 uppercase">Tentang Kami</div>
                <Link href="/tentang-kami/informasi-umum" class="block py-1" :class="activeMenu === 'informasi-umum' ? 'text-[#004AAD] font-bold' : 'text-slate-600'">Informasi Umum</Link>
                <Link href="/tentang-kami/struktur-manajemen" class="block py-1" :class="activeMenu === 'struktur-manajemen' ? 'text-[#004AAD] font-bold' : 'text-slate-600'">Struktur Manajemen</Link>
                <Link href="/tentang-kami/visi-misi" class="block py-1" :class="activeMenu === 'visi-misi' ? 'text-[#004AAD] font-bold' : 'text-slate-600'">Visi & Misi</Link>
            </div>
            <Link href="/#layanan" class="block text-slate-700 py-1">Layanan Kami</Link>
            <Link href="/#berita" class="block text-slate-700 py-1">Berita Terbaru</Link>
            <Link href="/galeri" class="block py-1" :class="activeMenu === 'galeri' ? 'text-[#004AAD] font-bold' : 'text-slate-700'">Galeri Kegiatan</Link>
            <Link href="/#kontak" class="block text-slate-700 py-1">Kontak Kami</Link>
            <div class="pt-2">
                <a href="#" class="w-full text-center inline-flex justify-center items-center gap-2 bg-[#004AAD] text-white px-5 py-2.5 rounded-full">
                    Login Member
                </a>
            </div>
        </div>
    </header>
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
