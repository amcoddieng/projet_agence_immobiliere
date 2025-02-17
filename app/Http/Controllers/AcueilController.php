<?php

namespace App\Http\Controllers;

use App\Models\Proprietes;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class AcueilController extends Controller
{
    public function index(){
        $app = Proprietes::where('type','appartement')->take(4)->get();
        $villa = Proprietes::where('type','villa')->take(3)->get();
        $bureau = Proprietes::where('type','bureau')->take(4)->get();
        return view('client.page.accueil',compact('app','villa','bureau'));
        // dd($app);
    }
    public function allApp(){
        $bien = Proprietes::where('type','appartement')->where('disponible',true)
                                                        ->where('type','appartement')
                                                        ->orderBy('created_at', 'desc')
                                                        ->paginate(10);
        return view('client.page.liste_proprietes.liste',compact('bien'));
    }
    public function allVilla(){
        $bien = Proprietes::where('type','villa')->where('disponible',true)
                                                    ->where('type','villa')
                                                    ->orderBy('created_at', 'desc')
                                                    ->paginate(4);
        return view('client.page.liste_proprietes.liste',compact('bien'));
    }
    public function allBureau(){
        $bien = Proprietes::where('type','bureau')->where('disponible',true)
                                                    ->where('type','bureau')
                                                    ->orderBy('created_at', 'desc')
                                                    ->paginate(10);
        return view('client.page.liste_proprietes.liste',compact('bien'));
    }

    public function show($id)
    {
        // Récupérer la propriété par son ID
        $bien = Proprietes::findOrFail($id);

        // Retourner la vue avec les détails de la propriété
        return view('client.page.detail_bien', compact('bien'));
    }
}
