<li class="{{ Request::is('disciplinas*') ? 'active' : '' }}">
    <a href="{!! route('disciplinas.index') !!}"><i class="fa fa-edit"></i><span>Disciplinas</span></a>
</li>

<li class="{{ Request::is('direccions*') ? 'active' : '' }}">
    <a href="{!! route('direccions.index') !!}"><i class="fa fa-edit"></i><span>Direccion</span></a>
</li>
<li class="{{ Request::is('maestros*') ? 'active' : '' }}">
    <a href="{!! route('maestros.index') !!}"><i class="fa fa-users"></i><span>Maestros</span></a>
</li>
