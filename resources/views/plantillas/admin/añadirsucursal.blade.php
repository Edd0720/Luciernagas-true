@extends('main-admin')

@section('titulado')

<div class="contenido-añadir">
    <div class="section-añadir">
        <h1>Formulario de Registro</h1>
        <form class="formAñadir" action="nuevoSalon" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="inputs">
                <label for="tittle"><img src="svg/title.svg" alt=""></label><br>
                <input type="text" id="title" name="tittle" placeholder="Título" required>
            </div>
            <div class="inputs">
                <label for="description"><img src="svg/description.svg" alt=""></label><br>
                <textarea id="descripcion" name="description" placeholder="Descripción" required></textarea>
            </div>
            <div class="inputs">
                <label for="capacity"><img src="svg/groups.svg" alt=""></label><br>
                <input type="number" id="capacity" name="capacity" placeholder="Capacidad" required>
            </div>
            <div class="inputs">
                <label for="price"></label><img src="svg/sell.svg" alt=""><br>
                <input type="number" id="price" name="price" step="0.01" placeholder="Precio" required>
            </div>
            <div class="inputs inputImg">
                <label for="photo"><img class="imgA" src="svg/image.svg" alt=""></label>
                <label class="buttonI" for="">Añadir Imagen</label>
                <input type="file" name="photo" id="" accept="salones/*">
            </div>
            <div class="btn">
                <button class="btnText" type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <div class="imgBox">
        <img src="img/shopping.png" alt="">
    </div>
</div>


@endsection
