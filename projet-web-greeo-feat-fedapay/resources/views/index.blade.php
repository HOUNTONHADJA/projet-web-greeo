@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp

<!-- Hero Section -->
<section class="hero-bg relative min-h-screen flex items-center overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-r from-black/50 to-black/30"></div>
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDUwIDAgTCAwIDAgMCA1MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIwLjUiIG9wYWNpdHk9IjAuMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-30"></div>
<div class="relative z-10 w-full">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="max-w-3xl">
<div class="inline-block mb-4 px-6 py-2 bg-white/10 backdrop-blur-md rounded-full">
<p class="text-white text-sm font-medium">Bienvenue chez Greeo</p>
</div>
<h2 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight animate-fade-in">
Créez des Moments <span class="text-primary">Inoubliables</span>
</h2>
<p class="text-xl text-white mb-12 opacity-90 leading-relaxed">
Découvrez nos espaces exceptionnels conçus pour inspirer, connecter et transformer vos événements professionnels en expériences mémorables.
</p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary text-white px-8 py-4 !rounded-button text-lg hover:scale-105 transition-all duration-300 whitespace-nowrap hover:shadow-lg hover:shadow-primary/20">
Découvrir nos espaces
</button>
<button class="bg-white/10 backdrop-blur-md text-white px-8 py-4 !rounded-button text-lg hover:bg-white/20 transition-all duration-300 whitespace-nowrap flex items-center gap-2">
<i class="ri-play-circle-line text-2xl"></i>
Voir la visite virtuelle
</button>
</div>
<div class="mt-16 flex items-center gap-8">
<div class="flex -space-x-4">
<img src="https://readdy.ai/api/search-image?query=professional%20business%20person%20headshot%20on%20white%20background%2C%20confident%20smile&width=100&height=100&seq=avatar1&orientation=squarish" class="w-12 h-12 rounded-full border-2 border-white" alt="User">
<img src="https://readdy.ai/api/search-image?query=young%20professional%20woman%20headshot%20on%20white%20background%2C%20warm%20smile&width=100&height=100&seq=avatar2&orientation=squarish" class="w-12 h-12 rounded-full border-2 border-white" alt="User">
<img src="https://readdy.ai/api/search-image?query=business%20executive%20man%20headshot%20on%20white%20background%2C%20friendly%20expression&width=100&height=100&seq=avatar3&orientation=squarish" class="w-12 h-12 rounded-full border-2 border-white" alt="User">
</div>
<div class="text-white">
<p class="font-semibold">+2,500 Clients Satisfaits</p>
<div class="flex items-center gap-1 text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<span class="text-white ml-2">4.9/5</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="apropos" class="py-20 bg-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16 scroll-reveal">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
Pourquoi choisir <span class="gradient-text">Greoo</span> ?
</h2>
<p class="text-xl text-gray-600 max-w-3xl mx-auto">
Depuis 2015, nous révolutionnons l'organisation d'événements en proposant des espaces exceptionnels
et un service personnalisé pour chaque occasion.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
<div class="text-center scroll-reveal">
<div class="service-icon">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-search-line ri-lg"></i>
</div>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3">Recherche Intelligente</h3>
<p class="text-gray-600">Trouvez la salle parfaite grâce à nos filtres avancés et notre algorithme de recommandation.</p>
</div>
<div class="text-center scroll-reveal">
<div class="service-icon">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-shield-check-line ri-lg"></i>
</div>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3">Garantie Qualité</h3>
<p class="text-gray-600">Tous nos espaces sont vérifiés et certifiés pour garantir une expérience exceptionnelle.</p>
</div>
<div class="text-center scroll-reveal">
<div class="service-icon">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-time-line ri-lg"></i>
</div>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3">Réservation Instantanée</h3>
<p class="text-gray-600">Réservez en quelques clics avec confirmation immédiate et paiement sécurisé.</p>
</div>
<div class="text-center scroll-reveal">
<div class="service-icon">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-settings-3-line ri-lg"></i>
</div>
</div>
<h3 class="text-xl font-semibold text-gray-900 mb-3">Service Personnalisé</h3>
<p class="text-gray-600">Notre équipe d'experts vous accompagne dans l'organisation de votre événement.</p>
</div>
</div>
<div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl scroll-reveal">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div>
<h3 class="text-3xl font-bold text-gray-900 mb-6">Notre Mission</h3>
<p class="text-gray-600 mb-6 text-lg leading-relaxed">
Chez Greoo, nous croyons que chaque événement mérite un cadre exceptionnel.
Notre plateforme connecte les organisateurs avec les plus beaux espaces de France,
qu'il s'agisse de salles de conférence high-tech, de lieux de réception prestigieux
ou d'espaces créatifs uniques.
</p>
<div class="space-y-4">
<div class="flex items-center">
<div class="w-6 h-6 flex items-center justify-center mr-3">
<i class="ri-check-line text-primary ri-lg"></i>
</div>
<span class="text-gray-700">Réseau national de partenaires premium</span>
</div>
<div class="flex items-center">
<div class="w-6 h-6 flex items-center justify-center mr-3">
<i class="ri-check-line text-primary ri-lg"></i>
</div>
<span class="text-gray-700">Technologie de pointe pour la réservation</span>
</div>
<div class="flex items-center">
<div class="w-6 h-6 flex items-center justify-center mr-3">
<i class="ri-check-line text-primary ri-lg"></i>
</div>
<span class="text-gray-700">Support client dédié 24h/24</span>
</div>
</div>
</div>
<div class="relative">
<img src="https://readdy.ai/api/search-image?query=professional%20team%20meeting%20in%20modern%20office%20space%20diverse%20business%20people%20collaborating%20around%20conference%20table%20contemporary%20interior%20design%20natural%20lighting%20glass%20walls%20sophisticated%20atmosphere&width=600&height=400&seq=about_team&orientation=landscape"
alt="Équipe Greoo"
class="rounded-xl shadow-2xl object-cover w-full h-80">
<div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-lg">
<div class="text-center">
<div class="text-2xl font-bold">98%</div>
<div class="text-sm opacity-90">Satisfaction client</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Events Section -->
<section id="evenements" class="py-20 bg-gradient-to-b from-white to-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<span class="inline-block px-4 py-1 bg-primary/10 rounded-full text-primary text-sm font-medium mb-4">Événements à venir</span>
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 gradient-text">Nos Événements Phares</h2>
<p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
Participez à nos événements soigneusement sélectionnés pour enrichir vos compétences et élargir votre réseau professionnel.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Event  -->
@if($evenements->isEmpty())
<div class="d-flex  text-center align-items-center">
    <h1>Aucun évènement ajouté</h1>
</div>
@else
@foreach ($evenements as $event)
@php
    $eventDate = Carbon::parse($event->date_event)->locale('fr');
    $now = Carbon::now();
    $diffInDays = $now->diffInDays($eventDate, false);
    $diffInHours = $now->diffInHours($eventDate, false);
@endphp
@php
    $eventDate = Carbon::parse($event->date_event)->locale('fr');
    $now = Carbon::now();
    $diffInDays = $now->diffInDays($eventDate, false);
    $diffInHours = $now->diffInHours($eventDate, false);
@endphp
<div class="bg-white rounded-lg card-shadow overflow-hidden event-card">
<img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
<div class="p-6">
<div class="flex items-center mb-4">
<span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">{{  \Carbon\Carbon::parse($event->created_at)->translatedFormat('d F Y')  }}</span>
<span class="ml-4 text-gray-600 text-sm flex items-center">
<i class="ri-time-line mr-1"></i> 14:00 - 17:00
</span>
</div>
<a href="{{ route('show',[
    'events' => $event->id,
    'slug' => $event->slug,
]) }}" class="text-xl font-semibold mb-2">{{ $event->title }}</a>
<div class="flex items-center space-x-4 text-sm text-gray-600 mb-4">
        <span class="flex items-center space-x-1">
            <div class="w-4 h-4 flex items-center justify-center">
                <i class="ri-group-line"></i>
            </div>
            <span>
                <a href="{{ route('profil', $event->user->id) }}">
                    {{ $event->user->name }}
                </a>
            </span>
        </span>
        <span class="flex items-center space-x-1">
            @if (!empty($event->meeting_link))
            <div class="w-4 h-4 flex items-center justify-center">
                <i class="ri-group-line"></i>
            </div>
            <span>
                <a href="{{ $event->meeting_link }}" target="_blank">{{ $event->meeting_link }}</a>
            </span>
            @else
                <div class="w-4 h-4 flex items-center justify-center">
                    <i class="ri-group-line"></i>
                </div>
                <span>
                    <span>{{ $event->address }}</span>
                </span>
                <span class="flex items-center space-x-1">
                <div class="w-4 h-4 flex items-center justify-center">
                    <i class="ri-slideshow-line"></i>
                </div>
                <span>{{ $event->location_name }}</span>
            </span>
            @endif
    </div>
<p class="text-gray-600 mb-4">{{ Str::limit($event->description, 100, '...') }}</p>
<div class="flex items-center justify-between">
<a href="{{ route('show',[
    'events' => $event->id,
    'slug' => $event->slug,
]) }}" class="bg-primary text-white px-4 py-2 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
Voir détails
</a>
</div>
</div>
</div>
@endforeach
@endif
</div>
<div class="text-center mt-12">
<a href="{{ route('evenements') }}" class="bg-white text-primary border-2 border-primary px-8 py-3 !rounded-button hover:bg-primary hover:text-white transition-all duration-300 whitespace-nowrap">
Voir tous les événements
</a>
</div>
</section>
<!-- Salle Section -->
<section id="galerie" class=" bg-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Découvrez Nos Espaces</h2>
<p class="text-lg text-gray-600 max-w-2xl mx-auto">
Explorez notre sélection de salles conçues pour inspirer et favoriser la collaboration.
</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Salle 1 -->
                @if($salles->isEmpty())
                    <div class="d-flex  text-center align-items-center">
                        <h1>Aucune salle ajouté</h1>
                    </div>
                @else
                    @foreach ($salles as $salle)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $salle->image) }}" alt="{{ $salle->name }}" class="w-full h-48 object-cover object-top">
                            <div class="absolute top-4 right-4">
                                @if ($salle->available)
                                        <span class="bg-primary text-white text-xs px-2 py-1 rounded-full font-medium">Disponible</span>
                                    @else
                                        <span class="bg-green-100 text-red-600 text-xs px-2 py-1 rounded-full font-medium">Réservé</span>
                                    @endif
                                
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-2">
                                <a href="{{ route('showSalles',[
                                        'salles' => $salle->id,
                                        'slug' => $salle->slug,
                                    ]) }}">
                                    <h3 class="font-semibold text-lg">{{ $salle->name }}</h3>
                                </a>   
                            </div>
                            <p class="text-gray-600 text-sm mb-3">{{ $salle->location }}</p>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-4">
                                <span class="flex items-center space-x-1">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-group-line"></i>
                                    </div>
                                    <span>{{ $salle->capacity }} personnes</span>
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-2xl font-bold text-primary">{{ $salle->price_per_hour }} FCFA</span>
                                    <span class="text-gray-600 text-sm">/heure</span>
                                </div>
                                <button class="bg-primary text-white px-4 py-2 !rounded-button font-medium whitespace-nowrap hover:bg-purple-800 transition-colors cursor-pointer">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
                <div class="text-center mt-12 mb-6">
                    <a href="{{ route('salles') }}" class="bg-white text-primary border-2 border-primary px-8 py-3 !rounded-button hover:bg-primary hover:text-white transition-all duration-300 whitespace-nowrap">
                    Voir toutes les salles
                    </a>
                </div>
</div>


<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16 scroll-reveal">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
Ce que disent nos <span class="gradient-text">clients</span>
</h2>
<p class="text-xl text-gray-600 max-w-3xl mx-auto">
Découvrez les témoignages de nos clients satisfaits qui nous font confiance pour leurs événements.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="testimonial-card p-8 rounded-2xl shadow-lg scroll-reveal">
<div class="flex items-center mb-4">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
</div>
<p class="text-gray-600 mb-6 text-lg leading-relaxed">
"Service exceptionnel ! L'équipe Greoo nous a accompagnés tout au long de l'organisation de notre conférence.
La salle était parfaite et l'équipement technique impeccable."
</p>
<div class="flex items-center">
<img src="https://readdy.ai/api/search-image?query=professional%20business%20woman%20portrait%20confident%20smile%20modern%20office%20background%20corporate%20headshot%20elegant%20attire&width=60&height=60&seq=testimonial_1&orientation=squarish"
alt="Marie Dubois"
class="w-12 h-12 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-900">Marie Dubois</h4>
<p class="text-gray-500 text-sm">Directrice Marketing, TechStart</p>
</div>
</div>
</div>
<div class="testimonial-card p-8 rounded-2xl shadow-lg scroll-reveal">
<div class="flex items-center mb-4">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
</div>
<p class="text-gray-600 mb-6 text-lg leading-relaxed">
"Plateforme intuitive et choix de salles impressionnant. Nous avons organisé 3 événements via Greoo
et à chaque fois, tout s'est déroulé parfaitement. Je recommande vivement !"
</p>
<div class="flex items-center">
<img src="https://readdy.ai/api/search-image?query=professional%20business%20man%20portrait%20confident%20expression%20modern%20office%20background%20corporate%20headshot%20formal%20attire&width=60&height=60&seq=testimonial_2&orientation=squarish"
alt="Pierre Martin"
class="w-12 h-12 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-900">Pierre Martin</h4>
<p class="text-gray-500 text-sm">CEO, InnovCorp</p>
</div>
</div>
</div>
<div class="testimonial-card p-8 rounded-2xl shadow-lg scroll-reveal">
<div class="flex items-center mb-4">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
</div>
<p class="text-gray-600 mb-6 text-lg leading-relaxed">
"La qualité des espaces proposés est remarquable. Pour notre gala de charité, nous avons trouvé
le lieu parfait. L'équipe est très professionnelle et réactive."
</p>
<div class="flex items-center">
<img src="https://readdy.ai/api/search-image?query=professional%20business%20woman%20portrait%20warm%20smile%20modern%20office%20background%20corporate%20headshot%20professional%20attire&width=60&height=60&seq=testimonial_3&orientation=squarish"
alt="Sophie Leroy"
class="w-12 h-12 rounded-full object-cover mr-4">
<div>
<h4 class="font-semibold text-gray-900">Sophie Leroy</h4>
<p class="text-gray-500 text-sm">Fondatrice, Charity Plus</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDUwIDAgTCAwIDAgMCA1MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjNkMyRUI5IiBzdHJva2Utd2lkdGg9IjAuNSIgb3BhY2l0eT0iMC4wNSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-50"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="text-center mb-16">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contactez-Nous</h2>
<p class="text-lg text-gray-600 max-w-2xl mx-auto">
Prêt à réserver votre espace ? Notre équipe est là pour vous accompagner dans votre projet.
</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<!-- Contact Form -->
<div class="bg-gray-50 p-8 rounded-lg">
<h3 class="text-xl font-semibold mb-6">Demande de Réservation</h3>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
<input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Votre prénom">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
<input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Votre nom">
</div>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
<input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="votre@email.com">
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Type d'événement</label>
<div class="relative">
<button type="button" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-left bg-white focus:ring-2 focus:ring-primary focus:border-transparent flex items-center justify-between">
<span>Sélectionnez un type</span>
<i class="ri-arrow-down-s-line"></i>
</button>
</div>
</div>
<div>
<label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
<textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Décrivez votre projet..."></textarea>
</div>
<button type="submit" class="w-full bg-primary text-white py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
Envoyer ma demande
</button>
</form>
</div>
<!-- Contact Info -->
<div class="space-y-8">
<div>
<h3 class="text-xl font-semibold mb-6">Informations de Contact</h3>
<div class="space-y-4">
<div class="flex items-center space-x-4">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-lg">
<i class="ri-map-pin-line text-primary"></i>
</div>
<div>
<p class="font-medium">Adresse</p>
<p class="text-gray-600">123 Avenue des Entrepreneurs, 75008 Paris</p>
</div>
</div>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-lg">
<i class="ri-phone-line text-primary"></i>
</div>
<div>
<p class="font-medium">Téléphone</p>
<p class="text-gray-600">+33 1 23 45 67 89</p>
</div>
</div>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-lg">
<i class="ri-mail-line text-primary"></i>
</div>
<div>
<p class="font-medium">Email</p>
<p class="text-gray-600">contact@greoo.fr</p>
</div>
</div>
<div class="flex items-center space-x-4">
<div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-lg">
<i class="ri-time-line text-primary"></i>
</div>
<div>
<p class="font-medium">Horaires</p>
<p class="text-gray-600">Lun-Ven : 8h-20h | Sam : 9h-18h</p>
</div>
</div>
</div>
</div>
<!-- Map -->
<div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center" style="background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;">
<div class="bg-white bg-opacity-90 p-4 rounded-lg">
<p class="text-center text-gray-700">Carte interactive</p>
</div>
</div>
<div class="text-center">
<button class="bg-primary text-white px-8 py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
Réserver maintenant
</button>
</div>
</div>
</div>
</div>

@endsection