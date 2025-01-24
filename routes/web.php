<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;

Route::get('/', function () {
    return view('welcome');
});

// Mostrar la tabla
Route::get('/incomes', [IncomeController::class, 'index'])->name('income.index');
