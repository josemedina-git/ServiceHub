<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfessionalAuthController extends Controller
{
    // Registro de profesionales
    public function register(Request $request)
    {
        // Validación de datos de entrada mejorada
        $validatedData = $request->validate([
            'FirstName' => 'required|string|max:45',
            'LastName' => 'required|string|max:45',
            'CURP' => 'required|string|max:18|unique:professionals',
            'RFC' => 'required|string|max:13|unique:professionals',
            'Experience' => 'required|string',
            'Availability' => 'required|string|max:100',
            'Email' => 'required|string|email|max:150|unique:professionals',
            'Password' => 'required|string|min:8|confirmed', // Aumentado a 8 caracteres mínimo
        ]);

        // Crear profesional con contraseña encriptada
        $professional = Professional::create([
            'FirstName' => $validatedData['FirstName'],
            'LastName' => $validatedData['LastName'],
            'CURP' => $validatedData['CURP'],
            'RFC' => $validatedData['RFC'],
            'Experience' => $validatedData['Experience'],
            'Availability' => $validatedData['Availability'],
            'Email' => $validatedData['Email'],
            'Password' => Hash::make($validatedData['Password']), // Encriptación segura de contraseña
        ]);

        // Iniciar sesión y regenerar sesión
        Auth::guard('professional')->login($professional);
        $request->session()->regenerate();

        return redirect()->route('Professionaldashboard');
    }

    // Login de profesionales
    public function login(Request $request)
    {
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'Email' => 'required|email',
            'Password' => 'required'
        ]);

        // Usar Auth::attempt para verificar credenciales de forma segura
        if (Auth::guard('professional')->attempt([
            'Email' => $validatedData['Email'],
            'password' => $validatedData['Password']
        ])) {
            $request->session()->regenerate();
            return redirect()->route('Professionaldashboard');
        }

        throw ValidationException::withMessages([
            'Email' => ['Las credenciales proporcionadas son incorrectas.'],
        ]);
    }

    // Logout de profesionales
    public function logout(Request $request)
    {
        Auth::guard('professional')->logout();
        
        // Invalidar la sesión y regenerar el token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('IniciarSesionProfesional');
    }
}