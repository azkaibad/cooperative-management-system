# 🏢 Koperasi Kusuma Mulya — Portal Corporate & Website Resmi

Website resmi **Koperasi Kusuma Mulya** (Koperasi Simpan Pinjam Semarang), dibangun dengan arsitektur modern **Laravel 13**, **Vue 3**, **Inertia.js**, dan **Tailwind CSS v4**.

---

## 🚀 Teknologi & Stack Utama

- **Backend Framework**: [Laravel 13](https://laravel.com)
- **Frontend Framework**: [Vue 3](https://vuejs.org) (Composition API with `<script setup>`)
- **Single Page App Engine**: [Inertia.js](https://inertiajs.com) (Manual Inertia 2.x setup, tanpa Breeze)
- **Styling & Design System**: [Tailwind CSS v4](https://tailwindcss.com), Corporate Financial Color Palette

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
   git clone https://github.com/azkaibad/cooperative-management-system.git
   cd cooperative-management-system
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
cooperative-management-system/
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
