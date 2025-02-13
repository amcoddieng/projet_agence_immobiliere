@extends('admin.base_admin')

@section('content')
<div class="container mx-auto mt-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Détails du message</h2>

        <p><strong>Sujet :</strong> {{ $message->sujet }}</p>
        <p><strong>Émetteur :</strong> {{ $message->prenom_emetteur }} {{ $message->nom_emetteur }}</p>
        <p><strong>Email :</strong> {{ $message->email_emetteur }}</p>
        <p><strong>Téléphone :</strong> {{ $message->tel_emetteur }}</p>

        <h3 class="text-lg font-semibold mt-6">Messages de cet émetteur</h3>

        @foreach($messages as $msg)
            <div class="bg-gray-100 p-4 rounded mt-2">
                <p class="text-sm text-gray-600"><strong>Envoyé le :</strong> {{ $msg->created_at->format('d/m/Y H:i') }}</p>
                <p>{{ $msg->contenu_message }}</p>
            </div>
        @endforeach

        <h3 class="text-lg font-semibold mt-6">Répondre au message</h3>
        <form action="" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="reponse" class="block text-gray-700 font-semibold">Votre réponse :</label>
                <textarea id="reponse" name="reponse" rows="4" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:border-blue-300" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Envoyer la réponse
            </button>
        </form>

        <a href="{{ route('messages.index') }}" class="block mt-4 text-blue-500 hover:underline">
            Retour à la boîte de réception
        </a>
    </div>
</div>
@endsection
