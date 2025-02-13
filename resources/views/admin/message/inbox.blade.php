@extends('admin.base_admin')
@section('content')
<div class="container mx-auto mt-2">
    <h1 class="text-2xl font-bold text-center mb-2">Boîte de réception</h1>

    <div class="bg-white shadow-md rounded-lg">
        <div class="bg-blue-500 text-white px-4 py-3 rounded-t-lg">
            <h5 class="text-lg font-semibold">Liste des messages reçus</h5>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Sujet</th>
                        <th class="px-4 py-2">Nom de l'émetteur</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Téléphone</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $message->sujet }}</td>
                            <td class="px-4 py-2">{{ $message->prenom_emetteur }} {{ $message->nom_emetteur }}</td>
                            <td class="px-4 py-2">{{ $message->email_emetteur }}</td>
                            <td class="px-4 py-2">{{ $message->tel_emetteur }}</td>
                            <td class="px-4 py-2">{{ $message->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('messages.show', $message->id) }}"
                                   class="text-blue-500 hover:underline mr-2">
                                    Voir
                                </a>
                                <form action="{{ route('messages.destroy', $message->id) }}"
                                      method="POST"
                                      class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-500 hover:underline"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ce message ?');">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-center text-gray-500">
                                Aucun message reçu pour le moment.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $messages->links('pagination::tailwind') }} <!-- Pagination avec Tailwind -->
    </div>
</div>
@endsection
