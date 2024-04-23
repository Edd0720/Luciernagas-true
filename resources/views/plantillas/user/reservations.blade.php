@extends('perfil')


@section('titulo')

<H1>Reservar un salón</H1>


<div class="contenido-reservas">
    <form action="">
        <label for=""> Escoje la fecha</label>
        <input type="date">
        <label for="">Escoje tu sucursal</label>
        <input type="text">
        <button type="submit"><a href="">Buscar</a></button>
    </form>
</div>

<div class="abajito">
    <div class="contenido-abajito">
            <div class="pic"><img src="img/salon-6.jpg" class="foto"></div>
            <div class="primer-texto">
                <h1>Salón Es Belle</h1>
                <br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius neque officiis recusandae, laborum reiciendis sequi cumque numquam placeat, inventore iusto deserunt dignissimos exercitationem pariatur dicta ipsa aspernatur temporibus consequuntur impedit.
                <h2>Capacidad Max. | 500 <img src="svg/group.svg"></h2>
                <h2>Desde $175,000 Mxn</h2>
                <button type="submit" id="boton"><a href="salon_reservado">Reservar</a></button>

            </div>
    </div>
    <div class="contenido-abajito">
        <div class="pic"><img src="img/salon-5.jpeg" class="foto"></div>
        <div class="primer-texto">
            <h1>Salón Evergreen</h1>
            <br>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius neque officiis recusandae, laborum reiciendis sequi cumque numquam placeat, inventore iusto deserunt dignissimos exercitationem pariatur dicta ipsa aspernatur temporibus consequuntur impedit.
            <h2>Capacidad Max. | 400 <img src="svg/group.svg"></h2>
            <h2>Desde $160,000 Mxn</h2>
            <button type="submit" id="boton"><a href="salon_reservado">Reservar</a></button>
        </div>
    </div>
    <div class="contenido-abajito">
        <div class="pic"><img src="img/salon-4.jpeg" class="foto"></div>
        <div class="primer-texto">
            <h1>Salón Las Luciernagas</h1>
            <br>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius neque officiis recusandae, laborum reiciendis sequi cumque numquam placeat, inventore iusto deserunt dignissimos exercitationem pariatur dicta ipsa aspernatur temporibus consequuntur impedit.
            <h2>Capacidad Max. | 700 <img src="svg/group.svg"></h2>
            <h2>Desde $260,000 Mxn</h2>
            <button type="submit" id="boton"><a href="salon_reservado">Reservar</a></button>
        </div>
    </div>
</div>
<br>
<br>
<div class="datos">
    <h1>Datos del usuario</h1>
    <h5>Ingresa el nombre de la persona que se reservará el salón tal y como aparece en la identificación oficial que presentará al llegar. Si el cliente tiene más de un apellido, ingrésalos todos.</h5>
    <br>
    <br>
    <div class="formulario">
        <form action="">
        <label for="">Nombre</label>
        <h5>Ingrese su nombre completo</h5>
        <br>
        <input type="text" placeholder="ingrese su nombre">
        <br>
        <br>
        <label for="">Apellidos</label>
        <br>
        <br>
        <input type="text">
        <br>
        <br>
        <label for="">Ingrese un numero de telefono</label>
        <h5>Proporcione un numero con el cual nuestro equipo se pondrá en contacto</h5>
        <br>
        <input type="text">
        <br>
        <br>
        <label for="">Ingrese un correo electronico</label>
        <br>
        <br>
        <input type="text">
        </form>
    </div>
    
</div>
<br>
<br>
<div class="datos">
    <h1>Consulte fechas disponibles en nuestro calendario</h1>
    <img src="img/calendario.png" class="foto">
</div>
<br>
<br>
<div class="datos-1">
    <div class="contenido-primero">
        <h1>Información de la reservación</h1>
        <br>
        <label for="">Datos del usuario</label>
        <br>
        <h2>Eduardo Castro</h2>
        <br>
        <label for="">Correo</label>
        <br>
        <h2>edd.cazj0420@gmail.com</h2>
    </div>
    <div class="contenido-segundo">
        <div class="cartita" >
            <div class="foto-principal">
               <a href="login"><img src="img/salon-4.jpeg" class="fila-fotos"></a>
            </div>
            <div class="contexto">
               <h1>Las Luciernagas</h1>
               <h2>Capacidad Max. | 700 <img src="svg/group.svg"></h2>
               <h1>Desde $260,000 Mxn</h1>
            </div>
        </div>
    </div>
</div>
<div class="pago">
    <br>
    <h1>Pagar con</h1>
    <br>
    <a href="profile"><img src="img/paypal-button.png" class="boton-paypal"></a>
</div>
<br>
<br>
<br>

@endsection