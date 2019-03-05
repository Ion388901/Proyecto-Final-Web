@extends('npanel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-success btn-sm" href="{{ route('npanel.colecciones.index', ['order' => 'desc']) }}">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="{{ route('npanel.colecciones.index', ['order' => 'asc']) }}">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Nombre</th>
                <th>Descripcion</th>
            </theader>
            <tbody>
                @foreach($colecciones as $coleccion)
                    <tr>
                        <td>
                            {{ $coleccion->nombre }}
                        </td>
                        <td>
                            {{ $coleccion->descripcion }}
                        </td>
                        <td>
                            <a href="{{ route('npanel.colecciones.show', $coleccion->id) }}" class="btn btn-info">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection