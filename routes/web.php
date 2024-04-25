<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadreController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\ProgrammeController;

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

Route::get('/', function () { return view('welcome');});
// route de home page 
Route::get('/',[HomeController::class,"index"])->name("home.index");
// --------------route de secteur---------------------
Route::get('/secteur',[SecteurController::class,"index"])->name("secteur.index");
// Route POST du secteur
Route::post('/secteur', [SecteurController::class, "store"])->name("secteur.store");
//Route::delete('/secteur/{id}', 'SecteurController@destroy')->name('secteur.destroy');



//--------------- route de niveau-----------------------
Route::get('/niveau',[NiveauController::class,"index"])->name("niveau.index");
// Route POST du niveau
Route::post('/niveau', [NiveauController::class, "store"])->name("niveau.store");

// ----------------route de operateur -----------------------
Route::get('/operateur',[OperateurController::class,"index"])->name("opperateur.index");
// Route POST de l'opérateur
Route::post('/operateur', [OperateurController::class, "store"])->name("operateur.store");

// route de home programme
Route::get('/programme',[ProgrammeController::class,"index"])->name("programme.index");
// Route::get('/programme',[ProgrammeController::class,"index2"])->name("programme.index");
// Route POST de la page de programme
Route::post('/programme', [ProgrammeController::class, "store"])->name("programme.store");
// route de cadre 
Route::get('/cadre',[CadreController::class,"index"])->name("cadre.index");
// Route POST du cadre
Route::post('/cadre', [CadreController::class, "store"])->name("cadre.store");








