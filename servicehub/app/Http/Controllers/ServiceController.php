<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        $categories = Category::all(); // Obtener todas las categorías
        return view('index', compact('services', 'categories'));
    }
}