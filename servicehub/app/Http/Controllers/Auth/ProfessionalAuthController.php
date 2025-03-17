<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfessionalAuthController extends Controller
{
    // Registro de profesionales
    public function register(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string|max:45',
            'LastName' => 'required|string|max:45',
            'CURP' => 'required|string|max:18|unique:professionals',
            'RFC' => 'required|string|max:13|unique:professionals',
            'Experience' => 'required|string',
            'Availability' => 'required|string|max:100',
            'Email' => 'required|string|email|max:150|unique:professionals',
            'Password' => 'required|string|min:5|confirmed',
        ]);

        $professional = Profesional::create([
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'CURP' => $request->CURP,
            'RFC' => $request->RFC,
            'Experience' => $request->Experience,
            'Availability' => $request->Availability,
            'Email' => $request->Email,
            'Password' => Hash::make($request->Password),
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::guard('professional')->login($professional);

        return response()->json([
            'message' => 'Professional registered and logged in successfully!',
            'professional' => $professional
        ], 201);
    }

    // Login de profesionales
    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required'
        ]);

        $professional = Profesional::where('Email', $request->Email)->first();

        if (!$professional || !Hash::check($request->Password, $professional->Password)) {
            throw ValidationException::withMessages([
                'Email' => ['The provided credentials are incorrect.'],
            ]);
        }

        Auth::guard('professional')->login($professional);

        return redirect()->route('Professionaldashboard');
    }


    // Logout de profesionales
    public function logout()
    {
        Auth::guard('professional')->logout();
        return redirect()->route('IniciarSesionProfesional');
    }
}
