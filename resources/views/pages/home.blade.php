@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

<header class="hero">
    <div class="hero-video">
        <video autoplay loop muted>
            <source src="{{ asset('video/4761711-uhd_4096_2160_25fps.mp4') }}" type="video/mp4">
            Je browser ondersteunt de video-tag niet.
        </video>
    </div>
    <div class="hero-content">
        <h1>Vechters Wereldwijd Verbinden</h1>
        <p>Global Combat brengt vechters, organisaties en toernooien samen in één wereldwijd netwerk.</p>
        <div class="cta-buttons">
            <a href="#about" class="cta-btn">Ontdek Global Combat</a>
        </div>
    </div>
</header>

<!-- Over Ons Sectie -->
<section id="about" class="section about">
    <div class="container">
        <h2>Onze Missie</h2>
        <p>Bij Global Combat draait alles om het verbinden van vechters wereldwijd. Of je nu een amateur bent die zijn eerste stappen in de ring zet, of een ervaren wereldkampioen, wij bieden een platform waar jij kunt groeien, leren en je netwerk kunt uitbreiden. Met geavanceerde tools, betrouwbare statistieken en een internationaal netwerk helpen we je om je doelen te bereiken, of je nu traint, promoot of deelneemt aan toernooien.</p>
        <p>Het is onze missie om de vechtsportwereld één plek te geven waar iedereen, ongeacht afkomst of ervaring, gelijke kansen krijgt om te bloeien. Samen creëren we een wereldwijd ecosysteem dat draait om samenwerking, innovatie en respect.</p>
    </div>
    <br>

</section>

<!-- Functionaliteiten Sectie -->
<section class="section features">
    <div class="container">
        <h2>Onze Functionaliteiten</h2>
        <p class="section-description">Ontdek de krachtige tools en mogelijkheden die we bieden om de wereldwijde vechtsportgemeenschap te ondersteunen. Van geavanceerd databeheer tot veilige matchmaking, alles is ontworpen om je ervaring te verbeteren.</p>
        <div class="feature-items">
            <div class="feature-item">
                <img src="{{ asset('images/databeheer.jpg') }}" alt="Databeheer" class="feature-img">
                <h3>Geavanceerd Databeheer</h3>
                <p>Betrouwbare statistieken voor vechters en promotors, zodat je altijd de juiste informatie hebt om slimme beslissingen te nemen.</p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/matchmaking.jpg') }}" alt="Matchmaking" class="feature-img">
                <h3>Internationale Matchmaking</h3>
                <p>Verbind met vechters en toernooien wereldwijd, en maak gebruik van onze matchmaking om de perfecte tegenstander te vinden.</p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/veiligheid.jpg') }}" alt="Veilige Wedstrijden" class="feature-img">
                <h3>Veilige Wedstrijden</h3>
                <p>Ons keurmerk zorgt voor eerlijke en veilige matchmaking, zodat alle vechters met vertrouwen kunnen deelnemen.</p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/netwerken.jpg') }}" alt="Verbonden Netwerken" class="feature-img">
                <h3>Verbonden Netwerken</h3>
                <p>Word onderdeel van een wereldwijd netwerk van vechters, trainers en organisatoren, en ontdek nieuwe mogelijkheden om je carrière te ontwikkelen.</p>
            </div>
        </div>
    </div>
</section>
<!-- Ze Hebben Ons Vertrouwd Sectie -->
<section id="trusted" class="section trusted">
    <div class="container">
        <h2>ZE HEBBEN ONS VERTROUWD</h2>
        <div class="logo-slider">
            <div class="logo-item"><img src="{{ asset('images/logo1.png') }}" alt="Logo 1"></div>
            <div class="logo-item"><img src="{{ asset('images/logo2.png') }}" alt="Logo 2"></div>
            <div class="logo-item"><img src="{{ asset('images/logo3.png') }}" alt="Logo 3"></div>
            <div class="logo-item"><img src="{{ asset('images/logo4.png') }}" alt="Logo 4"></div>
        </div>
    </div>
</section>

<!-- Oproep tot Actie Sectie -->
<section id="join" class="cta-section">
    <div class="container">
        <h2>Word Deel van Ons Netwerk</h2>
        <p>Verbind je met vechters, trainers en organisaties wereldwijd. Sluit je aan bij Global Combat en groei samen met ons netwerk. Er wacht een wereld van mogelijkheden op jou!</p>
        <a href="{{ route('pages.wordlid') }}" class="cta-btn">Word Lid van Ons Netwerk</a>
    </div>
</section>

@endsection
