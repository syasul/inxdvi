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
            --bg-main: #f6f5f3;
            --bg-card: #ffffff;
            --border-color: rgba(21, 23, 23, 0.08);
            --text-main: #151717;
            --text-muted: rgba(21, 23, 23, 0.6);
            --accent-primary: #4f46e5;
            --glass-bg: rgba(246, 245, 243, 0.85);
            --glass-border: rgba(21, 23, 23, 0.08);
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.02), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
            --gradient-start: #151717;
            --gradient-end: #4f46e5;
        }

        .dark {
            --bg-main: #030712;
            --bg-card: #0f172a;
            --border-color: rgba(255, 255, 255, 0.06);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --glass-bg: rgba(3, 7, 18, 0.85);
            --glass-border: rgba(255, 255, 255, 0.06);
            --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 8px 10px -6px rgba(0, 0, 0, 0.3);
            --gradient-start: #f8fafc;
            --gradient-end: #818cf8;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            overflow-x: hidden;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
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
        .lenis-scrolling iframe {
            pointer-events: none;
        }

        /* SVG Text Mask Styling */
        svg text {
            transform-origin: center;
        }

        /* Scroll Reveal Word Styling */
        .reveal-word {
            color: var(--text-muted);
            opacity: 0.15;
            transition: color 0.4s ease, opacity 0.4s ease;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-main);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-muted);
        }

        /* Spotlight Card */
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
            background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y), rgba(79, 70, 229, 0.08), transparent 40%);
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
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.05);
        }

        .dark .glass-panel.scrolled {
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.4);
        }

        /* Text Gradient Accent */
        .text-gradient {
            display: inline;
            background-clip: text;
            -webkit-background-clip: text;
            color: var(--gradient-end);
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(135deg, var(--gradient-start) 20%, var(--gradient-end) 100%);
            transition: all 0.5s ease;
        }

        /* Shimmer Button */
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
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: skewX(-25deg);
            transition: 0.75s;
        }

        .shimmer-btn:hover::after {
            left: 125%;
            transition: 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Particle Canvas */
        #home-particle-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 0;
            opacity: 0.25;
            transition: opacity 0.5s ease;
        }
        .dark #home-particle-canvas {
            opacity: 0.5;
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
    </style>
</head>

<body class="antialiased selection:bg-[#4f46e5]/20 selection:text-[#4f46e5]">

    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress"
        class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 z-[100] transition-all duration-75"
        style="width: 0%;"></div>

    <!-- Particle Background Canvas -->
    <canvas id="home-particle-canvas"></canvas>

    <!-- Mouse Follow Ambient Glow -->
    <div id="ambient-glow"
        class="fixed pointer-events-none w-[600px] h-[600px] rounded-full bg-[#4f46e5]/5 dark:bg-[#4f46e5]/5 opacity-30 dark:opacity-40 blur-[120px] z-0 -translate-x-1/2 -translate-y-1/2 transition-all duration-700 ease-out"
        style="left: -1000px; top: -1000px;"></div>

    <!-- Header Navigation -->
    <nav id="navbar" class="fixed w-full z-50 glass-panel py-4 md:py-6">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 z-50 text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]" alt="INXDVI Logo">
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-2 bg-black/5 dark:bg-white/5 p-1 rounded-full border border-black/10 dark:border-white/10">
                <a href="#masalah"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_problem">Masalah</a>
                <a href="#layanan"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="#portfolio"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_portfolio">Portfolio</a>
            </div>

            <!-- Custom Controls & Call to Action -->
            <div class="flex items-center gap-3 z-50">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle"
                    class="h-9 w-9 rounded-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 flex items-center justify-center hover:bg-black/10 dark:hover:bg-white/10 transition-all cursor-pointer text-zinc-600 dark:text-white">
                    <i id="theme-toggle-dark-icon" class="fa-solid fa-moon hidden"></i>
                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun hidden"></i>
                </button>

                <!-- Language Toggle Button -->
                <button id="lang-toggle"
                    class="h-9 px-3 rounded-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 flex items-center gap-2 hover:bg-black/10 dark:hover:bg-white/10 transition-all cursor-pointer">
                    <span id="lang-flag" class="text-sm">🇮🇩</span>
                    <span id="lang-text" class="text-xs font-bold font-mono text-zinc-800 dark:text-white">ID</span>
                </button>

                <!-- WhatsApp CTA Button -->
                <a href="https://wa.me/628123456789"
                    class="hidden md:flex items-center gap-2 px-6 py-3 bg-zinc-900 dark:bg-white text-white dark:text-black text-xs font-bold rounded-full hover:bg-zinc-800 dark:hover:bg-gray-100 transition-all hover:scale-[1.02] shadow-sm">
                    <span data-i18n="btn_contact">Konsultasi Gratis</span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="md:hidden w-9 h-9 flex items-center justify-center text-zinc-800 dark:text-white text-lg focus:outline-none hover:text-indigo-400 transition bg-black/5 dark:bg-white/5 rounded-full border border-black/10 dark:border-white/10">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 dark:bg-zinc-950/95 backdrop-blur-xl border-b border-black/10 dark:border-white/10 shadow-lg transition-all z-40">
            <div class="p-4 flex flex-col gap-2">
                <a href="#masalah"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_problem">Masalah Anda</a>
                <a href="#layanan"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_solution">Solusi</a>
                <a href="#hemat"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_benefit">Penghematan</a>
                <a href="https://wa.me/628123456789"
                    class="block w-full py-3 bg-zinc-900 dark:bg-white text-white dark:text-black font-bold rounded-lg text-center hover:bg-black dark:hover:bg-zinc-100 transition-colors shadow-sm"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- Cinematic Hero Section with Text Clipping Mask -->
    <div class="hero-container relative w-full h-screen overflow-hidden bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500">
        <!-- High-quality video loop behind -->
        <video class="absolute inset-0 w-full h-full object-cover z-0 mix-blend-screen opacity-60" autoplay loop muted playsinline>
            <source src="https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761" type="video/mp4">
        </video>

        <!-- SVG Cutout Mask Layer (with overflow-hidden fixes) -->
        <div class="absolute inset-0 w-full h-full z-10 pointer-events-none overflow-hidden">
            <svg class="w-full h-full overflow-hidden" viewBox="0 0 1000 600" preserveAspectRatio="xMidYMid slice" style="overflow: hidden;">
                <defs>
                    <mask id="hero-mask" x="0" y="0" width="1000" height="600" maskUnits="userSpaceOnUse">
                        <!-- White background covers entire container -->
                        <rect x="0" y="0" width="1000" height="600" fill="white" />
                        <!-- Black text cuts a hole showing video underneath -->
                        <text id="mask-text" x="50%" y="53%" dominant-baseline="middle" text-anchor="middle" font-size="120" font-family="Outfit, sans-serif" font-weight="900" fill="black">INXDVI</text>
                    </mask>
                </defs>
                <!-- Draws panel everywhere except the text hole. Fill color matches the theme variables -->
                <rect x="0" y="0" width="1000" height="600" fill="var(--bg-main)" mask="url(#hero-mask)" style="transition: fill 0.5s ease;" />
            </svg>
        </div>

        <!-- Floating UI contents (Fades out as mask scales) -->
        <div class="hero-overlay-content absolute inset-0 z-20 flex flex-col justify-between items-center text-center py-28 px-6 pointer-events-none">
            <div class="mt-24 md:mt-20">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-zinc-500/10 dark:border-white/10 bg-black/5 dark:bg-white/5 text-zinc-700 dark:text-zinc-300 text-[10px] md:text-xs font-mono mb-4 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span data-i18n="hero_badge">BISNIS JADI AUTOPILOT</span>
                </div>
                <!-- Fixed title: adjust margins/sizes on mobile to prevent overlapping -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-zinc-900 dark:text-white font-headings max-w-4xl leading-tight px-4" style="margin-top: 1vh;">
                    <span data-i18n="hero_title_1">Bisnis Jalan Otomatis</span> <br>
                    <span class="text-gradient" data-i18n="hero_title_2">Omzet Naik Drastis</span>
                </h1>
            </div>

            <div class="flex flex-col items-center gap-6 max-w-xl pointer-events-auto mb-6 md:mb-12">
                <p class="text-xs md:text-sm text-zinc-600 dark:text-zinc-400 font-light leading-relaxed px-4" data-i18n="hero_desc">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 w-full justify-center px-6">
                    <a href="https://wa.me/628123456789"
                        class="shimmer-btn px-8 py-3.5 bg-zinc-900 dark:bg-white text-white dark:text-black hover:bg-black dark:hover:bg-zinc-100 rounded-full text-center font-bold tracking-wide transition-all shadow-sm flex items-center justify-center gap-2 text-xs">
                        <span data-i18n="btn_start">Konsultasi via WA</span> <i class="fa-brands fa-whatsapp text-base"></i>
                    </a>
                    <a href="#portfolio"
                        class="px-8 py-3.5 rounded-full border border-black/10 dark:border-white/10 hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-zinc-300 transition-all font-mono text-[10px] flex items-center justify-center gap-2">
                        <span data-i18n="btn_portfolio">LIHAT HASIL KERJA</span> <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- "Why INXDVI" Text-reveal paragraph section -->
    <section id="masalah" class="py-32 bg-[var(--bg-main)] flex items-center justify-center border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-6" data-i18n="sec_prob_sub">/// FILOSOFI KAMI</span>
            <p id="reveal-paragraph" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-headings leading-tight max-w-5xl mx-auto text-zinc-900 dark:text-white" data-i18n="reveal_desc">
                Dunia berubah dengan cepat. Jangan terjebak mengelola bisnis secara manual. Kami membantu Anda bertransformasi dengan sistem otomatis yang bekerja 24 jam nonstop. Anda tinggal memantau dari genggaman.
            </p>
        </div>
    </section>

    <!-- Crop Masks Parallax Visual Showcase -->
    <section class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 overflow-hidden transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-12" data-i18n="sec_interactive_sub">/// EKOSISTEM DIGITAL</span>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Kasir">
                    <div class="absolute inset-0 bg-black/15 group-hover:bg-black/25 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-zinc-900 dark:bg-white text-white dark:text-black text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10 dark:border-black/10" data-i18n="eco_card_1">Kasir & POS</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden md:translate-y-12 group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Laporan">
                    <div class="absolute inset-0 bg-black/15 group-hover:bg-black/25 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-zinc-900 dark:bg-white text-white dark:text-black text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10 dark:border-black/10" data-i18n="eco_card_2">Laporan Stok</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Asisten AI">
                    <div class="absolute inset-0 bg-black/15 group-hover:bg-black/25 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-zinc-900 dark:bg-white text-white dark:text-black text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10 dark:border-black/10" data-i18n="eco_card_3">Asisten AI</span>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="crop-card relative h-80 md:h-[450px] overflow-hidden md:translate-y-12 group shadow-sm transition-all duration-500 hover:shadow-lg hover:-translate-y-2" style="clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 15% 50%);">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" class="crop-img absolute inset-0 w-full h-full object-cover" alt="Dashboard">
                    <div class="absolute inset-0 bg-black/15 group-hover:bg-black/25 transition-all duration-300"></div>
                    <div class="absolute bottom-6 left-10 z-10">
                        <span class="px-4 py-2 bg-zinc-900 dark:bg-white text-white dark:text-black text-[10px] md:text-xs font-bold font-headings rounded-full tracking-wider shadow-lg uppercase border border-white/10 dark:border-black/10" data-i18n="eco_card_4">Dashboard HP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-28 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 reveal">
                <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2" data-i18n="sec_service_sub">/// SOLUSI KAMI</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings" data-i18n="sec_service_title">Solusi Praktis Tanpa Ribet</h2>
            </div>

            <!-- Spotlight Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 border border-black/10 dark:border-white/10 rounded-3xl overflow-hidden bg-[var(--bg-card)] shadow-sm transition-colors duration-500">
                <!-- Service 1 -->
                <div class="spotlight-card p-8 border-b md:border-b-0 md:border-r border-black/10 dark:border-white/10 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group reveal reveal-delay-100">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_mobile_title">Aplikasi Kasir & Stok</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_mobile_desc">Pantau penjualan dan stok barang langsung dari HP (Real-time).</p>
                </div>
                <!-- Service 2 -->
                <div class="spotlight-card p-8 border-b md:border-b-0 md:border-r border-black/10 dark:border-white/10 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group reveal reveal-delay-200">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_web_title">Website Pencari Pelanggan</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_web_desc">Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.</p>
                </div>
                <!-- Service 3 -->
                <div class="spotlight-card p-8 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group reveal reveal-delay-300">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_vector_title">Desain Logo & Branding</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_vector_desc">Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.</p>
                </div>
                <!-- Row 2 -->
                <div class="spotlight-card p-8 border-t border-r border-black/10 dark:border-white/10 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group border-b md:border-b-0 reveal reveal-delay-100">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_sosmed_spec_title">Jasa Kelola Sosmed</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_sosmed_spec_desc">Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.</p>
                </div>
                <div class="spotlight-card p-8 border-t border-r border-black/10 dark:border-white/10 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group border-b md:border-b-0 reveal reveal-delay-200">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_sec_title">Keamanan Data</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_sec_desc">Data keuangan Anda aman, tidak akan bocor ke kompetitor.</p>
                </div>
                <div class="spotlight-card p-8 border-t border-black/10 dark:border-white/10 hover:bg-black/[0.02] dark:hover:bg-white/[0.01] transition-colors group reveal reveal-delay-300">
                    <div class="w-12 h-12 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center mb-8 text-zinc-800 dark:text-white group-hover:bg-zinc-900 dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-black transition-all">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="srv_sosmed_title">Bot Balas Chat</h3>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed font-light" data-i18n="srv_sosmed_desc">Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive ROI Calculator Section -->
    <section id="hemat" class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2" data-i18n="sec_roi_sub">/// HITUNG-HITUNGAN CUAN</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings mb-6" data-i18n="sec_roi_title">Lebih Murah Dari Gaji Karyawan</h2>
                    <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 font-light leading-relaxed mb-8" data-i18n="sec_roi_desc">
                        Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.
                    </p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-zinc-850 dark:text-zinc-250 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400"></i> <span data-i18n="roi_1">Sistem bekerja 24 jam nonstop</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-850 dark:text-zinc-250 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400"></i> <span data-i18n="roi_2">Akurasi data 100% (Anti Salah Hitung)</span>
                        </li>
                        <li class="flex items-center gap-3 text-zinc-850 dark:text-zinc-250 font-medium">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400"></i> <span data-i18n="roi_3">Investasi sekali, untung selamanya</span>
                        </li>
                    </ul>

                    <!-- Calculator Input Container -->
                    <div class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl p-6 space-y-6 shadow-sm transition-colors duration-500">
                        <h4 class="text-zinc-900 dark:text-white font-bold text-sm uppercase tracking-wider font-headings flex items-center gap-2">
                            <i class="fa-solid fa-calculator text-[#4f46e5] dark:text-[#818cf8]"></i> <span data-i18n="calc_title">Kalkulator ROI Interaktif</span>
                        </h4>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-600 dark:text-zinc-300">
                                <span data-i18n="calc_staff_label">Jumlah Karyawan Admin</span>
                                <span class="font-bold text-zinc-900 dark:text-white font-mono"><span id="calc-staff-val">2</span> <span data-i18n="calc_staff_unit">Orang</span></span>
                            </div>
                            <input type="range" id="calc-staff" min="1" max="10" value="2" class="w-full h-1.5 bg-zinc-200 dark:bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-zinc-900 dark:accent-white">
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-semibold text-zinc-600 dark:text-zinc-300">
                                <span data-i18n="calc_salary_label">Gaji Per Karyawan (Bulanan)</span>
                                <span class="font-bold text-zinc-900 dark:text-white font-mono">Rp <span id="calc-salary-val">4</span> <span data-i18n="roi_unit">Juta</span></span>
                            </div>
                            <input type="range" id="calc-salary" min="2" max="10" value="4" class="w-full h-1.5 bg-zinc-200 dark:bg-zinc-800 rounded-lg appearance-none cursor-pointer accent-zinc-900 dark:accent-white">
                        </div>
                    </div>
                </div>

                <!-- ROI Cards (Visual display) -->
                <div class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl p-8 shadow-sm transition-colors duration-500 reveal reveal-delay-200">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div class="p-6 bg-black/5 dark:bg-white/5 rounded-2xl border border-black/5 dark:border-white/5">
                            <div class="text-xs text-zinc-500 dark:text-zinc-400 mb-2 font-mono uppercase tracking-wider" data-i18n="card_manual">Cara Manual</div>
                            <div class="text-xl md:text-2xl font-extrabold text-zinc-900 dark:text-white mb-2 font-headings">Rp <span id="calc-manual-total" class="font-mono">96</span> <span data-i18n="roi_unit">Juta</span></div>
                            <div class="text-[10px] text-zinc-500 dark:text-zinc-400 leading-normal" data-i18n="card_desc_manual">Gaji Admin UMR setahun</div>
                        </div>

                        <div class="p-6 bg-zinc-900 dark:bg-white rounded-2xl text-white dark:text-black shadow-md">
                            <div class="text-xs text-white/70 dark:text-black/70 mb-2 font-mono uppercase tracking-wider" data-i18n="card_tech">Pakai Sistem</div>
                            <div class="text-xl md:text-2xl font-extrabold text-white dark:text-black mb-2 font-headings">Rp <span id="calc-system-total" class="font-mono">5</span> <span data-i18n="roi_unit">Juta</span></div>
                            <div class="text-[10px] text-white/50 dark:text-black/50 leading-normal" data-i18n="card_desc_tech">Investasi Awal (Sekali Bayar)</div>
                        </div>
                    </div>
                    <div class="mt-8 text-center border-t border-black/10 dark:border-white/10 pt-6">
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-2" data-i18n="roi_summary">Anda Menghemat Uang:</p>
                        <p class="text-3xl md:text-4xl font-black text-emerald-600 dark:text-emerald-400 font-headings">Rp <span id="calc-saved-total" class="font-mono">91</span> <span data-i18n="roi_unit">Juta</span>++</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Reassurance Section -->
    <section class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-4xl mx-auto bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl p-8 md:p-14 text-center shadow-sm transition-colors duration-500 reveal">
            <div class="w-14 h-14 bg-black/5 dark:bg-white/5 rounded-full flex items-center justify-center text-2xl mx-auto mb-6 text-zinc-800 dark:text-white">
                <i class="fa-solid fa-hand-holding-heart text-[#4f46e5] dark:text-[#818cf8]"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-extrabold text-zinc-900 dark:text-white font-headings mb-4" data-i18n="trust_title">"Saya Gaptek, Takut Gak Bisa Pakai"</h2>
            <p class="text-sm md:text-base text-zinc-600 dark:text-zinc-400 mb-10 leading-relaxed font-light" data-i18n="trust_desc">
                Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.
            </p>
            <div class="flex flex-wrap justify-center gap-3 text-[10px] md:text-xs font-mono text-zinc-800 dark:text-white">
                <span class="px-4 py-1.5 bg-black/5 dark:bg-white/5 rounded-full border border-black/10 dark:border-white/10" data-i18n="reassure_badge_1"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> GRATIS TRAINING</span>
                <span class="px-4 py-1.5 bg-black/5 dark:bg-white/5 rounded-full border border-black/10 dark:border-white/10" data-i18n="reassure_badge_2"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> GARANSI ERROR</span>
                <span class="px-4 py-1.5 bg-black/5 dark:bg-white/5 rounded-full border border-black/10 dark:border-white/10" data-i18n="reassure_badge_3"><i class="fa-solid fa-check mr-1.5 text-emerald-600"></i> DIBIMBING SAMPAI BISA</span>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2" data-i18n="sec_port_sub">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings" data-i18n="sec_port_title">Portfolio Kami</h2>
                </div>
                <a href="#" class="text-xs font-mono text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_see_all">LIHAT SEMUA</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Portfolio 1 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm reveal reveal-delay-100">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="POS App">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">FINTECH</span>
                        <h3 class="text-lg font-bold text-white font-headings">E-Wallet App</h3>
                    </div>
                </div>
                <!-- Portfolio 2 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm reveal reveal-delay-200">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Shopify Mobile">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">COMMERCE</span>
                        <h3 class="text-lg font-bold text-white font-headings">Shopify Mobile</h3>
                    </div>
                </div>
                <!-- Portfolio 3 -->
                <div class="relative h-80 rounded-3xl overflow-hidden group shadow-sm reveal reveal-delay-300">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Team Dashboard">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-2.5 py-1 bg-white/10 border border-white/20 rounded text-[9px] text-white/95 font-mono mb-2 inline-block">SAAS</span>
                        <h3 class="text-lg font-bold text-white font-headings">Team Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Split-screen Workflow Steps Section -->
    <section id="proses" class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start relative">
                <!-- Left Sticky Column -->
                <div class="md:sticky md:top-28 md:h-[70vh] flex flex-col justify-between reveal">
                    <div>
                        <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2" data-i18n="sec_workflow_sub">/// ALUR KERJA</span>
                        <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings mb-6" data-i18n="sec_workflow_title">Proses Gampang Anti Ribet</h2>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed font-light max-w-sm" data-i18n="sec_workflow_desc">
                            Kami merancang setiap tahap agar transparan, cepat, dan berorientasi pada hasil nyata untuk bisnis Anda.
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <a href="https://wa.me/628123456789" class="inline-flex items-center gap-3 px-8 py-4 bg-zinc-900 dark:bg-white text-white dark:text-black hover:bg-black dark:hover:bg-zinc-100 font-bold rounded-full transition-all shadow-sm">
                            <span data-i18n="btn_contact">Konsultasi Gratis</span> <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Scrolling Column -->
                <div class="space-y-8 md:py-8">
                    <!-- Step 1 -->
                    <div class="step-item p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all duration-300 reveal reveal-delay-100">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-zinc-400 dark:text-zinc-700 font-headings">01</span>
                            <div class="w-10 h-10 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center text-zinc-800 dark:text-white"><i class="fa-regular fa-comments"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-3" data-i18n="step_1_title">1. Curhat Dulu</h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed font-light" data-i18n="step_1_desc">Ceritakan masalah bisnis Anda, kami dengarkan and beri solusi terbaik.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-item p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all duration-300 reveal reveal-delay-200">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-zinc-400 dark:text-zinc-700 font-headings">02</span>
                            <div class="w-10 h-10 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center text-zinc-800 dark:text-white"><i class="fa-solid fa-pen-ruler"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-3" data-i18n="step_2_title">2. Kami Buatkan</h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed font-light" data-i18n="step_2_desc">Tim kami mulai merancang arsitektur sistem dan visual prototype sesuai kebutuhan.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="step-item p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all duration-300 reveal reveal-delay-300">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-zinc-400 dark:text-zinc-700 font-headings">03</span>
                            <div class="w-10 h-10 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center text-zinc-800 dark:text-white"><i class="fa-solid fa-code"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-3" data-i18n="step_3_title">3. Pengerjaan</h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed font-light" data-i18n="step_3_desc">Proses coding aplikasi, integrasi database, dan penjaminan kualitas oleh developer kami.</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="step-item p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all duration-300 reveal reveal-delay-400">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-3xl font-black text-zinc-400 dark:text-zinc-700 font-headings">04</span>
                            <div class="w-10 h-10 rounded-full border border-black/10 dark:border-white/10 flex items-center justify-center text-zinc-800 dark:text-white"><i class="fa-solid fa-rocket"></i></div>
                        </div>
                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white font-headings mb-3" data-i18n="step_4_title">4. Training & Jadi</h3>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed font-light" data-i18n="step_4_desc">Pelatihan staf Anda hingga mahir, go-live, dan dukungan teknis pasca rilis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings mb-16 text-center reveal" data-i18n="sec_client_title">Kata Klien Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all reveal reveal-delay-100">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold font-headings" data-i18n="testi_1_name">Budi Santoso</div>
                            <div class="text-zinc-500 dark:text-zinc-400 text-xs font-mono" data-i18n="testi_1_title">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-sm text-zinc-700 dark:text-zinc-300 italic leading-relaxed" data-i18n="testi_1_text">"Dulu pusing rekap nota, sering ribut sama karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis."</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all md:-translate-y-4 reveal reveal-delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold font-headings" data-i18n="testi_2_name">Siti Aminah</div>
                            <div class="text-zinc-500 dark:text-zinc-400 text-xs font-mono" data-i18n="testi_2_title">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-sm text-zinc-700 dark:text-zinc-300 italic leading-relaxed" data-i18n="testi_2_text">"Stok sparepart ribuan item sering hilang. Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="p-8 bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl shadow-sm hover:border-black/30 dark:hover:border-white/30 transition-all reveal reveal-delay-300">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Client" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="text-zinc-900 dark:text-white font-bold font-headings" data-i18n="testi_3_name">Michael Tan</div>
                            <div class="text-zinc-500 dark:text-zinc-400 text-xs font-mono" data-i18n="testi_3_title">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-sm text-zinc-700 dark:text-zinc-300 italic leading-relaxed" data-i18n="testi_3_text">"Saya gaptek, tapi tim INXDVI sabar banget ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles / Blog -->
    <section id="blog" class="py-24 bg-[var(--bg-main)] border-t border-black/10 dark:border-white/10 relative z-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2" data-i18n="sec_blog_sub">/// TIPS BISNIS</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-zinc-900 dark:text-white font-headings" data-i18n="sec_blog_title">Artikel & Tips</h2>
                </div>
                <a href="#" class="text-xs font-mono text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white flex items-center gap-2 group transition-colors">
                    <span data-i18n="btn_read_more">LIHAT SEMUA TIPS</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog 1 -->
                <div class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl overflow-hidden group shadow-sm transition-colors duration-500 reveal reveal-delay-100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-red-500/10 backdrop-blur-md border border-red-500/20 text-red-600 px-3 py-1 rounded-full text-[10px] font-bold font-mono">KEUANGAN</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white font-headings mb-3 group-hover:text-zinc-900/80 dark:group-hover:text-white/80 transition-colors" data-i18n="blog_1_title">Kasir Sering Minus? Ini 5 Penyebabnya</h3>
                        <p class="text-zinc-500 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_1_desc">Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.</p>
                        <span class="text-xs font-bold text-zinc-900 dark:text-white flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>
                <!-- Blog 2 -->
                <div class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl overflow-hidden group shadow-sm transition-colors duration-500 reveal reveal-delay-200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-[#4f46e5]/10 backdrop-blur-md border border-[#4f46e5]/20 text-[#4f46e5] dark:text-[#818cf8] px-3 py-1 rounded-full text-[10px] font-bold font-mono">MARKETING</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white font-headings mb-3 group-hover:text-zinc-900/80 dark:group-hover:text-white/80 transition-colors" data-i18n="blog_2_title">Trik Agar Toko Muncul Paling Atas di Google</h3>
                        <p class="text-zinc-500 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_2_desc">Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.</p>
                        <span class="text-xs font-bold text-zinc-900 dark:text-white flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>
                <!-- Blog 3 -->
                <div class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl overflow-hidden group shadow-sm transition-colors duration-500 reveal reveal-delay-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Blog Image">
                        <div class="absolute top-4 left-4 bg-emerald-500/10 backdrop-blur-md border border-emerald-500/20 text-emerald-600 px-3 py-1 rounded-full text-[10px] font-bold font-mono">OPERASIONAL</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white font-headings mb-3 group-hover:text-zinc-900/80 dark:group-hover:text-white/80 transition-colors" data-i18n="blog_3_title">Capek Balas Chat? Pakai Trik Ini</h3>
                        <p class="text-zinc-500 dark:text-zinc-400 text-xs mb-4 line-clamp-2 leading-relaxed" data-i18n="blog_3_desc">Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.</p>
                        <span class="text-xs font-bold text-zinc-900 dark:text-white flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dark Contrast Footer Section -->
    <section id="interactive-footer" class="py-32 bg-[#0c0c0d] text-white relative overflow-hidden z-20">
        <!-- Interactive background image parallax container -->
        <div id="footer-bg-image" class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 transition-all duration-700 pointer-events-none z-0"></div>
        <!-- High-contrast overlay to maintain text legibility -->
        <div class="absolute inset-0 bg-[#0c0c0d]/90 z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-20">
            <span class="text-xs font-mono uppercase tracking-widest text-white/50 block mb-6">/// INTERACTIVE DIRECTORY</span>
            <h2 class="text-4xl md:text-6xl font-extrabold tracking-tight font-headings mb-16 max-w-2xl leading-none" data-i18n="ft_sec_title">Bagaimana Kami Membantu Bisnis Anda?</h2>
            
            <!-- Interactive Category Rows -->
            <div class="border-t border-white/10 divide-y divide-white/10 mb-28">
                <!-- Row 1 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4" data-i18n="ft_row_1">Sistem Kasir Cloud</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors" data-i18n="ft_row_1_desc">INTEGRASI POS & DATA REAL-TIME &rarr;</span>
                </a>
                <!-- Row 2 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4" data-i18n="ft_row_2">Asisten AI Cerdas</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors" data-i18n="ft_row_2_desc">REPLY BOT & SALES ASSISTANT &rarr;</span>
                </a>
                <!-- Row 3 -->
                <a href="#layanan" class="footer-row block py-8 flex flex-col md:flex-row justify-between items-start md:items-center group transition-all" data-bg="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop">
                    <span class="text-2xl md:text-4xl font-extrabold font-headings transition-transform duration-300 group-hover:translate-x-4" data-i18n="ft_row_3">Website & SEO Bisnis</span>
                    <span class="text-xs font-mono text-white/50 group-hover:text-white transition-colors" data-i18n="ft_row_3_desc">OPTIMALISASI GOOGLE MAPS & &rarr;</span>
                </a>
            </div>

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
                    <a href="#" class="inline-block mb-6">
                        <img src="{{ asset('images/logo.png') }}" class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]" alt="INXDVI Logo">
                    </a>
                    <p class="text-xs text-white/40 leading-relaxed mb-6" data-i18n="footer_about_desc">Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.</p>
                    <div class="flex gap-2">
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i class="fa-solid fa-link text-white/40 text-[10px]"></i> Menu</h4>
                    <ul class="space-y-3 text-xs text-white/40 font-medium">
                        <li><a href="#masalah" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Masalah Bisnis</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Solusi Kami</a></li>
                        <li><a href="#hemat" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hitung Hemat</a></li>
                        <li><a href="#portfolio" class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hasil Kerja</a></li>
                    </ul>
                </div>
                <div>
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
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm" data-i18n="newsletter_title">Tips Bisnis Gratis</h4>
                    <p class="text-xs text-white/40 mb-4 leading-normal" data-i18n="newsletter_desc">Masukkan email untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..." class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-white transition-colors pr-10">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-white hover:bg-white/80 text-black rounded flex items-center justify-center transition-colors">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom Credits -->
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 mt-16 border-t border-white/10 text-xs text-white/30 font-mono">
                <p>&copy; 2026 INXDVI Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms</a>
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

        // Navbar blur on scroll & Scroll Progress indicator update
        const navbar = document.getElementById('navbar');
        const scrollProgress = document.getElementById('scroll-progress');
        lenis.on('scroll', (e) => {
            // Update scroll progress bar width
            const totalScrollable = document.documentElement.scrollHeight - window.innerHeight;
            if (scrollProgress && totalScrollable > 0) {
                const scrollPercent = (e.scroll / totalScrollable) * 100;
                scrollProgress.style.width = scrollPercent + '%';
            }

            if (e.scroll > 50) {
                navbar.classList.add('bg-[#f6f5f3]/85', 'dark:bg-zinc-950/85', 'backdrop-blur-md', 'border-b', 'border-[#151717]/10', 'dark:border-white/10', 'shadow-sm');
                navbar.classList.remove('py-6');
                navbar.classList.add('py-4');
            } else {
                navbar.classList.remove('bg-[#f6f5f3]/85', 'dark:bg-zinc-950/85', 'backdrop-blur-md', 'border-b', 'border-[#151717]/10', 'dark:border-white/10', 'shadow-sm');
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
        let revealScrollTrigger;
        
        function initRevealText() {
            if (revealScrollTrigger) {
                revealScrollTrigger.kill();
            }
            const text = paragraph.innerText;
            paragraph.innerHTML = text.split(" ").map(word => `<span class="reveal-word font-headings">${word}</span>`).join(" ");

            revealScrollTrigger = ScrollTrigger.create({
                trigger: paragraph,
                start: "top 80%",
                end: "bottom 35%",
                scrub: true,
                onUpdate: (self) => {
                    const progress = self.progress;
                    const words = paragraph.querySelectorAll('.reveal-word');
                    const totalWords = words.length;
                    const isDark = document.documentElement.classList.contains('dark');
                    const targetColor = isDark ? '#f8fafc' : '#151717';
                    
                    words.forEach((word, idx) => {
                        const wordThreshold = idx / totalWords;
                        if (progress > wordThreshold) {
                            word.style.color = targetColor;
                            word.style.opacity = 1;
                        } else {
                            word.style.color = 'var(--text-muted)';
                            word.style.opacity = 0.15;
                        }
                    });
                }
            });
        }
        
        if (paragraph) {
            initRevealText();
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
                el.parentElement.classList.remove('border-white/30');
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

        // 10. Mouse Ambient Glow Position Tracking
        const ambientGlow = document.getElementById('ambient-glow');
        window.addEventListener('mousemove', e => {
            if (!ambientGlow) return;
            ambientGlow.style.left = e.clientX + 'px';
            ambientGlow.style.top = e.clientY + 'px';
        }, { passive: true });

        // Spotlight card cursor position tracking
        const spotlightCards = document.querySelectorAll('.spotlight-card');
        spotlightCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // 11. Full-screen Particle Background Animation
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
                    if (this.x < 0 || this.x > hWidth) this.vx *= -1;
                    if (this.y < 0 || this.y > hHeight) this.vy *= -1;

                    this.x += this.vx;
                    this.y += this.vy;

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
                    hCtx.fillStyle = 'rgba(129, 140, 248, 0.4)';
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

                for (let i = 0; i < hParticles.length; i++) {
                    for (let j = i + 1; j < hParticles.length; j++) {
                        const p1 = hParticles[i];
                        const p2 = hParticles[j];
                        const dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);

                        if (dist < hConnectionDist) {
                            const alpha = (1 - (dist / hConnectionDist)) * 0.2;
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

        // 12. Staggered Scroll-Driven Reveals
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
            rootMargin: "0px 0px -45px 0px"
        });
        revealElements.forEach(el => revealObserver.observe(el));

        // 13. Dark Mode Toggle, Failsafe SVG fill updating
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const maskRect = document.querySelector('svg rect[mask]');

        function updateSvgMaskColor() {
            if (!maskRect) return;
            const isDark = document.documentElement.classList.contains('dark');
            maskRect.setAttribute('fill', isDark ? '#030712' : '#f6f5f3');
        }

        function updateThemeIcons() {
            if (document.documentElement.classList.contains('dark')) {
                themeToggleLightIcon.classList.remove('hidden');
                themeToggleDarkIcon.classList.add('hidden');
            } else {
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
            }
            updateSvgMaskColor();
        }

        // Set initial theme based on local storage or system preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        updateThemeIcons();

        themeToggleBtn.addEventListener('click', function() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
            updateThemeIcons();
            
            // Re-trigger reveal paragraph text color adjustments
            if (paragraph) {
                initRevealText();
            }
        });

        // 13. Translation System & Dictionary
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');

        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                nav_problem: "Masalah", nav_solution: "Solusi", nav_benefit: "Hemat", nav_portfolio: "Portfolio", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                hero_badge: "BISNIS JADI AUTOPILOT",
                hero_title_1: "Bisnis Jalan Otomatis",
                hero_title_2: "Omzet Naik Drastis",
                hero_desc: "Stop jadi 'budak' di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.",
                btn_start: "Konsultasi via WA", btn_portfolio: "LIHAT HASIL KERJA",
                sec_prob_sub: "/// FILOSOFI KAMI",
                sec_interactive_sub: "/// EKOSISTEM DIGITAL",
                reveal_desc: "Dunia berubah dengan cepat. Jangan terjebak mengelola bisnis secara manual. Kami membantu Anda bertransformasi dengan sistem otomatis yang bekerja 24 jam nonstop. Anda tinggal memantau dari genggaman.",
                eco_card_1: "Kasir & POS",
                eco_card_2: "Laporan Stok",
                eco_card_3: "Asisten AI",
                eco_card_4: "Dashboard HP",
                sec_service_sub: "/// SOLUSI KAMI", sec_service_title: "Solusi Praktis Tanpa Ribet",
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
                reassure_badge_1: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> GRATIS TRAINING",
                reassure_badge_2: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> GARANSI ERROR",
                reassure_badge_3: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> DIBIMBING SAMPAI BISA",
                sec_port_sub: "/// SHOWCASE", sec_port_title: "Portfolio Kami", btn_see_all: "LIHAT SEMUA",
                sec_workflow_sub: "/// ALUR KERJA", sec_workflow_title: "Proses Gampang Anti Ribet",
                sec_workflow_desc: "Kami merancang setiap tahap agar transparan, cepat, dan berorientasi pada hasil nyata untuk bisnis Anda.",
                step_1_title: "1. Curhat Dulu", step_1_desc: "Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi.",
                step_2_title: "2. Kami Buatkan", step_2_desc: "Tim kami mulai merancang sistem sesuai kebutuhan Anda.",
                step_3_title: "3. Pengerjaan", step_3_desc: "Proses coding dan pembuatan aplikasi oleh ahli kami.",
                step_4_title: "4. Training & Jadi", step_4_desc: "Kami ajari cara pakainya sampai Anda dan staf mahir.",
                sec_client_title: "Kata Klien Kami",
                testi_1_name: "Budi Santoso", testi_1_title: "CEO, PT Maju Jaya", testi_1_text: "\"Dulu pusing rekap nota, sering ribut sama karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis.\"",
                testi_2_name: "Siti Aminah", testi_2_title: "Founder, Culinary App", testi_2_text: "\"Stok sparepart ribuan item sering hilang. Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu.\"",
                testi_3_name: "Michael Tan", testi_3_title: "IT Manager, TechCorp", testi_3_text: "\"Saya gaptek, tapi tim INXDVI sabar banget ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar.\"",
                sec_blog_sub: "/// TIPS BISNIS", sec_blog_title: "Artikel & Tips", btn_read_more: "LIHAT SEMUA TIPS",
                blog_1_title: "Kasir Sering Minus? Ini 5 Penyebabnya", blog_1_desc: "Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.",
                blog_2_title: "Trik Agar Toko Muncul Paling Atas di Google", blog_2_desc: "Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.",
                blog_3_title: "Capek Balas Chat? Pakai Trik Ini", blog_3_desc: "Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.",
                ft_sec_title: "Bagaimana Kami Membantu Bisnis Anda?",
                ft_row_1: "Sistem Kasir Cloud", ft_row_1_desc: "INTEGRASI POS & DATA REAL-TIME &rarr;",
                ft_row_2: "Asisten AI Cerdas", ft_row_2_desc: "REPLY BOT & SALES ASSISTANT &rarr;",
                ft_row_3: "Website & SEO Bisnis", ft_row_3_desc: "OPTIMALISASI GOOGLE MAPS & &rarr;",
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
                hero_title_1: "Automate Your Business,",
                hero_title_2: "Skyrocket Your Revenue",
                hero_desc: "We help your business grow faster with cutting-edge technology solutions, modern design, and measurable digital strategies.",
                btn_start: "Get Started", btn_portfolio: "VIEW PORTFOLIO",
                sec_prob_sub: "/// OUR PHILOSOPHY",
                sec_interactive_sub: "/// DIGITAL ECOSYSTEM",
                reveal_desc: "The world is changing fast. Don't get stuck running your business manually. We help you transform with automated systems that work 24/7. You simply monitor from your palm.",
                eco_card_1: "Cashier & POS",
                eco_card_2: "Stock Report",
                eco_card_3: "AI Assistant",
                eco_card_4: "Mobile Dashboard",
                sec_service_sub: "/// OUR SOLUTIONS", sec_service_title: "Practical Solutions Without the Hassle",
                srv_mobile_title: "Cashier & Stock App", srv_mobile_desc: "Monitor sales and inventory live from your smartphone in real-time.",
                srv_web_title: "Customer Finder Website", srv_web_desc: "Make your business appear at the top of Google Search (SEO) when people look for you.",
                srv_sosmed_title: "Chat Autoreply Bot", srv_sosmed_desc: "An intelligent automated system responding to customer inquiries 24/7.",
                srv_sec_title: "Data Security", srv_sec_desc: "Your financial and client data is protected, secure, and shielded from competitors.",
                srv_vector_title: "Logo Design & Branding", srv_vector_desc: "Elevate your brand aesthetic. Logo, banners, and menu designs that feel premium.",
                srv_sosmed_spec_title: "Social Media Specialist", srv_sosmed_spec_desc: "We run your IG & TikTok. From content ideas, editing, to daily updates.",
                sec_roi_sub: "/// PROFIT CALCULATION",
                sec_roi_title: "Cheaper Than Admin Salaries",
                sec_roi_desc: "Instead of adding 2 new admin roles, invest in a system. No year-end bonuses, no sick leaves, works 24/7.",
                roi_1: "System works 24/7 nonstop", roi_2: "100% data accuracy (Anti-Human Error)", roi_3: "One-time investment, perpetual returns",
                btn_calc: "Calculate Savings",
                card_manual: "Manual Way", card_desc_manual: "Admin salary for a year",
                card_tech: "Using System", card_desc_tech: "Initial Investment (Paid Once)",
                roi_summary: "You Save Money:",
                roi_unit: "Million",
                trust_title: "\"I'm Tech-Challenged, Fear Using It\"",
                trust_desc: "Don't worry. We will hold your hand. Our team will train you and your employees until completely fluent. Any issues are fixed free.",
                reassure_badge_1: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> FREE TRAINING",
                reassure_badge_2: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> BUG WARRANTY",
                reassure_badge_3: "<i class=\"fa-solid fa-check mr-1.5 text-emerald-600\"></i> GUIDED UNTIL FLUENT",
                sec_port_sub: "/// SHOWCASE", sec_port_title: "Our Portfolio", btn_see_all: "SEE ALL",
                sec_workflow_sub: "/// WORKFLOW", sec_workflow_title: "Simple, Hassle-Free Process",
                sec_workflow_desc: "We structure each stage to be transparent, fast, and driven towards real growth for your business.",
                step_1_title: "1. Share & Discuss", step_1_desc: "Tell us about your business blocks, we listen and lay out options.",
                step_2_title: "2. Blueprinting", step_2_desc: "Our design team begins mapping the system architect and prototype.",
                step_3_title: "3. Coding Phase", step_3_desc: "Iterative app development, database configuration, and QA checks.",
                step_4_title: "4. Training & Launch", step_4_desc: "Training your staff until competent, deploying, and ongoing care.",
                sec_client_title: "What Clients Say",
                testi_1_name: "Budi Santoso", testi_1_title: "CEO, PT Maju Jaya", testi_1_text: "\"Used to get headaches manual-recap notes, often arguing with staff about cash discrepancy. Now with POS, everything is automated.\"",
                testi_2_name: "Siti Aminah", testi_2_title: "Founder, Culinary App", testi_2_text: "\"Thousands of sparepart stock items often went missing. Since using INXDVI system, searching items is just a type on mobile away.\"",
                testi_3_name: "Michael Tan", testi_3_title: "IT Manager, TechCorp", testi_3_text: "\"I am not tech-savvy, but INXDVI team was extremely patient training my employees. Now orders are much smoother.\"",
                sec_blog_sub: "/// INSIGHTS", sec_blog_title: "Articles & Tips", btn_read_more: "VIEW ALL TIPS",
                blog_1_title: "Cashier Off Balance? 5 Common Causes", blog_1_desc: "Stop capital leakage. Spot warning signs of dishonest transaction handlings early.",
                blog_2_title: "Tricks to Top Rank on Google Maps", blog_2_desc: "Free steps to ensure local clients find your physical address immediately.",
                blog_3_title: "Exhausted Answering Chats? Try This", blog_3_desc: "Secret strategies to handle incoming inquiries within 1 second while asleep.",
                ft_sec_title: "How Do We Help Your Business?",
                ft_row_1: "Cloud POS System", ft_row_1_desc: "INTEGRATION OF POS & REAL-TIME DATA &rarr;",
                ft_row_2: "Smart AI Assistant", ft_row_2_desc: "REPLY BOT & SALES ASSISTANT &rarr;",
                ft_row_3: "Business Web & SEO", ft_row_3_desc: "GOOGLE MAPS OPTIMIZATION & SEO &rarr;",
                footer_about_desc: "Your trusted digital partner for local business and MSMEs. We make complex technology easy for anyone.",
                newsletter_title: "Free Business Tips", newsletter_desc: "Enter your email to get tips on boosting revenue weekly.",
                calc_title: "Interactive ROI Calculator",
                calc_staff_label: "Number of Admin Staff",
                calc_staff_unit: "People",
                calc_salary_label: "Monthly Staff Salary",
                faq_title: "Frequently Asked Questions",
                faq_1_q: "Is it suitable for small businesses / MSMEs?",
                faq_1_a: "Perfectly suitable! Our interfaces are built simple to make sure it's usable for complete beginners.",
                faq_2_q: "How long does setup take?",
                faq_2_a: "Usually around 2 to 4 weeks depending on the complexity of your custom requirements.",
                faq_3_q: "What if there are issues or bugs later?",
                faq_3_a: "We offer a full bug-free guarantee and complete post-launch support to help your team."
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
            
            // Re-trigger reveal paragraph split layout
            if (paragraph) {
                initRevealText();
            }
        }

        updateLang(currentLang);

        langBtn.addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });
    </script>
</body>

</html>