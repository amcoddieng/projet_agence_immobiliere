@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Modifier la personne</h1>

        <form action="{{ route('admin.personne.update', $personne) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $personne->nom) }}" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom', $personne->prenom) }}" required>
            </div>

            <div class="form-group">
                <label for="matricule">Matricule</label>
                <input type="text" name="matricule" id="matricule" class="form-control" value="{{ old('matricule', $personne->matricule) }}">
            </div>

            <div class="form-group">
                <label for="date_naissance">Date de naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ old('date_naissance', $personne->date_naissance) }}">
            </div>

            <div class="form-group">
                <label for="lieu_naissance">Lieu de naissance</label>
                <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" value="{{ old('lieu_naissance', $personne->lieu_naissance) }}">
            </div>

            <div class="form-group">
                <label for="nin">NIN</label>
                <input type="text" name="nin" id="nin" class="form-control" value="{{ old('nin', $personne->nin) }}">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone', $personne->telephone) }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $personne->email) }}" required>
            </div>

            <div class="form-group">
                <label for="status">Statut</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $personne->status) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        </form>
    </div>
@endsection
