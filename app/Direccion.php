<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
  public $fillable = [
      'numero',
      'calle',
      'comuna',
      'provincia',
      'region'
  ];

  protected $primaryKey = 'idDireccion';
}
