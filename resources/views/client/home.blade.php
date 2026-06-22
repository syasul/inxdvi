<!DOCTYPE html>
<html lang="id" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INXDVI.COM — Solusi Digital Premium</title>
    <link rel="icon" type="image/png" href="/images/logo_2.png">

    <!-- CSS / Fonts / CDNs -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fonts: Plus Jakarta Sans & Inter for Body, Clash Display from Fontshare for Headlines -->
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,300,400,500,600,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Library CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkbg: '#0A0A0F',
                        darkcard: 'rgba(255, 255, 255, 0.02)',
                        primarypurple: '#7C3AED',
                        accentcyan: '#06B6D4',
                        lighttext: '#F8FAFC',
                        mutedgray: '#94A3B8'
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                        display: ['Clash Display', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS Styles -->
    <style>
        :root {
            --bg-main: #0A0A0F;
            --primary-color: #7C3AED;
            --accent-color: #06B6D4;
            --text-main: #F8FAFC;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            overflow-x: hidden;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0A0A0F;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }

        /* Glassmorphism utility */
        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            border-color: rgba(6, 182, 212, 0.25);
            box-shadow: 0 20px 40px -15px rgba(6, 182, 212, 0.1);
        }

        /* Custom Cursor */
        .custom-cursor {
            width: 8px;
            height: 8px;
            background-color: var(--accent-color);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }

        .custom-cursor-hover {
            width: 24px;
            height: 24px;
            background-color: rgba(6, 182, 212, 0.2);
            border: 2px solid var(--accent-color);
        }

        /* Ambient mouse glow */
        #ambient-glow {
            position: fixed;
            pointer-events: none;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.08) 0%, rgba(6, 182, 212, 0.04) 50%, transparent 100%);
            blur: 100px;
            z-index: 0;
            transform: translate(-50%, -50%);
            transition: transform 0.1s ease-out;
        }

        /* Hero Noise overlay */
        .noise-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%35%3Cfilter id='noiseFilter'%35%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%35%3C/filter%35%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%35%3C/svg%35");
            opacity: 0.015;
            pointer-events: none;
            z-index: 1;
        }

        /* Gradient mesh animations */
        .mesh-gradient-problem {
            background: radial-gradient(circle at 10% 20%, rgba(239, 68, 68, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(124, 58, 237, 0.03) 0%, transparent 50%);
        }

        .mesh-gradient-cta {
            background: radial-gradient(circle at 90% 10%, rgba(6, 182, 212, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 10% 90%, rgba(124, 58, 237, 0.08) 0%, transparent 50%);
        }

        /* Infinite horizontal marquee loop */
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 25s linear infinite;
        }

        /* 3D laptop/tablet perspective wrapper */
        .perspective-3d {
            perspective: 1200px;
        }

        /* Lenis Smooth Scroll Configuration */
        html.lenis {
            height: auto;
        }

        .lenis-smooth {
            scroll-behavior: auto !important;
        }

        .lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis-stopped {
            overflow: hidden;
        }

        /* Preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #0A0A0F;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.8s ease;
        }

        .loader-logo {
            font-family: 'Clash Display', sans-serif;
            font-weight: 700;
            font-size: 3rem;
            color: #F8FAFC;
            position: relative;
            letter-spacing: 0.1em;
            text-shadow: 0 0 20px rgba(6, 182, 212, 0.5);
        }

        .loader-circle {
            position: absolute;
            width: 150px;
            height: 150px;
            border: 2px solid transparent;
            border-top-color: var(--accent-color);
            border-bottom-color: var(--primary-color);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="antialiased selection:bg-[#7C3AED]/20 selection:text-[#06B6D4]">

    <!-- Custom Cursor (Desktop only) -->
    <div class="custom-cursor hidden md:block" id="custom-cursor"></div>

    <!-- Ambient mouse follow glow -->
    <div id="ambient-glow"></div>

    <!-- Preloader Loader -->
    <div id="preloader">
        <div class="loader-circle"></div>
        <div class="loader-logo">
            <img src="/images/logo_transparent1.png" class="h-16 w-auto object-contain animate-pulse" alt="Logo">
        </div>
    </div>

    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress"
        class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-primarypurple via-accentcyan to-pink-500 z-[100] transition-all duration-75"
        style="width: 0%;"></div>

    <!-- Navigation Bar -->
    <nav id="navbar"
        class="fixed top-0 left-0 w-full z-50 bg-[#0A0A0F]/80 backdrop-blur-xl border-b border-white/5 transition-all duration-500 py-5">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-3 z-50 text-decoration-none group">
                <img src="/images/logo_transparent1.png"
                    class="h-8 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]"
                    alt="INXDVI Logo">
            </a>

            <!-- Navigation Links -->
            <div
                class="hidden md:flex items-center gap-1 bg-white/[0.02] border border-white/5 p-1.5 rounded-full backdrop-blur-md">
                <a href="/#masalah"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_problem">Masalah</a>
                <a href="/#solusi"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_solusi">Solusi</a>
                <!-- <a href="/#testimoni"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_calculator">Calculator</a> -->
                <a href="/#penawaran"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_demo">Demo</a>
                <a href="/blog"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_blog">Blog</a>
            </div>

            <!-- Controls & CTA -->
            <div class="flex items-center gap-4 z-50">
                <!-- Language Toggle Button -->
                <button id="lang-toggle"
                    class="h-9 px-3 rounded-full bg-white/5 border border-white/10 flex items-center gap-2 hover:bg-white/10 transition-all cursor-pointer">
                    <span id="lang-flag" class="text-sm">🇮🇩</span>
                    <span id="lang-text" class="text-xs font-bold text-lighttext">ID</span>
                </button>

                <!-- WhatsApp CTA Button -->
                <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}"
                    class="hidden md:flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-primarypurple to-accentcyan text-white text-xs font-bold rounded-full hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all transform hover:scale-[1.02]">
                    <span data-i18n="btn_contact">Konsultasi Gratis</span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="md:hidden w-9 h-9 flex items-center justify-center text-lighttext text-lg bg-white/5 rounded-full border border-white/10">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu list -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-[#0A0A0F]/95 backdrop-blur-2xl border-b border-white/5 shadow-2xl transition-all duration-300">
            <div class="p-6 flex flex-col gap-3">
                <a href="/#masalah"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_problem">Masalah Anda</a>
                <a href="/#solusi"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_solusi">Solusi</a>
                <!-- <a href="/#testimoni"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_calculator">Calculator</a> -->
                <a href="/#penawaran"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_demo">Demo</a>
                <a href="/blog"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_blog">Blog</a>
                <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}"
                    class="block w-full py-4 bg-gradient-to-r from-primarypurple to-accentcyan text-white text-center font-bold rounded-xl shadow-lg"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- 1. Hero Section -->
    <header class="relative w-full min-h-screen flex items-center pt-24 overflow-hidden">

        <!-- Three.js Canvas Container -->
        <div id="canvas-container" class="absolute inset-0 z-0 pointer-events-none"></div>

        <!-- Texture and overlay noise -->
        <div class="noise-overlay"></div>

        <!-- Background Gradient Mesh -->
        <div
            class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0A0A0F]/50 to-darkbg z-0 pointer-events-none">
        </div>

        <!-- Content Grid -->
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full py-12 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left: Headline and description -->
                <div class="lg:col-span-7 space-y-8 text-left">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-white/10 bg-white/5 text-accentcyan text-[10px] md:text-xs font-mono uppercase tracking-wider">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accentcyan opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accentcyan"></span>
                        </span>
                        <span data-i18n="hero_badge">BISNIS JADI AUTOPILOT</span>
                    </div>

                    <h1
                        class="text-4xl sm:text-5xl md:text-6xl font-display font-bold tracking-tight text-lighttext leading-none max-w-2xl">
                        <span class="block headline-word">Bisnis Jalan Sendiri.</span>
                        <span
                            class="block text-transparent bg-clip-text bg-gradient-to-r from-primarypurple to-accentcyan headline-word">Anda
                            Tinggal Pantau.</span>
                    </h1>

                    <p class="text-sm md:text-base text-mutedgray font-light leading-relaxed max-w-xl"
                        data-i18n="hero_desc">
                        Sistem kasir, stok, dan laporan otomatis — tanpa perlu jago teknologi. Pantau omzet kapan saja
                        langsung dari HP Anda.
                    </p>

                    <!-- Social Proof Mini -->
                    <div class="flex items-center gap-2 text-xs text-mutedgray font-mono border-l-2 border-accentcyan pl-4 py-1.5"
                        data-i18n="hero_social_proof">
                        ✅ 120+ UMKM sudah pakai | ⭐ 4.9/5 rating | 🔒 Garansi 30 hari
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 max-w-md pt-2">
                        <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}"
                            class="px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold font-display rounded-full text-center hover:shadow-[0_0_25px_rgba(16,185,129,0.35)] transition-all transform hover:scale-[1.03] flex items-center justify-center gap-2 group">
                            <span data-i18n="btn_start">Konsultasi Gratis via WA</span>
                            <i class="fa-brands fa-whatsapp text-lg group-hover:scale-110 transition-transform"></i>
                        </a>
                        <button
                            onclick="openVideoModal('https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761')"
                            class="px-8 py-4 rounded-full border border-white/10 hover:border-white/20 bg-white/5 hover:bg-white/10 text-lighttext font-bold text-xs transition-all flex items-center justify-center gap-2 group">
                            <span data-i18n="btn_demo">Lihat Demo Langsung</span>
                            <i
                                class="fa-solid fa-play text-xs text-accentcyan group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <!-- Right: 3D device mockup -->
                <div class="lg:col-span-5 flex justify-center perspective-3d pt-8 lg:pt-0">
                    <div class="relative w-80 h-[500px] bg-zinc-900 border-[10px] border-zinc-800 rounded-[40px] shadow-[0_0_50px_rgba(124,58,237,0.15)] overflow-hidden rotate-3d-mockup"
                        style="transform-style: preserve-3d; transform: rotateY(-15deg) rotateX(15deg);">
                        <!-- Ear speaker & camera cutout -->
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-zinc-800 rounded-b-2xl z-30">
                        </div>

                        <!-- Dashboard UI Screen rendered purely -->
                        <div
                            class="absolute inset-0 bg-darkbg p-5 pt-8 flex flex-col justify-between overflow-hidden text-xs">
                            <!-- Dash Header -->
                            <div class="flex justify-between items-center pb-4 border-b border-white/5">
                                <div>
                                    <p class="text-[9px] text-mutedgray">Omzet Toko Hari Ini</p>
                                    <p class="font-bold text-accentcyan font-display text-sm font-mono animate-pulse">Rp
                                        4.750.000</p>
                                </div>
                                <span
                                    class="w-8 h-8 rounded-full bg-primarypurple/20 flex items-center justify-center text-primarypurple font-bold">IN</span>
                            </div>

                            <!-- Dash Charts / Metrics -->
                            <div class="space-y-4 py-4 flex-1">
                                <!-- Cards -->
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="bg-white/5 p-2 rounded-xl border border-white/5">
                                        <p class="text-[8px] text-mutedgray">Transaksi</p>
                                        <p class="font-bold text-lighttext">120 Order</p>
                                    </div>
                                    <div class="bg-white/5 p-2 rounded-xl border border-white/5">
                                        <p class="text-[8px] text-mutedgray">Stok Menipis</p>
                                        <p class="font-bold text-red-400">3 Item</p>
                                    </div>
                                </div>

                                <!-- Mini Stock Line Graphic -->
                                <div class="bg-white/5 p-3 rounded-xl border border-white/5 space-y-2">
                                    <div class="flex justify-between items-center">
                                        <p class="text-[8px] text-lighttext font-semibold">Grafik Penjualan Mingguan</p>
                                        <span class="text-[7px] text-emerald-400 font-mono">+12.4%</span>
                                    </div>
                                    <!-- Visual Chart Bar Mock -->
                                    <div class="h-16 flex items-end gap-1.5 pt-2">
                                        <div class="w-full bg-white/10 rounded-t h-8"></div>
                                        <div class="w-full bg-white/10 rounded-t h-12"></div>
                                        <div class="w-full bg-white/10 rounded-t h-6"></div>
                                        <div class="w-full bg-white/10 rounded-t h-10"></div>
                                        <div
                                            class="w-full bg-gradient-to-t from-primarypurple to-accentcyan rounded-t h-14">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating badge -->
                            <div
                                class="bg-primarypurple text-white p-2.5 rounded-xl border border-white/10 text-center font-bold font-mono tracking-wider text-[10px] shadow-lg animate-bounce">
                                🚀 DIBIMBING SAMPAI BISA!
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- 2. Section: Problem -->
    <section id="masalah" class="relative py-28 overflow-hidden mesh-gradient-problem border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-mono uppercase tracking-widest text-red-500 block"
                    data-i18n="sec_prob_sub">/// KENALI MASALAH ANDA</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                    data-i18n="sec_prob_title">Masih Nyangkut di Masalah Ini?</h2>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_prob_desc">Kebanyakan pemilik
                    usaha lelah secara fisik dan pikiran karena operasional yang berantakan.</p>

                <!-- Stat display -->
                <div
                    class="inline-block px-6 py-3 bg-red-950/20 border border-red-500/20 rounded-full mt-4 text-xs font-semibold text-red-400 font-mono tracking-wide animate-pulse">
                    ⚠️ 87% UMKM rugi karena stok tidak terkontrol
                </div>
            </div>

            <!-- Problem Cards Grid (6 cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">😩
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_1_title">Stok Sering Selisih</h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_1_desc">
                        Hitung manual bikin pusing, sering ada barang hilang tanpa jejak di gudang.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        01</div>
                </div>

                <!-- Card 2 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">📊
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_2_title">Laporan Makan Waktu</h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_2_desc">
                        Rekap nota sampai tengah malam, besoknya masih salah hitung juga.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        02</div>
                </div>

                <!-- Card 3 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">🤯
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_3_title">Gak Tau Omzet Hari Ini
                    </h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_3_desc">
                        Buka-tutup toko tiap hari tapi bingung berapa keuntungan bersih sebenarnya.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        03</div>
                </div>

                <!-- Card 4 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">👨‍💼
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_4_title">Karyawan Susah Dikontrol
                    </h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_4_desc">Pas
                        ditinggal, gak tau karyawan ngapain aja. Sering terjadi selisih kas kasir.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        04</div>
                </div>

                <!-- Card 5 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">📵
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_5_title">Gak Bisa Pantau Jauh</h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_5_desc">Mau
                        liburan atau istirahat takut, bisnis macet kalau tidak dijaga owner langsung.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        05</div>
                </div>

                <!-- Card 6 -->
                <div class="glass-card p-8 hover:border-red-500/20 relative group tilt-card">
                    <div class="text-3xl mb-6 bg-white/5 w-12 h-12 rounded-full flex items-center justify-center">💸
                    </div>
                    <h3 class="text-lg font-bold text-lighttext mb-3" data-i18n="prob_6_title">Buang Uang untuk Admin
                    </h3>
                    <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="prob_6_desc">
                        Bayar gaji admin mahal-mahal, tapi kerjanya lambat, manual, dan banyak error.</p>
                    <div
                        class="absolute bottom-4 right-4 text-red-500/10 text-6xl font-display font-bold group-hover:text-red-500/20 transition-colors pointer-events-none">
                        06</div>
                </div>
            </div>

        </div>
    </section>

    <!-- 3. Section: Solusi -->
    <section id="solusi" class="relative py-28 bg-darkbg border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block"
                    data-i18n="sec_sol_sub">/// SOLUSI KAMI</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                    data-i18n="sec_sol_title">Satu Platform, Semua Terkontrol</h2>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_sol_desc">Kami gantikan
                    keribetan sistem manual Anda dengan software modular pintar yang terjangkau.</p>
            </div>

            <!-- Alternating layouts (5 Features) -->
            <div class="space-y-32">
                <!-- Feature 1 -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-mono text-primarypurple block">FITUR 01 / KASIR CLOUD (POS)</span>
                        <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext" data-i18n="sol_1_title">
                            Transaksi Cepat & Akurat</h3>
                        <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="sol_1_desc">
                            Transaksi cepat sekali klik, otomatis terintegrasi ke cetak nota thermal dan input
                            pembukuan. Bisa mengelola multi-kasir dan multi-cabang tanpa bingung rekap manual.
                        </p>
                    </div>
                    <!-- Visual Mockup -->
                    <div class="lg:col-span-6 flex justify-center perspective-3d">
                        <div class="w-full max-w-md h-64 bg-zinc-900 border-[8px] border-zinc-800 rounded-2xl shadow-2xl relative overflow-hidden"
                            style="transform: rotateX(20deg);">
                            <div class="absolute inset-0 bg-[#0A0A0F] p-4 flex flex-col justify-between">
                                <div class="flex justify-between items-center text-[10px] pb-2 border-b border-white/5">
                                    <span class="font-bold text-accentcyan">POS KASIR INXDVI</span>
                                    <span class="text-mutedgray">Operator: Siti</span>
                                </div>
                                <div class="space-y-1.5 py-3 flex-1 text-[10px]">
                                    <div class="flex justify-between text-mutedgray"><span>2x Espresso
                                            Matcha</span><span>Rp 56.000</span></div>
                                    <div class="flex justify-between text-mutedgray"><span>1x Chocolate
                                            Croissant</span><span>Rp 24.000</span></div>
                                    <div
                                        class="flex justify-between text-lighttext font-bold pt-2 border-t border-white/5">
                                        <span>Total Bayar</span><span>Rp 80.000</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2 bg-emerald-500 text-white font-bold text-center rounded-lg text-[10px]">SIMPAN
                                    TRANSAKSI & PRINT</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Visual Mockup -->
                    <div class="lg:col-span-6 order-last lg:order-first flex justify-center perspective-3d">
                        <div class="w-full max-w-md h-64 bg-zinc-900 border-[8px] border-zinc-800 rounded-2xl shadow-2xl relative overflow-hidden"
                            style="transform: rotateX(20deg) rotateY(15deg);">
                            <div class="absolute inset-0 bg-[#0A0A0F] p-4 flex flex-col justify-between">
                                <div class="flex justify-between items-center text-[10px]">
                                    <span class="font-bold text-lighttext">Alert Sisa Stok</span>
                                    <span
                                        class="px-2 py-0.5 bg-red-950 text-red-400 rounded-full text-[8px] font-mono animate-pulse">Menipis!</span>
                                </div>
                                <div class="space-y-2 py-2 flex-1 text-[10px]">
                                    <div class="bg-white/5 p-2 rounded-lg flex justify-between items-center">
                                        <span class="text-lighttext font-semibold">Matcha Powder Premium</span>
                                        <span class="font-mono text-red-400">Sisa 3 Pcs</span>
                                    </div>
                                    <div class="bg-white/5 p-2 rounded-lg flex justify-between items-center">
                                        <span class="text-lighttext font-semibold">Susu Fresh Milk UHT</span>
                                        <span class="font-mono text-lighttext">Sisa 120 Pcs</span>
                                    </div>
                                </div>
                                <div
                                    class="bg-primarypurple/10 text-primarypurple p-2 rounded-lg text-center text-[9px]">
                                    📲 Alert otomatis terkirim ke WhatsApp logistik!
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-mono text-accentcyan block">FITUR 02 / MANAJEMEN STOK REAL-TIME</span>
                        <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext" data-i18n="sol_2_title">
                            Stok Otomatis & Alert Menipis</h3>
                        <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="sol_2_desc">
                            Stok bahan baku turun otomatis setiap ada transaksi kasir. Sistem pintar mendeteksi sisa
                            stok dan mengirim alert otomatis saat persediaan hampir habis untuk hindari kehabisan bahan.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-mono text-primarypurple block">FITUR 03 / LAPORAN OTOMATIS</span>
                        <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext" data-i18n="sol_3_title">
                            Laporan Keuangan Instan</h3>
                        <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="sol_3_desc">
                            Tidak perlu lagi rekap lembar nota hingga tengah malam. Laporan laba rugi, omzet, menu
                            terlaris, dan performa keuangan harian tersaji instan. Export ke PDF / Excel dalam sekali
                            klik.
                        </p>
                    </div>
                    <!-- Visual Mockup -->
                    <div class="lg:col-span-6 flex justify-center perspective-3d">
                        <div class="w-full max-w-md h-64 bg-zinc-900 border-[8px] border-zinc-800 rounded-2xl shadow-2xl relative overflow-hidden"
                            style="transform: rotateX(20deg);">
                            <div class="absolute inset-0 bg-[#0A0A0F] p-4 flex flex-col justify-between text-[10px]">
                                <div class="flex justify-between items-center pb-2 border-b border-white/5">
                                    <span class="font-bold text-lighttext">Export Laporan Bulanan</span>
                                    <button class="px-2 py-0.5 bg-accentcyan text-black rounded text-[8px]">Download
                                        Excel</button>
                                </div>
                                <div class="py-3 flex-1 space-y-2">
                                    <div class="flex justify-between text-mutedgray"><span>Pemasukan Bersih</span><span
                                            class="text-emerald-400 font-mono">+Rp 45.300.000</span></div>
                                    <div class="flex justify-between text-mutedgray"><span>Pengeluaran Bahan</span><span
                                            class="text-red-400 font-mono">-Rp 18.200.000</span></div>
                                    <div class="flex justify-between text-mutedgray"><span>Gaji &
                                            Operasional</span><span class="text-red-400 font-mono">-Rp 8.000.000</span>
                                    </div>
                                    <div
                                        class="flex justify-between text-lighttext font-bold pt-1 border-t border-white/5">
                                        <span>Keuntungan Bersih (Profit)</span><span
                                            class="text-accentcyan font-mono">Rp 19.100.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Visual Mockup -->
                    <div class="lg:col-span-6 order-last lg:order-first flex justify-center perspective-3d">
                        <div class="w-72 h-[350px] bg-zinc-900 border-[6px] border-zinc-800 rounded-[30px] shadow-2xl relative overflow-hidden"
                            style="transform: rotateY(15deg) rotateX(10deg);">
                            <div
                                class="absolute inset-0 bg-[#0A0A0F] p-4 pt-6 flex flex-col justify-between text-[9px]">
                                <div
                                    class="w-20 h-4 bg-zinc-800 rounded-b-lg mx-auto absolute top-0 left-1/2 transform -translate-x-1/2">
                                </div>
                                <div class="bg-white/5 p-3 rounded-xl border border-white/5 mt-4 space-y-1">
                                    <div class="flex justify-between items-center">
                                        <span class="font-bold text-emerald-400">INXDVI BOT</span>
                                        <span class="text-[7px] text-mutedgray">21:00</span>
                                    </div>
                                    <p class="text-lighttext font-mono text-[8px] leading-tight">
                                        Halo Bos! Laporan Toko Kopi Senja Cabang Malang Hari Ini:<br>
                                        • Omzet: Rp 5.200.000<br>
                                        • Transaksi: 145 Pcs<br>
                                        • Cash: Rp 3.000.000<br>
                                        • QRIS: Rp 2.200.000
                                    </p>
                                </div>
                                <div
                                    class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 p-2 rounded-lg text-center text-[8px] mt-auto">
                                    💬 Dikirim otomatis ke WhatsApp owner tiap malam!
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-mono text-accentcyan block">FITUR 04 / PANTAU DARI HP</span>
                        <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext" data-i18n="sol_4_title">
                            Pantau Bisnis Kapan Saja</h3>
                        <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="sol_4_desc">
                            Dashboard mobile-first memudahkan Anda memantau seluruh toko dari HP secara real-time.
                            Laporan otomatis langsung dikirim ke WhatsApp pribadi Anda setiap hari saat toko tutup.
                        </p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-mono text-primarypurple block">FITUR 05 / ASISTEN AI WHATSAPP</span>
                        <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext" data-i18n="sol_5_title">
                            Auto-Reply Asisten AI Cerdas</h3>
                        <p class="text-xs md:text-sm text-mutedgray leading-relaxed font-light" data-i18n="sol_5_desc">
                            Kurangi beban melayani pertanyaan pelanggan di chat. Asisten AI kami membalas pesan di WA/IG
                            otomatis 24 jam nonstop, bahkan merekomendasikan produk berdasarkan riwayat belanja mereka.
                        </p>
                    </div>
                    <!-- Visual Mockup -->
                    <div class="lg:col-span-6 flex justify-center perspective-3d">
                        <div class="w-72 h-[350px] bg-zinc-900 border-[6px] border-zinc-800 rounded-[30px] shadow-2xl relative overflow-hidden"
                            style="transform: rotateY(-15deg) rotateX(10deg);">
                            <div
                                class="absolute inset-0 bg-[#0A0A0F] p-4 pt-6 flex flex-col justify-between text-[9px]">
                                <div
                                    class="w-20 h-4 bg-zinc-800 rounded-b-lg mx-auto absolute top-0 left-1/2 transform -translate-x-1/2">
                                </div>
                                <div class="space-y-3 pt-4">
                                    <div
                                        class="bg-white/5 p-2.5 rounded-xl text-left max-w-[85%] border border-white/5">
                                        <p class="text-lighttext font-light text-[8px]">Customer: Kak, apakah kopi susu
                                            gula aren ready hari ini?</p>
                                    </div>
                                    <div
                                        class="bg-primarypurple/20 p-2.5 rounded-xl text-left max-w-[85%] ml-auto border border-primarypurple/20">
                                        <p class="text-accentcyan font-bold text-[8px]">AI Assistant: Ready kak! Mau
                                            diorder via kurir instan? Ada promo diskon 10% untuk Kakak hari ini 😊</p>
                                    </div>
                                </div>
                                <div
                                    class="bg-primarypurple text-white p-2 rounded-lg text-center text-[8px] mt-auto font-bold animate-pulse">
                                    🤖 AI membalas otomatis dalam 1 detik!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table: Manual VS Sistem INXDVI -->
            <div class="mt-36">
                <h3 class="text-2xl font-display font-bold text-lighttext text-center mb-12" data-i18n="comp_title">
                    Manual VS Sistem INXDVI</h3>
                <div class="overflow-x-auto rounded-3xl border border-white/5 bg-white/[0.01]">
                    <table class="w-full border-collapse text-left text-xs md:text-sm">
                        <thead>
                            <tr class="border-b border-white/5 bg-white/[0.02]">
                                <th class="p-5 font-bold text-lighttext" data-i18n="comp_th_feature">Fitur & Parameter
                                </th>
                                <th class="p-5 font-bold text-red-400" data-i18n="comp_th_manual">Sistem Manual Lama
                                </th>
                                <th class="p-5 font-bold text-accentcyan" data-i18n="comp_th_inxdvi">Sistem POS INXDVI
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <tr>
                                <td class="p-5 font-semibold text-lighttext" data-i18n="comp_p1">Kecepatan Transaksi
                                </td>
                                <td class="p-5 text-mutedgray" data-i18n="comp_p1_m">Lambat, catat nota kertas (1-2
                                    menit)</td>
                                <td class="p-5 text-accentcyan font-semibold" data-i18n="comp_p1_i">Instan, klik barcode
                                    scanner (3 detik)</td>
                            </tr>
                            <tr>
                                <td class="p-5 font-semibold text-lighttext" data-i18n="comp_p2">Keakuratan Stok</td>
                                <td class="p-5 text-mutedgray" data-i18n="comp_p2_m">Sering selisih & hilang tanpa jejak
                                </td>
                                <td class="p-5 text-accentcyan font-semibold" data-i18n="comp_p2_i">Akurat 100%
                                    tersinkron otomatis</td>
                            </tr>
                            <tr>
                                <td class="p-5 font-semibold text-lighttext" data-i18n="comp_p3">Pemantauan Jarak Jauh
                                </td>
                                <td class="p-5 text-mutedgray" data-i18n="comp_p3_m">Harus di toko terus, tidak bisa
                                    liburan</td>
                                <td class="p-5 text-accentcyan font-semibold" data-i18n="comp_p3_i">Kapan saja & di mana
                                    saja dari HP</td>
                            </tr>
                            <tr>
                                <td class="p-5 font-semibold text-lighttext" data-i18n="comp_p4">Kecepatan Rekap Laporan
                                </td>
                                <td class="p-5 text-mutedgray" data-i18n="comp_p4_m">Begadang rekap nota berjam-jam tiap
                                    malam</td>
                                <td class="p-5 text-accentcyan font-semibold" data-i18n="comp_p4_i">Otomatis siap dibaca
                                    sekali klik</td>
                            </tr>
                            <tr>
                                <td class="p-5 font-semibold text-lighttext" data-i18n="comp_p5">Biaya Admin &
                                    Operasional</td>
                                <td class="p-5 text-mutedgray" data-i18n="comp_p5_m">Gaji admin mahal + risiko human
                                    error</td>
                                <td class="p-5 text-accentcyan font-semibold" data-i18n="comp_p5_i">Sangat terjangkau
                                    tanpa THR & cuti</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. Section: Testimoni -->
    <section id="testimoni" class="relative py-28 bg-[#0B0B12] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-mono uppercase tracking-widest text-primarypurple block"
                    data-i18n="sec_testi_sub">/// KATA KLIEN KAMI</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                    data-i18n="sec_testi_title">Mereka Sudah Buktikan Hasilnya</h2>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_testi_desc">Dengarkan kisah
                    sukses langsung dari pemilik bisnis yang telah bertransformasi.</p>
            </div>

            <!-- Video Testimonials (Grid 2 video) -->
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16"> -->
            <!-- Video 1 -->
            <!-- <div class="relative h-64 rounded-3xl overflow-hidden border border-white/5 group shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=600"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        alt="">
                    <div class="absolute inset-0 bg-black/60 flex flex-col justify-between p-6">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 bg-white/10 rounded-full text-[10px] font-mono text-lighttext">PLAY
                                VIDEO</span>
                            <div class="text-yellow-400 text-xs">⭐⭐⭐⭐⭐</div>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-lighttext mb-1">H. Ahmad — Toko Barokah</p>
                            <p class="text-xs text-mutedgray">"Stok opname ribuan item kelontong selesai 5x lebih
                                cepat."</p>
                        </div>
                    </div>
                    <button
                        onclick="openVideoModal('https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761')"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-primarypurple text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-play text-xl ml-1"></i>
                    </button>
                </div> -->

            <!-- Video 2 -->
            <!-- <div class="relative h-64 rounded-3xl overflow-hidden border border-white/5 group shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=600"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        alt="">
                    <div class="absolute inset-0 bg-black/60 flex flex-col justify-between p-6">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 bg-white/10 rounded-full text-[10px] font-mono text-lighttext">PLAY
                                VIDEO</span>
                            <div class="text-yellow-400 text-xs">⭐⭐⭐⭐⭐</div>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-lighttext mb-1">Diana Lestari — Apotek Sehat</p>
                            <p class="text-xs text-mutedgray">"Karyawan baru langsung lancar pakai kasir dalam 1 hari."
                            </p>
                        </div>
                    </div>
                    <button
                        onclick="openVideoModal('https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761')"
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-primarypurple text-white flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-play text-xl ml-1"></i>
                    </button>
                </div> -->
            <!-- </div> -->

            <!-- Swiper Carousel Slider for Testimonials -->
            <div class="swiper testimonials-slider mb-20">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testi)
                        <div class="swiper-slide p-8 glass-card border border-white/5 flex flex-col justify-between h-72">
                            <div>
                                <div class="flex justify-between items-center mb-6">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ $testi->photo_url ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150' }}"
                                            class="w-10 h-10 rounded-full object-cover border border-white/10" alt="">
                                        <div>
                                            <p class="text-sm font-bold text-lighttext">{{ $testi->client_name }}</p>
                                            <p class="text-[10px] text-mutedgray">{{ $testi->position }}
                                                {{ $testi->company }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-yellow-400 text-xs">
                                        @for($i = 0; $i < $testi->rating; $i++)
                                            ⭐
                                        @endfor
                                    </div>
                                </div>
                                <p class="text-xs md:text-sm text-mutedgray font-light italic leading-relaxed">
                                    "{{ $testi->quote }}"
                                </p>
                            </div>
                            <span class="text-[9px] font-mono text-accentcyan uppercase tracking-wider">///
                                {{ $testi->industry ?? 'UMKM' }}</span>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination mt-8 relative"></div>
            </div>

            <!-- Stats counter strip -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-white/5 pt-12 text-center">
                @foreach($siteStats as $key => $stat)
                    <div class="space-y-1">
                        <p class="text-3xl md:text-4xl font-display font-bold text-accentcyan font-mono">
                            {{ $stat['value'] }}
                        </p>
                        <p class="text-xs text-mutedgray uppercase tracking-widest font-mono">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Client Logo Marquee (Scrolling infinite loop) -->
            <div class="mt-24 overflow-hidden relative w-full border-t border-b border-white/5 py-8">
                <div
                    class="absolute left-0 top-0 h-full w-20 bg-gradient-to-r from-[#0B0B12] to-transparent z-10 pointer-events-none">
                </div>
                <div
                    class="absolute right-0 top-0 h-full w-20 bg-gradient-to-l from-[#0B0B12] to-transparent z-10 pointer-events-none">
                </div>

                <div class="animate-marquee gap-12 items-center">
                    <!-- Set 1 -->
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">WARKOP
                        SENJA</span>
                    <span class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">TOKO
                        BAROKAH</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">BAKSO
                        MODERN</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">APOTEK
                        SEHAT</span>
                    <span class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">ROTI
                        LEZAT</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">BARBERBOS</span>
                    <!-- Set 2 (duplicate) -->
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">WARKOP
                        SENJA</span>
                    <span class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">TOKO
                        BAROKAH</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">BAKSO
                        MODERN</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">APOTEK
                        SEHAT</span>
                    <span class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">ROTI
                        LEZAT</span>
                    <span
                        class="text-mutedgray font-display font-semibold tracking-widest text-lg opacity-40 mx-4">BARBERBOS</span>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. Section: Penawaran & Paket -->
    <section id="penawaran" class="relative py-28 bg-darkbg border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block"
                    data-i18n="sec_pricing_sub">/// PILIH INVESTASI ANDA</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                    data-i18n="sec_pricing_title">Investasi Kecil, Hasil Besar</h2>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_pricing_desc">Semua paket sudah
                    include training, garansi error, dan support WhatsApp.</p>

                <!-- Toggle Billing (Bulanan / Tahunan) -->
                <div class="flex items-center justify-center gap-4 pt-6">
                    <span class="text-xs font-semibold text-lighttext">Bulanan</span>
                    <button id="billing-toggle"
                        class="w-14 h-8 rounded-full bg-white/10 p-1 flex items-center transition-colors duration-300 focus:outline-none">
                        <div id="billing-dot"
                            class="w-6 h-6 rounded-full bg-accentcyan transition-transform duration-300"></div>
                    </button>
                    <span class="text-xs font-semibold text-lighttext flex items-center gap-1.5">
                        Tahunan
                        <span
                            class="px-2 py-0.5 bg-accentcyan/20 text-accentcyan border border-accentcyan/30 rounded-full text-[9px] font-mono">DISKON
                            20%</span>
                    </span>
                </div>
            </div>

            <!-- Pricing Cards (3 packages) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mb-24">
                @foreach($packages as $pkg)
                    <div
                        class="p-8 rounded-3xl flex flex-col justify-between min-h-[500px] transition-all duration-400 relative {{ $pkg->is_popular ? 'bg-gradient-to-b from-[#161224] to-[#0A0A0F] border-2 border-primarypurple shadow-[0_0_35px_rgba(124,58,237,0.15)] scale-[1.03]' : 'bg-white/[0.01] border border-white/5' }}">

                        @if($pkg->is_popular)
                            <span
                                class="absolute top-0 right-8 transform -translate-y-1/2 px-4 py-1 bg-primarypurple text-white text-[9px] font-bold uppercase rounded-full tracking-wider font-mono">PALING
                                POPULER ⭐</span>
                        @endif

                        <div class="space-y-6">
                            <div>
                                <span class="text-[10px] font-mono text-accentcyan block uppercase tracking-wider">/// PAKET
                                    {{ $pkg->name }}</span>
                                <h3 class="text-2xl font-display font-bold text-lighttext mt-1">{{ $pkg->name }}</h3>
                                <p class="text-xs text-mutedgray mt-1 font-light">{{ $pkg->tagline }}</p>
                            </div>

                            <!-- Price display -->
                            <div class="py-2">
                                @if($pkg->is_custom)
                                    <p class="text-3xl font-display font-bold text-lighttext">Hubungi Kami</p>
                                    <p class="text-xs text-mutedgray mt-1">Custom fitur & integrasi</p>
                                @else
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-xs text-mutedgray">Rp</span>
                                        <span class="text-4xl font-display font-bold text-lighttext pricing-price"
                                            data-monthly="{{ number_format($pkg->price_monthly, 0, ',', '.') }}"
                                            data-yearly="{{ number_format($pkg->price_yearly / 12, 0, ',', '.') }}">
                                            {{ number_format($pkg->price_monthly, 0, ',', '.') }}
                                        </span>
                                        <span class="text-xs text-mutedgray">/bln</span>
                                    </div>
                                    <p class="text-[10px] text-accentcyan font-mono mt-1.5 billing-period-note hidden">Ditagih
                                        tahunan (Total: Rp <span
                                            class="yearly-total-display">{{ number_format($pkg->price_yearly, 0, ',', '.') }}</span>)
                                    </p>
                                @endif
                            </div>

                            <!-- Feature List -->
                            <ul class="space-y-3 pt-4 border-t border-white/5 text-xs text-mutedgray">
                                @foreach($pkg->features as $feat)
                                    <li class="flex items-center gap-3">
                                        @if($feat->is_included)
                                            <i class="fa-solid fa-check text-emerald-400 text-[10px]"></i>
                                            <span class="text-lighttext font-light">{{ $feat->feature }}</span>
                                        @else
                                            <i class="fa-solid fa-xmark text-white/20 text-[10px]"></i>
                                            <span class="text-white/20 font-light line-through">{{ $feat->feature }}</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- CTA Button -->
                        <div class="pt-8">
                            @if($pkg->is_custom)
                                <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}?text=Halo+INXDVI,+saya+tertarik+dengan+paket+Enterprise"
                                    class="block w-full py-4 text-center text-xs font-bold font-display rounded-2xl border border-white/10 hover:border-white/20 bg-white/5 hover:bg-white/10 text-lighttext transition-all">
                                    Konsultasi Custom
                                </a>
                            @else
                                <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}?text=Halo+INXDVI,+saya+mau+order+paket+{{ $pkg->name }}"
                                    class="block w-full py-4 text-center text-xs font-bold font-display rounded-2xl {{ $pkg->is_popular ? 'bg-gradient-to-r from-primarypurple to-accentcyan text-white shadow-lg shadow-primarypurple/25' : 'border border-white/10 hover:border-white/20 bg-white/5 hover:bg-white/10 text-lighttext' }} transition-all">
                                    Mulai Sekarang
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Guarantee strip -->
            <div
                class="flex flex-wrap justify-center gap-6 md:gap-12 border-t border-b border-white/5 py-6 text-xs text-mutedgray font-mono">
                <span>🔒 Garansi Uang Kembali 30 Hari</span>
                <span>🛠️ Setup Awal Gratis</span>
                <span>📞 Support WhatsApp 7 Hari/Minggu</span>
            </div>

            <!-- FAQ Accordion -->
            <div class="mt-36 max-w-4xl mx-auto">
                <div class="text-center space-y-4 mb-16">
                    <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block">/// FAQ</span>
                    <h3 class="text-2xl md:text-3xl font-display font-bold text-lighttext">Pertanyaan Umum</h3>
                </div>

                <div class="space-y-4">
                    @foreach($faqs as $index => $faq)
                        <div
                            class="border border-white/5 bg-white/[0.01] rounded-2xl overflow-hidden transition-all duration-300 FAQ-container">
                            <button onclick="toggleFAQ({{ $index }})"
                                class="w-full p-6 text-left flex justify-between items-center text-lighttext font-bold text-xs md:text-sm focus:outline-none">
                                <span>{{ $faq->question }}</span>
                                <i
                                    class="fa-solid fa-chevron-down text-xs text-accentcyan transition-transform duration-300 faq-icon-{{ $index }}"></i>
                            </button>
                            <div class="max-h-0 overflow-hidden transition-all duration-300 faq-answer-{{ $index }}">
                                <p
                                    class="p-6 pt-0 text-xs md:text-sm text-mutedgray font-light leading-relaxed border-t border-white/5">
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- 6. ROI Calculator Section -->
    <section id="calculator" class="relative py-28 bg-[#0B0B12] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Left: Sliders and results -->
                <div class="lg:col-span-7 space-y-8">
                    <div>
                        <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block"
                            data-i18n="sec_roi_sub">/// HITUNG-HITUNGAN CUAN</span>
                        <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext mt-2 leading-none"
                            data-i18n="sec_roi_title">Lebih Hemat Dari Gaji Karyawan</h2>
                        <p class="text-sm md:text-base text-mutedgray font-light mt-4" data-i18n="sec_roi_desc">
                            Bandingkan biaya menggaji staf admin manual versus investasi sistem otomatis.</p>
                    </div>

                    <!-- Input controls -->
                    <div class="p-8 glass-card border border-white/5 space-y-6">
                        <!-- Slider 1 -->
                        <div class="space-y-3">
                            <div class="flex justify-between text-xs font-semibold text-lighttext">
                                <span data-i18n="calc_staff_label">Jumlah Karyawan Admin</span>
                                <span class="text-accentcyan font-mono font-bold"><span id="calc-staff-val">2</span>
                                    Orang</span>
                            </div>
                            <input type="range" id="calc-staff" min="1" max="10" value="2"
                                class="w-full h-1.5 bg-white/10 rounded-lg appearance-none cursor-pointer accent-accentcyan">
                        </div>

                        <!-- Slider 2 -->
                        <div class="space-y-3">
                            <div class="flex justify-between text-xs font-semibold text-lighttext">
                                <span data-i18n="calc_salary_label">Gaji Per Karyawan (Bulanan)</span>
                                <span class="text-accentcyan font-mono font-bold">Rp <span id="calc-salary-val">4</span>
                                    Juta</span>
                            </div>
                            <input type="range" id="calc-salary" min="2" max="10" value="4"
                                class="w-full h-1.5 bg-white/10 rounded-lg appearance-none cursor-pointer accent-accentcyan">
                        </div>
                    </div>

                    <!-- Comparison display -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                        <div class="p-6 bg-white/[0.02] border border-white/5 rounded-2xl">
                            <p class="text-[10px] text-mutedgray uppercase tracking-widest font-mono">Cara Manual</p>
                            <p class="text-xl md:text-2xl font-display font-bold text-red-400 mt-2 font-mono"
                                id="calc-manual-total">Rp 96 Juta</p>
                            <p class="text-[9px] text-mutedgray mt-1">Gaji admin setahun</p>
                        </div>
                        <div class="p-6 bg-white/[0.02] border border-white/5 rounded-2xl">
                            <p class="text-[10px] text-mutedgray uppercase tracking-widest font-mono">Sistem INXDVI</p>
                            <p class="text-xl md:text-2xl font-display font-bold text-accentcyan mt-2 font-mono"
                                id="calc-system-total">Rp 5 Juta</p>
                            <p class="text-[9px] text-mutedgray mt-1">Langganan setahun</p>
                        </div>
                        <div class="p-6 bg-gradient-to-r from-primarypurple to-accentcyan rounded-2xl text-white">
                            <p class="text-[10px] text-white/70 uppercase tracking-widest font-mono">Uang Dihemat</p>
                            <p class="text-xl md:text-2xl font-display font-bold text-white mt-2 font-mono"
                                id="calc-saved-total">Rp 91 Juta</p>
                            <p class="text-[9px] text-white/70 mt-1">Bisa dialihkan ke modal</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Chart graphic display -->
                <div class="lg:col-span-5 h-[350px] p-6 glass-card border border-white/5">
                    <canvas id="roi-chart" class="w-full h-full"></canvas>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. How It Works (Proses) Section -->
    <section id="proses" class="relative py-28 bg-[#09090E] border-t border-white/5 overflow-hidden">
        <!-- Background light rays or glows -->
        <div
            class="absolute top-1/2 left-1/4 -translate-y-1/2 w-96 h-96 bg-primarypurple/5 rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 right-1/4 -translate-y-1/2 w-96 h-96 bg-accentcyan/5 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block"
                    data-i18n="sec_proses_sub">/// PROSES SETUP</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                    data-i18n="sec_proses_title">Alur Kerja Cepat & Gampang</h2>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_proses_desc">Estimasi setup
                    selesai dalam 3-5 hari kerja saja.</p>
            </div>

            <!-- Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">

                <!-- Connecting Line (Desktop Only) -->
                <div
                    class="hidden md:block absolute top-[50px] left-[10%] right-[10%] h-[1px] bg-gradient-to-r from-primarypurple/40 via-accentcyan/40 to-primarypurple/40 z-0">
                </div>

                <!-- Step 1 -->
                <div
                    class="glass-card p-8 rounded-3xl relative flex flex-col justify-between min-h-[280px] group hover:border-primarypurple/30 transition-all duration-300">
                    <div class="space-y-6">
                        <!-- Header: Icon & Glowing Step number -->
                        <div class="flex justify-between items-center relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primarypurple/10 border border-primarypurple/20 flex items-center justify-center text-primarypurple group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-comments text-2xl"></i>
                            </div>
                            <span
                                class="text-5xl font-black font-display text-white/5 group-hover:text-primarypurple/10 transition-colors duration-300">01</span>
                        </div>
                        <!-- Content -->
                        <div class="space-y-2 text-left">
                            <h3 class="text-lg font-bold text-lighttext group-hover:text-primarypurple transition-colors"
                                data-i18n="step_1_title">Konsultasi Kebutuhan</h3>
                            <p class="text-xs md:text-sm text-mutedgray font-light leading-relaxed"
                                data-i18n="step_1_desc">
                                Ceritakan alur bisnis Anda dan masalah yang sering dihadapi, kami analisis dan siapkan
                                konsepnya.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="glass-card p-8 rounded-3xl relative flex flex-col justify-between min-h-[280px] group hover:border-accentcyan/30 transition-all duration-300">
                    <div class="space-y-6">
                        <!-- Header: Icon & Glowing Step number -->
                        <div class="flex justify-between items-center relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-accentcyan/10 border border-accentcyan/20 flex items-center justify-center text-accentcyan group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-laptop-code text-2xl"></i>
                            </div>
                            <span
                                class="text-5xl font-black font-display text-white/5 group-hover:text-accentcyan/10 transition-colors duration-300">02</span>
                        </div>
                        <!-- Content -->
                        <div class="space-y-2 text-left">
                            <h3 class="text-lg font-bold text-lighttext group-hover:text-accentcyan transition-colors"
                                data-i18n="step_2_title">Proses Pengerjaan</h3>
                            <p class="text-xs md:text-sm text-mutedgray font-light leading-relaxed"
                                data-i18n="step_2_desc">
                                Tim developer kami mengonfigurasi database, backend, POS, and integrasi WhatsApp API
                                untuk toko Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="glass-card p-8 rounded-3xl relative flex flex-col justify-between min-h-[280px] group hover:border-primarypurple/30 transition-all duration-300">
                    <div class="space-y-6">
                        <!-- Header: Icon & Glowing Step number -->
                        <div class="flex justify-between items-center relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primarypurple/10 border border-primarypurple/20 flex items-center justify-center text-primarypurple group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-chalkboard-user text-2xl"></i>
                            </div>
                            <span
                                class="text-5xl font-black font-display text-white/5 group-hover:text-primarypurple/10 transition-colors duration-300">03</span>
                        </div>
                        <!-- Content -->
                        <div class="space-y-2 text-left">
                            <h3 class="text-lg font-bold text-lighttext group-hover:text-primarypurple transition-colors"
                                data-i18n="step_3_title">Training & Pendampingan</h3>
                            <p class="text-xs md:text-sm text-mutedgray font-light leading-relaxed"
                                data-i18n="step_3_desc">
                                Kami ajari Anda dan karyawan cara menginput data, kasir, dan melihat laporan keuangan
                                sampai mahir.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div
                    class="glass-card p-8 rounded-3xl relative flex flex-col justify-between min-h-[280px] group hover:border-accentcyan/30 transition-all duration-300">
                    <div class="space-y-6">
                        <!-- Header: Icon & Glowing Step number -->
                        <div class="flex justify-between items-center relative z-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-accentcyan/10 border border-accentcyan/20 flex items-center justify-center text-accentcyan group-hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-rocket text-2xl"></i>
                            </div>
                            <span
                                class="text-5xl font-black font-display text-white/5 group-hover:text-accentcyan/10 transition-colors duration-300">04</span>
                        </div>
                        <!-- Content -->
                        <div class="space-y-2 text-left">
                            <h3 class="text-lg font-bold text-lighttext group-hover:text-accentcyan transition-colors"
                                data-i18n="step_4_title">Serah Terima & Live</h3>
                            <p class="text-xs md:text-sm text-mutedgray font-light leading-relaxed"
                                data-i18n="step_4_desc">
                                Sistem live dan siap digunakan. Garansi perbaikan error gratis selamanya dan support
                                WhatsApp 24 jam.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 8. Section: Portfolio / Case Study -->
    <section id="portfolio" class="relative py-28 bg-[#0B0B12] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-6 mb-16">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block">/// PORTFOLIO</span>
                    <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext mt-2 leading-none">Kisah
                        Sukses Klien Kami</h2>
                </div>

                <!-- Category Filter Buttons -->
                <div class="flex flex-wrap gap-2">
                    <button onclick="filterPortfolio('semua')"
                        class="px-4 py-2 rounded-full border border-white/10 hover:border-white/20 bg-white/5 text-xs text-lighttext font-semibold hover:bg-white/10 transition-all filter-btn active-filter-btn"
                        id="filter-semua">Semua</button>
                    <button onclick="filterPortfolio('Retail')"
                        class="px-4 py-2 rounded-full border border-white/10 hover:border-white/20 bg-white/5 text-xs text-lighttext font-semibold hover:bg-white/10 transition-all filter-btn"
                        id="filter-Retail">Retail</button>
                    <button onclick="filterPortfolio('Kuliner')"
                        class="px-4 py-2 rounded-full border border-white/10 hover:border-white/20 bg-white/5 text-xs text-lighttext font-semibold hover:bg-white/10 transition-all filter-btn"
                        id="filter-Kuliner">Kuliner</button>
                    <button onclick="filterPortfolio('Jasa')"
                        class="px-4 py-2 rounded-full border border-white/10 hover:border-white/20 bg-white/5 text-xs text-lighttext font-semibold hover:bg-white/10 transition-all filter-btn"
                        id="filter-Jasa">Jasa</button>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($portfolios as $port)
                                <div class="glass-card overflow-hidden group shadow-2xl relative flex flex-col justify-between h-[400px] portfolio-item portfolio-cat-{{ $port->category }}"
                                    onclick='openPortfolioModal({!! json_encode([
                        "title" => $port->title,
                        "client" => $port->client_name ?? "Internal Project",
                        "category" => $port->category,
                        "problem" => $port->challenge ?? $port->problem_description,
                        "solution" => $port->solution ?? $port->solution_description,
                        "result" => $port->result_metric ?? $port->result_description,
                        "image" => $port->thumbnail_url ?? $port->image_path
                    ]) !!})'>
                                    <!-- Image -->
                                    <div class="h-48 overflow-hidden relative">
                                        <img src="{{ $port->thumbnail_url ?? $port->image_path }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                            alt="">
                                        <div class="absolute inset-0 bg-gradient-to-t from-darkbg to-transparent"></div>
                                        <span
                                            class="absolute top-4 left-4 px-2.5 py-1 bg-primarypurple text-white text-[8px] font-bold uppercase rounded font-mono">{{ $port->category }}</span>
                                    </div>

                                    <!-- Content -->
                                    <div class="p-6 flex-1 flex flex-col justify-between">
                                        <div class="space-y-2">
                                            <p class="text-[9px] font-mono text-accentcyan uppercase tracking-wider">Client:
                                                {{ $port->client_name }}
                                            </p>
                                            <h3
                                                class="text-md font-bold text-lighttext group-hover:text-accentcyan transition-colors line-clamp-2">
                                                {{ $port->title }}
                                            </h3>
                                            <p class="text-xs text-mutedgray line-clamp-3 font-light leading-relaxed">
                                                {{ $port->description }}
                                            </p>
                                        </div>

                                        <!-- Metric Highlight -->
                                        <div class="mt-4 pt-4 border-t border-white/5 flex justify-between items-center text-xs">
                                            <span class="font-bold text-emerald-400 font-mono">{{ $port->result_metric }}</span>
                                            <span
                                                class="text-[9px] font-mono text-mutedgray uppercase hover:text-accentcyan transition-colors">DETAIL
                                                &rarr;</span>
                                        </div>
                                    </div>
                                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- 8.5. Section: Live Demo Aplikasi -->
    @if(isset($appDemos) && $appDemos->isNotEmpty())
        <section id="demo-aplikasi" class="relative py-28 bg-[#0A0A0F] border-t border-white/5">
            <!-- Texture and overlay noise -->
            <div class="noise-overlay"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">

                <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                    <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block"
                        data-i18n="sec_demo_sub">/// DEMO APLIKASI</span>
                    <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext leading-none"
                        data-i18n="sec_demo_title">Cobain Langsung Demo Aplikasi Kami</h2>
                    <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_demo_desc">Eksplorasi dashboard
                        interaktif dan fitur-fitur unggulan yang siap diimplementasikan untuk bisnis Anda.</p>
                </div>

                <!-- Demos Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($appDemos as $demo)
                        <div
                            class="glass-card overflow-hidden group shadow-2xl relative flex flex-col justify-between h-[450px]">
                            <!-- Thumbnail / Image -->
                            <div class="h-48 overflow-hidden relative">
                                @php
                                    $demoImageUrl = $demo->image_path;
                                    if (!$demoImageUrl) {
                                        $demoImageUrl = 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=400';
                                    } else if (!Str::startsWith($demoImageUrl, 'http')) {
                                        $demoImageUrl = asset('storage/' . $demoImageUrl);
                                    }
                                @endphp
                                <img src="{{ $demoImageUrl }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="{{ $demo->title }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-darkbg/80 to-transparent"></div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div class="space-y-3 text-left">
                                    <h3 class="text-lg font-bold text-lighttext group-hover:text-accentcyan transition-colors">
                                        {{ $demo->title }}
                                    </h3>
                                    <p class="text-xs md:text-sm text-mutedgray line-clamp-4 font-light leading-relaxed">
                                        {{ $demo->description }}
                                    </p>
                                </div>

                                <!-- Action Button to Demo URL -->
                                <div class="mt-6 pt-4 border-t border-white/5">
                                    <a href="{{ $demo->url }}" target="_blank"
                                        class="w-full py-3 bg-gradient-to-r from-primarypurple to-accentcyan text-white text-xs font-bold rounded-xl hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all transform hover:scale-[1.02] flex items-center justify-center gap-2 group-hover:from-accentcyan group-hover:to-primarypurple">
                                        <span data-i18n="btn_view_demo">Lihat Demo Live</span>
                                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

    <!-- 9. Blog / Tips Section -->
    <section id="blog" class="relative py-28 bg-darkbg border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block">/// TIPS
                        BISNIS</span>
                    <h2 class="text-3xl md:text-5xl font-display font-bold text-lighttext mt-2 leading-none">Artikel &
                        Edukasi Bisnis</h2>
                </div>
                <a href="/blog"
                    class="text-xs font-mono text-mutedgray hover:text-accentcyan flex items-center gap-2 group transition-colors">
                    <span>LIHAT SEMUA ARTIKEL</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Blog Grid (3 articles) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($articles as $art)
                    <div
                        class="glass-card overflow-hidden group shadow-2xl relative flex flex-col justify-between h-[450px]">
                        <!-- Image -->
                        <div class="h-48 overflow-hidden relative">
                            <img src="{{ $art->image_path ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400' }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                alt="">
                            <div class="absolute inset-0 bg-gradient-to-t from-darkbg to-transparent"></div>
                            <span
                                class="absolute top-4 left-4 px-2.5 py-1 bg-accentcyan text-black text-[8px] font-bold uppercase rounded font-mono">{{ $art->category }}</span>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div class="space-y-2">
                                <div class="flex justify-between items-center text-[9px] font-mono text-mutedgray">
                                    <span>Oleh: {{ $art->author_name }}</span>
                                    <span>⏱️ {{ $art->read_time_min }} Menit Baca</span>
                                </div>
                                <h3
                                    class="text-md font-bold text-lighttext group-hover:text-accentcyan transition-colors line-clamp-2">
                                    <a href="/blog/{{ $art->slug }}">{{ $art->title }}</a>
                                </h3>
                                <p class="text-xs text-mutedgray line-clamp-3 font-light leading-relaxed">
                                    {{ $art->excerpt }}
                                </p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-white/5 text-xs">
                                <a href="/blog/{{ $art->slug }}"
                                    class="text-accentcyan font-semibold hover:underline flex items-center gap-2">
                                    <span>BACA SELENGKAPNYA</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- 10. CTA Final (Bottom) -->
    <section class="relative py-32 overflow-hidden mesh-gradient-cta border-t border-white/5">
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10 space-y-8">
            <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block">/// SIAP
                TRANFORMATIF?</span>
            <h2 class="text-4xl md:text-6xl font-display font-bold text-lighttext leading-none">Siap Buat Bisnis Anda
                Autopilot?</h2>
            <p class="text-sm md:text-base text-mutedgray font-light max-w-xl mx-auto">Mulai digitalisasi operasional
                kasir, stok, dan rekap otomatis Anda hari ini. Support WhatsApp 24 jam nonstop.</p>

            <!-- Countdown slot timer -->
            <div
                class="inline-block px-6 py-2.5 bg-primarypurple/15 border border-primarypurple/30 rounded-full text-xs font-mono text-accentcyan animate-pulse">
                ⏰ Promo konsultasi gratis terbatas: <span id="countdown-slots">3</span> slot tersisa hari ini!
            </div>

            <!-- Big WA Button -->
            <div class="pt-4 flex justify-center">
                <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}?text=Halo+INXDVI,+saya+tertarik+dengan+sistem+kasir+stok+otomatis"
                    class="px-12 py-5 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold font-display rounded-full hover:shadow-[0_0_35px_rgba(16,185,129,0.5)] transition-all transform hover:scale-[1.05] flex items-center gap-3 text-sm tracking-wider">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <span>CHAT WHATSAPP SEKARANG</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-darkbg border-t border-white/5 py-12 text-center text-xs text-mutedgray">
        <div class="max-w-7xl mx-auto px-6 space-y-6">
            <div class="flex justify-center items-center">
                <img src="/images/logo_transparent1.png" class="h-8 w-auto object-contain" alt="INXDVI Logo">
            </div>
            <p class="max-w-md mx-auto font-light leading-relaxed">Partner digital terpercaya untuk UMKM dan Bisnis
                Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.</p>
            <div class="flex justify-center gap-6 text-sm py-2">
                <a href="#" class="hover:text-accentcyan"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-accentcyan"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="hover:text-accentcyan"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p class="border-t border-white/5 pt-6">&copy; 2026 INXDVI.COM. All rights reserved. Developed with ❤️ in
                Indonesia.</p>
        </div>
    </footer>

    <!-- Video Testimonial Modal -->
    <div id="video-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden p-4">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-md" onclick="closeVideoModal()"></div>
        <div
            class="relative w-full max-w-4xl bg-[#0A0A0F]/95 border border-white/10 rounded-3xl overflow-hidden aspect-video z-10 shadow-2xl">
            <button onclick="closeVideoModal()"
                class="absolute top-4 right-4 z-20 w-8 h-8 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center transition-colors">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
            <video id="modal-video-player" class="w-full h-full object-cover" controls autoplay>
                <source src="" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- Portfolio Detail Modal -->
    <div id="portfolioModal" class="fixed inset-0 z-50 flex items-center justify-center hidden p-4 sm:p-6 md:p-10">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/80 backdrop-blur-md transition-opacity duration-300"
            onclick="closePortfolioModal()"></div>

        <!-- Modal Content Container -->
        <div
            class="relative w-full max-w-4xl bg-[#0A0A0F]/95 border border-white/10 rounded-3xl overflow-hidden shadow-2xl transition-all duration-300 transform scale-95 opacity-0 z-10 flex flex-col md:flex-row h-[90vh] md:h-auto max-h-[85vh]">
            <!-- Close Button -->
            <button onclick="closePortfolioModal()"
                class="absolute top-4 right-4 z-20 w-8 h-8 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center transition-colors">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>

            <!-- Left: Image Section -->
            <div class="w-full md:w-1/2 h-48 md:h-[450px] relative">
                <img id="modalPortImage" src="" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-darkbg to-transparent"></div>
            </div>

            <!-- Right: Content Section -->
            <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col justify-between overflow-y-auto h-[60vh] md:h-[450px]">
                <div class="space-y-6">
                    <div>
                        <!-- Category Badge -->
                        <span id="modalPortCategory"
                            class="px-2.5 py-1 bg-white/5 border border-white/10 rounded text-[9px] text-accentcyan font-mono mb-3 inline-block uppercase tracking-wider"></span>

                        <!-- Title & Client -->
                        <h3 id="modalPortTitle"
                            class="text-xl md:text-2xl font-display font-bold text-lighttext leading-tight mb-1"></h3>
                        <div id="modalPortClient" class="text-xs text-mutedgray font-mono mb-4"></div>
                    </div>

                    <!-- Project Details Staggered -->
                    <div class="space-y-6 text-xs md:text-sm text-mutedgray">
                        <!-- Problem -->
                        <div>
                            <span class="text-[9px] font-mono uppercase tracking-widest text-red-400 block mb-1">///
                                TANTANGAN (CHALLENGE)</span>
                            <p id="modalPortProblem" class="font-light leading-relaxed"></p>
                        </div>

                        <!-- Solution -->
                        <div>
                            <span class="text-[9px] font-mono uppercase tracking-widest text-accentcyan block mb-1">///
                                SOLUSI KAMI (SOLUTION)</span>
                            <p id="modalPortSolution" class="font-light leading-relaxed"></p>
                        </div>

                        <!-- Result -->
                        <div>
                            <span class="text-[9px] font-mono uppercase tracking-widest text-emerald-400 block mb-1">///
                                METRIK HASIL (RESULTS)</span>
                            <p id="modalPortResult" class="font-bold text-emerald-400 leading-relaxed"></p>
                        </div>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div class="mt-8 pt-6 border-t border-white/5 flex justify-between items-center">
                    <a href="https://wa.me/{{ $siteStats['whatsapp_number']['value'] ?? '6281234567890' }}"
                        target="_blank"
                        class="px-6 py-3 bg-gradient-to-r from-primarypurple to-accentcyan hover:opacity-95 text-white font-bold font-display rounded-full text-xs transition-all flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-sm"></i>
                        <span>KONSULTASI GRATIS</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts / Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>

    <script>
        // Preloader fadeout
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => preloader.style.display = 'none', 800);
        });

        // Custom Cursor movement
        const cursor = document.getElementById('custom-cursor');
        document.addEventListener('mousemove', e => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Cursor hover effect
        document.querySelectorAll('a, button, [onclick], input[type="range"]').forEach(item => {
            item.addEventListener('mouseenter', () => cursor.classList.add('custom-cursor-hover'));
            item.addEventListener('mouseleave', () => cursor.classList.remove('custom-cursor-hover'));
        });

        // Ambient glow follow mouse
        const glow = document.getElementById('ambient-glow');
        document.addEventListener('mousemove', e => {
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });

        // Scroll Progress indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('scroll-progress').style.width = scrolled + '%';
        });

        // Lenis Smooth Scroll
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Three.js Interactive Particle Background
        let scene, camera, renderer, starGeo, stars;
        function initThree() {
            const container = document.getElementById('canvas-container');
            if (!container) return;
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 1000);
            camera.position.z = 1;
            camera.rotation.x = Math.PI / 2;

            renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            container.appendChild(renderer.domElement);

            starGeo = new THREE.BufferGeometry();
            const starCount = 1200;
            const posArray = new Float32Array(starCount * 3);
            for (let i = 0; i < starCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 600;
            }
            starGeo.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

            let starMaterial = new THREE.PointsMaterial({
                color: 0x06B6D4,
                size: 1.5,
                transparent: true,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });

            stars = new THREE.Points(starGeo, starMaterial);
            scene.add(stars);

            animate();
        }

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', e => {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.03;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.03;
        });

        function animate() {
            requestAnimationFrame(animate);
            stars.rotation.y += 0.001;
            stars.position.x += (mouseX - stars.position.x) * 0.05;
            stars.position.y += (-mouseY - stars.position.y) * 0.05;
            renderer.render(scene, camera);
        }
        initThree();

        // Responsive resize
        window.addEventListener('resize', () => {
            if (camera && renderer) {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            }
        });

        // 3D Tilt Hover Effect
        document.querySelectorAll('.tilt-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const xc = rect.width / 2;
                const yc = rect.height / 2;
                const dx = x - xc;
                const dy = y - yc;
                card.style.transform = `perspective(1000px) rotateY(${dx / xc * 6}deg) rotateX(${-dy / yc * 6}deg) translateY(-4px)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg) translateY(0px)';
            });
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });

        // GSAP ScrollTrigger Animations
        gsap.registerPlugin(ScrollTrigger);

        // Staggered words for Hero Headline
        gsap.from(".headline-word", {
            y: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power4.out"
        });

        // Staggered card entrance on scroll
        gsap.utils.toArray("#masalah .tilt-card").forEach((card, index) => {
            gsap.from(card, {
                y: 50,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.1,
                scrollTrigger: {
                    trigger: "#masalah",
                    start: "top 80%"
                }
            });
        });

        // Swiper Testimonials Carousel
        const swiper = new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 24,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            }
        });

        // Pricing Billing Switch Toggle
        const billingToggle = document.getElementById('billing-toggle');
        const billingDot = document.getElementById('billing-dot');
        const prices = document.querySelectorAll('.pricing-price');
        const notes = document.querySelectorAll('.billing-period-note');
        let isYearly = false;

        billingToggle.addEventListener('click', () => {
            isYearly = !isYearly;
            if (isYearly) {
                billingDot.style.transform = 'translateX(24px)';
                prices.forEach(price => {
                    price.innerText = price.getAttribute('data-yearly');
                });
                notes.forEach(note => note.classList.remove('hidden'));
            } else {
                billingDot.style.transform = 'translateX(0)';
                prices.forEach(price => {
                    price.innerText = price.getAttribute('data-monthly');
                });
                notes.forEach(note => note.classList.add('hidden'));
            }
        });

        // FAQ Toggle Logic
        function toggleFAQ(index) {
            const answer = document.querySelector(`.faq-answer-${index}`);
            const icon = document.querySelector(`.faq-icon-${index}`);
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Reset all FAQs
            document.querySelectorAll('.FAQ-container div').forEach(div => {
                if (div.classList.contains(`faq-answer-${index}`)) return;
                div.style.maxHeight = '0px';
            });
            document.querySelectorAll('.FAQ-container i').forEach(chevron => {
                if (chevron.classList.contains(`faq-icon-${index}`)) return;
                chevron.classList.remove('rotate-180');
            });

            if (isOpen) {
                answer.style.maxHeight = '0px';
                icon.classList.remove('rotate-180');
            } else {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }
        }

        // Interactive ROI Calculator Logic
        const calcStaff = document.getElementById('calc-staff');
        const calcSalary = document.getElementById('calc-salary');
        const calcStaffVal = document.getElementById('calc-staff-val');
        const calcSalaryVal = document.getElementById('calc-salary-val');
        const calcManualTotal = document.getElementById('calc-manual-total');
        const calcSystemTotal = document.getElementById('calc-system-total');
        const calcSavedTotal = document.getElementById('calc-saved-total');

        let roiChart;
        function initChart() {
            const ctx = document.getElementById('roi-chart').getContext('2d');
            roiChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Cara Manual', 'Pakai Sistem'],
                    datasets: [{
                        label: 'Biaya Tahunan (Rupiah)',
                        data: [96000000, 5000000],
                        backgroundColor: [
                            'rgba(239, 68, 68, 0.6)',
                            'rgba(6, 182, 212, 0.6)'
                        ],
                        borderColor: [
                            '#ef4444',
                            '#06b6d4'
                        ],
                        borderWidth: 2,
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(255, 255, 255, 0.05)' },
                            ticks: {
                                color: '#94a3b8',
                                callback: function (val) { return 'Rp ' + (val / 1000000) + 'Jt'; }
                            }
                        },
                        x: {
                            grid: { display: false },
                            ticks: { color: '#94a3b8' }
                        }
                    },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        }
        initChart();

        function updateCalculator() {
            const staff = parseInt(calcStaff.value);
            const salary = parseInt(calcSalary.value);
            calcStaffVal.innerText = staff;
            calcSalaryVal.innerText = salary;

            const manualCost = staff * salary * 12; // Juta
            const systemCost = 5.9; // Juta (Langganan Paket Bisnis setahun)
            const saved = manualCost - systemCost;

            calcManualTotal.innerText = 'Rp ' + manualCost + ' Juta';
            calcSystemTotal.innerText = 'Rp ' + systemCost.toFixed(1) + ' Juta';
            calcSavedTotal.innerText = 'Rp ' + saved.toFixed(1) + ' Jt/Th';

            if (roiChart) {
                roiChart.data.datasets[0].data = [manualCost * 1000000, systemCost * 1000000];
                roiChart.update();
            }
        }
        calcStaff.addEventListener('input', updateCalculator);
        calcSalary.addEventListener('input', updateCalculator);
        updateCalculator();

        // Portfolio Category Filter Logic
        function filterPortfolio(category) {
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active-filter-btn', 'bg-accentcyan', 'text-black'));

            const activeBtn = document.getElementById(`filter-${category}`);
            if (activeBtn) {
                activeBtn.classList.add('bg-accentcyan', 'text-black');
            }

            document.querySelectorAll('.portfolio-item').forEach(item => {
                if (category === 'semua' || item.classList.contains(`portfolio-cat-${category}`)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
        filterPortfolio('semua');

        // Video Testimonial Modals
        function openVideoModal(url) {
            const modal = document.getElementById('video-modal');
            const player = document.getElementById('modal-video-player');
            player.src = url;
            modal.classList.remove('hidden');
        }
        function closeVideoModal() {
            const modal = document.getElementById('video-modal');
            const player = document.getElementById('modal-video-player');
            player.pause();
            player.src = '';
            modal.classList.add('hidden');
        }

        // Portfolio Detail Modals
        function openPortfolioModal(data) {
            const modal = document.getElementById('portfolioModal');
            const modalContent = modal.querySelector('.relative.w-full.max-w-4xl');

            document.getElementById('modalPortImage').src = data.image;
            document.getElementById('modalPortCategory').innerText = data.category;
            document.getElementById('modalPortTitle').innerText = data.title;
            document.getElementById('modalPortClient').innerText = 'Klien: ' + data.client;
            document.getElementById('modalPortProblem').innerText = data.problem;
            document.getElementById('modalPortSolution').innerText = data.solution;
            document.getElementById('modalPortResult').innerText = data.result;

            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closePortfolioModal() {
            const modal = document.getElementById('portfolioModal');
            const modalContent = modal.querySelector('.relative.w-full.max-w-4xl');

            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        // Localized Translations dictionary
        let currentLang = localStorage.getItem('lang') || 'id';
        const resources = {
            id: {
                nav_problem: "Masalah", nav_solusi: "Solusi", nav_testimonials: "Testimoni", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "BISNIS JADI AUTOPILOT",
                hero_desc: "Sistem kasir, stok, dan laporan otomatis — tanpa perlu jago teknologi. Pantau omzet kapan saja langsung dari HP Anda.",
                btn_start: "Konsultasi Gratis via WA", btn_demo: "Lihat Demo Langsung",
                sec_prob_sub: "/// KENALI MASALAH ANDA",
                sec_prob_title: "Masih Nyangkut di Masalah Ini?",
                sec_prob_desc: "Kebanyakan pemilik usaha lelah secara fisik dan pikiran karena operasional yang berantakan.",
                prob_1_title: "Stok Sering Selisih", prob_1_desc: "Hitung manual bikin pusing, sering ada barang hilang tanpa jejak di gudang.",
                prob_2_title: "Laporan Makan Waktu", prob_2_desc: "Rekap nota sampai tengah malam, besoknya masih salah hitung juga.",
                prob_3_title: "Gak Tau Omzet Hari Ini", prob_3_desc: "Buka-tutup toko tiap hari tapi bingung berapa keuntungan bersih sebenarnya.",
                prob_4_title: "Karyawan Susah Dikontrol", prob_4_desc: "Pas ditinggal, gak tau karyawan ngapain aja. Sering terjadi selisih kas kasir.",
                prob_5_title: "Gak Bisa Pantau Jauh", prob_5_desc: "Mau liburan atau istirahat takut, bisnis macet kalau tidak dijaga owner langsung.",
                prob_6_title: "Buang Uang untuk Admin", prob_6_desc: "Bayar gaji admin mahal-mahal, tapi kerjanya lambat, manual, dan banyak error.",
                sec_sol_sub: "/// SOLUSI KAMI", sec_sol_title: "Satu Platform, Semua Terkontrol",
                sec_sol_desc: "Kami gantikan keribetan sistem manual Anda dengan software modular pintar yang terjangkau.",
                comp_title: "Manual VS Sistem INXDVI",
                comp_th_feature: "Fitur & Parameter", comp_th_manual: "Sistem Manual Lama", comp_th_inxdvi: "Sistem POS INXDVI",
                comp_p1: "Kecepatan Transaksi", comp_p1_m: "Lambat, catat nota kertas (1-2 menit)", comp_p1_i: "Instan, klik barcode scanner (3 detik)",
                comp_p2: "Keakuratan Stok", comp_p2_m: "Sering selisih & hilang tanpa jejak", comp_p2_i: "Akurat 100% tersinkron otomatis",
                comp_p3: "Pemantauan Jarak Jauh", comp_p3_m: "Harus di toko terus, tidak bisa liburan", comp_p3_i: "Kapan saja & di mana saja dari HP",
                comp_p4: "Kecepatan Rekap Laporan", comp_p4_m: "Begadang rekap nota berjam-jam tiap malam", comp_p4_i: "Otomatis siap dibaca sekali klik",
                comp_p5: "Biaya Admin & Operasional", comp_p5_m: "Gaji admin mahal + risiko human error", comp_p5_i: "Sangat terjangkau tanpa THR & cuti",
                sec_testi_sub: "/// KATA KLIEN KAMI", sec_testi_title: "Mereka Sudah Buktikan Hasilnya",
                sec_testi_desc: "Dengarkan kisah sukses langsung dari pemilik bisnis yang telah bertransformasi.",
                sec_pricing_sub: "/// PILIH INVESTASI ANDA", sec_pricing_title: "Investasi Kecil, Hasil Besar",
                sec_pricing_desc: "Semua paket sudah include training, garansi error, dan support WhatsApp.",
                sec_roi_sub: "/// HITUNG-HITUNGAN CUAN", sec_roi_title: "Lebih Hemat Dari Gaji Karyawan",
                sec_roi_desc: "Bandingkan biaya menggaji staf admin manual versus investasi sistem otomatis.",
                calc_staff_label: "Jumlah Karyawan Admin", calc_salary_label: "Gaji Per Karyawan (Bulanan)",
                sec_demo_sub: "/// DEMO APLIKASI",
                sec_demo_title: "Cobain Langsung Demo Aplikasi Kami",
                sec_demo_desc: "Eksplorasi dashboard interaktif dan fitur-fitur unggulan yang siap diimplementasikan untuk bisnis Anda.",
                btn_view_demo: "Lihat Demo Live",
                sec_proses_sub: "/// PROSES SETUP",
                sec_proses_title: "Alur Kerja Cepat & Gampang",
                sec_proses_desc: "Estimasi setup selesai dalam 3-5 hari kerja saja.",
                step_1_title: "Konsultasi Kebutuhan",
                step_1_desc: "Ceritakan alur bisnis Anda dan masalah yang sering dihadapi, kami analisis dan siapkan konsepnya.",
                step_2_title: "Proses Pengerjaan",
                step_2_desc: "Tim developer kami mengonfigurasi database, backend, POS, and integrasi WhatsApp API untuk toko Anda.",
                step_3_title: "Training & Pendampingan",
                step_3_desc: "Kami ajari Anda dan karyawan cara menginput data, kasir, dan melihat laporan keuangan sampai mahir.",
                step_4_title: "Serah Terima & Live",
                step_4_desc: "Sistem live dan siap digunakan. Garansi perbaikan error gratis selamanya dan support WhatsApp 24 jam."
            },
            en: {
                nav_problem: "Problems", nav_solusi: "Solutions", nav_testimonials: "Testimonials", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Free Consult", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "BUSINESS ON AUTOPILOT",
                hero_desc: "Cashier, stock, and automated report system — no tech skills required. Monitor revenue anytime directly from your phone.",
                btn_start: "Free Consult via WA", btn_demo: "View Live Demo",
                sec_prob_sub: "/// IDENTIFY YOUR PROBLEMS",
                sec_prob_title: "Still Stuck with These Issues?",
                sec_prob_desc: "Most business owners are physically and mentally exhausted due to messy operations.",
                prob_1_title: "Frequent Stock Discrepancies", prob_1_desc: "Manual counting causes headaches, items frequently disappear without a trace in the warehouse.",
                prob_2_title: "Time-Consuming Reports", prob_2_desc: "Recapping receipts until midnight, and still miscalculating the next day.",
                prob_3_title: "No Clue of Today's Revenue", prob_3_desc: "Opening and closing the store daily but clueless about the actual net profit.",
                prob_4_title: "Hard to Monitor Employees", prob_4_desc: "When left alone, you don't know what employees are doing. Frequent cashier cash shortages.",
                prob_5_title: "No Remote Monitoring", prob_5_desc: "Afraid to take a vacation or rest, business stalls without the owner's direct presence.",
                prob_6_title: "Wasting Money on Admins", prob_6_desc: "Paying high salaries to admins, but work is slow, manual, and error-prone.",
                sec_sol_sub: "/// OUR SOLUTION", sec_sol_title: "One Platform, Fully Controlled",
                sec_sol_desc: "We replace your messy manual system with smart, affordable modular software.",
                comp_title: "Manual VS INXDVI System",
                comp_th_feature: "Features & Parameters", comp_th_manual: "Legacy Manual System", comp_th_inxdvi: "INXDVI POS System",
                comp_p1: "Transaction Speed", comp_p1_m: "Slow, writing paper receipts (1-2 mins)", comp_p1_i: "Instant, click barcode scanner (3 secs)",
                comp_p2: "Stock Accuracy", comp_p2_m: "Often discrepancies & lost without trace", comp_p2_i: "100% accurate, automatically synced",
                comp_p3: "Remote Monitoring", comp_p3_m: "Must stay at the store, no vacations", comp_p3_i: "Anytime & anywhere from your phone",
                comp_p4: "Report Recap Speed", comp_p4_m: "Begadang recapping bills for hours every night", comp_p4_i: "Automatically ready in one click",
                comp_p5: "Admin & Operating Costs", comp_p5_m: "Expensive admin salaries + human error risk", comp_p5_i: "Highly affordable, no bonuses & leaves required",
                sec_testi_sub: "/// CLIENT STORIES", sec_testi_title: "They Have Proven the Results",
                sec_testi_desc: "Hear success stories directly from business owners who have transformed.",
                sec_pricing_sub: "/// CHOOSE YOUR INVESTMENT", sec_pricing_title: "Small Investment, Big Results",
                sec_pricing_desc: "All packages include training, error warranty, and WhatsApp support.",
                sec_roi_sub: "/// PROFIT CALCULATION", sec_roi_title: "Cheaper Than Admin Salaries",
                sec_roi_desc: "Compare the cost of hiring manual admin staff versus investing in an automated system.",
                calc_staff_label: "Number of Admin Staff", calc_salary_label: "Salary Per Staff (Monthly)",
                sec_demo_sub: "/// APPLICATION DEMOS",
                sec_demo_title: "Try Our Live Application Demos",
                sec_demo_desc: "Explore interactive dashboards and key features ready to be implemented for your business.",
                btn_view_demo: "View Live Demo",
                sec_proses_sub: "/// SETUP PROCESS",
                sec_proses_title: "Fast & Easy Workflow",
                sec_proses_desc: "Estimated setup completed in just 3-5 working days.",
                step_1_title: "Needs Consultation",
                step_1_desc: "Tell us your business flow and daily problems, we will analyze and prepare the concept.",
                step_2_title: "Development Process",
                step_2_desc: "Our developer team configures the database, backend, POS, and WhatsApp API integration for your store.",
                step_3_title: "Training & Assistance",
                step_3_desc: "We train you and your employees how to input data, operate cashier, and read financial reports until proficient.",
                step_4_title: "Handover & Live",
                step_4_desc: "System goes live and is ready to use. Free lifetime bug fixes and 24-hour WhatsApp support."
            }
        };

        function updateLang(lang) {
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (resources[lang][key]) el.innerHTML = resources[lang][key];
            });
            document.getElementById('lang-flag').innerText = lang === 'id' ? '🇮🇩' : '🇺🇸';
            document.getElementById('lang-text').innerText = lang.toUpperCase();
            localStorage.setItem('lang', lang);
            currentLang = lang;
        }

        updateLang(currentLang);
        document.getElementById('lang-toggle').addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });
    </script>
</body>

</html>