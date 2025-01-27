<?php

namespace App\Http\Controllers;

use App\Models\Proprietes;
use Illuminate\Http\Request;

class AcueilController extends Controller
{
    public function index(){
        $app = Proprietes::where('type','appartement')->take(4)->get();
        $villa = Proprietes::where('type','villa')->take(4)->get();
        $bureau = Proprietes::where('type','bureau')->take(4)->get();
        return view('client.page.accueil',compact('app','villa','bureau'));
        // dd($app);
    }
    
    public function show($id)
    {
        // Récupérer la propriété par son ID
        $bien = Proprietes::findOrFail($id);

        // Retourner la vue avec les détails de la propriété
        return view('client.page.detail_bien', compact('bien'));
    }
}
