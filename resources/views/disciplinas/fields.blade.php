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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('disciplinas.index') !!}" class="btn btn-default">Cancel</a>
</div>
