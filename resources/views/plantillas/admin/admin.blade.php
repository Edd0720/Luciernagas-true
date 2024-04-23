@extends('main-admin')

@section('titulado')

<style>
    /* Estilos para las tablas */
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f5f5f5;
    }
</style>
<div class="container">
    <div class="section">
        <h2>Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Funciones</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientela as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->name}}</td>
                        <td>{{$cliente->lastname}}</td>
                        <td>{{$cliente->phone}}</td>
                        <td>{{$cliente->email}}</td>
                        <td><a href="{{ url('onDelete/'.$cliente->id) }}" ><img src="svg/trash-can.svg"></a>
                            <a href="{{ url('onEdit/'.$cliente->id)}}" onclick="variable();"><img src="svg/pen-edit.svg" alt=""></a>
                        </td>
                        <td>
                            @if ($cliente->salon) <!-- Verifica si el cliente tiene un salón asociado -->
                                <img src="{{ asset($cliente->salon->photo) }}" alt="Foto del salón">
                            @else
                                No hay salón asociado
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="section">
        <h2>Sucursales</h2><button><a href="añadir">Añadir nueva sucursal</a></button>
        <div class="abajito">
            @foreach ($photos as $photo)
            <div class="contenido-abajito">
                <div class="pic"><img src="{{ asset('salones/' . $photo->getFilename()) }}" class="foto"></div>
                <div class="primer-texto">
                    <h1>{{ $photo->getFilename() }}</h1>
                    <!-- Aquí puedes agregar la descripción del salón si tienes esa información -->
                    <h2>Capacidad Max. | 500 <img src="svg/group.svg"></h2>
                    <h2>Desde $175,000 Mxn</h2>
                    <button type="submit" id="boton"><a href="salon_reservado">Reservar</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="section">
        <h2>Disponibilidad</h2>
        <div class="datos">
            <img src="img/calendario.png" class="foto">
        </div>
    </div>
</div>  
@endsection
