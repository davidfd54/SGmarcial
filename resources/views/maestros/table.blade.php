<table class="table table-responsive" id="maestros-table">
    <thead>
        <tr>
            <th>Nombremaestro</th>
        <th>Apellidomaestro</th>
        <th>Fechanacimiento</th>
        <th>Rut</th>
        <th>Idusuario</th>
        <th>Iddisciplina</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($maestros as $maestro)
        <tr>
            <td>{!! $maestro->nombreMaestro !!}</td>
            <td>{!! $maestro->apellidoMaestro !!}</td>
            <td>{!! $maestro->fechaNacimiento !!}</td>
            <td>{!! $maestro->rut !!}</td>
            <td>{!! $maestro->idUsuario !!}</td>
            <td>{!! $maestro->Disciplina->nombreDisciplina !!}</td>
            <td>
                {!! Form::open(['route' => ['maestros.destroy', $maestro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('maestros.show', [$maestro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('maestros.edit', [$maestro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
