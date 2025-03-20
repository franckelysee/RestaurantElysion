class MenusBook {
    constructor() {
        this.init();
    }

    init() {
        this.updateZindex();
        this.paginatePages();
        this.updateButtonStates();
    }

    paginatePages() {
        const pages = document.querySelectorAll('.page-menu');
        const btnLeft = document.querySelector('.btn-turn-left');
        const btnRight = document.querySelector('.btn-turn-right');
        const btnLeftSpan = btnLeft.querySelector('span');
        const btnRightSpan = btnRight.querySelector('span');

        btnLeft.addEventListener('click', () => {
            const pageNum = parseInt(btnLeft.getAttribute('data-page'));
            const currentPage = document.querySelector(`.page-menu[data-page="${pageNum}"]`);

            if (currentPage && currentPage.classList.contains('page-left') && currentPage.previousElementSibling) {
                if (!currentPage.classList.contains('go-left')) {
                    this.MovePrevPageToRight(currentPage);
                    const prevPage = currentPage.previousElementSibling;
                    if (prevPage && prevPage.classList.contains('go-left')) {
                        this.TurnLeftPage(prevPage);
                    }
                    btnLeft.setAttribute('data-page', pageNum - 2);
                    btnRight.setAttribute('data-page', pageNum - 1);
                    btnLeftSpan.textContent = `Page Précédente`;
                    btnRightSpan.textContent = `Page Suivante`;
                } else {
                    this.TurnLeftPage(currentPage);
                    btnLeft.setAttribute('data-page', pageNum - 1);
                    btnRight.setAttribute('data-page', pageNum);
                }
                this.updateButtonStates();
                this.updateZindex();
            }
        });

        btnRight.addEventListener('click', () => {
            const pageNum = parseInt(btnRight.getAttribute('data-page'));
            const currentPage = document.querySelector(`.page-menu[data-page="${pageNum}"]`);

            if (currentPage && currentPage.classList.contains('page-right') && currentPage.nextElementSibling) {
                this.TurnRightPage(currentPage);
                const nextPage = currentPage.nextElementSibling;
                if (nextPage && nextPage.nextElementSibling) {
                    this.MoveNextPageToLeft(nextPage);
                    btnRight.setAttribute('data-page', pageNum + 2);
                    btnLeft.setAttribute('data-page', pageNum + 1);
                    btnRightSpan.textContent = `Page Suivante`;
                    btnLeftSpan.textContent = `Page Précédente`;
                } else {
                    btnRight.setAttribute('data-page', pageNum + 1);
                    btnLeft.setAttribute('data-page', pageNum);
                }
                this.updateButtonStates();
                this.updateZindex();
            }
        });
    }

    TurnRightPage(page) {
        page.classList.remove('page-right', 'go-right');
        page.classList.add('go-left', 'page-left');
    }

    TurnLeftPage(page) {
        page.classList.remove('page-left', 'go-left');
        page.classList.add('go-right', 'page-right');
    }

    MoveNextPageToLeft(page) {
        page.classList.remove('page-right', 'go-right');
        page.classList.add('page-left');
    }

    MovePrevPageToRight(page) {
        page.classList.remove('page-left', 'go-left');
        page.classList.add('page-right');
    }

    updateZindex() {
        const pagesRight = document.querySelectorAll('.page-right');
        const pagesLeft = document.querySelectorAll('.page-left');
        let zIndexRight = pagesRight.length;
        let zIndexLeft = 0;

        pagesRight.forEach(page => {
            page.style.zIndex = zIndexRight--;
        });

        pagesLeft.forEach(page => {
            page.style.zIndex = zIndexLeft++;
        });
    }

    updateButtonStates() {
        const btnLeft = document.querySelector('.btn-turn-left');
        const btnRight = document.querySelector('.btn-turn-right');
        const totalPages = document.querySelectorAll('.page-menu').length;

        btnLeft.disabled = parseInt(btnLeft.getAttribute('data-page')) <= 1;
        btnRight.disabled = parseInt(btnRight.getAttribute('data-page')) >= totalPages;

        btnLeft.classList.toggle('disabled', btnLeft.disabled);
        btnRight.classList.toggle('disabled', btnRight.disabled);
    }
}

if (window.matchMedia("(min-width: 1200px)").matches) {
    new MenusBook();
}