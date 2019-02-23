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
    </div>
</div>
@endsection