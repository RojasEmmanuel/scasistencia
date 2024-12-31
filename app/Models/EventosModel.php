<?php
namespace App\Models;

use CodeIgniter\Model;

class EventosModel extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'idEvento';
    protected $allowedFields = ['nombre', 'fecha', 'hora', 'lugar', 'area','responsable','descripcion','tipo'];
}