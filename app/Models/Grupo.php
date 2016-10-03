<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';

    protected $fillable = [
        'numero_grupo',
        'asignatura_aperturada_id',
        'docente_id',
    ];

    public $timestamps = false;

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'grupo_id');
    }
}
