<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INXDVI - Solusi Bisnis Digital</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
                    },
                    colors: {
                        tech: { bg: '#020617', card: '#0f172a', cyan: '#06b6d4', purple: '#8b5cf6' }
                    },
                    animation: { 
                        'blob': 'blob 10s infinite',
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                        'slide-down': 'slideDown 0.3s ease-out forwards'
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideDown: {
                            '0%': { opacity: '0', transform: 'translateY(-10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* PERMANENT DARK MODE STYLES */
        body { 
            background-color: #020617; 
            color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            overflow-x: hidden;
        }

        /* Spotlight Card Logic */
        .spotlight-card {
            position: relative; overflow: hidden; transition: all 0.3s ease;
            background: rgba(15, 23, 42, 0.6); 
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .spotlight-card:hover { 
            border-color: rgba(6, 182, 212, 0.3); 
            transform: translateY(-2px);
        }
        
        /* Mouse Glow Effect */
        .spotlight-card::before {
            content: ''; position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: 0; pointer-events: none; z-index: 2; transition: opacity 0.5s;
            background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y), rgba(255, 255, 255, 0.06), transparent 40%);
        }
        .spotlight-card:hover::before { opacity: 1; }

        /* Glass Panel */
        .glass-panel {
            backdrop-filter: blur(12px); 
            background: rgba(2, 6, 23, 0.85); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.08); 
            transition: all 0.3s ease;
        }

        /* Text Gradient */
        .text-gradient {
            background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #38bdf8, #818cf8, #c084fc);
        }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500/30 selection:text-cyan-200">

    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-blue-600/20 rounded-full mix-blend-screen filter blur-[80px] md:blur-[100px] animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-purple-600/20 rounded-full mix-blend-screen filter blur-[80px] md:blur-[100px] animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-1/3 w-[400px] md:w-[600px] h-[400px] md:h-[600px] bg-cyan-600/10 rounded-full mix-blend-screen filter blur-[100px] md:blur-[120px] animate-blob animation-delay-4000"></div>
    </div>

    <nav class="fixed w-full z-50 glass-panel">
        <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 md:h-20 flex justify-between items-center">
            <div class="flex items-center gap-2 md:gap-3 z-50 cursor-pointer">
                <div class="w-8 h-8 md:w-10 md:h-10 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center shadow-[0_0_15px_rgba(6,182,212,0.5)] shrink-0">
                    <i class="fa-solid fa-layer-group text-white text-lg md:text-xl"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg md:text-xl tracking-tight text-white">INX<span class="text-cyan-400">DVI</span></span>
                    <span class="hidden sm:block text-[10px] font-mono text-cyan-400/80 tracking-widest uppercase">Digital Solution</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-1 bg-white/5 px-2 py-1.5 rounded-full border border-white/5 transition-all">
                <a href="#masalah" class="px-4 lg:px-5 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all" data-i18n="nav_problem">Masalah</a>
                <a href="#layanan" class="px-4 lg:px-5 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all" data-i18n="nav_services">Solusi</a>
                <a href="#hemat" class="px-4 lg:px-5 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all" data-i18n="nav_benefit">Penghematan</a>
                <a href="#portfolio" class="px-4 lg:px-5 py-2 text-sm text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all" data-i18n="nav_portfolio">Portfolio</a>
            </div>

            <div class="flex items-center gap-2 md:gap-3 z-50">
                <button id="lang-toggle" class="h-8 md:h-10 px-2 md:px-3 rounded-full bg-white/10 border border-white/10 flex items-center gap-2 hover:bg-white/20 transition-all cursor-pointer">
                    <span id="lang-flag" class="text-base md:text-lg">🇮🇩</span>
                    <span id="lang-text" class="text-xs font-bold font-mono text-white">ID</span>
                </button>

                <a href="https://wa.me/628123456789" class="hidden md:flex items-center gap-2 px-6 py-2.5 bg-white text-black font-bold rounded-lg hover:bg-cyan-50 transition-all shadow-[0_0_20px_rgba(255,255,255,0.3)]">
                    <span data-i18n="btn_contact">Konsultasi Gratis</span>
                </a>

                <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex items-center justify-center text-white text-xl focus:outline-none hover:text-cyan-400 transition bg-white/5 rounded-lg border border-white/10">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-[#020617]/95 backdrop-blur-xl border-b border-white/10 shadow-2xl transition-all z-40 animate-slide-down">
            <div class="p-4 flex flex-col gap-2">
                <a href="#masalah" class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors" data-i18n="nav_problem">Masalah Anda</a>
                <a href="#layanan" class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors" data-i18n="nav_services">Solusi</a>
                <a href="#hemat" class="mobile-link block px-4 py-3 rounded-lg hover:bg-white/10 text-white font-medium transition-colors" data-i18n="nav_benefit">Penghematan</a>
                <a href="https://wa.me/628123456789" class="block w-full py-3 bg-cyan-600 text-white font-bold rounded-lg text-center hover:bg-cyan-500 transition-colors shadow-lg" data-i18n="btn_contact">Chat WhatsApp</a>
            </div>
        </div>
    </nav>

    <section class="relative z-10 pt-32 md:pt-44 pb-16 md:pb-20 overflow-hidden px-4 md:px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 md:gap-16 items-center">
            <div class="text-left animate-fade-in order-2 md:order-1">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300 text-[10px] md:text-xs font-mono mb-6 md:mb-8 backdrop-blur-sm">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                    </span>
                    <span data-i18n="hero_badge">BISNIS JADI AUTOPILOT</span>
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold tracking-tight mb-4 md:mb-6 leading-tight text-white" data-i18n="hero_title">
                    Bisnis Jalan Otomatis <br> <span class="text-gradient">Omzet Naik Drastis</span>
                </h1>

                <p class="text-base md:text-lg text-gray-400 max-w-xl mb-8 md:mb-10 font-light leading-relaxed" data-i18n="hero_desc">
                    Stop jadi "budak" di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/628123456789" class="relative group px-8 py-4 bg-transparent overflow-hidden rounded-xl border-0 w-full sm:w-auto text-center cursor-pointer">
                        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-cyan-500 via-blue-500 to-purple-600 opacity-80 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20"></div>
                        <span class="relative flex items-center justify-center gap-3 text-white font-bold tracking-wide">
                            <span data-i18n="btn_start">Konsultasi via WA</span> <i class="fa-brands fa-whatsapp text-lg"></i>
                        </span>
                    </a>
                    
                    <button class="px-8 py-4 rounded-xl border border-white/10 hover:bg-white/5 text-gray-300 hover:text-white transition-all font-mono text-sm flex items-center justify-center gap-3 w-full sm:w-auto">
                        <span data-i18n="btn_portfolio">LIHAT HASIL KERJA</span>
                    </button>
                </div>
            </div>

            <div class="relative perspective-[2000px] hidden md:block order-1 md:order-2">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[60%] bg-cyan-500/20 blur-[100px] rounded-full mix-blend-screen"></div>
                <div class="relative bg-[#0b0f19] border border-white/10 rounded-2xl p-2 shadow-none transform rotate-y-[-10deg] hover:rotate-y-[0deg] transition-all duration-1000 ease-out group">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 pointer-events-none"></div>
                    <div class="flex items-center gap-2 px-4 py-3 border-b border-white/5 bg-[#0f172a] rounded-t-xl">
                        <div class="flex gap-1.5"><div class="w-2.5 h-2.5 rounded-full bg-red-500"></div><div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div><div class="w-2.5 h-2.5 rounded-full bg-green-500"></div></div>
                        <div class="mx-auto text-[10px] text-gray-500 font-mono">Laporan_Omzet.tsx</div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" alt="Dashboard" class="w-full h-auto rounded-b-xl opacity-80">
                    
                    <div class="absolute -left-8 bottom-12 bg-black/80 backdrop-blur-xl border border-green-500/30 p-4 rounded-xl shadow-lg transform translate-z-10 animate-blob animation-delay-2000">
                         <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400"><i class="fa-solid fa-arrow-trend-up"></i></div>
                            <div>
                                <div class="text-[10px] text-gray-400 uppercase font-mono">Profit Bulan Ini</div>
                                <div class="text-sm font-bold text-white">+250% Naik</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="masalah" class="py-16 md:py-20 relative z-10 bg-white/5 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-red-400 font-mono text-xs md:text-sm tracking-widest uppercase mb-3 block" data-i18n="sec_prob_sub">/// KELUHAN UMUM</span>
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-i18n="sec_prob_title">Apakah Bisnis Anda <br> Mengalami <span class="text-red-400">Masalah Ini?</span></h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl bg-[#020617] border border-red-500/20 hover:border-red-500/50 transition-all group hover:-translate-y-1">
                    <div class="w-12 h-12 bg-red-500/10 rounded-full flex items-center justify-center text-red-400 text-xl mb-4">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" data-i18n="prob_1_title">Uang & Stok Selisih</h3>
                    <p class="text-gray-400 text-sm" data-i18n="prob_1_desc">Tiap tutup toko uang di laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.</p>
                </div>
                <div class="p-6 rounded-2xl bg-[#020617] border border-red-500/20 hover:border-red-500/50 transition-all group hover:-translate-y-1">
                    <div class="w-12 h-12 bg-red-500/10 rounded-full flex items-center justify-center text-red-400 text-xl mb-4">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" data-i18n="prob_2_title">Pusing Rekap Manual</h3>
                    <p class="text-gray-400 text-sm" data-i18n="prob_2_desc">Akhir bulan lembur ngitung nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.</p>
                </div>
                <div class="p-6 rounded-2xl bg-[#020617] border border-red-500/20 hover:border-red-500/50 transition-all group hover:-translate-y-1">
                    <div class="w-12 h-12 bg-red-500/10 rounded-full flex items-center justify-center text-red-400 text-xl mb-4">
                        <i class="fa-solid fa-store-slash"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2" data-i18n="prob_3_title">Kalah Sama Tetangga</h3>
                    <p class="text-gray-400 text-sm" data-i18n="prob_3_desc">Toko sebelah sudah bisa pesan online dan ada di Google Maps, toko Anda masih nunggu bola.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-16 md:py-24 relative z-10 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12 md:mb-16 text-center">
                <span class="text-cyan-400 font-mono text-xs md:text-sm tracking-widest uppercase mb-3 md:mb-4 block" data-i18n="sec_service_sub">/// SOLUSI KAMI</span>
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4 md:mb-6" data-i18n="sec_service_title">Solusi Praktis <span class="text-gradient">Tanpa Ribet</span></h2>
                <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base" data-i18n="sec_service_desc">Kami sediakan "alat digital" biar Anda bisa tidur nyenyak sementara sistem bekerja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center text-purple-400 text-xl mb-6 border border-purple-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_mobile_title">Aplikasi Kasir & Stok</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_mobile_desc">Pantau penjualan dan stok barang langsung dari HP (Real-time).</p>
                </div>

                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center text-cyan-400 text-xl mb-6 border border-cyan-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_web_title">Website Pencari Pelanggan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_web_desc">Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.</p>
                </div>

                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-xl flex items-center justify-center text-pink-400 text-xl mb-6 border border-pink-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_vector_title">Desain Logo & Branding</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_vector_desc">Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.</p>
                </div>

                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-yellow-500/20 rounded-xl flex items-center justify-center text-yellow-400 text-xl mb-6 border border-yellow-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sosmed_spec_title">Jasa Kelola Sosmed</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_sosmed_spec_desc">Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.</p>
                </div>

                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center text-green-400 text-xl mb-6 border border-green-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sec_title">Keamanan Data</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_sec_desc">Data keuangan Anda aman, tidak akan bocor ke kompetitor.</p>
                </div>

                <div class="spotlight-card rounded-3xl p-6 md:p-8 group cursor-pointer hover:bg-white/5">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center text-orange-400 text-xl mb-6 border border-orange-500/20 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-white mb-3" data-i18n="srv_sosmed_title">Bot Balas Chat</h3>
                    <p class="text-gray-400 text-sm leading-relaxed" data-i18n="srv_sosmed_desc">Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="hemat" class="py-16 md:py-24 relative z-10 bg-[#0b0f19]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-yellow-400 font-mono text-xs uppercase mb-3 block" data-i18n="sec_roi_sub">/// HITUNG-HITUNGAN CUAN</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-i18n="sec_roi_title">Lebih Murah Dari <br> <span class="text-gradient">Gaji Karyawan</span></h2>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed" data-i18n="sec_roi_desc">
                        Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-300">
                            <i class="fa-solid fa-check text-green-400"></i> <span data-i18n="roi_1">Sistem bekerja 24 jam nonstop</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <i class="fa-solid fa-check text-green-400"></i> <span data-i18n="roi_2">Akurasi data 100% (Anti Salah Hitung)</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <i class="fa-solid fa-check text-green-400"></i> <span data-i18n="roi_3">Investasi sekali, untung selamanya</span>
                        </li>
                    </ul>

                    <a href="https://wa.me/628123456789" class="px-6 py-3 bg-white text-black font-bold rounded-xl hover:bg-gray-200 transition-colors inline-block">
                        <span data-i18n="btn_calc">Hitung Penghematan Saya</span>
                    </a>
                </div>

                <div class="relative">
                    <div class="bg-[#1e293b] rounded-2xl p-6 border border-white/10 relative overflow-hidden">
                        <div class="grid grid-cols-2 gap-4 text-center relative z-10">
                            <div class="p-4 bg-red-500/10 rounded-xl border border-red-500/20">
                                <div class="text-sm text-red-300 mb-1 font-mono uppercase" data-i18n="card_manual">Cara Manual</div>
                                <div class="text-xl md:text-2xl font-bold text-white mb-2">Rp 48 Juta</div>
                                <div class="text-[10px] md:text-xs text-gray-400" data-i18n="card_desc_manual">Gaji Admin UMR setahun</div>
                            </div>
                            <div class="p-4 bg-green-500/10 rounded-xl border border-green-500/20 scale-110 shadow-xl bg-[#0f172a]">
                                <div class="text-sm text-green-300 mb-1 font-mono uppercase" data-i18n="card_tech">Pakai Sistem</div>
                                <div class="text-xl md:text-2xl font-bold text-white mb-2">Rp 5 Juta</div>
                                <div class="text-[10px] md:text-xs text-gray-400" data-i18n="card_desc_tech">Investasi Awal (Sekali Bayar)</div>
                            </div>
                        </div>
                        <div class="mt-8 text-center border-t border-white/10 pt-4">
                            <p class="text-gray-400 text-sm mb-2" data-i18n="roi_summary">Anda Menghemat Uang:</p>
                            <p class="text-3xl font-bold text-cyan-400">Rp 40 Juta++</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 relative z-10 px-4">
        <div class="max-w-4xl mx-auto bg-gradient-to-r from-blue-900/40 to-purple-900/40 border border-white/10 rounded-3xl p-8 md:p-12 text-center backdrop-blur-md">
            <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center text-3xl mx-auto mb-6 text-yellow-300">
                <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-4" data-i18n="trust_title">"Saya Gaptek, Takut Gak Bisa Pakai"</h2>
            <p class="text-gray-300 text-lg mb-8 leading-relaxed" data-i18n="trust_desc">
                Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.
            </p>
            <div class="flex flex-wrap justify-center gap-4 text-xs md:text-sm font-mono text-cyan-300">
                <span class="px-3 py-1 bg-cyan-900/30 rounded-full border border-cyan-500/30"><i class="fa-solid fa-check mr-1"></i> GRATIS TRAINING</span>
                <span class="px-3 py-1 bg-cyan-900/30 rounded-full border border-cyan-500/30"><i class="fa-solid fa-check mr-1"></i> GARANSI ERROR</span>
                <span class="px-3 py-1 bg-cyan-900/30 rounded-full border border-cyan-500/30"><i class="fa-solid fa-check mr-1"></i> DIBIMBING SAMPAI BISA</span>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-16 md:py-20 px-4 md:px-6 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 md:mb-12 gap-6">
                <div>
                    <span class="text-cyan-400 font-mono text-xs md:text-sm tracking-widest uppercase mb-2 block" data-i18n="sec_port_sub">/// SHOWCASE</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white" data-i18n="sec_port_title">Portfolio <span class="text-gradient">Kami</span></h2>
                </div>
                <a href="#" class="text-sm font-mono text-gray-400 hover:text-white flex items-center gap-2 group">
                    <span data-i18n="btn_see_all">LIHAT SEMUA</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="spotlight-card rounded-2xl overflow-hidden group h-64 relative">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="px-2 py-1 bg-cyan-500/20 border border-cyan-500/30 rounded text-[10px] text-cyan-300 font-mono mb-2 inline-block">FINTECH</span>
                        <h3 class="text-lg md:text-xl font-bold text-white">E-Wallet App</h3>
                    </div>
                </div>
                <div class="spotlight-card rounded-2xl overflow-hidden group h-64 relative">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="px-2 py-1 bg-purple-500/20 border border-purple-500/30 rounded text-[10px] text-purple-300 font-mono mb-2 inline-block">COMMERCE</span>
                        <h3 class="text-lg md:text-xl font-bold text-white">Shopify Mobile</h3>
                    </div>
                </div>
                <div class="spotlight-card rounded-2xl overflow-hidden group h-64 relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="px-2 py-1 bg-blue-500/20 border border-blue-500/30 rounded text-[10px] text-blue-300 font-mono mb-2 inline-block">SAAS</span>
                        <h3 class="text-lg md:text-xl font-bold text-white">Team Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proses" class="py-16 md:py-24 relative z-10 border-y border-white/5 bg-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
             <div class="mb-12 md:mb-16">
                <span class="text-cyan-400 font-mono text-xs md:text-sm tracking-widest uppercase mb-3 md:mb-4 block" data-i18n="sec_workflow_sub">/// ALUR KERJA</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white" data-i18n="sec_workflow_title">Proses Gampang <span class="text-gradient">Anti Ribet</span></h2>
            </div>

            <div class="relative">
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-cyan-500/50 to-transparent"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                    <div class="flex flex-col items-center group">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-[#0b0f19] border border-cyan-500/30 rounded-full flex items-center justify-center text-2xl md:text-3xl mb-6 relative z-10 group-hover:border-cyan-400 group-hover:shadow-[0_0_20px_rgba(6,182,212,0.3)] transition-all">
                            <i class="fa-regular fa-comments text-cyan-400"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-white mb-2" data-i18n="step_1_title">1. Curhat Dulu</h3>
                        <p class="text-gray-400 text-sm px-4" data-i18n="step_1_desc">Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi.</p>
                    </div>
                     <div class="flex flex-col items-center group">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-[#0b0f19] border border-purple-500/30 rounded-full flex items-center justify-center text-2xl md:text-3xl mb-6 relative z-10 group-hover:border-purple-400 group-hover:shadow-[0_0_20px_rgba(168,85,247,0.3)] transition-all">
                            <i class="fa-solid fa-pen-ruler text-purple-400"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-white mb-2" data-i18n="step_2_title">2. Kami Buatkan</h3>
                        <p class="text-gray-400 text-sm px-4" data-i18n="step_2_desc">Tim kami mulai merancang sistem sesuai kebutuhan Anda.</p>
                    </div>
                     <div class="flex flex-col items-center group">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-[#0b0f19] border border-blue-500/30 rounded-full flex items-center justify-center text-2xl md:text-3xl mb-6 relative z-10 group-hover:border-blue-400 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all">
                            <i class="fa-solid fa-code text-blue-400"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-white mb-2" data-i18n="step_3_title">3. Pengerjaan</h3>
                        <p class="text-gray-400 text-sm px-4" data-i18n="step_3_desc">Proses coding dan pembuatan aplikasi oleh ahli kami.</p>
                    </div>
                     <div class="flex flex-col items-center group">
                        <div class="w-20 h-20 md:w-24 md:h-24 bg-[#0b0f19] border border-green-500/30 rounded-full flex items-center justify-center text-2xl md:text-3xl mb-6 relative z-10 group-hover:border-green-400 group-hover:shadow-[0_0_20px_rgba(34,197,94,0.3)] transition-all">
                            <i class="fa-solid fa-rocket text-green-400"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-white mb-2" data-i18n="step_4_title">4. Training & Jadi</h3>
                        <p class="text-gray-400 text-sm px-4" data-i18n="step_4_desc">Kami ajari cara pakainya sampai Anda dan staf mahir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="py-16 md:py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 text-center" data-i18n="sec_client_title">Kata Klien <span class="italic text-cyan-400">Kami</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass-panel p-6 md:p-8 rounded-2xl border border-white/5 hover:border-cyan-500/30 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=11" alt="Client" class="w-12 h-12 rounded-full border-2 border-cyan-500/50">
                        <div>
                            <div class="text-white font-bold text-sm">Budi Santoso</div>
                            <div class="text-cyan-400 text-xs font-mono">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm italic">"Dulu pusing rekap nota, sering ribut sama karyawan soal uang selisih. Sekarang pakai aplikasi, semua otomatis."</p>
                </div>
                <div class="glass-panel p-6 md:p-8 rounded-2xl border border-white/5 hover:border-purple-500/30 transition-all duration-300 md:-translate-y-4 bg-gradient-to-b from-white/5 to-transparent">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Client" class="w-12 h-12 rounded-full border-2 border-purple-500/50">
                        <div>
                            <div class="text-white font-bold text-sm">Siti Aminah</div>
                            <div class="text-purple-400 text-xs font-mono">Founder, Culinary App</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm italic">"Stok sparepart ribuan item sering hilang. Sejak pakai sistem INXDVI, cari barang tinggal ketik di HP langsung ketemu."</p>
                </div>
                <div class="glass-panel p-6 md:p-8 rounded-2xl border border-white/5 hover:border-blue-500/30 transition-all duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Client" class="w-12 h-12 rounded-full border-2 border-blue-500/50">
                        <div>
                            <div class="text-white font-bold text-sm">Michael Tan</div>
                            <div class="text-blue-400 text-xs font-mono">IT Manager, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm italic">"Saya gaptek, tapi tim INXDVI sabar banget ngajarin karyawan saya sampai bisa. Sekarang orderan makin lancar."</p>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="py-16 md:py-20 relative z-10 px-6 bg-white/5 border-y border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <span class="text-cyan-400 font-mono text-xs md:text-sm tracking-widest uppercase mb-2 block" data-i18n="sec_blog_sub">/// TIPS BISNIS</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white" data-i18n="sec_blog_title">Artikel & <span class="text-gradient">Tips</span></h2>
                </div>
                <a href="#" class="text-sm font-mono text-gray-400 hover:text-white flex items-center gap-2 group">
                    <span data-i18n="btn_read_more">LIHAT SEMUA TIPS</span> <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="spotlight-card rounded-2xl overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4 bg-red-500/20 backdrop-blur-md border border-red-500/30 text-red-300 px-3 py-1 rounded-full text-xs font-bold font-mono">KEUANGAN</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors" data-i18n="blog_1_title">Kasir Sering Minus? Ini 5 Penyebabnya</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2" data-i18n="blog_1_desc">Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.</p>
                        <span class="text-sm font-bold text-cyan-400 flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </div>
                <div class="spotlight-card rounded-2xl overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=2069&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4 bg-purple-500/20 backdrop-blur-md border border-purple-500/30 text-purple-300 px-3 py-1 rounded-full text-xs font-bold font-mono">MARKETING</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-purple-400 transition-colors" data-i18n="blog_2_title">Trik Agar Toko Muncul Paling Atas di Google</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2" data-i18n="blog_2_desc">Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.</p>
                        <span class="text-sm font-bold text-purple-400 flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </div>
                <div class="spotlight-card rounded-2xl overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4 bg-green-500/20 backdrop-blur-md border border-green-500/30 text-green-300 px-3 py-1 rounded-full text-xs font-bold font-mono">OPERASIONAL</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-green-400 transition-colors" data-i18n="blog_3_title">Capek Balas Chat? Pakai Trik Ini</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2" data-i18n="blog_3_desc">Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.</p>
                        <span class="text-sm font-bold text-green-400 flex items-center gap-2">Baca Selengkapnya <i class="fa-solid fa-arrow-right text-xs"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="relative pt-24 pb-12 bg-[#020617] text-white overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 pointer-events-none bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-20 border-b border-white/10 pb-20">
                <div class="text-center md:text-left">
                    <h3 class="text-3xl md:text-5xl font-bold mb-4 leading-tight" data-i18n="footer_cta_title">Jangan Biarkan Kompetitor <br> <span class="text-cyan-400">Menyalip Anda!</span></h3>
                    <p class="text-gray-400 max-w-lg" data-i18n="footer_cta_desc">Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.</p>
                </div>
                <div>
                    <a href="https://wa.me/628123456789" class="inline-flex items-center gap-3 px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl transition-all shadow-[0_0_20px_rgba(22,163,74,0.4)] animate-pulse hover:animate-none transform hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-2xl"></i> 
                        <div class="text-left">
                            <div class="text-[10px] font-normal opacity-80">Chat Admin 24/7</div>
                            <div class="text-lg leading-none" data-i18n="btn_wa_footer">Hubungi via WhatsApp</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-1">
                     <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-lg flex items-center justify-center shadow-[0_0_15px_rgba(6,182,212,0.5)]">
                            <i class="fa-solid fa-layer-group text-white text-xl"></i>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-white">INX<span class="text-cyan-400">DVI</span></span>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm" data-i18n="footer_about_desc">Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.</p>
                    
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 flex items-center justify-center text-white transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-blue-600 flex items-center justify-center text-white transition-all"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-white/5 hover:bg-black flex items-center justify-center text-white transition-all"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 flex items-center gap-2"><i class="fa-solid fa-link text-cyan-400 text-xs"></i> Menu</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#masalah" class="hover:text-cyan-400 transition-all block hover:translate-x-1">Masalah Bisnis</a></li>
                        <li><a href="#solusi" class="hover:text-cyan-400 transition-all block hover:translate-x-1">Solusi Kami</a></li>
                        <li><a href="#hemat" class="hover:text-cyan-400 transition-all block hover:translate-x-1">Hitung Hemat</a></li>
                        <li><a href="#portfolio" class="hover:text-cyan-400 transition-all block hover:translate-x-1">Hasil Kerja</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 flex items-center gap-2"><i class="fa-solid fa-location-dot text-cyan-400 text-xs"></i> Kontak</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-map-pin mt-1 text-cyan-500"></i>
                            <span>Jl. Jendral Sudirman No. 10, Jakarta Selatan, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-cyan-500"></i>
                            <span>halo@inxdvi.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-clock text-cyan-500"></i>
                            <span>Senin - Jumat (09.00 - 17.00)</span>
                        </li>
                    </ul>
                </div>

                 <div>
                    <h4 class="text-white font-bold mb-6" data-i18n="newsletter_title">Tips Bisnis Gratis</h4>
                    <p class="text-sm text-gray-400 mb-4" data-i18n="newsletter_desc">Masukkan email untuk dapat tips meningkatkan omzet tiap minggu.</p>
                    <div class="relative">
                        <input type="email" placeholder="Email Anda..." class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-cyan-400 transition-colors pr-12">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 bg-cyan-500 hover:bg-cyan-400 rounded-md flex items-center justify-center text-white transition-colors">
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/10 text-sm text-gray-500 font-mono">
                <p>&copy; 2024 INXDVI Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // 1. Spotlight Effect (Mouse Glow)
        document.addEventListener('mousemove', e => {
            const cards = document.getElementsByClassName('spotlight-card');
            for(const card of cards) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            }
        });

        // 2. Mobile Menu Logic
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link'); // Select links inside menu

        // Toggle Menu
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

        // Close menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuBtn.querySelector('i').classList.remove('fa-xmark');
                menuBtn.querySelector('i').classList.add('fa-bars');
            });
        });

        // 3. Language Logic
        const langBtn = document.getElementById('lang-toggle');
        const langFlag = document.getElementById('lang-flag');
        const langText = document.getElementById('lang-text');
        
        let currentLang = localStorage.getItem('lang') || 'id';

        const resources = {
            id: {
                // Navigation
                nav_problem: "Masalah", nav_solution: "Solusi", nav_benefit: "Hemat", nav_portfolio: "Portfolio", btn_contact: "Konsultasi Gratis", btn_contact_wa: "Chat WhatsApp",
                
                // Hero Section
                hero_badge: "BISNIS JADI AUTOPILOT",
                hero_title: "Bisnis Jalan Otomatis <br> <span class='text-gradient'>Omzet Naik Drastis</span>",
                hero_desc: "Stop jadi 'budak' di bisnis sendiri. Kami buatkan sistem kasir, stok, dan laporan otomatis. Anda tinggal pantau lewat HP. Gaptek? Tenang, kami ajari.",
                btn_start: "Konsultasi via WA", btn_portfolio: "LIHAT HASIL KERJA",
                
                // Pain Points (Masalah)
                sec_prob_sub: "/// KELUHAN UMUM", 
                sec_prob_title: "Apakah Bisnis Anda <br> Mengalami <span class='text-red-400'>Masalah Ini?</span>",
                prob_1_title: "Uang & Stok Selisih", prob_1_desc: "Tiap tutup toko uang di laci kurang? Stok barang hilang misterius? Awas kebocoran atau karyawan tidak jujur.",
                prob_2_title: "Pusing Rekap Manual", prob_2_desc: "Akhir bulan lembur ngitung nota tulis tangan. Salah hitung sedikit, rugi jutaan rupiah.",
                prob_3_title: "Kalah Sama Tetangga", prob_3_desc: "Toko sebelah sudah bisa pesan online dan ada di Google Maps, toko Anda masih nunggu bola.",

                // Solutions (Layanan)
                sec_service_sub: "/// SOLUSI KAMI", sec_service_title: "Solusi Praktis <span class='text-gradient'>Tanpa Ribet</span>", sec_service_desc: "Kami sediakan 'alat digital' biar Anda bisa tidur nyenyak sementara sistem bekerja.",
                srv_mobile_title: "Aplikasi Kasir & Stok", srv_mobile_desc: "Pantau penjualan dan stok barang langsung dari HP (Real-time).",
                srv_web_title: "Website Pencari Pelanggan", srv_web_desc: "Bikin toko/jasa Anda muncul paling atas di Google (SEO) saat orang mencari.",
                srv_sosmed_title: "Bot Balas Chat", srv_sosmed_desc: "Sistem yang menjawab pertanyaan pelanggan 24 jam nonstop.",
                srv_sec_title: "Keamanan Data", srv_sec_desc: "Data keuangan Anda aman, tidak akan bocor ke kompetitor.",
                srv_data_title: "Laporan Otomatis", srv_data_desc: "Laporan laba rugi keluar otomatis setiap hari tanpa perlu hitung manual.",
                srv_com_title: "Komunitas Pelanggan", srv_com_desc: "Bangun database pelanggan setia untuk promosi berulang.",
                srv_vector_title: "Desain Logo & Branding", srv_vector_desc: "Bikin brand terlihat mahal. Desain logo, banner, dan menu yang menggugah selera.",
                srv_sosmed_spec_title: "Jasa Kelola Sosmed", srv_sosmed_spec_desc: "Kami urus IG & TikTok Anda. Mulai dari ide konten, edit video, sampai posting rutin.",
                
                // ROI (Hemat)
                sec_roi_sub: "/// HITUNG-HITUNGAN CUAN", 
                sec_roi_title: "Lebih Murah Dari <br> <span class='text-gradient'>Gaji Karyawan</span>",
                sec_roi_desc: "Daripada tambah 2 admin baru, lebih baik investasi sistem. Tidak perlu bayar THR, tidak ada drama izin sakit, dan kerja 24 jam.",
                roi_1: "Sistem bekerja 24 jam nonstop", roi_2: "Akurasi data 100% (Anti Salah Hitung)", roi_3: "Investasi sekali, untung selamanya",
                btn_calc: "Hitung Penghematan Saya", 
                card_manual: "Cara Manual", card_desc_manual: "Gaji Admin UMR Setahun",
                card_tech: "Pakai Sistem", card_desc_tech: "Investasi Awal (Sekali Bayar)",
                roi_summary: "Anda Menghemat Uang:",

                // Trust
                trust_title: "\"Saya Gaptek, Takut Gak Bisa Pakai\"",
                trust_desc: "Jangan khawatir Pak/Bu. Kami tidak akan tinggalkan Anda. Tim kami akan mengajari Anda dan karyawan sampai benar-benar lancar. Kalau ada error, kami perbaiki gratis.",

                // Case Studies
                sec_case_sub: "/// KASUS NYATA", sec_case_title: "Bukti Nyata <span class='text-gradient'>Perubahan</span>", sec_case_desc: "Lihat bagaimana kami mengubah hambatan bisnis menjadi keuntungan.",
                case_1_prob_title: "Stok Barang Selalu Selisih", case_1_prob_desc: "Klien sering kehilangan stok barang tapi tidak tahu siapa yang ambil. Rugi jutaan per bulan.",
                case_1_sol_title: "Sistem Stok Barcode", case_1_sol_desc: "Kami pasang sistem barcode. Setiap barang keluar masuk tercatat jam dan petugasnya.",
                case_2_prob_title: "Admin Kewalahan Balas Chat", case_2_prob_desc: "Banyak chat masuk tapi admin lambat balas. Calon pembeli kabur ke toko sebelah.",
                case_2_sol_title: "Bot WhatsApp Otomatis", case_2_sol_desc: "Sistem otomatis yang menjawab pertanyaan harga dan stok dalam 1 detik, 24 jam nonstop.",
                
                // Portfolio & Workflow
                sec_port_sub: "/// PAMERAN", sec_port_title: "Portfolio <span class='text-gradient'>Kami</span>", btn_see_all: "LIHAT SEMUA",
                sec_workflow_sub: "/// ALUR KERJA", sec_workflow_title: "Proses Gampang <span class='text-gradient'>Anti Ribet</span>",
                step_1_title: "1. Curhat Dulu", step_1_desc: "Ceritakan masalah bisnis Anda, kami dengarkan dan beri solusi.",
                step_2_title: "2. Kami Buatkan", step_2_desc: "Tim kami mulai merancang sistem sesuai kebutuhan Anda.",
                step_3_title: "3. Pengerjaan", step_3_desc: "Proses coding dan pembuatan aplikasi oleh ahli kami.",
                step_4_title: "4. Training & Jadi", step_4_desc: "Kami ajari cara pakainya sampai Anda dan staf mahir.",
                sec_client_title: "Kata Klien <span class='italic text-cyan-400'>Kami</span>",

                // Why Us
                sec_why_sub: "/// MENGAPA KAMI", 
                sec_why_title: "Jangan Buang Waktu <br> Dengan <span class='text-gray-600 line-through decoration-red-500 decoration-4'>Cara Lama</span>",
                sec_why_desc: "Di era digital yang brutal, kecepatan dan ketepatan adalah segalanya. Kami menggunakan teknologi stack terbaru untuk memastikan Anda selalu satu langkah di depan kompetitor.",
                stat_1: "Retensi Klien", stat_2: "Produk Digital", stat_3: "Peningkatan ROI",
                offer_title: "Gratis Audit Digital", offer_desc: "Dapatkan analisa mendalam tentang performa website atau aplikasi Anda senilai Rp 5.000.000, gratis untuk 5 pendaftar pertama bulan ini.", btn_claim: "Klaim Sekarang",

                // Blog (ENHANCED)
                sec_blog_sub: "/// TIPS BISNIS", sec_blog_title: "Artikel & <span class='text-gradient'>Tips</span>", btn_read_more: "LIHAT SEMUA TIPS",
                blog_1_title: "Kasir Sering Minus? Ini 5 Penyebabnya", blog_1_desc: "Jangan biarkan uang bocor. Kenali tanda-tanda karyawan tidak jujur di meja kasir.",
                blog_2_title: "Trik Agar Toko Muncul Paling Atas di Google", blog_2_desc: "Cara gratis agar pelanggan di sekitar Anda langsung menemukan toko Anda di Google Maps.",
                blog_3_title: "Capek Balas Chat? Pakai Trik Ini", blog_3_desc: "Rahasia agar chat pelanggan terjawab dalam 1 detik meski Anda sedang tidur.",
                
                // Footer (ENHANCED)
                footer_cta_title: "Jangan Biarkan Kompetitor <br> <span class='text-cyan-400'>Menyalip Anda!</span>",
                footer_cta_desc: "Konsultasikan kebutuhan digital Anda sekarang. Gratis, tanpa kewajiban membeli.",
                btn_contact_us: "Hubungi Kami", btn_wa_footer: "Hubungi via WhatsApp",
                footer_about_desc: "Partner digital terpercaya untuk UMKM dan Bisnis Lokal. Kami membuat teknologi rumit menjadi mudah digunakan untuk semua orang.",
                newsletter_title: "Tips Bisnis Gratis", newsletter_desc: "Masukkan email untuk dapat tips meningkatkan omzet tiap minggu."
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

                // Blog (ENHANCED EN)
                sec_blog_sub: "/// INSIGHTS", sec_blog_title: "News & <span class='text-gradient'>Articles</span>", btn_read_more: "READ MORE",
                blog_1_title: "5 Signs of Cashier Fraud", blog_1_desc: "Don't let money leak. Recognize the signs of dishonest staff at the checkout counter.",
                blog_2_title: "How to Rank Top on Google Maps", blog_2_desc: "Free ways to make customers in your area instantly find your shop on Google Maps.",
                blog_3_title: "Tired of Replying Chats? Use This", blog_3_desc: "The secret to answering customer chats in 1 second even when you're asleep.",

                // Footer (ENHANCED EN)
                footer_cta_title: "Ready to Transform <br> <span class='text-cyan-400'>Your Business?</span>",
                footer_cta_desc: "Don't let competitors get ahead. Consult your digital needs with our experts now.",
                btn_contact_us: "Contact Us", btn_wa_footer: "Chat on WhatsApp",
                footer_about_desc: "Your trusted technology partner for digital transformation. We create innovative solutions that drive growth.",
                newsletter_title: "Free Business Tips", newsletter_desc: "Enter email to get tips on increasing turnover every week."
            }
        };

        function updateLang(lang) {
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if(resources[lang][key]) el.innerHTML = resources[lang][key];
            });
            langFlag.innerText = lang === 'id' ? '🇮🇩' : '🇺🇸';
            langText.innerText = lang.toUpperCase();
            localStorage.setItem('lang', lang);
            currentLang = lang;
        }

        // Init Language
        updateLang(currentLang);

        // Toggle Language Event
        langBtn.addEventListener('click', () => {
            updateLang(currentLang === 'id' ? 'en' : 'id');
        });
    </script>
</body>
</html>