@extends('panel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('panel.colecciones.create') }}" role="button">Agregar una coleccion</a>
        <a class="btn btn-success btn-sm" href="{{ route('panel.colecciones.index', ['order' => 'desc']) }}">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="{{ route('panel.colecciones.index', ['order' => 'asc']) }}">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
        @if (!$data['colecciones']->isEmpty())
            <table class="table">
                <theader>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Productos</th>
                </theader>
                <tbody>
                    @foreach($data['colecciones'] as $coleccion)
                        <tr>
                            <td>
                                {{ $coleccion->nombre }}
                            </td>
                            <td>
                                {{ $coleccion->descripcion }}
                            </td>
                            <td>
                                @if(count($coleccion->producto) > 0)
                                {{ $coleccion->producto->nombre }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('panel.colecciones.destroy', $coleccion->id) }}" method="POST">
                                <a href="{{ route('panel.colecciones.show', $coleccion->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('panel.colecciones.edit', $coleccion->id) }}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
