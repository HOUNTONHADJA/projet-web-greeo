@extends('layouts.app')

@section('main')

@php
    use Carbon\Carbon;
@endphp

<div class="min-h-screen">
        <!-- Header avec bannière -->
        <div class="relative h-80 bg-gradient-to-r from-primary to-secondary overflow-hidden">
            <div style="background-image: url('https://readdy.ai/api/search-image?query=modern%20event%20venue%20interior%20with%20elegant%20lighting%20and%20contemporary%20design%2C%20professional%20photography%2C%20clean%20background%2C%20sophisticated%20atmosphere%2C%20purple%20and%20blue%20tones&width=1200&height=320&seq=agency-cover&orientation=landscape')" class="absolute inset-0 bg-cover bg-center opacity-30"></div>
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>

<!-- Profil de l'agence -->
            <div class="relative z-10 px-8 mt-12">
                <div class="flex items-end space-x-6">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="" alt="{{ $profil->name }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-white pb-4">
                        <h1 class="text-4xl font-bold mb-2">{{ $profil->name }} {{ $profil->lastname }}</h1>
                        <p class="text-lg opacity-90">Spécialiste en organisation d'événements d'entreprise</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Informations de l'agence -->
        <div class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-8 py-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2">
                        <h2 class="text-xl font-semibold mb-4">À propos de l'agence</h2>
                        <p class="text-gray-600 mb-6"><p>{{ $profil->description }}</p>
                         
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Événements d'entreprise</span>
                            <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Conférences</span>
                            <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Team Building</span>
                            <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Séminaires</span>
                            <span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">Lancements produits</span>
                        </div>

                        <div class="grid grid-cols-3 gap-6 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">247</div>
                                <div class="text-sm text-gray-600">Événements organisés</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">1,834</div>
                                <div class="text-sm text-gray-600">Abonnés</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">4.9</div>
                                <div class="text-sm text-gray-600">Note moyenne</div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="font-semibold mb-4">Coordonnées</h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-map-pin-line text-primary"></i>
                                    </div>
                                    <span class="text-gray-600">15 Avenue des Champs-Élysées, 75008 Paris</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-phone-line text-primary"></i>
                                    </div>
                                    <span class="text-gray-600">+33 1 42 56 78 90</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-mail-line text-primary"></i>
                                    </div>
                                    <span class="text-gray-600">{{ $profil->email }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="font-semibold mb-4">Réseaux sociaux</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center hover:bg-purple-800 transition-colors">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center hover:bg-purple-800 transition-colors">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center hover:bg-purple-800 transition-colors">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center hover:bg-purple-800 transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation secondaire -->
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-8">
                <div class="flex space-x-8">
                    <button class="py-4 px-1 border-b-2 border-primary text-primary font-medium tab-button active" data-tab="articles">
                        Articles publiés
                    </button>
                    <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium tab-button" data-tab="events">
                        Événements à venir
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-8 ">
    @if ($profil->evenements->isEmpty())
                <p>Aucun événement n’a encore été publié.</p>
            @else

            @foreach ($profil->evenements as $event)
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

@endsection