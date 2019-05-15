<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{


  protected $fillable = [
      'idDisciplina',
      'nombreDisciplina',
      'gradoDisciplina',
      'cinturonDisciplina',
      'descripcionDisciplina',

  ];

  protected $primaryKey = 'idDisciplina';

}
