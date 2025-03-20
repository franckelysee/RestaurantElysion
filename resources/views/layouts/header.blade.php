<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<div class="headerContent w-full px-3 py-2 dark:text-[#efe7d2] bg-white">
    <div class="w-full">
        <div class="header-inner p-5 w-full flex items-center justify-between">
            <!-- Logo -->
            <div class="text-[25px] font-bold text-[#e4d6ae]">
                <a href="/"><h1>Business Name</h1></a>
            </div>

            <!-- Hamburger -->
            <button class="hamburger md:hidden">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Menu -->
            <div class="menus md:flex hidden">
                <ul class="menuContainer flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
                    <li class="menuItem {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="menuItem {{ request()->routeIs('menu') ? 'active' : '' }}">
                        <a href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="menuItem {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">À Propos</a>
                    </li>
                    <li class="menuItem {{ request()->routeIs('reservation') ? 'active' : '' }}">
                        <a href="{{ route('reservation') }}">Réserver une Table</a>
                    </li>
                    <li class="menuItem {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script >
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const menus = document.querySelector('.menus');
    const menuItems = document.querySelectorAll('.menuItem');

    // Gestion du hamburger
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        menus.classList.toggle('active');
    });

    // Gestion des clics sur les liens
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            menuItems.forEach(menu => menu.classList.remove('active'));
            this.classList.add('active');

            // Ferme le menu sur mobile après un clic
            if (window.innerWidth <= 768) {
                menus.classList.remove('active');
                hamburger.classList.remove('open');
            }
        });
    });

    // Synchronisation initiale avec l'URL (optionnel, si tu veux gérer sans rechargement)
    const currentPath = window.location.pathname;
    menuItems.forEach(item => {
        const link = item.querySelector('a');
        if (link.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });
});</script>