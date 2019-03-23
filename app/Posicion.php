<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    protected $table = 'posicion';
    protected $fillable = ['empresa', 'titulo', 'descripcion','cantidad_depersonas','limite_de_aplicantes','activa'];
}