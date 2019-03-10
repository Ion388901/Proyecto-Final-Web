@extends('panel.layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo producto</h1>
    </div>
    <div class="pull-right">
        <a href="{{ route('panel.productos.index') }}" class="btn btn-primary">Regresar</a>
    </div>
</div>
<form action="{{ route('panel.productos.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="producto[nombre]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="producto[descripcion]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="producto[precio]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descuento</label>
                <input type="text" class="form-control" name="producto[descuento]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Coleccion</label>
                <select name="producto[coleccion_id]" class="form-control">
                @foreach ($data['colecciones'] as $coleccion)
                    <option value="{{ $coleccion->id }}">{{ $coleccion->nombre }}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection