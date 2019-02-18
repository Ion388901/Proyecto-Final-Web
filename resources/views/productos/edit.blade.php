@extends('panel.layouts.main')

@section('content')
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Edit Producto
    </div>
    <div class="pull-right">
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Regresar</a>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
            <form method="POST" action="{{ route('productos.update', $producto->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" nombre="nombre" value={{ $producto->nombre }}/>
                    </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" descripcion="descripcion" value={{ $producto->descripcion }}/>
                    </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="float" class="form-control" precio="precio" value={{ $producto->precio }}/>
                    </div>
                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="float" class="form-control" descuento="descuento" value={{ $producto->descuento }}/>
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection