<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        return view('agendar', compact('service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,IdService',
            'agendaFecha' => 'required|date',
        ]);

        $agenda = new Agenda();
        $agenda->IdService = $request->service_id;
        $agenda->DateAgenda = $request->agendaFecha;
        $agenda->IdClient = Auth::guard('client')->id();  // Asegúrate de tener auth configurado para cliente.
        $agenda->save();

        return redirect()->route('home')->with('success', '¡Servicio agendado exitosamente!');
    }
}
