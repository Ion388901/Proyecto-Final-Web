@extends('npanel.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            ¡Bienvenido!
        </div>
    </div>
    @if (Auth::check())
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <td>
                        {{ Auth::user()->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Correo
                    </th>
                    <td>
                        {{ Auth::user()->email }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="{{ route('npanel.user.logout') }}">Cerrar sesión</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('npanel.user.signin') }}">Iniciar sesión</a>
                </li>
                <li>
                    <a href="{{ route('npanel.user.register') }}">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <a href="{{ route('npanel.productos.index') }}">Índice de productos</a>
                </li>
                <li>
                    <a href="{{ route('npanel.colecciones.index') }}">Índice de colecciones</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection