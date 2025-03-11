

class MenusBook{
    constructor(){
        this.init();
    }

    init(){
        this.updateZindex();
        this.paginatePages();
    }

    paginatePages(){
        const pages = document.querySelectorAll('.page-menu');
        const btn_left = document.querySelector('.btn-turn-left');
        const btn_right = document.querySelector('.btn-turn-right');
        var btn_right_span = document.querySelector('.btn-turn-right span');
        var btn_left_span = document.querySelector('.btn-turn-left span');

        btn_left.addEventListener('click', () => {
            pages.forEach(page => {
                if(page.classList.contains('page-left') && page.previousElementSibling){
                    let pagedata = page.getAttribute('data-page');
                    let btndata = btn_left.getAttribute('data-page');
                    if(pagedata == btndata){
                        this.TurnLeftPage(page);
                        btn_left.setAttribute('data-page', parseInt(btndata) - 1);
                        btn_right.setAttribute('data-page', parseInt(btndata));
                        btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata));
                        btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata) - 1);
                    }
                }
            });
            this.updateZindex();
        }
        );

        btn_right.addEventListener('click', () => {
            pages.forEach(page => {
                if(page.classList.contains('page-right') && page.nextElementSibling){
                    let pagedata = page.getAttribute('data-page');
                    let btndata = btn_right.getAttribute('data-page');
                    if(pagedata == btndata){
                        this.TurnRightPage(page);
                        btn_right.setAttribute('data-page', parseInt(btndata) + 1);
                        btn_left.setAttribute('data-page', parseInt(btndata));
                        btn_right_span.innerText = "Tourne la Page " + (parseInt(btndata) + 1);
                        btn_left_span.innerText = "Tourne la Page " + (parseInt(btndata));
                    }
                }
            });
            this.updateZindex();
        }
        );
    }

    TurnRightPage(page){
        // je vérifie si la page est une page de gauche ou de droite et que ce n'est pas la première page
        // if(page.previousElementSibling){
        //     page.classList.add('page')
        // }
        page.classList.remove('page-right');
        page.classList.remove('go-right');
        page.classList.add('go-left');
        page.classList.add('page-left');

    }
    TurnLeftPage(page){
        page.classList.remove('page-left');
        page.classList.remove('go-left');
        page.classList.add('go-right');
        page.classList.add('page-right');
    }
    updateZindex(){
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

}

new MenusBook();