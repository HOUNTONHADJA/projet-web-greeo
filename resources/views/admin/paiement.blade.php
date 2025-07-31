@extends('admin.layouts.app')

@section('main')

<div class="p-6 mt-16">
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-semibold mb-1">Paiements</h1>
<p class="text-gray-500">Gérez vos transactions et factures</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm border rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-download-line"></i>
Exporter
</button>
<button class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-add-line"></i>
Nouvelle facture
</button>
</div>
</div>

<div class="bg-white rounded-lg shadow-sm mb-6">
<div class="p-4 border-b">
<div class="flex gap-4">
<div class="flex-1">
<input type="text" placeholder="Rechercher une réservation..." class="w-full px-4 py-2 rounded-lg bg-gray-50 border-none text-sm">
</div>
<button class="px-4 py-2 border rounded-lg !rounded-button flex items-center gap-2 bg-gray-50">
<i class="ri-filter-3-line"></i>
Filtres
</button>
<button class="px-4 py-2 border rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-calendar-line"></i>
25 Juil - 31 Juil
</button>
</div>
</div>
<div class="p-4">
<div class="overflow-x-auto">
<table class="w-full">
<thead class="text-left">
<tr class="border-b">
<th class="pb-4 font-medium text-gray-500">Transaction ID</th>
<th class="pb-4 font-medium text-gray-500">Client</th>
<th class="pb-4 font-medium text-gray-500">Date</th>
<th class="pb-4 font-medium text-gray-500">Méthode</th>
<th class="pb-4 font-medium text-gray-500">Montant</th>
<th class="pb-4 font-medium text-gray-500">Statut</th>
<th class="pb-4 font-medium text-gray-500">Actions</th>
</tr>
</thead>
<tbody>
<tr class="border-b">
<td class="py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-primary">MT</div>
<div>
<div class="font-medium">Marine Thierry</div>
<div class="text-sm text-gray-500">marine@email.com</div>
</div>
</div>
</td>
<td class="py-4">Salle Conférence A</td>
<td class="py-4">25 Juillet 2025</td>
<td class="py-4">14:00 - 17:00</td>
<td class="py-4">€350</td>
<td class="py-4">
<span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">Confirmée</span>
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
<tr class="border-b">
<td class="py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-700">LB</div>
<div>
<div class="font-medium">Lucas Bernard</div>
<div class="text-sm text-gray-500">lucas@email.com</div>
</div>
</div>
</td>
<td class="py-4">Salle Formation B</td>
<td class="py-4">26 Juillet 2025</td>
<td class="py-4">09:00 - 18:00</td>
<td class="py-4">€750</td>
<td class="py-4">
<span class="px-2 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">En attente</span>
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
<tr class="border-b">
<td class="py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-700">SD</div>
<div>
<div class="font-medium">Sophie Dubois</div>
<div class="text-sm text-gray-500">sophie@email.com</div>
</div>
</div>
</td>
<td class="py-4">Salle Réunion C</td>
<td class="py-4">26 Juillet 2025</td>
<td class="py-4">13:00 - 15:00</td>
<td class="py-4">€200</td>
<td class="py-4">
<span class="px-2 py-1 text-sm rounded-full bg-red-100 text-red-800">Annulée</span>
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
<tr class="border-b">
<td class="py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-700">AM</div>
<div>
<div class="font-medium">Antoine Martin</div>
<div class="text-sm text-gray-500">antoine@email.com</div>
</div>
</div>
</td>
<td class="py-4">Salle Séminaire D</td>
<td class="py-4">27 Juillet 2025</td>
<td class="py-4">10:00 - 16:00</td>
<td class="py-4">€500</td>
<td class="py-4">
<span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">Confirmée</span>
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
</tbody>
</table>
</div>
<div class="flex items-center justify-between mt-4">
<div class="text-sm text-gray-500">
Affichage de 1 à 4 sur 256 réservations
</div>
@endsection