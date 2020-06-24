<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulantePregunta extends Model
{
    //
    public $fillable = [
        'pregunta_id','postulante_id','value','text_value'
    ];

    public function postu()
    {
        return $this->belongsTo(\App\Models\Postulante::class, 'postulante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pregunta()
    {
        return $this->belongsTo(\App\Models\Pregunta::class, 'pregunta_id');
    }
}
