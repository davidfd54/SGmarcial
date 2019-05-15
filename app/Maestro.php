<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
  protected $fillable = [
      'iidMaestro' => 'integer',
      'nombreMaestro' => 'string',
      'apellidoMaestro' => 'string',
      'fechaNacimiento' => 'date',
      'rut' => 'integer',
      'idUsuario' => 'integer',
      'idDisciplina' => 'integer'
  ];
}
