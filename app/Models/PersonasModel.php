<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonasModel extends Model
{
    use HasFactory;
    protected $table='_personas';
    protected $fillable=[
      'nombre',
      'apellido',
      'direccion',
      'telefono',
    ];
}
