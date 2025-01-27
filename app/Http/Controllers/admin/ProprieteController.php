<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProprieteFormRequest;
use Illuminate\Http\Request;
use App\Models\Proprietes;
use App\Models\personnes;
use Illuminate\Support\Facades\Storage;

class ProprieteController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'proprietes' => Proprietes::orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

    public function create()
    {
        $proprietaires = personnes::all(); // Récupère tous les propriétaires
        $bien = new Proprietes();
        return view('admin.form_ajout_bien',compact('proprietaires', 'bien'));
    }
    public function store(ProprieteFormRequest $request)
{
    $validatedData = $request->validated();
    $validatedData['disponible'] = $request->has('disponible') ? true : false;

    // Gestion des images
    if ($request->hasFile('images')) {
        $images = [];
        foreach ($request->file('images') as $image) {
            $images[] = $image->store('proprietes_images', 'public'); // Enregistrement des images
        }
        $validatedData['images'] = json_encode($images);
    }

    Proprietes::create($validatedData);

    return redirect()->route('admin.proprietes.index')->with('success', 'Le bien a bien été enregistré');
}

public function update(ProprieteFormRequest $request, Proprietes $propriete)
{
    $validatedData = $request->validated();
    $validatedData['disponible'] = $request->has('disponible') ? true : false;

    // Gestion des images lors de la mise à jour
    if ($request->hasFile('images')) {
        $oldImages = json_decode($propriete->images, true);
        if ($oldImages) {
            foreach ($oldImages as $oldImage) {
                if (Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage); // Suppression des anciennes images
                }
            }
        }

        $images = [];
        foreach ($request->file('images') as $image) {
            $images[] = $image->store('proprietes_images', 'public');
        }
        $validatedData['images'] = json_encode($images);
    }

    $propriete->update($validatedData);

    return redirect()->route('admin.proprietes.index')->with('success', 'Le bien a été mis à jour.');
}


    // public function store(ProprieteFormRequest $request)
    // {
    //     $validatedData = $request->validated();
    //     $validatedData['disponible'] = $request->has('disponible');
        
    //     // Gestion des images
    //     if ($request->hasFile('images')) {
    //         $images = [];
    //         foreach ($request->file('images') as $image) {
    //             $images[] = $image->store('proprietes_images', 'public'); // Enregistrement des images dans le dossier public
    //         }
    //         $validatedData['images'] = json_encode($images); // Sauvegarde des images dans la base de données
    //     }

    //     Proprietes::create($validatedData);

    //     return redirect()->route('admin.proprietes.index')->with('success', 'Le bien a bien été enregistré');
    // }

    public function edit(Proprietes $propriete)
    {
        $proprietaires = personnes::all(); // Récupère tous les propriétaires
        return view('admin.form_ajout_bien', [
            'bien' => $propriete,
            'proprietaires' =>$proprietaires
        ]);
        // return view('admin.form_ajout_bien', compact('proprietaires', 'bien'));
    }

    // public function update(ProprieteFormRequest $request, Proprietes $propriete)
    // {
    //     $validatedData = $request->validated();
        
    //     // Gestion des images lors de la mise à jour
    //     if ($request->hasFile('images')) {
    //         // Supprimer les anciennes images si elles existent
    //         $oldImages = json_decode($propriete->images, true);
    //         if ($oldImages) {
    //             foreach ($oldImages as $oldImage) {
    //                 if (Storage::disk('public')->exists($oldImage)) {
    //                     Storage::disk('public')->delete($oldImage); // Suppression des anciennes images
    //                 }
    //             }
    //         }

    //         // Ajouter les nouvelles images
    //         $images = [];
    //         foreach ($request->file('images') as $image) {
    //             $images[] = $image->store('proprietes_images', 'public');
    //         }
    //         $validatedData['images'] = json_encode($images); // Sauvegarde des nouvelles images dans la base de données
    //     }

    //     $propriete->update($validatedData);

    //     return redirect()->route('admin.proprietes.index')->with('success', 'Le bien a été mis à jour.');
    // }

    public function destroy(Proprietes $propriete)
    {
        // Suppression des images
        $images = json_decode($propriete->images, true); // Décoder les images JSON en tableau
        if ($images) {
            foreach ($images as $image) {
                // Suppression de chaque image depuis le disque public
                Storage::disk('public')->delete($image); 
            }
        }
    
        // Supprimer le bien de la base de données
        $propriete->delete();
    
        return redirect()->route('admin.proprietes.index')->with('success', 'Le bien a été supprimé.');
    }

    public function reserver( Proprietes $proprietes){
        
    }
}
