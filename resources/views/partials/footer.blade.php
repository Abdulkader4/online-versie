<footer class="footer">
    <div class="footer-content">
        <!-- Navigatie Links -->
        <div class="footer-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">Over ons</a>
            <a href="#">Onze Diensten</a>
            <a href="{{ route('Evenementen') }}">Evenementen</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="footer-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo/Wordpress Transparent.png') }}" alt="Logo" class="footer-logo-img">
            </a>
        </div>

        <div class="footer-contact-container">

            <div class="social-media">
                <a href="https://www.instagram.com/" target="_blank" class="nav__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://www.facebook.com/yourusername" target="_blank" class="nav__social-link">
                    <i class="ri-facebook-line"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="nav__social-link">
                    <i class="ri-twitter-line"></i>
                </a>
                <a href="https://www.linkedin.com/" target="_blank" class="nav__social-link">
                    <i class="ri-linkedin-box-line"></i>
                </a>
            </div>

            <div class="footer-contact">
                <h3>Contact</h3>
                <p><strong>Tel:</strong> +31 6 12345678</p>
                <p><strong>E-mail:</strong> info@globalcombat.com</p>
                <p><strong>Adres:</strong> Harderwijk </p>
            </div>
        </div>
    </div>

    <div class="footer-extra-links">
        <a href="#Privacy">Privacybeleid</a>
        <a href="#Terms">Algemene Voorwaarden</a>
        <a href="#FAQ">FAQ</a>
    </div>

    <!-- Footer Onderkant -->
    <div class="footer-bottom">
        <p>&copy; 2025 Global-Combat. All Rights Reserved.</p>
    </div>
</footer>
