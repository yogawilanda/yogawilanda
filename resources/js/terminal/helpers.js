// loc    : resources/js/terminal/helpers.js
// usage  : Kumpulan fungsi bantu utilitas murni, seperti escapeHTML untuk keamanan XSS.

export function escapeHTML(str) {
    return str.replace(/[&<>'"]/g,
        tag => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', "'": '&#39;', '"': '&quot;' }[tag] || tag)
    );
}
