<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    protected $table = 'tipo_evaluacion';

    protected $fillable = [
        'nombre',
    ];

    public $timestamps = false;

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
