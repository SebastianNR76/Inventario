@extends('layouts.layout')
@section('activo')
<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activos</title>
</head>
<body>
<div  class=" text-center alling-items-center justify-content-center">
<h1>EMPLEADOS ASW</h1>
</div>



    
<a href="{{url('empleado/create')}} " class= "btn btn-success"> Añadir nuevo empleado </a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Numero Cedula</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Equipo Asignado</th>
            <th>Accion</th>
        </tr>
    </thead>

 <tbody>
        @foreach($Empleados as $Empleados)
        <tr>
            <td>{{$Empleados-> id}}</td>
            <td>{{$Empleados-> Usuario}}</td>
            <td>{{$Empleados-> NumeroCedula}}</td>
            <td>{{$Empleados-> Apellido}}</td>
            <td>{{$Empleados-> Nombre}}</td>
            <td>{{$Empleados-> Cargo}}</td>
            <td>{{$Empleados-> EquipoAsignado}}</td>
            <td>{{$Empleados-> FechaIngreso}}</td>
         
            <td> <a href="{{ url('/Empleados/'.$Empleados->id.'/edit') }}" class= "btn btn-warning">Editar</a> |

            <form action="{{ url('/Empleados/'.$Empleados->id) }}" class="d-inline" method="post">
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
<a href="{{url('/Activos')}}" class="btn btn-info"> Ir Activos </a>

</body>
</html>
</div>
@endsection

