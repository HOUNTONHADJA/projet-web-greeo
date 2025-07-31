@extends('layouts.app')

@section('main')
@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp

 <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Réservation de Salle</h2>
            <p class="text-gray-600">Complétez votre réservation en quelques étapes simples</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <form class="space-y-8">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-user-line text-primary"></i>
                            </div>
                            Informations personnelles
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Prénom *</label>
                                <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nom *</label>
                                <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone *</label>
                                <input type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-calendar-line text-primary"></i>
                            </div>
                            Détails de la réservation
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Type de salle *</label>
                                <div class="relative">
                                    <button type="button" class="w-full px-4 py-3 border border-gray-300 rounded-md bg-white text-left focus:ring-2 focus:ring-primary focus:border-transparent text-sm flex items-center justify-between">
                                        <span>Sélectionner une salle</span>
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nombre de personnes *</label>
                                <input type="number" min="1" max="50" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Date de réservation *</label>
                                <input type="date" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Heure de début *</label>
                                    <input type="time" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Heure de fin *</label>
                                    <input type="time" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Commentaires ou besoins spéciaux</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="Décrivez vos besoins particuliers..."></textarea>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 flex items-center">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-bank-card-line text-primary"></i>
                            </div>
                            Informations de paiement
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-4">Mode de paiement</label>
                                <div class="space-y-3">
                                    <label class="flex items-center p-4 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment" value="card" class="sr-only">
                                        <div class="w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center mr-4">
                                            <div class="w-2.5 h-2.5 rounded-full bg-primary hidden"></div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                                <i class="ri-bank-card-line text-gray-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">Carte bancaire</span>
                                        </div>
                                    </label>
                                    <label class="flex items-center p-4 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment" value="paypal" class="sr-only">
                                        <div class="w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center mr-4">
                                            <div class="w-2.5 h-2.5 rounded-full bg-primary hidden"></div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                                <i class="ri-paypal-fill text-blue-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-gray-900">PayPal</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div id="card-details" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Numéro de carte *</label>
                                    <input type="text" placeholder="1234 5678 9012 3456" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Date d'expiration *</label>
                                        <input type="text" placeholder="MM/AA" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Code CVV *</label>
                                        <input type="text" placeholder="123" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nom sur la carte *</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 sticky top-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Résumé de votre réservation</h3>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Salle</span>
                            <span class="text-sm font-medium text-gray-900">Salle de Conférence A</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Date</span>
                            <span class="text-sm font-medium text-gray-900">15 Mars 2024</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Horaires</span>
                            <span class="text-sm font-medium text-gray-900">09:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Durée</span>
                            <span class="text-sm font-medium text-gray-900">8 heures</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-sm text-gray-600">Participants</span>
                            <span class="text-sm font-medium text-gray-900">25 personnes</span>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-4 space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Tarif horaire</span>
                            <span class="text-sm text-gray-900">45€/h</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Sous-total (8h)</span>
                            <span class="text-sm text-gray-900">360€</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">TVA (20%)</span>
                            <span class="text-sm text-gray-900">72€</span>
                        </div>
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-semibold text-gray-900">Total</span>
                                <span class="text-2xl font-bold text-primary">432€</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <button type="submit" class="w-full bg-primary hover:bg-purple-800 text-white font-medium py-4 px-6 !rounded-button transition-colors whitespace-nowrap">
                            Confirmer la réservation
                        </button>
                        <p class="text-xs text-gray-500 text-center">
                            En confirmant, vous acceptez nos conditions générales d'utilisation et notre politique de confidentialité.
                        </p>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-600">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-shield-check-line text-green-500"></i>
                            </div>
                            <span>Paiement sécurisé SSL</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mt-2">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-time-line text-primary"></i>
                            </div>
                            <span>Annulation gratuite 24h avant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection