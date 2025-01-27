@extends('welcome')

@section('title', 'Contactez-moi')

@section('content')


<!-- Formulaire Contactez-moi -->
<div class="container mx-auto p-6 bg-gray-100 mt-2">
    @if(session('success'))
    <div class="bg-green-100 text-green-700 border border-green-300 p-4 rounded-lg mb-4 text-center">
        {{ session('success') }}
    </div>
@endif

    <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-6">Contactez-nous</h2>
    <p class="text-center text-gray-600 mb-10">Remplissez le formulaire ci-dessous et nous vous répondront dès que possible.</p>

    <form action="{{ route('contact.store') }}" method="POST" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <!-- Champ Nom -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Votre nom</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Champ Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-2">Votre email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre adresse email"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Champ Téléphone -->
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-medium mb-2">Votre numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Champ Sujet -->
        <div class="mb-4">
            <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
            <input type="text" id="subject" name="subject" placeholder="Entrez le sujet de votre message"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Champ Message -->
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Écrivez votre message ici"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        </div>

        <!-- Bouton Envoyer -->
        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-all">
                Envoyer
            </button>
        </div>
    </form>
</div>

@endsection
