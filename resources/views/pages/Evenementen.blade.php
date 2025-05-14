@extends('layouts.app')

@section('title', 'Evenementen')
<link rel="stylesheet" href="{{ asset('css/evenementen.css') }}">

@section('content')

<!-- Evenementen Section -->
<div class="events-section">
    <div class="container">
        <h2 class="section-title">Evenementen</h2>

        <div class="events-grid">
        <!-- Evenement Card 1 -->
<div class="event-card">
    <img src="event1.jpg" alt="Event 1" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Global Combat Championship</h3>
        <p class="event-date">12 maart 2025</p>
        <p class="event-location">Zwolle, Nederland</p>
        <p class="event-description">Een topevenement met de beste vechters uit de hele wereld die hun vaardigheden in verschillende vechtsporten tonen. Mis deze kans niet om de beste atleten in actie te zien!</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 2 -->
<div class="event-card">
    <img src="event2.jpg" alt="Event 2" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Internationale Kickboks Clash</h3>
        <p class="event-date">20 maart 2025</p>
        <p class="event-location">Nunspeet, Nederland</p>
        <p class="event-description">Een spannende kickboksstrijd met de topvechters van Europa die strijden om de kampioenschapstitel. Bekijk de meest opwindende kickbokswedstrijden live!</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 3 -->
<div class="event-card">
    <img src="event3.jpg" alt="Event 3" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Wereld Martial Arts Toernooi</h3>
        <p class="event-date">5 april 2025</p>
        <p class="event-location">Utrecht, Nederland</p>
        <p class="event-description">Een toernooi voor alle vechtsportdisciplines met vechters van over de hele wereld die strijden om de wereldtitel.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 4 -->
<div class="event-card">
    <img src="event4.jpg" alt="Event 4" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Ultimate BJJ Showdown</h3>
        <p class="event-date">15 april 2025</p>
        <p class="event-location">Amsterdam, Nederland</p>
        <p class="event-description">Het spannendste Brazilian Jiu-Jitsu toernooi van het jaar met de beste vechters uit de hele wereld die strijden om roem in de BJJ.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 5 -->
<div class="event-card">
    <img src="event5.jpg" alt="Event 5" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Vecht Sport Festival</h3>
        <p class="event-date">25 april 2025</p>
        <p class="event-location">Den Haag, Nederland</p>
        <p class="event-description">Een groots festival met verschillende vechtsporten, van MMA tot taekwondo, waarbij de beste atleten uit Nederland en internationaal strijden.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 6 -->
<div class="event-card">
    <img src="event6.jpg" alt="Event 6" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Nederlandse Kickboks Kampioenschappen</h3>
        <p class="event-date">1 mei 2025</p>
        <p class="event-location">Rotterdam, Nederland</p>
        <p class="event-description">Het belangrijkste kickbokstoernooi van Nederland, waar de beste Nederlandse kickboksers hun krachten meten om het kampioenschap te winnen.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 7 -->
<div class="event-card">
    <img src="event7.jpg" alt="Event 7" class="event-image">
    <div class="event-info">
        <h3 class="event-title">BJJ Open Nederland</h3>
        <p class="event-date">10 mei 2025</p>
        <p class="event-location">Eindhoven, Nederland</p>
        <p class="event-description">Een open toernooi voor BJJ atleten uit Nederland en daarbuiten, waar deelnemers strijden in verschillende gewichts- en ervaringscategorieën.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 8 -->
<div class="event-card">
    <img src="event8.jpg" alt="Event 8" class="event-image">
    <div class="event-info">
        <h3 class="event-title">MMA Battle Night</h3>
        <p class="event-date">20 mei 2025</p>
        <p class="event-location">Groningen, Nederland</p>
        <p class="event-description">Een adembenemende MMA avond waarbij de beste vechters strijden in spannende gevechten voor de overwinning in een van de snelst groeiende vechtsporten.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 9 -->
<div class="event-card">
    <img src="event9.jpg" alt="Event 9" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Kickboks Battle of the Netherlands</h3>
        <p class="event-date">30 mei 2025</p>
        <p class="event-location">Maastricht, Nederland</p>
        <p class="event-description">Een intens kickboksgevecht tussen de beste vechters van Nederland, waar alles op het spel staat voor de felbegeerde titel.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 10 -->
<div class="event-card">
    <img src="event10.jpg" alt="Event 10" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Ultimate Fighter Showdown</h3>
        <p class="event-date">15 juni 2025</p>
        <p class="event-location">Rotterdam, Nederland</p>
        <p class="event-description">Een spectaculair vechtsportevenement met verschillende disciplines, van boksen tot jiu-jitsu, waarin de allerbeste vechters tegen elkaar strijden.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 11 -->
<div class="event-card">
    <img src="event11.jpg" alt="Event 11" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Jiu-Jitsu Master Cup</h3>
        <p class="event-date">25 juni 2025</p>
        <p class="event-location">Haarlem, Nederland</p>
        <p class="event-description">Een elite toernooi voor Braziliaans Jiu-Jitsu atleten, waarbij vechters uit de hele wereld strijden voor de ultieme overwinning.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 12 -->
<div class="event-card">
    <img src="event12.jpg" alt="Event 12" class="event-image">
    <div class="event-info">
        <h3 class="event-title">National Taekwondo Championship</h3>
        <p class="event-date">10 juli 2025</p>
        <p class="event-location">Leiden, Nederland</p>
        <p class="event-description">Het nationale Taekwondo kampioenschap, met de beste atleten die strijden voor de titel van Nederlands kampioen.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 13 -->
<div class="event-card">
    <img src="event13.jpg" alt="Event 13" class="event-image">
    <div class="event-info">
        <h3 class="event-title">MMA Championship Series</h3>
        <p class="event-date">25 juli 2025</p>
        <p class="event-location">Nijmegen, Nederland</p>
        <p class="event-description">De ultieme MMA toernooiserie, waar vechters hun skills in de kooi laten zien en strijden voor de nationale titel.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 14 -->
<div class="event-card">
    <img src="event14.jpg" alt="Event 14" class="event-image">
    <div class="event-info">
        <h3 class="event-title">World Boxing Night</h3>
        <p class="event-date">1 augustus 2025</p>
        <p class="event-location">Arnhem, Nederland</p>
        <p class="event-description">Een epische boksgala waar topvechters uit de wereld hun krachten meten in de ring voor de grote overwinning.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 15 -->
<div class="event-card">
    <img src="event15.jpg" alt="Event 15" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Nederlands Judo Kampioenschap</h3>
        <p class="event-date">15 augustus 2025</p>
        <p class="event-location">Gouda, Nederland</p>
        <p class="event-description">Het Nederlands Judo kampioenschap, waar de beste judoka’s strijden om de nationale titel.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 16 -->
<div class="event-card">
    <img src="event16.jpg" alt="Event 16" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Ultimate Fights Rotterdam</h3>
        <p class="event-date">1 september 2025</p>
        <p class="event-location">Rotterdam, Nederland</p>
        <p class="event-description">Een spannend gevechtsevent waar de beste vechters hun krachten meten in de ring en strijden om de overwinning in diverse disciplines.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 17 -->
<div class="event-card">
    <img src="event17.jpg" alt="Event 17" class="event-image">
    <div class="event-info">
        <h3 class="event-title">BJJ Open Kampioenschappen</h3>
        <p class="event-date">10 september 2025</p>
        <p class="event-location">Almere, Nederland</p>
        <p class="event-description">Het grootste Brazilian Jiu-Jitsu toernooi in Nederland, waar vechters uit binnen- en buitenland strijden voor de titel van kampioen.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 18 -->
<div class="event-card">
    <img src="event18.jpg" alt="Event 18" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Vecht Sport Extravaganza</h3>
        <p class="event-date">1 oktober 2025</p>
        <p class="event-location">Eindhoven, Nederland</p>
        <p class="event-description">Een groots vechtsportgala met verschillende disciplines waaronder kickboksen, MMA en Jiu-Jitsu, met vechters van topniveau.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 19 -->
<div class="event-card">
    <img src="event19.jpg" alt="Event 19" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Nederlandse MMA Strijd</h3>
        <p class="event-date">15 oktober 2025</p>
        <p class="event-location">Haarlem, Nederland</p>
        <p class="event-description">De grootste MMA strijd in Nederland, waar de beste vechters tegen elkaar strijden om de titel van kampioen.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>

<!-- Evenement Card 20 -->
<div class="event-card">
    <img src="event20.jpg" alt="Event 20" class="event-image">
    <div class="event-info">
        <h3 class="event-title">Judo World Open</h3>
        <p class="event-date">30 oktober 2025</p>
        <p class="event-location">Delft, Nederland</p>
        <p class="event-description">Het grootste Judo-toernooi van Nederland, waar topjudoka’s uit de hele wereld strijden voor de overwinning.</p>
        <a href="#" class="btn">Meer Informatie</a>
        <a href="#" class="btn register-btn">Schrijf je in</a>
    </div>
</div>
<br><br><br><br>

<script src="{{ asset('js/evenementen.js') }}"></script>
@endsection
