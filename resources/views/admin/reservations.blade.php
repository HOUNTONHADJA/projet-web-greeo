@extends('admin.layouts.app')

@section('main')

<div class="p-6 mt-16">
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-semibold mb-1">Réservations</h1>
<p class="text-gray-500">Gérez toutes les réservations de salles</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm border rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-download-line"></i>
Exporter
</button>
<button class="px-4 py-2 text-sm bg-primary text-white rounded-lg !rounded-button flex items-center gap-2">
<i class="ri-add-line"></i>
Nouvelle réservation
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
<th class="pb-4 font-medium text-gray-500">Client</th>
<th class="pb-4 font-medium text-gray-500">Salle</th>
<th class="pb-4 font-medium text-gray-500">Date</th>
<th class="pb-4 font-medium text-gray-500">Durée</th>
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
<div class="flex items-center gap-2">
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50 text-gray-500">
<i class="ri-arrow-left-s-line"></i>
</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center bg-primary text-white">1</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">2</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">3</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">4</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50">5</button>
<button class="w-8 h-8 rounded-lg border flex items-center justify-center hover:bg-gray-50 text-gray-500">
<i class="ri-arrow-right-s-line"></i>
</button>
</div>
</div>
</div>
</div>
<div class="bg-white p-6 rounded-lg shadow-sm">
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
<i class="ri-user-line text-xl"></i>
</div>
<div class="text-right">
<div class="text-2xl font-semibold">2,451</div>
<div class="text-sm text-gray-500">Utilisateurs</div>
</div>
</div>
<div class="text-sm text-green-500 flex items-center gap-1">
<i class="ri-arrow-up-line"></i>
<span>12% ce mois</span>
</div>
</div>
<div class="bg-white p-6 rounded-lg shadow-sm">
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
<i class="ri-calendar-line text-xl"></i>
</div>
<div class="text-right">
<div class="text-2xl font-semibold">847</div>
<div class="text-sm text-gray-500">Réservations</div>
</div>
</div>
<div class="text-sm text-green-500 flex items-center gap-1">
<i class="ri-arrow-up-line"></i>
<span>8% cette semaine</span>
</div>
</div>
<div class="bg-white p-6 rounded-lg shadow-sm">
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
<i class="ri-money-euro-circle-line text-xl"></i>
</div>
<div class="text-right">
<div class="text-2xl font-semibold">€24,550</div>
<div class="text-sm text-gray-500">Revenus</div>
</div>
</div>
<div class="text-sm text-red-500 flex items-center gap-1">
<i class="ri-arrow-down-line"></i>
<span>3% ce mois</span>
</div>
</div>
<div class="bg-white p-6 rounded-lg shadow-sm">
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary">
<i class="ri-building-line text-xl"></i>
</div>
<div class="text-right">
<div class="text-2xl font-semibold">156</div>
<div class="text-sm text-gray-500">Salles</div>
</div>
</div>
<div class="text-sm text-green-500 flex items-center gap-1">
<i class="ri-arrow-up-line"></i>
<span>5 nouvelles</span>
</div>
</div>
</div>
<div class="grid grid-cols-3 gap-6">
<div class="col-span-2 bg-white rounded-lg shadow-sm p-6">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-semibold">Réservations</h3>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 text-sm border rounded-lg !rounded-button">7 jours</button>
<button class="px-3 py-1.5 text-sm border rounded-lg !rounded-button bg-primary text-white">30 jours</button>
<button class="px-3 py-1.5 text-sm border rounded-lg !rounded-button">1 an</button>
</div>
</div>
<div id="reservationsChart" class="h-80"></div>
</div>
<div class="bg-white rounded-lg shadow-sm p-6">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-semibold">Types de réservation</h3>
</div>
<div id="reservationTypesChart" class="h-80"></div>
</div>
</div>
</div>

@endsection