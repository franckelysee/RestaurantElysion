@extends('app')

@section('title')
    À propos - Mon Restaurant
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">


    <section class="about-section">
        <div class="about-container">
            <h1 class="about-title">A Propos de nous</h1>
            <p class="about-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Repellendus officia dolore modi tenetur! Molestiae,
                aliquid eum ex omnis fugit distinctio, quos nemo facilis,
                quidem ea molestias placeat obcaecati qui accusantium?
            </p>
            <div class="carousel-content " data-slider>
                <div class="rooms" data-slider-wrapper>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant-blurred.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant3.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant3.png') }}" alt="" srcset="">
                    </div>
                    <div class="room">
                        <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="carouselBtn">
                    <div class="previousBtn" data-slider-prev>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </div>
                    <div class="nextBtn" data-slider-next="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="aside-content flex flex-col gap-2 ">
                <div class="flex gap-2 justify-center items-center">
                    <div class="border p-3 rounded-[10px] w-[50%] h-auto bg-[#222121d5]">
                        <div class="about-ambiance">
                            <h2 class="ambiance-title">Info Title</h2>
                            <p class="ambiance-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde,
                                nesciunt fuga quibusdam quod eum omnis aliquam repellendus sapiente consequuntur,
                                esse, accusamus enim ipsam. Illum fuga corporis perferendis! Explicabo, dignissimos pariatur?
                            </p>
                        </div>
                    </div>
                    <div class="carousel-content   w-[50%] " data-slider>
                        <div class="rooms is-one" data-slider-wrapper>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant-blurred.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant3.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant3.png') }}" alt="" srcset="">
                            </div>
                            <div class="room">
                                <img src="{{ asset('images/about/restaurant2.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <div class="carouselBtn">
                            <div class="previousBtn" data-slider-prev>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                            <div class="nextBtn" data-slider-next="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-badges  ">
                    <div class="badge">
                        <span class="stars">★★★★★</span>
                        <p>Trip Advisor</p>
                        <p>Best Sushi</p>
                    </div>
                    <div class="badge">
                        <span class="stars">★★★★★</span>
                        <p>Michelin Guide</p>
                        <p>Quality Food</p>
                    </div>
                    <div class="badge">
                        <span class="stars">★★★★★</span>
                        <p>Start Dining</p>
                        <p>Cool Vibe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="{{ asset('js/utils/about/about.js') }}"></script>
@endsection