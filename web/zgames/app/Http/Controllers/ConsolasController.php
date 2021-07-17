<?php

namespace App\Http\Controllers;

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