<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/luciernaga.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="conteiner">
        <a href="inicio"><img src="svg/left-arrow.svg" alt="Icono" class="icon"></a>
        <div class="amigui">
            <div class="form">
                <div class="contenido-form">
                    <div class="este">
                    <h1>Iniciar sesión</h1>
                        <form action="{{ route('validate')}}" method="POST">
                        @csrf
                            <label for="email">Ingrese su correo</label>
                            <br>
                            <br>
                            <input type="email" name="email" id="email" placeholder="sucorreo@electronico" value="{{ old('email')}}">
                            <br>
                            <br>
                            <br>
                            <label for="password">Ingrese su contraseña</label>
                            <br>
                            <br>
                            <input type="password" name="password" id="password" value="{{ old('password')}}">
                            <br>
                            <br>
                            <button type="submit" class="botoncito" id="password_confirmation">Entrar</button>
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