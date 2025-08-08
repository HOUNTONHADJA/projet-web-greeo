
@extends('admin.layouts.app')

@section('main')
<div class="p-6 mt-16">
  <div class="flex items-center justify-between mb-6">
    <div>
      <h1 class="text-2xl font-semibold mb-1">Salles</h1>
      <p class="text-gray-500">Gérez vos espaces et salles</p>
    </div>
  <div class="flex gap-3">
    <button class="px-4 py-2 text-sm border rounded-lg !rounded-button flex items-center gap-2">
      <i class="ri-download-line"></i>
        Exporter
    </button>
    <a href="{{ route('admin.create') }}" class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button flex items-center gap-2">
    <i class="ri-add-line"></i>
      Nouvelle salle
    </a>
</div>
</div>
<div class="bg-white rounded-lg shadow-sm mb-6">
<div class="p-4 border-b">
<div class="flex gap-4">
<div class="flex-1">
<input type="text" placeholder="Rechercher une salle ..." class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
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
      <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Cards des salles -->
        @if($salles->isEmpty())
            <div class="d-flex  text-center align-items-center">
                <h1>Aucune salle ajouté</h1>
            </div>
          @else
          @foreach ($salles as $salle)
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
          <img src="{{ asset('storage/' . $salle->image) }}" alt="{{ $salle->name }}" class="w-full h-48 object-cover">
        <div class="p-4">
        <div class="flex items-center justify-between mb-2">
          <h3 class="font-semibold">{{ $salle->name }}</h3>
            <span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">Disponible</span>
        </div>
        <div class="text-sm text-gray-500 mb-4">
          <div class="flex items-center gap-2 mb-1">
            <i class="ri-user-line"></i>
            <span>Capacité: {{ $salle->capacity }} personnes</span>
          </div>
          <div class="flex items-center gap-2 mb-1">
            <i class="ri-map-pin-line"></i>
            <span>Emplacement: {{ $salle->location }}</span>
          </div>
          <div class="flex items-center gap-2">
            <i class="ri-money-euro-circle-line"></i>
          <span>{{ $salle->price_per_hour }}FCFA / heure</span>
        </div>
      </div>
      <div class="flex items-center gap-2">
        <a href="{{ route('admin.edit', $salle) }}" class="flex-3 px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button">Modifier</a>
        <form action="{{ route('admin.delete', $salle) }}" method="post">
          @csrf
          @method('delete')
            <button class="border rounded-lg flex items-center px-4 py-2 text-sm text-white justify-center bg-red-600 hover:bg-gray-50">
              <i class="ri-edit-line text-gray-500">Supprimer</i>
            </button>
      </div>
    </div>
    
</div>
@endforeach
@endif
</div>
</div>
</div>


    {{ $salles->links() }}



@endsection