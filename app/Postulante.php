<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    //
    protected $fillable = ['ci','nombre','apellido', 'sexo','fecha_nac','nacionalidad','telefono','vivienda','profesion','lugar_trabajo','nfamilia', 'napte','ingresof','lugar_vivienda','monto_apagar','email',];
}
