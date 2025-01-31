<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/incomes', [IncomeController::class, 'index'])->name('income.index');
Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcomes.index');
