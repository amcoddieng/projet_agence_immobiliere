@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Liste des propriétaires</h1>
        
        <a href="{{ route('admin.personne.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau proprietaire</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proprietaires as $proprietaire)
                    <tr>
                        <td>{{ $proprietaire->id }}</td>
                        <td>{{ $proprietaire->nom }}</td>
                        <td>{{ $proprietaire->prenom }}</td>
                        <td>{{ $proprietaire->email }}</td>
                        <td>{{ $proprietaire->status }}</td>
                        <td>
                            <a href="{{ route('admin.personne.show', $proprietaire) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('admin.personne.edit', $proprietaire) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.personne.destroy', $proprietaire) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $proprietaires->links() }}
    </div>
@endsection
