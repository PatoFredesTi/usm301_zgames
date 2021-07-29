<?php

namespace App\Http\Controllers;
use App\Models\Consola;
use Illuminate\Http\Request;

//Aqui va a ir toda la logica vinculada a las consolas
class ConsolasController extends Controller
{
    //Tecnicamente esto deberia ir en un controlador de marcas
    public function getMarcas(){
       // $marcas = ["Sony","Microsoft","Nintendo","Sega"]    //asi se definen las variables en php
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";

        return $marcas;
    }

    /*
    Esta Funcion va a ir a buscar todas las consolas que existen en la bd y las va a retornar
     */
    public function getConsolas(){
        //Equivalente a un select * form consola
        $consolas = Consola::all();
        return $consolas;
    }

    /*
    Esta funcion va a registrar una consola de ejemplo en la bd 
    Una request es un objeto php que permite acceder a las cosas que me mandaron
    desde la interfaz (desde el formulario)
    CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
    */
    //Este es el codigo para la creacion de un elemento !!!!!!!!!!!!!!!!!!!!!!
    public function crearConsola(Request $request){
        //Equivalente a un insert into blablabla
        $input = $request->all();
        //Genera un arreglo con todo lo que mando la interfaz
        //Cuando hablo de interfaz, hablo de javascript
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();
        return $consola;
    }

    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de laravel se llama Eloquent
        //1. Ir a buscar el registro a la BD
        //$consola = App\Models\Consola::findOrFail(2)
        $consola = Consola::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $consola->delete(); //DELEFET FROM consolas WHERE id=1
        return "ok";

    }

}
//vista
//view productos.blade.php 
//renderiza los productos

//controlador
//ProductosController:
    //-ir a buscar los productos a la bd
    //-los filtra por los disponibles
    //-formatea el precio
    //retorna lista de productos procesados