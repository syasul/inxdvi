import React, { useState, useEffect } from 'react';
import { Menu, X, MessageSquare, PhoneCall } from 'lucide-react';
import { trackPixelEvent } from '../utils/pixel';

export default function Navbar({ settings }) {
    const [isOpen, setIsOpen] = useState(false);
    const [isScrolled, setIsScrolled] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            if (window.scrollY > 10) {
                setIsScrolled(true);
            } else {
                setIsScrolled(false);
            }
        };
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    const whatsappNumber = settings?.whatsapp_number || '6281330012100';
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=Halo%20INXDVI%2C%20saya%20tertarik%20dengan%20solusi%20digital%20Anda.`;

    return (
        <nav className={`fixed top-0 left-0 w-full z-50 transition-all duration-300 ${
            isScrolled 
                ? 'bg-[#FAF6EE] shadow-[0_4px_0px_0px_rgba(15,23,42,1)] border-b-2 border-slate-900 py-3' 
                : 'bg-transparent py-5'
        }`}>
            <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
                {/* Brand Logo */}
                <a href="/" className="flex items-center gap-3">
                    <img 
                        src="/images/logo_transparent1.png" 
                        className="h-10 w-auto object-contain" 
                        alt="INXDVI Logo"
                    />
                </a>

                {/* Navigation Links - Desktop (Retro Outlined Box) */}
                <div className="hidden md:flex items-center gap-1 bg-white border-2 border-slate-900 p-1 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)]">
                    <a href="/#masalah" className="px-5 py-2 text-xs font-bold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-all">
                        Masalah
                    </a>
                    <a href="/#solusi" className="px-5 py-2 text-xs font-bold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-all">
                        Solusi
                    </a>
                    <a href="/#penawaran" className="px-5 py-2 text-xs font-bold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-all">
                        Pricing
                    </a>
                    <a href="/demo" className="px-5 py-2 text-xs font-bold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-all">
                        Demo
                    </a>
                    <a href="/blog" className="px-5 py-2 text-xs font-bold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-all">
                        Blog
                    </a>
                </div>

                {/* Controls & CTA */}
                <div className="flex items-center gap-3">
                    {/* WhatsApp CTA (Neo-Brutalist Solid Blue) */}
                    <a 
                        href={whatsappUrl}
                        target="_blank" 
                        rel="noopener noreferrer"
                        onClick={() => trackPixelEvent('Contact', { position: 'navbar_desktop' })}
                        className="hidden md:flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white text-xs font-bold border-2 border-slate-900 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] transition-all"
                    >
                        <PhoneCall size={14} />
                        <span>Konsultasi Gratis</span>
                    </a>

                    {/* Mobile Menu Button */}
                    <button 
                        onClick={() => setIsOpen(!isOpen)}
                        className="md:hidden w-9 h-9 flex items-center justify-center text-slate-900 bg-white border-2 border-slate-900 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:bg-slate-50 transition-colors"
                    >
                        {isOpen ? <X size={18} /> : <Menu size={18} />}
                    </button>
                </div>
            </div>

            {/* Mobile Menu Dropdown */}
            {isOpen && (
                <div className="md:hidden absolute top-full left-0 w-full bg-[#FAF6EE] border-b-2 border-slate-900 shadow-[0_4px_0px_0px_rgba(15,23,42,1)] transition-all">
                    <div className="p-6 flex flex-col gap-2">
                        <a 
                            href="/#masalah" 
                            onClick={() => setIsOpen(false)}
                            className="block px-4 py-3 border-2 border-slate-900 bg-white text-slate-900 hover:bg-slate-50 font-bold transition-all text-sm shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        >
                            Masalah Anda
                        </a>
                        <a 
                            href="/#solusi" 
                            onClick={() => setIsOpen(false)}
                            className="block px-4 py-3 border-2 border-slate-900 bg-white text-slate-900 hover:bg-slate-50 font-bold transition-all text-sm shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        >
                            Solusi Kami
                        </a>
                        <a 
                            href="/#penawaran" 
                            onClick={() => setIsOpen(false)}
                            className="block px-4 py-3 border-2 border-slate-900 bg-white text-slate-900 hover:bg-slate-50 font-bold transition-all text-sm shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        >
                            Pricing
                        </a>
                        <a 
                            href="/demo" 
                            onClick={() => setIsOpen(false)}
                            className="block px-4 py-3 border-2 border-slate-900 bg-white text-slate-900 hover:bg-slate-50 font-bold transition-all text-sm shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        >
                            Demo Aplikasi
                        </a>
                        <a 
                            href="/blog" 
                            onClick={() => setIsOpen(false)}
                            className="block px-4 py-3 border-2 border-slate-900 bg-white text-slate-900 hover:bg-slate-50 font-bold transition-all text-sm shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        >
                            Blog & Update
                        </a>
                        <a 
                            href={whatsappUrl}
                            target="_blank" 
                            rel="noopener noreferrer"
                            onClick={() => trackPixelEvent('Contact', { position: 'navbar_mobile' })}
                            className="flex items-center justify-center gap-2 w-full py-3.5 mt-2 bg-blue-600 text-white font-bold border-2 border-slate-900 shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] text-sm"
                        >
                            <MessageSquare size={16} />
                            <span>Chat WhatsApp</span>
                        </a>
                    </div>
                </div>
            )}
        </nav>
    );
}
