<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INXDVI - Solusi Bisnis Digital</title>
    <link rel="icon" type="image/png" href="/images/logo.png">

    <!-- CSS / Tailwind & Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        headings: ['Outfit', 'sans-serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
<<<<<<< HEAD
=======
                    },
                    colors: {
                        tech: {
                            bg: 'var(--bg-main)',
                            card: 'var(--bg-card)',
                            border: 'var(--border-color)',
                            primary: '#4f46e5',
                            primaryHover: '#4338ca'
                        }
>>>>>>> origin/main
                    }
                }
            }
        }
    </script>
    
    <style>
        :root {
<<<<<<< HEAD
            --bg-color: #f6f5f3;
            --text-color: #151717;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
            font-family: 'Plus Jakarta Sans', sans-serif;
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
=======
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
>>>>>>> origin/main
            overflow: hidden;
        }
        .lenis-scrolling iframe {
            pointer-events: none;
        }

        /* SVG Text Mask Styling */
        svg text {
            transform-origin: center;
        }

        /* Scroll Reveal Word Styling */
        .reveal-word {
            color: rgba(21, 23, 23, 0.12);
            transition: color 0.4s ease;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f6f5f3;
        }
        ::-webkit-scrollbar-thumb {
            background: #e2dfda;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #c3bfb8;
        }
    </style>
</head>

<<<<<<< HEAD
<body class="antialiased selection:bg-[#151717]/10 selection:text-[#151717]">
=======
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
>>>>>>> origin/main

    <!-- Header Navigation -->
    <nav id="navbar" class="fixed w-full z-50 py-4 md:py-6 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 z-50 text-decoration-none">
<<<<<<< HEAD
                <img src="{{ asset('images/logo.png') }}" class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]" alt="INXDVI Logo">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-2 bg-[#151717]/5 p-1 rounded-full border border-[#151717]/5">
                <a href="#masalah"
                    class="px-5 py-2 text-xs font-semibold text-[#151717]/70 hover:text-[#151717] hover:bg-[#151717]/10 rounded-full transition-all"
                    data-i18n="nav_problem">Masalah</a>
                <a href="#layanan"
                    class="px-5 py-2 text-xs font-semibold text-[#151717]/70 hover:text-[#151717] hover:bg-[#151717]/10 rounded-full transition-all"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="px-5 py-2 text-xs font-semibold text-[#151717]/70 hover:text-[#151717] hover:bg-[#151717]/10 rounded-full transition-all"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="#portfolio"
                    class="px-5 py-2 text-xs font-semibold text-[#151717]/70 hover:text-[#151717] hover:bg-[#151717]/10 rounded-full transition-all"
                    data-i18n="nav_portfolio">Portfolio</a>
=======
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
>>>>>>> origin/main
            </div>

            <!-- Custom Controls & Call to Action -->
            <div class="flex items-center gap-3 z-50">
<<<<<<< HEAD
                <button id="lang-toggle"
                    class="h-9 px-3 rounded-full bg-[#151717]/5 border border-[#151717]/10 flex items-center gap-2 hover:bg-[#151717]/10 transition-all cursor-pointer">
                    <span id="lang-flag" class="text-sm">🇮🇩</span>
                    <span id="lang-text" class="text-xs font-bold font-mono text-[#151717]">ID</span>
                </button>

                <a href="https://wa.me/628123456789"
                    class="hidden md:flex items-center gap-2 px-6 py-3 bg-[#151717] text-white text-xs font-bold rounded-full hover:bg-black transition-all hover:scale-[1.02] shadow-sm">
                    <span data-i18n="btn_contact">Konsultasi Gratis</span>
                </a>

                <button id="mobile-menu-btn"
                    class="md:hidden w-9 h-9 flex items-center justify-center text-[#151717] text-lg focus:outline-none hover:text-[#151717]/80 transition bg-[#151717]/5 rounded-full border border-[#151717]/10">
=======
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
>>>>>>> origin/main
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
<<<<<<< HEAD
            class="hidden md:hidden absolute top-full left-0 w-full bg-[#f6f5f3]/95 backdrop-blur-xl border-b border-[#151717]/10 shadow-lg transition-all z-40">
            <div class="p-4 flex flex-col gap-2">
                <a href="#masalah"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-[#151717]/5 text-[#151717] font-medium transition-colors"
                    data-i18n="nav_problem">Masalah Anda</a>
                <a href="#layanan"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-[#151717]/5 text-[#151717] font-medium transition-colors"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-[#151717]/5 text-[#151717] font-medium transition-colors"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="https://wa.me/628123456789"
                    class="block w-full py-3 bg-[#151717] text-white font-bold rounded-lg text-center hover:bg-black transition-colors shadow-sm"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
=======
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
>>>>>>> origin/main
            </div>
        </div>
    </nav>

    <!-- Cinematic Hero Section with Text Clipping Mask -->
    <div class="hero-container relative w-full h-screen overflow-hidden bg-black">
        <!-- High-quality video loop behind -->
        <video class="absolute inset-0 w-full h-full object-cover z-0" autoplay loop muted playsinline>
            <source src="https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761" type="video/mp4">
        </video>

<<<<<<< HEAD
        <!-- SVG Cutout Mask Layer -->
        <div class="absolute inset-0 w-full h-full z-10 pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 1000 600" preserveAspectRatio="xMidYMid slice">
                <defs>
                    <mask id="hero-mask" x="0" y="0" width="1000" height="600" maskUnits="userSpaceOnUse">
                        <!-- White background covers entire container -->
                        <rect x="0" y="0" width="1000" height="600" fill="white" />
                        <!-- Black text cuts a hole showing video underneath -->
                        <text id="mask-text" x="50%" y="53%" dominant-baseline="middle" text-anchor="middle" font-size="120" font-family="Outfit, sans-serif" font-weight="900" fill="black">INXDVI</text>
                    </mask>
                </defs>
                <!-- Draws off-white panel everywhere except the text hole -->
                <rect x="0" y="0" width="1000" height="600" fill="#f6f5f3" mask="url(#hero-mask)" />
            </svg>
        </div>

        <!-- Floating UI contents (Fades out as mask scales) -->
        <div class="hero-overlay-content absolute inset-0 z-20 flex flex-col justify-between items-center text-center py-28 px-6 pointer-events-none">
            <div class="mt-20">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-[#151717]/10 bg-[#151717]/5 text-[#151717]/80 text-[10px] md:text-xs font-mono mb-4 backdrop-blur-sm">
=======
            <!-- Left Info Block -->
            <div class="text-left reveal">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300 text-[10px] md:text-xs font-mono mb-6 backdrop-blur-sm">
>>>>>>> origin/main
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span>BISNIS JADI AUTOPILOT</span>
                </div>
<<<<<<< HEAD
                <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-[#151717] font-headings max-w-4xl" data-i18n="hero_title">
                    Bisnis Jalan Otomatis <br> Omzet Naik Drastis
=======

                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight mb-6 leading-tight text-zinc-900 dark:text-white">
                    Bisnis Jalan Otomatis <br> <span class="text-gradient">Omzet Naik Drastis</span>
>>>>>>> origin/main
                </h1>
            </div>

<<<<<<< HEAD
            <div class="flex flex-col items-center gap-6 max-w-xl pointer-events-auto">
                <p class="text-sm md:text-base text-[#151717]/70 font-light leading-relaxed" data-i18n="hero_desc">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
=======
                <p class="text-base md:text-lg text-zinc-800 dark:text-zinc-400 max-w-xl mb-10 font-medium dark:font-light leading-relaxed">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda
                    tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
>>>>>>> origin/main
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                    <a href="https://wa.me/628123456789"
<<<<<<< HEAD
                        class="px-8 py-4 bg-[#151717] text-white hover:bg-black rounded-full text-center font-bold tracking-wide transition-all shadow-sm flex items-center justify-center gap-2">
                        <span data-i18n="btn_start">Konsultasi via WA</span> <i class="fa-brands fa-whatsapp text-lg"></i>
=======
                        class="shimmer-btn px-8 py-4 bg-indigo-600 hover:bg-indigo-700 rounded-xl w-full sm:w-auto text-center cursor-pointer text-white font-bold tracking-wide transition-all shadow-lg hover:scale-[1.01] hover:shadow-indigo-500/20">
                        <span>Konsultasi via WA</span> <i
                            class="fa-brands fa-whatsapp text-lg ml-2"></i>
>>>>>>> origin/main
                    </a>
                    <a href="#portfolio"
<<<<<<< HEAD
                        class="px-8 py-4 rounded-full border border-[#151717]/10 hover:bg-[#151717]/5 text-[#151717] transition-all font-mono text-xs flex items-center justify-center gap-2">
                        <span data-i18n="btn_portfolio">LIHAT HASIL KERJA</span> <i class="fa-solid fa-arrow-down"></i>
=======
                        class="px-8 py-4 rounded-xl border border-zinc-300 dark:border-white/10 hover:bg-white dark:hover:bg-white/5 text-zinc-900 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-white transition-all font-bold text-xs flex items-center justify-center gap-3 w-full sm:w-auto shadow-sm">
                        <span>LIHAT HASIL KERJA</span>
>>>>>>> origin/main
                    </a>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- "Why INXDVI" Text-reveal paragraph section -->
    <section class="py-32 bg-[#f6f5f3] flex items-center justify-center border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-6" data-i18n="sec_prob_sub">/// FILOSOFI KAMI</span>
            <p id="reveal-paragraph" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-headings leading-tight max-w-5xl mx-auto">
                Dunia berubah dengan cepat. Jangan terjebak mengelola bisnis secara manual. Kami membantu Anda bertransformasi dengan sistem otomatis yang bekerja 24 jam nonstop. Anda tinggal memantau dari genggaman.
            </p>
        </div>
    </section>

    <!-- Crop Masks Parallax Visual Showcase -->
    <section class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-12" data-i18n="sec_interactive_sub">/// EKOSISTEM DIGITAL</span>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Kasir">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-[#151717] text-white text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10">Kasir & POS</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden md:translate-y-12 group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Laporan">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-[#151717] text-white text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10">Laporan Stok</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Asisten AI">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-[#151717] text-white text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10">Asisten AI</span>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden md:translate-y-12 group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Dashboard">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-[#151717] text-white text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10">Dashboard HP</span>
                    </div>
=======
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
>>>>>>> origin/main
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Services Section -->
    <section id="layanan" class="py-28 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16">
                <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-2" data-i18n="sec_service_sub">/// SOLUSI DIGITAL</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings" data-i18n="sec_service_title">Solusi Praktis Tanpa Ribet</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 border border-[#151717]/10 rounded-3xl overflow-hidden bg-white shadow-sm">
                <!-- Service 1 -->
                <div class="p-8 border-b md:border-b-0 md:border-r border-[#151717]/10 hover:bg-[#f6f5f3]/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_mobile_title">Aplikasi Kasir & Stok</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_mobile_desc">Pantau penjualan dan stok barang langsung dari HP secara real-time.</p>
                </div>
                <!-- Service 2 -->
                <div class="p-8 border-b md:border-b-0 md:border-r border-[#151717]/10 hover:bg-[#f6f5f3]/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_web_title">Website Pencari Pelanggan</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_web_desc">Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.</p>
                </div>
                <!-- Service 3 -->
                <div class="p-8 hover:bg-[#f6f5f3]/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_vector_title">Desain Logo & Branding</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_vector_desc">Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.</p>
                </div>
                <!-- Row 2 -->
                <div class="p-8 border-t border-r border-[#151717]/10 hover:bg-[#f6f5f3]/30 transition-colors group md:col-span-1 border-b md:border-b-0">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_sosmed_spec_title">Jasa Kelola Sosmed</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_sosmed_spec_desc">Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.</p>
                </div>
                <div class="p-8 border-t border-r border-[#151717]/10 hover:bg-[#f6f5f3]/30 transition-colors group border-b md:border-b-0">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_sec_title">Keamanan Data</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_sec_desc">Data keuangan Anda aman, tidak akan bocor ke kompetitor.</p>
                </div>
                <div class="p-8 border-t border-[#151717]/10 hover:bg-[#f6f5f3]/30 transition-colors group">
                    <div class="w-12 h-12 rounded-full border border-[#151717]/10 flex items-center justify-center mb-8 text-[#151717] group-hover:bg-[#151717] group-hover:text-white transition-all">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#151717] font-headings mb-4" data-i18n="srv_sosmed_title">Bot Balas Chat</h3>
                    <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="srv_sosmed_desc">Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.</p>
=======
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
>>>>>>> origin/main
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Interactive ROI Calculator Section -->
    <section id="hemat" class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-2" data-i18n="sec_roi_sub">/// HITUNG-HITUNGAN CUAN</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings mb-6" data-i18n="sec_roi_title">Lebih Murah Dari Gaji Karyawan</h2>
                    <p class="text-sm md:text-base text-[#151717]/70 font-light leading-relaxed mb-8" data-i18n="sec_roi_desc">
                        Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.
                    </p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-[#151717] font-medium">
                            <i class="fa-solid fa-check text-emerald-600"></i> <span data-i18n="roi_1">Sistem bekerja 24 jam nonstop</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#151717] font-medium">
                            <i class="fa-solid fa-check text-emerald-600"></i> <span data-i18n="roi_2">Akurasi data 100% (Anti Salah Hitung)</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#151717] font-medium">
                            <i class="fa-solid fa-check text-emerald-600"></i> <span data-i18n="roi_3">Investasi sekali, untung selamanya</span>
                        </li>
                    </ul>

                    <!-- Calculator Input Container -->
                    <div class="bg-white border border-[#151717]/10 rounded-3xl p-6 space-y-6 shadow-sm">
                        <h4 class="text-[#151717] font-bold text-sm uppercase tracking-wider font-headings flex items-center gap-2">
                            <i class="fa-solid fa-calculator"></i> <span data-i18n="calc_title">Kalkulator ROI Interaktif</span>
                        </h4>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-[#151717]/70">
                                <span data-i18n="calc_staff_label">Jumlah Karyawan Admin</span>
                                <span class="font-bold text-[#151717] font-mono"><span id="calc-staff-val">2</span> <span data-i18n="calc_staff_unit">Orang</span></span>
                            </div>
                            <input type="range" id="calc-staff" min="1" max="10" value="2" class="w-full h-1.5 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-[#151717]">
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-[#151717]/70">
                                <span data-i18n="calc_salary_label">Gaji Per Karyawan (Bulanan)</span>
                                <span class="font-bold text-[#151717] font-mono">Rp <span id="calc-salary-val">4</span> <span data-i18n="roi_unit">Juta</span></span>
                            </div>
                            <input type="range" id="calc-salary" min="2" max="10" value="4" class="w-full h-1.5 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-[#151717]">
=======
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
>>>>>>> origin/main
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                <!-- ROI Cards (Visual display) -->
                <div class="bg-white border border-[#151717]/10 rounded-3xl p-8 shadow-sm">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div class="p-6 bg-[#151717]/5 rounded-2xl border border-[#151717]/5">
                            <div class="text-xs text-[#151717]/60 mb-2 font-mono uppercase tracking-wider" data-i18n="card_manual">Cara Manual</div>
                            <div class="text-xl md:text-2xl font-extrabold text-[#151717] mb-2 font-headings">Rp <span id="calc-manual-total" class="font-mono">96</span> <span data-i18n="roi_unit">Juta</span></div>
                            <div class="text-[10px] text-[#151717]/50 leading-normal" data-i18n="card_desc_manual">Gaji Admin UMR setahun</div>
                        </div>

                        <div class="p-6 bg-[#151717] rounded-2xl text-white shadow-md">
                            <div class="text-xs text-white/70 mb-2 font-mono uppercase tracking-wider" data-i18n="card_tech">Pakai Sistem</div>
                            <div class="text-xl md:text-2xl font-extrabold text-white mb-2 font-headings">Rp <span id="calc-system-total" class="font-mono">5</span> <span data-i18n="roi_unit">Juta</span></div>
                            <div class="text-[10px] text-white/50 leading-normal" data-i18n="card_desc_tech">Investasi Awal (Sekali Bayar)</div>
=======
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
>>>>>>> origin/main
                        </div>
                    </div>
                    <div class="mt-8 text-center border-t border-[#151717]/10 pt-6">
                        <p class="text-sm text-[#151717]/60 mb-2" data-i18n="roi_summary">Anda Menghemat Uang:</p>
                        <p class="text-3xl md:text-4xl font-black text-emerald-600 font-headings">Rp <span id="calc-saved-total" class="font-mono">91</span> <span data-i18n="roi_unit">Juta</span>++</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Support Reassurance Section -->
    <section class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-4xl mx-auto bg-white border border-[#151717]/10 rounded-3xl p-8 md:p-14 text-center shadow-sm">
            <div class="w-14 h-14 bg-[#151717]/5 rounded-full flex items-center justify-center text-2xl mx-auto mb-6 text-[#151717]">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-extrabold text-[#151717] font-headings mb-4" data-i18n="trust_title">"Saya Gaptek, Takut Gak Bisa Pakai"</h2>
            <p class="text-sm md:text-base text-[#151717]/70 mb-10 leading-relaxed font-light" data-i18n="trust_desc">
                Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.
            </p>
            <div class="flex flex-wrap justify-center gap-3 text-[10px] md:text-xs font-mono text-[#151717]">
                <span class="px-4 py-1.5 bg-[#151717]/5 rounded-full border border-[#151717]/10"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> GRATIS TRAINING</span>
                <span class="px-4 py-1.5 bg-[#151717]/5 rounded-full border border-[#151717]/10"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> GARANSI ERROR</span>
                <span class="px-4 py-1.5 bg-[#151717]/5 rounded-full border border-[#151717]/10"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> DIBIMBING SAMPAI BISA</span>
=======
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
>>>>>>> origin/main
            </div>
        </div>
    </section>

    <!-- Portfolio Section (Showcase) -->
    <section id="portfolio" class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
<<<<<<< HEAD
                    <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-2" data-i18n="sec_port_sub">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings" data-i18n="sec_port_title">Portfolio Kami</h2>
                </div>
                <a href="#" class="text-xs font-mono text-[#151717]/60 hover:text-[#151717] flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_see_all">LIHAT SEMUA</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
=======
                    <span class="text-indigo-600 dark:text-indigo-400 font-mono text-xs tracking-widest uppercase mb-2 block">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-zinc-900 dark:text-white">Portfolio
                        <span class="text-gradient">Kami</span>
                    </h2>
                </div>
                <a href="#"
                    class="text-xs font-mono text-zinc-500 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-white flex items-center gap-2 group transition-colors">
                    <span>LIHAT SEMUA</span> <i
                        class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
>>>>>>> origin/main
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Portfolio 1 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="POS App">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">FINTECH</span>
                        <h3 class="text-lg font-bold text-white font-headings">E-Wallet App</h3>
                    </div>
                </div>
                <!-- Portfolio 2 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Shopify Mobile">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">COMMERCE</span>
                        <h3 class="text-lg font-bold text-white font-headings">Shopify Mobile</h3>
                    </div>
                </div>
                <!-- Portfolio 3 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Team Dashboard">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">SAAS</span>
                        <h3 class="text-lg font-bold text-white font-headings">Team Dashboard</h3>
                    </div>
                </div>
<<<<<<< HEAD
=======

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
>>>>>>> origin/main
            </div>
        </div>
    </section>

    <!-- Sticky Split-screen Workflow Steps Section -->
    <section id="proses" class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
<<<<<<< HEAD
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start relative">
                <!-- Left Sticky Column -->
                <div class="md:sticky md:top-28 md:h-[70vh] flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-2" data-i18n="sec_workflow_sub">/// ALUR KERJA</span>
                        <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings mb-6" data-i18n="sec_workflow_title">Proses Gampang Anti Ribet</h2>
                        <p class="text-sm text-[#151717]/60 leading-relaxed font-light max-w-sm">
                            Kami merancang setiap tahap agar transparan, cepat, dan berorientasi pada hasil nyata untuk bisnis Anda.
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <a href="https://wa.me/628123456789" class="inline-flex items-center gap-3 px-8 py-4 bg-[#151717] text-white hover:bg-black font-bold rounded-full transition-all shadow-sm">
                            <span data-i18n="btn_contact">Konsultasi Gratis</span> <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Scrolling Column -->
                <div class="space-y-8 md:py-8">
                    <!-- Step 1 -->
                    <div class="step-item p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all duration-300">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-[#151717]/25 font-headings">01</span>
                            <div class="w-10 h-10 rounded-full border border-[#151717]/10 flex items-center justify-center text-[#151717]"><i class="fa-regular fa-comments"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#151717] font-headings mb-3" data-i18n="step_1_title">1. Curhat Dulu</h3>
                        <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="step_1_desc">Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi terbaik.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-item p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all duration-300">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-[#151717]/25 font-headings">02</span>
                            <div class="w-10 h-10 rounded-full border border-[#151717]/10 flex items-center justify-center text-[#151717]"><i class="fa-solid fa-pen-ruler"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#151717] font-headings mb-3" data-i18n="step_2_title">2. Kami Buatkan</h3>
                        <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="step_2_desc">Tim kami mulai merancang arsitektur sistem dan visual prototype sesuai kebutuhan.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="step-item p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all duration-300">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-[#151717]/25 font-headings">03</span>
                            <div class="w-10 h-10 rounded-full border border-[#151717]/10 flex items-center justify-center text-[#151717]"><i class="fa-solid fa-code"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#151717] font-headings mb-3" data-i18n="step_3_title">3. Pengerjaan</h3>
                        <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="step_3_desc">Proses coding aplikasi, integrasi database, dan penjaminan kualitas oleh developer kami.</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="step-item p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all duration-300">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-[#151717]/25 font-headings">04</span>
                            <div class="w-10 h-10 rounded-full border border-[#151717]/10 flex items-center justify-center text-[#151717]"><i class="fa-solid fa-rocket"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-[#151717] font-headings mb-3" data-i18n="step_4_title">4. Training & Jadi</h3>
                        <p class="text-sm text-[#151717]/60 leading-relaxed font-light" data-i18n="step_4_desc">Pelatihan staf Anda hingga mahir, go-live, dan dukungan teknis pasca rilis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings mb-16 text-center" data-i18n="sec_client_title">Kata Klien Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all">
=======
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
>>>>>>> origin/main
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
<<<<<<< HEAD
                            <div class="text-[#151717] font-bold font-headings">Budi Santoso</div>
                            <div class="text-[#151717]/50 text-xs font-mono">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-sm text-[#151717]/70 italic leading-relaxed">"Dulu pusing rekap nota, sering ribut sama karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis."</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all md:-translate-y-4">
=======
                            <div class="text-zinc-900 dark:text-white font-bold text-sm">Siti Aminah</div>
                            <div class="text-indigo-600 dark:text-indigo-400 text-xs font-mono">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-zinc-700 dark:text-zinc-300 text-sm italic leading-relaxed">"Stok sparepart ribuan item sering hilang.
                        Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>

                <div
                    class="bg-zinc-100 dark:bg-zinc-900/60 border border-black/5 dark:border-white/5 hover:border-indigo-500/20 p-8 rounded-2xl transition-all duration-300 reveal reveal-delay-300 shadow-sm hover:shadow-md">
>>>>>>> origin/main
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
<<<<<<< HEAD
                            <div class="text-[#151717] font-bold font-headings">Siti Aminah</div>
                            <div class="text-[#151717]/50 text-xs font-mono">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-sm text-[#151717]/70 italic leading-relaxed">"Stok sparepart ribuan item sering hilang. Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="p-8 bg-white border border-[#151717]/10 rounded-3xl shadow-sm hover:border-[#151717]/30 transition-all">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-[#151717] font-bold font-headings">Michael Tan</div>
                            <div class="text-[#151717]/50 text-xs font-mono">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-sm text-[#151717]/70 italic leading-relaxed">"Saya gaptek, tapi tim INXDVI sabar banget ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
=======
                            <div class="text-zinc-900 dark:text-white font-bold text-sm">Michael Tan</div>
                            <div class="text-indigo-600 dark:text-indigo-400 text-xs font-mono">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-zinc-800 dark:text-zinc-400 text-sm italic leading-relaxed">"Saya gaptek, tapi tim INXDVI sabar banget
                        ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
>>>>>>> origin/main
                </div>
            </div>
        </div>
    </section>

    <!-- Articles / Blog -->
<<<<<<< HEAD
    <section id="blog" class="py-24 bg-[#f6f5f3] border-t border-[#151717]/10 relative z-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-[#151717]/50 block mb-2" data-i18n="sec_blog_sub">/// TIPS BISNIS</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-[#151717] font-headings" data-i18n="sec_blog_title">Artikel & Tips</h2>
                </div>
                <a href="#" class="text-xs font-mono text-[#151717]/60 hover:text-[#151717] flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_read_more">LIHAT SEMUA TIPS</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
=======
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
>>>>>>> origin/main
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<<<<<<< HEAD
                <!-- Blog 1 -->
                <div class="bg-white border border-[#151717]/10 rounded-3xl overflow-hidden group shadow-sm">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-red-500/10 backdrop-blur-md border border-red-500/20 text-red-600 px-3 py-1 rounded-full text-[10px] font-bold font-mono">KEUANGAN</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#151717] font-headings mb-3 group-hover:text-[#151717]/80 transition-colors" data-i18n="blog_1_title">Kasir Sering Minus? Ini 5 Penyebabnya</h3>
                        <p class="text-zinc-500 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_1_desc">Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.</p>
                        <span class="text-xs font-bold text-[#151717] flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>
                <!-- Blog 2 -->
                <div class="bg-white border border-[#151717]/10 rounded-3xl overflow-hidden group shadow-sm">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-[#151717]/10 backdrop-blur-md border border-[#151717]/20 text-[#151717] px-3 py-1 rounded-full text-[10px] font-bold font-mono">MARKETING</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#151717] font-headings mb-3 group-hover:text-[#151717]/80 transition-colors" data-i18n="blog_2_title">Trik Agar Toko Muncul Paling Atas di Google</h3>
                        <p class="text-zinc-500 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_2_desc">Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.</p>
                        <span class="text-xs font-bold text-[#151717] flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>
                <!-- Blog 3 -->
                <div class="bg-white border border-[#151717]/10 rounded-3xl overflow-hidden group shadow-sm">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-emerald-500/10 backdrop-blur-md border border-emerald-500/20 text-emerald-600 px-3 py-1 rounded-full text-[10px] font-bold font-mono">OPERASIONAL</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#151717] font-headings mb-3 group-hover:text-[#151717]/80 transition-colors" data-i18n="blog_3_title">Capek Balas Chat? Pakai Trik Ini</h3>
                        <p class="text-zinc-500 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_3_desc">Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.</p>
                        <span class="text-xs font-bold text-[#151717] flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
=======

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
>>>>>>> origin/main
                    </div>
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <!-- Dark Contrast Footer Section ("How FIND Can Help You" style) -->
    <section id="interactive-footer" class="py-32 bg-[#0c0c0d] text-white relative overflow-hidden z-20">
        <!-- Interactive background image parallax container -->
        <div id="footer-bg-image" class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 transition-all duration-700 pointer-events-none z-0"></div>
        <!-- High-contrast overlay to maintain text legibility -->
        <div class="absolute inset-0 bg-[#0c0c0d]/90 z-10 pointer-events-none"></div>
=======
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
>>>>>>> origin/main

        <div class="max-w-7xl mx-auto px-6 relative z-20">
            <span class="text-xs font-mono uppercase tracking-widest text-white/50 block mb-6">/// INTERACTIVE DIRECTORY</span>
            <h2 class="text-4xl md:text-6xl font-extrabold tracking-tight font-headings mb-16 max-w-2xl leading-none">Bagaimana Kami Membantu Bisnis Anda?</h2>
            
            <!-- Interactive Category Rows -->
            <div class="border-t border-white/10 divide-y divide-white/10 mb-28">
                <!-- Row 1 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4">Sistem Kasir Cloud</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors">INTEGRASI POS & DATA REAL-TIME &rarr;</span>
                </a>
                <!-- Row 2 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4">Asisten AI Cerdas</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors">REPLY BOT & SALES ASSISTANT &rarr;</span>
                </a>
                <!-- Row 3 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4">Website & SEO Bisnis</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors">OPTIMALISASI GOOGLE MAPS & &rarr;</span>
                </a>
            </div>

<<<<<<< HEAD
            <!-- FAQ Section inside Dark Footer -->
            <div class="max-w-4xl mx-auto mb-32">
                <h3 class="text-2xl md:text-3xl font-extrabold font-headings text-white mb-12 text-center" data-i18n="faq_title">Pertanyaan Umum</h3>
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden transition-all duration-300">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group" onclick="toggleFaq(this)">
                            <span class="font-bold text-white text-sm md:text-base group-hover:text-emerald-400 transition-colors" data-i18n="faq_1_q">Apakah cocok untuk bisnis kecil / UMKM?</span>
                            <span class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-white/50 group-hover:text-white transition-all transform duration-300 shrink-0"><i class="fa-solid fa-chevron-down"></i></span>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-350 ease-in-out">
                            <p class="px-6 pb-6 text-white/60 text-xs md:text-sm leading-relaxed" data-i18n="faq_1_a">Sangat cocok! Sistem kami dirancang sederhana agar mudah dipahami bahkan untuk yang gaptek sekalipun.</p>
=======
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
>>>>>>> origin/main
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden transition-all duration-300">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group" onclick="toggleFaq(this)">
                            <span class="font-bold text-white text-sm md:text-base group-hover:text-emerald-400 transition-colors" data-i18n="faq_2_q">Berapa lama waktu pembuatan?</span>
                            <span class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-white/50 group-hover:text-white transition-all transform duration-300 shrink-0"><i class="fa-solid fa-chevron-down"></i></span>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-350 ease-in-out">
                            <p class="px-6 pb-6 text-white/60 text-xs md:text-sm leading-relaxed" data-i18n="faq_2_a">Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung kompleksitas sistem.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden transition-all duration-300">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none group" onclick="toggleFaq(this)">
                            <span class="font-bold text-white text-sm md:text-base group-hover:text-emerald-400 transition-colors" data-i18n="faq_3_q">Bagaimana jika ada error di kemudian hari?</span>
                            <span class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-xs text-white/50 group-hover:text-white transition-all transform duration-300 shrink-0"><i class="fa-solid fa-chevron-down"></i></span>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-350 ease-in-out">
                            <p class="px-6 pb-6 text-white/60 text-xs md:text-sm leading-relaxed" data-i18n="faq_3_a">Kami memberikan garansi perbaikan gratis serta pendampingan penuh untuk melatih staf Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Details & Newsletter -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 pt-16 border-t border-white/10 text-white/50 text-sm">
                <div>
<<<<<<< HEAD
                    <a href="#" class="inline-block mb-6">
                        <img src="{{ asset('images/logo.png') }}" class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]" alt="INXDVI Logo">
                    </a>
                    <p class="text-xs text-white/40 leading-relaxed mb-6" data-i18n="footer_about_desc">Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.</p>
                    <div class="flex gap-2">
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-tiktok"></i></a>
=======
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
>>>>>>> origin/main
                    </div>
                </div>
                <div>
<<<<<<< HEAD
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i class="fa-solid fa-link text-white/40 text-[10px]"></i> Menu</h4>
                    <ul class="space-y-3 text-xs text-white/40 font-medium">
                        <li><a href="#masalah" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Masalah Bisnis</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Solusi Kami</a></li>
                        <li><a href="#hemat" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hitung Hemat</a></li>
                        <li><a href="#portfolio" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hasil Kerja</a></li>
=======
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
>>>>>>> origin/main
                    </ul>
                </div>
                <div>
<<<<<<< HEAD
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i class="fa-solid fa-location-dot text-white/40 text-[10px]"></i> Kontak</h4>
                    <ul class="space-y-4 text-xs text-white/40 font-medium">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin mt-1 text-white/40"></i>
                            <span class="leading-relaxed">Jl. Jendral Sudirman No. 10, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-white/40"></i>
                            <span>halo@inxdvi.com</span>
                        </li>
=======
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
>>>>>>> origin/main
                    </ul>
                </div>
                <div>
<<<<<<< HEAD
                    <h4 class="text-white font-bold mb-6 text-sm" data-i18n="newsletter_title">Tips Bisnis Gratis</h4>
                    <p class="text-xs text-white/40 mb-4 leading-normal" data-i18n="newsletter_desc">Masukkan email untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..." class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-white transition-colors pr-10">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-white hover:bg-white/80 text-black rounded flex items-center justify-center transition-colors">
=======
                    <h4 class="text-zinc-900 dark:text-white font-bold mb-6 text-sm">Tips Bisnis Gratis</h4>
                    <p class="text-xs text-zinc-800 dark:text-zinc-400 mb-4 leading-normal">Masukkan email
                        untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..."
                            class="w-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 rounded-lg px-4 py-2.5 text-xs text-zinc-900 dark:text-white focus:outline-none focus:border-indigo-600 dark:focus:border-indigo-400 transition-colors pr-10">
                        <button
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-indigo-600 hover:bg-indigo-500 rounded flex items-center justify-center text-white transition-colors shadow-sm">
>>>>>>> origin/main
                            <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        </button>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <!-- Bottom Credits -->
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 mt-16 border-t border-white/10 text-xs text-white/30 font-mono">
=======
            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-black/10 dark:border-white/10 text-xs text-zinc-500 font-mono reveal">
>>>>>>> origin/main
                <p>&copy; 2024 INXDVI Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Terms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Animation Libraries (Lenis & GSAP) -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // 1. Lenis Smooth Scrolling Setup
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);

        // Integrate Lenis with GSAP ScrollTrigger
        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);

        // Navbar blur on scroll
        const navbar = document.getElementById('navbar');
        lenis.on('scroll', (e) => {
            if (e.scroll > 50) {
                navbar.classList.add('bg-[#f6f5f3]/85', 'backdrop-blur-md', 'border-b', 'border-[#151717]/10', 'shadow-sm');
                navbar.classList.remove('py-6');
                navbar.classList.add('py-4');
            } else {
                navbar.classList.remove('bg-[#f6f5f3]/85', 'backdrop-blur-md', 'border-b', 'border-[#151717]/10', 'shadow-sm');
                navbar.classList.add('py-6');
                navbar.classList.remove('py-4');
            }
        });

        // 2. Cinematic Hero Text Zoom Animation
        const heroTl = gsap.timeline({
            scrollTrigger: {
                trigger: ".hero-container",
                start: "top top",
                end: "bottom top",
                scrub: true,
                pin: true,
                anticipatePin: 1
            }
        });

        // Zoom the SVG text mask
        heroTl.to("#mask-text", {
            scale: 75,
            transformOrigin: "50% 53%",
            ease: "power2.inOut"
        }, 0);

        // Fade out overlays as text zooms
        heroTl.to(".hero-overlay-content", {
            opacity: 0,
            y: -80,
            ease: "power2.inOut"
        }, 0);

        // 3. Scroll-driven Text Highlight / Reveal
        const paragraph = document.getElementById('reveal-paragraph');
        if (paragraph) {
            const text = paragraph.innerText;
            paragraph.innerHTML = text.split(" ").map(word => `<span class="reveal-word font-headings">${word}</span>`).join(" ");

            gsap.to(".reveal-word", {
                color: "#151717",
                stagger: 0.1,
                scrollTrigger: {
                    trigger: paragraph,
                    start: "top 80%",
                    end: "bottom 35%",
                    scrub: true,
                }
            });
        }

        // 4. Parallax Scroll Zoom on Crop Mask visual cards
        gsap.utils.toArray('.crop-card').forEach(card => {
            const img = card.querySelector('.crop-img');
            gsap.to(img, {
                yPercent: 12,
                scale: 1.25,
                ease: "none",
                scrollTrigger: {
                    trigger: card,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true
                }
            });
        });

        // 5. Steps scrolling animation reveal
        gsap.utils.toArray('.step-item').forEach(step => {
            gsap.from(step, {
                opacity: 0.3,
                y: 30,
                scrollTrigger: {
                    trigger: step,
                    start: "top 85%",
                    end: "top 55%",
                    scrub: true
                }
            });
        });

        // 6. Interactive Dark Footer Category Row Hovers
        const footerRows = document.querySelectorAll('.footer-row');
        const footerBgImage = document.getElementById('footer-bg-image');
        footerRows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                const bgUrl = row.getAttribute('data-bg');
                if (bgUrl && footerBgImage) {
                    footerBgImage.style.backgroundImage = `url(${bgUrl})`;
                    footerBgImage.style.opacity = '0.35';
                }
            });
            row.addEventListener('mouseleave', () => {
                if (footerBgImage) {
                    footerBgImage.style.opacity = '0';
                }
            });
        });

        // 7. Mobile Menu Handler
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

<<<<<<< HEAD
=======
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

>>>>>>> origin/main
        // 8. FAQ Accordion Logic
        function toggleFaq(btn) {
            const container = btn.parentElement;
            const answer = container.querySelector('.faq-answer');
            const icon = btn.querySelector('i');

            // Check if open
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Close all first
            container.parentElement.querySelectorAll('.faq-answer').forEach(el => {
                el.style.maxHeight = '0px';
                el.parentElement.classList.remove('border-[#151717]/20', 'border-white/30');
            });
            container.parentElement.querySelectorAll('button i').forEach(chevron => {
                chevron.classList.remove('rotate-180');
            });

            // Toggle active
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                container.classList.add('border-white/30');
                icon.classList.add('rotate-180');
            }
        }

        // 9. Interactive ROI Calculator Logic
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

            // Update displays
            calcManualTotal.innerText = manual;
            calcSystemTotal.innerText = system;
            calcSavedTotal.innerText = saved;
        }

        if (calcStaff && calcSalary) {
            calcStaff.addEventListener('input', updateCalculator);
            calcSalary.addEventListener('input', updateCalculator);
            updateCalculator();
        }

        // 10. Translation Dictionary & System
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');

        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                nav_problem: "Masalah", nav_solution: "Solusi", nav_benefit: "Hemat", nav_portfolio: "Portfolio", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "BISNIS JADI AUTOPILOT",
                hero_title: "Bisnis Jalan Otomatis <br> Omzet Naik Drastis",
                hero_desc: "Stop jadi 'budak' di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.",
                btn_start: "Konsultasi via WA", btn_portfolio: "LIHAT HASIL KERJA",
                sec_prob_sub: "/// KELUHAN UMUM",
                sec_interactive_sub: "/// EKOSISTEM DIGITAL",
                sec_prob_title: "Apakah Bisnis Anda Mengalami Masalah Ini?",
                prob_1_title: "Uang & Stok Selisih", prob_1_desc: "Tiap tutup toko uang di laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.",
                prob_2_title: "Pusing Rekap Manual", prob_2_desc: "Akhir bulan lembur ngitung nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.",
                prob_3_title: "Kalah Sama Tetangga", prob_3_desc: "Toko sebelah sudah bisa pesan online dan ada di Google Maps, toko Anda masih nunggu bola.",
                sec_service_sub: "/// SOLUSI KAMI", sec_service_title: "Solusi Praktis Tanpa Ribet", sec_service_desc: "Kami sediakan 'alat digital' biar Anda bisa tidur nyenyak sementara sistem bekerja.",
                srv_mobile_title: "Aplikasi Kasir & Stok", srv_mobile_desc: "Pantau penjualan dan stok barang langsung dari HP (Real-time).",
                srv_web_title: "Website Pencari Pelanggan", srv_web_desc: "Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.",
                srv_sosmed_title: "Bot Balas Chat", srv_sosmed_desc: "Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.",
                srv_sec_title: "Keamanan Data", srv_sec_desc: "Data keuangan Anda aman, tidak akan bocor ke kompetitor.",
                srv_vector_title: "Desain Logo & Branding", srv_vector_desc: "Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.",
                srv_sosmed_spec_title: "Jasa Kelola Sosmed", srv_sosmed_spec_desc: "Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.",
                sec_roi_sub: "/// HITUNG-HITUNGAN CUAN",
                sec_roi_title: "Lebih Murah Dari Gaji Karyawan",
                sec_roi_desc: "Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.",
                roi_1: "Sistem bekerja 24 jam nonstop", roi_2: "Akurasi data 100% (Anti Salah Hitung)", roi_3: "Investasi sekali, untung selamanya",
                btn_calc: "Hitung Penghematan Saya",
                card_manual: "Cara Manual", card_desc_manual: "Gaji Admin UMR Setahun",
                card_tech: "Pakai Sistem", card_desc_tech: "Investasi Awal (Sekali Bayar)",
                roi_summary: "Anda Menghemat Uang:",
                roi_unit: "Juta",
                trust_title: "\"Saya Gaptek, Takut Gak Bisa Pakai\"",
                trust_desc: "Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.",
                sec_port_sub: "/// SHOWCASE", sec_port_title: "Portfolio Kami", btn_see_all: "LIHAT SEMUA",
                sec_workflow_sub: "/// ALUR KERJA", sec_workflow_title: "Proses Gampang Anti Ribet",
                step_1_title: "1. Curhat Dulu", step_1_desc: "Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi.",
                step_2_title: "2. Kami Buatkan", step_2_desc: "Tim kami mulai merancang sistem sesuai kebutuhan Anda.",
                step_3_title: "3. Pengerjaan", step_3_desc: "Proses coding dan pembuatan aplikasi oleh ahli kami.",
                step_4_title: "4. Training & Jadi", step_4_desc: "Kami ajari cara pakainya sampai Anda dan staf mahir.",
                sec_client_title: "Kata Klien Kami",
                sec_blog_sub: "/// TIPS BISNIS", sec_blog_title: "Artikel & Tips", btn_read_more: "LIHAT SEMUA TIPS",
                blog_1_title: "Kasir Sering Minus? Ini 5 Penyebabnya", blog_1_desc: "Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.",
                blog_2_title: "Trik Agar Toko Muncul Paling Atas di Google", blog_2_desc: "Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.",
                blog_3_title: "Capek Balas Chat? Pakai Trik Ini", blog_3_desc: "Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.",
                footer_cta_title: "Jangan Biarkan Kompetitor <br> Menyalip Anda!",
                footer_cta_desc: "Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.",
                btn_wa_footer: "Hubungi via WhatsApp",
                footer_about_desc: "Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.",
                newsletter_title: "Tips Bisnis Gratis", newsletter_desc: "Masukkan email untuk dapat tips meningkatkan omzet tiap minggu.",
                calc_title: "Kalkulator ROI Interaktif",
                calc_staff_label: "Jumlah Karyawan Admin",
                calc_staff_unit: "Orang",
                calc_salary_label: "Gaji Per Karyawan (Bulanan)",
                faq_title: "Pertanyaan Umum",
                faq_1_q: "Apakah cocok untuk bisnis kecil / UMKM?",
                faq_1_a: "Sangat cocok! Sistem kami dirancang sederhana agar mudah dipahami bahkan untuk yang gaptek sekalipun.",
                faq_2_q: "Berapa lama waktu pembuatan?",
                faq_2_a: "Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung kompleksitas sistem.",
                faq_3_q: "Bagaimana jika ada error di kemudian hari?",
                faq_3_a: "Kami memberikan garansi perbaikan gratis serta pendampingan penuh untuk melatih staf Anda."
            },
            en: {
                nav_problem: "Problems", nav_solution: "Solutions", nav_benefit: "Savings", nav_portfolio: "Portfolio", btn_contact: "Free Consult", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "DIGITAL TRANSFORMATION READY",
                hero_title: "Digital <br> Transformation <br> For Your Business",
                hero_desc: "We help your business grow faster with cutting-edge technology solutions, modern design, and measurable digital strategies.",
                btn_start: "Get Started", btn_portfolio: "VIEW PORTFOLIO",
                sec_prob_sub: "/// COMMON ISSUES",
                sec_interactive_sub: "/// DIGITAL ECOSYSTEM",
                sec_prob_title: "Is Your Business Facing These Issues?",
                prob_1_title: "Cash Mismatch", prob_1_desc: "Money missing from the drawer? Inventory disappearing? Signs of leaks or dishonest staff.",
                prob_2_title: "Manual Recap Headache", prob_2_desc: "Overtime at month-end to calculate handwritten notes. One mistake costs millions.",
                prob_3_title: "Losing to Competitors", prob_3_desc: "Competitors are online and on Google Maps, while your shop waits for customers.",
                sec_service_sub: "/// SERVICES", sec_service_title: "Our Services", sec_service_desc: "Comprehensive technology solutions for your digital needs and business growth.",
                srv_mobile_title: "Mobile App Dev", srv_mobile_desc: "High-performance iOS & Android apps with best UX.",
                srv_web_title: "Website & SEO", srv_web_desc: "Responsive websites optimized for search engines.",
                srv_sosmed_title: "Social Media", srv_sosmed_desc: "Creative content strategy and account management for brand awareness.",
                srv_sec_title: "Security", srv_sec_desc: "Protecting digital assets with high security standards.",
                srv_vector_title: "Vector Design & Branding", srv_vector_desc: "Make your brand look premium. Logo design, banners, and attractive menus.",
                srv_sosmed_spec_title: "Social Media Specialist", srv_sosmed_spec_desc: "We handle your IG & TikTok. From content ideas, video editing, to daily posting.",
                sec_roi_sub: "/// PROFIT CALCULATION",
                sec_roi_title: "Cheaper Than Employee Salary",
                sec_roi_desc: "Instead of hiring 2 new admins, invest in a system. No bonuses, no sick leave, and works 24/7.",
                roi_1: "System works 24/7 nonstop", roi_2: "100% Data Accuracy", roi_3: "One-time investment, lifetime profit",
                btn_calc: "Calculate My Savings",
                card_manual: "Manual Way", card_desc_manual: "Yearly Admin Salary",
                card_tech: "Using System", card_desc_tech: "Initial Investment (One Time)",
                roi_summary: "You Save Money:",
                roi_unit: "Million",
                trust_title: "\"I'm Not Tech Savvy\"",
                trust_desc: "Don't worry. We won't leave you. Our team will train you and your staff until fluent. If there's an error, we fix it for free.",
                sec_port_sub: "/// SHOWCASE", sec_port_title: "Our Portfolio", btn_see_all: "SEE ALL",
                sec_workflow_sub: "/// WORKFLOW", sec_workflow_title: "Our Workflow",
                step_1_title: "1. Consultation", step_1_desc: "In-depth discussion regarding your business needs and targets.",
                step_2_title: "2. Planning & Design", step_2_desc: "System architecture design, UI/UX, and project timeline.",
                step_3_title: "3. Development", step_3_desc: "Iterative coding with high quality and security standards.",
                step_4_title: "4. Launch & Support", step_4_desc: "System launch and continuous technical support.",
                sec_client_title: "What Our Clients Say",
                sec_blog_sub: "/// INSIGHTS", sec_blog_title: "News & Articles", btn_read_more: "READ MORE",
                blog_1_title: "5 Signs of Cashier Fraud", blog_1_desc: "Don't let money leak. Recognize the signs of dishonest staff at the checkout counter.",
                blog_2_title: "How to Rank Top on Google Maps", blog_2_desc: "Free ways to make customers in your area instantly find your shop on Google Maps.",
                blog_3_title: "Tired of Replying Chats? Use This", blog_3_desc: "The secret to answering customer chats in 1 second even when you're asleep.",
                footer_cta_title: "Ready to Transform <br> Your Business?",
                footer_cta_desc: "Don't let competitors get ahead. Consult your digital needs with our experts now.",
                btn_wa_footer: "Chat on WhatsApp",
                footer_about_desc: "Your trusted technology partner for digital transformation. We create innovative solutions that drive growth.",
                newsletter_title: "Free Business Tips", newsletter_desc: "Enter email to get tips on increasing turnover every week.",
                calc_title: "Interactive ROI Calculator",
                calc_staff_label: "Number of Admin Staff",
                calc_staff_unit: "People",
                calc_salary_label: "Monthly Staff Salary",
                faq_title: "Frequently Asked Questions",
                faq_1_q: "Is it suitable for small businesses / MSMEs?",
                faq_1_a: "Absolutely! Our system is designed to be simple and easy to understand, even for beginners.",
                faq_2_q: "How long does development take?",
                faq_2_a: "The development process usually takes 2 to 4 weeks depending on the complexity.",
                faq_3_q: "What if there are bugs or errors later?",
                faq_3_a: "We provide free repair guarantees and full training support for your staff."
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
            updateCalculator();
        }

        updateLang(currentLang);

        langBtn.addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });
    </script>
</body>

</html>