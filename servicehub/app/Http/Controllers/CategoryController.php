<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function showServices($IdCategory)
    {
        // Convertir a entero para prevenir inyección SQL
        $IdCategory = (int) $IdCategory;
        
        $category = Category::with([
            'services.professionalServices.professional'
        ])->where('IdCategory', $IdCategory)->firstOrFail();

        return view('services', compact('category'));
    }
}