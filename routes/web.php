<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResController;
use App\Http\Controllers\FilliereController;


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
Route::get('/delete-filliere/{id}',[FilliereController::class,'delete_filliere']);
Route::get('/update-filliere/{id}',[FilliereController::class,'update_filliere']);
Route::post('/update/traitement',[FilliereController::class,'update_filliere_traitement']);
Route::get('/filliere', [FilliereController::class,'liste_filliere' ]);
Route::get('/ajouter',[FilliereController::class,'ajouter_filliere']);
Route::get('/ajouter/filliere/{id}',[FilliereController::class,'ajouter_filliere']);
Route::post('/ajouter/traitement',[FilliereController::class,'ajouter_filliere_traitement']);








