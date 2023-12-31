<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumno';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'apellido', 'telefono'];
    public $timestamps = false;
}
