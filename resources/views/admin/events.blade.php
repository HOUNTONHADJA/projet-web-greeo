@extends('admin.layouts.app')

@section('main')
@php
    use Carbon\Carbon;
@endphp
<div class="p-6 mt-16">
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-semibold mb-1">Événements</h1>
<p class="text-gray-500">Gérez vos événements et activités</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm border rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-download-line"></i>
Exporter
</button>
<button class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-add-line"></i>
Nouvel événement
</button>
</div>
</div>
<div class="bg-white rounded-lg shadow-sm mb-6">
<div class="p-4 border-b">
<div class="flex gap-4">
<div class="flex-1">
<input type="text" placeholder="Rechercher un événement..." class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<button class="px-4 py-2 border rounded-lg !rounded-button flex items-center gap-2 bg-gray-50">
<i class="ri-filter-3-line"></i>
Filtres
</button>
<button class="px-4 py-2 border rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-group-line"></i>
Tous les rôles
</button>
</div>
</div>
<div class="p-4">
<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
<!-- Cards des événements -->
  @if($events->isEmpty())
    <div class="d-flex  text-center align-items-center">
        <h1>Aucune salle ajouté</h1>
    </div>
  @else

  @foreach ($events as $event)
  <div class="bg-white rounded-lg shadow-sm overflow-hidden">
  <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
  <div class="p-4">
  <div class="flex items-center justify-between mb-2">
  <h3 class="font-semibold">{{ $event->title }}</h3>
  <span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">
    
  </span>
  </div>
  <div class="text-sm text-gray-500 mb-4">
  <div class="flex items-center gap-2 mb-1">
  <i class="ri-calendar-line"></i>
  <span>{{ \Carbon\Carbon::parse($event->date_event)->translatedFormat('d F Y') }}</span>
  </div>
  <div class="flex items-center gap-2 mb-1">
    @if (!empty($event->meeting_link))
  <i class="ri-vidicon-line"></i>
  <span>{{ $event->meeting_link }}</span>
  @else
  <i class="ri-map-pin-line"></i>
  <span>{{ $event->address }}</span>
  @endif
  </div>
  <div class="flex items-center gap-2">
  <i class="ri-group-line"></i>
  <span>200 participants</span>
  </div>
  </div>
  <div class="flex items-center gap-2">
  <button class="flex-1 px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button">Gérer</button>
  <button class="w-10 h-10 border rounded-lg flex items-center justify-center hover:bg-gray-50">
  <i class="ri-edit-line text-gray-500"></i>
  </button>
  <button class="w-10 h-10 border rounded-lg flex items-center justify-center hover:bg-gray-50">
  <i class="ri-more-line text-gray-500"></i>
  </button>
  </div>
  </div>
  </div>
  @endforeach
  @endif

  </div>
</div>
</div>

            <!-- Pagination starts -->
            {{ $events->links() }}

@endsection