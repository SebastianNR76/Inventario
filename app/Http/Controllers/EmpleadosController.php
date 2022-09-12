<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

   
    public function index()
    {
       // return view('empleado.index');
        $datos['Empleados'] = Empleado::paginate(15); //Mostrar paginacion de 10 datos
        return view('empleado.index', $datos);
       
    }

    public function create(){
   
        return view('empleado.create');
    }
 
    public function store(Request $request){

        // $datosEmpleados = $request->all();
        // return response()->json($datosEmpleados);
  
        $Empleados = $request->except('_token'); // No enviar el token
         Empleado::insert($Empleados); // Insertar datos en el modelo, Pirmero MODELO inserta lo que la variable recibe
        return response()->json($Empleados); // 

           // return redirect('Empleados')->with('mensaje','Activo agregado con éxito');
  
      }
}
