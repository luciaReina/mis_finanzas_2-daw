<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $incomes = Income::all(); // Puedes usar otros métodos como `where()`, `orderBy()`, etc.

        $tableData = [
            'heading' => ['date', 'category', 'amount'],
            'data' => $incomes->map(function ($income) {
                return [
                    $income->created_at->format('d/m/Y'), // Formato de fecha
                    'salary',
                    $income->amount,
                ];
            }),
        ];

        $botonEnlace = [
            'enlace' => 'http://localhost:8000/outcomes',
        ];
        
        //Aquí la lógica de negocio para el index
        return view('income.index',['title' => 'My incomes','tableData' => $tableData, 'botonEnlace' => $botonEnlace]);
        //return view('income.index',['title' => 'My incomes','tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
       //codigo aqui
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
