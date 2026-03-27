<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class notificaciones extends Mailable
{
    public $bitacora;

    public function __construct($bitacora)
    {
        $this->bitacora = $bitacora;
    }

    public function build()
    {
        return $this->subject('Nueva Bitacora Ha Sido Subida')
            ->view('emails.bitacora');



    }
}
