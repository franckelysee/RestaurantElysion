@extends('app')

@section('title')
    À propos - Mon Restaurant
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">




    <section class="about-hero">
        <div class="hero-overlay">
            <h1 class="hero-title">À Propos de Business Name</h1>
            <p class="hero-subtitle">Une histoire de goût, de passion et de convivialité</p>
        </div>
    </section>
    <section class="about-main">
        <div class="about-container">
            <!-- Introduction -->
            <div class="about-story">
                <h2 class="section-title">Notre Héritage</h2>
                <p class="section-text">
                    Chez <strong>Business Name</strong>, Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Repellendus officia dolore modi tenetur! Molestiae, aliquid eum ex omnis fugit distinctio,
                    quos nemo facilis, quidem ea molestias placeat obcaecati qui accusantium?.
                </p>
            </div>

            <!-- Galerie -->
            <div class="about-gallery">
                <div class="gallery-item">
                    <img src="{{ asset('images/about/chef.png') }}" alt="Notre chef en action" loading="lazy">
                    <div class="gallery-caption">Notre chef en pleine création</div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/about/salle_a_manger.png') }}" alt="Salle à manger" loading="lazy">
                    <div class="gallery-caption">Une ambiance chaleureuse</div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/about/ingredients.png') }}" alt="Ingrédients frais" loading="lazy">
                    <div class="gallery-caption">Ingrédients locaux et frais</div>
                </div>
            </div>

            <!-- Équipe -->
            <div class="about-team">
                <h2 class="section-title">Rencontrez Notre Équipe</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="{{ asset('images/about/chef.png') }}" alt="Chef Principal" loading="lazy">
                        <h3 class="member-name">John Doe</h3>
                        <p class="member-role">Chef Principal</p>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('images/about/manager.png') }}" alt="Manager" loading="lazy">
                        <h3 class="member-name">Lucas Martin</h3>
                        <p class="member-role">Manager</p>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('images/about/sommelier.png') }}" alt="Sommelier" loading="lazy">
                        <h3 class="member-name">Sophie Lemoine</h3>
                        <p class="member-role">Sommelier</p>
                    </div>
                </div>
            </div>

            <!-- Valeurs -->
            <div class="about-values">
                <h2 class="section-title">Nos Valeurs</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <h3>Qualité</h3>
                        <p>Des produits soigneusement sélectionnés pour une expérience gustative exceptionnelle.</p>
                    </div>
                    <div class="value-card">
                        <h3>Convivialité</h3>
                        <p>Un lieu où chaque client se sent comme chez lui.</p>
                    </div>
                    <div class="value-card">
                        <h3>Innovation</h3>
                        <p>Repousser les limites de la cuisine tout en respectant la tradition.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel_container py-5">
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
    </section>

    <section class="about-cta">
        <h2 class="cta-title">Venez Nous Découvrir</h2>
        <a href="{{ route('reservation') }}" class="cta-button">Réserver une Table</a>
    </section>

    <script type="module" src="{{ asset('js/utils/about/about.js') }}"></script>
@endsection