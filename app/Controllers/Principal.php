<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index()//: string
    {
        $data = [
            'title' => 'Panel de Administración'
        ];
        
        return view('principal', $data);
    }


    
}
