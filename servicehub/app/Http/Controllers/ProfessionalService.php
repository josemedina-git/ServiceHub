<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessionalServices;



class ProfessionalService extends Controller
{

    public function index()
    {
        // Obtener los primeros 9 servicios junto con la información relacionada
        $services = ProfessionalServices::with('service')->take(9)->get();
        return view('index', compact('services'));
    }
}
