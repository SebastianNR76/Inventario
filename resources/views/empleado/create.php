<form action="{{url('/empleado/index')}}" method="post">
@csrf
    <label for="Usuario">Usuario</label>
    <input type="text" name="Usuario" id="">
    <br>

    <input type="submit" value="Enviar">


</form>


