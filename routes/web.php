<?php

use App\Http\Controllers\SuperheroController;

Route::get('/superheroes', [SuperheroController::class, 'index'])->name('superheroes.index');
Route::get('/superheroes/create', [SuperheroController::class, 'create'])->name('superheroes.create');
Route::post('/superheroes', [SuperheroController::class, 'store'])->name('superheroes.store');
Route::get('/superheroes/{superhero}', [SuperheroController::class, 'show'])->name('superheroes.show');
Route::get('/superheroes/{superhero}/edit', [SuperheroController::class, 'edit'])->name('superheroes.edit');
Route::put('/superheroes/{superhero}', [SuperheroController::class, 'update'])->name('superheroes.update');
Route::delete('/superheroes/{superhero}', [SuperheroController::class, 'destroy'])->name('superheroes.destroy');
