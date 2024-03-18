<?php

use App\Http\Controllers\ApprenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/responsable',[ResponsableController::class,'liste_responsable']);
Route::get('/ajouter',[ResponsableController::class,'ajouter_responsable']);
Route::post('/ajouter/traitement',[ResponsableController::class,'ajouter_responsable_traitement']);

Route::get('/supprimer',[ResponsableController::class,'supprimer_responsable']);
Route::post('/modifier',[ResponsableController::class,'modifier_responsable']);



Route::get('/supprimer-apprenant/{id}', [ApprenantController::class, 'supprimer_apprenant']);

Route::get('/modifier-apprenant/{id}', [ApprenantController::class, 'modifier_apprenant']);
Route::post('/modifier/traitement', [ApprenantController::class, 'modifier_apprenant_traitement']);

Route::get('/detail-apprenant/{id}', [ApprenantController::class, 'detail_apprenant']);

Route::get('/ajouter-apprenant/{id}', [ApprenantController::class, 'ajouter_apprenant']);
Route::get('/apprenant', [ApprenantController::class, 'liste_apprenant']);
Route::get('/ajouter', [ApprenantController::class, 'ajouter_apprenant']);
Route::post('/ajouter/traitement', [ApprenantController::class, 'ajouter_apprenant_traitement']);




Route::get('/', function ()
{
    return view('layout');
});

Route::get('/index', function ()
{
    return view('index');
});