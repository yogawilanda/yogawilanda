import React from 'react';
import { createRoot } from 'react-dom/client';
import ReactWidget from './components/ReactWidget';

// React Mount
const mountReact = () => {
    const el = document.getElementById('react-root');
    if (el) {
        createRoot(el).render(React.createElement(ReactWidget));
    }
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', mountReact);
} else {
    mountReact();
}
