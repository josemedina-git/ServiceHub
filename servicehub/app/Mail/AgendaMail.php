<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgendaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $agenda;
    public $serviceName;
    public $agendaDate;

    public function __construct($agenda, $serviceName, $agendaDate)
    {
        $this->agenda = $agenda;
        $this->serviceName = $serviceName;
        $this->agendaDate = $agendaDate;
    }

    public function build()
    {
        return $this->view('mail.agendar')
                    ->with([
                        'serviceName' => $this->serviceName,
                        'agendaDate' => $this->agendaDate,
                    ]);
    }
}