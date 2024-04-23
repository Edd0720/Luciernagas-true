<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/app.css">
   <link rel="icon" href="img/luciernaga.png">
   <title>{{$titulo}}</title>
</head>
<body>
   <div class="salon-2">
      <div class="amigos">
         <nav class="menu">
            <div class="datos">
               <img src="{{ asset("img/firefly.png") }}" class="firefly-icon">
               <a href="">| +52 933 137 4753</a>
            </div>     
            <ul>     
               <li><a href="login">Reservar</a></li>
               <li><a href="registro">Registrarse</a></li>
            </ul>
         </nav>
            <div class="texto-encima">
               <div class="texto1">
                  <h1>Luciernagas Hall</h1> 
                  <h2>Los mejores salones de eventos en la ciudad</h2>
               </div>
               <div class="buscador">
                  <img src="svg/search.svg">
                  <input type="search" class="buscar" placeholder="Buscar...">
                  <button class="buscar-boton">Buscar</button>
               </div>       
            </div>
      </div>
      <img class="salon" src="img/salon-2.jpg" alt="">
   </div>
   <div class="titulo1">Los mejores salones para tus eventos</div>
   <div class="info">
      <div class="flechas">
         <div><img src="svg/flecha-circular.svg" class="flecha"></div>
         <div><img src="svg/flecha-derecha.svg" class="flecha"></div>
      </div>
      <div class="contenido-info">
         <div class="cartita" >
            <div class="foto-principal">
               <a href="login"><img src="img/salon-1.jpeg" class="fila-fotos"></a>
            </div>
            <div class="contexto">
               <h1>Hacienda Luz del Alba</h1>
               <h2>Capacidad Max. | 400 <img src="svg/group.svg"></h2>
               <br>
               <h1>Desde $100,000 Mxn</h1>
            </div>
         </div>
         {{-- @foreach ($collection as $item) --}}
         {{-- <table class="tablita">
            <thead>
               <th>
               </th>
               <th>columna 2</th>
               <th>columna 3</th>
               <th>columna 4</th>
            </thead>
            <tbody>
               
            </tbody>
         </table> --}}
            {{-- <div class="cartita" >
               <div class="foto-principal">
                  <a href="login"><img src="img/salon-2.jpg" class="fila-fotos"></a>
               </div>
               <div class="contexto">
                  <h1>Quinta Más Allá</h1>
                  <h2>Capacidad Max. | 600 <img src="svg/group.svg"></h2>
                  <br>
                  <h1>Desde $200,000 Mxn</h1>
               </div>
            </div> --}}
            <div class="cartita" >
               <div class="foto-principal">
                  <a href="login"><img src="img/salon-3.jpg" class="fila-fotos"></a>
               </div>
               <div class="contexto">
                  <h1>Hacienda Martínez Limoncello</h1>
                  <h2>Capacidad Max. | 500 <img src="svg/group.svg"></h2>
                  <br>
                  <h1>Desde $150,000 Mxn</h1>
               </div>
            </div>
            <div class="cartita" >
               <div class="foto-principal">
                  <a href="login"><img src="img/salon-4.jpeg" class="fila-fotos"></a>
               </div>
               <div class="contexto">
                  <h1>Los hermanos</h1>
                  <h2>Capacidad Max. | 500 <img src="svg/group.svg"></h2>
                  <br>
                  <h1>Desde $175,000 Mxn</h1>
               </div>
            </div>
            {{-- FIN DE LAS TARJETAS, DEBAJO DE ESTE CODIGO ESTÁ EL BUCLE --}}
         {{-- @endforeach --}}
         {{-- 
         <img src="img/salon-2.jpg" alt="">
         <img src="img/salon-3.jpg" alt=""> --}}
      </div>
   </div> 
   <div class="anuncio"><h1>Disfruta el lugar y el momento</h1></div>
   <div class="cajonera-mayor">
      <div class="cajonera">
         <div class="contenido3">
            <img src="img/salon-3.jpg" class="salonsito">
         </div>
         <div class="contenido4">
            <div class="titulo2">Bodas</div>
            <div class="fiesta">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
               exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
               in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
               cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem 
               aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
               Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
               dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit 
               amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam 
               aliquam quaerat voluptatem. 
               </div>
         </div>
      </div>
      <div class="cajonera2">
         <div class="contenido5">
            <div class="titulo2">Fiestas de cumpleaños</div>
            <div class="fiesta">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
               exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
               in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
               cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem 
               aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
               Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
               dolores eos qui ratione voluptatem sequi nesciunt. 
               </div>
         </div>
         <div class="contenido6">
            <img src="img/salon-1.jpeg" class="salon-bello">
         </div>
      </div>
      <div class="cajonera3">
         <div class="contenido7">
            <img src="img/salon-4.jpeg" class="convivio">
         </div>
         <div class="contenido8">
            <div class="titulo2">Reuniones</div>
            <div class="fiesta">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
               incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
               exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
               in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
               cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem 
               aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
               Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
               dolores eos qui ratione voluptatem sequi nesciunt. 
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
</div>
</body>
</html>