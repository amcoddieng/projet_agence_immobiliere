@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Détails de la personne</h1>

        <table class="table">
            <tr>
                <th>Nom</th>
                <td>{{ $personne->nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $personne->prenom }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ $personne->matricule }}</td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td>{{ $personne->date_naissance }}</td>
            </tr>
            <tr>
                <th>Lieu de naissance</th>
                <td>{{ $personne->lieu_naissance }}</td>
            </tr>
            <tr>
                <th>NIN</th>
                <td>{{ $personne->nin }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $personne->telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $personne->email }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $personne->status }}</td>
            </tr>
        </table>

        <a href="{{ route('admin.personne.index') }}" class="btn btn-secondary">Retour</a>
    </div>
@endsection
