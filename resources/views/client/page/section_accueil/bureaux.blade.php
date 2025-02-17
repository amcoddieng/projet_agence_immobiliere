<!-- Ajout des liens vers AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<div class="max-w-7xl mx-auto px-4 py-5" data-aos="fade-up" data-aos-duration="500">
    <h2 class="text-2xl font-bold text-center mb-8 text-gray-900" data-aos="fade-up" data-aos-duration="1000">
Visitez nos BUREAUX
    </h2>

    <!-- Grille des cartes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($villa as $b)
        <!-- Card pour chaque villa -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden group">
            <a href="{{route('admin.bien.show',['id' => $b->id])}}">
            <div class="relative">
                @if(!empty($b->images))


                @php
                    $images = json_decode($b->images, true);
                @endphp
                @if (is_array($images) && count($images) > 0)
                    <img src="{{ asset('storage/'.$images[0]) }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                @else
                    <p>Aucune image disponible.</p>
                @endif

          @endif

                <button class="absolute top-4 right-4 bg-white p-2 rounded-full shadow-md hover:bg-gray-100">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>

            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold">{{ $b->titre }}</h3>
                    <p class="text-blue-600 font-bold">{{ number_format($b->prix, 0, ',', ' ') }} €</p>
                </div>

                <div class="flex items-center gap-2 text-gray-600 mb-4">
                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                    <span>{{ $b->ville }}, {{ $b->region }}</span>
                </div>

                {{-- <p class="text-sm text-gray-600 mb-4">{{ Str::limit($v->description, 100) }}</p> --}}

                <div class="flex justify-between border-t pt-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="bed-double" class="w-4 h-4 text-gray-600"></i>
                        <span>{{ $b->pieces }} pièces</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i data-lucide="bath" class="w-4 h-4 text-gray-600"></i>
                        <span>{{ $b->salon }} salon(s)</span>
                    </div>
                </div>
            </div>
            </a>
        </div>
        @endforeach

    </div>

    <!-- Bouton Voir Plus -->
    <div class="flex justify-left mt-8">
        <a href="{{route('allBureau')}}">
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
