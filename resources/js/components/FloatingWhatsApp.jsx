import React from 'react';
import { trackPixelEvent } from '../utils/pixel';

export default function FloatingWhatsApp({ settings }) {
    const whatsappNumber = settings?.whatsapp_number || '6281330012100';
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=Halo%20INXDVI%2C%20saya%20tertarik%20dengan%20solusi%20digital%20Anda.`;

    return (
        <aside aria-label="WhatsApp Floating Action Button">
            <a
                href={whatsappUrl}
                target="_blank"
                rel="noopener noreferrer"
                onClick={() => trackPixelEvent('Contact', { position: 'floating_wa' })}
                aria-label="Chat WhatsApp"
                className="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-[#25D366] hover:bg-[#20ba59] text-white p-3.5 md:px-5 md:py-3.5 border-2 border-slate-900 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] transition-all group cursor-pointer"
            >
                {/* Ping Online Status Indicator */}
                <span className="absolute -top-1.5 -right-1.5 flex h-4 w-4">
                    <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span className="relative inline-flex rounded-full h-4 w-4 bg-emerald-400 border-2 border-slate-900"></span>
                </span>

                {/* WhatsApp SVG Icon */}
                <svg
                    className="w-6 h-6 fill-current text-white shrink-0 group-hover:scale-110 transition-transform"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M12.031 2C6.495 2 2 6.495 2 12.031c0 1.77.464 3.498 1.346 5.031L2 22l5.093-1.336A9.998 9.998 0 0 0 12.031 22c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.277a8.23 8.23 0 0 1-4.202-1.155l-.301-.179-3.123.82.833-3.044-.196-.312a8.236 8.236 0 0 1-1.26-4.376c0-4.561 3.711-8.272 8.272-8.272 4.561 0 8.272 3.711 8.272 8.272 0 4.561-3.711 8.272-8.272 8.272zm4.538-6.19c-.248-.124-1.47-.726-1.698-.809-.228-.083-.394-.124-.56.124-.166.248-.642.809-.787.975-.145.166-.29.187-.538.062a6.83 6.83 0 0 1-2.001-1.233 7.534 7.534 0 0 1-1.385-1.724c-.145-.248-.016-.382.108-.506.112-.112.248-.29.372-.435.124-.145.166-.248.248-.415.083-.166.041-.311-.021-.435-.062-.124-.56-1.35-.767-1.85-.202-.487-.407-.421-.56-.429-.145-.007-.311-.009-.477-.009s-.435.062-.663.311c-.228.248-.871.851-.871 2.075s.892 2.406 1.016 2.572c.124.166 1.756 2.682 4.254 3.762.594.257 1.059.41 1.421.526.598.19 1.142.163 1.572.099.479-.072 1.47-.601 1.678-1.182.208-.581.208-1.079.145-1.182-.062-.104-.228-.166-.477-.29z"/>
                </svg>

                {/* Text Label */}
                <div className="hidden md:flex flex-col text-left">
                    <span className="text-[10px] text-white/90 uppercase tracking-widest font-mono font-bold leading-none">
                        Online 24/7
                    </span>
                    <span className="text-xs font-black text-white leading-tight">
                        Chat WhatsApp
                    </span>
                </div>
            </a>
        </aside>
    );
}
