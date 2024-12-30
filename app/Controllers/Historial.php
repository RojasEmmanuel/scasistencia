<?php

namespace App\Controllers;

class Historial extends BaseController
{
    public function index()//: string
    {
        $data = [
            'title' => 'Historial de Eventos'
        ];
        
        return view('historialEventos', $data);
    }
}
