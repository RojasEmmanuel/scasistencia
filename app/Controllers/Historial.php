<?php

namespace App\Controllers;

class Historial extends BaseController
{
    public function index()//: string
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM evento WHERE fecha < CURDATE()');
        $result = $query->getResult();

        $data = [
            'title' => 'Historial de Eventos',
            'historial' => $result
        ];
        
        return view('historialEventos', $data);
    }
}
