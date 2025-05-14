@extends('layouts.app')

@section('title', 'Over Ons')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<section class="about-section">
    <div class="hero-bg">
        <div class="hero-content">
            <h1>Global Combat</h1>
            <p>Connecting Fighters Worldwide</p>
            <div class="separator"></div>
        </div>
    </div>

    <div class="about-container">
        <div class="about-info">
            <div class="info-item">
                <h3>Missie</h3>
                <p>We streven naar de hoogste standaard in vechtsporten door veiligheid en innovatie te combineren. Ons doel is een wereldwijd platform te creëren voor vechters, organisaties en promotors.</p>
            </div>
            <div class="info-item">
                <h3>Visie</h3>
                <p>Een wereld waarin technologie en transparantie vechtsporten versterken, ondersteund door een veilig en professioneel netwerk voor alle betrokkenen.</p>
            </div>
            <div class="info-item">
                <h3>Waarden</h3>
                <p>Integriteit, Veiligheid en Transparantie vormen de kern van onze benadering. Wij geloven in een eerlijke en veilige strijd voor iedere vechter.</p>
            </div>
        </div>

        <div class="more-info">
            <h3>Meer over Global Combat</h3>
            <p>Global Combat is niet zomaar een platform. Wij streven ernaar de digitale toekomst van vechtsporten te hervormen door het aanbieden van tools die zowel de veiligheid als het succes van atleten verbeteren. Door real-time data-analyse en een transparante manier van werken, geven we vechters en promotors de juiste middelen om te groeien.</p>
            <p>Onze partnerschappen met vechtsportorganisaties wereldwijd stellen ons in staat om te zorgen voor betrouwbare matchmaking en datamanagement, terwijl we tegelijkertijd de hoogste veiligheidsnormen handhaven. Het is onze missie om vechtsporten naar een hoger niveau te tillen en gelijke kansen te bieden voor alle atleten.</p>
            <p>Bij Global Combat geloven we dat vechtsporten niet alleen om competitie gaan, maar om het creëren van een community die is gebaseerd op wederzijds respect, teamwork en het streven naar perfectie.</p>
        </div>

        <div class="contact-link">
            <p>Heb je vragen? <a href="{{ route('contact') }}" class="contact-link-btn">Neem contact met ons op</a></p>
        </div>
    </div>
<br><br><br><br>
</section>
@endsection
