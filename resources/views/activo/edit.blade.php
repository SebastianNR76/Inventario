@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/Activos/'. $Activos->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}

    @include('activo.form',['modo'=>'Editar'])

</form>
 
</div>
@endsection