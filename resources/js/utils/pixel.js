export function trackPixelEvent(eventName, data = {}) {
    if (typeof window !== 'undefined' && window.fbq) {
        window.fbq('track', eventName, data);
    }
}
