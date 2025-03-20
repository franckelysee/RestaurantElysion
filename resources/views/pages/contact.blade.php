@extends('app')

@section('title')
    Contact - Business Name
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}">

    <section class="contact-hero">
        <div class="hero-overlay">
            <h1 class="hero-title">Nous Contacter</h1>
            <p class="hero-subtitle">Restez en touch avec nous</p>
        </div>
    </section>

    <section class="contact-main">
        <div class="contact-container">
            <!-- Informations de contact -->
            <div class="contact-info">
                <h2 class="section-title">Nos Coordonnées</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:franckelysee671@gmail.com">franckelysee671@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <h3>Téléphone</h3>
                            <p><a href="tel:+237698074525">+237 698074525</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <h3>Adresse</h3>
                            <p>123 Rue des Saveurs, Ville, Pays</p>
                        </div>
                    </div>
                </div>

                <!-- Horaires -->
                <div class="hours">
                    <h3>Horaires d'Ouverture</h3>
                    <ul>
                        <li>Lundi - Vendredi : 12h00 - 22h00</li>
                        <li>Samedi : 12h00 - 23h00</li>
                        <li>Dimanche : 12h00 - 20h00</li>
                    </ul>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="contact-form">
                <h2 class="section-title">Envoyez-nous un Message</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" required placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Votre email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone (optionnel)</label>
                        <input type="tel" id="phone" name="phone" placeholder="Votre numéro">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Carte -->
    <section class="contact-map">
        <h2 class="section-title">Où Nous Trouver</h2>
        <div class="map-container">
            <!-- Remplace cette iframe par ton propre lien Google Maps si disponible -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086576486384!2d-122.41941568468144!3d37.77492977975966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808e5e5e5e5f%3A0x5e5e5e5e5e5e5e5e!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1600000000000" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <script src="{{ asset('js/utils/contact/contact.js') }}"></script>
@endsection