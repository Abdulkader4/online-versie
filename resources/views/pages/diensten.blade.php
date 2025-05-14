@extends('layouts.app')

@section('title', 'Onze Diensten')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/diensten.css') }}">
@endsection

@section('content')
<div class="hero-section">
    <video class="hero-video" autoplay muted loop>
        <source src="{{ asset('video/Onzedienst.mp4') }}" type="video/mp4">
        Je browser ondersteunt geen video's.
    </video>

    <div class="hero-content">
        <h1 class="vecht-title">Onze Diensten</h1>
        <p class="vecht-subtitle">Krachtige oplossingen voor vechtsportorganisaties, vechters en promotors wereldwijd.</p>
        <a href="{{ url('/registratie') }}" class="btn-primary">Start Nu</a>
    </div>
</div>

<section class="diensten-overview">
    <h2>Onze Expertise</h2>
    <p>Alles wat jij nodig hebt om professioneel, veilig en internationaal te groeien binnen de ringsportwereld.</p>
</section>

<div class="diensten-grid">
    <div class="dienst-card">
        <div class="icon">📊</div>
        <h3>Databeheer</h3>
        <p>Beheer vechtersgegevens, wedstrijden en medische data veilig.</p>
    </div>

    <div class="dienst-card">
        <div class="icon">🥇</div>
        <h3>Matchmaking</h3>
        <p>Eerlijke matchmaking op basis van gewicht en ervaring.</p>
    </div>

    <div class="dienst-card">
        <div class="icon">💉</div>
        <h3>Medische Veiligheid</h3>
        <p>Realtime controle op medische startverboden voor optimale veiligheid.</p>
    </div>

    <div class="dienst-card">
        <div class="icon">🌍</div>
        <h3>Internationale Rankings</h3>
        <p>Vergroot je reputatie en verdien titels wereldwijd.</p>
    </div>

    <div class="dienst-card">
        <div class="icon">📖</div>
        <h3>Kennisbank</h3>
        <p>Toegang tot de nieuwste vechtsportregels en richtlijnen.</p>
    </div>

    <div class="dienst-card">
        <div class="icon">✅</div>
        <h3>Keurmerk & Certificering</h3>
        <p>Vergroot je professionaliteit met ons keurmerk voor kwaliteit en veiligheid.</p>
    </div>
</div>

<section class="call-to-action">
    <h2>Klaar voor de volgende stap?</h2>
    <p>Word onderdeel van het meest innovatieve platform in de ringsport!</p>
    <a href="{{ url('/registratie') }}" class="btn-primary">Registreer Nu</a>
</section>
@endsection
