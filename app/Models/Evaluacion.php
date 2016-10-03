<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';

    protected $fillable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'peso',
        'grupo_id',
        'tipo_id',
    ];

    protected $dates = [
        'fecha',
    ];

    public $timestamps = false;

    public function tipo_evaluacion()
    {
        return $this->belongsTo(TipoEvaluacion::class, 'tipo_id');
    }
}
