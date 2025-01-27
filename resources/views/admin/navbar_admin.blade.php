<style>

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fw-bold" style="position: sticky; top:0%">
    <div class="container gap-5">
        <!-- Logo et Titre -->
        <a class="navbar-brand" href="{{ route('admin.proprietes.index')}}" style="color: white;" aria-label="Page d'accueil">
            <i class="bi bi-house-door"> </i> SEN IMMO
        </a>
        

        <!-- Bouton pour mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Liens de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.proprietes.index')}}" style="color: white;">
                        <i class="bi bi-building"> </i> LES Biens
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">
                        <i class="bi bi-key"> </i>Contrat de location en cours
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">
                        <i class="bi bi-envelope"> </i> Boîte de réception
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personne.agents')}}" style="color: white;">
                        <i class="bi bi-people"> </i> Personnels
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personne.proprietaires')}}" style="color: white;">
                        <i class="bi bi-people"> </i> Proprietaires
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personne.clients')}}" style="color: white;">
                        <i class="bi bi-people"> </i> clients
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
