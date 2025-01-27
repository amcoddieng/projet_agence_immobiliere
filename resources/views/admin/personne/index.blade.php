@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Liste des personnes</h1>
        
        <a href="{{ route('admin.personne.create') }}" class="btn btn-primary mb-3">Ajouter une personne</a>

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
                @foreach($personnes as $personne)
                    <tr>
                        <td>{{ $personne->id }}</td>
                        <td>{{ $personne->nom }}</td>
                        <td>{{ $personne->prenom }}</td>
                        <td>{{ $personne->email }}</td>
                        <td>{{ $personne->status }}</td>
                        <td>
                            <a href="{{ route('admin.personne.show', $personne) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('admin.personne.edit', $personne) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.personne.destroy', $personne) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
