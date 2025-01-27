@extends('admin.base_admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center">

        <h3><i class="bi bi-card-list"></i> Liste de tous les Biens</h3>
        <a href="{{ route('admin.proprietes.create') }}" class="btn btn-primary mb-2">
            <i class="bi bi-plus-circle"></i> Ajouter un bien
        </a>
    </div>

    <table class="table table-striped ">
        <thead class="table-primary text-center">
            <tr>
                <th><i class="bi bi-card-heading"> </i> Titre</th>
                <th><i></i>type</th>
                <th><i class="bi bi-house"> </i> Chambre</th>
                <th><i class="bi bi-tv"> </i> Salon</th>
                <th><i class="bi bi-rulers"> </i> Surface</th>
                <th><i class="bi bi-cash-coin"> </i> Prix</th>
                <th><i class="bi bi-calendar-check"> </i> Cycle</th>
                <th><i class="bi bi-geo-alt"> </i> Région</th>
                <th><i class="bi bi-map"> </i> Département</th>
                <th><i class="bi bi-building"> </i> Ville</th>
                <th><i class="bi bi-signpost"> </i> Adresse</th>
                <th><i class="bi bi-check-circle"> </i> Disponible</th>
                <th><i class="bi bi-gear"> </i> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proprietes as $bien)
                <tr>
                    <td>{{ $bien->titre }}</td>
                    <td>{{ $bien->type }}</td>
                    <td>{{ $bien->pieces }}</td>
                    <td>{{ $bien->salon }}</td>
                    <td>{{ $bien->surface }} m²</td>
                    <td>{{ number_format($bien->prix, 0, ',', ' ') }} FCFA</td>
                    <td>{{ $bien->cycle }}</td>
                    <td>{{ $bien->region }}</td>
                    <td>{{ $bien->departement }}</td>
                    <td>{{ $bien->ville }}</td>
                    <td>{{ $bien->adresse }}</td>
                    <td>
                        @if($bien->disponible)
                            <span class="badge bg-success"><i class="bi bi-check-lg"></i> Oui</span>
                        @else
                            <span class="badge bg-danger"><i class="bi bi-x-lg"></i> Non</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.proprietes.edit',$bien)}}" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i> 
                            </a>
                            <form action="{{ route('admin.proprietes.destroy', $bien)}}" method="POST" 
                                  onsubmit="return confirm('Voulez-vous vraiment supprimer ce bien ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $proprietes->links() }}
@endsection
