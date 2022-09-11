<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

   
    public function empleado()
    {
        return view('empleado');
    }

  
 
}
