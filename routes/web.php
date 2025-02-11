<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/incomes', [IncomeController::class, 'index'])->name('income.index');
// Ruta para mostrar el formulario de creación de incomes
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('income.create');

// Ruta para guardar un nuevo income en la base de datos
Route::post('/incomes', [IncomeController::class, 'store'])->name('income.store');

Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcome.index');

Route::get('/outcomes/create', [OutcomeController::class, 'create'])->name('outcome.create');

Route::post('/outcomes', [OutcomeController::class, 'store'])->name('outcome.store');

