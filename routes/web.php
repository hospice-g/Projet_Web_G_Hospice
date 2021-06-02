<?php

use Illuminate\Support\Facades\Route;
use App\Models\storeDemande;
use App\Models\showMagazinPublication;
use App\Models\createpageUsers;
use App\Models\createpageUsersDemande;
use App\Models\UpProfil;
use App\Models\demandeEncours;
use App\Models\createup;


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

Route::get('/', function () {
	
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gestionMaison/ajout', [App\Http\Controllers\Maison_a_dController::class, 'create'])->name('gestionMaison.ajout')->middleware("auth");

Route::post('/gestionMaison/store', [App\Http\Controllers\Maison_a_dController::class, 'store'])->name('gestionMaison.store')->middleware("auth");

Route::get('/gestionMaison/demande', [App\Http\Controllers\DemandeController::class, 'createDemande'])->name('gestionMaison.demande')->middleware("auth");

Route::post('/gestionMaison/storeDemande', [App\Http\Controllers\DemandeController::class, 'storeDemande'])->name('gestionMaison.storeDemande')->middleware("auth");

Route::get('/gestionMaison/showMagazinPublication', [App\Http\Controllers\Maison_a_dController::class, 'showMagazinPublication'])->name('gestionMaison.showMagazinPublication');

Route::get('/gestionMaison/pageUsers', [App\Http\Controllers\Maison_a_dController::class, 'createpageUsers'])->name('gestionMaison.pageUsers')->middleware("auth");

Route::get('/gestionMaison/pageUsersDemande', [App\Http\Controllers\DemandeController::class, 'createpageUsersDemande'])->name('gestionMaison.pageUsersDemande')->middleware("auth");


Route::delete('/gestionMaison/destroy/{id}', [App\Http\Controllers\Maison_a_dController::class, 'destroy'])->name('gestionMaison.destroy')->middleware("auth");

Route::post('/Soumission/store', [App\Http\Controllers\AdresseSoumissionController::class, 'store'])->name('Soumission.store');

//Route::get('/gestionMaison/update/{j,id}', [App\Http\Controllers\Maison_a_dController::class, 'update'])->name('gestionMaison.update');

//Route::get('gestionMaison/upProfil', [App\Http\Controllers\UpProfilController::class, 'create'])->name('gestionMaison.upProfil');

Route::delete('/gestionMaison/demandedestroy/{id}', [App\Http\Controllers\DemandeController::class, 'destroy'])->name('gestionMaison.demandedestroy')->middleware("auth");

Route::get('/gestionMaison/upProfil', [App\Http\Controllers\UpProfilController::class, 'create'])->name('gestionMaison.upProfil')->middleware("auth");

Route::get('/gestionMaison/upProfilclient', [App\Http\Controllers\UpProfilController::class, 'createup'])->name('gestionMaison.upProfilclient')->middleware("auth");


Route::post('/gestionMaison/storeupProfil', [App\Http\Controllers\UpProfilController::class, 'store'])->name('gestionMaison.storeupProfil')->middleware("auth");

Route::post('/gestionMaison/storeupProfil2', [App\Http\Controllers\UpProfilController::class, 'storeup'])->name('gestionMaison.storeupProfil2')->middleware("auth");

Route::get('/gestionMaison/demandeEncours', [App\Http\Controllers\DemandeController::class, 'createdemandEncours'])->name('gestionMaison.demandeEncours')->middleware("auth");


Route::get('/gestionMaison/admin', [App\Http\Controllers\UsersController::class, 'createAdminPage'])->name('gestionMaison.admin');

Route::delete('/gestionMaison/destroyuser/{id}', [App\Http\Controllers\UsersController::class, 'destroyuser'])->name('gestionMaison.destroyuser');



