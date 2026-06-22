<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Artikel - INXDVI</title>
    <link rel="icon" type="image/png" href="/images/logo_transparent1.png">

    <!-- CSS / Tailwind & Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        headings: ['Poppins', 'sans-serif'],
                        sans: ['Poppins', 'sans-serif'],
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
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        html.lenis {
            height: auto;
        }

        .lenis-smooth {
            scroll-behavior: auto !important;
        }

        .glass-panel {
            backdrop-filter: blur(16px);
            background: var(--glass-bg);
            border-bottom: 1px solid var(--glass-border);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .text-gradient {
            display: inline;
            background-clip: text;
            -webkit-background-clip: text;
            color: var(--gradient-end);
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(135deg, var(--gradient-start) 20%, var(--gradient-end) 100%);
            transition: all 0.5s ease;
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
    </style>
</head>

<body class="antialiased selection:bg-[#4f46e5]/20 selection:text-[#4f46e5]">

    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress"
        class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 z-[100] transition-all duration-75"
        style="width: 0%;"></div>

    <!-- Header Navigation -->
    <nav id="navbar" class="fixed w-full z-50 glass-panel py-4 md:py-6">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="{{ route('client.home') }}" class="flex items-center gap-3 z-50 text-decoration-none">
                <img src="{{ asset('images/logo_transparent1.png') }}"
                    class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]"
                    alt="INXDVI Logo">
            </a>

            <!-- Navigation Links -->
            <div
                class="hidden md:flex items-center gap-2 bg-black/5 dark:bg-white/5 p-1 rounded-full border border-black/10 dark:border-white/10">
                <a href="/#masalah"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_problem">Masalah</a>
                <a href="/#solusi"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_solusi">Solusi</a>
                <a href="/#testimoni"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_calculator">Calculator</a>
                <a href="/#penawaran"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="px-5 py-2 text-xs font-semibold text-zinc-600 dark:text-gray-300 hover:text-zinc-950 dark:hover:text-white hover:bg-black/5 dark:hover:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_demo">Demo</a>
                <a href="/blog"
                    class="px-5 py-2 text-xs font-semibold text-zinc-950 dark:text-white bg-black/5 dark:bg-white/10 rounded-full transition-all"
                    data-i18n="nav_blog">Blog</a>
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
                <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6281330012100' }}"
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
                <a href="/#masalah"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_problem">Masalah Anda</a>
                <a href="/#solusi"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_solusi">Solusi</a>
                <a href="/#testimoni"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_calculator">Calculator</a>
                <a href="/#penawaran"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="mobile-link block px-4 py-3 rounded-lg hover:bg-black/5 dark:hover:bg-white/5 text-zinc-800 dark:text-white font-medium transition-colors"
                    data-i18n="nav_demo">Demo</a>
                <a href="/blog"
                    class="mobile-link block px-4 py-3 rounded-lg bg-black/5 dark:bg-white/5 text-zinc-800 dark:text-white font-semibold transition-colors"
                    data-i18n="nav_blog">Blog</a>
                <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6281330012100' }}"
                    class="block w-full py-3 bg-zinc-900 dark:bg-white text-white dark:text-black font-bold rounded-lg text-center hover:bg-black dark:hover:bg-zinc-100 transition-colors shadow-sm"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="pt-32 pb-24 px-6 max-w-7xl mx-auto relative z-20">

        <!-- Page Header -->
        <div class="mb-16 reveal">
            <span class="text-xs font-mono uppercase tracking-widest text-zinc-500 dark:text-zinc-400 block mb-2"
                data-i18n="sec_blog_sub">/// TIPS BISNIS</span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-zinc-900 dark:text-white font-headings mb-4"
                data-i18n="sec_blog_title">Artikel & Tips</h1>
            <p class="text-sm md:text-base text-zinc-500 dark:text-zinc-400 max-w-2xl leading-relaxed font-light"
                data-i18n="blog_desc_long">
                Kumpulan strategi, taktik digitalisasi, dan wawasan industri untuk meningkatkan efisiensi operasional
                dan pertumbuhan bisnis Anda.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            @forelse($articles as $index => $article)
                @php
                    $imageUrl = $article->image_path;
                    if (!$imageUrl) {
                        $imageUrl = 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=600';
                    } else if (!Str::startsWith($imageUrl, 'http')) {
                        if (file_exists(public_path('storage/' . $imageUrl))) {
                            $imageUrl = asset('storage/' . $imageUrl);
                        } else if (file_exists(public_path($imageUrl))) {
                            $imageUrl = asset($imageUrl);
                        } else {
                            $imageUrl = 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=600';
                        }
                    }
                @endphp
                <div
                    class="bg-[var(--bg-card)] border border-black/10 dark:border-white/10 rounded-3xl overflow-hidden group shadow-sm transition-colors duration-500 reveal reveal-delay-{{ ($index % 3 + 1) * 100 }}">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $imageUrl }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            alt="{{ $article->title }}">
                        <div
                            class="absolute top-4 left-4 bg-indigo-500/10 backdrop-blur-md border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 px-3 py-1 rounded-full text-[10px] font-bold font-mono">
                            {{ strtoupper($article->category) }}
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-[10px] text-zinc-400 dark:text-zinc-500 font-mono mb-3">
                            <span>{{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ $article->user ? $article->user->name : 'Admin' }}</span>
                        </div>
                        <h2
                            class="text-lg font-bold text-zinc-900 dark:text-white font-headings mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors line-clamp-2">
                            {{ $article->title }}
                        </h2>
                        <p class="text-zinc-500 dark:text-zinc-400 text-xs mb-6 line-clamp-3 leading-relaxed">
                            {{ $article->excerpt }}
                        </p>
                        <a href="{{ route('client.blog.show', $article->slug) }}"
                            class="text-xs font-bold text-zinc-900 dark:text-white flex items-center gap-2 hover:underline">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 py-24 text-center">
                    <i class="fa-regular fa-folder-open text-zinc-400 text-5xl mb-4"></i>
                    <p class="text-zinc-500 dark:text-zinc-400 font-medium">Belum ada artikel yang diterbitkan.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center reveal">
            {{ $articles->links() }}
        </div>

    </main>

    <!-- Dark Contrast Footer Section -->
    <section id="interactive-footer" class="py-32 bg-[#0c0c0d] text-white relative overflow-hidden z-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 pt-16 border-t border-white/10 text-white/50 text-sm">
                <div>
                    <a href="{{ route('client.home') }}" class="inline-block mb-6">
                        <img src="{{ asset('images/logo_transparent1.png') }}"
                            class="h-8 md:h-10 w-auto object-contain transition-transform duration-300 hover:scale-[1.03]"
                            alt="INXDVI Logo">
                    </a>
                    <p class="text-xs text-white/40 leading-relaxed mb-6" data-i18n="footer_about_desc">Partner digital
                        terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan
                        untuk semua orang.</p>
                    <div class="flex gap-2">
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded bg-white/5 hover:bg-white hover:text-black flex items-center justify-center text-white transition-all text-sm"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-link text-white/40 text-[10px]"></i> Menu</h4>
                    <ul class="space-y-3 text-xs text-white/40 font-medium">
                        <li><a href="{{ route('client.home') }}#masalah"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Masalah
                                Bisnis</a></li>
                        <li><a href="{{ route('client.home') }}#layanan"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Solusi
                                Kami</a></li>
                        <li><a href="{{ route('client.home') }}#hemat"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hitung
                                Hemat</a></li>
                        <li><a href="{{ route('client.home') }}#portfolio"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Hasil
                                Kerja</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 text-sm flex items-center gap-2"><i
                            class="fa-solid fa-location-dot text-white/40 text-[10px]"></i> Kontak</h4>
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
                    <p class="text-xs text-white/40 mb-4 leading-normal" data-i18n="newsletter_desc">Masukkan email
                        untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..."
                            class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-white transition-colors pr-10">
                        <button
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 bg-white hover:bg-white/80 text-black rounded flex items-center justify-center transition-colors">
                            <i class="fa-solid fa-paper-plane text-[10px]"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom Credits -->
            <div
                class="flex flex-col md:flex-row justify-between items-center pt-8 mt-16 border-t border-white/10 text-xs text-white/30 font-mono">
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
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);

        // Navbar blur on scroll & Scroll Progress indicator update
        const navbar = document.getElementById('navbar');
        const scrollProgress = document.getElementById('scroll-progress');
        lenis.on('scroll', (e) => {
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

        // Intro load reveal animation
        const introTl = gsap.timeline();
        gsap.set("#navbar", { y: -80, opacity: 0 });

        introTl.to("#navbar", {
            y: 0,
            opacity: 1,
            duration: 1.0,
            ease: "power3.out"
        });

        // Staggered Scroll-Driven Reveals
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

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            document.querySelectorAll('.mobile-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Theme Toggle Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        function updateThemeIcons() {
            if (document.documentElement.classList.contains('dark')) {
                themeToggleLightIcon.classList.remove('hidden');
                themeToggleDarkIcon.classList.add('hidden');
            } else {
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
            }
        }

        // Set initial theme based on local storage or system preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        updateThemeIcons();

        themeToggleBtn.addEventListener('click', function () {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
            updateThemeIcons();
        });

        // Translation System & Dictionary
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');
        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                nav_problem: "Masalah", nav_solusi: "Solusi", nav_testimonials: "Testimoni", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                sec_blog_sub: "/// TIPS BISNIS", sec_blog_title: "Artikel & Tips",
                blog_desc_long: "Kumpulan strategi, taktik digitalisasi, dan wawasan industri untuk meningkatkan efisiensi operasional dan pertumbuhan bisnis Anda.",
                footer_about_desc: "Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.",
                newsletter_title: "Tips Bisnis Gratis", newsletter_desc: "Masukkan email untuk dapat tips meningkatkan omzet tiap minggu."
            },
            en: {
                nav_problem: "Problems", nav_solusi: "Solutions", nav_testimonials: "Testimonials", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Free Consult", btn_contact_wa: "Chat WhatsApp",
                sec_blog_sub: "/// INSIGHTS", sec_blog_title: "Articles & Tips",
                blog_desc_long: "A curated collection of business strategies, digitalization tactics, and industry insights to scale your operations and drive growth.",
                footer_about_desc: "Your trusted digital partner for local business and MSMEs. We make complex technology easy for anyone.",
                newsletter_title: "Free Business Tips", newsletter_desc: "Enter your email to get tips on boosting revenue weekly."
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
        }

        updateLang(currentLang);

        langBtn.addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });
    </script>
</body>

</html>