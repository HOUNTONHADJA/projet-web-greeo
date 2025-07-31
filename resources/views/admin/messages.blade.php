@extends('admin.layouts.app')

@section('main') <!-- Messages Section -->

    <div class="p-6 mt-16">
    <div class="flex items-center justify-between mb-6">
        <div>
        <h1 class="text-2xl font-semibold mb-1">Messages & Contact</h1>
        <p class="text-gray-500">Gérez les sujets de la clientelle</p>
        </div>
    </div>
        <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
            <div class="divide-y divide-gray-200">
                @if($messages->isEmpty())
                    <div class="d-flex  text-center align-items-center">
                        <h1>Aucun message</h1>
                    </div>
                @else
                    @foreach ($messages as $message)
                        <div class="p-6 hover:bg-gray-50 cursor-pointer">
                            <div class="flex items-start gap-4">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center gap-3">
                                            <h3 class="text-sm font-medium text-gray-800">{{ $message->name }}</h3>
                                        </div>
                                        <span class="text-xs text-gray-500">Il y a 2 heures</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">{{ $message->sujet }}</p>
                                    <p class="text-sm text-gray-500">{{ $message->message }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>

@endsection