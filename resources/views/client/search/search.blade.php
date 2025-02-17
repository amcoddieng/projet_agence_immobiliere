 <!-- Hero Section -->
 <div class="relative h-[600px]">
    <div class="absolute inset-0">
      <img
        src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80"
        alt="Hero"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-center items-center text-center">
      <h1 class="text-5xl font-bold text-white mb-6">
        Trouvez la Propriété de vos Rêves
      </h1>
      <p class="text-xl text-white mb-8">
        Des milliers de propriétés vous attendent
      </p>

      <div class="w-full max-w-4xl bg-white p-4 rounded-lg shadow-lg">
        <div class="flex flex-wrap gap-4">
          <input
            type="text"
            placeholder="Localisation"
            class="flex-1 min-w-[200px] p-3 border rounded-md"
          />
          <select class="flex-1 min-w-[200px] p-3 border rounded-md">
            <option>Type de bien</option>
            <option>Maison</option>
            <option>Appartement</option>
            <option>Villa</option>
          </select>
          <button class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition-colors flex items-center gap-2">
            <i data-lucide="search" class="w-5 h-5"></i>
            Rechercher
          </button>
        </div>
      </div>
    </div>
  </div>
