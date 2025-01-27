@extends('admin.base_admin')

@section('content')
    <div class="container">
        <h1>Liste des agents</h1>
        
        <a href="{{ route('admin.personne.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau agent</a>

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
                @foreach($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->nom }}</td>
                        <td>{{ $agent->prenom }}</td>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->status }}</td>
                        <td>
                            <a href="{{ route('admin.personne.show', $agent) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('admin.personne.edit', $agent) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('admin.personne.destroy', $agent) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $agents->links() }}
    </div>
@endsection
