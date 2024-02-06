<?php

use App\Http\Controllers\EtudiantController;
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

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');

Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');

Route::post('/etudiant/create', [EtudiantController::class, 'ajouter'])->name('etudiant.ajouter');
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'supprimer'])->name('etudiant.supprimer');

//Route::delete('/etudiant/{etudiant}' le{etudiant} fait ref au param etudiant que j'ai mis dans etudiant.blade.php, ici on point sur lui

Route::put('/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
