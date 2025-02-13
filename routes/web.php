    <?php

    use App\Http\Controllers\AcueilController;
    use App\Http\Controllers\admin\ProprieteController;
    use App\Http\Controllers\PersonnesController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\messageController;
    use App\Http\Controllers\sendMessageController;
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
        Route::resource('proprietes',ProprieteController::class)->except('show');
    });
    Route::get('/admin', [ProprieteController::class, 'filtre'])->name('admin.filtre');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('personne',PersonnesController::class);

    });
    // Routes pour les index spécifiques
    Route::get('personne/agents', [PersonnesController::class, 'indexAgents'])->name('personne.agents');
    Route::get('personne/proprietaires',[PersonnesController::class, 'indexProprietaires'])->name('personne.proprietaires');
    Route::get('personne/clients',[PersonnesController::class, 'indexClients'])->name('personne.clients');


    Route::get('/bien/{id}', [AcueilController::class, 'show'])->name('admin.bien.show');


    Route::post('/contactez-moi', [messageController::class, 'store'])->name('contact.store');
    Route::post('/reservation', [messageController::class, 'store_reservation'])->name('reservation.store');

    Route::get('/appartement', [AcueilController::class, 'allApp'])->name('allApp');
    Route::get('/villa', [AcueilController::class, 'allvilla'])->name('allVilla');
    Route::get('/bureau', [AcueilController::class, 'allbureau'])->name('allBureau');


    Route::get('/send-email', [sendMessageController::class, 'sendTestEmail']);

    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
