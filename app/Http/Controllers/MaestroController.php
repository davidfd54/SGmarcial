<?php

namespace App\Http\Controllers;

use App\Maestro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use App\User;
use Flash;
class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $maestro = Maestro::all();
      return view('maestros.index')->with('maestros', $maestro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $disciplinas = Disciplina::pluck('nombreDisciplina','idDisciplina');
    $usuarios = User::pluck('name','idUsuario');
     return view('maestros.create',compact('disciplinas'),compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

  $input2 = $request->only('nombreDisciplina','gradoDisciplina','cinturonDisciplina','descripcionDisciplina');



  $input2= Disciplina::create($input2);

  $lastInsertedId=$input2->idDisciplina;

//$input = $request->only('nombreMaestro','apellidoMaestro','fechaNacimiento','idUsuario');

Maestro::create([
      'nombreMaestro' => $request['nombreMaestro'],
      'apellidoMaestro' => $request['apellidoMaestro'],
      'fechaNacimiento' => $request['fechaNacimiento'],

      'idUsuario' =>$request['idUsuario'],
      'idDisciplina' => $lastInsertedId,

    ]);

      Flash::error('maestro gaurdado');

      $maestro = Maestro::all();
      return view('maestros.index')->with('maestros', $maestro);





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    {
      $maestro =  Maestro::find($maestro);

      if (empty($maestro)) {

          Flash::error('Maestro not found');

          return redirect(route('maestros.index'));
      }

      return view('maestros.show')->with('maestro', $maestro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maestro $maestro)
    {
        //
    }
}
