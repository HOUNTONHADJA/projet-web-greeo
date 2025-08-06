@extends('events.app')

@section('main')

<div class="p-6 mt-2 ">
  <div class="bg-white shadow rounded-2xl p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
      <i class="ri-calendar-line text-primary text-2xl"></i>
      Ajouter un nouvel évènement
    </h2>

    @if (session('success'))
      <div class="bg-green-100 text-green-700 p-4 mb-4 rounded-lg">
        {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-4 mb-4 rounded-lg">
        <ul class="list-disc list-inside text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @csrf

      <!-- Checkbox -->
      <div class="md:col-span-2 flex items-center">
        <input type="checkbox" id="isOnline" name="is_online" class="w-4 h-4 text-primary rounded focus:ring-primary border-gray-300">
        <label for="isOnline" class="ml-2 text-sm font-medium text-gray-700">Cet évènement se déroule en ligne</label>
      </div>

      <!-- Titre et Date -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Titre de l'évènement</label>
        <input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" placeholder="Titre de l'évènement">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Date de l'évènement</label>
        <input type="datetime-local" name="date_event" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md">
      </div>

      <!-- Zone physique -->
      <div id="physicalFields">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-1">Lieu de l'évènement</label>
          <input type="text" name="location_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" placeholder="Ex : Palais des Congrès">
        </div>

        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-1">Ville</label>
          <input type="text" name="address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" placeholder="Rue, quartier...">
        </div>
      </div>

      <!-- Zone en ligne (cachée par défaut) -->
      <div id="onlineFields" class="hidden md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Lien Zoom ou autre plateforme</label>
        <input type="url" name="meeting_link" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-md" placeholder="https://zoom.us/mon-lien">
      </div>

      <!-- Image -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
        <input type="file" name="image" class="w-full border border-dashed border-gray-300 p-3 rounded-lg focus:ring-primary focus:border-primary">
      </div>

      <!-- Description -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="Description"></textarea>
      </div>

      <!-- Bouton -->
      <div class="md:col-span-2 text-right">
        <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
          <i class="ri-add-line mr-1"></i> Ajouter
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  const isOnlineCheckbox = document.getElementById('isOnline');
  const onlineFields = document.getElementById('onlineFields');
  const physicalFields = document.getElementById('physicalFields');

  isOnlineCheckbox.addEventListener('change', function () {
    if (this.checked) {
      onlineFields.classList.remove('hidden');
      physicalFields.classList.add('hidden');
    } else {
      onlineFields.classList.add('hidden');
      physicalFields.classList.remove('hidden');
    }
  });
</script>




@endsection