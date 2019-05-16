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

<!-- Nombredisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreDisciplina', 'Nombredisciplina:') !!}
    {!! Form::text('nombreDisciplina', null, ['class' => 'form-control']) !!}
</div>

<!-- Gradodisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gradoDisciplina', 'Gradodisciplina:') !!}
    {!! Form::text('gradoDisciplina', null, ['class' => 'form-control']) !!}
</div>

<!-- Cinturondisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cinturonDisciplina', 'Cinturondisciplina:') !!}
    {!! Form::text('cinturonDisciplina', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripciondisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcionDisciplina', 'Descripciondisciplina:') !!}
    {!! Form::text('descripcionDisciplina', null, ['class' => 'form-control']) !!}
</div>


<!-- Gradodisciplina Field -->


<!-- Cinturondisciplina Field -->
<!-- Descripciondisciplina Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('maestros.index') !!}" class="btn btn-default">Cancel</a>
</div>
