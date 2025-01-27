    <?php

use App\Http\Controllers\AcueilController;
use App\Http\Controllers\PersonnesController;
use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\messageController;
// page d'acueil client
    Route::get('/', [AcueilController::class, 'index'])->name('app_accueil');
    // Route::get('/', function () {
    //     return view('client.page.accueil');
    // })->name('app_accueil');

    Route::get('/contact', function () {
        return view('client.page.contact');
    })->name('app_contact');

    Route::get('/gerer', function () {
        return view('client.page.faire_gerer');
    })->name('app_faireGerer');

    Route::get('/a_propos', function () {
        return view('client.page.a_propos');
    })->name('app_propos');
    
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('proprietes',\App\Http\Controllers\admin\ProprieteController::class)->except('show');
    });
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('personne',\App\Http\Controllers\PersonnesController::class);

    });
    // Routes pour les index spécifiques
    Route::get('personne/agents', [PersonnesController::class, 'indexAgents'])->name('personne.agents');
    Route::get('personne/proprietaires',[PersonnesController::class, 'indexProprietaires'])->name('personne.proprietaires');
    Route::get('personne/clients',[PersonnesController::class, 'indexClients'])->name('personne.clients');


    Route::get('/bien/{id}', [AcueilController::class, 'show'])->name('admin.bien.show');


    Route::post('/contactez-moi', [messageController::class, 'store'])->name('contact.store');
    Route::post('/reservation', [messageController::class, 'store1'])->name('reservation.store');
