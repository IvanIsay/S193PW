<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    
   /*  usamos este contralador para administrar la logica de las vistas */
   
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(Request $peticion)
    {
     
        // repuestas de redireccion

        //redireccion usando la ruta
        //return redirect('/');

        //redireccion usando el nombre de la ruta
        //return redirect()->route('rutaclientes');

        //redireccion al origen de la peticion
        //return back();


        //redireccion con varible adjunta
        /*$id= [['usuario'=>1],['usuario'=>2]];
        return view('formulario',compact('id')); */


        //redireccion con un mensaje flash en session
        $usuario= $peticion->input('txtnombre');
        
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

}
