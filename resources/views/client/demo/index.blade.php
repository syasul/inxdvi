<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Aplikasi - INXDVI</title>
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
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Outfit', 'sans-serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Space Mono', 'monospace']
                    },
                    colors: {
                        darkbg: '#050508',
                        lighttext: '#F3F4F6',
                        mutedgray: '#9CA3AF',
                        primarypurple: '#7C3AED',
                        accentcyan: '#06B6D4',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #050508;
            color: #F3F4F6;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .noise-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.015'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
        }
    </style>
</head>

<body class="antialiased selection:bg-primarypurple/20 selection:text-primarypurple">

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
                <a href="/#testimoni"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_calculator">Calculator</a>
                <a href="/#penawaran"
                    class="px-5 py-2 text-xs font-semibold text-mutedgray hover:text-lighttext hover:bg-white/5 rounded-full transition-all"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="px-5 py-2 text-xs font-semibold text-lighttext bg-white/10 rounded-full transition-all"
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
                <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6281330012100' }}"
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
                <a href="/#testimoni"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_testimonials">Testimoni</a>
                <a href="/#calculator"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_calculator">Calculator</a>
                <a href="/#penawaran"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_pricing">Pricing</a>
                <a href="/demo"
                    class="mobile-link block px-4 py-3 rounded-xl bg-white/5 text-lighttext font-semibold transition-colors"
                    data-i18n="nav_demo">Demo</a>
                <a href="/blog"
                    class="mobile-link block px-4 py-3 rounded-xl hover:bg-white/5 text-mutedgray hover:text-lighttext transition-colors"
                    data-i18n="nav_blog">Blog</a>
                <a href="https://wa.me/{{ $settings['whatsapp_number'] ?? '6281330012100' }}"
                    class="block w-full py-4 bg-gradient-to-r from-primarypurple to-accentcyan text-white text-center font-bold rounded-xl shadow-lg"
                    data-i18n="btn_contact_wa">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-40 pb-24 relative overflow-hidden">
        <!-- Background light rays or glows -->
        <div class="absolute top-1/4 left-1/4 -translate-y-1/2 w-[500px] h-[500px] bg-primarypurple/5 rounded-full blur-[160px] pointer-events-none"></div>
        <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[500px] h-[500px] bg-accentcyan/5 rounded-full blur-[160px] pointer-events-none"></div>
        
        <div class="noise-overlay"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Header Title -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="text-xs font-mono uppercase tracking-widest text-accentcyan block" data-i18n="sec_demo_sub">/// DEMO APLIKASI</span>
                <h1 class="text-4xl md:text-6xl font-display font-extrabold text-lighttext leading-tight" data-i18n="sec_demo_title">Cobain Langsung Demo Aplikasi Kami</h1>
                <p class="text-sm md:text-base text-mutedgray font-light" data-i18n="sec_demo_desc">Eksplorasi dashboard interaktif dan fitur-fitur unggulan yang siap diimplementasikan untuk bisnis Anda.</p>
            </div>

            <!-- Demos Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($appDemos as $demo)
                    <div class="glass-card overflow-hidden group shadow-2xl relative flex flex-col justify-between h-[450px] rounded-3xl transition-all duration-300 hover:border-accentcyan/20">
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
                            <img src="{{ $demoImageUrl }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $demo->title }}">
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
                                <a href="{{ $demo->url }}" target="_blank" class="w-full py-3 bg-gradient-to-r from-primarypurple to-accentcyan text-white text-xs font-bold rounded-xl hover:shadow-[0_0_20px_rgba(124,58,237,0.4)] transition-all transform hover:scale-[1.02] flex items-center justify-center gap-2 group-hover:from-accentcyan group-hover:to-primarypurple">
                                    <span data-i18n="btn_view_demo">Lihat Demo Live</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 py-24 text-center">
                        <i class="fa-regular fa-folder-open text-mutedgray text-5xl mb-4"></i>
                        <p class="text-mutedgray font-medium">Belum ada demo aplikasi yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <!-- Footer -->
    <section id="interactive-footer" class="py-24 bg-[#08080C] text-white relative overflow-hidden z-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-white/50 text-sm">
                <div>
                    <a href="/" class="inline-block mb-6">
                        <img src="/images/logo_transparent1.png" class="h-8 w-auto object-contain" alt="INXDVI Logo">
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
                        <li><a href="/#masalah"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Masalah
                                Bisnis</a></li>
                        <li><a href="/#solusi"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Solusi
                                Kami</a></li>
                        <li><a href="/#testimoni"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Testimoni</a></li>
                        <li><a href="/#calculator"
                                class="hover:text-white transition-all block hover:translate-x-1 duration-300">Calculator</a></li>
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

    <script>
        // Scroll Progress indicator update
        const navbar = document.getElementById('navbar');
        const scrollProgress = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            const totalScrollable = document.documentElement.scrollHeight - window.innerHeight;
            if (scrollProgress && totalScrollable > 0) {
                const scrollPercent = (window.scrollY / totalScrollable) * 100;
                scrollProgress.style.width = scrollPercent + '%';
            }

            if (window.scrollY > 50) {
                navbar.classList.remove('py-5');
                navbar.classList.add('py-3');
            } else {
                navbar.classList.add('py-5');
                navbar.classList.remove('py-3');
            }
        });

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

        // Translation System & Dictionary
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');
        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                nav_problem: "Masalah", nav_solusi: "Solusi", nav_testimonials: "Testimoni", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                sec_demo_sub: "/// DEMO APLIKASI",
                sec_demo_title: "Cobain Langsung Demo Aplikasi Kami",
                sec_demo_desc: "Eksplorasi dashboard interaktif dan fitur-fitur unggulan yang siap diimplementasikan untuk bisnis Anda.",
                btn_view_demo: "Lihat Demo Live",
                footer_about_desc: "Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.",
                newsletter_title: "Tips Bisnis Gratis", newsletter_desc: "Masukkan email untuk dapat tips meningkatkan omzet tiap minggu."
            },
            en: {
                nav_problem: "Problems", nav_solusi: "Solutions", nav_testimonials: "Testimonials", nav_calculator: "Calculator", nav_pricing: "Pricing", nav_demo: "Demo", nav_blog: "Blog", btn_contact: "Free Consult", btn_contact_wa: "Chat WhatsApp",
                sec_demo_sub: "/// APPLICATION DEMOS",
                sec_demo_title: "Try Our Live Application Demos",
                sec_demo_desc: "Explore interactive dashboards and key features ready to be implemented for your business.",
                btn_view_demo: "View Live Demo",
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
