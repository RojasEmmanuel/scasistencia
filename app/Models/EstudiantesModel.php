<?php
namespace App\Models;

use CodeIgniter\Model;

class EstudiantesModel extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nroControl', 'nombre', 'semestre', 'sexo', 'carrera'];
}