@extends('layouts.app')

@section('main')
 <!-- Breadcrumb -->
        <div class="bg-gray-50 border-b">
            <div class="max-w-7xl mx-auto px-8 py-3">
                <div class="flex items-center space-x-2 text-sm">
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Salles</a>
                    <div class="w-4 h-4 flex items-center justify-center text-gray-400">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <span class="text-gray-900">{{ $salles->name }}</span>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Left Column - Images and Details -->
                <div class="lg:col-span-2">
                    <!-- Image Gallery -->
                    <div class="relative rounded-lg overflow-hidden mb-8">
                        <img src="{{ asset('storage/' . $salles->image) }}" alt="{{ $salles->name }}" class="w-full h-[500px] object-cover object-top">
                        <button class="absolute top-4 right-4 w-10 h-10 bg-white bg-opacity-90 rounded-full flex items-center justify-center hover:bg-white transition-colors cursor-pointer">
                        </button>
                    </div>
                    <!-- Details -->
                    <div class="space-y-8">
                        <div>
                            <h1 class="text-3xl font-bold mb-4">{{ $salles->name }}</h1>
                            <p class="text-gray-600">{{ $salles->description }}</p>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold mb-4">Caractéristiques</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center">
                                        <i class="ri-group-line text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="font-medium">Capacité</div>
                                        <div class="text-gray-600">{{ $salles->capacity }} personnes</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center">
                                        <i class="ri-layout-line text-primary"></i>
                                    </div>
                                    <div>
                                        <div class="font-medium">Emplacement</div>
                                        <div class="text-gray-600">{{ $salles->location }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold mb-4">Équipements</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-wifi-line"></i>
                                    </div>
                                    <span>WiFi haut débit</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-projector-line"></i>
                                    </div>
                                    <span>Vidéoprojecteur 4K</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-computer-line"></i>
                                    </div>
                                    <span>Écran interactif</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-mic-line"></i>
                                    </div>
                                    <span>Système audio</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-camera-line"></i>
                                    </div>
                                    <span>Visioconférence</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-temp-cold-line"></i>
                                    </div>
                                    <span>Climatisation</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-parking-line"></i>
                                    </div>
                                    <span>Parking privé</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                                        <i class="ri-restaurant-line"></i>
                                    </div>
                                    <span>Service traiteur</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold mb-4">Avis clients</h2>
                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-user-line text-gray-600"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <div class="font-medium">Gévanny SEDO</div>
                                            <div class="flex items-center text-yellow-400">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 mb-2">Excellente salle pour nos réunions du conseil d'administration. Les équipements sont de première qualité et le service est impeccable.</p>
                                        <div class="text-sm text-gray-500">Il y a 2 semaines</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-user-line text-gray-600"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <div class="font-medium">Israel Oriadé</div>
                                            <div class="flex items-center text-yellow-400">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line"></i>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 mb-2">Très bonne expérience globale. La salle est spacieuse et bien équipée. Seul petit bémol : le wifi était un peu lent pendant notre séminaire.</p>
                                        <div class="text-sm text-gray-500">Il y a 1 mois</div>
                                    </div>
                                </div>
                                <button class="text-primary hover:text-purple-800 transition-colors font-medium">
                                    Voir tous les avis
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column - Booking -->
                <div class="lg:col-span-1">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <span class="text-3xl font-bold text-primary">{{ $salles->price_per_hour }} FCFA</span>
                                    <span class="text-gray-600">/heure</span>
                                </div>
                            </div>
                            <form id="booking-form" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Date</label>
                                    <input type="date" name="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Heure de début</label>
                                    <select name="start_time" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent pr-8" required>
                                        <option value="">Sélectionnez une heure</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Durée</label>
                                    <select name="duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent pr-8" required>
                                        <option value="">Sélectionnez la durée</option>
                                        <option>1 heure</option>
                                        <option>2 heures</option>
                                        <option>3 heures</option>
                                        <option>4 heures</option>
                                        <option>Journée complète</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Nombre de participants</label>
                                    <input type="number" name="participants" min="1" max="50" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Nombre de participants" required>
                                </div>
                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-primary text-white py-3 !rounded-button font-medium hover:bg-purple-800 transition-colors">
                                        Réserver maintenant
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <h3 class="font-semibold mb-4">Besoin d'aide ?</h3>
                            <div class="space-y-4">
                                <button class="w-full flex items-center justify-center space-x-2 border border-gray-300 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-customer-service-line"></i>
                                    </div>
                                    <span>Contacter le support</span>
                                </button>
                                <button class="w-full flex items-center justify-center space-x-2 border border-gray-300 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <span>Appeler l'établissement</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        
        <!-- Similar Rooms -->
        <section class="bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-8">
                <h2 class="text-2xl font-bold mb-8">Salles similaires</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Similar Room 1 -->
                    @foreach ($sallesSimilaires as $salle)
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $salle->image) }}" alt="{{ $salle->name }}" class="w-full h-48 object-cover object-top">
                            <div class="absolute top-4 right-4">
                                @if ($salle->available)
                                        <span class="bg-primary text-white text-xs px-2 py-1 rounded-full font-medium">Disponible</span>
                                    @else
                                        <span class="bg-green-100 text-red-600 text-xs px-2 py-1 rounded-full font-medium">Réservé</span>
                                    @endif
                                
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-2">
                                <a href="{{ route('showSalles',[
                                        'salles' => $salle->id,
                                        'slug' => $salle->slug,
                                    ]) }}">
                                    <h3 class="font-semibold text-lg">{{ $salle->name }}</h3>
                                </a>   
                            </div>
                            <p class="text-gray-600 text-sm mb-3">{{ $salle->location }}</p>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-4">
                                <span class="flex items-center space-x-1">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-group-line"></i>
                                    </div>
                                    <span>{{ $salle->capacity }} personnes</span>
                                </span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-2xl font-bold text-primary">{{ $salle->price_per_hour }} FCFA</span>
                                    <span class="text-gray-600 text-sm">/heure</span>
                                </div>
                                <button class="bg-primary text-white px-4 py-2 !rounded-button font-medium whitespace-nowrap hover:bg-purple-800 transition-colors cursor-pointer">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    

@endsection