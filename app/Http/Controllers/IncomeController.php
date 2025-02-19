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
        $incomes = Income::all(); 

        $tableData = [
            'heading' => ['date', 'category', 'amount'],
            'data' => $incomes->map(function ($income) {
                return [
                    $income->created_at->format('d/m/Y'),
                    $income->category,
                    $income->amount,
                ];
            }),
        ];

        $botonEnlace = [
            'enlace' => route('income.create'),
        ];
        
        $botonEnlace2 = [
            'enlace' => route('outcome.create'),
        ];
        
        return view('income.index', [
            'title' => 'My incomes',
            'tableData' => $tableData,
            'incomes' => $incomes,
            'botonEnlace' => $botonEnlace,
            'botonEnlace2' => $botonEnlace2, 
        ]);

        //return view('income.index',['title' => 'My incomes','tableData' => $tableData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('income.create', ['title' => 'Create Income']);
    }


    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         $request->validate([
             'amount' => 'required|numeric',
             'category' => 'required|string|max:255',
         ]);
     
         Income::create([
             'amount' => $request->amount,
             'category' => $request->category,
         ]);

         session()->flash('success', 'Income added successfully!');
     
         return redirect()->route('income.index')->with('success', 'Income added successfully');
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
    public function edit(Income $income)
    {
        return view('income.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
        ]);

        $income->update($request->all());

        return redirect()->route('income.index')->with('success', 'Income updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('income.index')->with('success', 'Income deleted successfully');
    }
}
