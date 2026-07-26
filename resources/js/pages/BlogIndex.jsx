import React, { useState } from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { Calendar, User, ArrowRight, Search } from 'lucide-react';

export default function BlogIndex({ articles, settings }) {
    const [searchQuery, setSearchQuery] = useState('');

    const articleList = articles?.data || [];
    
    const filteredArticles = articleList.filter(article => 
        article.title.toLowerCase().includes(searchQuery.toLowerCase()) ||
        (article.excerpt && article.excerpt.toLowerCase().includes(searchQuery.toLowerCase()))
    );

    const formatDate = (dateString) => {
        try {
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
        } catch (e) {
            return dateString;
        }
    };

    return (
        <div className="bg-[#FDFBF7] min-h-screen text-slate-900 font-sans">
            <Navbar settings={settings} />

            {/* Header Area */}
            <div className="relative pt-32 pb-16 px-6 text-center overflow-hidden border-b-2 border-slate-900 bg-white">
                <div className="max-w-3xl mx-auto space-y-5 relative z-10">
                    <span className="text-xs font-mono uppercase tracking-widest text-blue-600 font-bold block">
                        /// BLOG & INSIGHTS
                    </span>
                    <h1 className="text-3xl md:text-5xl font-display font-extrabold text-slate-900 tracking-tight">
                        Wawasan & Edukasi Bisnis
                    </h1>
                    <p className="text-slate-700 text-sm md:text-base font-bold leading-relaxed max-w-xl mx-auto">
                        Pelajari strategi digital, automasi operasional, dan tips UMKM untuk melipatgandakan omzet penjualan Anda.
                    </p>

                    {/* Search bar */}
                    <div className="max-w-md mx-auto pt-4 relative">
                        <input 
                            type="text" 
                            value={searchQuery}
                            onChange={(e) => setSearchQuery(e.target.value)}
                            placeholder="Cari judul artikel..."
                            className="w-full pl-11 pr-4 py-3 bg-white border-2 border-slate-900 focus:outline-none rounded-none text-xs text-slate-800 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                        />
                        <Search className="absolute left-4 top-7 text-slate-500" size={16} />
                    </div>
                </div>
            </div>

            {/* Main Articles Area */}
            <main className="py-20 px-6 max-w-6xl mx-auto space-y-16">
                
                {filteredArticles.length > 0 ? (
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {filteredArticles.map((article) => (
                            <article 
                                key={article.id} 
                                className="bg-white border-2 border-slate-900 rounded-none overflow-hidden shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[5px_5px_0px_0px_rgba(15,23,42,1)] transition-all flex flex-col justify-between"
                            >
                                {/* Cover Image */}
                                <div className="h-48 bg-slate-100 border-b-2 border-slate-900 overflow-hidden relative">
                                    <img 
                                        src={article.image_url || "https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=600"} 
                                        className="w-full h-full object-cover transition-transform duration-500 hover:scale-103" 
                                        alt={article.title}
                                    />
                                    {article.category && (
                                        <span className="absolute top-4 left-4 px-3 py-1 bg-white border-2 border-slate-900 text-[10px] font-bold text-blue-600 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] uppercase tracking-wider font-mono">
                                            {article.category}
                                        </span>
                                    )}
                                </div>

                                {/* Article Info */}
                                <div className="p-6 flex-1 flex flex-col justify-between space-y-4">
                                    <div className="space-y-2">
                                        <div className="flex gap-4 text-[10px] font-mono font-bold text-slate-400">
                                            <span className="flex items-center gap-1">
                                                <Calendar size={12} />
                                                {formatDate(article.created_at)}
                                            </span>
                                            <span className="flex items-center gap-1">
                                                <User size={12} />
                                                Admin
                                            </span>
                                        </div>

                                        <h3 className="text-slate-900 font-extrabold text-sm md:text-base leading-snug line-clamp-2 hover:text-blue-600 transition-colors">
                                            <a href={`/blog/${article.slug}`}>{article.title}</a>
                                        </h3>
                                        <p className="text-slate-650 text-xs font-medium leading-relaxed line-clamp-3">
                                            {article.excerpt || 'Temukan ulasan mendalam mengenai strategi operasional digital, tips akselerasi bisnis lokal, dan wawasan industri.'}
                                        </p>
                                    </div>

                                    {/* Action button */}
                                    <div className="pt-4 border-t-2 border-slate-900/10">
                                        <a 
                                            href={`/blog/${article.slug}`} 
                                            className="text-blue-600 hover:text-blue-755 text-xs font-extrabold flex items-center gap-1.5 transition-colors group cursor-pointer"
                                        >
                                            <span>Baca Selengkapnya</span>
                                            <ArrowRight size={12} className="transform transition-transform group-hover:translate-x-1" />
                                        </a>
                                    </div>
                                </div>
                            </article>
                        ))}
                    </div>
                ) : (
                    <div className="text-center py-20 bg-white border-2 border-slate-900 rounded-none shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                        <p className="text-slate-500 text-sm font-bold">Tidak ada artikel yang cocok dengan pencarian Anda.</p>
                    </div>
                )}

                {/* Pagination Controls */}
                {articles && articles.last_page > 1 && (
                    <div className="flex justify-center items-center gap-3 pt-10 border-t-2 border-slate-900/10">
                        {articles.prev_page_url ? (
                            <a 
                                href={articles.prev_page_url} 
                                className="px-4 py-2 bg-white border-2 border-slate-900 hover:bg-slate-50 text-xs font-bold text-slate-800 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                            >
                                Sebelumnya
                            </a>
                        ) : (
                            <span className="px-4 py-2 border-2 border-slate-300 text-slate-300 rounded-none text-xs font-bold select-none cursor-not-allowed">
                                Sebelumnya
                            </span>
                        )}

                        <span className="text-xs text-slate-500 font-mono font-bold">
                            Halaman {articles.current_page} dari {articles.last_page}
                        </span>

                        {articles.next_page_url ? (
                            <a 
                                href={articles.next_page_url} 
                                className="px-4 py-2 bg-white border-2 border-slate-900 hover:bg-slate-50 text-xs font-bold text-slate-800 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)]"
                            >
                                Selanjutnya
                            </a>
                        ) : (
                            <span className="px-4 py-2 border-2 border-slate-300 text-slate-300 rounded-none text-xs font-bold select-none cursor-not-allowed">
                                Selanjutnya
                            </span>
                        )}
                    </div>
                )}
            </main>

            <Footer settings={settings} />
        </div>
    );
}
