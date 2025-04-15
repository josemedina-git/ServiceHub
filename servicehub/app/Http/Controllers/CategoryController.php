<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Cambié el nombre a plural para mejor semántica
        return view('index', compact('categories'));
    }

    public function showServices($IdCategory)
    {
        $category = Category::with([
            'services.professionalServices.professional'
        ])->where('IdCategory', $IdCategory)->firstOrFail();

        return view('services', compact('category'));
    }
}