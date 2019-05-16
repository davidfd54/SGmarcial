<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaUsuario extends Model
{
  public $fillable = [
      'idCuenta',
      'rut',
      'nombre1',
      'nombre2',
      'apellidoM',
      'apellidoP',
      'genero',
      'fechaNacimiento',
      'telefono',
      'peso',
      'idDireccion',
      'idDisciplina',
  ];

  protected $primaryKey = 'idCuenta';
}
