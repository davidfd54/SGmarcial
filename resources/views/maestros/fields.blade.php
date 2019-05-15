<!-- Nombremaestro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreMaestro', 'Nombremaestro:') !!}
    {!! Form::text('nombreMaestro', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidomaestro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidoMaestro', 'Apellidomaestro:') !!}
    {!! Form::text('apellidoMaestro', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::date('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento']) !!}


</div>

@section('scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
          autoclose: true
        })


    </script>
@endsection

<!-- Rut Field -->

<div class="form-group col-sm-6">
    {!! Form::label('rut', 'Rut:') !!}
    {!! Form::number('rut', null, ['class' => 'form-control']) !!}
</div>


<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    {!! Form::select('idUsuario',$usuarios, null, ['class' => 'form-control']) !!}
</div>

<!-- Iddisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idDisciplina', 'Iddisciplina:') !!}
    {!! Form::select('idDisciplina', $disciplinas, null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('nombreDisciplina', 'Nombredisciplina:') !!}

<input type="text" name="nombreDisciplina" >

</div>

<!-- Gradodisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gradoDisciplina', 'Gradodisciplina:') !!}
<input type="text" name="gradoDisciplina" value="" class="form-control" >

</div>

<!-- Cinturondisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cinturonDisciplina', 'Cinturondisciplina:') !!}
<input type="text" name="'cinturonDisciplina" value="" class="form-control">
</div>

<!-- Descripciondisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcionDisciplina', 'Descripciondisciplina:') !!}
<input type="text" name="descripcionDisciplina" value="" class="form-control">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('maestros.index') !!}" class="btn btn-default">Cancel</a>
</div>
