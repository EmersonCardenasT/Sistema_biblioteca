<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $table = 'editorial';
    protected $primarykey = 'id';
    protected $fillable = ['nom_editorial'];
    public $timestamps = false;
}
