@extends('panel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('panel.productos.create') }}" role="button">Agregar un producto</a>
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
                            <form action="{{ route('panel.productos.destroy', $producto->id) }}" method="POST">
                            <a href="{{ route('panel.productos.show', $producto->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('panel.productos.edit', $producto->id) }}" class="btn btn-primary">Edit</a>
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