@extends('layouts.layout')
@section('activo')
<div class="container">

        <nav class="navbar navbar-light bg-main">
         
                
             
         </nav>

    <div  class=" text-center alling-items-center justify-content-center">
    <h1>ACTIVOS ASW</h1>
    </div>

<a href="{{url('activo/create')}} " class= "btn btn-success"> Ingresar nuevo activo </a>
</br>
</br>
<table class="table table-light">
<thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>PlacaASW</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Serial Fabricante</th>
            <th>Fecha Ingreso<br> (D/M/A)</th>
            <th>Estado</th>
            <th>Accion</th>
        </tr>
    </thead>

    <tbody>

        @foreach($Activos as $Activos)
        <tr>
            <td>{{$Activos-> id}}</td>
            <td>{{$Activos-> PlacaASW}}</td>
            <td>{{$Activos-> Modelo}}</td>
            <td>{{$Activos-> Marca}}</td>
            <td>{{$Activos-> Tipo}}</td>
            <td>{{$Activos-> SerialFabricante}}</td>
            <td>{{$Activos-> FechaIngreso}}</td>
            <td>{{$Activos-> Estado}}</td>

            <td> <a href="{{ url('/Activos/'.$Activos->id.'/edit') }}" class= "btn btn-warning">Editar</a> |

                <form action="{{ url('/Activos/'.$Activos->id) }}" class= "d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                     <input class= "btn btn-danger" type="submit" onClick="return confirm('¿Estas seguro?')" value="Borrar">
                </form>
            </td>
        </tr>
         @endforeach
    </tbody>
</table>
<a href="{{url('home/')}}" class="btn btn-secondary"> Ir al home </a>
<a href="{{url('empleado/index')}}" class="btn btn-primary"> Ir Empleados </a>

</div>
@endsection