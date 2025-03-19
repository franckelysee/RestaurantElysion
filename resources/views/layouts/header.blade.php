<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<div class="headerContent w-full px-3 py-2 dark:text-[#efe7d2] bg-white ">
    <div class="w-full">
        <div class="header-inner p-5 w-full flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
            <div class="text-[20px] font-bold">
                <a href="/"><h1>Business Name</h1></a>
            </div>
            <button class="hamburger md:hidden">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <div class="menus md:flex hidden">
                <ul class="menuContainer flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
                    <li class="menuItem active"><a href="#">Accueil</a></li>
                    <li class="menuItem"><a href="{{ route('menu') }}">Menu</a></li>
                    <li class="menuItem"><a href="{{ route('about') }}">A Propos</a></li>
                    <li class="menuItem"><a href="{{ route('reservation') }}">Réserver une Table</a></li>
                    <li class="menuItem"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    const hamburger = document.querySelector('.hamburger');
    const menus = document.querySelector('.menus');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open'); // Ajoute/supprime la classe open
        menus.classList.toggle('active');   // Ouvre/ferme le menu
    });

    const menuItems = document.querySelectorAll('.menuItem');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(menu => menu.classList.remove('active'));
            this.classList.add('active');
            if (window.innerWidth <= 825) {
                menus.classList.remove('active'); // Ferme le menu
                hamburger.classList.remove('open'); // Remet le hamburger
            }
        });
    });
</script>