@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Liste des clients</h1>
        
        <a href="{{ route('admin.personne.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau client</a>

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
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->status }}</td>
                        <td>
                            <a href="{{ route('admin.personne.show', $client) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('admin.personne.edit', $client) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.personne.destroy', $client) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $clients->links() }}
    </div>
@endsection
