import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import Home from './pages/Home';
import Demo from './pages/Demo';
import BlogIndex from './pages/BlogIndex';
import BlogShow from './pages/BlogShow';

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

    if (page === 'home') {
        root.render(<Home {...props} />);
    } else if (page === 'demo') {
        root.render(<Demo {...props} />);
    } else if (page === 'blog-index') {
        root.render(<BlogIndex {...props} />);
    } else if (page === 'blog-show') {
        root.render(<BlogShow {...props} />);
    } else {
        console.warn(`Unknown page component: ${page}`);
    }
}
