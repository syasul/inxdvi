import React from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { ExternalLink, Shield, Lock, Eye } from 'lucide-react';

export default function Demo({ appDemos, settings }) {
    return (
        <div className="bg-[#FDFBF7] min-h-screen text-slate-900 font-sans">
            <Navbar settings={settings} />

            {/* Header Area */}
            <div className="relative pt-32 pb-16 px-6 text-center overflow-hidden border-b-2 border-slate-900 bg-white">
                <div className="max-w-3xl mx-auto space-y-4 relative z-10">
                    <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block">
                        /// LIVE APP SHOWCASE
                    </span>
                    <h1 className="text-3xl md:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                        Demo Aplikasi Live
                    </h1>
                    <p className="text-slate-700 text-sm md:text-base font-bold leading-relaxed max-w-xl mx-auto">
                        Coba langsung sistem kasir, admin dashboard, dan website e-commerce hasil rancangan tim INXDVI secara gratis.
                    </p>
                </div>
            </div>

            {/* Main Content Area */}
            <main className="py-20 px-6 max-w-6xl mx-auto">
                {appDemos && appDemos.length > 0 ? (
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {appDemos.map((demo) => (
                            <div 
                                key={demo.id} 
                                className="bg-white border-2 border-slate-900 rounded-none overflow-hidden shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all flex flex-col justify-between"
                            >
                                {/* Demo Image Mockup */}
                                <div className="h-48 bg-slate-105 border-b-2 border-slate-900 relative overflow-hidden group">
                                    <img 
                                        src={demo.image_path || "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600"} 
                                        className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                                        alt={demo.title}
                                    />
                                    <div className="absolute inset-0 bg-blue-900/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <span className="px-4 py-2 bg-white border-2 border-slate-900 rounded-none text-xs font-bold text-blue-600 shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform">
                                            <Eye size={12} /> Live Preview
                                        </span>
                                    </div>
                                </div>

                                {/* Demo Info */}
                                <div className="p-6 md:p-8 space-y-4 flex-1 flex flex-col justify-between">
                                    <div className="space-y-2">
                                        <h3 className="text-lg md:text-xl font-extrabold text-slate-900">
                                            {demo.title}
                                        </h3>
                                        <p className="text-slate-700 text-xs md:text-sm leading-relaxed font-medium">
                                            {demo.description}
                                        </p>
                                    </div>

                                    {/* Credentials Box */}
                                    <div className="bg-[#FAF6EE] border-2 border-slate-900 rounded-none p-4 mt-4 space-y-2">
                                        <div className="flex items-center gap-1.5 text-slate-800 text-xs font-extrabold">
                                            <Shield size={12} className="text-blue-600" />
                                            <span>Informasi Login Akun Demo:</span>
                                        </div>
                                        <div className="grid grid-cols-2 gap-2 text-[11px] font-mono text-slate-650 font-bold">
                                            <div className="flex items-center gap-1">
                                                <Lock size={10} />
                                                <span>User: admin@demo.com</span>
                                            </div>
                                            <div className="flex items-center gap-1">
                                                <Lock size={10} />
                                                <span>Pass: password123</span>
                                            </div>
                                        </div>
                                    </div>

                                    {/* Action button */}
                                    <div className="pt-6">
                                        <a 
                                            href={demo.url} 
                                            target="_blank" 
                                            rel="noopener noreferrer"
                                            className="w-full py-3 bg-blue-600 border-2 border-slate-900 text-white rounded-none text-xs font-bold shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] transition-all flex items-center justify-center gap-2 cursor-pointer"
                                        >
                                            <span>Buka Aplikasi Demo</span>
                                            <ExternalLink size={12} />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                ) : (
                    <div className="text-center py-20 bg-white border-2 border-slate-900 rounded-none shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                        <p className="text-slate-500 text-sm font-bold">Belum ada demo aplikasi yang ditambahkan.</p>
                    </div>
                )}
            </main>

            <Footer settings={settings} />
        </div>
    );
}
