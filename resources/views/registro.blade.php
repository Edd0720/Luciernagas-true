<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/luciernaga.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="conteiner">
        <a href="inicio"><img src="svg/left-arrow.svg" alt="Icono" class="icon"></a>
        <div class="amigui">
            <div class="form">
                <div class="contenido-form">
                    <div class="hola">
                    <h1>Registrarse</h1>
                    <br>
                        <form action="{{route('insert')}}" method="POST">
                            @csrf
                            <label for="name">Ingrese su nombre</label>
                            <br>
                            <br>
                            <input id="name" name="name" placeholder="Nombre completo" value="{{old('name')}}">
                            <br>
                            <div class="errormsg">
                                @error('name')
                                  {{$message}}
                                @enderror
                            </div>
                            <br>
                            <label for="lastname">Ingrese sus apellidos</label>
                            <br>             
                            <br>
                            <input id="lastaname" name="lastname" placeholder="Apellidos" value="{{old('lastname')}}">
                            <br>
                            <div class="errormsg">
                                @error('lastname')
                                  {{$message}}
                                @enderror
                            </div>
                            <br>   
                            <br>
                            <label for="email">Ingrese su correo</label>
                            <br>
                            <br>
                            <input type="email" name="email" id="email" placeholder="sucorreo@electronico" value="{{old('email')}}">
                            <br>
                            <div class="errormsg">
                                @error('email')
                                  {{$message}}
                                @enderror
                            </div>   
                            <br>
                            <label for="phone">Ingrese un su número personal</label>
                            <br>
                            <br>
                            <input type="text" name="phone" id="phone" placeholder="123-456-7890" value="{{old('phone')}}">
                            <br>
                            <div class="errormsg">
                                @error('phone')
                                  {{$message}}
                                @enderror
                            </div>   
                            <br>
                            <label for="password">Ingrese su contraseña</label>
                            <br>
                            <br>
                            <input type="password" name="password" id="password" value="{{old('password')}}">
                            <br>
                            <div class="errormsg">
                                @error('password')
                                  {{$message}}
                                @enderror
                            </div>  
                            <br> 
                            <label for="recontraseña">Vuelva a ingresar su contraseña</label>
                            <br>
                            <br>
                            <input type="password" name="recontraseña" id="recontraseña" value="{{old('recontraseña')}}">
                            <br>
                            <div class="errormsg">
                                @error('recontraseña')
                                  {{$message}}
                                @enderror
                            </div>   
                            <br>
                            <button type="submit" class="botoncito" value="Enviar"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ejemplito">
                <div class="luciernaga">
                    <img src="img/luciernaga.png" class="luci">
                </div>
                <ul>
                    <li><img src="img/salon-6.jpg" class="salon1"></li>
                    <li><img src="img/salon-5.jpeg" class="salon2"></li>
                    <li><img src="img/salon-4.jpeg" class="salon3"></li>
                    <li><img src="img/salon-3.jpg" class="salon4"></li>
                </ul>   
            </div>
        </div>
    </div>
</body>
</html>
