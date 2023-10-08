<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamo';
    protected $primarykey = 'id';
    protected $fillable = ['fecha_prestamo', 'fecha_devolucion', 'estado', 'idlibro', 'idempleado', 'idalumno'];
    public $timestamps = false;

    public function Libro(){
        return $this->hasOne(Libro::class, 'id', 'idlibro');
    }

    public function Alumno(){
        return $this->hasOne(Alumno::class, 'id', 'idalumno');
    }
}
