<form action="{{url('/guarda')}}" method="POST">
{{csrf_field()}}

<label for="name">Nombre:</label>
<input type="text" name="name">

<label for="email">Email:</label>
<input type="email" name="email">

<input type="submit" value="Enviar">

</form>