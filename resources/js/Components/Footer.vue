<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer id="hubungi-kami" class="bg-[#001945] text-slate-300 pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-[1380px] mx-auto px-4 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-700/60">
                <!-- Col 1: Brand & Socials -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#004AAD] text-white flex items-center justify-center font-bold shadow-md shadow-blue-500/20">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14.5h-2v-4.5H8.5V10H11V7.5h2V10h2.5v2H13v4.5z"/>
                                <path d="M12 4a8 8 0 100 16 8 8 0 000-16zm-1 5a1 1 0 012 0v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H8a1 1 0 110-2h3V9z"/>
                            </svg>
                        </div>
                        <span class="font-heading text-lg font-bold text-white tracking-wide">
                            KOPERASI KUSUMA MULYA
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        Koperasi Kusuma Mulya berkomitmen untuk memberikan layanan terbaik bagi anggota demi kesejahteraan bersama secara transparan, amanah, dan berkelanjutan.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-800 text-slate-300 hover:bg-[#004AAD] hover:text-white flex items-center justify-center transition-all duration-300" title="Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-800 text-slate-300 hover:bg-[#004AAD] hover:text-white flex items-center justify-center transition-all duration-300" title="Instagram">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-800 text-slate-300 hover:bg-[#004AAD] hover:text-white flex items-center justify-center transition-all duration-300" title="YouTube">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Menu Nav -->
                <div class="space-y-3">
                    <div class="text-sm font-bold text-white tracking-wide">Menu Navigasi</div>
                    <ul class="space-y-2 text-xs">
                        <li><Link href="/" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Beranda</Link></li>
                        <li><Link href="/tentang-kami/informasi-umum" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Informasi Umum</Link></li>
                        <li><Link href="/tentang-kami/struktur-manajemen" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Struktur Manajemen</Link></li>
                        <li><Link href="/tentang-kami/visi-misi" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Visi & Misi</Link></li>
                    </ul>
                </div>

                <!-- Col 3: Layanan List -->
                <div class="space-y-3">
                    <div class="text-sm font-bold text-white tracking-wide">Layanan Koperasi</div>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><Link href="/#layanan" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Simpanan Berjangka</Link></li>
                        <li><Link href="/#layanan" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Pinjaman Multiguna</Link></li>
                        <li><Link href="/#layanan" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Layanan Keanggotaan</Link></li>
                        <li><Link href="/#layanan" class="hover:text-white transition-colors flex items-center gap-1.5"><span class="text-blue-400">›</span> Kemitraan UMKM</Link></li>
                    </ul>
                </div>

                <!-- Col 4: Hubungi Kami -->
                <div class="space-y-3">
                    <div class="text-sm font-bold text-white tracking-wide">Hubungi Kami</div>
                    <div class="space-y-2.5 text-xs text-slate-400">
                        <div class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Jl. Melati No. 10 Semarang, Jawa Tengah</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>(024) 1234 5678</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>info@koperasikusumamulya.co.id</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Senin - Jumat | 08.00 - 16.00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div>© 2024 Koperasi Kusuma Mulya. All Rights Reserved.</div>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-slate-300 transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-slate-300 transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
</template>
