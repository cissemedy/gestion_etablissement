<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\NiveauController;

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
Route::get('/ajoute',[ResponsableController::class,'ajoute_responsable']);
Route::post('/ajoute/traitement',[ResponsableController::class,'ajoute_responsable_traitement']);

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

