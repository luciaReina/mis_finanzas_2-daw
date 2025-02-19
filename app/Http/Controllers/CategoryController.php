<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income; 
use App\Models\Category;

class CategoryController extends Controller
{
    // Método para listar todas las categorías
    public function index()
    {
        $categories = Income::select('category')->distinct()->get();
        return view('categories.index', compact('categories'));
    }

    // Método para mostrar una categoría y sus incomes asociados
    public function show($category)
    {
        $incomes = Income::where('category', $category)->get();
        return view('categories.show', compact('category', 'incomes'));
    }
}
