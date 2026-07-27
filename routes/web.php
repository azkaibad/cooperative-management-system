<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'title' => 'Koperasi Kusuma Mulya',
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/tentang-kami', function () {
    return redirect('/tentang-kami/informasi-umum');
});

Route::get('/tentang-kami/informasi-umum', function () {
    return Inertia::render('TentangKami/InformasiUmum', [
        'title' => 'Informasi Umum - Koperasi Kusuma Mulya',
    ]);
});

Route::get('/tentang-kami/struktur-manajemen', function () {
    return Inertia::render('TentangKami/StrukturManajemen', [
        'title' => 'Struktur Manajemen - Koperasi Kusuma Mulya',
    ]);
});

Route::get('/tentang-kami/visi-misi', function () {
    return Inertia::render('TentangKami/VisiMisi', [
        'title' => 'Visi & Misi - Koperasi Kusuma Mulya',
    ]);
});

Route::get('/galeri', function () {
    return Inertia::render('Galeri', [
        'title' => 'Galeri Kegiatan - Koperasi Kusuma Mulya',
    ]);
});
