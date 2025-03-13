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

            <div class="aside-content flex gap-2 ">
                <div class="">
                    <div class="about-badges">
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
                    <div class="about-ambiance">
                        <h2 class="ambiance-title">Restaurant Ambiance</h2>
                        <p class="ambiance-text">
                            Founded with a passion for culinary excellence, Qitchen's journey began in the heart of Prague.
                            Over years, it evolved into a haven for sushi enthusiasts, celebrated for its artful mastery and devotion to redefining gastronomy.
                        </p>
                    </div>
                </div>
                <div class="carousel-content " data-slider>
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
        </div>
    </section>

    <script type="module" src="{{ asset('js/utils/about/about.js') }}"></script>
@endsection