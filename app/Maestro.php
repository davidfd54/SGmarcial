<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Disciplina;


class Maestro extends Model
{
  protected $fillable = [
      'nombreMaestro',
      'apellidoMaestro',
      'fechaNacimiento',

      'idUsuario' ,
      'idDisciplina'
  ];

  protected $primaryKey = 'idMaestro';
  public function User()
{
  return $this->belongsTo(User::class, 'idUsuario');

}
public function Disciplina()
{
return $this->belongsTo(Disciplina::class, 'idDisciplina');

}
}
