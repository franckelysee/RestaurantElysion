document.addEventListener("DOMContentLoaded", () => {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible'); // Ajouter la classe visible
                    observer.unobserve(entry.target); // Arrêter d'observer l'élément après l'avoir affiché
                }
            });
        },
        {
            threshold: 0.5, // Déclencher l'animation lorsque 50% de l'élément est visible
        }
    );

    fadeElements.forEach((element) => {
        observer.observe(element); // Observer chaque élément
    });
});