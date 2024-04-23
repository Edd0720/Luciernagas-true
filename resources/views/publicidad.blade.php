<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/publish.css">
    <title>Publicidad</title>
</head>
<body>
    <div class="contenido">
        <header>
            <nav class="menu">
            <div class="datos">
                <a href="inicio"><img src="{{ asset("img/firefly.png") }}" class="firefly-icon"></a>
                
            </div>     
            <ul>     
                <li><a href="publicidad"></a></li>
                <li><a href="login">Iniciar sesion</a></li>
                <li><a href="registro">Registrarse</a></li>
            </ul>
            </nav>
        </header>
        <div class="carrusel">
            <div class="foto-fondo">
                <img src="img/salon-muy-big.jpg" class="salon">
            </div>
            <div class="imagenes-carrusel">
                <div class="movimiento">
                    <ul>
                        <li><img src="img/salon-6.jpg" class="salon1"></li>
                        <li><img src="img/salon-5.jpeg" class="salon2"></li>
                        <li><img src="img/salon-4.jpeg" class="salon3"></li>
                        <li><img src="img/salon-3.jpg" class="salon4"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="texto1">
            ¡Visita nuestras sucursales!
        </div>
        <div class="demas-contenido">
            <div class="sucursales">
                <div class="sucursales-tarjeta">
                    <div class="frase">
                        <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}PERIFERICO</span></h1>
                    </div>
                    <img src="img/salon-6.jpg" class="imagen-tarjeta">
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A quidem fugiat similique quaerat numquam alias quas sed aut dolorum natus fugit esse corporis ullam incidunt nihil, ipsam consequuntur perferendis earum!
                </div>
                <div class="sucursales-tarjeta 2">
                    <div class="frase">
                        <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}PARRILLA</span></h1>
                    </div>
                    <img src="img/salon-4.jpeg" class="imagen-tarjeta">
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae quidem, harum, non corporis iste impedit perferendis quia repellendus eligendi beatae enim, explicabo quos? Corporis quasi temporibus, eligendi ratione consectetur commodi?
                </div>
                <div class="sucursales-tarjeta 3">
                    <div class="frase">
                        <h1><span style="color: black">Sucursal de </span><span style="font-family: var(--Oswald-font); font-weight:bold">{{-- {{$nombre_sucursal}} --}}CENTRO</span></h1>
                    </div>
                    <img src="img/salon-1.jpeg" class="imagen-tarjeta">
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ipsum sed beatae vel corrupti itaque iure tempora tenetur, nesciunt saepe a laborum quae aspernatur hic recusandae assumenda excepturi minus aut.
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="patas">
           <div class="cajonera-patas">
              <div class="contenido-pata1">
                 Dirección
                 <br>
                 Villahermosa, Centro, Tabasco
              </div>
              <div class="contenido-pata2">
                 Correo:
                 <br>
                 uncorreo@quiensabe.com
              </div>
           </div>
        </div>
     </footer>
</body>
</html>