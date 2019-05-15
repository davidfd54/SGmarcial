<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{


  protected $fillable = [
      'dDisciplina' => 'integer',
      'nombreDisciplina' => 'string',
      'gradoDisciplina' => 'string',
      'cinturonDisciplina' => 'string',
      'descripcionDisciplina' => 'string'

  ];


}
