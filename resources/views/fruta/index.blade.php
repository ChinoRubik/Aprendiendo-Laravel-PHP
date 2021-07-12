<h1>LISTADO DE MIS FRUTAS</h1>

<a href="{{url('frutas/agregar')}}">Agregar frutas</a>

@if(session('status'))
    <p>{{session('status')}}</p>
@endif

<ul>
    @foreach($frutas as $fru)

        <a href="{{url('frutas/detail/'.$fru->id)}}"><li>{{$fru->nombre}}</li></a>
    @endforeach
</ul>