<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('signup');
    }

    public function login(Request $request)
    {
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el cliente utilizando parámetros preparados (protección contra inyección SQL)
        $client = Client::where('Email', $validatedData['email'])->first();

        if (!$client || !Hash::check($validatedData['password'], $client->Password)) {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }

        Auth::login($client);
        // Regenerar la sesión para prevenir ataques de fijación de sesión
        $request->session()->regenerate();
        
        return redirect()->route('favorite');
    }

    public function register(Request $request)
    {
        // Validación extendida para mayor seguridad
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'surname' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,Email|max:150',
            'phone' => 'required|string|max:15',
            'password' => 'required|min:8|confirmed', // Aumentado a 8 caracteres mínimo
        ]);

        // Crear cliente con contraseña encriptada
        $client = Client::create([
            'FirstName' => $validatedData['name'],
            'LastName' => $validatedData['surname'],
            'Email' => $validatedData['email'],
            'PhoneNumber' => $validatedData['phone'],
            'Password' => Hash::make($validatedData['password']), // Encriptación segura de contraseña
        ]);

        Auth::login($client);
        // Regenerar la sesión para prevenir ataques de fijación de sesión
        $request->session()->regenerate();
        
        return redirect()->route('favorite');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        // Invalidar la sesión y regenerar el token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}