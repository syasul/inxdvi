export function trackPixelEvent(eventName, data = {}) {
    // Log event ke console browser saat development local agar mudah didebug
    if (import.meta.env.DEV) {
        console.log(`%c[Meta Pixel] Event: ${eventName}`, 'color: #1877f2; font-weight: bold;', data);
    }

    if (typeof window !== 'undefined' && window.fbq) {
        window.fbq('track', eventName, data);
    }
}

