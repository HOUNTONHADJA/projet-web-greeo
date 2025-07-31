@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp


        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-primary to-secondary py-16 overflow-hidden" style="background-image: url('https://readdy.ai/api/search-image?query=modern%20elegant%20meeting%20rooms%20and%20conference%20spaces%2C%20professional%20venue%20interior%20with%20contemporary%20design%2C%20sophisticated%20lighting%20and%20clean%20minimalist%20aesthetic%2C%20corporate%20business%20environment%20with%20purple%20and%20blue%20tones&width=1200&height=400&seq=hero-rooms&orientation=landscape'); background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-8 text-center">
                <h1 class="text-5xl font-bold text-white mb-6">Trouvez la salle parfaite pour votre événement</h1>
                <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Découvrez notre sélection de salles d'exception dans toute la France. Espaces de conférence, salles de séminaire, lieux de réception et bien plus encore.</p>
                
                <!-- Barre de recherche -->
                <div class="bg-white rounded-lg p-2 shadow-xl max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="relative">
                            <div class="w-5 h-5 flex items-center justify-center absolute left-3 top-1/2 transform -translate-y-1/2">
                                <i class="ri-map-pin-line text-gray-400"></i>
                            </div>
                            <input type="text" placeholder="Ville ou région" class="w-full pl-10 pr-4 py-3 border-none text-sm focus:outline-none focus:ring-2 focus:ring-primary !rounded-button">
                        </div>
                        <div class="relative">
                            <div class="w-5 h-5 flex items-center justify-center absolute left-3 top-1/2 transform -translate-y-1/2">
                                <i class="ri-calendar-line text-gray-400"></i>
                            </div>
                            <input type="date" class="w-full pl-10 pr-4 py-3 border-none text-sm focus:outline-none focus:ring-2 focus:ring-primary !rounded-button">
                        </div>
                        <div class="relative">
                            <div class="w-5 h-5 flex items-center justify-center absolute left-3 top-1/2 transform -translate-y-1/2">
                                <i class="ri-group-line text-gray-400"></i>
                            </div>
                            <select class="w-full pl-10 pr-8 py-3 border-none text-sm focus:outline-none focus:ring-2 focus:ring-primary !rounded-button appearance-none bg-white">
                                <option>Capacité</option>
                                <option>10-25 personnes</option>
                                <option>25-50 personnes</option>
                                <option>50-100 personnes</option>
                                <option>100-200 personnes</option>
                                <option>200+ personnes</option>
                            </select>
                        </div>
                        <button class="bg-primary text-white px-6 py-3 !rounded-button font-medium whitespace-nowrap hover:bg-purple-800 transition-colors cursor-pointer">
                            <div class="w-5 h-5 flex items-center justify-center mr-2 ">
                                <i class="ri-search-line"></i>
                            </div>
                            Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- Résultats -->
        <section class="max-w-7xl mx-auto px-8 py-8">

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

            <!-- Pagination -->
            {{ $salles->links() }}
        </section>

        <!-- Section CTA -->
        <section class="bg-primary py-16">
            <div class="max-w-4xl mx-auto px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Vous ne trouvez pas la salle parfaite ?</h2>
                <p class="text-xl text-white opacity-90 mb-8">Contactez nos experts pour une recherche personnalisée ou ajoutez votre propre salle à notre plateforme.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-primary px-8 py-3 !rounded-button font-medium whitespace-nowrap hover:bg-gray-100 transition-colors cursor-pointer">
                        Demande personnalisée
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 !rounded-button font-medium whitespace-nowrap hover:bg-white hover:text-primary transition-colors cursor-pointer">
                        Ajouter ma salle
                    </button>
                </div>
            </div>
        </section>

    

@endsection