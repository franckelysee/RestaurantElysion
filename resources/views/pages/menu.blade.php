@extends('app')
@section('title')
Menu - Mon Restaurant
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/menu/menu.css') }}">

<section class="menu-section w-full ">
    <div class="menu-hero">
        <h1 class="hero-title">Menu</h1>
        <p class="hero-subtitle">Savourez l'élégance culinaire</p>
    </div>
    <div class="w-full m-auto menu-content">
        <div class="menusCategories mobile-only">
            <ul>
                <li><a href="#entre">Entrées</a></li>
                <li><a href="#plats-principaux">Plats Principaux</a></li>
                <li><a href="#desserts">Dessets</a></li>
                <li><a href="#boissons">Boissons</a></li>
            </ul>
        </div>
        <div class="livre-menu">
            <div id="entre" class="page-menu page-left" data-page="1">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Entrées</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/carpaccioBoeuf.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Carpaccio de bœuf</h1>
                                <span class="dots"></span>
                                <span class="price">16000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Fines tranches de bœuf cru, marinées avec de l'huile d'olive, du citron, des câpres et du parmesan</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/veloutePotimarron.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Velouté de potimarron</h1>
                                <span class="dots"></span>
                                <span class="price">5000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Soupe crémeuse à base de courge, souvent servie avec une touche de crème fraîche et des graines grillées</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/tartaresaumon.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Tartare de saumon</h1>
                                <span class="dots"></span>
                                <span class="price">13000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Dés de saumon frais assaisonnés avec de la ciboulette, du citron, et parfois de l’avocat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 1</p>
            </div>
            <div id="plats-principaux" class="page-menu page-right" data-page="2">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Plats Principaux</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 2</p>
            </div>
            <div id="desserts" class="page-menu page-right" data-page="3">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Desserts</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 3</p>
            </div>
            <div id="boissons" class="page-menu page-right" data-page="4">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Boissons</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson5.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 4</p>
            </div>
            <div class="page-menu page-right" data-page="5">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Plats Principaux</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/platprincipal4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 5</p>
            </div>
            <div class="page-menu page-right" data-page="6">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Desserts</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/dessert4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 6</p>
            </div>
            <div class="page-menu page-right" data-page="7">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Boissons</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson1.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson2.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson3.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson4.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/boisson5.png') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 7</p>
            </div>
            <div class="page-menu page-right" data-page="8">
                <div class="category-name">
                    <span class="left-line"></span>
                    <h1 class="">Entrées</h1>
                    <span class="right-line"></span>
                </div>
                <div class="cardMenu-list">

                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/burger_frits.webp') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/burger_frits.webp') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full menu-item">
                        <div class="menu-image w-fit">
                            <img class="" src="{{ asset('images/menu/burger_frits.webp') }}" alt="MenuImage" srcset="" width="150" height="100">
                        </div>
                        <div class="menu-details">
                            <div class="name-price">
                                <h1 class="name">Burger Avec Frits</h1>
                                <span class="dots"></span>
                                <span class="price">3000 Fcfa</span>
                            </div>
                            <div class="menu-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-1">page 8</p>
            </div>
        </div>
        <div class="turn-page desktop-only w-full justify-end">
            <div class="w-full flex justify-between">
                <button class="btn-turn-left cursor-pointer flex gap-1 items-center" data-page="1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                    <span>Page Précédente</span>
                </button>
                <button class="btn-turn-right cursor-pointer flex gap-1 items-center" data-page="2">
                    <span>Page Suivante</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="book-table w-full">
            <a href="{{ route('reservation') }}" class="flex w-full justify-center">
                Réserver une table
            </a>
        </div>
    </div>
</section>


<script type="module" src="{{ asset('js/utils/menu/menu.js') }}"></script>

@endsection