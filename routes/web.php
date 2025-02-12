<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});


//rutas para income
Route::get('/incomes', [IncomeController::class, 'index'])->name('income.index');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('income.create');

Route::post('/incomes', [IncomeController::class, 'store'])->name('income.store');

Route::get('/incomes/{income}/edit', [IncomeController::class, 'edit'])->name('income.edit');

Route::put('/incomes/{income}', [IncomeController::class, 'update'])->name('income.update');

Route::delete('/incomes/{income}', [IncomeController::class, 'destroy'])->name('income.destroy');



//rutas para outcome
Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcome.index');

Route::get('/outcomes/create', [OutcomeController::class, 'create'])->name('outcome.create');

Route::post('/outcomes', [OutcomeController::class, 'store'])->name('outcome.store');

Route::get('/outcomes/{outcome}/edit', [OutcomeController::class, 'edit'])->name('outcome.edit');

Route::put('/outcomes/{outcome}', [OutcomeController::class, 'update'])->name('outcome.update');

Route::delete('/outcomes/{outcome}', [OutcomeController::class, 'destroy'])->name('outcome.destroy');
