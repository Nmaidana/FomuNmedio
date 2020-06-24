<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    //
    protected $fillable = ['ci','nombre','apellido', 'sexo','fecha_nac','nacionalidad','celular','email','vivienda_actual','trab_nombre','trab_direccion', 'integrante_fliar','numero_aport','ingreso_fliar','vivienda_deseada','cantidad_dor',];
}
