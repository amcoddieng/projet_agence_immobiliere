<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEN_IMMO - Dakar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .slide-in-animation {
            animation: slideIn 1s ease-out;
            opacity: 1 !important;
        }
    </style>
    <script>
        window.addEventListener('load', function() {
            const nav = document.querySelector('.sticky-nav');
            nav.classList.add('slide-in-animation');
        });

        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            const logo = document.querySelector('.logo-text');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
                logo.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
                logo.classList.remove('scrolled');
            }
        });
    </script>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Barre de contact -->
    <header class="flex flex-col md:flex-row justify-between items-center p-3 bg-gray-100 text-center md:text-left border-b-2 border-gray-800">
        <div class="mb-2 md:mb-0">
            <p class="text-gray-800"><i class="fas fa-phone-alt"></i> 00221338640667 | <i class="fas fa-envelope"></i> SEN-IMMO@SEN-IMMO.net</p>
        </div>
        <div>
            <strong class="text-gray-800"><i class="fas fa-building"></i> SEN-IMMO - Dakar</strong>
        </div>
    </header>

    <!-- Barre de navigation responsive -->
    <nav class="sticky-nav bg-white text-gray-800 flex flex-wrap justify-between items-center py-4 px-8 border-b-2 border-gray-800 sticky top-0 z-50">
        <!-- Logo -->
        <div class="logo-text text-gray-800 text-2xl font-bold">
            <i class="fas fa-home"></i> SEN-IMMO
        </div>

        <!-- Menu desktop -->
        <ul class="hidden md:flex flex-wrap justify-center space-x-6">
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="{{ route('app_accueil')}}"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="#"><i class="fas fa-shopping-cart"></i> Acheter</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="#"><i class="fas fa-key"></i> Louer</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="#"><i class="fas fa-dollar-sign"></i> Vendre</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="{{ route('app_faireGerer')}}"><i class="fas fa-cogs"></i> Faire gérer</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="{{ route('app_propos') }}"><i class="fas fa-info-circle"></i> À propos</a></li>
            <li><a class="hover:text-blue-400 transition duration-300 ease-in-out transform hover:scale-110" href="{{ route('app_contact') }}"><i class="fas fa-envelope"></i> Nous contacter</a></li>
        </ul>

        <!-- Bouton menu mobile -->
        <div class="md:hidden">
            <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i class="fas fa-bars text-2xl text-gray-800"></i>
            </button>
        </div>
    </nav>

    <!-- Menu mobile -->
    <ul id="mobile-menu" class="hidden sticky-nav2 flex flex-col space-y-4 p-4 bg-gray-800 text-white">
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-shopping-cart"></i> Acheter</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-key"></i> Louer</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-dollar-sign"></i> Vendre</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-cogs"></i> Faire gérer</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-info-circle"></i> À propos</a></li>
        <li><a class="hover:text-blue-400" href="#"><i class="fas fa-envelope"></i> Nous contacter</a></li>
    </ul>
</body>
</html>
