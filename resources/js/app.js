import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

Alpine.plugin(collapse);

// Phone obfuscation - protects phone number from spam bots
Alpine.data('obfuscatedPhone', (parts) => ({
    parts: parts,
    get displayPhone() {
        return this.parts.join('');
    },
    get telLink() {
        return this.parts.join('').replace(/[\s\-]/g, '');
    },
    call() {
        window.location.href = 'tel:' + this.telLink;
    }
}));

// Email obfuscation - protects email from spam bots
window.showEmail = function() {
    const user = "info";
    const domain = "gradiometr.com";
    window.location.href = "mailto:" + user + "@" + domain;
};

// Mobile menu toggle
Alpine.data('mobileMenu', () => ({
    open: false,
    toggle() {
        this.open = !this.open;
    }
}));

// Smooth scroll with offset for fixed header
document.addEventListener('alpine:init', () => {
    Alpine.magic('smoothScroll', () => {
        return (target) => {
            const element = document.querySelector(target);
            if (element) {
                const offset = 80;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        };
    });
});

window.Alpine = Alpine;
Alpine.start();
