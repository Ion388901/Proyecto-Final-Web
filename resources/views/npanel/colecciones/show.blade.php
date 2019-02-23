@extends('npanel.layouts.main')

@section('content')
<style>
    .uper{
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Show Coleccion
    </div>
    <div class="pull-right">
        <a href="{{ route('npanel.colecciones.index') }}" class="btn btn-primary">Regresar</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Nombre:</label>
            {{$coleccion->nombre}}
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Descripcion:</label>
            {{$coleccion->descripcion}}
        </div>
    </div>
</div>
@endsection