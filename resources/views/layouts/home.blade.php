@extends('app')
@section('title')
{{ config('app.name') }}
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
<div class="w-full">
    <div class="p-5">

        <!-- Hero Section -->
    <section class="hero-section fade-in">
        <div class="hero-overlay"></div>
        <img src="{{ asset('images/home/hero-image.png') }}" alt="Restaurant ambiance">
        <div class="hero-content">
            <h1 class="hero-title">Bienvenue chez RestauFranck</h1>
            <p class="hero-subtitle">Découvrez une expérience culinaire exceptionnelle avec des plats raffinés et une ambiance chaleureuse.</p>
            <a href="/reservation" class="hero-button">Réserver une Table</a>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="highlights-section fade-in">
        <h2 class="section-title">Nos Points Forts</h2>
        <div class="highlights-container">
            <div class="highlight-card">
                <img src="{{ asset('images/menu/sushi.png') }}" alt="Platter">
                <h3 class="highlight-title">Plats d'Exception</h3>
                <p class="highlight-text">Nos chefs préparent des plats avec des ingrédients frais et de première qualité.</p>
            </div>
            <div class="highlight-card">
                <img src="{{ asset('images/menu/menubg2.png') }}" alt="Restaurant ambiance">
                <h3 class="highlight-title">Ambiance Élégante</h3>
                <p class="highlight-text">Un cadre raffiné pour des dîners inoubliables, parfait pour toutes les occasions.</p>
            </div>
            <div class="highlight-card">
                <img src="{{ asset('images/about/restaurant-blurred.png') }}" alt="Chef preparing food">
                <h3 class="highlight-title">Service Impeccable</h3>
                <p class="highlight-text">Notre équipe est dédiée à rendre votre expérience mémorable.</p>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section fade-in">
        <h2 class="section-title">Ce Que Disent Nos Clients</h2>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <p class="testimonial-text">"Une expérience culinaire incroyable ! Les plats sont délicieux et l'ambiance est parfaite."</p>
                <p class="testimonial-author">- Marie D.</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"Le meilleur restaurant que j'ai visité. Le service est exceptionnel !"</p>
                <p class="testimonial-author">- Julien R.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section fade-in">
        <h2 class="cta-title">Prêt à Découvrir ElysionFood ?</h2>
        <a href="/reservation" class="cta-button">Réserver Maintenant</a>
    </section>

    

    </div>
</div>


<script type="module" src="{{ asset('js/home/home.js') }}"></script>
@endsection