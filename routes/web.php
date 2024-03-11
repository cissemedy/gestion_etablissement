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

Route::get('/update-responsable/{id}',[ResponsableController::class,'update_responsable']);
Route::post('/update/traitement',[ResponsableController::class,'update_responsable_traitement']);


Route::get('/responsable',[ResponsableController::class,'liste_responsable']);
Route::get('/ajouter',[ResponsableController::class,'ajouter_responsable']);
Route::get('/ajouter-responsable/{id}',[ResponsableController::class,'ajouter_responsable']);
Route::post('/ajouter/traitement',[ResponsableController::class,'ajouter_responsable_traitement']);

Route::get('/layout',[ResponsableController::class,'layout']);




