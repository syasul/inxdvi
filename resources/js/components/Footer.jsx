import React from 'react';
import { Mail, Phone, MapPin, Instagram, Globe } from 'lucide-react';

export default function Footer({ settings }) {
    const whatsappNumber = settings?.whatsapp_number || '6281330012100';
    const email = settings?.email || 'support@inxdvi.com';

    return (
        <footer className="bg-[#FAF6EE] border-t-2 border-slate-900 py-16">
            <div className="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-10">
                
                {/* Branding Column */}
                <div className="md:col-span-4 space-y-4">
                    <img 
                        src="/images/logo_transparent1.png" 
                        className="h-12 w-auto object-contain" 
                        alt="INXDVI Logo"
                    />
                    <p className="text-slate-700 text-xs md:text-sm font-medium leading-relaxed">
                        Pionir solusi digital premium untuk automasi operasional usaha Anda. 
                        Kami bantu bisnis Anda berkembang lebih cepat dengan sistem terintegrasi yang andal.
                    </p>
                    <div className="flex gap-3 pt-2">
                        <a href="#" className="w-8 h-8 bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-all">
                            <Instagram size={14} />
                        </a>
                        <a href="#" className="w-8 h-8 bg-white border-2 border-slate-900 flex items-center justify-center text-slate-900 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[1px_1px_0px_0px_rgba(15,23,42,1)] transition-all">
                            <Globe size={14} />
                        </a>
                    </div>
                </div>

                {/* Navigation Links Column */}
                <div className="md:col-span-3 md:col-start-6 space-y-4">
                    <h4 className="text-slate-900 font-extrabold text-xs font-mono uppercase tracking-wider">
                        Sitemap
                    </h4>
                    <ul className="space-y-2 text-xs md:text-sm text-slate-700 font-medium">
                        <li>
                            <a href="/#masalah" className="hover:text-blue-600 transition-colors">
                                Masalah Operasional
                            </a>
                        </li>
                        <li>
                            <a href="/#solusi" className="hover:text-blue-600 transition-colors">
                                Solusi Automasi
                            </a>
                        </li>
                        <li>
                            <a href="/#penawaran" className="hover:text-blue-600 transition-colors">
                                Paket & Harga
                            </a>
                        </li>
                        <li>
                            <a href="/demo" className="hover:text-blue-600 transition-colors">
                                Demo Langsung
                            </a>
                        </li>
                        <li>
                            <a href="/blog" className="hover:text-blue-600 transition-colors">
                                Blog & Artikel
                            </a>
                        </li>
                    </ul>
                </div>

                {/* Contact Column */}
                <div className="md:col-span-4 space-y-4">
                    <h4 className="text-slate-900 font-extrabold text-xs font-mono uppercase tracking-wider">
                        Hubungi Kami
                    </h4>
                    <ul className="space-y-3 text-xs md:text-sm text-slate-700 font-medium">
                        <li className="flex items-center gap-2">
                            <Phone className="text-blue-600 flex-shrink-0" size={14} />
                            <a href={`https://wa.me/${whatsappNumber}`} target="_blank" rel="noopener noreferrer" className="hover:underline hover:text-blue-600">
                                +{whatsappNumber}
                            </a>
                        </li>
                        <li className="flex items-center gap-2">
                            <Mail className="text-blue-600 flex-shrink-0" size={14} />
                            <a href={`mailto:${email}`} className="hover:underline hover:text-blue-600">
                                {email}
                            </a>
                        </li>
                        <li className="flex items-start gap-2">
                            <MapPin className="text-blue-600 flex-shrink-0 mt-0.5" size={14} />
                            <span>Surabaya, Jawa Timur, Indonesia</span>
                        </li>
                    </ul>
                </div>

            </div>

            {/* Bottom Bar */}
            <div className="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t-2 border-slate-900/10 text-center text-xs text-slate-500 font-medium">
                &copy; {new Date().getFullYear()} INXDVI.COM. All rights reserved. 
                <span className="block sm:inline sm:ml-2">Dibuat dengan dedikasi untuk akselerasi bisnis lokal.</span>
            </div>
        </footer>
    );
}
