<?php

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



