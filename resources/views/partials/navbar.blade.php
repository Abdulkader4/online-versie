<header class="header" id="header">

    <nav class="nav container">
        <a href="{{ route('home') }}" class="nav__logo">
            <img src="{{ asset('images/logo/Wordpress Transparent.png') }}" alt="Logo" style="height: 43px;">
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{ route('home') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('about') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Over Ons</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('diensten') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Onze Diensten</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('Evenementen') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Evenementen</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('contact') }}" class="nav__link">
                        <i class="ri-arrow-right-up-line"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-large-line"></i>
            </div>

            <div class="nav__social">
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
        </div>

        <!-- Toggle button -->
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </nav>
</header>
