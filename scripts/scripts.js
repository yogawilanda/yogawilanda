// scripts/scripts.js
import { ComponentLoader } from './component-loader.js';

console.log('Well, someone\'s tryna peeking~');
console.log('Welcome to Yoga Wilanda Console Log!');

const componentLoader = new ComponentLoader();
componentLoader.loadComponents();


document.getElementById('burger-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('translate-x-full');
});

// Close the mobile menu when clicking on any menu item
document.querySelectorAll('#mobile-menu a').forEach(item => {
    item.addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.add('translate-x-full');
    });
});

// Close the mobile menu when clicking the close button
document.getElementById('close-menu').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.add('translate-x-full');
});

// Close the mobile menu when clicking outside of it
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const burgerToggle = document.getElementById('burger-toggle');

    if (!mobileMenu.contains(event.target) && !burgerToggle.contains(event.target)) {
        mobileMenu.classList.add('translate-x-full');
    }
});
