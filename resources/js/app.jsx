import './bootstrap';
import React, { Suspense, lazy } from 'react';
import { createRoot } from 'react-dom/client';
import { HelmetProvider } from 'react-helmet-async';

const Home = lazy(() => import('./pages/Home'));
const Demo = lazy(() => import('./pages/Demo'));
const BlogIndex = lazy(() => import('./pages/BlogIndex'));
const BlogShow = lazy(() => import('./pages/BlogShow'));

const container = document.getElementById('root');

if (container) {
    const page = container.getAttribute('data-page');
    let props = {};
    try {
        props = JSON.parse(container.getAttribute('data-props') || '{}');
    } catch (e) {
        console.error('Failed to parse page props:', e);
    }

    const root = createRoot(container);

    root.render(
        <HelmetProvider>
            <Suspense fallback={
                <div className="min-h-screen flex items-center justify-center bg-[#FDFBF7]">
                    <div className="flex flex-col items-center gap-4">
                        <div className="animate-spin rounded-full h-12 w-12 border-4 border-slate-200 border-t-blue-600"></div>
                        <p className="text-xs font-mono font-bold text-slate-500 uppercase tracking-widest animate-pulse">Memuat Halaman...</p>
                    </div>
                </div>
            }>
                {page === 'home' && <Home {...props} />}
                {page === 'demo' && <Demo {...props} />}
                {page === 'blog-index' && <BlogIndex {...props} />}
                {page === 'blog-show' && <BlogShow {...props} />}
                {page !== 'home' && page !== 'demo' && page !== 'blog-index' && page !== 'blog-show' && (
                    <div className="p-8 text-center text-red-500">Unknown page component: {page}</div>
                )}
            </Suspense>
        </HelmetProvider>
    );
}
