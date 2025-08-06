@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp

<section class="relative bg-gradient-to-br from-primary to-secondary py-16 overflow-hidden">
    <div class="absolute inset-0 bg-primary bg-opacity-70"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">Finaliser votre réservation</h1>
        <p class="text-xl text-white opacity-90 mb-8 max-w-3xl mx-auto">Remplissez vos informations pour compléter votre réservation.</p>
    </div>
</section>

<form  method="POST" action="{{ route('fedapay.process') }}" class="space-y-8">
                @csrf
                @if(session('error'))
    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
        {{ session('error') }}
    </div>
@endif
@if(isset($error))
                <div class="alert alert-danger">{{ $error }}</div>
            @endif

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Formulaire de paiement -->
        <div class="lg:col-span-2">
            
                {{-- <input type="hidden" name="salle_id" value="{{ $salle->id }}">
                <input type="hidden" name="date" value="{{ $date }}">
                <input type="hidden" name="duration" value="{{ $duration }}">
                <input type="hidden" name="total_price" value="{{ $salle->price_per_hour * $duration }}"> --}}

                <!-- Section informations personnelles -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                        <i class="ri-user-line text-primary mr-3"></i>
                        Informations personnelles
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet *</label>
                            <input type="text" name="full_name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Montant * </label>
                            <input type="text" name="amount" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Section détails de réservation -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                        <i class="ri-calendar-line text-primary mr-3"></i>
                        Détails de la réservation
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Heure de début *</label>
                            <input type="time" name="start_time" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Heure de fin *</label>
                            <input type="time" name="end_time" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Section paiement FedaPay -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    
                    <div id="card-errors" role="alert" class="text-red-500 text-sm mb-4"></div>
                    
                    <button type="submit"  class="w-full bg-primary hover:bg-purple-800 text-white font-medium py-4 px-6 rounded-lg transition-colors">
                        Payer
                        {{-- Payer {{ number_format($salle->price_per_hour * $duration, 0, ',', ' ') }} FCFA --}}
                    </button>
                </div>
            
        </div>

        <!-- Résumé de la réservation -->
        {{-- <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 sticky top-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Résumé de votre réservation</h3>
                
                <div class="space-y-4 mb-6">
                    <div class="flex justify-between items-start">
                        <span class="text-sm text-gray-600">Salle</span>
                        <span class="text-sm font-medium text-gray-900">{{ $salle->name }}</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <span class="text-sm text-gray-600">Date</span>
                        <span class="text-sm font-medium text-gray-900">{{ \Carbon\Carbon::parse($date)->translatedFormat('l d F Y') }}</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <span class="text-sm text-gray-600">Durée</span>
                        <span class="text-sm font-medium text-gray-900">{{ $duration }} heures</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <span class="text-sm text-gray-600">Capacité max</span>
                        <span class="text-sm font-medium text-gray-900">{{ $salle->capacity }} personnes</span>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-4 space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Tarif horaire</span>
                        <span class="text-sm text-gray-900">{{ number_format($salle->price_per_hour, 0, ',', ' ') }} FCFA/h</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Total ({{ $duration }}h)</span>
                        <span class="text-sm text-gray-900">{{ number_format($salle->price_per_hour * $duration, 0, ',', ' ') }} FCFA</span>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="ri-shield-check-line text-green-500 mr-2"></i>
                        <span>Paiement 100% sécurisé</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600 mt-2">
                        <i class="ri-time-line text-primary mr-2"></i>
                        <span>Annulation gratuite 24h avant</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
   
</main>
 </form>

@endsection

