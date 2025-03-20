// Animation au scroll
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.contact-info, .contact-form, .contact-map');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
});