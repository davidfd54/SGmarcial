<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $maestro->id !!}</p>
</div>

<!-- Nombremaestro Field -->
<div class="form-group">
    {!! Form::label('nombreMaestro', 'Nombremaestro:') !!}
    <p>{!! $maestro->nombreMaestro !!}</p>
</div>

<!-- Apellidomaestro Field -->
<div class="form-group">
    {!! Form::label('apellidoMaestro', 'Apellidomaestro:') !!}
    <p>{!! $maestro->apellidoMaestro !!}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    <p>{!! $maestro->fechaNacimiento !!}</p>
</div>

<!-- Rut Field -->
<div class="form-group">
    {!! Form::label('rut', 'Rut:') !!}
    <p>{!! $maestro->rut !!}</p>
</div>

<!-- Idusuario Field -->
<div class="form-group">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    <p>{!! $maestro->idUsuario !!}</p>
</div>

<!-- Iddisciplina Field -->
<div class="form-group">
    {!! Form::label('idDisciplina', 'Iddisciplina:') !!}
    <p>{!! $maestro->Disciplina->nombreDisciplina !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $maestro->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $maestro->updated_at !!}</p>
</div>
