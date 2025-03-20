<footer >
    <div class="footer">
        <div class="footer-container">
            <!-- Navigation -->
            <div class="footer-section">
                <h3 class="footer-title">Navigation</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('menu') }}">Menu</a></li>
                    <li><a href="{{ route('about') }}">À Propos</a></li>
                    <li><a href="{{ route('reservation') }}">Réserver</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Coordonnées -->
            <div class="footer-section">
                <h3 class="footer-title">Nous Contacter</h3>
                <ul class="footer-contact">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="footer-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:contact@businessname.com">contact@businessname.com</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="footer-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+1234567890">+1 234 567 890</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="footer-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>123 Rue des Saveurs, Ville, Pays</span>
                    </li>
                </ul>
            </div>

            <!-- Réseaux sociaux -->
            <div class="footer-section">
                <h3 class="footer-title">Suivez-nous</h3>
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <!-- Contour extérieur (appareil photo arrondi) -->
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <!-- Cercle central (lentille) -->
                            <circle cx="12" cy="12" r="4"/>
                            <!-- Petit cercle en haut à droite (flash) -->
                            <circle cx="18" cy="6" r="1"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                        <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" y1="4" x2="20" y2="20"/>
                            <line x1="4" y1="20" x2="20" y2="4"/>
                        </svg>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg> --}}
                    </a>
                </div>
            </div>
        </div>

        <!-- Mention légale -->

    </div>
    <div class="flex justify-between items-center copyright">
        <div class="footer-links">
            <a href="#">Franck Elysee</a>
            <a href="#">Licensing</a>
            <a href="#">Styleguide</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Business Name. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="{{ asset('css/footer.css') }}">