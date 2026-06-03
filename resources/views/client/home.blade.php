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
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
                    },
                    colors: {
                        tech: {
                            bg: 'var(--bg-main)',
                            card: 'var(--bg-card)',
                            border: 'var(--border-color)',
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
            --bg-main: #f9fafb; /* gray-50 */
            --bg-card: #ffffff;
            --border-color: rgba(0, 0, 0, 0.08);
            --text-main: #0f172a; /* slate-950 */
            --text-muted: #475569; /* slate-600 */
            --accent-primary: #4f46e5;
            --glass-bg: rgba(255, 255, 255, 0.8);
            --glass-border: rgba(0, 0, 0, 0.05);
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.04), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --gradient-start: #1e1b4b; /* Indigo 950 */
            --gradient-end: #4f46e5;   /* Indigo 600 */
        }

        .dark {
            --bg-main: #030712; /* gray-950 */
            --bg-card: #0f172a; /* slate-900 */
            --border-color: rgba(255, 255, 255, 0.06);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --glass-bg: rgba(3, 7, 18, 0.7);
            --glass-border: rgba(255, 255, 255, 0.05);
            --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 8px 10px -6px rgba(0, 0, 0, 0.3);
            --gradient-start: #f8fafc;
            --gradient-end: #818cf8;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            overflow-x: hidden;
            transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Custom Spotlight Card */
        .spotlight-card {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(8px);
            box-shadow: var(--card-shadow);
        }

        .spotlight-card:hover {
            border-color: rgba(79, 70, 229, 0.4);
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(79, 70, 229, 0.1);
        }

        .dark .spotlight-card:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(79, 70, 229, 0.2);
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
            background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(79, 70, 229, 0.1), transparent 40%);
        }

        .spotlight-card:hover::before {
            opacity: 1;
        }

        /* Glass Panel Navigation */
        .glass-panel {
            backdrop-filter: blur(16px);
            background: var(--glass-bg);
            border-bottom: 1px solid var(--glass-border);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-panel.scrolled {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            background: var(--glass-bg);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
        }

        .dark .glass-panel.scrolled {
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.4);
        }

        /* Text Gradient Accent */
        .text-gradient {
            display: inline;
            background-clip: text;
            -webkit-background-clip: text;
            color: var(--gradient-end); /* Fallback */
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(135deg, var(--gradient-start) 20%, var(--gradient-end) 100%);
            transition: all 0.5s ease;
        }

        /* Scroll-Driven Reveals */
        .reveal {
            opacity: 0;
            transform: translateY(30px) scale(0.97);
            filter: blur(8px);
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
        class="fixed pointer-events-none w-[600px] h-[600px] rounded-full bg-indigo-500/10 dark:bg-indigo-500/5 opacity-20 dark:opacity-30 blur-[120px] z-0 -translate-x-1/2 -translate-y-1/2 transition-all duration-700 ease-out"
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
                    class="h-8 md:h-9 w-auto object-contain transition-transform duration-300 hover:scale-[1.03] opacity-100">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-2 bg-black/5 dark:bg-white/5 p-1 rounded-full border border-black/10 dark:border-white/10">
                <a href="#masalah"
                    class="px-4 py-2 text-xs font-bold text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white hover:bg-white dark:hover:bg-white/10 rounded-full transition-all shadow-sm dark:shadow-none">Masalah</a>
                <a href="#layanan"
                    class="px-4 py-2 text-xs font-bold text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white hover:bg-white dark:hover:bg-white/10 rounded-full transition-all shadow-sm dark:shadow-none">Solusi</a>
                <a href="#hemat"
                    class="px-4 py-2 text-xs font-bold text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white hover:bg-white dark:hover:bg-white/10 rounded-full transition-all shadow-sm dark:shadow-none">Penghematan</a>
                <a href="#portfolio"
                    class="px-4 py-2 text-xs font-bold text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white hover:bg-white dark:hover:bg-white/10 rounded-full transition-all shadow-sm dark:shadow-none">Portfolio</a>
            </div>

            <!-- Custom Controls & Call to Action -->
            <div class="flex items-center gap-3 z-50">
                <button id="theme-toggle"
                    class="h-9 w-9 rounded-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 flex items-center justify-center hover:bg-black/10 dark:hover:bg-white/10 transition-all cursor-pointer text-zinc-600 dark:text-white">
                    <i id="theme-toggle-dark-icon" class="fa-solid fa-moon hidden"></i>
                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun hidden"></i>
                </button>

                <a href="https://wa.me/628123456789"
                    class="hidden md:flex items-center gap-2 px-5 py-2.5 bg-zinc-900 dark:bg-white text-white dark:text-black text-xs font-bold rounded-lg hover:bg-zinc-800 dark:hover:bg-gray-100 transition-all hover:scale-[1.02] shadow-lg">
                    <span>Konsultasi Gratis</span>
                </a>

                <button id="mobile-menu-btn"
                    class="md:hidden w-9 h-9 flex items-center justify-center text-zinc-800 dark:text-white text-lg focus:outline-none hover:text-indigo-400 transition bg-black/5 dark:bg-white/5 rounded-lg border border-black/10 dark:border-white/10">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-white/98 dark:bg-zinc-950/98 backdrop-blur-xl border-b border-black/10 dark:border-white/10 shadow-2xl transition-all z-40">
            <div class="p-4 flex flex-col gap-2">
                <a href="#masalah"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 text-zinc-800 dark:text-white font-medium transition-colors">Masalah Anda</a>
                <a href="#layanan"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 text-zinc-800 dark:text-white font-medium transition-colors">Solusi</a>
                <a href="#hemat"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/10 text-zinc-800 dark:text-white font-medium transition-colors">Penghematan</a>
                <a href="https://wa.me/628123456789"
                    class="block w-full py-3 bg-indigo-600 text-white font-bold rounded-lg text-center hover:bg-indigo-500 transition-colors shadow-lg">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative z-10 pt-32 md:pt-48 pb-20 md:pb-28 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 md:gap-16 items-center">

            <!-- Left Info Block -->
            <div class="text-left reveal">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 text-[10px] md:text-xs font-mono mb-6 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    <span>BISNIS JADI AUTOPILOT</span>
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight text-zinc-900 dark:text-white">
                    Bisnis Jalan Otomatis <br> <span class="text-gradient">Omzet Naik Drastis</span>
                </h1>

                <p class="text-base md:text-lg text-zinc-800 dark:text-zinc-400 max-w-xl mb-10 font-medium dark:font-light leading-relaxed">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda
                    tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/628123456789"
                        class="shimmer-btn px-8 py-4 bg-indigo-600 hover:bg-indigo-700 rounded-xl w-full sm:w-auto text-center cursor-pointer text-white font-bold tracking-wide transition-all shadow-lg hover:scale-[1.01] hover:shadow-indigo-500/20">
                        <span>Konsultasi via WA</span> <i
                            class="fa-brands fa-whatsapp text-lg ml-2"></i>
                    </a>

                    <a href="#portfolio"
                        class="px-8 py-4 rounded-xl border border-zinc-300 dark:border-white/10 hover:bg-white dark:hover:bg-white/5 text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white transition-all font-bold text-xs flex items-center justify-center gap-3 w-full sm:w-auto shadow-sm">
                        <span>LIHAT HASIL KERJA</span>
                    </a>
                </div>
            </div>

            <!-- Right Visual Panel (Polished 3D Dashboard Mockup) -->
            <div class="relative perspective-[2000px] hidden md:block reveal reveal-delay-200">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] h-[70%] bg-indigo-600/5 dark:bg-indigo-600/10 blur-[120px] rounded-full pointer-events-none">
                </div>
                
                <div id="hero-mockup"
                    class="relative bg-white dark:bg-zinc-900 border border-black/5 dark:border-white/10 rounded-3xl p-6 md:p-8 shadow-2xl transition-all duration-500 ease-out preserve-3d"
                    style="transform: rotateY(-8deg) rotateX(4deg);">
                    
                    <!-- App Interface Simulation -->
                    <div class="flex items-center justify-between mb-10">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-400 shadow-sm"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-400 shadow-sm"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-400 shadow-sm"></div>
                        </div>
                        <div class="text-[10px] font-mono text-zinc-400 dark:text-zinc-500 tracking-wider">INXDVI_SaaS_v2.4</div>
                    </div>

                    <!-- Dashboard Stats Grid -->
                    <div class="grid grid-cols-2 gap-5">
                        <div class="col-span-2 bg-indigo-500/5 rounded-2xl p-6 border border-indigo-500/10 relative overflow-hidden group">
                            <div class="absolute inset-x-0 bottom-0 h-1 bg-indigo-500/20 w-0 group-hover:w-full transition-all duration-700"></div>
                            <span class="text-zinc-500 dark:text-zinc-400 text-[10px] font-mono mb-1 block uppercase">Monthly Net Profit</span>
                            <div class="text-4xl font-extrabold text-zinc-900 dark:text-white">Rp <span class="counter-number" data-target="420">0</span>M+</div>
                            <div class="mt-4 flex items-center gap-2 text-emerald-600 dark:text-emerald-400 text-xs font-bold bg-emerald-500/10 w-fit px-2 py-0.5 rounded">
                                <i class="fa-solid fa-arrow-up"></i> <span>+32.4%</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-zinc-950/50 rounded-2xl p-5 border border-black/5 dark:border-white/5 shadow-sm transform hover:scale-[1.02] transition-transform">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-3">
                                <i class="fa-solid fa-users text-sm"></i>
                            </div>
                            <div class="text-2xl font-bold text-zinc-900 dark:text-white"><span class="counter-number" data-target="1520">0</span>+</div>
                            <div class="text-[10px] text-zinc-500 dark:text-zinc-400 font-medium">New Customers</div>
                        </div>

                        <div class="bg-white dark:bg-zinc-950/50 rounded-2xl p-5 border border-black/5 dark:border-white/5 shadow-sm transform hover:scale-[1.02] transition-transform">
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-3">
                                <i class="fa-solid fa-bolt text-sm"></i>
                            </div>
                            <div class="text-2xl font-bold text-zinc-900 dark:text-white"><span class="counter-number" data-target="98">0</span>%</div>
                            <div class="text-[10px] text-zinc-500 dark:text-zinc-400 font-medium">Automation Score</div>
                        </div>
                    </div>

                    <!-- Mini Floating Widget -->
                    <div class="absolute -right-8 -bottom-4 bg-white dark:bg-zinc-900 border border-black/10 dark:border-white/20 p-4 rounded-2xl shadow-2xl transform rotate-6 hover:rotate-0 transition-all duration-300 backdrop-blur-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                                <i class="fa-solid fa-check-double scale-110"></i>
                            </div>
                            <div>
                                <div class="text-[9px] text-zinc-400 dark:text-zinc-500 uppercase font-mono">System Status</div>
                                <div class="text-xs font-bold text-zinc-900 dark:text-white">All Run Automatically</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Pain Points (Masalah) -->
    <section id="masalah" class="py-20 relative z-10 bg-black/5 dark:bg-white/5 border-y border-black/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="text-red-500 dark:text-red-400 font-mono text-xs tracking-widest uppercase mb-3 block">/// KELUHAN UMUM</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white mb-6">Apakah Bisnis
                    Anda <br> Mengalami <span class="text-red-500 dark:text-red-400">Masalah Ini?</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    class="p-8 rounded-2xl bg-zinc-100 dark:bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-500 dark:text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">Uang & Stok Selisih</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Tiap tutup toko uang di
                        laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-zinc-100 dark:bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-500 dark:text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">Pusing Rekap Manual</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Akhir bulan lembur ngitung
                        nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.</p>
                </div>

                <div
                    class="p-8 rounded-2xl bg-zinc-100 dark:bg-zinc-950/40 border border-red-500/10 hover:border-red-500/30 transition-all duration-300 reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center text-red-500 dark:text-red-400 text-xl mb-6">
                        <i class="fa-solid fa-store-slash"></i>
                    </div>
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">Kalah Sama Tetangga</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Toko sebelah sudah bisa
                        pesan online dan ada di Google Maps, toko Anda masih nunggu bola.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services (Layanan) -->
    <section id="layanan" class="py-24 relative z-10 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 text-center reveal">
                <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs tracking-widest uppercase mb-3 block">/// SOLUSI KAMI</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white mb-6">Solusi
                    Praktis <span class="text-gradient">Tanpa Ribet</span></h2>
                <p class="text-zinc-800 dark:text-zinc-400 max-w-xl mx-auto text-sm md:text-base leading-relaxed">Kami sediakan "alat digital" biar Anda bisa tidur nyenyak sementara
                    sistem bekerja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Aplikasi Kasir
                        & Stok</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Pantau penjualan dan
                        stok barang langsung dari HP (Real-time).</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Website Pencari
                        Pelanggan</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Bikin toko/jasa Anda
                        muncul paling atas di Google (SEO) saat orang mencari.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Desain Logo &
                        Branding</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Bikin brand terlihat
                        mahal. Desain logo, banner, dan menu yang menggugah selera.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-100">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Jasa
                        Kelola Sosmed</h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Kami urus IG &
                        TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-200">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Keamanan Data
                    </h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Data keuangan Anda aman,
                        tidak akan bocor ke kompetitor.</p>
                </div>

                <div class="spotlight-card rounded-2xl p-8 group cursor-pointer reveal reveal-delay-300">
                    <div
                        class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 text-lg mb-6 border border-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white mb-3">Bot Balas Chat
                    </h3>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm leading-relaxed">Sistem yang menjawab
                        pertanyaan pelanggan 24 jam nonstop.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ROI (Hemat) -->
    <section id="hemat" class="py-24 relative z-10 bg-black/5 dark:bg-zinc-950/60 border-y border-black/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="reveal">
                    <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs uppercase mb-3 block">///
                        HITUNG-HITUNGAN CUAN</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white mb-6">Lebih
                        Murah Dari <br> <span class="text-gradient">Gaji Karyawan</span></h2>
                    <p class="text-zinc-800 dark:text-zinc-400 text-base md:text-lg mb-8 leading-relaxed">
                        Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada
                        drama izin sakit, dan kerja 24 jam.
                    </p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-zinc-700 dark:text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-500 dark:text-indigo-400"></i> <span>Sistem bekerja 24
                                jam nonstop</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-700 dark:text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-500 dark:text-indigo-400"></i> <span>Akurasi data 100%
                                (Anti Salah Hitung)</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-700 dark:text-zinc-300 font-medium">
                            <i class="fa-solid fa-check text-indigo-500 dark:text-indigo-400"></i> <span>Investasi sekali,
                                untung selamanya</span>
                        </li>
                    </ul>

                    <!-- Interactive ROI Sliders -->
                    <div class="bg-zinc-100 dark:bg-zinc-900/50 border border-black/5 dark:border-white/5 rounded-2xl p-6 space-y-6">
                        <h4
                            class="text-zinc-900 dark:text-white font-bold text-sm uppercase tracking-wider font-mono text-indigo-600 dark:text-indigo-400 flex items-center gap-2">
                            <i class="fa-solid fa-calculator"></i> <span>Kalkulator ROI
                                Interaktif</span>
                        </h4>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-600 dark:text-zinc-300">
                                <span>Jumlah Karyawan Admin</span>
                                <span class="font-bold text-zinc-900 dark:text-white font-mono"><span id="calc-staff-val">2</span> <span>Orang</span></span>
                            </div>
                            <input type="range" id="calc-staff" min="1" max="10" value="2"
                                class="w-full h-1.5 bg-zinc-300 dark:bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-indigo-500">
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-600 dark:text-zinc-300">
                                <span>Gaji Per Karyawan (Bulanan)</span>
                                <span class="font-bold text-zinc-900 dark:text-white font-mono">Rp <span id="calc-salary-val">4</span>
                                    <span>Juta</span></span>
                            </div>
                            <input type="range" id="calc-salary" min="2" max="10" value="4"
                                class="w-full h-1.5 bg-zinc-300 dark:bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-indigo-500">
                        </div>
                    </div>
                </div>

                <!-- ROI Cards with Reactive Counter values -->
                <div class="relative reveal reveal-delay-200">
                    <div class="bg-white dark:bg-zinc-900 border border-black/10 dark:border-white/10 rounded-2xl p-8 relative overflow-hidden shadow-xl">
                        <div class="grid grid-cols-2 gap-6 text-center relative z-10">

                            <div class="p-6 bg-red-500/5 rounded-xl border border-red-500/10">
                                <div class="text-xs text-red-500 dark:text-red-400 mb-2 font-mono uppercase tracking-wider">Cara Manual</div>
                                <div class="text-xl md:text-2xl font-extrabold text-zinc-900 dark:text-white mb-2">Rp <span
                                        id="calc-manual-total" class="font-mono">96</span> <span>Juta</span></div>
                                <div class="text-[10px] md:text-xs text-zinc-500 dark:text-zinc-400 leading-normal">Gaji Admin UMR setahun</div>
                            </div>

                            <div
                                class="p-6 bg-indigo-500/5 rounded-xl border border-indigo-500/20 scale-105 shadow-2xl bg-white dark:bg-zinc-950">
                                <div class="text-xs text-indigo-600 dark:text-indigo-400 mb-2 font-mono uppercase tracking-wider">Pakai Sistem</div>
                                <div class="text-xl md:text-2xl font-extrabold text-zinc-900 dark:text-white mb-2">Rp <span
                                        id="calc-system-total" class="font-mono">5</span> <span>Juta</span></div>
                                <div class="text-[10px] md:text-xs text-zinc-500 dark:text-zinc-400 leading-normal">Investasi Awal (Sekali Bayar)</div>
                            </div>

                        </div>
                        <div class="mt-8 text-center border-t border-black/10 dark:border-white/10 pt-6">
                            <p class="text-zinc-500 dark:text-zinc-400 text-sm mb-2">Anda Menghemat Uang:</p>
                            <p class="text-3xl font-black text-indigo-600 dark:text-indigo-400">Rp <span id="calc-saved-total"
                                    class="font-mono">91</span> <span>Juta</span>++</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Client Trust Message -->
    <section class="py-20 relative z-10 px-6">
        <div class="max-w-4xl mx-auto bg-white dark:bg-zinc-900 border border-black/10 dark:border-white/10 rounded-2xl p-8 md:p-14 text-center reveal shadow-xl">
            <div
                class="w-14 h-14 bg-indigo-500/5 rounded-full flex items-center justify-center text-2xl mx-auto mb-6 text-indigo-600 dark:text-indigo-400">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-extrabold text-zinc-900 dark:text-white mb-4">"Saya Gaptek, Takut
                Gak Bisa Pakai"</h2>
            <p class="text-zinc-800 dark:text-zinc-400 text-base md:text-lg mb-10 leading-relaxed font-light">
                Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan
                sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.
            </p>
            <div class="flex flex-wrap justify-center gap-3 text-[10px] md:text-xs font-mono text-indigo-600 dark:text-indigo-300">
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
                    <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs tracking-widest uppercase mb-2 block">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white">Portfolio
                        <span class="text-gradient">Kami</span>
                    </h2>
                </div>
                <a href="#"
                    class="text-xs font-mono text-zinc-500 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-white flex items-center gap-2 group transition-colors">
                    <span>LIHAT SEMUA</span> <i
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
    <section id="proses" class="py-20 relative z-10 border-y border-black/5 dark:border-white/5 bg-black/5 dark:bg-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="mb-16 reveal">
                <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs tracking-widest uppercase mb-3 block">/// ALUR KERJA</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white">Proses Gampang
                    <span class="text-gradient">Anti Ribet</span>
                </h2>
            </div>

            <div class="relative">
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-black/5 dark:bg-white/5"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">

                    <div class="flex flex-col items-center group reveal reveal-delay-100">
                        <div
                            class="w-20 h-20 bg-white dark:bg-zinc-950 border border-black/10 dark:border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300 shadow-md">
                            <i class="fa-regular fa-comments text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-2">1. Curhat Dulu</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs px-4 leading-relaxed">Ceritakan masalah
                            bisnis Anda, kami dengarkan and beri solusi.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-200">
                        <div
                            class="w-20 h-20 bg-white dark:bg-zinc-950 border border-black/10 dark:border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300 shadow-md">
                            <i class="fa-solid fa-pen-ruler text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-2">2. Kami Buatkan</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs px-4 leading-relaxed">Tim kami mulai
                            merancang sistem sesuai kebutuhan Anda.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-300">
                        <div
                            class="w-20 h-20 bg-white dark:bg-zinc-950 border border-black/10 dark:border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300 shadow-md">
                            <i class="fa-solid fa-code text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-2">3. Pengerjaan</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs px-4 leading-relaxed">Proses coding dan
                            pembuatan aplikasi oleh ahli kami.</p>
                    </div>

                    <div class="flex flex-col items-center group reveal reveal-delay-400">
                        <div
                            class="w-20 h-20 bg-white dark:bg-zinc-950 border border-black/10 dark:border-white/10 rounded-full flex items-center justify-center text-2xl mb-6 relative z-10 group-hover:border-indigo-500/30 group-hover:shadow-[0_0_20px_rgba(79,70,229,0.15)] transition-all duration-300 shadow-md">
                            <i class="fa-solid fa-rocket text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-2">4. Training & Jadi</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs px-4 leading-relaxed">Kami ajari cara
                            pakainya sampai Anda dan staf mahir.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimoni" class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white mb-16 text-center reveal">Kata Klien <span class="italic text-indigo-600 dark:text-indigo-400">Kami</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    class="bg-zinc-100 dark:bg-zinc-900/60 border border-black/5 dark:border-white/5 hover:border-indigo-500/20 p-8 rounded-2xl transition-all duration-300 reveal reveal-delay-100 shadow-sm hover:shadow-md">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/20">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold text-sm">Budi Santoso</div>
                            <div class="text-indigo-600 dark:text-indigo-400 text-xs font-mono">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm italic leading-relaxed">"Dulu pusing rekap nota, sering ribut sama
                        karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis."</p>
                </div>

                <div
                    class="bg-white dark:bg-zinc-900 border border-black/10 dark:border-white/10 hover:border-indigo-500/30 p-8 rounded-2xl transition-all duration-300 md:-translate-y-4 reveal reveal-delay-200 shadow-lg">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/30">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold text-sm">Siti Aminah</div>
                            <div class="text-indigo-600 dark:text-indigo-400 text-xs font-mono">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-zinc-700 dark:text-zinc-300 text-sm italic leading-relaxed">"Stok sparepart ribuan item sering hilang.
                        Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>

                <div
                    class="bg-zinc-100 dark:bg-zinc-900/60 border border-black/5 dark:border-white/5 hover:border-indigo-500/20 p-8 rounded-2xl transition-all duration-300 reveal reveal-delay-300 shadow-sm hover:shadow-md">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Client"
                            class="w-12 h-12 rounded-full border-2 border-indigo-500/20">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold text-sm">Michael Tan</div>
                            <div class="text-indigo-600 dark:text-indigo-400 text-xs font-mono">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm italic leading-relaxed">"Saya gaptek, tapi tim INXDVI sabar banget
                        ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Articles / Blog -->
    <section id="blog" class="py-20 relative z-10 px-6 bg-black/5 dark:bg-white/5 border-y border-black/5 dark:border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs tracking-widest uppercase mb-2 block">/// TIPS BISNIS</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white">Artikel &
                        <span class="text-gradient">Tips</span>
                    </h2>
                </div>
                <a href="#"
                    class="text-xs font-mono text-zinc-500 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-white flex items-center gap-2 group transition-colors">
                    <span>LIHAT SEMUA TIPS</span> <i
                        class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-100 shadow-md">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-red-500/10 backdrop-blur-md border border-red-500/20 text-red-600 dark:text-red-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            KEUANGAN</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Kasir Sering Minus? Ini 5 Penyebabnya</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed">
                            Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.</p>
                        <span class="text-xs font-bold text-indigo-600 dark:text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-200 shadow-md">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=2069&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-indigo-500/10 backdrop-blur-md border border-indigo-500/20 text-indigo-600 dark:text-indigo-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            MARKETING</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Trik Agar Toko Muncul Paling Atas di Google</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed">Cara
                            gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.</p>
                        <span class="text-xs font-bold text-indigo-600 dark:text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

                <div class="spotlight-card rounded-2xl overflow-hidden group transition-all reveal reveal-delay-300 shadow-md">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute top-4 left-4 bg-emerald-500/10 backdrop-blur-md border border-emerald-500/20 text-emerald-600 dark:text-emerald-300 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            OPERASIONAL</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Capek Balas Chat? Pakai Trik Ini</h3>
                        <p class="text-zinc-800 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed">
                            Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.</p>
                        <span class="text-xs font-bold text-indigo-600 dark:text-indigo-400 flex items-center gap-2">Baca Selengkapnya <i
                                class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section id="faq" class="py-20 relative z-10 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white mb-12 text-center reveal">
                Pertanyaan <span class="text-gradient">Umum</span></h2>

            <div class="space-y-4">

                <!-- FAQ Item 1 -->
                <div
                    class="bg-zinc-100 dark:bg-zinc-900/50 border border-black/5 dark:border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-100 shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-zinc-900 dark:text-white text-sm md:text-base group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Apakah cocok untuk bisnis kecil / UMKM?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 flex items-center justify-center text-xs text-zinc-500 dark:text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-800 dark:text-zinc-400 text-xs md:text-sm leading-relaxed">
                            Sangat cocok! Sistem kami dirancang sederhana agar mudah dipahami bahkan untuk yang gaptek
                            sekalipun.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="bg-zinc-100 dark:bg-zinc-900/50 border border-black/5 dark:border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-200 shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-zinc-900 dark:text-white text-sm md:text-base group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Berapa lama waktu pembuatan?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 flex items-center justify-center text-xs text-zinc-500 dark:text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-800 dark:text-zinc-400 text-xs md:text-sm leading-relaxed">
                            Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung kompleksitas sistem.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="bg-zinc-100 dark:bg-zinc-900/50 border border-black/5 dark:border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-300 shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-zinc-900 dark:text-white text-sm md:text-base group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Bagaimana jika ada error di kemudian hari?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 flex items-center justify-center text-xs text-zinc-500 dark:text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-800 dark:text-zinc-400 text-xs md:text-sm leading-relaxed">
                            Kami memberikan garansi perbaikan gratis serta pendampingan penuh untuk melatih staf Anda.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div
                    class="bg-zinc-100 dark:bg-zinc-900/50 border border-black/5 dark:border-white/5 rounded-2xl overflow-hidden transition-all duration-300 reveal reveal-delay-400 shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group"
                        onclick="toggleFaq(this)">
                        <span
                            class="font-bold text-zinc-900 dark:text-white text-sm md:text-base group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Apakah data bisnis saya aman?</span>
                        <span
                            class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 flex items-center justify-center text-xs text-zinc-500 dark:text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all transform duration-300 shrink-0"><i
                                class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-355 ease-in-out">
                        <p class="px-6 pb-6 text-zinc-800 dark:text-zinc-400 text-xs md:text-sm leading-relaxed">
                            Ya. Semua database dienkripsi secara berkala and dihosting di server cloud yang aman.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="relative pt-24 pb-12 bg-white dark:bg-zinc-950 text-zinc-900 dark:text-white overflow-hidden border-t border-black/5 dark:border-white/5">
        <div
            class="absolute inset-0 pointer-events-none opacity-[0.03] dark:opacity-[0.03] bg-[linear-gradient(to_right,#00000010_1px,transparent_1px),linear-gradient(to_bottom,#00000010_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#ffffff10_1px,transparent_1px),linear-gradient(to_bottom,#ffffff10_1px,transparent_1px)] bg-[size:40px_40px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div
                class="flex flex-col md:flex-row items-center justify-between gap-8 mb-20 border-b border-black/10 dark:border-white/10 pb-20 reveal">
                <div class="text-center md:text-left">
                    <h3 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight">
                        Jangan Biarkan Kompetitor <br> <span class="text-indigo-600 dark:text-indigo-400">Menyalip Anda!</span></h3>
                    <p class="text-zinc-800 dark:text-zinc-400 max-w-lg text-sm md:text-base leading-relaxed">
                        Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.</p>
                </div>
                <div>
                    <a href="https://wa.me/628123456789"
                        class="shimmer-btn inline-flex items-center gap-3 px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition-all shadow-lg hover:scale-[1.01]">
                        <i class="fa-brands fa-whatsapp text-2xl"></i>
                        <div class="text-left">
                            <div class="text-[9px] font-normal opacity-80 leading-none">Chat Admin 24/7</div>
                            <div class="text-base font-bold mt-1">Hubungi via WhatsApp</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 reveal">

                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="/images/logo.png" alt="INXDVI Logo" class="h-8 w-auto object-contain opacity-100">
                    </div>
                    <p class="text-zinc-800 dark:text-zinc-400 leading-relaxed mb-6 text-xs">Partner digital
                        terpercaya untuk UMKM and Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan
                        untuk semua orang.</p>

                    <div class="flex gap-2">
                        <a href="#"
                            class="w-8 h-8 rounded bg-black/5 dark:bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center text-zinc-600 dark:text-white transition-all text-sm shadow-sm"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-black/5 dark:bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center text-zinc-600 dark:text-white transition-all text-sm shadow-sm"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-black/5 dark:bg-white/5 hover:bg-indigo-600 hover:text-white flex items-center justify-center text-zinc-600 dark:text-white transition-all text-sm shadow-sm"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-zinc-900 dark:text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-link text-indigo-600 dark:text-indigo-400 text-[10px]"></i> Menu</h4>
                    <ul class="space-y-3 text-xs text-zinc-800 dark:text-zinc-400 font-medium">
                        <li><a href="#masalah"
                                class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Masalah
                                Bisnis</a></li>
                        <li><a href="#layanan"
                                class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Solusi
                                Kami</a></li>
                        <li><a href="#hemat"
                                class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Hitung
                                Hemat</a></li>
                        <li><a href="#portfolio"
                                class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-all block hover:translate-x-1 duration-300">Hasil
                                Kerja</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-zinc-900 dark:text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-location-dot text-indigo-600 dark:text-indigo-400 text-[10px]"></i> Kontak</h4>
                    <ul class="space-y-4 text-xs text-zinc-800 dark:text-zinc-400 font-medium">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin mt-1 text-indigo-600 dark:text-indigo-400"></i>
                            <span class="leading-relaxed">Jl. Jendral Sudirman No. 10, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-indigo-600 dark:text-indigo-400"></i>
                            <span>halo@inxdvi.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-clock text-indigo-600 dark:text-indigo-400"></i>
                            <span>Senin - Jumat (09.00 - 17.00)</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-zinc-900 dark:text-white font-bold mb-6 text-sm">Tips Bisnis Gratis</h4>
                    <p class="text-xs text-zinc-800 dark:text-zinc-400 mb-4 leading-normal">Masukkan email
                        untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..."
                            class="w-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 rounded-lg px-4 py-2.5 text-xs text-zinc-900 dark:text-white focus:outline-none focus:border-indigo-600 dark:focus:border-indigo-400 transition-colors pr-10">
                        <button
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-indigo-600 hover:bg-indigo-500 rounded flex items-center justify-center text-white transition-colors shadow-sm">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        </button>
                    </div>
                </div>

            </div>

            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-black/10 dark:border-white/10 text-xs text-zinc-500 font-mono reveal">
                <p>&copy; 2024 INXDVI Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Terms</a>
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

        // 7. Dark Mode Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Set initial theme based on localStorage or system Preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
            themeToggleDarkIcon.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleLightIcon.classList.add('hidden');
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            // Toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
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