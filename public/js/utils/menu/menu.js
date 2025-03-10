

const pageMenus = document.querySelectorAll('.page-menu');
console.log(pageMenus);
if(pageMenus){
    pageMenus.forEach(menu => {
        menu.addEventListener('click', () => {
            if(menu.classList.contains('page-left')){
                menu.classList.remove('back');
                menu.classList.add('turn');
            }else if(menu.classList.contains('back')){
                menu.classList.remove('back');
                menu.classList.add('turn');
            }
            else if(menu.classList.contains('turn')){
                menu.classList.remove('turn');
                menu.classList.add('back');
            }
            else{
                menu.classList.remove('turn');
                menu.classList.add('back');
            }
        }
        );
    });
}

