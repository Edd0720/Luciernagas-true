@extends('perfil')

@section('titulo')

<div class="titulos">
    <div class="contenido-titulos">
        <div><a href="#">Salones</a></div>
        <div><a href="reservar">Reservar un salon 2</a></div>
        <div></div>
    </div>
</div>

<div class="contenido-amistoso">
    <div class="enemigos">
        <div class="enemigo1">
            Aquí puedes ver tus eventos agendados
        </div>
        <div class="enemigo2">
            <div class="enemy">
                <div class="cartita" >
                <div class="foto-principal">
                   <a href="login"><img src="img/salon-4.jpeg" class="fila-fotos"></a>
                </div>
                <div class="contexto">
                   <h1>Las Luciernagas</h1>
                   <h2>Capacidad Max. | 700 <img src="svg/group.svg"></h2>
                   <h1>Desde $260,000 Mxn</h1>
                   <h1>PAGADO</h1>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection