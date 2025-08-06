
@extends('admin.layouts.app')

@section('main')

            
<div class="p-6 mt-20 max-w-4xl mx-auto">
  <div class="bg-white shadow rounded-2xl p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
      <i class="ri-building-line text-primary text-2xl"></i>
      Ajouter une nouvelle salle
    </h2>

    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-4 mb-4 rounded-lg">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @csrf

      <!-- Nom de la salle -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nom de la salle</label>
        <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" required>
      </div>

      <!-- Emplacement -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Emplacement</label>
        <input type="text" name="location" min="1" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" required>
      </div>

       <!-- Prix -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Prix (FCFA/heure)</label>
        <input type="number" name="price_per_hour" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" required>
      </div>

      <!-- Type de salle -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nombres de personnes</label>
        <input type="number" name="capacity" step="0.01" min="0" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" required>
      </div>

      <!-- Description -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm"></textarea>
      </div>

      <!-- Image -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Image de la salle</label>
        <input type="file" name="image" accept="image/png, image/jpeg, image/jpg, image/webp"  class="w-full border border-dashed border-gray-300 p-3 rounded-lg focus:ring-primary focus:border-primary">
      </div>

      <!-- Bouton -->
      <div class="md:col-span-2 text-right">
        <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition">
          <i class="ri-check-line mr-1"></i> Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
