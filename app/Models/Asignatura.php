<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignatura';

    protected $fillable = [
        'nombre',
        'codigo',
        'cantidad_de_creditos',
        'plan_id',
        'ciclo',
        'tipo_id'
    ];

    public $timestamps = false;

    public function asignaturas_aperturadas()
    {
        return $this->hasMany(AsignaturaAperturada::class, 'asignatura_id');
    }

    public function plan_estudio()
    {
        return $this->belongsTo(PlanEstudio::class, 'plan_id');
    }

    public function tipo_asignatura()
    {
        return $this->belongsTo(TipoAsignatura::class, 'tipo_id');
    }

    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}
