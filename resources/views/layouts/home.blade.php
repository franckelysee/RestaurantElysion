@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('build/assets/css/home/index.css') }}">
<div class="w-full">
    <div class="p-5">
        <section class="slider-section w-full  ">
            <div id="customcarousel" class="customcarousel mx-10  carousel slider flex flex-col  justify-start gap-5 ">
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
            <div class="div w-full">
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
                        <h1>Entrées</h1>
                        <div class="w-full">
                            <div class="menu-image">
                                <img src="" alt="" srcset="">
                            </div>
                            <div class="menu-content">
                                <div class="name-price">
                                    <h1 class="">Menu Name</h1>
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
        </section>
    </div>
</div>
<script type="module" src="{{ asset('build/assets/js/home/home.js') }}"></script>
@endsection