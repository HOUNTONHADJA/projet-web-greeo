@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
@endphp

<main>
    <!-- Breadcrumb -->
        <div class="bg-gray-50 border-b">
            <div class="max-w-7xl mx-auto px-8 py-3">
                <div class="flex items-center space-x-2 text-sm">
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Evènements</a>
                    <div class="w-4 h-4 flex items-center justify-center text-gray-400">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <span class="text-gray-900">{{ $events->name }}</span>
                </div>
            </div>
        </div>
<!-- Event Hero Section -->
<section class="relative py-20 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDUwIDAgTCAwIDAgMCA1MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjNkMyRUI5IiBzdHJva2Utd2lkdGg9IjAuNSIgb3BhY2l0eT0iMC4wNSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==')] opacity-50"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div>
<div class="flex items-center mb-6">
<a href="/" class="text-primary hover:underline flex items-center">
<i class="ri-arrow-left-line mr-2"></i>
Retour aux événements
</a>
</div>
<div class="flex items-center mb-6">
<span class="bg-primary bg-opacity-10 text-primary px-4 py-1 rounded-full text-sm font-medium">{{  \Carbon\Carbon::parse($events->created_at)->translatedFormat('d F Y')  }}</span>
<span class="ml-4 text-gray-600 text-sm flex items-center">
<i class="ri-time-line mr-1"></i> 14:00 - 17:00
</span>
</div>
<h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $events->title }}</h1>
<div class="flex items-center space-x-6 mb-8">
    @if (!empty($events->meeting_link))
<div class="flex items-center">
<i class="ri-map-pin-line text-primary mr-2"></i>
<span class="text-gray-600">{{ $events->meeting_ink }}</span>
</div>
@else
<div class="flex items-center">
<i class="ri-group-line text-primary mr-2"></i>
<span class="text-gray-600">{{ $events->location_name }}</span>
</div>
<div class="flex items-center">
<i class="ri-group-line text-primary mr-2"></i>
<span class="text-gray-600">{{ $events->address }}</span>
</div>
@endif
</div>
<div class="flex items-center space-x-4">
<button class="bg-primary text-white px-8 py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap flex items-center">
<i class="ri-ticket-line mr-2"></i>
Réserver ma place
</button>
<div class="text-2xl font-bold text-primary">75€</div>
</div>
</div>
<div class="relative">
<img src="{{ asset('storage/' . $events->image) }}" alt="Conférence Startup" class="rounded-lg shadow-lg w-full h-50" height="10">
<div class="absolute bottom-4 right-4 bg-white rounded-lg shadow-lg p-4 flex items-center space-x-4">
<div class="text-center">
<div class="text-2xl font-bold text-primary">124</div>
<div class="text-sm text-gray-600">Places restantes</div>
</div>
<div class="h-8 w-px bg-gray-200"></div>
<div class="text-center">
<div class="text-2xl font-bold text-primary">3h</div>
<div class="text-sm text-gray-600">Durée</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Event Details Section -->
<section class="py-16">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
<div class="lg:col-span-2">
<div class="bg-white rounded-lg p-8 shadow-sm">
<h2 class="text-2xl font-bold mb-6">À propos de l'événement</h2>
<div class="prose max-w-none">
<p class="text-gray-600 mb-6">
{{ $events->description }}
</p>
<h3 class="text-xl font-semibold mb-4">Ce que vous apprendrez</h3>
<ul class="space-y-3 text-gray-600 mb-6">
<li class="flex items-start">
<i class="ri-check-line text-primary mt-1 mr-2"></i>
<span>Les dernières tendances et opportunités du marché en 2025</span>
</li>
<li class="flex items-start">
<i class="ri-check-line text-primary mt-1 mr-2"></i>
<span>Stratégies de financement et relations avec les investisseurs</span>
</li>
<li class="flex items-start">
<i class="ri-check-line text-primary mt-1 mr-2"></i>
<span>Construction d'une équipe performante et culture d'entreprise</span>
</li>
<li class="flex items-start">
<i class="ri-check-line text-primary mt-1 mr-2"></i>
<span>Marketing digital et acquisition clients</span>
</li>
<li class="flex items-start">
<i class="ri-check-line text-primary mt-1 mr-2"></i>
<span>Innovation et adaptation aux nouvelles technologies</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Related Events Section -->
<section class="py-16 bg-gray-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<h2 class="text-3xl font-bold mb-12 text-center">Événements similaires</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

@foreach ($evenementsSimilaires as $event)
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
</div>
</div>
</div>
</div>
</section>
</main>


@endsection