@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu/menu.css') }}">
<div class="w-full">
    <div class="p-5">
        <section class="slider-section w-full  ">
            <div id="customcarousel" class="customcarousel mx-10  carousel slider flex flex-col  justify-start gap-5 p-5">
                <div class="slideContent w-full">
                    <div class="carousel-inner rooms">
                        <div class="carousel-item active">
                            <div class="w-[550px]">
                                <h1 class="text-[3.5rem] font-bold">Restaurant ElysionFood</h1>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                                <div class="orderbtn p-3">
                                    <button>Order Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="w-[550px]">
                                <h1 class="text-[3.5rem] font-bold">Un Service De qualité</h1>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                                <div class="orderbtn p-3">
                                    <button>Order Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="w-[550px]">
                                <h1 class="text-[3.5rem] font-bold">Restaurant ElysionFood</h1>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid voluptatibus excepturi voluptates illo nam ut velit nulla est quasi, quaerat optio, asperiores non pariatur, voluptatem tempore quae. Corrupti, nobis!</p>
                                <div class="orderbtn p-3">
                                    <button>Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btnIndicatorContainer">
                    <div class="btnIndicator active"></div>
                    <div class="btnIndicator"></div>
                    <div class="btnIndicator"></div>
                </div>
            </div>
        </section>
        <section class="menu-section w-full">
            <div class="div w-full m-auto">
                <div class="menusCategories">
                    <ul>
                        <li><a href="#">Entrées</a></li>
                        <li><a href="#">Plats Principaux</a></li>
                        <li><a href="#">Dessets</a></li>
                        <li><a href="#">Boissons</a></li>
                    </ul>
                </div>
                <div class="livre-menu">
                    <div class="page-menu page-left" data-page="1">
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p-1">page 1</p>
                    </div>

                    <div class="page-menu page-right" data-page="2">
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p-1">page 2</p>
                    </div>
                    <div class="page-menu page-right" data-page="3">
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
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
                                    <div class="orderbtn p-3">
                                        <button>Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p-1">page 3</p>
                    </div>
                </div>
                <div class="turn-page  w-full justify-end">
                    <div class="w-full flex justify-between">
                        <div class="btn-turn-left cursor-pointer flex gap-1 items-center" data-page="1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                            <span>tourne la Page 1</span>
                        </div>
                        <div class="btn-turn-right cursor-pointer flex gap-1 items-center" data-page="2">
                            <span>Tourne la Page 2</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<script type="module" src="{{ asset('js/home/home.js') }}"></script>
<script type="module" src="{{ asset('js/utils/menu/menu.js') }}"></script>
@endsection