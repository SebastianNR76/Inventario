<div class="d-flex justify-content-center">
<h1 text-align: center>{{$modo}} Activo</h1>
</div>
<div class="form-group">
    <label for="PlacaASW">Placa ASW</label>
    <input class="form-control" type="text" name="PlacaASW" value="{{isset($Activos->PlacaASW)?$Activos->PlacaASW:''}}" >
    <br>
</div>   

   
        <label for="Modelo">Modelo</label>
        <input class="form-control" type="text" name="Modelo"  value="{{isset($Activos->Modelo)?$Activos->Modelo:''}}" >

        <br>
 

<div class="form-group">
    <label for="Marca">Marca</label>
    <input class="form-control" type="text" name="Marca" value="{{isset($Activos->Marca)?$Activos->Marca:''}}">

    <br>
</div>


<div class="form-group">
    <label for="Tipo">Tipo</label>
    <input class="form-control" type="text" name="Tipo" value="{{isset($Activos->Tipo)?$Activos->Tipo:''}}">
    <br>

</div>
   

<div class="form-group">
    <label for="SerialFabricante">Serial Fabricante</label>
    <input class="form-control" type="text" name="SerialFabricante" value="{{isset($Activos->SerialFabricante)?$Activos->SerialFabricante:''}}">
    <br>

</div>
    
<div class="form-group">    
    <label for="FechaIngreso">Fecha Ingreso</label>
    <input class="form-control" type="text" name="FechaIngreso"  value="{{isset($Activos->FechaIngreso)?$Activos->FechaIngreso:''}}">
    <br>

    </div>


    <label for="Estado">Estado</label>
    <input class="form-control"type="text" name="Estado"   value="{{isset($Activos->Estado)?$Activos->Estado:''}}">
    <br>

    </div>
    <br>

    <div class="d-flex justify-content-center">
        <input type="submit" class= "btn btn-success" value="{{$modo}} Activo " >
</br>

        <a href="{{url('Activos/')}}"class="btn btn-primary"> Regresar </a>
    </div>
