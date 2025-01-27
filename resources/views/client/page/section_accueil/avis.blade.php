<!-- Ajout des liens vers AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
    /* Masque les barres de défilement uniquement visuellement (elles restent fonctionnelles) */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none; /* Pour IE et Edge */
        scrollbar-width: none; /* Pour Firefox */
    }
</style>

<div class="container mx-auto mb-4 p-6 bg-gray-100">
    <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-10" data-aos="fade-up" data-aos-duration="1000">
        Avis de nos clients
    </h2>

    <!-- Conteneur des cartes d'avis en ligne avec animation -->
    <div class="flex overflow-x-auto gap-6 scrollbar-hide">
        <!-- Avis 1 -->
        <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition-shadow p-6 min-w-[16rem] transform hover:scale-105 transition-all duration-300" 
             data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Client 1" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Jean Dupont</h3>
                    <span class="text-gray-500 text-sm">12 Janvier 2025</span>
                </div>
            </div>
            <p class="text-gray-700 text-base">"Un service exceptionnel, je suis très satisfait de ma maison. Tout a été fait selon mes attentes!"</p>
        </div>

        <!-- Avis 2 -->
        <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition-shadow p-6 min-w-[16rem] transform hover:scale-105 transition-all duration-300" 
             data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Client 2" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Marie Dubois</h3>
                    <span class="text-gray-500 text-sm">15 Janvier 2025</span>
                </div>
            </div>
            <p class="text-gray-700 text-base">"Très bonne expérience! La maison est exactement comme sur les photos, je recommande vivement."</p>
        </div>

        <!-- Avis 3 -->
        <div class="bg-white rounded-lg shadow-xl hover:shadow-2xl transition-shadow p-6 min-w-[16rem] transform hover:scale-105 transition-all duration-300" 
             data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/50" alt="Client 3" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800">Luc Martin</h3>
                    <span class="text-gray-500 text-sm">20 Janvier 2025</span>
                </div>
            </div>
            <p class="text-gray-700 text-base">"Très bonne qualité, très réactifs et à l'écoute. Je me sens chez moi!"</p>
        </div>
    </div>
</div>

<!-- Ajout du script JavaScript pour AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
