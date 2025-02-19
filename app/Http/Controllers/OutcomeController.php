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
            'outcomes' => $outcomes,
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

        session()->flash('success', 'Expense added successfully!');

        return redirect()->route('outcome.index')->with('success', 'Expense added successfully');
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
    public function edit(Outcome $outcome)
    {
        return view('outcome.edit', compact('outcome'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outcome $outcome)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
        ]);

        $outcome->update($request->all());


        return redirect()->route('outcome.index')->with('success', 'Expense updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outcome $outcome)
    {
        $outcome->delete();
        return redirect()->route('outcome.index')->with('success', 'Outcome deleted successfully');
    }
}


