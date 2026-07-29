import React, { useState, useEffect } from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import anime from 'animejs';
import { trackPixelEvent } from '../utils/pixel';
import {
    Check,
    X,
    AlertTriangle,
    MessageSquare,
    Plus,
    Trash2,
    Download,
    Send,
    Bot,
    User,
    ChevronDown,
    Zap,
    Layers,
    Cpu,
    TrendingUp,
    Code,
    Calendar,
    Megaphone
} from 'lucide-react';

const ServiceIcon = ({ iconName, ...props }) => {
    switch (iconName) {
        case 'cpu':
            return <Cpu {...props} />;
        case 'trending-up':
            return <TrendingUp {...props} />;
        case 'code':
            return <Code {...props} />;
        case 'megaphone':
            return <Megaphone {...props} />;
        default:
            return <Layers {...props} />;
    }
};

const getServiceTag = (slug) => {
    switch (slug) {
        case 'ai-assistant-business':
            return '✓ Chatbot & Otomasi CS';
        case 'digital-transformation-umkm':
            return '✓ Sistem POS & Stok Cloud';
        case 'enterprise-custom-software':
            return '✓ Web App & ERP Kustom';
        case 'basic-ads-campaign':
            return '✓ Meta & Google Ads Setup';
        default:
            return '✓ Layanan Premium';
    }
};

export default function Home({ services, portfolios, articles, faqs, packages, testimonials, siteStats, appDemos, settings }) {
    const [billingPeriod, setBillingPeriod] = useState('monthly');
    const [activeFaq, setActiveFaq] = useState(null);
    const [activeFeatureTab, setActiveFeatureTab] = useState('ai-whatsapp');

    // 1. WhatsApp AI Assistant sandbox states
    const [chatMessages, setChatMessages] = useState([
        { sender: 'client', text: 'Halo, saya butuh sistem ERP kustom untuk logistik gudang. Apakah bisa dibuat?' },
        { sender: 'ai', text: 'Halo! Tentu saja bisa. Kami menyediakan rekayasa software kustom skala enterprise. Mau jadwalkan sesi konsultasi gratis?' }
    ]);
    const [chatInput, setChatInput] = useState('');
    const [isAiTyping, setIsAiTyping] = useState(false);
    const [leadsCount, setLeadsCount] = useState(12);

    // 2. Cloud POS sandbox states
    const [cart, setCart] = useState([]);
    const [posReceipt, setPosReceipt] = useState(null);
    const [isPrinting, setIsPrinting] = useState(false);
    const [stockItems, setStockItems] = useState([
        { id: 1, name: 'Biji Kopi Arabica (Kg)', stock: 15, max: 20 },
        { id: 2, name: 'Susu UHT Box (Pcs)', stock: 5, max: 30 },
    ]);
    const [alertMessage, setAlertMessage] = useState('');

    // 3. Custom Software Architecture Sandbox states
    const [selectedModules, setSelectedModules] = useState(['absensi', 'keuangan']);
    const customModulesList = [
        { id: 'absensi', name: 'Presensi Karyawan & GPS', category: 'HRM', complexity: 'Low' },
        { id: 'keuangan', name: 'Manajemen Keuangan & Pajak', category: 'Finance', complexity: 'Medium' },
        { id: 'gudang', name: 'Stok Gudang & Multi-Cabang', category: 'Inventory', complexity: 'High' },
        { id: 'crm', name: 'CRM & Program Loyalitas', category: 'Sales', complexity: 'Medium' }
    ];

    // Testimonials slider index
    const [testiIndex, setTestiIndex] = useState(0);

    const posMenu = [
        { id: 1, name: 'Caramel Macchiato', price: 32000 },
        { id: 2, name: 'Cinnamon Roll', price: 25000 },
        { id: 3, name: 'Kopi Susu Premium', price: 20000 }
    ];

    useEffect(() => {
        // Fade in hero titles
        anime({
            targets: '.animate-fade-up',
            translateY: [30, 0],
            opacity: [0, 1],
            delay: anime.stagger(120),
            duration: 1000,
            easing: 'easeOutCubic'
        });
    }, []);

    // 1. WhatsApp AI Sandbox
    const sendChatMessage = (e) => {
        e.preventDefault();
        if (!chatInput.trim() || isAiTyping) return;

        const userMsg = chatInput;
        setChatMessages(prev => [...prev, { sender: 'client', text: userMsg }]);
        setChatInput('');
        setIsAiTyping(true);

        setTimeout(() => {
            let response = 'Pesanan kustom Anda sedang kami analisis. Tim engineering INXDVI akan menghubungi Anda untuk blueprint detailnya!';
            const msgLower = userMsg.toLowerCase();
            if (msgLower.includes('kasir') || msgLower.includes('pos') || msgLower.includes('stok')) {
                response = 'Siap! Kami punya sistem POS terintegrasi stok cloud dan laporan otomatis. Mau kami kirimkan dokumen demo pdf nya?';
            } else if (msgLower.includes('harga') || msgLower.includes('biaya') || msgLower.includes('paket')) {
                response = 'Layanan kustom kami disesuaikan dengan budget Anda, mulai dari Rp 1.5 Juta untuk UMKM. Boleh tahu skala bisnis Anda?';
            } else if (msgLower.includes('wa') || msgLower.includes('whatsapp') || msgLower.includes('bot')) {
                response = 'Asisten AI WhatsApp kami siap membalas otomatis 24 jam nonstop & rekap data customer langsung ke dashboard owner!';
            }

            setChatMessages(prev => [...prev, { sender: 'ai', text: response }]);
            setIsAiTyping(false);
            setLeadsCount(prev => prev + 1);

            const chatBox = document.getElementById('ai-chat-box-container');
            if (chatBox) {
                setTimeout(() => { chatBox.scrollTop = chatBox.scrollHeight; }, 50);
            }
        }, 1200);
    };

    // 2. POS Sandbox
    const addToCart = (item) => {
        setCart(prev => {
            const existing = prev.find(i => i.id === item.id);
            if (existing) {
                return prev.map(i => i.id === item.id ? { ...i, qty: i.qty + 1 } : i);
            }
            return [...prev, { ...item, qty: 1 }];
        });
    };

    const removeFromCart = (id) => {
        setCart(prev => prev.filter(item => item.id !== id));
    };

    const handlePOSCheckout = () => {
        if (cart.length === 0) return;
        setIsPrinting(true);

        setTimeout(() => {
            setIsPrinting(false);
            setPosReceipt({
                id: Math.floor(Math.random() * 90000) + 10000,
                time: new Date().toLocaleTimeString(),
                items: [...cart],
                total: cart.reduce((acc, curr) => acc + (curr.price * curr.qty), 0)
            });
            setCart([]);
            setStockItems(prev => prev.map(i => {
                if (i.id === 2) {
                    const updated = Math.max(0, i.stock - 2);
                    if (updated <= 5) {
                        setAlertMessage('⚠️ Peringatan: Stok Susu UHT Box hampir habis! Notifikasi restock telah dikirim otomatis.');
                        setTimeout(() => setAlertMessage(''), 5000);
                    }
                    return { ...i, stock: updated };
                }
                return i;
            }));
        }, 1000);
    };

    // 3. Custom Software Sandbox
    const toggleModule = (id) => {
        setSelectedModules(prev =>
            prev.includes(id) ? prev.filter(m => m !== id) : [...prev, id]
        );
    };

    const nextTesti = () => {
        setTestiIndex((prev) => (prev + 1) % testimonials.length);
    };

    const prevTesti = () => {
        setTestiIndex((prev) => (prev - 1 + testimonials.length) % testimonials.length);
    };

    const whatsappNumber = settings?.whatsapp_number || '6281330012100';
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=Halo%20INXDVI%2C%20saya%20tertarik%20dengan%20solusi%20digital%20dan%20software%20kustom.`;

    const activeTabStyle = "px-6 py-3 bg-blue-600 text-white rounded-none border-2 border-slate-900 text-xs font-bold shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] flex items-center gap-2 transition-all cursor-pointer";
    const inactiveTabStyle = "px-6 py-3 bg-white text-slate-650 hover:bg-slate-50 border-2 border-slate-900 rounded-none text-xs font-bold shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] flex items-center gap-2 transition-all cursor-pointer";

    return (
        <div className="bg-[#FDFBF7] min-h-screen text-slate-900 font-sans">
            <Navbar settings={settings} />

            {/* 1. HERO SECTION (Retro grid background pattern) */}
            <header className="relative pt-32 pb-24 px-6 overflow-hidden retro-grid border-b-2 border-slate-900">
                <div className="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                    {/* Hero Left Text content */}
                    <div className="lg:col-span-7 space-y-8 animate-fade-up">
                        <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-none border-2 border-slate-900 bg-white text-blue-600 text-xs font-mono font-bold uppercase tracking-wider shadow-[3px_3px_0px_0px_rgba(15,23,42,1)]">
                            <span className="w-2.5 h-2.5 bg-blue-600 border border-slate-900"></span>
                            <span>INXDVI PREMIUM SOLUTION</span>
                        </div>

                        <h1 className="text-4xl sm:text-5xl md:text-6xl font-display font-extrabold text-slate-900 tracking-tight leading-[1.08] max-w-2xl">
                            Digitalisasi & Software Kustom <br />
                            <span className="text-blue-600">
                                Tanpa Batas Usaha Anda.
                            </span>
                        </h1>

                        <p className="text-slate-700 text-sm md:text-base font-bold leading-relaxed max-w-xl">
                            Kami merancang solusi digital premium untuk akselerasi operasional: mulai dari kasir cloud, inventory pintar, asisten AI WhatsApp 24 jam, hingga sistem Enterprise kustom yang didesain khusus sesuai kebutuhan arsitektur bisnis Anda.
                        </p>

                        {/* Feature List (Retro styled) */}
                        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2 text-xs font-bold text-slate-800 max-w-lg">
                            <span className="flex items-center gap-2.5">
                                <span className="w-5 h-5 bg-white border-2 border-slate-900 text-blue-600 flex items-center justify-center font-bold text-[10px]">1</span>
                                Asisten AI WhatsApp Balas Otomatis
                            </span>
                            <span className="flex items-center gap-2.5">
                                <span className="w-5 h-5 bg-white border-2 border-slate-900 text-blue-600 flex items-center justify-center font-bold text-[10px]">2</span>
                                Kasir POS Cloud & Laporan Otomatis
                            </span>
                            <span className="flex items-center gap-2.5">
                                <span className="w-5 h-5 bg-white border-2 border-slate-900 text-blue-600 flex items-center justify-center font-bold text-[10px]">3</span>
                                Rekayasa Software & ERP Kustom
                            </span>
                            <span className="flex items-center gap-2.5">
                                <span className="w-5 h-5 bg-white border-2 border-slate-900 text-blue-600 flex items-center justify-center font-bold text-[10px]">4</span>
                                Pendampingan Developer Berpengalaman
                            </span>
                        </div>

                        {/* CTA group */}
                        <div className="flex flex-col sm:flex-row gap-4 pt-2">
                            <a
                                href={whatsappUrl}
                                target="_blank"
                                rel="noopener noreferrer"
                                onClick={() => trackPixelEvent('Contact', { position: 'hero' })}
                                className="px-8 py-4 bg-blue-600 text-white font-bold border-2 border-slate-900 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] transition-all flex items-center justify-center gap-2 cursor-pointer"
                            >
                                <span>Konsultasi Proyek Gratis</span>
                            </a>
                            <a
                                href="#solusi"
                                className="px-8 py-4 bg-white border-2 border-slate-900 text-slate-800 font-bold shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] transition-all flex items-center justify-center gap-2 cursor-pointer"
                            >
                                <span>Coba Demo Interaktif</span>
                                <ChevronDown size={14} className="animate-bounce" />
                            </a>
                        </div>
                    </div>

                    {/* Hero Right - Premium Retro tech Workspace image illustration */}
                    <div className="lg:col-span-5 flex justify-center">
                        <div className="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(15,23,42,1)] overflow-hidden transition-all duration-300 hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[7px_7px_0px_0px_rgba(15,23,42,1)]">
                            <img
                                src="/images/hero_workspace.png"
                                className="w-full h-auto max-w-sm md:max-w-md object-contain"
                                alt="INXDVI Digital Workspace Solution"
                            />
                        </div>
                    </div>

                </div>
            </header>

            {/* INFINITE Horizontal MARQUEE TICKER STRIP */}
            <div className="bg-blue-600 border-b-2 border-slate-900 py-3 overflow-hidden text-white font-mono text-[10px] md:text-xs font-bold uppercase tracking-widest select-none">
                <div className="animate-marquee whitespace-nowrap flex">
                    <span>CUSTOM SOFTWARE ENGINEERING • INTEGRASI AUTOMASI • CLOUD KASIR POS • DIGITALISASI UMKM • WHATSAPP AI ASSISTANT • 100% BESPOKE SOLUTIONS • SUPPORT & MAINTENANCE •&nbsp;</span>
                    <span>CUSTOM SOFTWARE ENGINEERING • INTEGRASI AUTOMASI • CLOUD KASIR POS • DIGITALISASI UMKM • WHATSAPP AI ASSISTANT • 100% BESPOKE SOLUTIONS • SUPPORT & MAINTENANCE •&nbsp;</span>
                </div>
            </div>

            {/* 2. SECTION: SERVICE CARDS */}
            <section className="py-24 px-6 bg-[#FAF6EE] border-b-2 border-slate-900">
                <div className="max-w-7xl mx-auto">
                    <div className="text-center max-w-3xl mx-auto space-y-4 mb-16 relative">
                        {/* Wiggling sticker badge */}
                        <div className="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-white text-blue-600 text-[9px] font-mono font-bold uppercase border-2 border-slate-900 px-3 py-1 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] animate-wiggle-badge">
                            🚀 100% Bespoke Code
                        </div>
                        <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block pt-4">
                            LAYANAN UTAMA KAMI
                        </span>
                        <h2 className="text-3xl md:text-4xl font-display font-extrabold text-slate-900 leading-tight">
                            Solusi Teknologi End-to-End Bisnis Anda
                        </h2>
                        <p className="text-slate-700 text-sm font-bold">
                            Kami menyediakan solusi teknologi dan digital marketing premium untuk membantu bisnis beralih ke operasional digital autopilot dan melakukan ekspansi pasar tertarget.
                        </p>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        {services && services.length > 0 ? (
                            services.map((service) => (
                                <div key={service.id} className="p-8 bg-white border-2 border-slate-900 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all flex flex-col justify-between">
                                    <div className="space-y-6">
                                        <div className="w-12 h-12 bg-[#FAF6EE] border-2 border-slate-900 flex items-center justify-center text-blue-600">
                                            <ServiceIcon iconName={service.icon} size={24} />
                                        </div>
                                        <div className="space-y-2">
                                            <h3 className="text-slate-900 font-extrabold text-lg">{service.name}</h3>
                                            <p className="text-slate-650 text-xs md:text-sm font-medium leading-relaxed">
                                                {service.description}
                                            </p>
                                        </div>
                                    </div>
                                    <div className="space-y-3 pt-6 border-t border-slate-100 mt-4">
                                        <div className="text-[11px] font-mono text-slate-500">
                                            Mulai dari <span className="font-bold text-slate-900">IDR {Number(service.base_price).toLocaleString('id-ID')}</span>
                                        </div>
                                        <div className="text-[11px] font-mono font-bold text-blue-600">{getServiceTag(service.slug)}</div>
                                    </div>
                                </div>
                            ))
                        ) : (
                            <>
                                {/* Fallback Service 1 */}
                                <div className="p-8 bg-white border-2 border-slate-900 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] space-y-6 hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all">
                                    <div className="w-12 h-12 bg-[#FAF6EE] border-2 border-slate-900 flex items-center justify-center text-blue-600">
                                        <Cpu size={24} />
                                    </div>
                                    <div className="space-y-2">
                                        <h3 className="text-slate-900 font-extrabold text-lg">AI WhatsApp Assistant</h3>
                                        <p className="text-slate-650 text-xs md:text-sm font-medium leading-relaxed">
                                            Asisten AI pintar 24 jam nonstop untuk merespons pertanyaan pelanggan di WhatsApp, menangkap prospek leads, merekomendasikan produk, dan menyetor data rekap harian secara otomatis.
                                        </p>
                                    </div>
                                    <div className="text-[11px] font-mono font-bold text-blue-600">✓ Chatbot & Otomasi CS</div>
                                </div>

                                {/* Fallback Service 2 */}
                                <div className="p-8 bg-white border-2 border-slate-900 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] space-y-6 hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all">
                                    <div className="w-12 h-12 bg-[#FAF6EE] border-2 border-slate-900 flex items-center justify-center text-blue-600">
                                        <TrendingUp size={24} />
                                    </div>
                                    <div className="space-y-2">
                                        <h3 className="text-slate-900 font-extrabold text-lg">Digitalisasi UMKM (POS & Cloud)</h3>
                                        <p className="text-slate-650 text-xs md:text-sm font-medium leading-relaxed">
                                            Paket integrasi lengkap kasir cloud pintar (POS), monitor stok real-time, manajemen cabang, cetak nota struk thermal instan, dan laporan laba rugi terautomasi tanpa ribet rekap manual.
                                        </p>
                                    </div>
                                    <div className="text-[11px] font-mono font-bold text-blue-600">✓ Sistem POS & Stok Cloud</div>
                                </div>

                                {/* Fallback Service 3 */}
                                <div className="p-8 bg-white border-2 border-slate-900 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] space-y-6 hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all">
                                    <div className="w-12 h-12 bg-[#FAF6EE] border-2 border-slate-900 flex items-center justify-center text-blue-600">
                                        <Code size={24} />
                                    </div>
                                    <div className="space-y-2">
                                        <h3 className="text-slate-900 font-extrabold text-lg">Enterprise Custom Software</h3>
                                        <p className="text-slate-650 text-xs md:text-sm font-medium leading-relaxed">
                                            Pengembangan aplikasi web kustom untuk skala bisnis menegah ke atas. Kami bangun sistem HRIS, absensi GPS, logistik gudang suplai, manajemen CRM, dan integrasi API yang kokoh sesuai permintaan Anda.
                                        </p>
                                    </div>
                                    <div className="text-[11px] font-mono font-bold text-blue-600">✓ Web App & ERP Kustom</div>
                                </div>
                            </>
                        )}
                    </div>
                </div>
            </section>

            {/* 3. INTERACTIVE PRODUCT PLAYGROUND SANDBOX */}
            <section id="solusi" className="py-24 px-6 border-b-2 border-slate-900">
                <div className="max-w-7xl mx-auto">

                    <div className="text-center max-w-3xl mx-auto space-y-4 mb-12 relative">
                        {/* Wiggling sticker badge */}
                        <div className="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-yellow-400 text-slate-900 text-[9px] font-mono font-bold uppercase border-2 border-slate-900 px-3 py-1 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] -rotate-3 animate-wiggle-badge">
                            ⚡ Try Live Playground
                        </div>
                        <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block pt-4">
                            COBA PRODUK LANGSUNG
                        </span>
                        <h2 className="text-3xl md:text-4xl font-display font-extrabold text-slate-900 leading-tight">
                            Interactive Product Playground
                        </h2>
                        <p className="text-slate-700 text-sm font-bold">
                            Uji coba fungsionalitas tiga sistem produk utama kami di panel interaktif berikut secara live!
                        </p>
                    </div>

                    {/* Tab triggers */}
                    <div className="flex flex-wrap justify-center gap-3.5 mb-10">
                        <button
                            onClick={() => setActiveFeatureTab('ai-whatsapp')}
                            className={activeFeatureTab === 'ai-whatsapp' ? activeTabStyle : inactiveTabStyle}
                        >
                            <Cpu size={14} />
                            <span>1. AI WhatsApp Bot</span>
                        </button>
                        <button
                            onClick={() => setActiveFeatureTab('pos-stok')}
                            className={activeFeatureTab === 'pos-stok' ? activeTabStyle : inactiveTabStyle}
                        >
                            <Layers size={14} />
                            <span>2. Kasir POS & Stok</span>
                        </button>
                        <button
                            onClick={() => setActiveFeatureTab('custom-software')}
                            className={activeFeatureTab === 'custom-software' ? activeTabStyle : inactiveTabStyle}
                        >
                            <Code size={14} />
                            <span>3. Custom Software Blueprint</span>
                        </button>
                    </div>

                    {/* Sandbox screen container */}
                    <div className="bg-white border-2 border-slate-900 p-6 md:p-10 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] max-w-4xl mx-auto">

                        {/* PLAYGROUND 1: AI WHATSAPP CHAT BOT */}
                        {activeFeatureTab === 'ai-whatsapp' && (
                            <div className="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
                                <div className="md:col-span-7 space-y-4">
                                    <h4 className="text-slate-800 font-bold text-sm uppercase tracking-wide border-b-2 border-slate-955 pb-2">
                                        Simulasi Asisten AI Interaktif
                                    </h4>
                                    <p className="text-slate-650 text-xs font-medium leading-relaxed">
                                        WhatsApp AI chatbot kami langsung menyaring pesan kustom dari prospek calon pembeli secara otomatis 24 jam nonstop dan menyimpan data Leads langsung di panel admin.
                                    </p>

                                    {/* Clickable quick query helpers */}
                                    <div className="flex flex-wrap gap-2 pt-2">
                                        <span className="text-[10px] text-slate-400 font-mono self-center">Kirim Template:</span>
                                        <button
                                            onClick={() => setChatInput('Berapa biaya pembuatan sistem absensi karyawan?')}
                                            className="px-3 py-1.5 bg-[#FAF6EE] hover:bg-slate-100 text-slate-800 text-[10px] font-extrabold border-2 border-slate-900 shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-all cursor-pointer"
                                        >
                                            Biaya sistem absensi?
                                        </button>
                                        <button
                                            onClick={() => setChatInput('Bagaimana cara integrasi AI Bot di Whatsapp?')}
                                            className="px-3 py-1.5 bg-[#FAF6EE] hover:bg-slate-100 text-slate-800 text-[10px] font-extrabold border-2 border-slate-900 shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-all cursor-pointer"
                                        >
                                            Cara pasang AI WA?
                                        </button>
                                    </div>

                                    <div className="bg-blue-50 border-2 border-slate-900 rounded-none p-4 text-xs text-blue-900 flex items-start gap-2.5">
                                        <Zap className="text-blue-600 flex-shrink-0 mt-0.5" size={14} />
                                        <span>Ketik pertanyaan Anda tentang program, sistem kasir, atau bot di kolom chat sebelah kanan untuk melihat kecerdasan balasan otomatis AI!</span>
                                    </div>
                                </div>

                                <div className="md:col-span-5 bg-[#FAF6EE] border-2 border-slate-900 rounded-none p-4 space-y-3">
                                    <div className="flex justify-between items-center border-b-2 border-slate-900 pb-2">
                                        <span className="font-bold text-xs text-slate-800 flex items-center gap-1.5">
                                            <Bot size={14} className="text-blue-600" /> WhatsApp AI Bot
                                        </span>
                                        <span className="text-[9px] font-mono text-blue-750 font-bold bg-white border border-slate-900 px-2 py-0.5 shadow-[1px_1px_0px_0px_rgba(15,23,42,1)]">Leads: {leadsCount}</span>
                                    </div>

                                    {/* Chatbox history */}
                                    <div
                                        id="ai-chat-box-container"
                                        className="h-48 bg-white border-2 border-slate-900 p-3 overflow-y-auto space-y-2.5 scroll-smooth"
                                    >
                                        {chatMessages.map((msg, i) => (
                                            <div key={i} className={`flex gap-2 max-w-[85%] ${msg.sender === 'client' ? 'ml-auto flex-row-reverse' : 'mr-auto'}`}>
                                                <div className={`p-2.5 border border-slate-900 text-[11px] leading-relaxed shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] ${msg.sender === 'client' ? 'bg-blue-600 text-white' : 'bg-slate-50 text-slate-700'
                                                    }`}>
                                                    {msg.text}
                                                </div>
                                            </div>
                                        ))}
                                        {isAiTyping && (
                                            <div className="flex gap-2 mr-auto">
                                                <div className="bg-slate-50 border border-slate-900 p-2 text-[10px] text-slate-500 font-mono animate-pulse shadow-[1px_1px_0px_0px_rgba(15,23,42,1)]">
                                                    AI sedang mengetik...
                                                </div>
                                            </div>
                                        )}
                                    </div>

                                    {/* Chat input form */}
                                    <form onSubmit={sendChatMessage} className="flex gap-1.5">
                                        <input
                                            type="text"
                                            value={chatInput}
                                            onChange={(e) => setChatInput(e.target.value)}
                                            placeholder="Tanya AI tentang software..."
                                            className="flex-1 px-3 py-2 bg-white border-2 border-slate-900 text-xs focus:outline-none text-slate-800"
                                        />
                                        <button
                                            type="submit"
                                            className="px-3 py-2 bg-blue-600 border-2 border-slate-900 text-white font-bold transition-all flex items-center justify-center cursor-pointer shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)]"
                                        >
                                            <Send size={12} />
                                        </button>
                                    </form>
                                </div>
                            </div>
                        )}

                        {/* PLAYGROUND 2: POS & STOK INVENTORY */}
                        {activeFeatureTab === 'pos-stok' && (
                            <div className="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
                                <div className="md:col-span-7 space-y-4">
                                    <h4 className="text-slate-800 font-bold text-sm uppercase tracking-wide border-b-2 border-slate-950 pb-2">
                                        Cloud POS & Pengurangan Stok Otomatis
                                    </h4>
                                    <p className="text-slate-650 text-xs font-medium leading-relaxed">
                                        Simulasikan kasir toko kopi Anda. Klik item menu di bawah untuk menambahkan ke keranjang belanja, klik proses checkout, dan lihat stok bahan di kulkas terpotong instan.
                                    </p>

                                    <div className="grid grid-cols-3 gap-2">
                                        {posMenu.map(item => (
                                            <button
                                                key={item.id}
                                                onClick={() => addToCart(item)}
                                                className="p-3 bg-white border-2 border-slate-900 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:bg-slate-50 text-left transition-all cursor-pointer"
                                            >
                                                <p className="font-bold text-slate-800 text-[11px]">{item.name}</p>
                                                <p className="text-[10px] text-blue-600 font-mono font-bold mt-0.5">Rp {item.price.toLocaleString('id-ID')}</p>
                                            </button>
                                        ))}
                                    </div>

                                    {/* Stock monitors */}
                                    <div className="space-y-3 pt-3 border-t-2 border-slate-900">
                                        <span className="text-[10px] font-mono text-slate-500 font-bold block">MONITOR STOK BAHAN BAKU:</span>
                                        {alertMessage && (
                                            <div className="p-2.5 bg-red-50 border-2 border-red-950 text-red-750 text-[10px] font-bold animate-pulse">
                                                {alertMessage}
                                            </div>
                                        )}
                                        {stockItems.map(item => (
                                            <div key={item.id} className="text-xs space-y-1">
                                                <div className="flex justify-between font-bold text-slate-700">
                                                    <span>{item.name}</span>
                                                    <span className={item.stock <= 5 ? 'text-red-650 font-mono' : 'text-slate-550 font-mono'}>{item.stock} / {item.max} Box</span>
                                                </div>
                                                <div className="h-3.5 bg-[#FAF6EE] border-2 border-slate-900 rounded-none overflow-hidden">
                                                    <div
                                                        className={`h-full transition-all duration-300 ${item.stock <= 5 ? 'bg-red-500' : 'bg-blue-600'}`}
                                                        style={{ width: `${(item.stock / item.max) * 100}%` }}
                                                    ></div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                </div>

                                {/* Right Cart/Checkout display */}
                                <div className="md:col-span-5 bg-[#FAF6EE] border-2 border-slate-900 rounded-none p-4 space-y-3">
                                    <span className="font-bold text-xs text-slate-800 block border-b-2 border-slate-900 pb-1.5">Nota Transaksi POS</span>

                                    {cart.length === 0 ? (
                                        <div className="py-8 text-center text-slate-400 text-xs font-light">Keranjang POS kosong.</div>
                                    ) : (
                                        <div className="space-y-2 max-h-36 overflow-y-auto pr-1">
                                            {cart.map(item => (
                                                <div key={item.id} className="flex justify-between items-center text-xs text-slate-800 font-bold">
                                                    <span>{item.name} (x{item.qty})</span>
                                                    <span className="font-mono">Rp {(item.price * item.qty).toLocaleString('id-ID')}</span>
                                                </div>
                                            ))}
                                        </div>
                                    )}

                                    {cart.length > 0 && (
                                        <div className="border-t-2 border-slate-900 pt-2 space-y-2">
                                            <div className="flex justify-between text-xs font-extrabold text-slate-900">
                                                <span>Total</span>
                                                <span className="font-mono">Rp {cart.reduce((acc, curr) => acc + (curr.price * curr.qty), 0).toLocaleString('id-ID')}</span>
                                            </div>
                                            <button
                                                onClick={handlePOSCheckout}
                                                disabled={isPrinting}
                                                className="w-full py-2 bg-blue-600 border-2 border-slate-900 text-white font-bold text-xs shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-colors cursor-pointer"
                                            >
                                                {isPrinting ? 'Menyimpan...' : 'Bayar & Update Stok'}
                                            </button>
                                        </div>
                                    )}

                                    {posReceipt && !isPrinting && (
                                        <div className="bg-white border-2 border-slate-900 p-3 text-[10px] font-mono space-y-1.5 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]">
                                            <p className="font-bold text-center text-blue-650">STRUK INXDVI KASIR</p>
                                            <p className="text-[8px] text-slate-400 text-center">ID: #{posReceipt.id} | {posReceipt.time}</p>
                                            <div className="border-t border-dashed border-slate-200 pt-1.5">
                                                {posReceipt.items.map(item => (
                                                    <div key={item.id} className="flex justify-between">
                                                        <span>{item.name} x{item.qty}</span>
                                                        <span>Rp {(item.price * item.qty).toLocaleString()}</span>
                                                    </div>
                                                ))}
                                            </div>
                                            <div className="border-t border-dashed border-slate-200 pt-1.5 flex justify-between font-bold text-slate-900 text-[11px]">
                                                <span>TOTAL BAYAR</span>
                                                <span>Rp {posReceipt.total.toLocaleString()}</span>
                                            </div>
                                        </div>
                                    )}
                                </div>
                            </div>
                        )}

                        {/* PLAYGROUND 3: CUSTOM SOFTWARE BLUEPRINT BUILDER */}
                        {activeFeatureTab === 'custom-software' && (
                            <div className="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
                                <div className="md:col-span-6 space-y-4">
                                    <h4 className="text-slate-800 font-bold text-sm uppercase tracking-wide border-b-2 border-slate-950 pb-2">
                                        Blueprint Builder Software Kustom
                                    </h4>
                                    <p className="text-slate-650 text-xs font-medium leading-relaxed">
                                        Pilih modul-modul fungsional yang dibutuhkan bisnis Anda di bawah ini, dan lihat bagaimana tim INXDVI menyusun rancangan arsitektur software modular enterprise Anda.
                                    </p>

                                    <div className="space-y-2">
                                        {customModulesList.map(mod => {
                                            const isSelected = selectedModules.includes(mod.id);
                                            return (
                                                <button
                                                    key={mod.id}
                                                    onClick={() => toggleModule(mod.id)}
                                                    className={`w-full p-3 border-2 rounded-none text-left flex justify-between items-center transition-all cursor-pointer ${isSelected
                                                            ? 'bg-blue-50 border-slate-900 text-blue-750 font-bold shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]'
                                                            : 'bg-white border-slate-900 text-slate-700 hover:bg-slate-50'
                                                        }`}
                                                >
                                                    <div className="space-y-0.5">
                                                        <p className="text-xs">{mod.name}</p>
                                                        <p className="text-[9px] text-slate-400 font-mono uppercase tracking-wider">{mod.category} | Complexity: {mod.complexity}</p>
                                                    </div>
                                                    <span className={`w-4 h-4 border-2 border-slate-900 flex items-center justify-center text-[10px] ${isSelected ? 'bg-blue-600 text-white' : 'bg-white'
                                                        }`}>
                                                        {isSelected ? '✓' : ''}
                                                    </span>
                                                </button>
                                            );
                                        })}
                                    </div>
                                </div>

                                <div className="md:col-span-6 bg-[#FAF6EE] border-2 border-slate-900 rounded-none p-5 space-y-4">
                                    <span className="font-bold text-xs text-slate-800 block border-b-2 border-slate-900 pb-1.5">Blueprint Arsitektur Software</span>

                                    {selectedModules.length === 0 ? (
                                        <div className="py-12 text-center text-slate-455 text-xs font-light">Pilih minimal satu modul untuk melihat blueprint.</div>
                                    ) : (
                                        <div className="space-y-3.5">
                                            <div className="flex flex-col gap-2.5">
                                                {selectedModules.map(modId => {
                                                    const m = customModulesList.find(x => x.id === modId);
                                                    return (
                                                        <div key={modId} className="bg-white border-2 border-slate-900 rounded-none p-3 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] border-l-4 border-l-blue-600 flex justify-between items-center">
                                                            <div>
                                                                <span className="text-[8px] font-bold font-mono text-blue-600 bg-blue-50 border border-blue-200 px-1.5 py-0.5 rounded-none uppercase">{m.category} Module</span>
                                                                <p className="text-xs font-bold text-slate-900 mt-1">{m.name}</p>
                                                            </div>
                                                            <div className="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping border border-slate-900"></div>
                                                        </div>
                                                    );
                                                })}
                                            </div>

                                            {/* Central API server block */}
                                            <div className="p-3.5 bg-blue-600 text-white border-2 border-slate-900 rounded-none text-center space-y-1 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                                <p className="text-[10px] font-mono font-bold uppercase tracking-wider">Laravel Central API Gateway</p>
                                                <p className="text-[8px] text-blue-200 font-light">AWS Cloud VPS | PostgreSQL DB Cluster | TLS 1.3 encryption</p>
                                            </div>

                                            <div className="bg-emerald-50 border-2 border-slate-900 p-2.5 text-[9px] text-emerald-800 font-bold text-center shadow-[1px_1px_0px_0px_rgba(15,23,42,1)]">
                                                ✓ Blueprint modul modular terhubung ke API terpusat!
                                            </div>
                                        </div>
                                    )}
                                </div>
                            </div>
                        )}

                    </div>

                </div>
            </section>

            {/* 4. SECTION: COMPARISON */}
            <section className="py-24 px-6 bg-[#FAF6EE] border-b-2 border-slate-900">
                <div className="max-w-7xl mx-auto">
                    <h3 className="text-2xl md:text-3xl font-display font-extrabold text-slate-800 text-center mb-12">
                        Manual VS Sistem Integrasi INXDVI
                    </h3>

                    <div className="overflow-x-auto border-2 border-slate-900 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] max-w-4xl mx-auto bg-white">
                        <table className="w-full border-collapse text-left text-xs md:text-sm">
                            <thead>
                                <tr className="border-b-2 border-slate-900 bg-slate-50/50">
                                    <th className="p-5 font-bold text-slate-900">Fitur & Parameter</th>
                                    <th className="p-5 font-bold text-red-500">Operasional Manual Lama</th>
                                    <th className="p-5 font-bold text-blue-600">Sistem Terintegrasi INXDVI</th>
                                </tr>
                            </thead>
                            <tbody className="divide-y-2 divide-slate-900 text-slate-700">
                                <tr>
                                    <td className="p-5 font-bold text-slate-900">Kecepatan Melayani Pembeli</td>
                                    <td className="p-5 text-slate-400">Lambat, catat nota tulis tangan (1-2 menit)</td>
                                    <td className="p-5 text-blue-600 font-bold flex items-center gap-1.5">
                                        <Check size={14} className="text-emerald-500" />
                                        Instan sekali klik barcode (3 detik)
                                    </td>
                                </tr>
                                <tr>
                                    <td className="p-5 font-bold text-slate-900">Respon Chat & Leads</td>
                                    <td className="p-5 text-slate-400">Balasan manual lambat, leads terabaikan & kabur</td>
                                    <td className="p-5 text-blue-600 font-bold flex items-center gap-1.5">
                                        <Check size={14} className="text-emerald-500" />
                                        Asisten AI WhatsApp merespon instan 24 jam
                                    </td>
                                </tr>
                                <tr>
                                    <td className="p-5 font-bold text-slate-900">Pengembangan Fitur Software</td>
                                    <td className="p-5 text-slate-400">Sistem kaku, tidak bisa ditambah fitur kustom</td>
                                    <td className="p-5 text-blue-600 font-bold flex items-center gap-1.5">
                                        <Check size={14} className="text-emerald-500" />
                                        Arsitektur modular kustom sesuai kebutuhan
                                    </td>
                                </tr>
                                <tr>
                                    <td className="p-5 font-bold text-slate-900">Laporan Keuangan Toko</td>
                                    <td className="p-5 text-slate-400">Begadang rekap nota kertas tiap malam</td>
                                    <td className="p-5 text-blue-600 font-bold flex items-center gap-1.5">
                                        <Check size={14} className="text-emerald-500" />
                                        Otomatis terbuat & siap diekspor sekali klik
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            {/* 5. TESTIMONIALS */}
            {testimonials && testimonials.length > 0 && (
                <section id="testimoni" className="py-24 px-6 bg-[#FDFBF7]">
                    <div className="max-w-7xl mx-auto">

                        <div className="text-center max-w-3xl mx-auto space-y-4 mb-16 relative">
                            {/* Wiggling sticker badge */}
                            <div className="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-white text-slate-900 text-[9px] font-mono font-bold uppercase border-2 border-slate-900 px-3 py-1 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] rotate-6 animate-wiggle-badge">
                                💬 Client Approved
                            </div>
                            <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block pt-4">
                                KATA KLIEN KAMI
                            </span>
                            <h2 className="text-3xl md:text-4xl font-display font-extrabold text-slate-900 leading-tight">
                                Kisah Sukses Bersama INXDVI
                            </h2>
                            <p className="text-slate-700 text-sm font-bold">
                                Dengarkan langsung testimoni dari pemilik bisnis yang sukses melakukan digitalisasi operasional proyek software mereka.
                            </p>
                        </div>

                        <div className="max-w-3xl mx-auto bg-white border-2 border-slate-900 p-8 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] relative">
                            <div className="flex flex-col md:flex-row justify-between gap-4 border-b-2 border-slate-900 pb-5 mb-5 md:items-center">
                                <div className="flex items-center gap-3.5">
                                    <img
                                        src={testimonials[testiIndex].photo_url || "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150"}
                                        className="w-12 h-12 rounded-none object-cover border-2 border-slate-900"
                                        alt=""
                                    />
                                    <div>
                                        <h4 className="font-extrabold text-slate-900 text-sm md:text-base">
                                            {testimonials[testiIndex].client_name}
                                        </h4>
                                        <p className="text-slate-400 text-xs font-light">
                                            {testimonials[testiIndex].position} {testimonials[testiIndex].company}
                                        </p>
                                    </div>
                                </div>
                                <div className="text-amber-500 text-xs md:text-sm bg-white border-2 border-slate-900 px-3 py-1 self-start md:self-auto font-bold font-mono shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]">
                                    {'⭐'.repeat(testimonials[testiIndex].rating)}
                                </div>
                            </div>

                            <p className="text-slate-700 text-xs md:text-sm leading-relaxed italic font-bold">
                                "{testimonials[testiIndex].quote}"
                            </p>

                            <div className="flex justify-between items-center mt-6">
                                <span className="text-[10px] font-mono text-blue-600 uppercase tracking-widest font-bold">
                                    INDUSTRI {testimonials[testiIndex].industry || 'KORPORASI'}
                                </span>

                                <div className="flex gap-2">
                                    <button
                                        onClick={prevTesti}
                                        className="w-8 h-8 border-2 border-slate-900 hover:bg-slate-50 flex items-center justify-center text-slate-800 text-xs font-bold shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-colors cursor-pointer"
                                    >
                                        ←
                                    </button>
                                    <button
                                        onClick={nextTesti}
                                        className="w-8 h-8 border-2 border-slate-900 hover:bg-slate-50 flex items-center justify-center text-slate-800 text-xs font-bold shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-colors cursor-pointer"
                                    >
                                        →
                                    </button>
                                </div>
                            </div>
                        </div>

                        {/* Stats strip */}
                        {siteStats && Object.keys(siteStats).length > 0 && (
                            <div className="grid grid-cols-2 md:grid-cols-4 gap-6 border-t-2 border-slate-900 pt-16 mt-20 text-center max-w-4xl mx-auto">
                                {Object.keys(siteStats).map(key => (
                                    <div key={key} className="space-y-1">
                                        <p className="text-2xl md:text-3xl font-extrabold text-blue-600 font-mono">
                                            {siteStats[key].value}
                                        </p>
                                        <p className="text-[10px] text-slate-500 font-bold uppercase tracking-wider font-mono">
                                            {siteStats[key].label}
                                        </p>
                                    </div>
                                ))}
                            </div>
                        )}
                    </div>
                </section>
            )}

            {/* 7. PRICING */}
            {packages && packages.length > 0 && (
                <section id="penawaran" className="py-24 px-6 border-t-2 border-slate-900">
                    <div className="max-w-7xl mx-auto">
                        <div className="text-center max-w-3xl mx-auto space-y-4 mb-12">
                            <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block">
                                INVESTASI NILAI PROYEK
                            </span>
                            <h2 className="text-3xl md:text-4xl font-display font-extrabold text-slate-900 leading-tight">
                                Opsi Pilihan Investasi Anda
                            </h2>
                            <p className="text-slate-700 text-sm font-bold">
                                Semua paket pengerjaan sudah termasuk setup awal gratis, pelatihan, dan layanan revisi support terjamin.
                            </p>

                            <div className="flex items-center justify-center gap-3 pt-6">
                                <span className={`text-xs font-bold ${billingPeriod === 'monthly' ? 'text-slate-900' : 'text-slate-400'}`}>Bulanan</span>
                                <button
                                    onClick={() => setBillingPeriod(prev => prev === 'monthly' ? 'yearly' : 'monthly')}
                                    className="w-12 h-6.5 rounded-full bg-slate-200 p-0.5 flex items-center transition-all duration-300 focus:outline-none cursor-pointer"
                                >
                                    <div className={`w-5.5 h-5.5 rounded-full bg-blue-600 transition-transform duration-300 ${billingPeriod === 'yearly' ? 'translate-x-5.5' : ''
                                        }`}></div>
                                </button>
                                <span className={`text-xs font-bold flex items-center gap-1.5 ${billingPeriod === 'yearly' ? 'text-slate-900' : 'text-slate-400'}`}>
                                    Tahunan
                                    <span className="px-2 py-0.5 bg-white border border-slate-900 text-blue-600 rounded-full text-[9px] font-mono font-bold animate-pulse shadow-[1px_1px_0px_0px_rgba(15,23,42,1)]">Hemat 20%</span>
                                </span>
                            </div>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 items-start max-w-6xl mx-auto">
                            {packages.map(pkg => (
                                <div
                                    key={pkg.id}
                                    className={`p-8 rounded-none flex flex-col justify-between min-h-[500px] transition-all duration-300 relative ${pkg.is_popular
                                            ? 'bg-white border-2 border-slate-950 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] scale-[1.03]'
                                            : 'bg-white border-2 border-slate-900 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]'
                                        }`}
                                >
                                    {pkg.is_popular && (
                                        <span className="absolute top-0 right-8 transform -translate-y-1/2 px-3 py-1 bg-blue-600 border-2 border-slate-900 text-white text-[9px] font-bold uppercase rounded-none tracking-wider font-mono">
                                            PALING POPULER ⭐
                                        </span>
                                    )}

                                    <div className="space-y-6">
                                        <div>
                                            <span className="text-[10px] font-mono text-blue-600 block uppercase tracking-wider font-bold">
                                                PAKET {pkg.name}
                                            </span>
                                            <h3 className="text-xl font-display font-extrabold text-slate-800 mt-1">{pkg.name}</h3>
                                            <p className="text-xs text-slate-500 mt-1 font-medium leading-relaxed">{pkg.tagline}</p>
                                        </div>

                                        <div className="py-2 border-b-2 border-slate-900 pb-4">
                                            {pkg.is_custom ? (
                                                <div>
                                                    <p className="text-2xl font-bold text-slate-900">Hubungi Kami</p>
                                                    <p className="text-xs text-slate-450 mt-1">Estimasi biaya custom software modular</p>
                                                </div>
                                            ) : (
                                                <div className="space-y-1">
                                                    <div className="flex items-baseline gap-1">
                                                        <span className="text-xs text-slate-500 font-semibold">Rp</span>
                                                        <span className="text-3xl font-extrabold text-slate-800 font-mono">
                                                            {billingPeriod === 'monthly'
                                                                ? pkg.price_monthly.toLocaleString('id-ID')
                                                                : Math.round(pkg.price_yearly / 12).toLocaleString('id-ID')
                                                            }
                                                        </span>
                                                        <span className="text-xs text-slate-455">/bln</span>
                                                    </div>
                                                    {billingPeriod === 'yearly' && (
                                                        <p className="text-[10px] text-emerald-650 font-mono font-bold">
                                                            Ditagih tahunan (Total Rp {pkg.price_yearly.toLocaleString('id-ID')})
                                                        </p>
                                                    )}
                                                </div>
                                            )}
                                        </div>

                                        <ul className="space-y-3.5 text-xs text-slate-650">
                                            {pkg.features.map(feat => (
                                                <li key={feat.id} className="flex items-center gap-3 font-medium">
                                                    {feat.is_included ? (
                                                        <span className="w-4 h-4 border border-slate-900 bg-emerald-50 flex items-center justify-center text-emerald-600 flex-shrink-0">
                                                            <Check size={10} />
                                                        </span>
                                                    ) : (
                                                        <span className="w-4 h-4 border border-slate-900 bg-slate-50 flex items-center justify-center text-slate-300 flex-shrink-0">
                                                            <X size={10} />
                                                        </span>
                                                    )}
                                                    <span className={feat.is_included ? 'text-slate-800' : 'text-slate-350 line-through font-light'}>
                                                        {feat.feature}
                                                    </span>
                                                </li>
                                            ))}
                                        </ul>
                                    </div>

                                    <div className="pt-8">
                                        <a
                                            href={`https://wa.me/${whatsappNumber}?text=Halo%20INXDVI%2C%20saya%2520tertarik%2520dengan%2520paket%2520${encodeURIComponent(pkg.name)}`}
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            onClick={() => trackPixelEvent('Lead', {
                                                content_name: pkg.name,
                                                value: pkg.is_custom ? 0 : (billingPeriod === 'yearly' ? pkg.price_yearly : pkg.price_monthly),
                                                currency: 'IDR'
                                            })}
                                            className={`block w-full py-3.5 text-center text-xs font-bold border-2 border-slate-900 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] transition-all ${pkg.is_popular
                                                    ? 'bg-blue-600 text-white'
                                                    : 'bg-white text-slate-800 hover:bg-slate-50'
                                                }`}
                                        >
                                            {pkg.is_custom ? 'Minta Penawaran Proyek' : 'Pilih Paket Proyek'}
                                        </a>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>
            )}

            {/* 8. FAQ ACCORDION */}
            {faqs && faqs.length > 0 && (
                <section className="py-24 px-6 bg-[#FAF6EE] border-t-2 border-b-2 border-slate-900">
                    <div className="max-w-3xl mx-auto">
                        <div className="text-center space-y-4 mb-16">
                            <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block">
                                FAQ KONSULTASI
                            </span>
                            <h3 className="text-2xl md:text-3xl font-display font-extrabold text-slate-800">
                                FAQ & Kerjasama
                            </h3>
                        </div>

                        <div className="space-y-3.5">
                            {faqs.map((faq, i) => (
                                <div key={faq.id} className="bg-white border-2 border-slate-900 rounded-none overflow-hidden shadow-[3px_3px_0px_0px_rgba(15,23,42,1)]">
                                    <button
                                        onClick={() => setActiveFaq(activeFaq === i ? null : i)}
                                        className="w-full p-5 text-left flex justify-between items-center text-slate-800 font-bold text-xs md:text-sm focus:outline-none"
                                    >
                                        <span>{faq.question}</span>
                                        <ChevronDown size={14} className={`text-blue-600 transition-transform duration-300 ${activeFaq === i ? 'rotate-180' : ''}`} />
                                    </button>
                                    <div className={`transition-all duration-300 ease-in-out ${activeFaq === i ? 'max-h-60 opacity-100 border-t-2 border-slate-900' : 'max-h-0 opacity-0 pointer-events-none'
                                        }`}>
                                        <p className="p-5 text-xs md:text-sm text-slate-650 font-medium leading-relaxed bg-[#FAF6EE]">
                                            {faq.answer}
                                        </p>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>
            )}

            <Footer settings={settings} />
        </div>
    );
}
