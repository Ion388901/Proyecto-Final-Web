@extends('npanel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-success btn-sm" href="{{ route('npanel.productos.index', ['order' => 'desc']) }}">Ordena de forma descendente</a>
        <a class="btn btn-success btn-sm" href="{{ route('npanel.productos.index', ['order' => 'asc']) }}">Ordena de forma ascendente</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Descuento</th>
            </theader>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>
                            {{ $producto->nombre }}
                        </td>
                        <td>
                            {{ $producto->descripcion }}
                        </td>
                        <td>
                            {{ $producto->precio }}
                        </td>
                        <td>
                            {{ $producto->descuento }}
                        </td>
                        <td>
                            <a href="{{ route('npanel.productos.show', $producto->id) }}" class="btn btn-info">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection