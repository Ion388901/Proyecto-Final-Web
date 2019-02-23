@extends('npanel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
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