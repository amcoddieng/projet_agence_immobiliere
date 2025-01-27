@extends('welcome')

@section('title', 'À Propos')

@section('content')

<!-- Section À Propos -->
<div class="container mx-auto p-6 bg-gray-100 mt-2">
    <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-6">À Propos</h2>
    <p class="text-center text-gray-600 mb-10">
        Découvrez qui nous sommes, ce que nous faisons, et pourquoi nous le faisons. Nous sommes là pour vous servir avec passion et engagement.
    </p>

    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <!-- Première section -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Notre Mission</h3>
            <p class="text-gray-700 leading-relaxed">
                Notre mission est de fournir des solutions de haute qualité adaptées aux besoins de nos clients. Nous nous engageons à promouvoir l'excellence, l'innovation, et la satisfaction dans tout ce que nous entreprenons.
            </p>
        </div>

        <!-- Deuxième section -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Nos Valeurs</h3>
            <ul class="list-disc pl-5 text-gray-700 leading-relaxed">
                <li>Intégrité et transparence dans toutes nos interactions.</li>
                <li>Engagement envers nos clients et partenaires.</li>
                <li>Innovation constante pour améliorer nos services.</li>
                <li>Respect des délais et des standards de qualité.</li>
            </ul>
        </div>

        <!-- Troisième section -->
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Notre Équipe</h3>
            <p class="text-gray-700 leading-relaxed">
                Composée de professionnels passionnés et expérimentés, notre équipe travaille main dans la main pour garantir des solutions adaptées et personnalisées. Nous croyons que le succès passe par le travail d'équipe et le respect mutuel.
            </p>
        </div>

        <!-- Section Contact rapide -->
        <div class="text-center">
            <a href="{{ route('app_contact') }}" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-all">
                Contactez-nous
            </a>
        </div>
    </div>
</div>

@endsection
