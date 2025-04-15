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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::where('Email', $credentials['email'])->first();

        if (!$client || !Hash::check($credentials['password'], $client->Password)) {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }

        Auth::login($client);
        return redirect()->route('favorite'); // Cambia a la ruta de tu panel principal
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'surname' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,Email|max:150',
            'phone' => 'required|string|max:15',
            'password' => 'required|min:6|confirmed',
        ]);

        $client = Client::create([
            'FirstName' => $request->name,
            'LastName' => $request->surname,
            'Email' => $request->email,
            'PhoneNumber' => $request->phone,
            'Password' => Hash::make($request->password),
        ]);

        Auth::login($client);
        return redirect()->route('favorite');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}