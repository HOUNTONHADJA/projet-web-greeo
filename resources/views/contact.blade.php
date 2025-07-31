@extends('layouts.app')

@section('main')
<!-- header -->

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animation">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Prêt à organiser votre prochain événement ? Notre équipe est à votre écoute pour vous accompagner dans la réalisation de vos projets
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="scroll-animation">
                    <form action="{{ route('contact.send') }}" method="post" id="contact-form" class="bg-white p-8 rounded-xl shadow-sm">
                        @if (session('success'))
                                <div class="mb-4 rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Affichage des erreurs --}}
                            @if ($errors->any())
                                <div class="mb-4 rounded-lg bg-red-100 border border-red-400 text-red-700 px-4 py-3">
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <div class=" mb-6">
                            <label for="firstname" class="block text-sm font-medium text-gray-700 mb-2">Nom et Prénom *</label>
                            <input type="text" id="firstname" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="Votre prénom">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Adresse email *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="votre@email.com">
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Sujet</label>
                            <input type="tel" id="phone" name="sujet" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="Votre numéro de téléphone">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" required rows="4" maxlength="500" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm" placeholder="Décrivez votre projet..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white py-3 !rounded-button hover:bg-opacity-90 transition-colors font-medium whitespace-nowrap flex items-center justify-center">
                            <span>Envoyer le message</span>
                            <i class="ri-send-plane-line ml-2"></i>
                        </button>
                    </form>
                </div>
                <div class="scroll-animation">
                    <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Informations de contact</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 rounded-lg mr-4">
                                    <i class="ri-map-pin-line text-primary"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Adresse</p>
                                    <p class="text-gray-600">Bénin, Cotonou</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 rounded-lg mr-4">
                                    <i class="ri-phone-line text-primary"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Téléphone</p>
                                    <p class="text-gray-600">+2290154541275</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 rounded-lg mr-4">
                                    <i class="ri-mail-line text-primary"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Email</p>
                                    <p class="text-gray-600">contact@greoo.fr</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 rounded-lg mr-4">
                                    <i class="ri-time-line text-primary"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Horaires</p>
                                    <p class="text-gray-600">Lun-Ven : 8h-20h | Sam : 9h-18h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-64 bg-gray-200 relative">
                            <img src="https://public.readdy.ai/gen_page/map_placeholder_1280x720.png" alt="Localisation Greoo" class="w-full h-full object-cover object-center">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-white p-4 rounded-lg shadow-lg">
                                    <div class="w-8 h-8 flex items-center justify-center bg-primary rounded-full mx-auto mb-2">
                                        <i class="ri-map-pin-fill text-white text-sm"></i>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">Greoo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- contact -->

@endsection