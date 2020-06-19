<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulantePregunta extends Model
{
    //
    public $fillable = [
        'pregunta_id','postulante_id','value','text_value'
    ];
}
