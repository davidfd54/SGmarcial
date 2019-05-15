<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Flash;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Disciplina = Disciplina::all();
      return view('disciplinas.index')->with('disciplinas', $Disciplina);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Disciplina::create($input);
        $Disciplina = Disciplina::all();
        return view('disciplinas.index')->with('disciplinas', $Disciplina);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina  $diciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $diciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Diciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $diciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
