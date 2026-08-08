import React from 'react';
import { Helmet } from 'react-helmet-async';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';
import { Calendar, User, ArrowLeft, ArrowRight, Share2 } from 'lucide-react';

export default function BlogShow({ article, recentArticles, settings }) {
    const formatDate = (dateString) => {
        try {
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
        } catch (e) {
            return dateString;
        }
    };

    const handleShare = () => {
        if (navigator.share) {
            navigator.share({
                title: article.title,
                url: window.location.href
            }).catch(console.error);
        } else {
            navigator.clipboard.writeText(window.location.href);
            alert('Tautan artikel berhasil disalin ke papan klip!');
        }
    };

    return (
        <div className="bg-[#FDFBF7] min-h-screen text-slate-900 font-sans">
            <Helmet>
                <title>{article.title} — {settings?.site_name || 'INXDVI'}</title>
                <meta name="description" content={article.excerpt || 'Baca selengkapnya mengenai artikel ini di INXDVI.'} />
                <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />
            </Helmet>
            <Navbar settings={settings} />

            {/* Navigation back helper & sharing */}
            <div className="max-w-4xl mx-auto px-6 pt-32 pb-4 flex justify-between items-center text-xs">
                <a 
                    href="/blog" 
                    className="flex items-center gap-1.5 text-slate-700 hover:text-blue-600 font-bold transition-colors cursor-pointer"
                >
                    <ArrowLeft size={14} />
                    <span>Kembali ke Blog</span>
                </a>
                <button 
                    onClick={handleShare}
                    className="flex items-center gap-1.5 px-3 py-1.5 bg-white border-2 border-slate-900 text-slate-900 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] font-bold transition-all cursor-pointer"
                >
                    <Share2 size={12} />
                    <span>Bagikan</span>
                </button>
            </div>

            {/* Main Article Container */}
            <main className="max-w-4xl mx-auto px-6 pb-20">
                <article className="bg-white border-2 border-slate-900 rounded-none p-6 md:p-10 shadow-[6px_6px_0px_0px_rgba(15,23,42,1)] space-y-8">
                    
                    {/* Header */}
                    <div className="space-y-4">
                        {article.category && (
                            <span className="px-3.5 py-1 bg-white border-2 border-slate-900 rounded-none text-[10px] font-bold text-blue-600 shadow-[2px_2px_0px_0px_rgba(15,23,42,1)] uppercase tracking-wider font-mono inline-block">
                                {article.category}
                            </span>
                        )}
                        <h1 className="text-2xl sm:text-3xl md:text-4xl font-display font-extrabold text-slate-900 leading-tight">
                            {article.title}
                        </h1>

                        {/* Article meta info */}
                        <div className="flex gap-4 text-xs font-mono font-bold text-slate-400 border-b-2 border-slate-900/10 pb-4">
                            <span className="flex items-center gap-1">
                                <Calendar size={14} />
                                {formatDate(article.created_at)}
                            </span>
                            <span className="flex items-center gap-1">
                                <User size={14} />
                                Oleh Admin
                            </span>
                        </div>
                    </div>

                    {/* Banner Image */}
                    <div className="border-2 border-slate-900 overflow-hidden h-64 sm:h-96 bg-slate-100">
                        <img 
                            src={article.image_url || "https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=900"} 
                            className="w-full h-full object-cover" 
                            alt={article.title}
                        />
                    </div>

                    {/* HTML Content Body */}
                    <div 
                        className="blog-content-body text-slate-800 text-sm md:text-base font-medium leading-relaxed space-y-6"
                        dangerouslySetInnerHTML={{ __html: article.content }}
                    />
                </article>

                {/* Recommendations Section */}
                {recentArticles && recentArticles.length > 0 && (
                    <section className="mt-20 space-y-8">
                        <div className="flex justify-between items-center border-b-2 border-slate-900 pb-4">
                            <h3 className="text-lg md:text-xl font-display font-extrabold text-slate-900">
                                Artikel Terkait Lainnya
                            </h3>
                            <a href="/blog" className="text-xs font-bold text-blue-600 hover:underline">
                                Lihat Semua
                            </a>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                            {recentArticles.map((recent) => (
                                <a 
                                    href={`/blog/${recent.slug}`} 
                                    key={recent.id}
                                    className="bg-white border-2 border-slate-900 rounded-none p-4 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:translate-x-[1px] hover:translate-y-[1px] hover:shadow-[3px_3px_0px_0px_rgba(15,23,42,1)] transition-all flex flex-col justify-between group"
                                >
                                    <div className="space-y-3">
                                        <div className="h-32 bg-slate-100 border-2 border-slate-900 overflow-hidden">
                                            <img 
                                                src={recent.image_url || "https://images.unsplash.com/photo-1542435503-956c469947f6?q=80&w=300"} 
                                                className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-103" 
                                                alt=""
                                            />
                                        </div>
                                        <p className="text-[10px] text-slate-400 font-mono font-bold">
                                            {formatDate(recent.created_at)}
                                        </p>
                                        <h4 className="font-extrabold text-slate-800 text-xs md:text-sm leading-snug line-clamp-2 group-hover:text-blue-600 transition-colors">
                                            {recent.title}
                                        </h4>
                                    </div>
                                    <div className="text-[11px] font-bold text-blue-600 flex items-center gap-1 mt-4">
                                        <span>Baca Artikel</span>
                                        <ArrowRight size={10} className="transform transition-transform group-hover:translate-x-0.5" />
                                    </div>
                                </a>
                            ))}
                        </div>
                    </section>
                )}
            </main>

            <Footer settings={settings} />
        </div>
    );
}
