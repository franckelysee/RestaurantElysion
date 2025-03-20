import Carousel from '../carousel.js'

document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('theme-toggle');
    const body = document.body;
    if(!toggleButton) return
    // Vérifie si le mode sombre est déjà activé (par exemple, via localStorage)
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark');
    }

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark');

        // Sauvegarde la préférence dans localStorage
        if (body.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
});

var carousels = document.querySelectorAll('[data-slider]');
carousels.forEach(carousel => new Carousel(carousel));