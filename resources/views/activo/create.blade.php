@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/Activos') }}" method="post" >
   
    @csrf 

    @include('activo.form',['modo'=>'Crear'])
 
</div>
@endsection