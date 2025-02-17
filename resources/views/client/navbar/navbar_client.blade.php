<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ImmoAgence - Votre Partenaire Immobilier</title>
    <link href="/style.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <nav class="bg-white shadow-md">
      <!-- Top Bar -->
      <div class="bg-blue-600 text-white py-2">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
          <div class="flex items-center gap-4">
            <a href="tel:+33123456789" class="flex items-center gap-2 text-sm">
              <i data-lucide="phone" class="w-4 h-4"></i>
              +33 1 23 45 67 89
            </a>
            <a href="mailto:contact@immobilier.fr" class="flex items-center gap-2 text-sm">
              <i data-lucide="mail" class="w-4 h-4"></i>
              contact@immobilier.fr
            </a>
          </div>
        </div>
      </div>

      <!-- Main Navbar -->
      <div class="max-w-7xl mx-auto px-4 py-4" style="position: sticky;z-index:100;top:0">
        <div class="flex justify-between items-center">
          <div class="flex items-center gap-2">
            <i data-lucide="building-2" class="w-8 h-8 text-blue-600"></i>
            <span class="text-xl font-bold">ImmoAgence</span>
          </div>

          <div class="hidden md:flex items-center gap-8">
            <a href="#" class="text-gray-600 hover:text-blue-600">Accueil</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Acheter</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Louer</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Vendre</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Faire gerer</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">A propos</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
          </div>

          <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">
            Estimation Gratuite
          </button>
        </div>
      </div>

    </nav>



  </body>
</html>
