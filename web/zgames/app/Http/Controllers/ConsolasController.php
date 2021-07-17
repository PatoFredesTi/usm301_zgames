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
    TODO: Mejorar esto para que no sea un ejemplo
    */
    public function crearConsola(){
        //Equivalente a un insert into blablabla
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anio = 2015;

        $consola->save();
        return $consola;
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