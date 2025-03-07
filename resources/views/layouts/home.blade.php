@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('build/assets/css/home/index.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/menu/menu.css') }}">
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
                    <div class="page-menu">
                        <div class="category-name">
                            <span class="left-line"></span>
                            <h1 class="">Entrées</h1>
                            <span class="right-line"></span>
                        </div>
                        <div class="cardMenu-list">

                            <div class="w-full menu-item">
                                <div class="menu-image">
                                    <img class="w-full" src="{{ asset('build/assets/images/menu/burger_frits.webp') }}" alt="MenuImage" srcset="" width="150" height="100">
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
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script type="module" src="{{ asset('build/assets/js/home/home.js') }}"></script>
@endsection