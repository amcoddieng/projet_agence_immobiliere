@extends('welcome')

@section('title', 'Contactez-moi')

@section('content')
@if(session('success'))
<div class="bg-green-100 text-green-700 border border-green-300 p-4 rounded-lg mb-4 text-center">
    {{ session('success') }}
</div>
@endif
<div class="flex mt-3 mb-3 flex-col lg:flex-row max-w-7xl mx-auto p-6 bg-gray-50 rounded-lg shadow-lg gap-6">
    <!-- Texte principal -->
    <div class="lg:w-2/3">
      <h1 class="text-2xl font-bold text-blue-700 mb-4">
        Pourquoi confier la gestion de votre copropriété à <span class="text-blue-900">La Sénégalaise de l’Immobilier</span> ?
      </h1>
      <p class="text-gray-700 mb-6">
        Gérer une copropriété est une responsabilité qui requiert professionnalisme, expertise et transparence. 
        Forte de son expérience et de son capital de <span class="font-bold">10 millions de FCFA</span>, 
        <span class="text-blue-900 font-semibold">La Sénégalaise de l’Immobilier</span> s’engage à vous offrir un service irréprochable, assuré par une équipe qualifiée composée de juristes et de comptables.
      </p>
  
      <h2 class="text-xl font-semibold text-blue-700 mb-3">Vos avantages avec notre gestion</h2>
      <p class="text-gray-700 mb-6">
        Une copropriété bien gérée garantit des relations harmonieuses entre copropriétaires et préserve la valeur de votre patrimoine. 
        Nous proposons une gestion basée sur :
      </p>
      <ul class="list-disc pl-5 text-gray-700 mb-6 space-y-2">
        <li>Un contrat clair, conforme aux exigences légales.</li>
        <li>Une gestion financière rigoureuse avec un compte bancaire séparé pour chaque copropriété.</li>
        <li>Une distinction précise entre prestations incluses et prestations optionnelles.</li>
      </ul>
  
      <h2 class="text-xl font-semibold text-blue-700 mb-3">Nos services</h2>
      <ul class="list-disc pl-5 text-gray-700 space-y-2">
        <li>Entretien régulier et suivi des travaux de votre immeuble.</li>
        <li>Organisation des Assemblées Générales et exécution des décisions prises.</li>
        <li>Gestion financière et comptabilité transparente.</li>
        <li>Assistance juridique pour toute question liée à la copropriété.</li>
        <li>Relation personnalisée avec les membres du Conseil Syndical.</li>
      </ul>
  
      <p class="text-gray-700 mt-6">
        Confiez-nous la gestion de votre copropriété pour bénéficier d’une expertise éprouvée, d’une disponibilité constante et d’une valorisation de votre bien. 
        Notre responsabilité civile commerciale est assurée auprès de <span class="font-bold">AMSA Assurance</span>.
      </p>
    </div>
  
    <!-- Formulaire de contact -->
    <div class="lg:w-1/3 bg-white p-6 shadow-md rounded-lg">
      <h2 class="text-xl font-bold text-blue-700 mb-4">Contactez-nous</h2>
      <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
        {{-- <div>
          <label for="name" class="block text-gray-600 font-medium mb-1">Nom complet :</label>
          <input type="text" id="name" name="name" required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="email" class="block text-gray-600 font-medium mb-1">Adresse e-mail :</label>
          <input type="email" id="email" name="email" required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label for="phone" class="block text-gray-600 font-medium mb-1">Numéro de téléphone :</label>
          <input type="tel" id="phone" name="phone" required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="+221 XXX XXX XXX">
        </div>
        <div>
          <label for="message" class="block text-gray-600 font-medium mb-1">Message :</label>
          <textarea id="message" name="message" rows="4" required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button type="submit"
          class="w-full bg-blue-700 text-white font-semibold py-2 rounded-lg hover:bg-blue-800 transition">
          Envoyer
        </button> --}}


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
  </div>
  
@endsection
