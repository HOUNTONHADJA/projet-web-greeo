@extends('events.app')

@section('main')
        <div class=" p-6 ">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Événements</h2>
                <div class="flex gap-3">
                    <a href="{{ route('events.create') }}" class="px-4 py-2 bg-primary text-white rounded-lg text-sm hover:bg-purple-600 !rounded-button whitespace-nowrap">
                        <i class="ri-calendar-event-line mr-2"></i>Nouvel événement
                    </a>
                </div>
            </div>
        <div id="rooms-content" class="venue-content">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if($events->isEmpty())
                        <div class="d-flex  text-center align-items-center">
                            <h1>Aucun évènement ajouté</h1>
                        </div>
                    @else
                        @foreach ($events as $event)
                <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover object-top">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $event->title }}</h3>
                        </div>
                        <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                     @if (!empty($event->meeting_link))
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-group-line"></i>
                                        </div>
                                        <span>
                                            <a href="{{ $event->meeting_link }}" target="_blank">{{ $event->meeting_link }}</a>
                                        </span>
                                    @else
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-group-line"></i>
                                    </div>
                                    <span>
                                        {{ $event->address }}
                                    </span>
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-group-line"></i>
                                    </div>
                                    <span>
                                        {{ $event->location_name }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        <div class="flex items-center justify-between">
                                <div class="flex gap-2">
                                    <a href="{{ route('events.edit', $event) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded">
                                        <i class="ri-edit-line"></i>
                                        Modifier
                                    </a>
                                    <form action="{{ route('events.delete', $events) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="p-2 text-red-600 hover:bg-red-50 rounded">
                                            <i class="ri-delete-bin-line"></i> 
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
                    @endif
            </div>
            </div>
        </div> 


@endsection
