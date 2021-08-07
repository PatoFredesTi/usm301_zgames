<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
    public function consola(){
        return $this->belongsTo("App\Models\Consola","consola_id");
    }
}


//ASI SE CREA UNA RELACION ENTRE 2 TABLAS en LARAVEL 

