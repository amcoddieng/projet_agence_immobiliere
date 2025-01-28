@extends('welcome')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Liste des Appartements Disponibles</h1>

    {{-- @dd($bien) --}}
    @if($bien->count())
        <div class="grid grid-cols-1 gap-8">
            @foreach($bien as $item)
                <div class="bg-white border-t duration-300 flex items-center p-4">
                    {{-- Vérification de l'existence de l'image --}}
                    @php
                        $images = json_decode($item->images, true);
                    @endphp
                    <div class="w-1/4">
                        @if (is_array($images) && count($images) > 0)
                            <img src="{{ asset('storage/'.$images[0]) }}" alt="Image de {{ $item->titre }}" class="">
                        @else
                            <div class="bg-gray-200 h-full flex items-center justify-center rounded-lg">
                                <p class="text-gray-500">Aucune image disponible</p>
                            </div>
                        @endif
                    </div>

                    <div class="w-2/3 pl-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->titre }}</h2>
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <span class="text-sm text-gray-500">Prix :</span>
                                <span class="text-lg font-bold text-gray-800">{{ number_format($item->prix, 0, ',', ' ') }} CFA </span>
                                <span class="text-sm text-gray-500"> {{$item->cycle}} </span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <span class="text-sm text-gray-500">Adresse :</span>
                            <span class="text-gray-700">{{ $item->adresse }}</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Description : {{ Str::limit($item->description, 100) }}</p>
                        <div>
                            {{-- Lien pour voir les détails --}}
                            <a href="{{route('admin.bien.show',['id' => $item->id])}}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Voir les détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{-- Pagination --}}
            {{ $bien->links('pagination::tailwind') }}
        </div>
    @else
        <p class="text-center text-gray-500">Aucun appartement disponible pour le moment.</p>
    @endif
</div>

@endsection
