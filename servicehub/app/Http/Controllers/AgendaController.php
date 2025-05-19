<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Agenda;
use App\Mail\AgendaMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgendaController extends Controller
{
    public function index()
    {
        $client = auth('client')->user();
        $agendas = $client->agendas()->with('service')->get();

        return view('agenda', compact('agendas'));
    }
    
    public function create(Service $service)
    {
        // Laravel automáticamente valida el ID del servicio
        return view('agendar', compact('service'));
    }

    public function store(Request $request)
    {
        // Validación de datos de entrada
        $validatedData = $request->validate([
            'service_id' => 'required|exists:services,IdService',
            'agendaFecha' => 'required|date',
        ]);

        // Crear agenda con datos validados
        $agenda = new Agenda();
        $agenda->IdService = $validatedData['service_id'];
        $agenda->DateAgenda = $validatedData['agendaFecha'];
        $agenda->IdClient = Auth::guard('client')->id();
        $agenda->save();

        // Recuperar el cliente autenticado
        $client = Auth::guard('client')->user();

        // Verificar que el cliente exista y tenga un email
        if ($client && isset($client->Email)) {
            // Enviar email al cliente
            Mail::to($client->Email)->send(new AgendaMail($agenda, $agenda->service->NameService, $agenda->DateAgenda));
        } else {
            return redirect()->route('home')->with('error', 'No se pudo enviar el correo. Verifica tu cuenta.');
        }

        return redirect()->route('home')->with('success', '¡Servicio agendado exitosamente!');
    }
}