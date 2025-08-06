@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
@endphp

<!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-primary to-secondary py-16 overflow-hidden" style="background-image: url('https://readdy.ai/api/search-image?query=modern%20elegant%20meeting%20rooms%20and%20conference%20spaces%2C%20professional%20venue%20interior%20with%20contemporary%20design%2C%20sophisticated%20lighting%20and%20clean%20minimalist%20aesthetic%2C%20corporate%20business%20environment%20with%20purple%20and%20blue%20tones&width=1200&height=400&seq=hero-rooms&orientation=landscape'); background-size: cover; background-position: center; background-blend-mode: overlay;">
            <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-8 text-center">
                <h1 class="text-5xl font-bold text-white mb-6">Nos Événements Phares</h1>
                <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Participez à nos événements soigneusement sélectionnés pour enrichir vos compétences et élargir votre réseau professionnel.</p>
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
@if($events->isEmpty())
<div class="d-flex  text-center align-items-center">
    <h1>Aucun évènement ajouté</h1>
</div>
@else
@foreach ($events as $event)

<div class="bg-white rounded-lg card-shadow overflow-hidden event-card">

<img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">

<div class="p-6">
    @php
    $date_event =  \Carbon\Carbon::parse($event->date_event);
    $daysLeft = now()->diffInDays($date_event, false);
@endphp
<div class="flex items-center mb-4">
<span class="bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-full text-sm">{{  \Carbon\Carbon::parse($event->date_event)->translatedFormat('d F Y')  }}</span>
<span class="ml-4 text-gray-600 text-sm flex items-center">
<i class="ri-time-line mr-1"></i> {{  \Carbon\Carbon::parse($event->date_event)->format('H:i')  }}
</span>
@if ($date_event->isPast())
    <span class="ml-4  text-sm flex items-center bg-red-600 text-white px-2 py-1 rounded-full font-medium"> Evenement terminé</span>
@else
<span class="ml-4  text-sm flex items-center bg-primary text-white px-2 py-1 rounded-full font-medium"> {{  \Carbon\Carbon::parse($event->date_event)->diffForHumans(now(), syntax:\Carbon\CarbonInterface::DIFF_RELATIVE_TO_NOW)  }}</span>
@endif


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
</section>
   @endsection