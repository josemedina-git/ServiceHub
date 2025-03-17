<?php

namespace App\Http\Controllers;

use App\Models\Client; // Importar el modelo de Client
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:150|unique:clients',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear el nuevo cliente
        $client = Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password), // Encriptar contraseña
        ]);

        // Iniciar sesión automáticamente después del registro
        Auth::guard('client')->login($client);

        // Redirigir al dashboard o a la página de inicio
        return redirect()->route('dashboard')->with('success', 'Registro exitoso');
    }
}
