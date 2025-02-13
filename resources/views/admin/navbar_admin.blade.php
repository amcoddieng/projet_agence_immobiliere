<script src="https://cdn.tailwindcss.com"></script>

<div class="flex h-screen">
    <!-- Sidebar - Barre de navigation verticale FIXE -->
    <nav class="bg-blue-700 text-white w-72 min-h-screen p-6 fixed left-0 top-0 shadow-lg">
        <div class="text-3xl font-bold flex items-center gap-3 mb-8">
            <i class="bi bi-house-door text-4xl"></i> SEN IMMO
        </div>

        <ul class="space-y-3 text-xl font-semibold">
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('admin.proprietes.index') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="{{ route('admin.proprietes.index')}}">
                    <i class="bi bi-building text-3xl"></i> LES Biens
                </a>
            </li>
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('contrats.index') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="#">
                    <i class="bi bi-key text-3xl"></i> Contrats
                </a>
            </li>
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('messages.index') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="{{ route('messages.index')}}">
                    <i class="bi bi-envelope text-3xl"></i> Messages
                </a>
            </li>
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('personne.agents') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="{{ route('personne.agents')}}">
                    <i class="bi bi-people text-3xl"></i> Personnels
                </a>
            </li>
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('personne.proprietaires') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="{{ route('personne.proprietaires')}}">
                    <i class="bi bi-people text-3xl"></i> Propriétaires
                </a>
            </li>
            <li>
                <a class="flex items-center gap-4 p-3 rounded-lg transition-colors {{ request()->routeIs('personne.clients') ? 'bg-blue-500' : 'hover:bg-blue-600' }}" href="{{ route('personne.clients')}}">
                    <i class="bi bi-people text-3xl"></i> Clients
                </a>
            </li>
        </ul>
    </nav>

    <!-- Contenu principal -->
    <div class="flex-1 flex flex-col ml-72">
        <!-- Header FIXE en haut -->
        <header class="bg-white shadow-md w-full py-2 px-2 flex justify-between items-center fixed top-0 left-72 right-0 z-10">
            <h1 class="text-2xl font-bold">
                @yield('title')
            </h1>
            <button class="lg:hidden text-blue-700" id="toggleSidebar">
                <i class="bi bi-list text-4xl"></i>
            </button>
        </header>

        <!-- Contenu -->
        <main class="p-8 shadow-md mt-5">
            @yield('content')
        </main>
    </div>
</div>

<script>
    // Gestion de l'affichage de la sidebar sur mobile
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        document.querySelector('nav').classList.toggle('hidden');
    });
</script>
