<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //HACE REFERENCIA A LA TABLA
    protected $table = 'movies';

    //QUE CAMPOS SOLO ESTAN PERMITIDOS PARA LLENAR
    protected $fillable = [
    	'id','pelicula', 'categoria', 'descripcion', 'director', 'fecha', 'url', 'img'
    ];
}
