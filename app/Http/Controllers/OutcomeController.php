<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index()
    {
        $outcomes = Outcome::all();

        $tableData = [
            'heading' => ['date', 'category', 'amount'],
            'data' => $outcomes->map(function ($outcome) {
                return [
                    $outcome->created_at->format('d/m/Y'), 
                    $outcome->category,
                    $outcome->amount, 
                ];
            }),
        ];

        $botonEnlace = [
            'enlace' => route('income.create'),
        ];

        $botonEnlace2 = [
            'enlace' => route('outcome.create')
        ]; 

        return view('outcome.index', [
            'title' => 'Lista de Gastos',
            'tableData' => $tableData,
            'botonEnlace' => $botonEnlace,
            'botonEnlace2' => $botonEnlace2, 
        ]);
    }

    public function create()
    {
        return view('outcome.create', ['title' => 'Create Expense']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
        ]);

        Outcome::create([
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect()->route('outcome.index')->with('success', 'Expense added successfully');
    }
}
