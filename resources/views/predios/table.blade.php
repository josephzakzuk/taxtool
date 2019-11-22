<table class="table table-responsive" id="predios-table">
    <thead>
        <tr>
            <th>Referencia</th>
        <th>Area</th>
        <th>Cliente</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($predios as $predio)
        <tr>
            <td>{!! $predio->referencia !!}</td>
            <td>{!! $predio->area !!}</td>
            <td>{!! $predio->Cliente->name !!}</td>
            <td>
                {!! Form::open(['route' => ['predios.destroy', $predio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('predios.show', [$predio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('predios.edit', [$predio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>