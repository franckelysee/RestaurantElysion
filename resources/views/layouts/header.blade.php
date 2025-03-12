<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<div class=" headerContent w-full px-3 py-2 dark:text-[#efe7d2] bg-white dark:bg-black">
    <div class="w-full">
        <div class="desktop p-5 w-full flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
            <div class="text-[20px] font-bold">
                <a href="/"><h1>Business Name</h1></a>
            </div>
            <div class="menus">
                <ul class="menuContainer flex items-center space-x-4">
                    <li class="menuItem active"><a href="#">Accueil</a></li>
                    <li class="menuItem"><a href="{{ route('menu') }}">Menu</a></li>
                    <li class="menuItem"><a href="#">A Propos</a></li>
                    <li class="menuItem"><a href="#">Réserver une Table</a></li>
                    <li class="menuItem"><a href="#">Contact</a></li>
                </ul>
            </div>

            {{-- <div class="user-account-serction"></div> --}}
        </div>
    </div>
</div>