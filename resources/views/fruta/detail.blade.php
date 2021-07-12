<h1>{{$fruta->nombre}}</h1>
<p>{{$fruta->descripcion}}</p>
<h4>{{$fruta->precio}}</h4>

<a href="{{url('frutas/delete/'.$fruta->id)}}">Eliminar</a>
<a href="{{url('frutas/edit/'.$fruta->id)}}">Actualizar</a>