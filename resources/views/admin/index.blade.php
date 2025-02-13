@extends('admin.base_admin')

@section('title')
    Liste de tous les Biens
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
    <!-- Filtre par type -->
        <form method="GET" action="{{ route('admin.filtre') }}" class="mb-4">
            <div class="row">
                <!-- Filtre par Type -->
                <div class="col-md-4">
                    <select name="type" class="form-select" onchange="this.form.submit()">
                        <option value="">-- Filtrer par type --</option>
                        <option value="appartement" {{ request('type') == 'appartement' ? 'selected' : '' }}>Appartement</option>
                        <option value="villa" {{ request('type') == 'villa' ? 'selected' : '' }}>Villa</option>
                        <option value="bureaux" {{ request('type') == 'bureaux' ? 'selected' : '' }}>Bureaux</option>
                    </select>
                </div>
                <!-- Filtre par Disponibilité -->
                <div class="col-md-4">
                    <select name="disponible" class="form-select" onchange="this.form.submit()">
                        <option value="">-- Filtrer par disponibilité --</option>
                        <option value="1" {{ request('disponible') == '1' ? 'selected' : '' }}>Disponible</option>
                        <option value="0" {{ request('disponible') == '0' ? 'selected' : '' }}>Non disponible</option>
                    </select>
                </div>
            </div>
        </form>


        <a href="{{ route('admin.proprietes.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Ajouter un bien
        </a>
    </div>




    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th><i class="bi bi-card-heading"></i> Titre</th>
                        <th>Type</th>
                        <th><i class="bi bi-house"></i> Chambre</th>
                        <th><i class="bi bi-tv"></i> Salon</th>
                        <th><i class="bi bi-rulers"></i> Surface</th>
                        <th><i class="bi bi-cash-coin"></i> Prix</th>
                        <th><i class="bi bi-calendar-check"></i> Cycle</th>
                        <th><i class="bi bi-geo-alt"></i> Localisation</th>
                        {{-- <th><i class="bi bi-map"></i> Département</th> --}}
                        {{-- <th><i class="bi bi-building"></i> Ville</th> --}}
                        {{-- <th><i class="bi bi-signpost"></i> Adresse</th> --}}
                        <th><i class="bi bi-check-circle"></i> Disponible</th>
                        <th><i class="bi bi-gear"></i> Action</th>
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
                             <td>{{ $bien->region }} - {{--</td>
                            <td> --}}{{ $bien->departement }} - {{--</td>
                            <td> --}}{{ $bien->ville }} - {{--</td>
                            <td> --}}{{ $bien->adresse }}</td>
                            <td>
                                @if($bien->disponible)
                                    <span class="badge bg-success"><i class="bi bi-check-lg"></i> Oui</span>
                                @else
                                    <span class="badge bg-danger"><i class="bi bi-x-lg"></i> Non</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.proprietes.edit', $bien) }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.proprietes.destroy', $bien) }}" method="POST"
                                          onsubmit="return confirm('Voulez-vous vraiment supprimer ce bien ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $proprietes->links() }}
    </div>
@endsection

<style>
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.02);
    }
    .table-dark {
        background-color: #343a40;
        color: #fff;
    }
    .card {
        border: none;
        border-radius: 10px;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
    .badge {
        font-size: 0.875rem;
    }
</style>
