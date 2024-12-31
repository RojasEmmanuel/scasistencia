<?php

namespace App\Controllers;

class Proximos extends BaseController
{
    public function index()//: string
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM evento WHERE fecha >= CURDATE()');
        $result = $query->getResult();

        $data = [
            'title' => 'Eventos Próximos',
            'eventos' => $result
        ];

        return view('eventosProximos', $data);
    }

}
