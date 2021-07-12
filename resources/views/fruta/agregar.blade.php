@if(isset($fruta))
    <h1>EDITA LA FRUTA</h1>
@else
    <h1>AGREGA UNA FRUTA</h1>
@endif

<form action="{{isset($fruta) ? url('frutas/update') : url('frutas/save')}}" method="POST">
{{csrf_field()}}

<input type="hidden" name='id' value="{{isset($fruta) ? $fruta->id : ''}}">


<label for="name">Nombre:</label><br>
<input type="text" name='name' value="{{isset($fruta) ? $fruta->nombre : ''}}">

<label for="desc">Descripcion:</label><br>
<textarea name="desc" cols="30" rows="10" >{{isset($fruta) ? $fruta->descripcion : ''}}</textarea>

<label for="price">precio:</label><br>
<input type="number" name='price' value="{{isset($fruta) ? $fruta->precio : 0}}">

<input type="submit" value='Enviar'>

</form>