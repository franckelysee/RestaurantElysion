class MenusBook {
    constructor() {
        this.init();
    }

    init() {
        this.updateZindex();
        this.paginatePages();
        this.updateButtonStates(); // Mettre à jour l'état des boutons au démarrage
    }

    paginatePages() {
        const pages = document.querySelectorAll('.page-menu');
        const btn_left = document.querySelector('.btn-turn-left');
        const btn_right = document.querySelector('.btn-turn-right');
        const btn_right_span = document.querySelector('.btn-turn-right span');
        const btn_left_span = document.querySelector('.btn-turn-left span');

        btn_left.addEventListener('click', () => {
            const btndata = btn_left.getAttribute('data-page');
            const currentPage = document.querySelector(`.page-menu[data-page="${btndata}"]`);

            if (currentPage && currentPage.classList.contains('page-left') && currentPage.previousElementSibling) {
                if(!currentPage.classList.contains('go-left') && currentPage.classList.contains('page-left')){
                    this.MovePrevPageToRight(currentPage);
                    const prevPage = currentPage.previousElementSibling;
                    if (prevPage && prevPage.classList.contains('go-left') && prevPage.classList.contains('page-left')) {
                        this.TurnLeftPage(prevPage);
                    }

                    // Mettre à jour les boutons
                    btn_left.setAttribute('data-page', parseInt(btndata) - 2);
                    btn_right.setAttribute('data-page', parseInt(btndata) - 1);
                    btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata) - 2);
                    btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata) - 1);
                }else{
                    this.TurnLeftPage(currentPage);
                    btn_left.setAttribute('data-page', parseInt(btndata) - 1);
                    btn_right.setAttribute('data-page', parseInt(btndata));
                    btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata) - 1);
                    btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata));
                }


                this.updateButtonStates(); // Mettre à jour l'état des boutons
            }
            this.updateZindex();
        });

        btn_right.addEventListener('click', () => {
            const btndata = btn_right.getAttribute('data-page');
            const currentPage = document.querySelector(`.page-menu[data-page="${btndata}"]`);

            if (currentPage && currentPage.classList.contains('page-right') && currentPage.nextElementSibling) {
                // Tourner la page actuelle vers la gauche
                this.TurnRightPage(currentPage);

                // Vérifier si la page suivante existe
                const nextPage = currentPage.nextElementSibling;
                console.log("next :", nextPage.nextElementSibling);
                if (nextPage && nextPage.nextElementSibling) {
                    this.MoveNextPageToLeft(nextPage); // Déplacer la page suivante vers la gauche
                    btn_right.setAttribute('data-page', parseInt(btndata) + 2);
                    btn_left.setAttribute('data-page', parseInt(btndata) +1 );
                    btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata) + 2);
                    btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata) +1);
                }else{
                    // Mettre à jour les boutons
                    btn_right.setAttribute('data-page', parseInt(btndata) + 1);
                    btn_left.setAttribute('data-page', parseInt(btndata));
                    btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata) + 1);
                    btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata));
                }


                this.updateButtonStates(); // Mettre à jour l'état des boutons
            }
            this.updateZindex();
        });
    }

    TurnRightPage(page) {
        page.classList.remove('page-right');
        page.classList.remove('go-right');
        page.classList.add('go-left');
        page.classList.add('page-left');
    }

    TurnLeftPage(page) {
        page.classList.remove('page-left');
        page.classList.remove('go-left');
        page.classList.add('go-right');
        page.classList.add('page-right');
    }

    MoveNextPageToLeft(page) {
        page.classList.remove('page-right');
        page.classList.remove('go-right');
        page.classList.add('page-left');
    }

    MovePrevPageToRight(page) {
        page.classList.remove('page-left');
        page.classList.remove('go-left');
        page.classList.add('page-right');
    }

    updateZindex() {
        console.log('zindex')
        const pagesRight = document.querySelectorAll(".page-right");
        const pagesLeft = document.querySelectorAll(".page-left");
        let zIndexRight = pagesRight.length;
        let zIndexLeft = 0;

        pagesRight.forEach((page) => {
            page.style.zIndex = zIndexRight;
            zIndexRight--;
        });

        pagesLeft.forEach((page) => {
            page.style.zIndex = zIndexLeft;
            zIndexLeft++;
        });
    }

    updateButtonStates() {
        const btn_left = document.querySelector('.btn-turn-left');
        const btn_right = document.querySelector('.btn-turn-right');
        const totalPages = document.querySelectorAll('.page-menu').length;

        // Désactiver le bouton gauche si on est à la première page
        if (parseInt(btn_left.getAttribute('data-page')) === 1) {
            btn_left.disabled = true;
            btn_left.classList.add('disabled');
        } else {
            btn_left.disabled = false;
            btn_left.classList.remove('disabled');
        }

        // Désactiver le bouton droit si on est à la dernière page
        if (parseInt(btn_right.getAttribute('data-page')) === totalPages) {
            btn_right.disabled = true;
            btn_right.classList.add('disabled');
        } else {
            btn_right.disabled = false;
            btn_right.classList.remove('disabled');
        }
    }
}

if(window.matchMedia("(min-width: 1200px)").matches){

    new MenusBook();
}