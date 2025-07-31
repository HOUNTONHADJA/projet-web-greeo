
@extends('admin.layouts.app')

@section('main')

<div class="p-6 mt-16">
  <div class="flex items-center justify-between mb-6">
    <div>
      <h1 class="text-2xl font-semibold mb-1">Utilisateurs</h1>
      <p class="text-gray-500">Gérez les utilisateurs du système</p>
      </div>
      <div class="flex gap-3">
      <button class="px-4 py-2 text-sm border rounded-lg !rounded-button flex items-center gap-2">
      <i class="ri-download-line"></i>
      Exporter
      </button>
      <button class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button flex items-center gap-2">
      <i class="ri-user-add-line"></i>
      Nouvel utilisateur
      </button>
    </div>
  </div>
  <div class="bg-white rounded-lg shadow-sm mb-6">
    <div class="p-4 border-b">
      <div class="flex gap-4">
        <div class="flex-1">
          <input type="text" placeholder="Rechercher un utilisateur..." class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
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
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="text-left">
          <tr class="border-b">
            <th class="pb-4 font-medium text-gray-500">Utilisateur</th>
            <th class="pb-4 font-medium text-gray-500">Email</th>
            <th class="pb-4 font-medium text-gray-500">Rôle</th>
            <th class="pb-4 font-medium text-gray-500">Date d'inscription</th>
            <th class="pb-4 font-medium text-gray-500">Réservations</th>
            <th class="pb-4 font-medium text-gray-500">Statut</th>
            <th class="pb-4 font-medium text-gray-500">Actions</th>
          </tr>
    </thead>
        <tbody>
          @if($users->isEmpty())
            <div class="d-flex  text-center align-items-center">
                <h1>Aucun utilisateur ajouté</h1>
            </div>
          @else
          @foreach ($users as $user)
              <tr class="border-b">
            <td class="py-4">
            <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700">JD</div>
            <div>
            <div class="font-medium">{{ $user->name }}</div>
            <div class="text-sm text-gray-500">Entreprise ABC</div>
            </div>
            </div>
            </td>
            <td class="py-4">{{ $user->email }}</td>
            <td class="py-4">
            <span class="px-2 py-1 text-sm rounded-full bg-primary/10 text-primary">Client</span>
            </td>
            <td class="py-4">{{ \Carbon\Carbon::parse($user->created_at)->translatedFormat('d F Y') }}</td>
            <td class="py-4">24 réservations</td>
            <td class="py-4">
            <span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">Actif</span>
            </td>
            <td class="py-4">
            <div class="flex items-center gap-2">
            <button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">
            <i class="ri-eye-line text-gray-500"></i>
            </button>
            <button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">
            <i class="ri-edit-line text-gray-500"></i>
            </button>
            <button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">
            <i class="ri-more-line text-gray-500"></i>
            </button>
            </div>
            </td>
          </tr>
          @endforeach
          @endif
    </tbody>
    </table>
    </div>
    
    </div>
  
    {{ $users->links() }}



@endsection