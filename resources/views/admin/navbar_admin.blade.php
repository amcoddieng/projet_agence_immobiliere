<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ImmoAgence - Administration</title>
    <link href="/style.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
  </head>
  <body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-gray-900">
      <div class="flex items-center gap-2 p-6 border-b border-gray-800">
        <i data-lucide="building-2" class="w-8 h-8 text-blue-500"></i>
        <span class="text-xl font-bold text-white">ImmoAgence</span>
      </div>

      <nav class="p-4">
        <div class="space-y-6">
          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Menu Principal</div>
            <a href="#" class="flex items-center gap-2 text-white bg-blue-600 px-3 py-2 rounded-md">
              <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
              Tableau de bord
            </a>
          </div>

          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Gestion</div>
            <div class="space-y-1">
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="home" class="w-5 h-5"></i>
                Propriétés
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="users" class="w-5 h-5"></i>
                Utilisateurs
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="message-square" class="w-5 h-5"></i>
                Messages
              </a>
            </div>
          </div>

          <div>
            <div class="text-gray-400 text-sm font-medium mb-2">Configuration</div>
            <div class="space-y-1">
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="settings" class="w-5 h-5"></i>
                Paramètres
              </a>
              <a href="#" class="flex items-center gap-2 text-gray-300 hover:bg-gray-800 px-3 py-2 rounded-md">
                <i data-lucide="shield" class="w-5 h-5"></i>
                Sécurité
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
      <!-- Top Bar -->
      <div class="flex justify-between items-center mb-8">
        <div>
          <h1 class="text-2xl font-bold text-gray-900">Tableau de bord</h1>
          <p class="text-gray-600">Bienvenue dans votre espace d'administration</p>
        </div>

        <div class="flex items-center gap-4">
          <button class="flex items-center gap-2 text-gray-600 hover:text-gray-900">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <div class="w-2 h-2 bg-red-500 rounded-full absolute translate-x-3 -translate-y-1"></div>
          </button>
          <div class="flex items-center gap-2">
            <img
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=48&h=48&q=80"
              alt="Admin"
              class="w-8 h-8 rounded-full object-cover"
            />
            <span class="text-gray-900 font-medium">John Doe</span>
          </div>
        </div>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Propriétés</div>
            <i data-lucide="home" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">245</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +12% ce mois
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Utilisateurs</div>
            <i data-lucide="users" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">1,234</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +8% ce mois
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Messages</div>
            <i data-lucide="message-square" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">48</div>
          <div class="text-sm text-yellow-600 flex items-center gap-1 mt-2">
            <i data-lucide="minus" class="w-4 h-4"></i>
            Stable
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="text-gray-500">Revenus</div>
            <i data-lucide="euro" class="w-5 h-5 text-blue-600"></i>
          </div>
          <div class="text-2xl font-bold">84,500 €</div>
          <div class="text-sm text-green-600 flex items-center gap-1 mt-2">
            <i data-lucide="trending-up" class="w-4 h-4"></i>
            +24% ce mois
          </div>
        </div>
      </div>

      <!-- Recent Properties -->
      <div class="bg-white rounded-lg shadow mb-8">
        <div class="p-6 border-b border-gray-200">
          <h2 class="text-lg font-semibold">Propriétés Récentes</h2>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Propriété</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <img
                      src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=100&h=100&q=80"
                      alt="Property"
                      class="w-10 h-10 rounded-md object-cover"
                    />
                    <div>
                      <div class="font-medium">Villa Moderne avec Vue</div>
                      <div class="text-sm text-gray-500">Bordeaux, France</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                    Disponible
                  </span>
                </td>
                <td class="px-6 py-4 font-medium">850 000 €</td>
                <td class="px-6 py-4 text-gray-500">24 Mars 2024</td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <button class="text-gray-600 hover:text-blue-600">
                      <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-gray-600 hover:text-red-600">
                      <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <img
                      src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?auto=format&fit=crop&w=100&h=100&q=80"
                      alt="Property"
                      class="w-10 h-10 rounded-md object-cover"
                    />
                    <div>
                      <div class="font-medium">Appartement au Cœur de Paris</div>
                      <div class="text-sm text-gray-500">Paris, France</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                    En attente
                  </span>
                </td>
                <td class="px-6 py-4 font-medium">650 000 €</td>
                <td class="px-6 py-4 text-gray-500">23 Mars 2024</td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <button class="text-gray-600 hover:text-blue-600">
                      <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-gray-600 hover:text-red-600">
                      <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <img
                      src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=100&h=100&q=80"
                      alt="Property"
                      class="w-10 h-10 rounded-md object-cover"
                    />
                    <div>
                      <div class="font-medium">Maison de Charme</div>
                      <div class="text-sm text-gray-500">Lyon, France</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                    Vendu
                  </span>
                </td>
                <td class="px-6 py-4 font-medium">450 000 €</td>
                <td class="px-6 py-4 text-gray-500">22 Mars 2024</td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <button class="text-gray-600 hover:text-blue-600">
                      <i data-lucide="edit" class="w-4 h-4"></i>
                    </button>
                    <button class="text-gray-600 hover:text-red-600">
                      <i data-lucide="trash-2" class="w-4 h-4"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Recent Activity -->
      <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b border-gray-200">
          <h2 class="text-lg font-semibold">Activité Récente</h2>
        </div>
        <div class="p-6">
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                <i data-lucide="plus" class="w-4 h-4 text-blue-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouvelle propriété ajoutée</div>
                <div class="text-sm text-gray-500">Villa Moderne avec Vue - Bordeaux</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 2 heures</div>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                <i data-lucide="user-plus" class="w-4 h-4 text-green-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouvel utilisateur inscrit</div>
                <div class="text-sm text-gray-500">Marie Dubois</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 4 heures</div>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center">
                <i data-lucide="message-square" class="w-4 h-4 text-yellow-600"></i>
              </div>
              <div>
                <div class="font-medium">Nouveau message reçu</div>
                <div class="text-sm text-gray-500">Demande de visite - Appartement Paris</div>
                <div class="text-sm text-gray-400 mt-1">Il y a 6 heures</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      lucide.createIcons();
    </script>
  </body>
</html>
