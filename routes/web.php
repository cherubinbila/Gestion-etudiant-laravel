<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\FonctionController;

Route::get('/', function () {
    return view('gestion.index');
});

Route::prefix('etudiants')->group(function () {
    // Afficher la liste des étudiants
    Route::get('/', [FonctionController::class, 'index'])->name('liste');

    // Afficher le formulaire pour créer un nouvel étudiant
    Route::get('/create', [FonctionController::class, 'create'])->name('etudiants.create');

    // Stocker un nouvel étudiant
    Route::post('/', [FonctionController::class, 'store'])->name('etudiants.store');

    // Afficher le formulaire pour éditer un étudiant existant
    Route::get('/{etudiant}/edit', [FonctionController::class, 'edit'])->name('etudiants.edit');

    // Mettre à jour un étudiant existant
    Route::put('/{etudiant}', [FonctionController::class, 'update'])->name('etudiants.update');

    // Supprimer un étudiant
    Route::delete('/{etudiant}', [FonctionController::class, 'destroy'])->name('etudiants.destroy');
});
