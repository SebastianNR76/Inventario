@extends('layouts.layout')
@section('activo')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
<body background-color #fff; >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
            <div  class=" text-center alling-items-center justify-content-center">
            <h1 >¡Bienvenido a Inventario ASW!</h1>
            </div>

    <nav class="navbar navbar-light bg-main">
            <div class="container p-4">
                <a class="navbar-brand m-auto" href="#">
                    <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy">
                </a>
            </div>
        </nav>
    <div class=" text-center alling-items-center justify-content-center">
        <a sys_getloadavg href="http://127.0.0.1:8000/Activos"class="btn btn-info" >Ir a los activos</a>
    <a href="http://127.0.0.1:8000/home" class="btn btn-secondary">Ir al home</a>
    
    <a href="{{url('empleado/index')}}"class="btn btn-primary"> Ir a Empleados</a>

        </div>


    
</body>
</html>
@endsection