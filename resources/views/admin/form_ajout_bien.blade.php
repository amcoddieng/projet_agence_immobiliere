@extends('admin.base_admin')
@section('title', $bien->exists ? "Éditer un bien" : "Ajouter un bien")

@section('content')

    <h4 class="title text-center bg-success py-2 text-white rounded">@yield('title')</h4>

    <form class="vstack gap-4 mt-4" action="{{ $bien->exists ? route('admin.proprietes.update', $bien->id) : route('admin.proprietes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($bien->exists ? 'put' : 'post')

        <!-- Champ pour sélectionner le propriétaire -->
        <div class="mb-3">
            <label for="proprietaire" class="form-label fw-bold">Propriétaire</label>
            <select name="personne_id" id="proprietaire" class="form-select">
                <option value="">-- Sélectionnez un propriétaire --</option>
                @foreach($proprietaires as $proprietaire)
                    <option value="{{ $proprietaire->id }}" {{ old('personne_id', $bien->personne_id) == $proprietaire->id ? 'selected' : '' }}>
                        {{ $proprietaire->nom }} {{ $proprietaire->prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Informations de base -->
        <div class="row g-3">
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Titre', 'name' => 'titre', 'value' => old('titre', $bien->titre)])
            <div class="col-md-6">
                <label for="type" class="form-label fw-bold">Type</label>
                <select name="type" id="type" class="form-select">
                    <option value="villa" {{ old('type', $bien->type) == 'villa' ? 'selected' : '' }}>Villa</option>
                    <option value="appartement" {{ old('type', $bien->type) == 'appartement' ? 'selected' : '' }}>Appartement</option>
                    <option value="bureau" {{ old('type', $bien->type) == 'bureau' ? 'selected' : '' }}>Bureau</option>
                </select>
            </div>
        </div>

        <div class="row g-3">
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Nombre de pièces', 'name' => 'pieces', 'value' => old('pieces', $bien->pieces)])
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Nombre de salons', 'name' => 'salon', 'value' => old('salon', $bien->salon)])
        </div>

        @include('admin.shared.input', ['type' => 'textarea', 'class' => 'mb-3', 'name' => 'description', 'label' => 'Description', 'value' => old('description', $bien->description)])

        <!-- Prix et cycle -->
        <div class="row g-3">
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Prix (en FCFA)', 'name' => 'prix', 'value' => old('prix', $bien->prix)])
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Cycle', 'name' => 'cycle', 'value' => old('cycle', $bien->cycle)])
        </div>

        <!-- Localisation -->
        <h5 class="text-success mt-4">Localisation</h5>
        <div class="row g-3">
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Région', 'name' => 'region', 'value' => old('region', $bien->region)])
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Département', 'name' => 'departement', 'value' => old('departement', $bien->departement)])
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Ville', 'name' => 'ville', 'value' => old('ville', $bien->ville)])
            @include('admin.shared.input', ['class' => 'col-md-6', 'label' => 'Adresse', 'name' => 'adresse', 'value' => old('adresse', $bien->adresse)])
        </div>

        <!-- Disponibilité -->
        @include('admin.shared.checkbox', ['name' => 'disponible', 'label' => 'Disponible', 'value' => $bien->disponible])

        <!-- Téléchargement d'images -->
        <div class="mb-3 mt-4">
            <label for="images" class="form-label fw-bold">Images du bien</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>

        <!-- Images actuelles -->
        @if($bien->exists && $bien->images)
            <div class="mb-3">
                <p class="fw-bold">Images actuelles :</p>
                <div class="d-flex flex-wrap gap-2">
                    @php
                        $images = json_decode($bien->images, true); // Décodage JSON en tableau
                    @endphp
                    @foreach($images as $image)
                        <div class="border p-2">
                            <img src="{{ asset('storage/'.$image) }}" alt="Image du bien" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Bouton d'action -->
        <div class="d-flex justify-content-end">
            <button class="btn btn-success">
                {{ $bien->exists ? 'Modifier' : 'Créer' }}
            </button>
        </div>
    </form>

@endsection