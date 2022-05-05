<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('auth.login');
});*/
Route::get('/', function () {
    return view('auth/login');
});

/*Route::get('/visiteur',function () {
    return view('visiteur');
})->name('visiteur');*/


Route::get('/visiteur', function () {
    $visiteurs = App\Models\Visiteur::all();
    return view('visiteur', [
        'visiteurs' => $visiteurs
    ]);
})->name('visiteur');

Route::get('/searchVisiteur',[App\Http\Controllers\VisiteurController::class,'search'])->name('research');

  /**---------------------------------------------------PRATICIENS---------------------------------------------------**/
Route::get('/praticien', function () {
    $praticiens = App\Models\Praticien::all();
    return view('praticien', [
        'praticiens' => $praticiens
    ]);
})->name('praticien');
  /**---------------------------------------------------MEDICAMENT---------------------------------------------------**/
Route::get('/medicament', function () {
    $medicament = App\Models\Medicament::all();
    return view('medicament', [
        'medicament' => $medicament
    ]);
})->name('medicament');
Route::get('medicamentbyID',[MedicamentController::class,'getByID'])->name('medicamentByID');


    /**---------------------------------------------------RAPPORT---------------------------------------------------**/
Route::get('/rapport',[App\Http\Controllers\RapportController::class,'rapport'])->name('rapport');


Route::get('/nouveaurapport',[App\Http\Controllers\RapportController::class,'rapportVisiteur'])->name('rapportVisiteur');
Route::post('/nouveaurapport',[App\Http\Controllers\RapportController::class,'store'])->name('nouveaurapport');


/**---------------------------------------------------AUTHENTIFICATION---------------------------------------------------**/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profil', function () {
        $profils = App\Models\Profil::all();
        return view('profil', [
            'profils' => $profils
        ]);
    })->name('profil');
    
Route::get('/editprofil',[App\Http\Controllers\ProfilController::class,'profilVisiteur'])->name('profilVisiteur');
Route::post('/editprofil',[App\Http\Controllers\ProfilController::class,'storeEdit'])->name('editprofil');
});



require __DIR__.'/auth.php';
