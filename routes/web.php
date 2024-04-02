<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\FilliereController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great 
|
*/

Route::get('/delete-filliere/{id}',[FilliereController::class,'delete_filliere']);
Route::get('/update-filliere/{id}',[FilliereController::class,'update_filliere']);
Route::post('/updatee/traitement',[FilliereController::class,'updatee_filliere_traitement']);
Route::get('/filliere', [FilliereController::class,'liste_filliere' ]);
Route::get('/ajouté',[FilliereController::class,'ajouté_filliere']);
Route::get('/ajouté/filliere/{id}',[FilliereController::class,'ajouté_filliere']);
Route::post('/ajouté/traitement',[FilliereController::class,'ajouté_filliere_traitement']);

Route::get('/delete-responsable/{id}', [ResponsableController::class, 'delete_responsable']);

Route::get('/updat-responsable/{id}',[ResponsableController::class,'updat_responsable']);
Route::post('/updat/traitement',[ResponsableController::class,'updat_responsable_traitement']);
Route::get('/responsable', [ResponsableController::class,'liste_responsable' ]);
Route::get('/ajout',[ResponsableController::class,'ajouter_responsable']);
Route::get('/ajout/responsable/{id}',[ResponsableController::class,'ajouter_responsable']);
Route::post('/ajout/traitement',[ResponsableController::class,'ajout_responsable_traitement']);


Route::get('/supprimer-apprenant/{id}', [ApprenantController::class, 'supprimer_apprenant']);

Route::get('/modifier-apprenant/{id}', [ApprenantController::class, 'modifier_apprenant']);
Route::post('/modifier/traitement', [ApprenantController::class, 'modifier_apprenant_traitement']);

Route::get('/detail-apprenant/{id}', [ApprenantController::class, 'detail_apprenant']);
Route::get('/detail-responsable/{id}', [ResponsableController::class, 'detail_responsable']);
Route::get('/detail-niveau/{id}', [NiveauController::class, 'detail_niveau']);
Route::get('/detail-filliere/{id}', [FilliereController::class, 'detail_filliere']);

Route::get('/ajouter-apprenant/{id}', [ApprenantController::class, 'ajouter_apprenant']);
Route::get('/apprenant', [ApprenantController::class, 'liste_apprenant']);
Route::get('/ajouter', [ApprenantController::class, 'ajouter_apprenant']);
Route::post('/ajouter/traitement', [ApprenantController::class, 'ajouter_apprenant_traitement']);


Route::resource("/professeur", ProfesseurController::class);




Route::get('/delete-niveau/{id}', [NiveauController::class, 'delete_niveau']);
Route::get('/update-niveau/{id}', [NiveauController::class, 'update_niveau']);
Route::post('/update/traitement',[NiveauController::class,'update_niveau_traitement']);

Route::get('/detail',[NiveauController::class,'detail_niveau']);
Route :: post ( '/modifier/traitement' , [ ApprenantController ::class, 'modifier_apprenant_traitement' ]);
Route :: get ( '/detail-responsable/{id}' , [ ResponsableController ::class, 'detail_responsable' ]);
Route :: get ( '/detail-niveau/{id}' , [ NiveauController ::class, 'detail_niveau' ]);
Route :: get ( '/ajouter-apprenant/{id}' , [ ApprenantController ::class, 'ajouter_apprenant' ]);
Route :: get ( '/apprenant' , [ ApprenantController ::class, 'liste_apprenant' ]);

Route::get('/niveau', [NiveauController::class, 'liste_niveau']);
Route::get('/ajoute',[NiveauController::class,'ajoute_niveau']);
Route::post('/ajoute/traitement',[NiveauController::class,'ajoute_niveau_traitement']);


Route::get('/', function ()
{
    return view('layout');
});

Route::get('/index', function ()
{
    return view('index');
});

