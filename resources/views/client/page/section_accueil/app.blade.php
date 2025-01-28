<!-- Ajout des liens vers AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<div class="container mx-auto bg-white pt-6 pb-6 px-4 mb-3" data-aos="fade-up" data-aos-duration="500">
    <h2 class="text-2xl font-bold text-center mb-8 text-gray-900" data-aos="fade-up" data-aos-duration="1000">
        Actualités immobilières
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach ($app as $app)
        {{-- <!-- Carte app --> @dd($app) --}}
        <div class="bg-white border overflow-hidden shadow-md hover:shadow-lg hover:scale-105 transition-transform" data-aos="fade-up" data-aos-duration="500">
            <a href="{{route('admin.bien.show',['id' => $app->id])}}">
            {{-- <img src="{{ asset($app->image[0]) }}" alt="Actualité 1" class="object-cover w-full h-40">' --}}

            @if(!empty($app->images))


                    @php
                        $images = json_decode($app->images, true);
                    @endphp
                    @if (is_array($images) && count($images) > 0)
                        <img src="{{ asset('storage/'.$images[0]) }}" alt="Image de {{ $app->titre }}" class="object-cover w-full h-40">
                    @else
                        <p>Aucune image disponible.</p>
                    @endif

              @endif

             <div class="p-4">
                <h5 class="text-lg font-semibold mb-2 text-gray-800">{{ $app->titre }} a : {{ $app->adresse}} </h5>
                <p class="text-sm text-gray-600">Prix {{ $app->cycle }} : {{ $app->prix }}</p>
            </div>
            </a>
        </div>
        @endforeach

    </div>

    <!-- Bouton Voir Plus -->
    <div class="flex justify-left mt-8">
        <a href="{{route('allApp')}}">
            <button class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3  shadow-md transform transition-all duration-300 hover:scale-105 hover:bg-gradient-to-l hover:from-blue-600 hover:to-blue-500 hover:shadow-lg">
                Voir plus
            </button>
        </a>
    </div>
</div>

<!-- Ajout du script JavaScript pour AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
