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
        <a href="{{ route('panel.productos.index') }}" class="btn btn-primary">Regresar</a>
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
            <form method="POST" action="{{ route('panel.productos.update', $producto->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}"/>
                    </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ $producto->descripcion }}"/>
                    </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="float" class="form-control" name="precio" value="{{ $producto->precio }}"/>
                    </div>
                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="float" class="form-control" name="descuento" value="{{ $producto->descuento }}"/>
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection