@if(count($errors)>0) 
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-center">
<h1 text-align: center>{{$modo}} Activo</h1>
</div>
<div class="form-group">
    <label for="PlacaASW">Placa ASW</label>
    <input class="form-control" type="text" name="PlacaASW" value="{{isset($Activos->PlacaASW)?$Activos->PlacaASW:old('PlacaASW')}}" >
    <br>
</div>   

   
        <label for="Modelo">Modelo</label>
        <input class="form-control" type="text" name="Modelo"  value="{{isset($Activos->Modelo)?$Activos->Modelo:old('Modelo')}}" >

        <br>
 

<div class="form-group">
    <label for="Marca">Marca</label>
    <input class="form-control" type="text" name="Marca" value="{{isset($Activos->Marca)?$Activos->Marca:old('Marca')}}">

    <br>
</div>


<div class="form-group">
    <label for="Tipo">Tipo</label>
    <input class="form-control" type="text" name="Tipo" value="{{isset($Activos->Tipo)?$Activos->Tipo:old('Tipo')}}">
    <br>

</div>
   

<div class="form-group">
    <label for="SerialFabricante">Serial Fabricante</label>
    <input class="form-control" type="text" name="SerialFabricante" value="{{isset($Activos->SerialFabricante)?$Activos->SerialFabricante:old('SerialFabricante')}}">
    <br>

</div>
    
<div class="form-group">    
    <label for="FechaIngreso">Fecha Ingreso</label>
    <input class="form-control" type="text" name="FechaIngreso"  value="{{isset($Activos->FechaIngreso)?$Activos->FechaIngreso:old('FechaIngreso')}}">
    <br>

    </div>


    <label for="Estado">Estado</label>
    <input class="form-control"type="text" name="Estado"   value="{{isset($Activos->Estado)?$Activos->Estado:old('Estado')}}">
    <br>

    </div>
    <br>

    <div class="d-flex justify-content-center">
        <input type="submit" class= "btn btn-success" value="{{$modo}} Activo " >
</br>

        <a href="{{url('Activos/')}}"class="btn btn-primary"> Regresar </a>
    </div>
