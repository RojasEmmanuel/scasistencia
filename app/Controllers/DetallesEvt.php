<?php

namespace App\Controllers;

class DetallesEvt extends BaseController
{
    public function index()//: string
    {
        $data = [
            'title' => 'Estudiantes Inscritos en el Periodo',
        ];
        
        return view('detallesEvento',$data);
    }
}
