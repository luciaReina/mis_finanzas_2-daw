<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    public function index()
    {
        $outcomes = Outcome::all();

        return view('outcome.index', [
            'outcomes' => $outcomes,
            'title' => 'Lista de Ingresos',
        ]);
    }
}

