<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INXDVI - Solusi Bisnis Digital</title>
    <link rel="icon" type="image/png" href="/images/logo.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
                    },
                    colors: {
                        tech: {
                            bg: '#09090b',
                            card: '#18181b',
                            border: 'rgba(255, 255, 255, 0.08)',
                            primary: '#4f46e5',
                            primaryHover: '#4338ca'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --tech-bg: #09090b;
        }

        body {
            background-color: var(--tech-bg);
            color: #ffffff;
            overflow-x: hidden;
        }



        /* Custom Spotlight Card */
        .spotlight-card {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            background: rgba(24, 24, 27, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
        }

        .spotlight-card:hover {
            border-color: rgba(79, 70, 229, 0.4);
            transform: translateY(-4px);
            box-shadow: 0 12px 30px -10px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(79, 70, 229, 0.2);
        }

        /* Cursor-responsive spotlight glow */
        .spotlight-card::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            pointer-events: none;
            z-index: 2;
            transition: opacity 0.5s ease;
            background: radial-gradient(400px circle at var(--mouse-x) var(--mouse-y), rgba(79, 70, 229, 0.06), transparent 50%);
        }

        .spotlight-card:hover::before {
            opacity: 1;
        }

        /* Glass Panel Navigation */
        .glass-panel {
            backdrop-filter: blur(16px);
            background: rgba(9, 9, 11, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-panel.scrolled {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            background: rgba(9, 9, 11, 0.95);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.3);
        }

        /* Text Gradient Accent (refined to not look overly flashy) */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(135deg, #ffffff 30%, #a5b4fc 100%);
        }

        /* Scroll-Driven Reveals with scale and blur */
        .reveal {
            opacity: 0;
            transform: translateY(24px) scale(0.98);
            filter: blur(4px);
            transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1),
                transform 1.2s cubic-bezier(0.16, 1, 0.3, 1),
                filter 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.reveal-active {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        .reveal-delay-100 {
            transition-delay: 100ms;
        }

        .reveal-delay-200 {
            transition-delay: 200ms;
        }

        .reveal-delay-300 {
            transition-delay: 300ms;
        }

        .reveal-delay-400 {
            transition-delay: 400ms;
        }

        /* Button Shimmer */
        .shimmer-btn {
            position: relative;
            overflow: hidden;
        }

        .shimmer-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 25%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.15), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
        }

        .shimmer-btn:hover::after {
            left: 125%;
            transition: 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Fullscreen fixed particle background */
        #home-particle-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 0;
            opacity: 0.65;
        }
    </style>
</head>

<body class="antialiased selection:bg-indigo-500/30 selection:text-indigo-200">

    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress"
        class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 z-[100] transition-all duration-75"
        style="width: 0%;"></div>

    <!-- Particle Background Canvas -->
    <canvas id="home-particle-canvas"></canvas>

    <!-- Mouse Follow Ambient Glow -->
    <div id="ambient-glow"
        class="fixed pointer-events-none w-[600px] h-[600px] rounded-full bg-indigo-500/3 opacity-30 blur-[150px] z-0 -translate-x-1/2 -translate-y-1/2 transition-all duration-700 ease-out"
        style="left: -1000px; top: -1000px;"></div>

    <!-- Glowing Background Accent -->
    <div
        class="fixed top-[-20%] left-[20%] w-[600px] h-[600px] bg-indigo-500/5 rounded-full filter blur-[150px] pointer-events-none z-0">
    </div>

    <!-- Header Navigation -->
    <nav id="navbar" class="fixed w-full z-50 glass-panel py-4 md:py-6">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 z-50 text-decoration-none">
                <img src="/images/logo.png" alt="INXDVI Logo"
                    class="h-8 md:h-9 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-2 bg-white/5 p-1 rounded-full border border-white/5">
                <a href="#masalah"
                    class="px-4 py-2 text-xs font-semibold text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_problem">Masalah</a>
                <a href="#layanan"
                    class="px-4 py-2 text-xs font-semibold text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="px-4 py-2 text-xs font-semibold text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="#portfolio"
                    class="px-4 py-2 text-xs font-semibold text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_portfolio">Portfolio</a>
            </div>

            <!-- Custom Controls & Call to Action -->
            <div class="flex items-center gap-3 z-50">
                <button id="lang-toggle"
                    class="h-9 px-3 rounded-full bg-white/5 border border-white/10 flex items-center gap-2 hover:bg-white/10 transition-all cursor-pointer">
                    <span id="lang-flag" class="text-sm">🇮🇩</span>
                    <span id="lang-text" class="text-xs font-bold font-mono text-white">ID</span>
                </button>

                <a href="https://wa.me/628123456789"
                    class="hidden md:flex items-center gap-2 px-5 py-2.5 bg-white text-black text-xs font-bold rounded-lg hover:bg-gray-100 transition-all hover:scale-[1.02] shadow-lg">
                    <span data-i18n="btn_contact">Konsultasi Gratis</span>
                </a>

                <button id="mobile-menu-btn"
                    class="md:hidden w-9 h-9 flex items-center justify-center text-white text-lg focus:outline-none hover:text-indigo-400 transition bg-white/5 rounded-lg border border-white/10">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-zinc-950/98 backdrop-blur-xl border-b border-white/10 shadow-2xl transition-all z-40">
            <div class="p-4 flex flex-col gap-2">
                <a href="#masalah"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors"
                    data-i18n="nav_problem">Masalah Anda</a>
                <a href="#layanan"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="https://wa.me/628123456789"
                    class="block w-full py-3 bg-indigo-600 text-white font-bold rounded-lg text-center hover:bg-indigo-500 transition-colors shadow-lg"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative z-10 pt-32 md:pt-48 pb-20 md:pb-28 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 md:gap-16 items-center">

            <!-- Left Info Block -->
            <div class="text-left reveal">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-300 text-[10px] md:text-xs font-mono mb-6 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    <span data-i18n="hero_badge">BISNIS JADI AUTOPILOT</span>
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight text-white"
                    data-i18n="hero_title">
                    Bisnis Jalan Otomatis <br> <span class="text-gradient">Omzet Naik Drastis</span>
                </h1>

                <p class="text-base md:text-lg text-zinc-400 max-w-xl mb-10 font-light leading-relaxed"
                    data-i18n="hero_desc">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda
                    tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/628123456789"
                        class="shimmer-btn px-8 py-4 bg-indigo-600 hover:bg-indigo-700 rounded-xl w-full sm:w-auto text-center cursor-pointer text-white font-bold tracking-wide transition-all shadow-lg hover:scale-[1.01] hover:shadow-indigo-500/20">
                        <span data-i18n="btn_start">Konsultasi via WA</span> <i
                            class="fa-brands fa-whatsapp text-lg ml-2"></i>
                    </a>

                    <a href="#portfolio"
                        class="px-8 py-4 rounded-xl border border-white/10 hover:bg-white/5 text-gray-300 hover:text-white transition-all font-mono text-xs flex items-center justify-center gap-3 w-full sm:w-auto">
                        <span data-i18n="btn_portfolio">LIHAT HASIL KERJA</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Panel (Dynamic 3D Mockup) -->
            <div class="relative perspective-[2000px] hidden md:block reveal reveal-delay-200">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] h-[65%] bg-indigo-600/5 blur-[120px] rounded-full pointer-events-none">
                </div>
                <div id="hero-mockup"
                    class="relative bg-zinc-950 border border-white/10 rounded-2xl p-2 shadow-2xl transition-all duration-300 ease-out group cursor-pointer"
                    style="transform: rotateY(-8deg) rotateX(4deg);">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent z-10 pointer-events-none rounded-2xl">
                    </div>
                    <div
                        class="flex items-center justify-between px-4 py-3 border-b border-white/5 bg-zinc-900 rounded-t-xl">
                        <div class="flex gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                        </div>
                        <div class="text-[10px] text-gray-500 font-mono">Laporan_Omzet.tsx</div>
                        <div class="w-10"></div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop"
                        alt="Dashboard"
                        class="w-full h-auto rounded-b-xl opacity-90 transition-all group-hover:scale-[1.01]">

                    <div
                        class="absolute -left-6 bottom-10 bg-zinc-900/90 backdrop-blur-md border border-emerald-500/20 p-4 rounded-xl shadow-2xl transition-all group-hover:scale-105 duration-300">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-9 h-9 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </div>
                            <div>
                                <div class="text-[9px] text-gray-400 uppercase font-mono tracking-wider">Profit Bulan
                                    Ini</div>
                                <div class="text-sm font-bold text-white">+250% Naik</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Pain Points (Masalah) -->
    <section id="masalah" class="py-20 relative z-10 bg-white/5 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="text-red-400 font-mono text-xs tracking-widest uppercase mb-3 block"
                    data-i18n="sec_prob_sub">/// KELUHAN UMUM</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6" data-i18n="sec_prob_title">Apakah Bisnis
                    Anda <br> Mengalami <span class="text-red-400">Masalah Ini?</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    class="p-8 rounded-2xl bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3" data-i18n="prob_1_title">Uang & Stok Selisih</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="prob_1_desc">Tiap tutup toko uang di
                        laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3" data-i18n="prob_2_title">Pusing Rekap Manual</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="prob_2_desc">Akhir bulan lembur ngitung
                        nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-store-slash"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3" data-i18n="prob_3_title">Kalah Sama Tetangga</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="prob_3_desc">Toko sebelah sudah bisa
                        pesan online dan ada di Google Maps, toko Anda masih nunggu bola.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services (Layanan) -->
    <section id="layanan" class="py-24 relative z-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center reveal">
                <span class="text-indigo-400 font-mono text-xs tracking-widest uppercase mb-3 block"
                    data-i18n="sec_service_sub">/// SOLUSI KAMI</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6" data-i18n="sec_service_title">Solusi
                    Praktis <span class="text-gradient">Tanpa Ribet</span></h2>
                <p class="text-zinc-400 max-w-xl mx-auto text-sm md:text-base leading-relaxed"
                    data-i18n="sec_service_desc">Kami sediakan "alat digital" biar Anda bisa tidur nyenyak sementara
                    sistem bekerja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_mobile_title">Aplikasi Kasir
                        & Stok</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_mobile_desc">Pantau penjualan dan
                        stok barang langsung dari HP (Real-time).</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_web_title">Website Pencari
                        Pelanggan</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_web_desc">Bikin toko/jasa Anda
                        muncul paling atas di Google (SEO) saat orang mencari.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_vector_title">Desain Logo &
                        Branding</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_vector_desc">Bikin brand terlihat
                        mahal. Desain logo, banner, dan menu yang menggugah selera.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sosmed_spec_title">Jasa
                        Kelola Sosmed</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_sosmed_spec_desc">Kami urus IG &
                        TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sec_title">Keamanan Data
                    </h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_sec_desc">Data keuangan Anda aman,
                        tidak akan bocor ke kompetitor.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sosmed_title">Bot Balas Chat
                    </h3>
                    <p class="text-zinc-400 text-sm leading-relaxed" data-i18n="srv_sosmed_desc">Sistem yang menjawab
                        pertanyaan pelanggan 24 jam nonstop.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ROI (Hemat) -->
    <section id="hemat" class="py-24 relative z-10 bg-zinc-950/60 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="reveal">
                    <span class="text-indigo-400 font-mono text-xs uppercase mb-3 block" data-i18n="sec_roi_sub">///
                        HITUNG-HITUNGAN CUAN</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6" data-i18n="sec_roi_title">Lebih
                        Murah Dari <br> <span class="text-gradient">Gaji Karyawan</span></h2>
                    <p class="text-zinc-400 text-base md:text-lg mb-8 leading-relaxed" data-i18n="sec_roi_desc">
                        Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada
                        drama izin sakit, dan kerja 24 jam.
                    </p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-400"></i> <span data-i18n="roi_1">Sistem bekerja 24
                                jam nonstop</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-400"></i> <span data-i18n="roi_2">Akurasi data 100%
                                (Anti Salah Hitung)</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-400"></i> <span data-i18n="roi_3">Investasi sekali,
                                untung selamanya</span>
                        </li>
                    </ul>

                    <!-- Interactive ROI Sliders -->
                    <div class="bg-zinc-900/50 border border-white/5 rounded-2xl p-6 space-y-6">
                        <h4
                            class="text-white font-bold text-sm uppercase tracking-wider font-mono text-indigo-400 flex items-center gap-2">
                            <i class="fa-solid fa-calculator"></i> <span data-i18n="calc_title">Kalkulator ROI
                                Interaktif</span>
                        </h4>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-300">
                                <span data-i18n="calc_staff_label">Jumlah Karyawan Admin</span>
                                <span class="font-bold text-white font-mono"><span id="calc-staff-val">2</span> <span
                                        data-i18n="calc_staff_unit">Orang</span></span>
                            </div>
                            <input type="range" id="calc-staff" min="1" max="10" value="2"
                                class="w-full h-1.5 bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-indigo-500">
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-300">
                                <span data-i18n="calc_salary_label">Gaji Per Karyawan (Bulanan)</span>
                                <span class="font-bold text-white font-mono">Rp <span id="calc-salary-val">4</span>
                                    <span data-i18n="roi_unit">Juta</span></span>
                            </div>
                            <input type="range" id="calc-salary" min="2" max="10" value="4"
                                class="w-full h-1.5 bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-indigo-500">
                        </div>
                    </div>
                </div>

                <!-- ROI Cards with Reactive Counter values -->
                <div class="relative reveal reveal-delay-200">
                    <div class="bg-zinc-900 border border-white/10 rounded-2xl p-8 relative overflow-hidden">
                        <div class="grid grid-cols-2 gap-6 text-center relative z-10">

                            <div class="p-6 bg-red-500/5 rounded-xl border border-red-500/10">
                                <div class="text-xs text-red-400 mb-2 font-mono uppercase tracking-wider"
                                    data-i18n="card_manual">Cara Manual</div>
                                <div class="text-xl md:text-2xl font-extrabold text-white mb-2">Rp <span
                                        id="calc-manual-total" class="font-mono">96</span> <span
                                        data-i18n="roi_unit">Juta</span></div>
                                <div class="text-[10px] md:text-xs text-zinc-400 leading-normal"
                                    data-i18n="card_desc_manual">Gaji Admin UMR setahun</div>
                            </div>

                            <div
                                class="p-6 bg-indigo-500/5 rounded-xl border border-indigo-500/20 scale-105 shadow-2xl bg-zinc-950">
                                <div class="text-xs text-indigo-400 mb-2 font-mono uppercase tracking-wider"
                                    data-i18n="card_tech">Pakai Sistem</div>
                                <div class="text-xl md:text-2xl font-extrabold text-white mb-2">Rp <span
                                        id="calc-system-total" class="font-mono">5</span> <span
                                        data-i18n="roi_unit">Juta</span></div>
                                <div class="text-[10px] md:text-xs text-zinc-400 leading-normal"
                                    data-i18n="card_desc_tech">Investasi Awal (Sekali Bayar)</div>
                            </div>

                        </div>
                        <div class="mt-8 text-center border-t border-white/10 pt-6">
                            <p class="text-zinc-400 text-sm mb-2" data-i18n="roi_summary">Anda Menghemat Uang:</p>
                            <p class="text-3xl font-black text-indigo-400">Rp <span id="calc-saved-total"
                                    class="font-mono">91</span> <span data-i18n="roi_unit">Juta</span>++</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Client Trust Message -->
    <section class="py-20 relative z-10 px-6">
        <div class="max-w-4xl mx-auto bg-zinc-900 border border-white/10 rounded-2xl p-8 md:p-14 text-center reveal">
            <div
                class="w-14 h-14 bg-white/5 rounded-full flex items-center justify-center text-2xl mx-auto mb-6 text-indigo-400">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-4" data-i18n="trust_title">"Saya Gaptek, Takut
                Gak Bisa Pakai"</h2>
            <p class="text-zinc-400 text-base md:text-lg mb-10 leading-relaxed font-light" data-i18n="trust_desc">
                Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan
                sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.
            </p>
            <div class="flex flex-wrap justify-center gap-3 text-[10px] md:text-xs font-mono text-indigo-300">
                <span class="px-4 py-1.5 bg-indigo-500/5 rounded-full border border-indigo-500/20"><i
                        class="fa-solid fa-check mr-1.5"></i> GRATIS TRAINING</span>
                <span class="px-4 py-1.5 bg-indigo-500/5 rounded-full border border-indigo-500/20"><i
                        class="fa-solid fa-check mr-1.5"></i> GARANSI ERROR</span>
                <span class="px-4 py-1.5 bg-indigo-500/5 rounded-full border border-indigo-500/20"><i
                        class="fa-solid fa-check mr-1.5"></i> DIBIMBING SAMPAI BISA</span>
            </div>
        </div>
    </section>

    <!-- Portfolio (Hasil Kerja) -->
    <section id="portfolio" class="py-20 px-6 relative z-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-indigo-400 font-mono text-xs tracking-widest uppercase mb-2 block"
                        data-i18n="sec_port_sub">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white" data-i18n="sec_port_title">Portfolio
                        <span class="text-gradient">Kami</span>
                    </h2>
                </div>
                <a href="#"
                    class="text-xs font-mono text-zinc-400 hover:text-white flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_see_all">LIHAT SEMUA</span> <i
                        class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                <div class="spotlight-card rounded-2xl overflow-hidden group h-72 relative reveal reveal-delay-100">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1974&auto=format&fit=crop"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="px-2 py-1 bg-indigo-500/10 border border-indigo-500/30 rounded text-[9px] text-indigo-300 font-mono mb-2 inline-block">FINTECH</span>
                        <h3 class="text-lg font-bold text-white">E-Wallet App</h3>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group h-72 relative reveal reveal-delay-200">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="px-2 py-1 bg-indigo-500/10 border border-indigo-500/30 rounded text-[9px] text-indigo-300 font-mono mb-2 inline-block">COMMERCE</span>
                        <h3 class="text-lg font-bold text-white">Shopify Mobile</h3>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group h-72 relative reveal reveal-delay-300">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span
                            class="px-2 py-1 bg-indigo-500/10 border border-indigo-500/30 rounded text-[9px] text-indigo-300 font-mono mb-2 inline-block">SAAS</span>
                        <h3 class="text-lg font-bold text-white">Team Dashboard</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Workflow (Alur Kerja) -->
    <section id="proses" class="py-20 relative z-10 border-y border-white/5 bg-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="mb-16 reveal">
                <span class="text-indigo-400 font-mono text-xs tracking-widest uppercase mb-3 block"
                    data-i18n="sec_workflow_sub">/// ALUR KERJA</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white" data-i18n="sec_workflow_title">Proses Gampang
                    <span class="text-gradient">Anti Ribet</span>
                </h2>
            </div>

            <div class="relative">
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-white/5"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">

                    <div class="flex flex-col items-center group reveal reveal-delay-100">
                        <div
                            class="w-20 h-20 bg-zinc-950 border border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300">
                            <i class="fa-regular fa-comments text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-white mb-2" data-i18n="step_1_title">1. Curhat Dulu</h3>
                        <p class="text-zinc-400 text-xs px-4 leading-relaxed" data-i18n="step_1_desc">Ceritakan masalah
                            bisnis Anda, kami dengarkan dan beri solusi.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-200">
                        <div
                            class="w-20 h-20 bg-zinc-950 border border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300">
                            <i class="fa-solid fa-pen-ruler text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-white mb-2" data-i18n="step_2_title">2. Kami Buatkan</h3>
                        <p class="text-zinc-400 text-xs px-4 leading-relaxed" data-i18n="step_2_desc">Tim kami mulai
                            merancang sistem sesuai kebutuhan Anda.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-300">
                        <div
                            class="w-20 h-20 bg-zinc-950 border border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300">
                            <i class="fa-solid fa-code text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-white mb-2" data-i18n="step_3_title">3. Pengerjaan</h3>
                        <p class="text-zinc-400 text-xs px-4 leading-relaxed" data-i18n="step_3_desc">Proses coding dan
                            pembuatan aplikasi oleh ahli kami.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-400">
                        <div
                            class="w-20 h-20 bg-zinc-950 border border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300">
                            <i class="fa-solid fa-rocket text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-white mb-2" data-i18n="step_4_title">4. Training & Jadi</h3>
                        <p class="text-zinc-400 text-xs px-4 leading-relaxed" data-i18n="step_4_desc">Kami ajari cara
                            pakainya sampai Anda dan staf mahir.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimoni" class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-16 text-center reveal"
                data-i18n="sec_client_title">Kata Klien <span class="italic text-indigo-400">Kami</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    class="bg-zinc-900/60 border border-white/5 hover:border-indigo-500/20 p-8 rounded-2xl transition-all duration-300 reveal reveal-delay-100">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/20">
                        <div>
                            <div class="text-white font-bold text-sm">Budi Santoso</div>
                            <div class="text-indigo-400 text-xs font-mono">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-zinc-400 text-sm italic leading-relaxed">"Dulu pusing rekap nota, sering ribut sama
                        karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis."</p>
                </div>

                <div
                    class="bg-zinc-900 border border-white/10 hover:border-indigo-500/30 p-8 rounded-2xl transition-all duration-300 md:-translate-y-4 reveal reveal-delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/30">
                        <div>
                            <div class="text-white font-bold text-sm">Siti Aminah</div>
                            <div class="text-indigo-400 text-xs font-mono">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-zinc-300 text-sm italic leading-relaxed">"Stok sparepart ribuan item sering hilang.
                        Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>

                <div
                    class="bg-zinc-900/60 border border-white/5 hover:border-indigo-500/20 p-8 rounded-2xl transition-all duration-300 reveal reveal-delay-300">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/20">
                        <div>
                            <div class="text-white font-bold text-sm">Michael Tan</div>
                            <div class="text-indigo-400 text-xs font-mono">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-zinc-400 text-sm italic leading-relaxed">"Saya gaptek, tapi tim INXDVI sabar banget
                        ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Articles / Blog -->
    <section id="blog" class="py-20 relative z-10 px-6 bg-white/5 border-y border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-indigo-400 font-mono text-xs tracking-widest uppercase mb-2 block"
                        data-i18n="sec_blog_sub">/// TIPS BISNIS</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white" data-i18n="sec_blog_title">Artikel &
                        <span class="text-gradient">Tips</span>
                    </h2>
                </div>
                <a href="#"
                    class="text-xs font-mono text-zinc-400 hover:text-white flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_read_more">LIHAT SEMUA TIPS</span> <i
                        class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-red-500/10 backdrop-blur-md border border-red-500/20 text-red-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            KEUANGAN</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors"
                            data-i18n="blog_1_title">Kasir Sering Minus? Ini 5 Penyebabnya</h3>
                        <p class="text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_1_desc">
                            Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.</p>
                        <span class="text-xs font-bold text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=2069&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-indigo-500/10 backdrop-blur-md border border-indigo-500/20 text-indigo-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            MARKETING</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors"
                            data-i18n="blog_2_title">Trik Agar Toko Muncul Paling Atas di Google</h3>
                        <p class="text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_2_desc">Cara
                            gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.</p>
                        <span class="text-xs font-bold text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-emerald-500/10 backdrop-blur-md border border-emerald-500/20 text-emerald-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            OPERASIONAL</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors"
                            data-i18n="blog_3_title">Capek Balas Chat? Pakai Trik Ini</h3>
                        <p class="text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_3_desc">
                            Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.</p>
                        <span class="text-xs font-bold text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section id="faq" class="py-20 relative z-10 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-12 text-center reveal" data-i18n="faq_title">
                Pertanyaan <span class="text-gradient">Umum</span></h2>

            <div class="space-y-4">

                <!-- FAQ Item 1 -->
                <div
                    class="bg-zinc-900/50 border border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-100">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-white text-sm md:text-base group-hover:text-indigo-400 transition-colors"
                            data-i18n="faq_1_q">Apakah cocok untuk bisnis kecil / UMKM?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-zinc-400 group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-400 text-xs md:text-sm leading-relaxed" data-i18n="faq_1_a">
                            Sangat cocok! Sistem kami dirancang sederhana agar mudah dipahami bahkan untuk yang gaptek
                            sekalipun.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="bg-zinc-900/50 border border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-200">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-white text-sm md:text-base group-hover:text-indigo-400 transition-colors"
                            data-i18n="faq_2_q">Berapa lama waktu pembuatan?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-zinc-400 group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-400 text-xs md:text-sm leading-relaxed" data-i18n="faq_2_a">
                            Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung kompleksitas sistem.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="bg-zinc-900/50 border border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-300">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-white text-sm md:text-base group-hover:text-indigo-400 transition-colors"
                            data-i18n="faq_3_q">Bagaimana jika ada error di kemudian hari?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-zinc-400 group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-400 text-xs md:text-sm leading-relaxed" data-i18n="faq_3_a">
                            Kami memberikan garansi perbaikan gratis serta pendampingan penuh untuk melatih staf Anda.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div
                    class="bg-zinc-900/50 border border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-400">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-white text-sm md:text-base group-hover:text-indigo-400 transition-colors"
                            data-i18n="faq_4_q">Apakah data bisnis saya aman?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-zinc-400 group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-400 text-xs md:text-sm leading-relaxed" data-i18n="faq_4_a">
                            Ya. Semua database dienkripsi secara berkala dan dihosting di server cloud yang aman.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="relative pt-24 pb-12 bg-zinc-950 text-white overflow-hidden border-t border-white/5">
        <div
            class="absolute inset-0 pointer-events-none opacity-[0.03] bg-[linear-gradient(to_right,#ffffff10_1px,transparent_1px),linear-gradient(to_bottom,#ffffff10_1px,transparent_1px)] bg-[size:40px_40px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div
                class="flex flex-col md:flex-row items-center justify-between gap-8 mb-20 border-b border-white/10 pb-20 reveal">
                <div class="text-center md:text-left">
                    <h3 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight" data-i18n="footer_cta_title">
                        Jangan Biarkan Kompetitor <br> <span class="text-indigo-400">Menyalip Anda!</span></h3>
                    <p class="text-zinc-400 max-w-lg text-sm md:text-base leading-relaxed" data-i18n="footer_cta_desc">
                        Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.</p>
                </div>
                <div>
                    <a href="https://wa.me/628123456789"
                        class="shimmer-btn inline-flex items-center gap-3 px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition-all shadow-lg hover:scale-[1.01]">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                        <div class="text-left">
                            <div class="text-[9px] font-normal opacity-80 leading-none">Chat Admin 24/7</div>
                            <div class="text-base font-bold mt-1" data-i18n="btn_wa_footer">Hubungi via WhatsApp</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 reveal">

                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="/images/logo.png" alt="INXDVI Logo" class="h-8 w-auto object-contain">
                    </div>
                    <p class="text-zinc-400 leading-relaxed mb-6 text-xs" data-i18n="footer_about_desc">Partner digital
                        terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan
                        untuk semua orang.</p>

                    <div class="flex gap-2">
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-indigo-600 flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-indigo-600 flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-indigo-600 flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-link text-indigo-400 text-[10px]"></i> Menu</h4>
                    <ul class="space-y-3 text-xs text-zinc-400 font-medium">
                        <li><a href="#masalah"
                                class="hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Masalah
                                Bisnis</a></li>
                        <li><a href="#layanan"
                                class="hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Solusi
                                Kami</a></li>
                        <li><a href="#hemat"
                                class="hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Hitung
                                Hemat</a></li>
                        <li><a href="#portfolio"
                                class="hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Hasil
                                Kerja</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-location-dot text-indigo-400 text-[10px]"></i> Kontak</h4>
                    <ul class="space-y-4 text-xs text-zinc-400 font-medium">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin mt-1 text-indigo-400"></i>
                            <span class="leading-relaxed">Jl. Jendral Sudirman No. 10, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-indigo-400"></i>
                            <span>halo@inxdvi.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-clock text-indigo-400"></i>
                            <span>Senin - Jumat (09.00 - 17.00)</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 text-sm" data-i18n="newsletter_title">Tips Bisnis Gratis</h4>
                    <p class="text-xs text-zinc-400 mb-4 leading-normal" data-i18n="newsletter_desc">Masukkan email
                        untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..."
                            class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-indigo-400 transition-colors pr-10">
                        <button
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-indigo-600 hover:bg-indigo-500 rounded flex items-center justify-center text-white transition-colors">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        </button>
                    </div>
                </div>

            </div>

            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/10 text-xs text-zinc-500 font-mono reveal">
                <p>&copy; 2024 INXDVI Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // 1. Spotlight Card Interaction (Optimized per card)
        const spotlightCards = document.querySelectorAll('.spotlight-card');
        spotlightCards.forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // 1b. Scroll Progress Indicator
        const scrollBar = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            if (!scrollBar) return;
            const winScroll = document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            scrollBar.style.width = scrolled + '%';
        }, { passive: true });

        // 1c. Ambient Cursor Glow Handler
        const ambientGlow = document.getElementById('ambient-glow');
        window.addEventListener('mousemove', e => {
            if (!ambientGlow) return;
            // Delay or ease-out movement using simple translate/transition positioning
            ambientGlow.style.left = e.clientX + 'px';
            ambientGlow.style.top = e.clientY + 'px';
        }, { passive: true });

        // 1d. Full-screen Particle Background Animation
        const homeCanvas = document.getElementById('home-particle-canvas');
        if (homeCanvas) {
            const hCtx = homeCanvas.getContext('2d');
            let hWidth = homeCanvas.width = window.innerWidth;
            let hHeight = homeCanvas.height = window.innerHeight;
            let hParticles = [];

            const maxHParticles = Math.min(100, Math.floor(window.innerWidth / 15));
            const hConnectionDist = 130;
            let homeMouse = { x: null, y: null, radius: 140 };

            window.addEventListener('resize', () => {
                hWidth = homeCanvas.width = window.innerWidth;
                hHeight = homeCanvas.height = window.innerHeight;
                initHParticles();
            }, { passive: true });

            window.addEventListener('mousemove', e => {
                homeMouse.x = e.clientX;
                homeMouse.y = e.clientY;
            }, { passive: true });

            document.addEventListener('mouseleave', () => {
                homeMouse.x = null;
                homeMouse.y = null;
            });

            class HomeParticle {
                constructor() {
                    this.x = Math.random() * hWidth;
                    this.y = Math.random() * hHeight;
                    this.vx = (Math.random() - 0.5) * 0.35;
                    this.vy = (Math.random() - 0.5) * 0.35;
                    this.radius = Math.random() * 2 + 1;
                }

                update() {
                    // Boundary bounce
                    if (this.x < 0 || this.x > hWidth) this.vx *= -1;
                    if (this.y < 0 || this.y > hHeight) this.vy *= -1;

                    this.x += this.vx;
                    this.y += this.vy;

                    // Mouse push/pull
                    if (homeMouse.x !== null && homeMouse.y !== null) {
                        const dx = homeMouse.x - this.x;
                        const dy = homeMouse.y - this.y;
                        const dist = Math.hypot(dx, dy);
                        if (dist < homeMouse.radius) {
                            const force = (homeMouse.radius - dist) / homeMouse.radius;
                            this.x -= (dx / dist) * force * 0.6;
                            this.y -= (dy / dist) * force * 0.6;
                        }
                    }
                }

                draw() {
                    hCtx.beginPath();
                    hCtx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    hCtx.fillStyle = 'rgba(129, 140, 248, 0.55)';
                    hCtx.fill();
                }
            }

            function initHParticles() {
                hParticles = [];
                for (let i = 0; i < maxHParticles; i++) {
                    hParticles.push(new HomeParticle());
                }
            }

            function animateHParticles() {
                hCtx.clearRect(0, 0, hWidth, hHeight);

                hParticles.forEach(p => {
                    p.update();
                    p.draw();
                });

                // Connections
                for (let i = 0; i < hParticles.length; i++) {
                    for (let j = i + 1; j < hParticles.length; j++) {
                        const p1 = hParticles[i];
                        const p2 = hParticles[j];
                        const dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);

                        if (dist < hConnectionDist) {
                            const alpha = (1 - (dist / hConnectionDist)) * 0.28;
                            hCtx.beginPath();
                            hCtx.moveTo(p1.x, p1.y);
                            hCtx.lineTo(p2.x, p2.y);
                            hCtx.strokeStyle = `rgba(129, 140, 248, ${alpha})`;
                            hCtx.lineWidth = 0.6;
                            hCtx.stroke();
                        }
                    }
                }

                requestAnimationFrame(animateHParticles);
            }

            initHParticles();
            animateHParticles();
        }


        // 2. Mobile Menu Handler
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = menuBtn.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuBtn.querySelector('i').classList.remove('fa-xmark');
                menuBtn.querySelector('i').classList.add('fa-bars');
            });
        });

        // 3. Navbar Shrink on Scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // 4. Staggered Scroll-Driven Reveals
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: "0px 0px -40px 0px"
        });
        revealElements.forEach(el => revealObserver.observe(el));

        // 5. 3D Tilt Mockup Card Animation
        const mockup = document.getElementById('hero-mockup');
        if (mockup) {
            const container = mockup.parentElement;
            container.addEventListener('mousemove', (e) => {
                const rect = mockup.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                // Max degrees of rotation
                const rotX = -(y / rect.height) * 16;
                const rotY = (x / rect.width) * 16;

                mockup.style.transform = `rotateX(${rotX}deg) rotateY(${rotY}deg) scale3d(1.01, 1.01, 1.01)`;
            });

            container.addEventListener('mouseleave', () => {
                mockup.style.transform = 'rotateY(-8deg) rotateX(4deg) scale3d(1, 1, 1)';
            });
        }

        // 6. Count-up Numeric Animations
        let countersAnimated = false;
        function animateCounters() {
            if (countersAnimated) return;
            countersAnimated = true;

            const numbers = document.querySelectorAll('.counter-number');
            numbers.forEach(num => {
                const target = +num.getAttribute('data-target');
                const duration = 1600; // 1.6s
                const start = performance.now();

                function step(timestamp) {
                    const elapsed = timestamp - start;
                    const progress = Math.min(elapsed / duration, 1);
                    // Cubic easeOut function
                    const ease = 1 - Math.pow(1 - progress, 3);
                    num.innerText = Math.floor(ease * target);

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        num.innerText = target;
                    }
                }
                requestAnimationFrame(step);
            });
        }

        const hematSection = document.getElementById('hemat');
        if (hematSection) {
            const hematObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                    }
                });
            }, { threshold: 0.15 });
            hematObserver.observe(hematSection);
        }

        // 7. Multi-lingual Translations System
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');

        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                nav_problem: "Masalah", nav_solution: "Solusi", nav_benefit: "Hemat", nav_portfolio: "Portfolio", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "BISNIS JADI AUTOPILOT",
                hero_title: "Bisnis Jalan Otomatis <br> <span class='text-gradient'>Omzet Naik Drastis</span>",
                hero_desc: "Stop jadi 'budak' di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.",
                btn_start: "Konsultasi via WA", btn_portfolio: "LIHAT HASIL KERJA",
                sec_prob_sub: "/// KELUHAN UMUM",
                sec_prob_title: "Apakah Bisnis Anda <br> Mengalami <span class='text-red-400'>Masalah Ini?</span>",
                prob_1_title: "Uang & Stok Selisih", prob_1_desc: "Tiap tutup toko uang di laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.",
                prob_2_title: "Pusing Rekap Manual", prob_2_desc: "Akhir bulan lembur ngitung nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.",
                prob_3_title: "Kalah Sama Tetangga", prob_3_desc: "Toko sebelah sudah bisa pesan online dan ada di Google Maps, toko Anda masih nunggu bola.",
                sec_service_sub: "/// SOLUSI KAMI", sec_service_title: "Solusi Praktis <span class='text-gradient'>Tanpa Ribet</span>", sec_service_desc: "Kami sediakan 'alat digital' biar Anda bisa tidur nyenyak sementara sistem bekerja.",
                srv_mobile_title: "Aplikasi Kasir & Stok", srv_mobile_desc: "Pantau penjualan dan stok barang langsung dari HP (Real-time).",
                srv_web_title: "Website Pencari Pelanggan", srv_web_desc: "Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.",
                srv_sosmed_title: "Bot Balas Chat", srv_sosmed_desc: "Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.",
                srv_sec_title: "Keamanan Data", srv_sec_desc: "Data keuangan Anda aman, tidak akan bocor ke kompetitor.",
                srv_data_title: "Laporan Otomatis", srv_data_desc: "Laporan laba rugi keluar otomatis setiap hari tanpa perlu hitung manual.",
                srv_com_title: "Komunitas Pelanggan", srv_com_desc: "Bangun database pelanggan setia untuk promosi berulang.",
                srv_vector_title: "Desain Logo & Branding", srv_vector_desc: "Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.",
                srv_sosmed_spec_title: "Jasa Kelola Sosmed", srv_sosmed_spec_desc: "Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.",
                sec_roi_sub: "/// HITUNG-HITUNGAN CUAN",
                sec_roi_title: "Lebih Murah Dari <br> <span class='text-gradient'>Gaji Karyawan</span>",
                sec_roi_desc: "Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.",
                roi_1: "Sistem bekerja 24 jam nonstop", roi_2: "Akurasi data 100% (Anti Salah Hitung)", roi_3: "Investasi sekali, untung selamanya",
                btn_calc: "Hitung Penghematan Saya",
                card_manual: "Cara Manual", card_desc_manual: "Gaji Admin UMR Setahun",
                card_tech: "Pakai Sistem", card_desc_tech: "Investasi Awal (Sekali Bayar)",
                roi_summary: "Anda Menghemat Uang:",
                roi_unit: "Juta",
                trust_title: "\"Saya Gaptek, Takut Gak Bisa Pakai\"",
                trust_desc: "Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.",
                sec_case_sub: "/// KASUS NYATA", sec_case_title: "Bukti Nyata <span class='text-gradient'>Perubahan</span>", sec_case_desc: "Lihat bagaimana kami mengubah hambatan bisnis menjadi keuntungan.",
                case_1_prob_title: "Stok Barang Selalu Selisih", case_1_prob_desc: "Klien sering kehilangan stok barang tapi tidak tahu siapa yang ambil. Rugi jutaan per bulan.",
                case_1_sol_title: "Sistem Stok Barcode", case_1_sol_desc: "Kami pasang sistem barcode. Setiap barang keluar masuk tercatat jam dan petugasnya.",
                case_2_prob_title: "Admin Kewalahan Balas Chat", case_2_prob_desc: "Banyak chat masuk tapi admin lambat balas. Calon pembeli kabur ke toko sebelah.",
                case_2_sol_title: "Bot WhatsApp Otomatis", case_2_sol_desc: "Sistem otomatis yang menjawab pertanyaan harga dan stok dalam 1 detik, 24 jam nonstop.",
                sec_port_sub: "/// PAMERAN", sec_port_title: "Portfolio <span class='text-gradient'>Kami</span>", btn_see_all: "LIHAT SEMUA",
                sec_workflow_sub: "/// ALUR KERJA", sec_workflow_title: "Proses Gampang <span class='text-gradient'>Anti Ribet</span>",
                step_1_title: "1. Curhat Dulu", step_1_desc: "Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi.",
                step_2_title: "2. Kami Buatkan", step_2_desc: "Tim kami mulai merancang sistem sesuai kebutuhan Anda.",
                step_3_title: "3. Pengerjaan", step_3_desc: "Proses coding dan pembuatan aplikasi oleh ahli kami.",
                step_4_title: "4. Training & Jadi", step_4_desc: "Kami ajari cara pakainya sampai Anda dan staf mahir.",
                sec_client_title: "Kata Klien <span class='italic text-indigo-400'>Kami</span>",
                sec_why_sub: "/// MENGAPA KAMI",
                sec_why_title: "Jangan Buang Waktu <br> Dengan <span class='text-gray-600 line-through decoration-red-500 decoration-4'>Cara Lama</span>",
                sec_why_desc: "Di era digital yang brutal, kecepatan dan ketepatan adalah segalanya. Kami menggunakan teknologi stack terbaru untuk memastikan Anda selalu satu langkah di depan kompetitor.",
                stat_1: "Retensi Klien", stat_2: "Produk Digital", stat_3: "Peningkatan ROI",
                offer_title: "Gratis Audit Digital", offer_desc: "Dapatkan analisa mendalam tentang performa website atau aplikasi Anda senilai Rp 5.000.000, gratis untuk 5 pendaftar pertama bulan ini.", btn_claim: "Klaim Sekarang",
                sec_blog_sub: "/// TIPS BISNIS", sec_blog_title: "Artikel & <span class='text-gradient'>Tips</span>", btn_read_more: "LIHAT SEMUA TIPS",
                blog_1_title: "Kasir Sering Minus? Ini 5 Penyebabnya", blog_1_desc: "Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.",
                blog_2_title: "Trik Agar Toko Muncul Paling Atas di Google", blog_2_desc: "Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.",
                blog_3_title: "Capek Balas Chat? Pakai Trik Ini", blog_3_desc: "Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.",
                footer_cta_title: "Jangan Biarkan Kompetitor <br> <span class='text-indigo-400'>Menyalip Anda!</span>",
                footer_cta_desc: "Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.",
                btn_contact_us: "Hubungi Kami", btn_wa_footer: "Hubungi via WhatsApp",
                footer_about_desc: "Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.",
                newsletter_title: "Tips Bisnis Gratis", newsletter_desc: "Masukkan email untuk dapat tips meningkatkan omzet tiap minggu.",
                calc_title: "Kalkulator ROI Interaktif",
                calc_staff_label: "Jumlah Karyawan Admin",
                calc_staff_unit: "Orang",
                calc_salary_label: "Gaji Per Karyawan (Bulanan)",
                faq_title: "Pertanyaan <span class='text-gradient'>Umum</span>",
                faq_1_q: "Apakah cocok untuk bisnis kecil / UMKM?",
                faq_1_a: "Sangat cocok! Sistem kami dirancang sederhana agar mudah dipahami bahkan untuk yang gaptek sekalipun.",
                faq_2_q: "Berapa lama waktu pembuatan?",
                faq_2_a: "Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung kompleksitas sistem.",
                faq_3_q: "Bagaimana jika ada error di kemudian hari?",
                faq_3_a: "Kami memberikan garansi perbaikan gratis serta pendampingan penuh untuk melatih staf Anda.",
                faq_4_q: "Apakah data bisnis saya aman?",
                faq_4_a: "Ya. Semua database dienkripsi secara berkala dan dihosting di server cloud yang aman."
            },
            en: {
                nav_problem: "Problems", nav_solution: "Solutions", nav_benefit: "Savings", nav_portfolio: "Portfolio", btn_contact: "Free Consult", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "DIGITAL TRANSFORMATION READY",
                hero_title: "Digital <br> <span class='text-gradient'>Transformation</span> <br> For Your Business",
                hero_desc: "We help your business grow faster with cutting-edge technology solutions, modern design, and measurable digital strategies.",
                btn_start: "Get Started", btn_portfolio: "VIEW PORTFOLIO",
                sec_prob_sub: "/// COMMON ISSUES", sec_prob_title: "Is Your Business <br> Facing <span class='text-red-400'>These Issues?</span>",
                prob_1_title: "Cash Mismatch", prob_1_desc: "Money missing from the drawer? Inventory disappearing? Signs of leaks or dishonest staff.",
                prob_2_title: "Manual Recap Headache", prob_2_desc: "Overtime at month-end to calculate handwritten notes. One mistake costs millions.",
                prob_3_title: "Losing to Competitors", prob_3_desc: "Competitors are online and on Google Maps, while your shop waits for customers.",
                sec_service_sub: "/// SERVICES", sec_service_title: "Our <span class='text-gradient'>Services</span>", sec_service_desc: "Comprehensive technology solutions for your digital needs and business growth.",
                srv_mobile_title: "Mobile App Dev", srv_mobile_desc: "High-performance iOS & Android apps with best UX.",
                srv_web_title: "Website & SEO", srv_web_desc: "Responsive websites optimized for search engines.",
                srv_sosmed_title: "Social Media", srv_sosmed_desc: "Creative content strategy and account management for brand awareness.",
                srv_sec_title: "Security", srv_sec_desc: "Protecting digital assets with high security standards.",
                srv_data_title: "Data Analytics", srv_data_desc: "Data-driven decisions with comprehensive analytic dashboards.",
                srv_com_title: "Community", srv_com_desc: "Build loyal communities with interactive platforms.",
                srv_vector_title: "Vector Design & Branding", srv_vector_desc: "Make your brand look premium. Logo design, banners, and attractive menus.",
                srv_sosmed_spec_title: "Social Media Specialist", srv_sosmed_spec_desc: "We handle your IG & TikTok. From content ideas, video editing, to daily posting.",
                sec_roi_sub: "/// PROFIT CALCULATION",
                sec_roi_title: "Cheaper Than <br> <span class='text-gradient'>Employee Salary</span>",
                sec_roi_desc: "Instead of hiring 2 new admins, invest in a system. No bonuses, no sick leave, and works 24/7.",
                roi_1: "System works 24/7 nonstop", roi_2: "100% Data Accuracy", roi_3: "One-time investment, lifetime profit",
                btn_calc: "Calculate My Savings",
                card_manual: "Manual Way", card_desc_manual: "Yearly Admin Salary",
                card_tech: "Using System", card_desc_tech: "Initial Investment (One Time)",
                roi_summary: "You Save Money:",
                roi_unit: "Million",
                trust_title: "\"I'm Not Tech Savvy\"",
                trust_desc: "Don't worry. We won't leave you. Our team will train you and your staff until fluent. If there's an error, we fix it for free.",
                sec_case_sub: "/// REAL CASES", sec_case_title: "Challenges & <span class='text-gradient'>Solutions</span>", sec_case_desc: "See how we turn technical roadblocks into competitive advantages.",
                case_1_prob_title: "Slow Legacy System", case_1_prob_desc: "Client experienced data loading >10s causing 40% productivity drop daily.",
                case_1_sol_title: "Cloud Migration & Optimization", case_1_sol_desc: "We migrated to Cloud Native architecture and optimized DB. Resulting in < 0.8s load time.",
                case_2_prob_title: "Low Sales Conversion", case_2_prob_desc: "Client's e-commerce had high traffic but very low conversion rate (< 1%).",
                case_2_sol_title: "UI/UX Revamp & AI Recommendation", case_2_sol_desc: "Redesigned intuitive checkout flow and implemented personal AI product recommendations.",
                sec_port_sub: "/// SHOWCASE", sec_port_title: "Our <span class='text-gradient'>Portfolio</span>", btn_see_all: "SEE ALL",
                sec_workflow_sub: "/// WORKFLOW", sec_workflow_title: "Our <span class='text-gradient'>Workflow</span>",
                step_1_title: "1. Consultation", step_1_desc: "In-depth discussion regarding your business needs and targets.",
                step_2_title: "2. Planning & Design", step_2_desc: "System architecture design, UI/UX, and project timeline.",
                step_3_title: "3. Development", step_3_desc: "Iterative coding with high quality and security standards.",
                step_4_title: "4. Launch & Support", step_4_desc: "System launch and continuous technical support.",
                sec_client_title: "What Our <span class='italic text-cyan-400'>Clients Say</span>",
                sec_why_sub: "/// WHY CHOOSE US",
                sec_why_title: "Don't Waste Time <br> With <span class='text-gray-600 line-through decoration-red-500 decoration-4'>Old Methods</span>",
                sec_why_desc: "In this brutal digital era, speed and precision are everything. We use the latest tech stack to ensure you are always one step ahead.",
                stat_1: "Client Retention", stat_2: "Digital Products", stat_3: "ROI Improvement",
                offer_title: "Free Digital Audit", offer_desc: "Get an in-depth analysis of your website or app performance worth $350, free for the first 5 sign-ups this month.", btn_claim: "Claim Now",
                sec_blog_sub: "/// INSIGHTS", sec_blog_title: "News & <span class='text-gradient'>Articles</span>", btn_read_more: "READ MORE",
                blog_1_title: "5 Signs of Cashier Fraud", blog_1_desc: "Don't let money leak. Recognize the signs of dishonest staff at the checkout counter.",
                blog_2_title: "How to Rank Top on Google Maps", blog_2_desc: "Free ways to make customers in your area instantly find your shop on Google Maps.",
                blog_3_title: "Tired of Replying Chats? Use This", blog_3_desc: "The secret to answering customer chats in 1 second even when you're asleep.",
                footer_cta_title: "Ready to Transform <br> <span class='text-cyan-400'>Your Business?</span>",
                footer_cta_desc: "Don't let competitors get ahead. Consult your digital needs with our experts now.",
                btn_contact_us: "Contact Us", btn_wa_footer: "Chat on WhatsApp",
                footer_about_desc: "Your trusted technology partner for digital transformation. We create innovative solutions that drive growth.",
                newsletter_title: "Free Business Tips", newsletter_desc: "Enter email to get tips on increasing turnover every week.",
                calc_title: "Interactive ROI Calculator",
                calc_staff_label: "Number of Admin Staff",
                calc_staff_unit: "People",
                calc_salary_label: "Monthly Staff Salary",
                faq_title: "Frequently Asked <span class='text-gradient'>Questions</span>",
                faq_1_q: "Is it suitable for small businesses / MSMEs?",
                faq_1_a: "Absolutely! Our system is designed to be simple and easy to understand, even for beginners.",
                faq_2_q: "How long does development take?",
                faq_2_a: "The development process usually takes 2 to 4 weeks depending on the complexity.",
                faq_3_q: "What if there are bugs or errors later?",
                faq_3_a: "We provide free repair guarantees and full training support for your staff.",
                faq_4_q: "Is my business data secure?",
                faq_4_a: "Yes. All databases are periodically encrypted and hosted on secure cloud servers."
            }
        };

        function updateLang(lang) {
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (resources[lang][key]) el.innerHTML = resources[lang][key];
            });
            langFlag.innerText = lang === 'id' ? '🇮🇩' : '🇺🇸';
            langText.innerText = lang.toUpperCase();
            localStorage.setItem('lang', lang);
            currentLang = lang;

            // Re-trigger counter layout update without restarting anim
            const numSpans = document.querySelectorAll('.counter-number');
            numSpans.forEach(num => {
                const target = +num.getAttribute('data-target');
                if (num.innerText !== '0') {
                    num.innerText = target;
                }
            });
        }

        updateLang(currentLang);

        langBtn.addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });

        // 8. FAQ Accordion Logic
        function toggleFaq(btn) {
            const container = btn.parentElement;
            const answer = container.querySelector('.faq-answer');
            const icon = btn.querySelector('i');

            // Check if open
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Close all first for accordion style
            document.querySelectorAll('.faq-answer').forEach(el => {
                el.style.maxHeight = '0px';
                el.parentElement.classList.remove('border-indigo-500/20');
            });
            document.querySelectorAll('button i').forEach(chevron => {
                chevron.classList.remove('rotate-180');
            });

            // Toggle active
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                container.classList.add('border-indigo-500/20');
                icon.classList.add('rotate-180');
            }
        }

        // 9. Interactive ROI Calculator
        const calcStaff = document.getElementById('calc-staff');
        const calcSalary = document.getElementById('calc-salary');
        const calcStaffVal = document.getElementById('calc-staff-val');
        const calcSalaryVal = document.getElementById('calc-salary-val');

        const calcManualTotal = document.getElementById('calc-manual-total');
        const calcSystemTotal = document.getElementById('calc-system-total');
        const calcSavedTotal = document.getElementById('calc-saved-total');

        function updateCalculator() {
            if (!calcStaff || !calcSalary) return;
            const staff = parseInt(calcStaff.value);
            const salary = parseInt(calcSalary.value);

            // Display slider values
            calcStaffVal.innerText = staff;
            calcSalaryVal.innerText = salary;

            // Calculations (in Millions)
            const manual = staff * salary * 12;
            const system = 5; // Flat initial cost
            const saved = manual - system;

            // Update result displays
            calcManualTotal.innerText = manual;
            calcSystemTotal.innerText = system;
            calcSavedTotal.innerText = saved;
        }

        if (calcStaff && calcSalary) {
            calcStaff.addEventListener('input', updateCalculator);
            calcSalary.addEventListener('input', updateCalculator);
            // Initial call
            updateCalculator();
        }
    </script>
</body>

</html>