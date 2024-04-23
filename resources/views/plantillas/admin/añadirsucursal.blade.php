@extends('main-admin')

@section('titulado')

<div class="contenido-añadir">
    <div class="section-añadir">
        <h1>Formulario de Registro</h1>
    <form action="nuevoSalon" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="tittle">Título:</label><br>
            <input type="text" id="title" name="tittle" required>
        </div>
        <div>
            <label for="description">Descripción:</label><br>
            <textarea id="descripcion" name="description" rows="4" cols="50" required></textarea>
        </div>
        <div>
            <label for="capacity">Capacidad:</label><br>
            <input type="number" id="capacity" name="capacity" required>
        </div>
        <div>
            <label for="price">Precio:</label><br>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="photo">Foto</label>
            <input type="file" name="photo" id="" accept="salones/*">
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>

    </div>
</div>


@endsection
