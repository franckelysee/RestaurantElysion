

export default class Carousel{

    /**
         * @param {HTMLDivElement} el
         * @param {boolean} both_mob_desk  true if for both mobile and desktop devices, false otherwise  (default is false)
         * @param {boolean} is_loop  true if for loop, false otherwise  (default is false)
         * @param {boolean} auto  true if auto run, false otherwise  (default is true)
         */
        loop = false
        autoScroll;
        constructor(el, both_mob_desk = false, is_loop = false, auto = true) {
            if (window.matchMedia('(min-width: 1024px)').matches || both_mob_desk) {

                this.nextButton = el.querySelector('[data-slider-next]');
                this.prevButton = el.querySelector('[data-slider-prev]');
                this.wrapper = el.querySelector('[data-slider-wrapper]');
                this.nextButton.addEventListener('click', () => {
                    auto = false;
                    this.autoRun(false)
                    this.move(1);
                });
                this.prevButton.addEventListener('click', () => {
                    auto = false;
                    this.autoRun(false)
                    this.move(-1);
                });
                this.wrapper.addEventListener('scrollend', () => {
                    this.updateCarousel();
                });
                this.updateCarousel();
                if (auto) {
                    this.autoRun();
                }
            }
        }

        get itemToScroll() {
            return parseInt(window.getComputedStyle(this.wrapper)
                .getPropertyValue('--items'), 10)
        }
        get pages() {
            return Math.floor(this.wrapper.children.length / this.itemToScroll) || 1;
        }

        get currentpage() {
            let value = this.wrapper.scrollLeft / this.wrapper.offsetWidth;
            if (value < 0.01 || isNaN(value)) {
                value = 0
            }

            return Math.floor(value);
        }




        updateCarousel() {
            if (this.currentpage == 0) {
                if (!this.prevButton.classList.contains('carousel-prev')){
                    this.prevButton.classList.add('hidden');
                }
            } else {
                this.prevButton.classList.remove('hidden');
            }

            if (this.currentpage == this.pages - 1 && this.wrapper.scrollLeft + this.wrapper.offsetWidth >= this.wrapper.scrollWidth) {
                if (!this.nextButton.classList.contains('carousel-next')){
                    this.nextButton.classList.add('hidden');
                }
            } else {
                this.nextButton.classList.remove('hidden');
            }
        }


        autoRun(active=true) {
            console.log('in the auto function current page')
            if (!active) {
                clearInterval(this.autoScroll)
            }else{

                let i = 1;
                this.autoScroll = setInterval(() => {
                    console.log('current page ', this.currentpage, " pages ", this.pages)
                    console.log('------------------------------------------------------- ')
                    if (this.currentpage < this.pages -1 ) {
                        this.move(i);
                    }
                    // else if (this.currentpage == this.pages -1){
                    //     console.log('current p ', this.currentpage, 'i ', i)
                    //     if (i ==1){
                    //         this.move(i)
                    //         i = -1
                    //     }else{
                    //         this.move(i)
                    //         i = 1
                    //     }
                    // }
                    else {
                        clearInterval(this.autoScroll);
                    }
                }, 5000);
                // Pause automatique au survol
                this.wrapper.addEventListener('mouseenter', () => this.autoRun(false));
                this.wrapper.addEventListener('mouseleave', () => this.autoRun());
            }


        }


        /**
         *
         * @param {number} number
         */
        move(number) {
            var newPage = this.currentpage + number;
            if (newPage < 0) {
                newPage = this.pages -1 ; //0
            }
            if (newPage >= this.pages) {
                // newPage = 0;
                this.pages - 1;
            }

            this.wrapper.scrollTo({
                left: this.wrapper.children[newPage * this.itemToScroll].offsetLeft,
                behavior: "smooth"
            });

        }

}