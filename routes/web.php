<?php

use GuzzleHttp\Middleware;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use App\Http\Controllers\Menu;
use App\Http\Controllers\Compte;
use App\Http\Controllers\Accueil;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\VenteMaison;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendreController;
use App\Http\Controllers\LocationControleur;

//  Vente-Immeubles

Route::get('/serche-house',[Accueil::class,'serchehouse']);
Route::get('/serche-houseP',[Accueil::class,'serchehouseP']);
//accueil
Route::get('/voir-la-proprieté/{id}',[Accueil::class,'afficherPropriete'])->name('voir-la-proprieté');
Route::get('/voir-l-immeuble/{id}',[Accueil::class,'voirlimmeuble'])->name('voir-l-immeuble');
Route::get('/condition',function(){
    return view('condition');
})->name('condition');
Route::get('/contrat',function(){
    return view('contrat');
})->name('contrat');
Route::get('/',[Accueil::class,'Accueil']);
Route::get('/',[Accueil::class,'Accueil']);
//menu
Route::get('/A-louer',[Menu::class,'Alouer'])->name('A-louer');
Route::get('/Location-Immeuble',[Menu::class,'LocationImmeuble'])->name('Location-Immeuble');
Route::get('/Vente-Immeubles',[VenteMaison::class,'VenteImmeubles'])->name('Vente-Immeubles');
Route::get('/Biens-vendus',[Menu::class,'Biensvendus'])->name('Biens-vendus');
Route::get('/Gestion',[Menu::class,'Gestion'])->name('Gestion');
Route::get('/Estimation-du-bien',[Menu::class,'Estimationdubien'])->name('Estimation-du-bien');
Route::get('/agence',[Menu::class,'agence'])->name('agence');
Route::get('/Présentation-de-l\'agence',[Menu::class,'Présentationdeagence'])->name('Présentation-de-l-agence');
Route::get('/Actualites',[Menu::class,'Actualites'])->name('Actualites');
Route::get('/Actualites',[Menu::class,'Actualites'])->name('Actualites');
Route::get('/Vendre-un-bien',[Menu::class,'Vendreunbien'])->name('Vendre-un-bien');
Route::get('/Contactez-nous',[Menu::class,'Contact'])->name('Contactez-nous');
Route::get('/Vendre-un-biens',[Menu::class,'Vendreunbien'])->name('login');
//locatiàon
Route::get('/location-proprieté/{id}',[LocationControleur::class,'locationpropriete'])->name('location-proprieté');
//vendre
Route::get('/créer-un-compte',[VendreController::class,'créeruncompte'])->name('créer-un-compte');
// compte vendus
Route::post('/Connexion-utilisateur',[Compte::class,'Connexionutilisateur'])->name('Connexion-utilisateur');

    Route::post('/creation-du-compte',[Compte::class,'creationducompte'])->name('creation-du-compte');

    Route::get('/dashbord/{proprietaire}',[Compte::class,'dashbord'])->name('dashbord');
    Route::get('/Gestion-des-proprietes/{proprietaire}',[Compte::class,'Gestiondesproprietes'])->name('Gestion-des-proprietes');
    Route::get('/Bienvendus/{proprietaire}',[Compte::class,'Bienvendus'])->name('Bien-vendus');
    Route::get('/Gestion-de-propriete/{proprietaire}',[Compte::class,'Gestiondepropriete'])->name('Gestion-de-propriete');
    Route::get('/vendre-des-proprietes/{proprietaire}',[Compte::class,'vendredesproprietes'])->name('vendre-des-proprietes');
    Route::get('/supprimer-parcelle/{id}',[Compte::class,'supprimerparcelle'])->name('supprimer-parcelle');
    Route::get('/supprimer-maison/{id}',[Compte::class,'supprimermaison'])->name('supprimer-maison');
    Route::get('/modifier-parcelle/{id}/{proprietaire}',[Compte::class,'modifierparcelle'])->name('modifier-parcelle');
    Route::get('/modifier-maison/{id}/{proprietaire}',[Compte::class,'modifiermaison'])->name('modifier-maison');
    Route::get('/vendu/{id}',[Compte::class,'vendu'])->name('vendu');
    Route::get('/vendus/{id}',[Compte::class,'vendus'])->name('vendus');
    Route::post('/enregistrer-un-bien',[Compte::class,'enregistrerunbien'])->name('enregistrer-un-bien');
    Route::post('/modifier-un-bien',[Compte::class,'modifierunbien'])->name('modifier-un-bien');
    Route::post('/modifier-maisons',[Compte::class,'modifiermaisons'])->name('modifier-maisons');


//Route::post('/Connexion-utilisateur',[Compte::class,'Connexionutilisateur'])->name('midlware');

Route::get('/getImg/{img}',function(){
    return asset("storage/".$img);
});

