<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enviar(Request $request, $numero)
    {
        $user = $request->user;
        $correo = New AnuncioMail ($user , $numero);

        Mail::to($user)->send($correo);

        return "Se enviuo elñ correo electroncio";
    }
}
