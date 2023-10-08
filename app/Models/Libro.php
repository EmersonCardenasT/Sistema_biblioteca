<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libro';
    protected $primarykey = 'id';
    protected $fillable = ['nom_libro', 'cantidad', 'idautor', 'ideditorial'];
    public $timestamps = false;

    public function Autor(){
        return $this->hasOne(Autor::class, 'id', 'idautor');
    }

    public function Editorial(){
        return $this->hasOne(Editorial::class, 'id', 'ideditorial');
    }
}
