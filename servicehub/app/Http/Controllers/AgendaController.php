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
    $agenda->IdClient = Auth::guard('client')->id();  // Ensure auth is configured for the client.
    $agenda->save();

    // Retrieve the authenticated client
    $client = Auth::guard('client')->user();

    // Ensure the client object is not null and has an email property
    if ($client && isset($client->Email)) {
        // Send email to the client
        Mail::to($client->Email)->send(new AgendaMail($agenda, $agenda->service->NameService, $agenda->DateAgenda));
    } else {
        // Handle the case where the client or email is not available
        return redirect()->route('home')->with('error', 'No se pudo enviar el correo. Verifica tu cuenta.');
    }

    return redirect()->route('home')->with('success', '¡Servicio agendado exitosamente!');
}
}
