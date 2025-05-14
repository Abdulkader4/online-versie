@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="container">
    <form class="contact-container">
        <h1>Neem contact met ons op</h1>
        <p class="form-description">Heb je vragen, opmerkingen of suggesties? Vul het onderstaande formulier in en wij nemen zo snel mogelijk contact met je op. Wij horen graag van je!</p>

        <div class="input-name">
            <input type="text" class="first-name" name="fName" placeholder="Voornaam">
            <input type="text" class="last-name" name="lName" placeholder="Achternaam">
        </div>

        <div class="input-email">
            <input type="email" class="email" name="email" placeholder="E-mail">
        </div>

        <div class="input-subject">
            <input type="text" class="subject" name="subject" placeholder="Onderwerp">
        </div>

        <div class="input-message">
            <textarea class="message" name="message" placeholder="Bericht"></textarea>
        </div>

        <div class="action-btn">
            <button class="btn btn-submit">Verzenden</button>
        </div>
    </form>

    <!-- Contactinformatie sectie -->
    <div class="contact-details">
        <h2>Contactgegevens</h2>
        <p class="contact-description">Voor vragen kun je contact opnemen met onderstaande contactpersonen via e-mail, whatsapp of telefonisch.</p>

        <div class="contact-person">
            <h3>John Kuipers</h3>
            <p>Voor alles omtrent matchmaking & matchmakers.</p>
            <p><strong>Telefoon:</strong> <a href="tel:+31639383162">+31 6 39 38 31 62</a></p>
            <p><strong>Email:</strong> <a href="mailto:john@matchmakingnederland.nl">john@matchmakingnederland.nl</a></p>
        </div>

        <div class="contact-person">
            <h3>Benjamin Verkleij</h3>
            <p>Voor alles ticketbox & technische vragen.</p>
            <p><strong>Telefoon:</strong> <a href="tel:+31618328718">+31 6 18 32 87 18</a></p>
            <p><strong>Email:</strong> <a href="mailto:benjamin@matchmakingnederland.nl">benjamin@matchmakingnederland.nl</a></p>
        </div>
    </div>
</div>
@endsection
