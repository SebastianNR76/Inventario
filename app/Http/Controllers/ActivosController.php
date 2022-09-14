<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;


class ActivosController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function index(){
   
        $datos['Activos'] = Activo::paginate(15); //Mostrar paginacion de 10 datos
        return view('activo.index', $datos);
       
    }

/*     
    public function index(){
   
        return view('activo.index');
    }
**/
    public function create(){
   
        return view('activo.create');
    }

    
    public function store(Request $request){

        // $Activos = $request->all();
  
        // $Activos = $request->except('_token'); // No enviar el token
  
         // Activo::insert($Activos); // Insertar datos en el modelo, Pirmero MODELO inserta lo que la variable recibe
  
          //return response()->json($Activos); // 

        //  return redirect('Activos')->with('mensaje','Activo agregado con éxito');

          $campos = [
            'PlacaASW'=>'required|string|max:100'
            ,
            'Modelo'=>'required|string|max:100'
            ,
            'Marca'=>'required|string|max:100'
            ,
            'Tipo'=>'required|string|max:100'
            ,
            'SerialFabricante'=>'required|string|max:100'
            ,
            'FechaIngreso'=>'required|string|max:100'
            ,
            'Estado'=>'required|string|max:100'

            ];
            $mensaje = [
            'required'=>'El :attribute es requerido'   
            ,
            ];
            $this->validate($request, $campos, $mensaje);
           
           
  
      }

      public function edit($id){

        $Activos = Activo::findOrFail($id);
        return view ('activo.edit' , compact('Activos')); // retorna vista de edicion
    }
    
    public function update(Request $request, $id){

        $Activos = request()->except(['_token', '_method']); // No recepciona token y método
        Activo::where('id', '=',$id)->update($Activos); // actualiza los datos del Modelo Activo 
        $Activos = Activo::findOrFail($id); // Recupera la información
        return view('activo.edit', compact('Activos')); // Envia al formulario con los datos actualizados
       
    
    }


    public function destroy($id){

        Activo::destroy($id);
        return redirect ('Activos');
    }








    
}
