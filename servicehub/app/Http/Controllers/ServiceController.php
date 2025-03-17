<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get(); // Obtiene los primeros 6 servicios
        return view('index', compact('services'));
    }
    
}
