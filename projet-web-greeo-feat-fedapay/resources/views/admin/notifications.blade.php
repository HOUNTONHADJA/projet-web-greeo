@extends('admin.layouts.app')

@section('main')
@php
    $unreadCount = auth()->check() ? auth()->user()->unreadNotifications->count() : 0;
@endphp

<div class="p-6 mt-16">
    <div class="flex items-center justify-between mb-6">
        <div>
        <h1 class="text-2xl font-semibold mb-1">Notifications</h1>
        <p class="text-gray-500">Etre au courant de tout ce qui se passe</p>
        </div>
        <div class="flex gap-3">
            <button class="px-4 py-2 border  bg-primary text-white rounded-lg text-sm hover:bg-purple-700 !rounded-button whitespace-nowrap">
                <i class="ri-check-double-line mr-2"></i>Marquer tout comme lu
            </button>
</div>
    </div>

            <div class="space-y-4">
                
                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="ri-calendar-check-line text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-sm font-medium text-gray-800">Nouvelle réservation</h3>
                                <span class="text-xs text-gray-500">Il y a 5 minutes</span>
                            </div>
                            <p class="text-sm text-gray-600">Marie Dubois a réservé la Salle de conférence A pour le 28 janvier 2024</p>
                        </div>
                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    </div>
                </div>
                @foreach ($notifications as $notification)
    <div class="bg-white rounded-xl shadow-sm border p-6">
        @if ($notification->type === 'App\Notifications\NewUserNotification')
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="ri-user-add-line text-blue-600"></i>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-sm font-medium text-gray-800">Nouvel utilisateur</h3>
                        <span class="text-xs text-gray-500">{{ $notification->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-sm text-gray-600">{{ $notification->data['message'] }}</p>
                </div>
            </div>
        @endif
    </div>
@endforeach


                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class="ri-money-dollar-circle-line text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-sm font-medium text-gray-800">Paiement reçu</h3>
                                <span class="text-xs text-gray-500">Il y a 18 minutes</span>
                            </div>
                            <p class="text-sm text-gray-600">Paiement de €250 reçu pour la réservation #R-2024-001</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="ri-calendar-event-line text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-sm font-medium text-gray-800">Nouvel événement</h3>
                                <span class="text-xs text-gray-500">Il y a 25 minutes</span>
                            </div>
                            <p class="text-sm text-gray-600">L'événement "Conférence Tech 2024" a été publié par TechCorp Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  @endsection
