 <!-- INCLUDES-->

@include('includes.header')


 <!-- IMPRIMIR POR PANTALLA-->
<!-- <h1><?=$titulo?></h1>
ESTO ES LA MANERA ANTIGUA EN LA QUE DEBIA IMPRIMIR CON PANTALLA, PERO CON ESTE FRAMEWORK YA NO ES NECESARIO
IMPRIMIR DE ESTA FORMA
<h2><?=$listado[1]?></h2> -->

<h1>{{$titulo}}</h1>
<h2>{{$listado[1]}}</h2>
<h3>{{date('Y')}}</h3>

 <!-- COMENTARIOS-->
{{-- Esto es un comentario cualquiera dentro de BLADE --}}

 <!-- MOSTRAR SI EXISTE-->
<!-- <?= isset($director) ? $director : 'No existe el Director';?> ANTES DEBIA DE DECIR ASI PARA SABER SI EXISTIA UNA VARIABLE O NO-->
{{ $director ?? 'No existe el Director que buscas'}} <!-- ?? Significa OR-->

<!-- CONDICIONALES-->
@if($titulo)
    <h1>El titulo existe y es este: {{$titulo}}</h1>
@else
    <h1>El titulo NO existe</h1>
@endif

<!-- BUCLES-->

@for($i=0;$i < 10;$i++)
    <p>{{$i}}</p>
@endfor


<?php $contador=100?>
@while($contador < 110)
    <p>{{$contador}}</p>
    <?php $contador++;?>
@endwhile

@foreach($listado as $list)
    <h5>{{$list}}</h5>
@endforeach

@include('includes.footer')