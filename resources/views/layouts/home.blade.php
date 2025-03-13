@extends('app')
@section('title')
{{ config('app.name') }}
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
<div class="w-full">
    <div class="p-5">
        <section class="slider-section w-full  fade-in">
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

    </div>
</div>


<script type="module" src="{{ asset('js/home/home.js') }}"></script>
@endsection