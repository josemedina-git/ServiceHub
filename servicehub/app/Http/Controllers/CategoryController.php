<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all(); // Obtener todos los registros
        return view('index', compact('category'));
    }


    public function showServices($id)
    {
        $category = Category::with([
            'services.professionalServices.professional'
        ])->findOrFail($id);

        return view('services', compact('category'));
    }
}
