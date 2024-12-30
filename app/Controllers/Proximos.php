<?php

namespace App\Controllers;

class Proximos extends BaseController
{
    public function index()//: string
    {

        $data = [
            'title' => 'Eventos Próximos'
        ];
        return view('eventosProximos', $data);
    }

}
