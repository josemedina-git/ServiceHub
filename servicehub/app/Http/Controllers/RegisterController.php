<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validación mejorada
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:150|unique:clients,Email',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed', // Aumentado a 8 caracteres mínimo
        ]);

        // Crear cliente con contraseña encriptada
        $client = Client::create([
            'FirstName' => $validatedData['first_name'],
            'LastName' => $validatedData['last_name'],
            'Email' => $validatedData['email'],
            'PhoneNumber' => $validatedData['phone_number'],
            'Password' => Hash::make($validatedData['password']), // Encriptación segura de contraseña
        ]);

        // Iniciar sesión y regenerar sesión
        Auth::guard('client')->login($client);
        $request->session()->regenerate();

        return redirect()->route('dashboard')->with('success', 'Registro exitoso');
    }
}