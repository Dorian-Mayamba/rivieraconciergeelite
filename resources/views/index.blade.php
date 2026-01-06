@extends('layouts.app')

@section('title', 'Accueil')

@push('extra-css')
    @vite('resources/css/index.css')
@endpush

@section('content')
<!-- Hero Section -->
<section class="position-relative text-center text-white" style="background: url('{{ asset('airbnb-host-bg.jpg') }}') center/cover no-repeat; height: 90vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.55);">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="fw-bold mb-3">Simplifiez la gestion de vos biens et services</h1>
            <p style="font-size: 1.25rem" class="lead mb-4 w-75 mx-auto">Nous vous accompagnons dans la gestion quotidienne de vos logements, bureaux ou propriétés..</p>
            <a href="{{ route('contact') }}" class="btn btn-danger btn-lg rounded-pill px-4">Nous contacter</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Nos Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <img src="{{ asset('conciergerie-airbnb-nice-service-checkin.webp') }}" alt="Check-in" class="mb-3 h-50">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Accueil & Check-in</h5>
                        <p style="font-size: 1.1rem" class="card-text text-muted service-paragraph">Nous accueillons vos voyageurs avec professionnalisme et gérons les arrivées en toute autonomie.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <img src="{{ asset('nettoyage-airbnb.jpg') }}" alt="Nettoyage" class="mb-3 h-50">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Nettoyage Professionnel</h5>
                        <p style="font-size: 1.1rem" class="card-text text-muted service-paragraph">Des équipes de ménage fiables pour garantir un logement impeccable à chaque séjour.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <img src="{{ asset('Dashboard-iphone-2-og-macbook-e1687936232762.webp') }}" alt="Gestion des prix" class="mb-3 h-50">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Optimisation des Prix</h5>
                        <p style="font-size: 1.1rem" class="card-text text-muted service-paragraph">Nous ajustons vos tarifs selon la demande locale pour maximiser vos revenus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step section -->

<section class="py-5 bg-white">
    <h2 class="text-center fw-bold mb-5">
        3 étapes simples pour nous confier la gestion de votre location
    </h2>
    <div class="text-content text-center">
        <p class="mx-5 text-paragraph">
            Rivieria Conciergerie offre un accompagnement sur mesure pour la gestion des locations courte durée, <strong>couvrant plusieurs zones autour de Marseille</strong>. Confiez-nous vos biens avec sérénité.
        </p>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <img src="{{ asset('Contactez-nous-min.jpg') }}" alt="Contactez nous" class="h-75 card-img-top mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">1 - Contactez Nous </h5>
                            <p>Prenez rendez-vous avec un professionel.</p>
                            <a href="{{ route('contact') }}" class="btn btn-danger btn-lg rounded-pill px-4">Contactez Nous</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <img src="{{ asset('visite logement.jpg') }}" alt="Visite Logement" class="h-75 card-img-top mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">2 - Visite du logement</h5>
                            <p>Un expert prend contact avec vous pour répondre à toutes vos questions et visiter votre logement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <img src="{{ asset('page_partenariat.jpg') }}" alt="Page Partenariat" class="h-75 card-img-top mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">3 - Lancement</h5>
                            <p>Après avoir trouve un accord, nous nous chargeons de crée votre annonce et l’aventure commence !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5">
                <h2 class="fw-bold mb-3">Votre partenaire de confiance pour la gestion de vos logements</h2>
                <p class="text-muted mb-3 about-paragraph">Nous aidons les hôtes à se libérer des contraintes de gestion quotidienne : communication, maintenance, logistique, et plus encore.</p>
                <p class="text-muted mb-4 about-paragraph">Notre objectif : offrir à vos invités une expérience mémorable tout en augmentant vos revenus sans effort.</p>
                <a href="{{ route('contact') }}" class="btn btn-danger rounded-pill px-4">En savoir plus</a>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('rivieraconscierie-logo.JPEG') }}" class="img-fluid rounded shadow"  alt="Notre équipe">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-center text-white" style="background-color: #dc3545;">
    <div class="container">
        <h2 class="fw-bold mb-3">Prêt à simplifier votre gestion de vos logements ?</h2>
        <p class="lead mb-4">Contactez-nous dès aujourd’hui pour une consultation gratuite.</p>
        <a href="{{ route('contact') }}" class="btn btn-light text-danger fw-semibold rounded-pill px-4">Contactez-nous</a>
    </div>
</section>

<!-- Footer -->

@endsection
