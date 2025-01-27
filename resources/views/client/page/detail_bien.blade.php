@extends('welcome')

@section('title', 'Détails de la propriété')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto bg-white my-4 px-6 py-8 shadow-lg rounded-lg">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">{{ $bien->titre }}</h1>
    @if(session('success'))
    <div class="bg-green-100 text-green-700 border border-green-300 p-4 rounded-lg mb-4 text-center">
        {{ session('success') }}
    </div>
    @endif
    <div class="flex flex-wrap md:flex-nowrap gap-6">
        <!-- Section Carousel -->
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <div id="carouselPropriete" class="relative">
                <!-- Image principale -->
                <div class="main-image mb-4">
                    <img id="mainImage" src="{{ asset('storage/' . json_decode($bien->images)[0]) }}" 
                    class="d-block w-full h-80 rounded-lg object-cover shadow-md" 
                    alt="Image principale de la propriété">
                </div>

                <!-- Miniatures -->
                <div class="flex space-x-4 overflow-x-auto mt-2" style="scroll-behavior: smooth;">
                    @foreach (json_decode($bien->images) as $index => $image)
                        <div class="thumbnail relative cursor-pointer">
                            <img src="{{ asset('storage/' . $image) }}" class="w-24 h-24 object-cover rounded-md transition-transform transform hover:scale-105" alt="Image de la propriété" onmouseover="hoverImage('{{ asset('storage/' . $image) }}')">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Section Description -->
        
        <!-- Section Description -->
<div class="w-full md:w-1/2">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Description</h3>
    <p class="text-gray-600 mb-6 leading-relaxed">{{ $bien->description }}</p>

    <div class="space-y-4">
        <div class="flex items-center">
            <span class="font-semibold text-gray-700">Type :</span> 
            <span class="text-gray-600">{{ $bien->type }}</span>
        </div>
        <div class="flex items-center">
            <span class="font-semibold text-gray-700">Pièces :</span> 
            <span class="text-gray-600">{{ $bien->pieces }}</span>
        </div>
        <div class="flex items-center">
            <span class="font-semibold text-gray-700">Salon :</span> 
            <span class="text-gray-600">{{ $bien->salon }}</span>
        </div>
        <div class="flex items-center">
            <span class="font-semibold text-gray-700">Prix :</span> 
            <span class="text-gray-600">{{ number_format($bien->prix, 0, ',', ' ') }} FCFA ({{ $bien->cycle }})</span>
        </div>
        
        <!-- Région, Département et Adresse sur la même ligne sans espacement -->
        <div class="flex justify-between">
            <div class="flex-1">
                <span class="font-semibold text-gray-700">Région :</span>
                <span class="text-gray-600">{{ $bien->region }}</span>
            </div>
            <div class="flex-1">
                <span class="font-semibold text-gray-700">Département :</span>
                <span class="text-gray-600">{{ $bien->departement }}</span>
            </div>
            <div class="flex-1">
                <span class="font-semibold text-gray-700">Adresse :</span>
                <span class="text-gray-600">{{ $bien->adresse }}</span>
            </div>
        </div>
        
        <div class="flex items-center">
            <span class="font-semibold text-gray-700">Disponibilité :</span> 
            <span class="text-gray-600">{{ $bien->disponible ? 'Oui' : 'Non' }}</span>
        </div>
    </div>

    <!-- Bouton de réservation -->
    <div class="mt-6">
        <button id="openModalButton" class="w-full bg-green-500 text-white py-2 px-6 rounded-full hover:bg-green-600 transition">
            Réserver maintenant
        </button>
    </div>
</div>

    </div>

    <!-- Modal Popup -->
    <div id="reservationModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50 hidden opacity-0 transform scale-95 transition-all duration-300">
        <div class="bg-white rounded-lg p-8 w-96 transition-all duration-300">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Formulaire de Réservation</h3>
            <form action="{{ route('reservation.store') }}" method="POST">
                @csrf
                <input type="hidden" name="bien_id" value="{{ $bien->id }}">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Téléphone</label>
                    <input type="text" id="phone" name="telephone" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" class="w-full p-2 border border-gray-300 rounded-md" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-full hover:bg-blue-600 transition">Soumettre</button>
            </form>
            <button id="closeModalButton" class="mt-4 text-red-500 hover:text-red-700">Fermer</button>
        </div>
    </div>
</div>

<script>
    // Ouvrir le modal
    document.getElementById('openModalButton').addEventListener('click', function() {
        const modal = document.getElementById('reservationModal');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0', 'scale-95');
        }, 10); // Légère temporisation pour garantir que la transition commence après l'ajout des classes
    });

    // Fermer le modal
    document.getElementById('closeModalButton').addEventListener('click', function() {
        const modal = document.getElementById('reservationModal');
        modal.classList.add('opacity-0', 'scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Attendre que la transition se termine avant de masquer le modal
    });

    // Fermer le modal lorsqu'on clique en dehors
    document.getElementById('reservationModal').addEventListener('click', function(event) {
        if (event.target === this) {
            document.getElementById('closeModalButton').click();
        }
    });
</script>
@endsection
