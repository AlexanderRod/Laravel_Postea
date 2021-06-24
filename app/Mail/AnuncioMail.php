<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class AnuncioMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $numero;

    public function __construct(User $user, $numero)
    {
        $this->user = $user;
        $this->numero = $numero;
    }

    public function build()
    {
        return $this->view('email.numero');
    }
}
