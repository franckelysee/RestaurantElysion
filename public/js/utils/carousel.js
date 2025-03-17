export default class Carousel {
    loop = false;
    autoScroll = null; // Initialisé à null pour plus de clarté

    constructor(el, both_mob_desk = false, is_loop = false, auto = true) {
        this.loop = is_loop;
        if (window.matchMedia('(min-width: 1024px)').matches || both_mob_desk) {
            this.nextButton = el.querySelector('[data-slider-next]');
            this.prevButton = el.querySelector('[data-slider-prev]');
            this.wrapper = el.querySelector('[data-slider-wrapper]');

            // Ajout d'un flag pour suivre l'état auto
            this.isAutoRunning = auto;

            this.nextButton.addEventListener('click', () => {
                this.stopAutoScroll();
                this.move(1);
            });

            this.prevButton.addEventListener('click', () => {
                this.stopAutoScroll();
                this.move(-1);
            });

            this.wrapper.addEventListener('scrollend', () => {
                this.updateCarousel();
            });

            this.updateCarousel();
            if (auto) {
                this.startAutoScroll();
            }

            // Gestion du survol
            this.wrapper.addEventListener('mouseenter', () => this.stopAutoScroll());
            this.wrapper.addEventListener('mouseleave', () => {
                if (this.isAutoRunning) this.startAutoScroll();
            });
        }
    }

    get itemToScroll() {
        return parseInt(window.getComputedStyle(this.wrapper)
            .getPropertyValue('--items'), 10);
    }

    get pages() {
        return Math.floor(this.wrapper.children.length / this.itemToScroll) || 1;
    }

    get currentpage() {
        let value = this.wrapper.scrollLeft / this.wrapper.offsetWidth;
        if (value < 0.01 || isNaN(value)) {
            value = 0;
        }
        return Math.floor(value);
    }

    updateCarousel() {
        this.prevButton.classList.toggle('hidden', this.currentpage === 0);
        this.nextButton.classList.toggle('hidden',
            this.currentpage === this.pages - 1 &&
            this.wrapper.scrollLeft + this.wrapper.offsetWidth >= this.wrapper.scrollWidth
        );
    }

    startAutoScroll() {
        if (this.autoScroll) return; // Évite les multiples intervalles
        this.autoScroll = setInterval(() => {
            if (this.currentpage < this.pages - 1) {
                this.move(1);
            } else if (this.loop) {
                this.move(-(this.pages - 1));
            } else {
                this.stopAutoScroll();
            }
        }, 5000);
    }

    stopAutoScroll() {
        if (this.autoScroll) {
            clearInterval(this.autoScroll);
            this.autoScroll = null;
        }
    }

    move(number) {
        let newPage = this.currentpage + number;

        if (this.loop) {
            if (newPage < 0) {
                newPage = this.pages - 1;
            } else if (newPage >= this.pages) {
                newPage = 0;
            }
        } else {
            newPage = Math.max(0, Math.min(newPage, this.pages - 1));
        }

        this.wrapper.scrollTo({
            left: this.wrapper.children[newPage * this.itemToScroll].offsetLeft,
            behavior: "smooth"
        });
    }
}