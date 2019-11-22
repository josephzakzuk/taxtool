<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('predios*') ? 'active' : '' }}">
    <a href="{!! route('predios.index') !!}"><i class="fa fa-edit"></i><span>Predios</span></a>
</li>

