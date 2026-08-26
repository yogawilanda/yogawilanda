import React from 'react';
import { createRoot } from 'react-dom/client';
import ReactWidget from './components/ReactWidget';

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('react-root');
    if (el) {
        createRoot(el).render(React.createElement(ReactWidget));
    }
});
