@extends('layouts.app')

@section('main') 

<body class="bg-gray-50 min-h-screen">

<main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8 text-center">
<div class="w-20 h-20 bg-green-100 rounded-full mx-auto mb-6 flex items-center justify-center">
<i class="ri-check-line text-4xl text-green-500"></i>
</div>
<h2 class="text-3xl font-bold text-gray-900 mb-4">Réservation Confirmée !</h2>
<p class="text-gray-600 mb-8">Votre réservation a été effectuée avec succès. Un email de confirmation vous a été envoyé.</p>
<div class="bg-gray-50 rounded-lg p-6 mb-8">
<h3 class="text-lg font-semibold text-gray-900 mb-4">Détails de votre réservation</h3>
<div class="grid grid-cols-2 gap-4 text-left max-w-md mx-auto">
<div>
<p class="text-sm text-gray-600">Numéro de réservation</p>
<p class="text-sm font-medium text-gray-900">#GR2507</p>
</div>
<div>
<p class="text-sm text-gray-600">Salle</p>
<p class="text-sm font-medium text-gray-900">Salle de Conférence A</p>
</div>
<div>
<p class="text-sm text-gray-600">Date</p>
<p class="text-sm font-medium text-gray-900">15 Mars 2024</p>
</div>
<div>
<p class="text-sm text-gray-600">Horaires</p>
<p class="text-sm font-medium text-gray-900">09:00 - 17:00</p>
</div>
<div>
<p class="text-sm text-gray-600">Participants</p>
<p class="text-sm font-medium text-gray-900">25 personnes</p>
</div>
<div>
<p class="text-sm text-gray-600">Montant total</p>
<p class="text-sm font-medium text-primary">432€</p>
</div>
</div>
</div>
<div class="space-y-4">
<a href="#" class="inline-block bg-primary hover:bg-purple-800 text-white font-medium py-3 px-6 !rounded-button transition-colors whitespace-nowrap">
Voir mes réservations
</a>
<p class="text-sm text-gray-600">
Besoin d'aide ? <a href="#" class="text-primary hover:text-purple-800 font-medium">Contactez-nous</a>
</p>
</div>
</div>
</main>

</main>

@endsection