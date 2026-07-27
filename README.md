# 🏢 Koperasi Kusuma Mulya — Portal Corporate & Website Resmi

Website resmi **Koperasi Kusuma Mulya** (Koperasi Simpan Pinjam Semarang), dibangun dengan arsitektur modern **Laravel 13**, **Vue 3**, **Inertia.js** (Manual setup tanpa Laravel Breeze), dan **Tailwind CSS v4**.

---

## 🚀 Teknologi & Stack Utama

- **Backend Framework**: [Laravel 13](https://laravel.com)
- **Frontend Framework**: [Vue 3](https://vuejs.org) (Composition API with `<script setup>`)
- **Single Page App Engine**: [Inertia.js](https://inertiajs.com) (Manual Inertia 2.x setup, tanpa Breeze)
- **Styling & Design System**: [Tailwind CSS v4](https://tailwindcss.com), Corporate Financial Color Palette
- **Animasi & Interaktivitas**:
  - **ReactBits CountUp**: Komponen animasi angka berhitung 60 FPS ([CountUp.vue](file:///d:/laragon/www/Koperasi-Kusuma-Mulya/resources/js/Components/CountUp.vue))
  - **WOW.js & Animate.css**: Animasi *scroll reveal* presisi
- **Vector Icons**: 100% Vector SVG Icons (Tanpa stiker emoji)

---

## ✨ Fitur & Halaman Utama

### 1. Beranda Utama ([Welcome.vue](file:///d:/laragon/www/Koperasi-Kusuma-Mulya/resources/js/Pages/Welcome.vue))
- **Hero Banner**: Badge resmi KSP, headline interaktif, dan CTA gabung anggota.
- **Kartu Statistik Melayang**: 4 indikator statistik utama dengan animasi `<CountUp />`.
- **Profil Koperasi**: Gambaran umum visi gotong royong dan asas kekeluargaan.
- **Visi & Misi Strategis**: Landasan pelayanan dan 4 pilar komitmen.
- **Layanan Kami**: Simpanan Berjangka, Pinjaman Modal UMKM, Layanan Anggota, Kemitraan.
- **Berita Terbaru & Galeri**: Publikasi kabar terkini dan thumbnail dokumentasi kegiatan.
- **Kontak Kami & Google Maps**: Informasi kantor pusat dan peta lokasi Google Maps interaktif.

### 2. Galeri Kegiatan & Lightbox HD ([Galeri.vue](file:///d:/laragon/www/Koperasi-Kusuma-Mulya/resources/js/Pages/Galeri.vue))
- **Pencarian & Filter Kategori**: Filter instan (`RAT`, `Edukasi`, `Kemitraan`, `Sosial`) dan pencarian kata kunci.
- **Lightbox HD Screen Modal**: Fitur perbesar foto resolusi tinggi dengan navigasi keyboard (`ArrowLeft`, `ArrowRight`, `Esc`).
- **Video Showcase**: Pemutar modal video dokumentasi kegiatan tahunan.

### 3. Sub-Halaman Tentang Kami (`/tentang-kami/`)
- 📜 **Informasi Umum** (`/tentang-kami/informasi-umum`): Sejarah pendirian, pengesahan AHU Kemenkumham RI, dan Izin KSP Kemenkop UKM.
- 👔 **Struktur Manajemen** (`/tentang-kami/struktur-manajemen`): Foto realistis dan jajaran eksekutif Dewan Pengawas, Pengurus, & Manajer Operasional.
- 🎯 **Visi & Misi** (`/tentang-kami/visi-misi`): Cita-cita luhur dan 4 checklist misi strategis.

---

## 🎨 Palet Warna Resmi (Corporate Financial Palette)

| Elemen UI | Kode Warna Hex | Deskripsi |
| :--- | :--- | :--- |
| **Deep Navy** | `#001945` | Top Bar Header & Footer Utama |
| **Primary Corporate Blue** | `#004AAD` | Tombol Utama, Link Aktif, Icon Badges |
| **Dark Corporate Blue** | `#00357F` | Judul Headline & Hover States |
| **Surface Background** | `#F4F8FC` / `#F9F9FF` | Latar Belakang Halaman |
| **Container Tint** | `#E7EEFF` | Latar Badge & Icon Containers |

---

## 🛠️ Panduan Instalasi & Jalankan Lokal

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js >= 18 & npm

### Langkah-Langkah

1. **Clone repository**:
   ```bash
   git clone https://github.com/username/Koperasi-Kusuma-Mulya.git
   cd Koperasi-Kusuma-Mulya
   ```

2. **Install dependensi PHP**:
   ```bash
   composer install
   ```

3. **Install dependensi JavaScript**:
   ```bash
   npm install
   ```

4. **Konfigurasi Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Pastikan driver session diset ke file di `.env`:*
   ```env
   SESSION_DRIVER=file
   ```

5. **Jalankan Server Development**:
   ```bash
   # Jalankan server Laravel (Terminal 1)
   php artisan serve --port=8090

   # Jalankan Vite Dev Server (Terminal 2)
   npm run dev
   ```

6. **Akses Aplikasi di Browser**:
   ```
   http://127.0.0.1:8090/
   ```

---

## 📦 Build untuk Production

Untuk melakukan kompilasi bundel asset siap produksi:

```bash
npm run build
```

---

## 📁 Struktur Direktori Penting

```
Koperasi-Kusuma-Mulya/
├── app/
│   └── Http/Controllers/        # Controller Laravel
├── resources/
│   ├── css/
│   │   └── app.css              # Custom Tailwind CSS v4 & Corporate Rules
│   ├── js/
│   │   ├── Components/
│   │   │   ├── Navbar.vue       # Header Top Bar & Navigation Bar
│   │   │   ├── Footer.vue       # Footer Navigation
│   │   │   └── CountUp.vue      # ReactBits CountUp Component
│   │   └── Pages/
│   │       ├── Welcome.vue      # Landing Page Utama
│   │       ├── Galeri.vue       # Dedicated Gallery & Lightbox HD Page
│   │       └── TentangKami/
│   │           ├── InformasiUmum.vue
│   │           ├── StrukturManajemen.vue
│   │           └── VisiMisi.vue
├── routes/
│   └── web.php                  # Inertia.js Route Definitions
└── public/
    └── images/                  # Asset Foto Gedung, Tim & Galeri
```

---

## 📄 Lisensi

Hak Cipta © 2024 **Koperasi Kusuma Mulya**. Hak Cipta Dilindungi Undang-Undang.
