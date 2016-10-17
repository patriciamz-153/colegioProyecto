<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';

    protected $fillable = [
        'nota',
    ];

    public $timestamps = false;

    public function evaluaciones()
    {
        return $this->belongsToMany(Evaluacion::class, 'evaluacion_x_matricula', 'matricula_id', 'evaluacion_id')
                    ->withPivot(['nota']);
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }

    public function getCodigoAlumnoAttribute()
    {
        return $this->alumno->codigo;
    }

    public function getNotaAttribute()
    {
        return $this->pivot->nota;
    }
}
